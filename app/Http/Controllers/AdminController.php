<?php

namespace App\Http\Controllers;

use App\Programm;
use App\Country;
use App\Courses;
use App\Courses_program;
use App\Courses_program_country;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//use Symfony\Component\HttpFoundation\Session\Session;
use Session;
class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public static  function  check(){
        if (!Session::has('useasdrname')){
            return redirect()->route('admin-page');
        }
    }
    public function index()
    {
        if (!Session::has('username')){
            return redirect()->route('admin-page');
        }
        $programs = Programm::all();
        return view('admin.programms', compact('programs'));
    }




    public function addProgramms(Request $request){

        $name = $request->input('name');
        $color = $request->input('color');
        $description = $request->input('description');
        if ($files = $request->file('image')) {
            $destinationPath = public_path('/images/'); // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);}
        DB::table('programms')->insert([
            'name' => $name,
            'image' => 'images/'.$profileImage,
            'description' => $description,
            'color' => $color,
        ]);
        return redirect()->back();
    }
    public function delete(Request $request ){
        $id = $request->input('id');
        $p = Programm::find($id);
        $p->delete();
        return redirect()->back();

    }

    public function indexCountries()
    {
        if (!Session::has('username')){
            return redirect()->route('admin-page');
        }
        $countries = Country::all();
        return view('admin.country', compact('countries'));
    }

    public function addCountries(Request $request){
        $name = $request->input('name');
        $color = $request->input('color');
        $description = $request->input('description');
        if ($files = $request->file('image')) {
            $destinationPath = public_path('/images/'); // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);}
        DB::table('countries')->insert([
            'name' => $name,
            'image' => 'images/'.$profileImage,
            'description' => $description,
            'color' => $color,
        ]);
        return redirect()->back();
    }

    public function deleteCountries(Request $request ){
        $id = $request->input('id');
        $p = Country::find($id);
        $p->delete();
        return redirect()->back();

    }



    public function indexCourses(Request $request){
        if (!Session::has('username')){
            return redirect()->route('admin-page');
        }
        $courses = Courses::all();
        return view('admin.courses', compact('courses'));
    }

    public function addCourses(Request $request){
        $name = $request->input('name');
        $description = $request->input('description');
        if ($files = $request->file('image')) {
            $destinationPath = public_path('/images/'); // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);}
        DB::table('courses')->insert([
            'name' => $name,
            'image' => 'images/'.$profileImage,
            'description' => $description,
            'price' => 0,
        ]);
        return redirect()->back();
    }

    public function deleteCourses(Request $request ){
        $id = $request->input('id');
        $p = Courses::find($id);
        $p->delete();
        return redirect()->back();

    }


    public function indexCoursesProgram(Request $request){
        if (!Session::has('username')){
            return redirect()->route('admin-page');
        }
        $programs = Programm::all();
        $countries = Country::all();
        $courses_programs = Courses_program::all();
        return view('admin.country_program', compact('programs', 'countries', 'courses_programs'));
    }

    public function addCoursesP(Request $request){
        $country = $request->input('country');
        $programm = $request->input('programm');
        $description = $request->input('description');
        $cp = Courses_program::where('country_id', '=', $country)->where('program_id', '=', $programm)->get();

        if(count($cp) == 0){
            DB::table('courses_programs')->insert([
                'country_id' => $country,
                'program_id' => $programm,
                'description' => $description,
            ]);
            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Такой запись уже есть');
    }

    public function deleteCoursesP(Request $request ){
        $id = $request->input('id');
        $p = Courses_program::find($id);
        $p->delete();
        return redirect()->back();

    }





    public function indexCP(Request $request){
        if (!Session::has('username')){
            return redirect()->route('admin-page');
        }
        $courses = Courses::all();
        $cpc = Courses_program_country::all();
        $courses_programs = Courses_program::all();
        return view('admin.CP', compact('courses', 'cpc', 'courses_programs'));
    }

    public function addCP(Request $request){
        $course = $request->input('course');
        $course_program = $request->input('course_program');
        $cpc = Courses_program_country::where('courses_id', '=',$course )->where('cp','=',$course_program)->get();
        if (count($cpc) == 0){
        DB::table('courses_program_countries')->insert([
            'courses_id' => $course,
            'cp' => $course_program,
            'description' => null,
        ]);
            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Такой запись уже есть');
    }

    public function deleteCP(Request $request ){
        $id = $request->input('id');
        $p = Courses_program_country::find($id);
        $p->delete();
        return redirect()->back();

    }
}
