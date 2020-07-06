<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create($validated)
 * @method static findOrFail($dailyTest)
 * @method static where(string $string, $country_id)
 */
class DailyTest extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'keyword',
        'chapter_id'
    ];

    public function chapter (){
        $this->belongsTo(Chapter::class);
    }

    public function score(){
        $this->hasOne(Score::class);
    }
}
