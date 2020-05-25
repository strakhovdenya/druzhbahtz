<?php

use App\Models\Periods;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TrainingSchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $periods = Periods::all();
        $periods->sortBy('id');

        /** @var App\Models\Periods $period */
        foreach ($periods as $period) {
            $date        = Carbon::parse($period->name);
            $daysInMonth = Carbon::parse($date->startOfMonth())->daysUntil($date->endOfMonth());
            foreach ([true, false] as $isJunior) {
                foreach ($daysInMonth as $day) {
                    $dayClone = clone $day;
                    if (in_array($day->dayOfWeek, [0, 6, 2, 4, 5])) {
                        $iceStart       = clone $dayClone->setHour(20)->setMinutes(30);
                        $iceEnd         = clone $dayClone->setHour(21)->setMinutes(30);
                        $groundStart    = clone $dayClone->setHour(17)->setMinutes(30);
                        $groundEnd      = clone $dayClone->setHour(18)->setMinutes(30);
                        $collectingTime = clone $dayClone->setHour(20)->setMinutes(0);
                        DB::table('training_schedules')->insert([
                            'period_id'        => $period->id,
                            'day'              => $day,
                            'ice_start'        => $iceStart,
                            'ice_end'          => $iceEnd,
                            'ice_place'        => 'Палац Спорту',
                            'ground_start'     => $groundStart,
                            'ground_end'       => $groundEnd,
                            'collecting_time'  => $collectingTime,
                            'collecting_place' => 'Палац Спорту',
                            'is_junior' => $isJunior,
                        ]);
                    } else {
                        DB::table('training_schedules')->insert([
                            'period_id' => $period->id,
                            'day'       => $day,
                            'is_junior' => $isJunior,
                        ]);
                    }
                }
            }
        }
    }
}
