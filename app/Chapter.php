<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $string1, int $int)
 * @method static find()
 */
class Chapter extends Model
{
    protected $fillable = [
        'nama',
        'subject_id',
        'grade_id',
    ];


    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function grade(){
        return $this->belongsTo(Grade::class);
    }

    public function dailyTest (){
        return $this->hasOne(DailyTest::class);
    }
}
