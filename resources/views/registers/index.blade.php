@extends('layouts.login')



{{-- section --}}
@section('content')





{{-- main --}}
<main id="tg-main" class="tg-main tg-paddingzero tg-haslayout" style="background-color: black; position:relative;min-height: 92vh">


    <div class="logincover"></div>
    <div class="logincoverdiv"></div>
    
    {{-- layout --}}
    <div class="tg-main-section tg-haslayout pr-layout" style="padding:60px 0px">
       
        <div class="container">
           
            <div class="row align-items-center">

                <div class="col-12 col-lg-6 offset-lg-3">

                    <div class="row align-items-center"
                        style="background-color: white; padding: 40px 0px; border-radius: 5px; box-shadow: 0px 0px 5px 0px lightgrey">

                        <div class="col-6 text-center">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="mb-5 pb-3" style="width: 180px;">
                        </div>


                        <div class="col-6 text-center">
                            <h3 class="loginheading">Registeration</h3>

                        </div>



                        <!-- col ex -->
                        <div class="col-12">
                            <div class="tg-appointmentsetting pb-0">
                                <form method="post" action="{{ route('registeration') }}" >
                               @csrf
                                    <!-- set 1 -->
                                    <fieldset class="tg-formstepone tg-current" style="border:none !important;">

                                        <div class="tg-progressbox bg-white px-0 pb-0">

                                            <!-- links -->
                                            <ul class="tg-formprogressbar formprogressbarwrapper d-none">
                                                <li class="tg-active"><span>Basic Info</span></li>
                                                <li><span>Content</span></li>
                                                <li><span>Tags</span></li>

                                            </ul>
                                            <!-- end inks -->


                                            <!-- name -->
                                            <div class="col-10 offset-1 text-left mt-4">
                                                <label class="loginlabels" for="name">Company Name</label>
                                                <input class="form-control logininputs" name="company_name" id="name"
                                                    type="text" required="">
                                            </div>



                                            <!-- country -->
                                            <div class="col-10 offset-1 text-left">
                                                <label class="loginlabels" for="country">Country of Headquarter</label>
                                                <select class="form-control custom-select loginselect" name="country_id"
                                                    id="country" required="">
                                                @foreach ($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                                </select>
                                            </div>




                                            <!-- email -->
                                            <div class="col-10 offset-1 text-left">
                                                <label class="loginlabels" for="email">Email</label>
                                                <input class="form-control logininputs" name="email" id="email"
                                                    type="email" required="">
                                            </div>


                                            <!-- password -->
                                            <div class="col-10 offset-1 text-left">
                                                <label class="loginlabels" for="password">Password</label>
                                                <input class="form-control logininputs" name="password" id="password"
                                                    type="password" required="">
                                            </div>


                                            <div class="col-10 offset-1">

                                                <div class="row align-items-end">
                                                    <div class="col-12 col-lg-8 text-left">

                                                        <a class="tg-btn switchlogin-button d-inline-block"
                                                            href="{{ route('login') }}"><i class="fa fa-circle"></i>Already have
                                                            account?</a>
                                                        <br>
                                                        <a class="tg-btn switchlogin-button d-inline-block"
                                                            style="line-height: 2rem; padding-left: 0px;"
                                                            href="{{ route('startup.login') }}" target="_blank"><i
                                                                class="fa fa-circle"></i>Click for startup support</a>
                                                    </div>

                                                    <div class="col-12 col-lg-4 text-right">
                                                        <a href="javascript:void(0);"
                                                            class="tg-btn tg-btnnext loginnextbutton">Next</a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </fieldset>
                                    <!-- end set 1 -->

                                    <!-- step two -->
                                    <fieldset class="tg-formsteptwo" style="border:none !important;">

                                        <div class="tg-progressbox bg-white px-0 pb-0">

                                            <!-- links -->
                                            <ul class="tg-formprogressbar formprogressbarwrapper d-none">
                                                <li class="tg-active"><span>Basic Info</span></li>
                                                <li><span>Content</span></li>
                                                <li><span>Tags</span></li>

                                            </ul>
                                            <!-- end inks -->


                                            <!-- first name -->
                                            <div class="col-10 offset-1 text-left mt-4">
                                                <label class="loginlabels" for="fname">First Name</label>
                                                <input class="form-control logininputs" name="fname" id="fname"
                                                    type="text" required="">
                                            </div>


                                            <!-- last name -->
                                            <div class="col-10 offset-1 text-left">
                                                <label class="loginlabels" for="lname">Last Name</label>
                                                <input class="form-control logininputs" name="lname" id="lname"
                                                    type="text" required="">
                                            </div>


                                            <!-- phone -->
                                            <div class="col-10 offset-1 text-left">
                                                <label class="loginlabels" for="phone">Phone Number</label>

                                                <select class="form-control custom-select loginselect" name="phone_key"
                                                    id="phonekey" required="">
                                                    <option value="" selected="" class="d-none">Your Country Code
                                                    </option>
                                                    <option value="+971">+971</option>
                                                    <option value="+249">+249</option>
                                                    <option value="+966">+966</option>
                                                </select>
                                                <input class="form-control logininputs" name="phone" id="phone"
                                                    type="number" required="">
                                            </div>



                                            <!-- hr -->
                                            <div class="col-10 offset-1 text-left mb-3">

                                                <hr>
                                            </div>



                                            <!-- describe your department -->
                                            <div class="col-10 offset-1 text-left">
                                                <label class="loginlabels" for="desc">Which option best describes your
                                                    department</label>
                                                <select class="form-control custom-select loginselect" name="department_id"
                                                    id="desc" required="">

                                                  @foreach ($departments as $dept)
                                                <option value="{{$dept->id}}">{{$dept->name}}</option>
                                                  @endforeach

                                                </select>
                                            </div>



                                            <!-- size -->
                                            <div class="col-10 offset-1 text-left">
                                                <label class="loginlabels" for="businesssize">What size is your
                                                    business</label>
                                                <select required="" class="form-control custom-select loginselect"
                                                    name="business_size" id="businesssize">
                                                    <option value="" selected=""></option>
                                                    <option value="1-20">1-20</option>
                                                    <option value="20-100">20-100</option>
                                                    <option value="100-500">100-500</option>
                                                    <option value="500+ Employees">500+ Employees</option>

                                                </select>

                                            </div>


                                            <!-- industry -->
                                            <div class="col-10 offset-1 text-left">
                                                <label class="loginlabels" for="industry">Industry of your
                                                    business</label>
                                                <select required="" class="form-control custom-select loginselect" name="industry_id"
                                                    id="industry">
                                                  
                                                  @foreach ($industries as $industry)
                                                  <option value="{{$industry->id}}">{{$industry->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>




                                            <!-- submit or back -->
                                            <div class="tg-btnarea col-10 offset-1">


                                                <a class="tg-btn tg-btnprevious" href="javascript:void(0);">Back</a>
                                                <button type="submit" class="float-right">
                                                    <a class="tg-btn loginnextbutton">Sign up</a>
                                                </button>

                                              


                                            </div>
                                        </div>
                                    </fieldset>
                                    <!-- set 2 -->
                            </div>
                        </form>
                      </div>
                        <!-- col ex -->



                    </div>
                </div>

            </div>

      

        </div>
    </div>
    {{-- layout end --}}
</main>
{{-- end main --}}






@endsection
{{-- end section --}}