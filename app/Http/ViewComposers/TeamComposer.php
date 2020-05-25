<?php


namespace App\Http\ViewComposers;


use App\Models\Employees;
use App\Models\Teams;
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
            $teams = Teams::all();
        } catch (Throwable $e) {
            $teams  = [];
        }

        $view->with('teams', $teams);
    }
}
