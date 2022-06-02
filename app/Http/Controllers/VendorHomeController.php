<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\UserBlog;
use App\Models\UserRequirement;
use App\Models\UserRequirementQuotation;
use Illuminate\Http\Request;

class VendorHomeController extends Controller
{



    // home function
    public function home()
    {
        session()->put('user_type','Vendor');

        $requirements = UserRequirement::where('user_id', session()->get('user_id'))->get();
        $blogs = UserBlog::all();


        // get new opp 
        $requirements = UserRequirement::where('status', 'on going')->get();

        // get categories
        $categories = Category::all();


        // quotation sent
        $quotations = UserRequirementQuotation::where('user_id', session('user_id'))->get();



        return view('vendors.homes.index', compact('requirements', 'blogs', 'requirements', 'categories', 'quotations'));
    } //end home function



} //end controller
