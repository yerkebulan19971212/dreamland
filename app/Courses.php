<?php

namespace App;
use App\Courses_program_country;


use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'courses';

    public function courses_program_country()
    {
        return $this->hasMany(Courses_program_country::class);
    }
}
