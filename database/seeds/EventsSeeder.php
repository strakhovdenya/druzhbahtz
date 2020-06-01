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
            'dnepr.png',
            'galecki_lion.jpg',
            'krivbas.jpg',
            'sea_wolf.jpg',
            'shershni.png',
            'sokil.jpg',
            'sokil.jpg',

        ];

        $events =  factory(CalendarEvents::class, 25)->make()->each(function ($event) use ($competitors) {
            $event->image_competitor            = $competitors[array_rand($competitors)];
        })->toArray();
        CalendarEvents::insert($events);
    }
}
