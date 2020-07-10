<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\AnswerStudent::class, function (Faker $faker) {
    return [
        'answerStudentColumn' => $faker->paragraph,
        'dailyTest_id' => \App\DailyTest::all()->random()->id,
        'score_id' => \App\Score::all()->random()->id,
    ];
});
