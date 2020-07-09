<?php

namespace App\Http\ViewComposers;

use App\Repositories\TeamRepository;
use Illuminate\Contracts\View\View;

class TeamComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $teamsRepository = new TeamRepository();
        $teams           = $teamsRepository->getAll();

        $view->with('teams', $teams);
    }
}
