<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'value',
        'user_id',
        'dailyTest_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);

    }
    public function dailyTest(){
        return $this->belongsTo(DailyTest::class);
    }

    public function answerStudent(){
        return $this->hasMany(AnswerStudent::class);
    }

}
