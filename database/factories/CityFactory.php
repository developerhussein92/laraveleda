<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
    return [
        'ar_city_name'=>$faker->name,
        'en_city_name'=>$faker->name
    ];
});
