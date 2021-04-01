<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesProgramCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_program_countries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('courses_id')->unsigned();
            $table->foreign('courses_id')->references('id')->on('courses');
            $table->bigInteger('cp')->unsigned();
            $table->foreign('cp')->references('id')->on('courses_programs');
            $table->string('description')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_program_countries');
    }
}
