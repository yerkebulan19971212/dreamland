<?php

namespace App;
use App\Courses;
use App\Courses_program;


use Illuminate\Database\Eloquent\Model;

class Courses_program_country extends Model
{
    protected $table = 'courses_program_countries';

    public function course()
    {
        return $this->belongsTo(Courses::class, 'courses_id');
    }
    public function course_program()
    {
        return $this->belongsTo(Courses_program::class, 'cp');
    }


}
