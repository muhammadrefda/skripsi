<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create($validated)
 * @method static findOrFail($dailyTest)
 * @method static where(string $string, $country_id)
 * @method static find(int $id)
 */
class DailyTest extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'keyword',
        'chapter_id',
        'subject_id',
        'grade_id',
    ];

    public function chapter (){
        $this->belongsTo(Chapter::class);
    }

    public function score(){
        $this->hasOne(Score::class,'score_id','id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function grade(){
        return $this->belongsTo(Grade::class);
    }
}
