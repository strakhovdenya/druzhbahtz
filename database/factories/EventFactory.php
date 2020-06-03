<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CalendarEvents;
use Faker\Generator as Faker;

$factory->define(CalendarEvents::class, function (Faker $faker) {
    return [
        'title'      => $faker->realText(30),
        'text'       => $faker->realText(400),
        'user_id'    => 1,
        'type_event' => rand(1, 2),
        'date_event' => $faker->dateTimeBetween('2020-05-01', '2020-08-30'),
        'date_add'   => $faker->dateTimeBetween('2020-05-01', '2020-08-30'),
    ];
});
