<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Programm;
use App\Country;
use \App\Courses_program;
Route::get('/', function () {
    $programs = Programm::all();
    $countries = Country::all();
    return view('index',  compact('programs', 'countries'));
});
Route::get('/categories/{id}', function ($id) {
    $course_p = Courses_program::where('program_id', '=', $id)->get();
    $name = $course_p->first();
    return view('categories', compact('course_p', 'name'));
})->name('categories');

Route::get('/bachelor/{id}', function ($id) {
    $course_p = Courses_program::where('country_id', '=', $id)->get();
    $name = $course_p->first();

    return view('countries', compact('course_p', 'name'));
})->name('bachelors');
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/courses2', function () {
    return view('course2');
});
Route::get('/coursesdetail', function () {
    return view('course_detail');
});



//Support

Route::get('/support','SupportController@index');
Route::post('/support/send','SupportController@sendMessage')->name('sendMessage');

// Admin
Route::post('/add-programmss/','AdminController@addProgramms')->name('addProgramms');
Route::post('/delete/','AdminController@delete')->name('addProgramms');
Route::get('add-programms/', 'AdminController@index')->name('pageAddProgramms');

Route::get('add-country/', 'AdminController@indexCountries')->name('pageAddCountryPage');
Route::post('add-country/', 'AdminController@addCountries')->name('pageAddCountry');
Route::post('delete-country/', 'AdminController@deleteCountries')->name('pageDelete');


Route::get('add-courses/', 'AdminController@indexCourses')->name('indexCourses');
Route::post('add-courses/', 'AdminController@addCourses')->name('addCourses');
Route::post('delete-courses/', 'AdminController@deleteCourses')->name('deleteCourses');



Route::get('add-courses-programm/', 'AdminController@indexCoursesProgram')->name('indexCourses');
Route::post('add-courses-program/', 'AdminController@addCoursesP')->name('addCoursesP');
Route::post('delete-courses-program/', 'AdminController@deleteCoursesP')->name('deleteCoursesP');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
