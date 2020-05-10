<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'description' => $faker->sentence(5),
        'text' => $faker->text(400),
        'date_event' => $faker->dateTimeThisMonth(), // password
    ];
});
