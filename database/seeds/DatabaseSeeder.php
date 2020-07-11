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
         $this->call(CompetitorsSeeder::class);
         $this->call(EventsSeeder::class);
         $this->call(CoachesSeeder::class);
         $this->call(FunClubItemsSeeder::class);
         $this->call(GalleryHeadsSeeder ::class);
         $this->call(GalleryItemsSeeder ::class);
    }
}
