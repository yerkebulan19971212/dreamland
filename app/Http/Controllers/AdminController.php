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
        if ($login == "Dreamland2021" and $pas == 'Mydreamland1'){
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
            ->where('id', $id)
            ->update([
                'name' => $name,
                'image' => $image,
                'description' => str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', "",$description),
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
            'description' => str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', "",$description),
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
            ->where('id', $id)
            ->update([
                'name' => $name,
                'image' => $image,
                'description' => str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', "",$description),
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
            'description' => str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', "",$description),
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


    public function indexCoursesProgram(Request $request){
        if (!Session::has('username')){
            return redirect()->route('admin-page');
        }
        $programs = Programm::all();
        $countries = Country::all();
        $courses_programs = Courses_program::all();
        $c = null;
        return view('admin.country_program', compact('programs', 'countries', 'courses_programs', 'c'));
    }

    public function addCoursesP(Request $request){
        $country = $request->input('country');
        $programm = $request->input('programm');
        $price = $request->input('price');
        $description = $request->input('description');
        $fulldescription = $request->input('fdescription');

        $cp = Courses_program::where('country_id', '=', $country)->where('program_id', '=', $programm)->get();
        if(count($cp) == 0){
            DB::table('courses_programs')->insert([
                'country_id' => $country,
                'program_id' => $programm,
                'description' => str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', "",$description),
                'full_description' => str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', "",$fulldescription),
                'price' => $price
            ]);
            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Такой запись уже есть');
    }
    public function EditCP($id)
    {
        $c = Courses_program::find($id);
        $programs = Programm::all();
        $countries = Country::all();
        $courses_programs = Courses_program::all();
        return view('admin.country_program', compact('programs', 'countries', 'courses_programs', 'c'));
    }
    public function EditCPPost(Request $request, $id)
    {
        $country = $request->input('country');
        $programm = $request->input('programm');
        $price = $request->input('price');
        $description = $request->input('description');
        $fulldescription = $request->input('fdescription');
        DB::table('courses_programs')->where('id', $id)
            ->update([
            'country_id' => $country,
            'program_id' => $programm,
            'description' => str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', "",$description),
            'full_description' => str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', "",$fulldescription),
            'price' => $price
        ]);
        return redirect()->route('indexCourses');

    }
    public function deleteCoursesP(Request $request ){
        $id = $request->input('id');
        $p = Courses_program::find($id);
        $p->delete();
        return redirect()->back();

    }
}
