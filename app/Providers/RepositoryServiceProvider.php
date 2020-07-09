<?php

namespace App\Providers;

use App\Repositories\CoachesRepository;
use App\Repositories\EmployeeRepository;
use App\Repositories\FunClubRepository;
use App\Repositories\Interfaces\CoachesRepositoryInterface;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;
use App\Repositories\Interfaces\FunClubRepositoryInterface;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use App\Repositories\Interfaces\PeriodsRepositoryInterface;
use App\Repositories\Interfaces\TrainingSchedulesRepositoryInterface;
use App\Repositories\OrderRepository;
use App\Repositories\PeriodsRepository;
use App\Repositories\TrainingSchedulesRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FunClubRepositoryInterface::class, FunClubRepository::class);

        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);

        $this->app->bind(EmployeeRepositoryInterface::class, EmployeeRepository::class);

        $this->app->bind(PeriodsRepositoryInterface::class, PeriodsRepository::class);

        $this->app->bind(TrainingSchedulesRepositoryInterface::class, TrainingSchedulesRepository::class);

        $this->app->bind(CoachesRepositoryInterface::class, CoachesRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
