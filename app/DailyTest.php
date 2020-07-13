<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create($validated)
 * @method static findOrFail($dailyTest)
 * @method static where(string $string)
 * @method static find(int $id)
 * @method daily_tests()
 */
class DailyTest extends Model
{
    protected $fillable = [
        'question',
        'answer_teacher',
        'answer_student',
        'keyword',
        'chapter_id',
        'subject_id',
        'grade_id',
    ];

    public function chapter (){
        $this->belongsTo(Chapter::class);
    }

    public function score(){
        $this->hasOne(Score::class);
    }

    public function answerStudent(){
        $this->hasMany(AnswerStudent::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function grade(){
        return $this->belongsTo(Grade::class);
    }
}
