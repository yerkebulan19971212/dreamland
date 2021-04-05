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
    public function login (Request $request) {
        $login = $request->input('login');
        $pas = $request->input('pass');
        if ($login == "Sultan" and $pas == '1234'){
            Session::put('username', $login);
            return redirect()->route('pageAddProgramms');
        }
        return redirect()->back()->with('error', 'логин или пароль неправильный');
    }
    public function __construct(){}
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
        $p = null;
        return view('admin.programms', compact('programs', 'p'));
    }
    public function EditProgram($id)
    {
        $p = Programm::find($id);
        $programs = Programm::all();
        return view('admin.programms', compact('programs', 'p'));
    }
    public function EditProgramPost(Request $request, $id)
    {
        $p = Programm::find($id);
        $name = $request->input('name');
        $color = ' ';
        $description = $request->input('description');
        $order = $request->input('order');
        if ($files = $request->file('image')) {
            $destinationPath = public_path('/images/'); // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $image = 'images/'.$profileImage ;
            $files->move($destinationPath, $profileImage);}
    else{
            $image = $p->image;
        }
        DB::table('programms')
            ->where('id', 1)
            ->update([
                'name' => $name,
                'image' => $image,
                'description' => $description,
                'color' => $color,
                'order' => $order,
            ]);
        return redirect()->route('pageAddProgramms');
    }

    public function addProgramms(Request $request){

        $name = $request->input('name');
        $color = ' ';
        $description = $request->input('description');
        $order = $request->input('order');

        if ($files = $request->file('image')) {
            $destinationPath = public_path('/images/'); // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);}
        DB::table('programms')->insert([
            'name' => $name,
            'image' => 'images/'.$profileImage,
            'description' => $description,
            'color' => $color,
            'order' => $order,
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
        $countries = Country::orderBy('order', 'asc')->get();
        $c = null;
        return view('admin.country', compact('countries', 'c'));
    }
    public function EditCountries($id)
    {
        $c = Country::find($id);
        $countries = Country::orderBy('order', 'asc')->get();
        return view('admin.country', compact('countries', 'c'));
    }

    public function EditCountriesPost(Request $request, $id)
    {
        $c = Country::find($id);
        $name = $request->input('name');
        $color = ' ';
        $description = $request->input('description');
        $order = $request->input('order');
        if ($files = $request->file('image')) {
            $destinationPath = public_path('/images/'); // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $image = 'images/'.$profileImage ;
            $files->move($destinationPath, $profileImage);}
        else{
            $image = $c->image;
        }
        DB::table('countries')
            ->where('id', 1)
            ->update([
                'name' => $name,
                'image' => $image,
                'description' => $description,
                'color' => $color,
                'order' => $order,
            ]);
        return redirect()->route('pageAddCountryPage');
    }
    public function addCountries(Request $request){
        $name = $request->input('name');
        $color = ' ';
        $description = $request->input('description');
        $order = $request->input('order');
        if ($files = $request->file('image')) {
            $destinationPath = public_path('/images/'); // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);}
        DB::table('countries')->insert([
            'name' => $name,
            'image' => 'images/'.$profileImage,
            'description' => $description,
            'color' => $color,
            'order' => $order,
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
        $price = $request->input('price');
        $description = $request->input('description');
        $fulldescription = $request->input('fulldescription');

        $cp = Courses_program::where('country_id', '=', $country)->where('program_id', '=', $programm)->get();
        if(count($cp) == 0){
            DB::table('courses_programs')->insert([
                'country_id' => $country,
                'program_id' => $programm,
                'description' => $description,
                'full_description' => $fulldescription,
                'price' => $price
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
