<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Industry;
use App\Models\Startup;

use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class StartupRegisterController extends Controller
{


    // register function
    public function register()
    {

        $countries = Country::all();
        $industries = Industry::all();
        return view('registers.startup',compact('countries','industries'));
    } //end register function

    public function registeration(Request $request)
    {
        $newstartup =  new Startup();
        // get data
        $newstartup->name  = $request->name ;
        $newstartup->company_name  = $request->company_name ;
        $newstartup->email  = $request->email ;
        $newstartup->password   =  Hash::make($request->password);
        $newstartup->company_location  = $request->location ;

        $newstartup->country_id = $request->country_id;
        $newstartup->industry_id = $request->industry_id;

        if ($newstartup->save()) {
            session()->put('user_name',$request->name);
            session()->put('user_id', $newstartup->id);
            session()->put('user_type', 'Startup');
    
             return redirect()->route('startup.home');
          }else{
            echo 'error!';
          }
    }



} //end controller
