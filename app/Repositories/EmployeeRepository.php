<?php

namespace App\Repositories;

use App\Models\Employees;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Throwable;
use function in_array;

class EmployeeRepository implements EmployeeRepositoryInterface
{

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        try {
            $teamBase = Employees::with('team')->get();
            $team     = $this->groupByPosition($teamBase);

        } catch (Throwable $e) {
            $team = collect([]);
        }

        return $team;
    }

    /**
     * @return int|null
     */
    public function getAllCount(): ?int
    {
        try {
            $count = Employees::count();

        } catch (Throwable $e) {
            $count = null;
        }

        return $count;
    }

    /**
     * @param $id
     *
     * @return Collection
     */
    public function showByTeamId($id): Collection
    {
        try {
            $teamBase = Employees::whereHas('team', static function ($team) use ($id) {
                $team->where('id', '=', $id);
            })->get();

            $team = $this->groupByPosition($teamBase);

        } catch (Throwable $e) {
            $team = collect([]);
        }

        return $team;
    }

    /**
     * @param $id
     *
     * @return Employees|Builder|Builder[]|EloquentCollection|Model|null
     */
    public function showOne($id)
    {
        try {
            if ($id !== null) {
                $oneEmployee = Employees::with('employeeDatas')->find($id);
            } else {
                $oneEmployee = new Employees();
            }

        } catch (Throwable $e) {
            $oneEmployee = new Employees();
        }

        return $oneEmployee;
    }

    /**
     * @return Builder[]|EloquentCollection|Collection
     */
    public function getBornTodayCollection()
    {
        try {
            return Employees::where('born', 'like', '%-'.now()->format('m-d').'%')->get();
        } catch (Throwable $e) {
            return collect([]);
        }
    }

    /**
     * @return Collection|null
     */
    public function getTeamWithCountPlayers(): ?Collection
    {
        try {
            $countByTeamId = DB::table('employees')
                ->select('team_id', DB::raw('COUNT(id) as count_employee'))
                ->groupBy('team_id');

            return DB::table('teams')->joinSub($countByTeamId, 'employees_in_team', function ($join) {
                $join->on('teams.id', '=', 'employees_in_team.team_id');
            })->get();

        } catch (Throwable $e) {
            return collect([]);
        }
    }

    public function getBornSoonCollection(): ?Collection
    {
        try {
            $borns =
                Employees::where('born', 'like', '%-'.now()->format('m').'-%')->orWhere('born', 'like', '%-'.now()->addMonths(1)->format('m').'-%')->get();

            $matchDateMonthFrom = now()->addDays(1)->format('m-d');
            $matchDateMonthTo   = now()->addDays(7)->format('m-d');
            /** @var Collection $bornsFiltered */

            $bornsFiltered = $borns->filter(static function ($oneEmpl) use ($matchDateMonthTo, $matchDateMonthFrom) {
                $bornDate = $oneEmpl->born->format('m-d');

                return $bornDate <= $matchDateMonthTo && $bornDate >= $matchDateMonthFrom;
            });

            return $bornsFiltered;
        } catch (Throwable $e) {
            return collect([]);
        }
    }

    /**
     * @param  EloquentCollection  $teamBase
     *
     * @return Collection
     */
    private function groupByPosition(EloquentCollection $teamBase): Collection
    {
        if ($teamBase->count() === 0) {
            return collect([]);
        }
        $playerTypes = [];
        foreach ($teamBase as $onePlayer) {
            if (in_array($onePlayer->position, $playerTypes, true) === false) {
                $playerTypes[] = $onePlayer->position;
            }
        }
        $teamByTypeArr = [];
        foreach ($playerTypes as $oneType) {
            $teamByTypeArr[] = $teamBase->filter(static function ($item) use ($oneType) {
                return $item->position === $oneType;
            });
        }

        return collect($teamByTypeArr);
    }

}
