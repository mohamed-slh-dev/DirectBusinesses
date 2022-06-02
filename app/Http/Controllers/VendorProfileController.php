<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserAuctionBid;
use App\Models\UserSocial;
use App\Models\UserService; 
use App\Models\UserCertificate;
use App\Models\UserRating;
use App\Models\UserHelp;
use App\Models\UserDeal;
use App\Models\UserRequirementQuotation;
use Illuminate\Http\Request;

class VendorProfileController extends Controller
{


    // profile index function
    public function index()
    {

        $user = User::find(session()->get('user_id'));
        $user_social = UserSocial::where('user_id',session()->get('user_id'))->get();
        $ratings = UserRating::where('reviewed_id',session()->get('user_id'))->get();


        return view('vendors.profiles.index',compact('user','user_social','ratings'));
        
    } //end profile index function








    // --------------------------------------------------



    // profile requirements index function
    public function requirements()
    {

        $user = User::find(session()->get('user_id'));


        $quotations  = UserRequirementQuotation::where('user_id', session('user_id'))->get();


        return view('vendors.profiles.requirements', compact('quotations', 'user'));
        
    } //end profile requirements function






    // --------------------------------------------------



    // profile deals index function
    public function deals()
    {

        $user = User::find(session()->get('user_id'));


        $deals = UserDeal::where('user_id',session('user_id'))->get();

        return view('vendors.profiles.deals',compact('deals', 'user'));
        
    } //end profile deals function










    // --------------------------------------------------



    // profile auctions index function
    public function auctions()
    {

        $user = User::find(session()->get('user_id'));


        $auctions  = UserAuctionBid::where('user_id', session('user_id'))->get();

        
        return view('vendors.profiles.auctions', compact('auctions', 'user'));

    } //end profile auctions function






    // --------------------------------------------------



    // profile reviews index function
    public function reviews()
    {

        $ratings = UserRating::where('reviewed_id',session()->get('user_id'))->get();

       $user = User::find(session()->get('user_id'));

        return view('vendors.profiles.reviews',compact('ratings','user'));

    } //end profile reviews function







    // --------------------------------------------------



    // profile settings index function
    public function settings()
    {

        $user = User::find(session()->get('user_id'));

        $user_social = UserSocial::where('user_id',session()->get('user_id'))->get();

        return view('vendors.profiles.settings',compact('user','user_social'));
        
    } //end profile settings function


    public function updatesettings(Request $request)
    {
        $newuser = User::find(session()->get('user_id'));
        $usersocial =  UserSocial::where('user_id',session()->get('user_id'))->get();

        if (!empty($request->file('profile_img'))) {

            $ppname = time() . '-' . $request->file('profile_img')->getClientOriginalName();

            $request->file('profile_img')->move(public_path('assets/uploads/profile-logos/'), $ppname);

            $newuser->profile_img =  $ppname;

        }
        if (!empty($request->file('banner_img'))) {

            $bpname = time() . '-' . $request->file('banner_img')->getClientOriginalName();

            $request->file('banner_img')->move(public_path('assets/uploads/banner-imgs/'), $bpname);

            $newuser->banner_img =  $bpname;

        }

        $newuser->fname  = $request->fname ;
        $newuser->lname   = $request->lname ;
        $newuser->phone =$request->phone; 
        $newuser->email  = $request->email ;
        $newuser->company_name  = $request->company_name;

        $newuser->company_url = $request->company_url ;
        $newuser->desc = $request->desc;
        $newuser->city = $request->city;

        $newuser->save();

        $social_platforms = ['facebook','twitter','linkedin','skype','googleplus','painterest'];
        for ($i=0; $i < count($social_platforms); $i++) { 

            $platform = $social_platforms[$i];
          
            UserSocial::where('user_id',session()->get('user_id'))
            ->where('platform',$social_platforms[$i])
            ->update([
            'url' => $request->$platform
            ]);
        }

        return redirect()->back()->with('success','Updated Successfully');

    }


    public function addservice(Request $request)
    {
        $newservice = new UserService();

      
        $newservice->service = $request->service;
        $newservice->desc = $request->desc;
        $newservice->user_id = session()->get('user_id');

         if ($newservice->save()) {
            return redirect()->back()->with('success','Service Added successfully');
         }else{
             echo 'error!';
         }

    }


    public function deleteservice($service_id)
    {
        $delete = UserService::find($service_id);
        $delete->delete();

        return redirect()->back()->with('success','Service Deleted Successfully');
    }


    public function addcertification(Request $request)
    {
        $certificate = new UserCertificate();

        if (!empty($request->file('doc'))) {

            $document = time() . '-' . $request->file('doc')->getClientOriginalName();

            $request->file('doc')->move(public_path('assets/uploads/certifications-docs/'), $document);

            $certificate->img =  $document;

        }

        $certificate->title = $request->title;
        $certificate->desc = $request->desc;
        $certificate->date = $request->date;
        $certificate->user_id = session()->get('user_id');

         if ($certificate->save()) {
            return redirect()->back()->with('success','Service Added successfully');
         }else{
             echo 'error!';
         }

    }

    
    public function updatecertification(Request $request)
    {
        $certificate = UserCertificate::find($request->certi_id);

        if (!empty($request->file('certificate_doc'))) {

            $document = time() . '-' . $request->file('certificate_doc')->getClientOriginalName();

            $request->file('certificate_doc')->move(public_path('assets/uploads/certifications-docs/'), $document);

            $certificate->img =  $document;

        }

        $certificate->title = $request->title;
        $certificate->desc = $request->desc;
        $certificate->date = $request->date;
    
         if ($certificate->save()) {
            return redirect()->back()->with('success','Service Updated successfully');
         }else{
             echo 'error!';
         }

    }

    public function deletecertificate($certi_id)
    {
        $delete = UserCertificate::find($certi_id);
        $delete->delete();

        return redirect()->back()->with('success','Certificate Deleted Successfully');
    }



    // --------------------------------------------------



    // profile help index function
    public function help()
    {

        $user = User::find(session()->get('user_id'));


        return view('vendors.profiles.help', compact('user'));
        
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
