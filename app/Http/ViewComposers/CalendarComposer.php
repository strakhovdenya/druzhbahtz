<?php
namespace App\Http\ViewComposers;

use App\Models\Employees;
use App\Models\Teams;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Throwable;

class CalendarComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
//        $currentDay = Carbon::now();
//
//
//
        try {
            $teams  = [];
        } catch (Throwable $e) {
            $teams  = [];
        }

        $view->with('calendar', $teams);
    }
}
