<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\Department;
use App\Models\Industry;
use App\Models\User;
use App\Models\UserSocial;

use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class RegisterController extends Controller
{


    // register function
    public function register()
    {

        $countries = Country::all();
        $departments = Department::all();
        $industries = Industry::all();
        return view('registers.index',compact('countries','departments','industries'));

    } //end register function

    public function registeration(Request $request)
    {
        $newuser =  new User();
        // get data
        $newuser->fname  = $request->fname ;
        $newuser->lname   = $request->lname ;
        $newuser->phone = $request->phone_key.$request->phone; 
        $newuser->email  = $request->email ;
        $newuser->password   =  Hash::make($request->password);
        $newuser->business_size = $request->business_size;
        $newuser->company_name  = $request->company_name ;
        // $newuser->company_url   = $request->company_url ;
        // $newuser->desc = $request->desc;
        // $newuser->city = $request->city;
        $newuser->profile_img ='default-profile.jpg';
        // $newuser->banner_img = $request->banner_img;

        $newuser->department_id = $request->department_id;
        $newuser->country_id = $request->country_id;
        $newuser->industry_id = $request->industry_id;
       
      if ($newuser->save()) {
        session()->put('user_name', $request->fname.' '.$request->lname);
        session()->put('user_id', $newuser->id);
        session()->put('user_type', 'Vendor');

        $social_platforms = ['facebook','twitter','linkedin','skype','googleplus','painterest'];
        for ($i=0; $i < count($social_platforms); $i++) { 
          $usersocial =  new UserSocial();

          $usersocial->platform = $social_platforms[$i];
          $usersocial->user_id = $newuser->id;
          $usersocial->save();
        }
      

         return redirect()->route('vendor.home');
      }else{
        echo 'error!';
      }

    }



} //end controller
