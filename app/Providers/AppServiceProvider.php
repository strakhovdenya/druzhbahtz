<?php

namespace App\Providers;

use App\Http\ViewComposers\BirthdayComposer;
use App\Http\ViewComposers\CalendarComposer;
use App\Http\ViewComposers\NewsComposer;
use App\Http\ViewComposers\TeamComposer;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        view()->composer(
            'app.blocks.sidebar.left.news',
            NewsComposer::class
        );

        view()->composer(
            'app.blocks.sidebar.left.birthday',
            BirthdayComposer::class
        );
        view()->composer(
            'app.blocks.nav.index',
            TeamComposer::class
        );
        view()->composer(
            'app.blocks.sidebar.left.calendar',
            CalendarComposer::class
        );

        \Blade::directive('formatToDate', static function ($date) {
            return "<?php echo \Illuminate\Support\Carbon::parse($date)->format('d.m.Y'); ?>";
        });

        \Blade::directive('formatToWeekDay', static function ($date) {
            return "<?php echo \Illuminate\Support\Carbon::parse($date)->getTranslatedShortDayName('dd'); ?>";
        });

        \Blade::directive('formatToHourSMinutes', static function ($date) {

            return "<?php
                 if(empty({$date})){
                        echo '';
                 } else {
                        echo \Illuminate\Support\Carbon::parse({$date})->format('H:i');
                 }
                 ?>";

        });

        \Blade::directive('ifWeekendSetTrRed', static function ($date) {
            return "<?php" .
                "
                        if(in_array(\Illuminate\Support\Carbon::parse({$date})->dayOfWeek,[0,6])){
                            echo '<tr bgcolor=\'#ff6347\'>';
                        } else {
                            echo '<tr>';

                        }
                 ?>";

        });

        \Blade::directive('ifToDay', static function ($date) {
            $now = \Illuminate\Support\Carbon::now()->format('Y-m-d');
            return "<?php
                        if(\Illuminate\Support\Carbon::parse({$date})->format('Y-m-d') === '$now'){
                            echo '<i class=\"fas fa-check\"></i>';
                        }else{
                            echo '';
                        }
                 ?>";

        });

    }
}
