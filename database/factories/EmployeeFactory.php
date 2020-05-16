<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employees;
use Faker\Generator as Faker;

$factory->define(Employees::class, function (Faker $faker) {

    return [
        'name'=> $faker->name,

    'born'=> $faker->dateTimeBetween('-20 years','-17 years'),
    'start_training'=> $faker->dateTimeBetween('-13 years','-10 years'),
    'game_number'=> $faker->randomNumber(2),
    'place_born'=> $faker->city,
    'place_study'=> $faker->city,

    'height'=> $faker->randomNumber(2),
    'weight'=> $faker->randomNumber(2),
    'image'=>  $faker->image('public/storage/images',480,640, null, false),
    'fav_team'=> $faker->text(15),

    ];
});
