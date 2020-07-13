<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Score::class, function (Faker $faker) {
    return [
        'value' => $faker->name,
//        'user_id' => \App\User::all()->random()->id,
//        'dailyTest_id' => \App\DailyTest::all()->random()->id,


    ];
});
