<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employees;
use Faker\Generator as Faker;

$factory->define(Employees::class, function (Faker $faker) {



    return [
        'name'=> $faker->name,

    'born'=> $faker->dateTimeBetween('-20 years','-17 years'),
    'start_training'=> $faker->dateTimeBetween('-13 years','-10 years'),
    'game_number'=> str_pad($faker->randomNumber(2),2,"0",STR_PAD_LEFT),
    'place_born'=> $faker->city,
    'place_study'=> $faker->city,

    'height'=> $faker->randomNumber(2),
    'weight'=> $faker->randomNumber(2),
    'fav_team'=> $faker->text(15),

    ];
});
