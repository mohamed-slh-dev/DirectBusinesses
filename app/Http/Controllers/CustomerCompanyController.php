<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserSocial;
use App\Models\UserRating;

use Illuminate\Http\Request;

class CustomerCompanyController extends Controller
{



    // company profile function
    public function profile($id)
    {

        $user = User::find($id);
        $user_social = UserSocial::where('user_id',session()->get('user_id'))->get();
        $ratings = UserRating::where('reviewed_id', $id)->get();

        $company_id = $id;

        return view('customers.companies.profile',compact('user','user_social','company_id','ratings'));

    } //end company profile function




    // --------------------------------------------------



} //end controller
