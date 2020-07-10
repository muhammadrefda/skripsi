<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Grade::class, function (Faker $faker) {
    return [

        'name' => $faker->randomElement(['7','8','9']),
    ];
});
