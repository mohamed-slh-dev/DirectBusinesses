@extends('layouts.login')





{{-- section --}}
@section('content')





{{-- main --}}
<main id="tg-main" class="tg-main tg-paddingzero tg-haslayout"
    style="background-color: black; position:relative; min-height: 92vh">


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
                            <h3 class="loginheading">Login</h3>

                        </div>



                        <!-- col ex -->
                        <div class="col-12">
                            <div class="tg-appointmentsetting pb-0">
                                <form class="tg-formbookappointment" action="{{ route('checklogin') }}" method="post">
                                    @csrf

                                    <!-- set 1 -->
                                    <fieldset class="tg-formstepone tg-current">

                                        <div class="tg-progressbox bg-white px-0 pb-0">

                                            <!-- links -->
                                            <ul class="tg-formprogressbar formprogressbarwrapper d-none">
                                                <li class="tg-active"><span>Basic Info</span></li>
                                                <li><span>Content</span></li>
                                                <li><span>Tags</span></li>

                                            </ul>
                                            <!-- end inks -->




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


                                            <!-- submit or back -->
                                            <div class="col-10 offset-1">

                                                <div class="row align-items-end">
                                                    <div class="col-12 col-lg-8 text-left">

                                                        <a class="tg-btn switchlogin-button d-inline-block"
                                                            href="{{ route('register') }}"><i class="fa fa-circle"></i>Create new
                                                            account?</a>
                                                        <br>
                                                        <a class="tg-btn switchlogin-button d-inline-block"
                                                            style="line-height: 2rem; padding-left: 0px;"
                                                            href="{{ route('startup.login') }}" target="_blank"><i
                                                                class="fa fa-circle"></i>Click for startup support</a>
                                                    </div>

                                                    <div class="col-12 col-lg-4 text-right">
                                                        <button  type="submit">
                                                            <a class="tg-btn loginnextbutton">Login</a>
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
    {{-- layout end --}}
</main>
{{-- end main --}}






@endsection
{{-- end section --}}