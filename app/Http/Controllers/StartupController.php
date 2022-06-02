<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartupController extends Controller
{



    // home function
    public function home()
    {


        return view('startups.index');
    } //end home function



    // ----------------------------------------------




    // company profile function
    public function SingleCompany($id)
    {


        return view('startups.single-company');
    } //end company profile function





    // ----------------------------------------------




    // single service function
    public function SingleService($id)
    {


        return view('startups.single-service');
    } //end single service function






    // ----------------------------------------------




    // single requirement function
    public function SingleRequirement($id)
    {


        return view('startups.single-requirement');
    } //end single requirement function



} //end controller
