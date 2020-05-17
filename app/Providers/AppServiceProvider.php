<?php

namespace App\Providers;

use App\Models\Employees;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Throwable;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('app.blocks.sidebar.left.news', function ($view) {
            try {
                $news = News::orderBy('date_event', 'desc')->take(5)->get();
            } catch (Throwable $e) {
                $news = [];
            }
            $view->with('news', $news);
        });
        view()->composer('app.blocks.sidebar.left.birthday', function ($view) {
            try {
                $bornsToday = Employees::where('born', 'like', '%-' . now()->format('m-d') . '%')->get();
                $borns      =
                    Employees::where('born', 'like', '%-' . now()->format('m') . '-%')->orWhere('born', 'like', '%-' . now()->addMonths(1)->format('m') . '-%')->get();

                $matchDateMonthFrom = now()->addDays(1)->format('m-d');
                $matchDateMonthTo   = now()->addDays(7)->format('m-d');
                /** @var Collection $bornsFiltered */

                $bornsFiltered = $borns->filter(function ($oneEmpl) use ($matchDateMonthTo, $matchDateMonthFrom) {
                    $bornDate = Carbon::parse($oneEmpl->born)->format('m-d');
                    if ($bornDate <= $matchDateMonthTo && $bornDate >= $matchDateMonthFrom) {
                        return true;
                    }

                    return false;
                });


                $bornsMonthDate = $bornsFiltered->map(function ($oneEmpl) {
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
        });
    }
}
