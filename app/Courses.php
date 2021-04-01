<?php

namespace App;
//use App\Country;


use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'courses';

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
