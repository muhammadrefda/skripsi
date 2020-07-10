<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Subject::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['PKn','IPA','IPS','Pendidikan Agama Islam','BahasaIndonesia','Bahasa Inggris','Penjaskes','Seni Budaya','Prakarya']),
        'user_id' => \App\User::all()->random()->id,
        'grade_id' => \App\Grade::all()->random()->id,
    ];
});
