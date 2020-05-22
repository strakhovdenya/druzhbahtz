<?php

namespace App\Providers;

use App\Http\ViewComposers\BirthdayComposer;
use App\Http\ViewComposers\NewsComposer;
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
    }
}
