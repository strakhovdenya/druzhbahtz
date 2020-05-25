<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PeriodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carbon = \Illuminate\Support\Carbon::create(2020,3,1);
        $carbon->subMonth();
        for ($i = 1; $i <= 12; $i++) {
            DB::table('periods')->insert([
                'name' => $carbon->addMonth(),
            ]);
        }

    }
}
