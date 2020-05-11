<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(30),
        'description' => $faker->realText(30),
        'text' => $faker->realText(500),
        'date_event' => $faker->dateTimeThisMonth(), // password
    ];
});
