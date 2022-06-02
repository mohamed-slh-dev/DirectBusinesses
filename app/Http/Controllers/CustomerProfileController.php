<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserSocial;
use App\Models\UserService; 
use App\Models\UserCertificate;
use App\Models\UserRating; 
use App\Models\UserRequirement;
use App\Models\UserAuction;
use App\Models\UserDeal;
use App\Models\UserDealRequest;
use App\Models\UserHelp;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{



    // profile index function
    public function index()
    {

        $user = User::find(session()->get('user_id'));
        $user_social = UserSocial::where('user_id',session()->get('user_id'))->get();
        $ratings = UserRating::where('reviewed_id',session()->get('user_id'))->get();


        return view('customers.profiles.index',compact('user','user_social','ratings'));
    } //end profile index function








    // --------------------------------------------------



    // profile requirements index function
    public function requirements()
    {

        $user = User::find(session()->get('user_id'));


        $requirements = UserRequirement::where('user_id',session()->get('user_id'))->get();

        return view('customers.profiles.requirements',compact('requirements', 'user'));
    } //end profile requirements function






    // --------------------------------------------------



    // profile deals index function
    public function deals()
    {

        $user = User::find(session()->get('user_id'));


        $requests = UserDealRequest::where('user_id', session('user_id'))->get();


        
        return view('customers.profiles.deals', compact('requests', 'user'));
    } //end profile deals function










    // --------------------------------------------------



    // profile auctions index function
    public function auctions()
    {
        $user = User::find(session()->get('user_id'));

        $auctions = UserAuction::where('user_id',session('user_id'))->get();

        return view('customers.profiles.auctions',compact('auctions', 'user'));
    } //end profile auctions function






    // --------------------------------------------------



    // profile reviews index function
    public function reviews()
    {


        $ratings = UserRating::where('reviewed_id',session()->get('user_id'))->get();

        $user = User::find(session()->get('user_id'));
 
         return view('customers.profiles.reviews',compact('ratings','user'));
 
    } //end profile reviews function







    // --------------------------------------------------



    // profile settings index function
    public function settings()
    {


      
        $user = User::find(session()->get('user_id'));

        $user_social = UserSocial::where('user_id',session()->get('user_id'))->get();

        return view('customers.profiles.settings',compact('user','user_social'));
    } //end profile settings function






    // --------------------------------------------------



    // profile help index function
    public function help()
    {

        $user = User::find(session()->get('user_id'));

        return view('customers.profiles.help', compact('user'));
    } //end profile help function







    public function addHelp(Request $request)
    {
        $help = new UserHelp();


        $help->name = $request->name;
        $help->email = $request->email;
        $help->title = $request->title;
        $help->message = $request->message;
        $help->user_id = session()->get('user_id');

         if ($help->save()) {
            return redirect()->back()->with('success','Help Send successfully');
         }else{
             echo 'error!';
         }

    }


} //end controller

