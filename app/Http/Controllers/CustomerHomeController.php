<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\UserRequirement;
use App\Models\UserBlog;
use App\Models\UserAuction;

use Illuminate\Http\Request;

class CustomerHomeController extends Controller
{

    // home function
    public function home()
    {

        session()->put('user_type','Customer');
        
        $requirements = UserRequirement::where('user_id',session()->get('user_id'))->get();
        $blogs = UserBlog::all();


        // get categories
        $categories = Category::all();


        // get latest auction
        $auction = UserAuction::orderBy('id', 'DESC')->first();

        return view('customers.homes.index',compact('requirements','blogs', 'categories', 'auction'));
    } //end home function



} //end controller
