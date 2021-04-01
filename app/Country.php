<?php

namespace App;
use App\Courses_program;


use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $table = 'countries';

    public function courses_program()
    {
        return $this->hasMany(Courses_program::class);
    }
}
