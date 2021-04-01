<?php

namespace App;
use App\Country;
use App\Programm;


use Illuminate\Database\Eloquent\Model;

class Courses_program extends Model
{
    //
    protected $table = 'courses_programs';

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function program()
    {
        return $this->belongsTo(Programm::class, 'program_id');
    }
}
