<?php

/** @var Factory $factory */

use App\Models\EmployeeDatas;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(EmployeeDatas::class, function (Faker $faker) {


    return [
        'favorite_activity' => 'хокей, конструктор',
        'favorite_cartoon'  => 'усі',
        'favorite_book'     => 'усі про хоккей',
        'favorite_color'    => 'червоний',
        'most_in_hockey'    => 'закидати шайбу у ворота',
        'about_future'      => 'хокеїстом',
        'dream'             => 'стати відомим хокеїстом',
    ];
});
