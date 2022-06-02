@extends('layouts.login')





{{-- section --}}
@section('content')





{{-- main --}}
<main id="tg-main" class="tg-main tg-paddingzero tg-haslayout" style="background-color: black; position:relative">


    <div class="logincover" style="background-image:url({{ asset('assets/prev-images/startup-bg.jpg') }})"></div>
    <div class="logincoverdiv"></div>
    <!--************************************
					Appointment Start
			*************************************-->


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
                            <h3 class="loginheading">Startup<br>Registeration</h3>
                            
                        </div>



                        <!-- col ex -->
                        <div class="col-12">
                            <div class="tg-appointmentsetting pb-0">
                                <form class="tg-formbookappointment" method="post" action="{{ route('startup.registeration') }}" >
                                    @csrf


                                    <!-- set 1 -->
                                    <fieldset class="tg-formstepone tg-current">

                                        <div class="tg-progressbox bg-white pb-0">

                                            <!-- links -->
                                            <ul class="tg-formprogressbar formprogressbarwrapper d-none">
                                                <li class="tg-active"><span>Basic Info</span></li>
                                                <li><span>Content</span></li>
                                                <li><span>Tags</span></li>

                                            </ul>
                                            <!-- end inks -->


                                            <!-- name -->
                                            <div class="col-10 offset-1 text-left mt-4">
                                                <label class="loginlabels" for="fname">Full Name</label>
                                                <input class="form-control logininputs" name="name" id="fname"
                                                    type="text">
                                            </div>

                                            <!-- company name -->
                                            <div class="col-10 offset-1 text-left">
                                                <label class="loginlabels" for="companyname">Company Name <span
                                                        class="text-muted font-12">(Optional)</span></label>
                                                <input class="form-control logininputs" name="company_name"
                                                    id="companyname" type="text">
                                            </div>




                                            <!-- email -->
                                            <div class="col-10 offset-1 text-left">
                                                <label class="loginlabels" for="email">Email</label>
                                                <input class="form-control logininputs" name="email" id="email"
                                                    type="email">
                                            </div>


                                            <!-- password -->
                                            <div class="col-10 offset-1 text-left">
                                                <label class="loginlabels" for="password">Password</label>
                                                <input class="form-control logininputs" name="password" id="password"
                                                    type="password">
                                            </div>



                                            <!-- industry -->
                                            <div class="col-10 offset-1 text-left">
                                                <label class="loginlabels" for="industry">Industry of your
                                                    business</label>
                                                <select class="form-control custom-select loginselect" name="industry_id"
                                                    id="industry">
                                                  
                                                    @foreach ($industries as $industry)
                                                    <option value="{{$industry->id}}">{{$industry->name}}</option>
                                                            @endforeach
                                                </select>
                                            </div>



                                            <!-- country hq -->
                                            <div class="col-10 offset-1 text-left">
                                                <label class="loginlabels" for="country">Country of Headquarter</label>
                                                <select class="form-control custom-select loginselect" name="country_id"
                                                    id="country">
                                                    @foreach ($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                                    @endforeach
                                                   
                                                </select>
                                            </div>



                                            <!-- Company Location -->
                                            <div class="col-10 offset-1 text-left">
                                                <label class="loginlabels" for="country">Company Location</label>
                                                <textarea class="form-control logintextarea" name="location" id="" cols="30"
                                                    rows="6"></textarea>
                                            </div>


                                            <div class="tg-btnarea col-10 offset-1">

                                                <div class="row align-items-center">
                                                    <div class="col-6">
                                                        <a class="tg-btn switchlogin-button mb-2"
                                                            style="line-height: 2rem;" href="{{ route('startup.login') }}"><i
                                                                class="fa fa-circle"></i>Already have account?</a>
                                                        <br>

                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <button type="submit" class="tg-btn loginnextbutton">
                                                            Sign up
                                                        </button>
                                                      
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </fieldset>
                                    <!-- end set 1 -->

                                </form>
                            </div>
                        </div>
                        <!-- col ex -->



                    </div>
                </div>

            </div>


        </div>
    </div>
    {{-- end layout --}}
</main>
{{-- end main --}}






@endsection
{{-- end section --}}