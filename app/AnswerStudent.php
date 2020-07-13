<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method daily_tests()
 * @method static where(array[] $array)
 * @method static create(array $array)
 */
class AnswerStudent extends Model
{
    public $fillable = [

        'answerStudentColumn',
        'nilaiSiswa',
//        'dailyTest_id',
//        'score_id',
    ];

//    public function dailyTest()
//    {
//        return $this->belongsTo(DailyTest::class);
//    }

//    public function score()
//    {
//        return $this->belongsTo(Score::class);
//    }
}
