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
        $supports = Support::orderBy('created_at', 'desc')->get();
        return view('support', compact('supports'));
    }

    public function sendMessage(Request $request){
        $country = $request->input('country');
        $name = $request->input('Name');
        $phone = $request->input('Phone');
//        $description = $request->input('description');
        $country__send = $request->input('country__send');



        DB::table('support')->insert([
            'email' => $country__send,
            'name' => $name,
            'number' => $phone,
            'description' => $country,
        ]);
		$data = [
    		'country'=> $country__send,
			'phone'=> $phone,
			'name'=> $name,
		];

        $curl = curl_init("https://api.testhub.kz/api/v1/send/");

    	curl_setopt($curl, CURLOPT_POST, true);
		    curl_setopt($curl, CURLOPT_HEADER, false);

    	curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($curl);
		echo $response;
    	curl_close($curl);



         return redirect()->back()->with('success', $response);
    }

}
