<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_tests', function (Blueprint $table) {
            $table->id();
            $table->string('question')->nullable();
            $table->text('answer')->nullable();
            $table->string('keyword')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('chapter_id');

            $table->foreign('grade_id')->references('id')->on('grades')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('chapter_id')->references('id')->on('chapters')->onDelete("cascade")->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_tests');
    }
}
