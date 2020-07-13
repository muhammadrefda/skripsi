<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_students', function (Blueprint $table) {
            $table->id();
            $table->string('answerStudentColumn')->nulable();
            $table->string('nilaiSiswa')->nulable();
            $table->timestamps();


//            $table->unsignedBigInteger('dailyTest_id');
//            $table->unsignedBigInteger('score_id');

//            $table->foreign('dailyTest_id')->references('id')->on('daily_tests');
//            $table->foreign('score_id')->references('id')->on('scores');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_students');
    }
}
