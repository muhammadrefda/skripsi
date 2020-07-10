<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Chapter::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'subject_id' => \App\Subject::all()->random()->id,
        'grade_id' => \App\Grade::all()->random()->id,
    ];
});
