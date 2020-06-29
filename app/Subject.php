<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'nama'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function chapter (){
        return $this->hasMany(Chapter::class);
    }
}
