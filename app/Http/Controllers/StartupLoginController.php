<?php

namespace App\Http\Controllers;

use App\Models\Startup;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class StartupLoginController extends Controller
{


    // login function
    public function login()
    {



        return view('logins.startup');
    } //end login function

    public function checkuser(Request $request) {
        // email + password
        $email = $request->email;
        $password = $request->password;

        // get user using email
        $user = Startup::where('email', $email)->first();
        
        // if found then check password (he pass)
        if ($user && Hash::check($password, $user->password)) {

            // put sessions
            session()->put('user_name', $user->name);

            session()->put('user_id', $user->id);
            session()->put('user_type','Startup');

            // redirect to dashboard
            return redirect()->route('startup.home');

        } // end of password correct

       
        // he don't pass
        else {

            // redirect to login again
            return redirect()->route('startup.login');

        } //end of wrong password or user not found


        
    } //end of checkuser login function

} //end controller


