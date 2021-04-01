<?php

namespace App\Http\Controllers;

use App\Support;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index()
    {
        $supports = Support::all();
        return view('support', compact('supports'));
    }

    public function sendMessage(Request $request){
        $name = $request->input('Name');
        $phone = $request->input('Phone');
        $description = $request->input('description');
        $email = $request->input('Email');



        DB::table('support')->insert([
            'email' => $email,
            'name' => $name,
            'number' => $phone,
            'description' => $description,
        ]);

         return redirect()->back();
    }

}
