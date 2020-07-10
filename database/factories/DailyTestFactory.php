<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\DailyTest::class, function (Faker $faker) {
    return [
        'question' => $faker->word,
        'answer' => $faker->paragraph,
        'keyword' => $faker->word,
        'grade_id' => \App\Grade::all()->random()->id,
        'subject_id' => \App\Subject::all()->random()->id,
        'chapter_id' => \App\Chapter::all()->random()->id,

    ];
});
