<?php

use Illuminate\Database\Seeder;

class AnswerStudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $count = 33;
        factory(\App\AnswerStudent::class, $count)->create();
    }
}
