<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 */
class Grade extends Model
{
    protected $fillable = [
        'name'
        ];


    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function dailyTest (){
        return $this->hasMany(DailyTest::class);
    }
}
