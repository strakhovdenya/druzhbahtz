<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\View\View;
use Throwable;
use function in_array;

class TeamPlayersController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        try {
            $teamBase = Employees::with('team')->get();
            $team     = $this->groupByPosition($teamBase);

        } catch (Throwable $e) {
            $team = collect([]);
        }

        return view('app.team', ['team' => $team]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param $id
     *
     * @return Application|Factory|View
     */
    public function show($id)
    {
        try {
            $teamBase = Employees::whereHas('team', static function ($team) use ($id) {
                $team->where('id', '=', $id);
            })->get();

            $team     = $this->groupByPosition($teamBase);

        } catch (Throwable $e) {
            $team = collect([]);
        }

        return view('app.team', ['team' => $team]);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
