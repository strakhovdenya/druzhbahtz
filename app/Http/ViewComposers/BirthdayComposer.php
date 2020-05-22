<?php


namespace App\Http\ViewComposers;


use App\Models\Employees;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Throwable;

class BirthdayComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        try {
            $bornsToday = Employees::where('born', 'like', '%-' . now()->format('m-d') . '%')->get();
            $borns      =
                Employees::where('born', 'like', '%-' . now()->format('m') . '-%')->orWhere('born', 'like', '%-' . now()->addMonths(1)->format('m') . '-%')->get();

            $matchDateMonthFrom = now()->addDays(1)->format('m-d');
            $matchDateMonthTo   = now()->addDays(7)->format('m-d');
            /** @var Collection $bornsFiltered */

            $bornsFiltered = $borns->filter(static function ($oneEmpl) use ($matchDateMonthTo, $matchDateMonthFrom) {
                $bornDate = Carbon::parse($oneEmpl->born)->format('m-d');
                if ($bornDate <= $matchDateMonthTo && $bornDate >= $matchDateMonthFrom) {
                    return true;
                }

                return false;
            });


            $bornsMonthDate = $bornsFiltered->map(static function ($oneEmpl) {
                $oneEmpl->bornMonthDate = Carbon::parse($oneEmpl->born)->format('m-d');
                $oneEmpl->born          = Carbon::parse($oneEmpl->born)->format('d') . ' ' . Carbon::parse($oneEmpl->born)->getTranslatedMonthName('Do MMMM');

                return $oneEmpl;
            });

            $bornsSort = $bornsMonthDate->sortBy('bornMonthDate');
        } catch (Throwable $e) {
            $bornsSort  = [];
            $bornsToday = [];
        }

        $view->with('borns', $bornsSort)->with('bornsToday', $bornsToday);
    }
}
