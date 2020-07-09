<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 */
class Subject extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'grade_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function chapter (){
        return $this->hasMany(Chapter::class);
    }

    public function grade(){
        return $this->hasMany(Grade::class);
    }

    public function dailyTest (){
        return $this->hasMany(DailyTest::class);
    }
}
