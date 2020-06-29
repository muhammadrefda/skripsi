<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
        'nama'
    ];


    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function dailyTest (){
        return $this->hasOne(DailyTest::class);
    }
}
