<?php

namespace App;
use App\Courses_program;

use Illuminate\Database\Eloquent\Model;

class Programm extends Model
{
    protected $table = 'programms';


    public function courses_program()
    {
        return $this->hasMany(Courses_program::class);
    }
}
