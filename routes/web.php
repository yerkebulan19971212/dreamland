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
use \App\Courses_program_country;
use Illuminate\Http\Request;


Route::get('/', function () {
    $programs = Programm::all();
    $countries = Country::all();
    return view('index',  compact('programs', 'countries'));
});
Route::get('/categories/{id}', function ($id) {
    $course_p = Courses_program::where('program_id', '=', $id)->get();
    $name = $course_p->first();
    $programs = Programm::all();
    $countries = Country::all();
    return view('categories', compact('course_p', 'name', 'programs', 'countries'));
})->name('categories');

Route::get('/countires/{id}', function ($id) {
    $course_p = Courses_program::where('country_id', '=', $id)->get();
    $name = $course_p->first();
    $programs = Programm::all();
    $countries = Country::all();
    return view('countries', compact('course_p', 'name', 'programs', 'countries'));
})->name('bachelors');


//Route::get('/courses', function () {
//    return view('courses');
//});
Route::get('/courses-detail/{progid}/{conid}', function ($progid, $conid) {
    $programs = Programm::all();
    $countries = Country::all();
    $cp = Courses_program::where('country_id', '=', $conid)->where('program_id', '=', $progid)->get()->first();
    $cpc = Courses_program_country::where('cp', '=', $cp->id)->get();
    return view('course_detail_page', compact('programs', 'countries', 'cpc', 'cp'));
})->name('courses');

Route::get('/coursesdetail', function () {
    $programs = Programm::all();
    $countries = Country::all();
    return view('course_detail', compact('programs', 'countries'));
});
Route::get('/asd', function () {
    $programs = Programm::all();
    $countries = Country::all();
    return view('course_detail_page', compact('programs', 'countries'));
});



//Support

Route::get('/support','SupportController@index');
Route::post('/support/send','SupportController@sendMessage')->name('sendMessage');
Route::get('/logout/',function (){
    Session::forget('username');
    return redirect()->route('admin-page');

})->name('logout');

// Admin
Route::get('admin-dreamland/',  function () {

    return view('admin.admin');
})->name('admin-page');

Route::post('admin-dreamland/login/','AdminController@login')->name('admin');

Route::post('/add-programmss/','AdminController@addProgramms')->name('addProgramms');
Route::post('/delete/','AdminController@delete')->name('addProgramms');
Route::get('add-programms/', 'AdminController@index')->name('pageAddProgramms');
Route::get('add-programms/{id}', 'AdminController@EditProgram')->name('EditProgram');
Route::post('add-programms/{id}', 'AdminController@EditProgramPost')->name('EditProgramPost');

Route::get('add-country/', 'AdminController@indexCountries')->name('pageAddCountryPage');
Route::get('add-country/{id}', 'AdminController@EditCountries')->name('EditCountries');
Route::post('add-country/', 'AdminController@addCountries')->name('pageAddCountry');
Route::post('add-country/{id}', 'AdminController@EditCountriesPost')->name('EditCountriesPost');
Route::post('delete-country/', 'AdminController@deleteCountries')->name('pageDelete');

Route::get('add-courses-programm/', 'AdminController@indexCoursesProgram')->name('indexCourses');
Route::get('add-courses-programm/{id}', 'AdminController@EditCP')->name('EditCP');
Route::post('add-courses-program/', 'AdminController@addCoursesP')->name('addCoursesP');
Route::post('delete-courses-program/', 'AdminController@deleteCoursesP')->name('deleteCoursesP');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
