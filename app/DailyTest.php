<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyTest extends Model
{
    protected $fillable = [
        'pertanyaan',
        'jawaban',
        'kata_kunci'
    ];

    public function chapter (){
        $this->belongsTo(Chapter::class);
    }

    public function score(){
        $this->hasOne(Score::class);
    }
}
