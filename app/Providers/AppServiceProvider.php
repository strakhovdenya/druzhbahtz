<?php

namespace App\Providers;

use App\Http\ViewComposers\BirthdayComposer;
use App\Http\ViewComposers\NewsComposer;
use App\Http\ViewComposers\TeamComposer;
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

            return "<?php
                        if(in_array(\Illuminate\Support\Carbon::parse({$date})->dayOfWeek,[0,6])){
                            echo '<tr bgcolor=\'#ff6347\'>';
                        } else {
                            echo '<tr>';
                        }
                 ?>";

        });

    }
}
