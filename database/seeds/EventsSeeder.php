<?php

use App\Models\CalendarEvents;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $competitors = [
            1,
            2,
            3,
            4,
            5,
            6,
        ];

        $events = factory(CalendarEvents::class, 25)->make()->each(function ($event) use ($competitors) {
            $event->competitor_id = $competitors[array_rand($competitors)];
        })->toArray();
        CalendarEvents::insert($events);
    }
}
