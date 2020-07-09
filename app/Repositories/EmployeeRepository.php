<?php

namespace App\Repositories;

use App\Models\Employees;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
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
     * @return Builder[]|EloquentCollection|Collection
     */
    public function getBornTodayCollection()
    {
        try {
            return Employees::where('born', 'like', '%-' . now()->format('m-d') . '%')->get();
        } catch (Throwable $e) {
            return collect([]);
        }
    }

    public function getBornSoonCollection()
    {
        try {
            $borns =
                Employees::where('born', 'like', '%-' . now()->format('m') . '-%')->orWhere('born', 'like', '%-' . now()->addMonths(1)->format('m') . '-%')->get();

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
     * @param EloquentCollection $teamBase
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
