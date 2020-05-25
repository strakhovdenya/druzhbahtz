<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersSeeder::class);
         $this->call(NewsSeeder::class);
         $this->call(TeamsSeeder::class);
         $this->call(EmployeesSeeder::class);
         $this->call(PeriodsSeeder::class);
         $this->call(TrainingSchedulesSeeder::class);
    }
}
