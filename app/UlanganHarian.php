<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UlanganHarian extends Model
{
    protected $fillable = [
        'pertanyaan',
        'jawaban',
        'kata_kunci'
    ];
}
