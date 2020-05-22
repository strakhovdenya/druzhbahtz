<?php


namespace App\Http\ViewComposers;


use App\Models\Employees;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Throwable;

class TeamComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        try {
            $teams = Team::all();
        } catch (Throwable $e) {
            $teams  = [];
        }

        $view->with('teams', $teams);
    }
}
