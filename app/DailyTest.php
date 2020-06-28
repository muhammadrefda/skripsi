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
}
