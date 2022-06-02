<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserSocial;
use App\Models\UserRating;

use Illuminate\Http\Request;

class VendorCompanyController extends Controller
{


    // company profile function
    public function profile($id)
    {

        $user = User::find($id);
        $user_social = UserSocial::where('user_id',session()->get('user_id'))->get();

        
        $ratings = UserRating::where('reviewed_id', $id)->get();

        $company_id = $id;

        return view('vendors.companies.profile',compact('user','user_social','company_id','ratings'));

    } //end company profile function




    public function addreview(Request $request)
    {
        $newreview = new UserRating();

        $newreview->title = $request->title;
        $newreview->relationship = $request->relation;
        $newreview->comment = $request->comment;
        $newreview->date = date("Y/m/d");
        $newreview->rating = $request->rate;
        $newreview->reviewer_type = session()->get('user_type');
        $newreview->reviewer_id = session()->get('user_id');
        $newreview->reviewed_id = $request->company_id;

         if ($newreview->save()) {
            return redirect()->back()->with('success','Review Added Successfully');
         } else{
             echo 'error!';
         }

    }



    // --------------------------------------------------



} //end controller