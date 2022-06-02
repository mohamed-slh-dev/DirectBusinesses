@extends('layouts.customer')



{{-- section --}}
@section('content')


{{-- banner --}}
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-pagetitle">
                    <h1>Help</h1>

                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="tg-active">Help</li>
                </ol>
            </div>
        </div>
    </div>
</div>
{{-- end banner --}}







{{-- main --}}
<main id="tg-main" class="tg-main tg-haslayout" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div id="tg-twocolumns" class="tg-twocolumns">
                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                    <aside id="tg-sidebar" class="tg-sidebar">
                        <div class="tg-widgetprofile">
                            <figure class="tg-profilebannerimg">
                                <img src="{{ asset('assets/uploads/profile-logos/'.$user->profile_img) }}" alt="image description">
                            </figure>
                            <div class="tg-widgetcontent">

                                <div class="tg-admininfo">
                                    <h3>{{$user->company_name}}</h3>
                                    <h4>{{$user->industry->name}}</h4>



                                    <ul class="tg-matadata">
                                        <li style="width: 140px;">

                                            <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-1"
                                                data-rating="4" style="display:inline-block; text-align: center;"></div>


                                        </li>

                                    </ul>


                                </div>
                            </div>
                        </div>
                        <div class="tg-widgetdashboard">
                            <nav id="tg-dashboardnav" class="tg-dashboardnav">
                                <ul>
                                    <li>
                                        <a href="{{ route('customer.profile') }}" class="tg-active">
                                            <i class="fa fa-user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                
                                    <li>
                                        <a href="{{ route('customer.home') }}">
                                            <i class="fa fa-home"></i>
                                            <span>Home</span>
                                        </a>
                                    </li>
                                
                                
                                
                                    <li>
                                        <a href="{{ route('customer.profile.requirements') }}">
                                            <i class="fa fa-tasks"></i>
                                            <span>Requirements</span>
                                        </a>
                                    </li>
                                
                                
                                    <li>
                                        <a href="{{ route('customer.profile.deals') }}">
                                            <i class="fa fa-briefcase"></i>
                                            <span>Deals</span>
                                        </a>
                                    </li>
                                
                                
                                    <li>
                                        <a href="{{ route('customer.profile.auctions') }}">
                                            <i class="fa fa-dropbox"></i>
                                            <span>Auctions</span>
                                        </a>
                                    </li>
                                
                                
                                    <li>
                                        <a href="{{ route('customer.profile.reviews') }}">
                                            <i class="fa fa-comments"></i>
                                            <span>Reviews</span>
                                        </a>
                                    </li>
                                
                                    <li>
                                        <a href="{{ route('customer.profile.settings') }}">
                                            <i class="fa fa-gears"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                
                                
                                    <li class="tg-active">
                                        <a href="{{ route('customer.profile.help') }}">
                                            <i class="fa fa-info-circle"></i>
                                            <span>Help</span>
                                        </a>
                                    </li>
                                
                                
                                    <li class="bottom-radius">
                                        <a href="{{ route('login') }}">
                                            <i class="fa fa-sign-out"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </aside>
                </div>


                <!-- content -->
                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-dashboard">


                            <!-- wrapper upper -->
                            <div class="tg-companyfeatures">




                                <!-- Informations -->
                                <div class="tg-companyfeaturetitle" style="margin-top: 20px">
                                    <h3 class="text-white-f profile-subtitles-custom">Reach Us</h3>
                                </div>




                                <!-- contact us -->
                                <div class="tg-companyfeaturebox" style="padding-top:20px; padding-bottom: 25px;">

                                    <div class="row no-gutters">

                                        <div class="col-xs-12 col-md-12">
                                            <p class="contactus-button">
                                                <a href="tel:+971 87 121 222" class="">
                                                    <i class="fa fa-phone"></i>Contact Our Support
                                                </a>
                                            </p>
                                        </div>

                                    </div>


                                </div>
                                <!-- contact us -->



                                <div class="tg-haslayout all-radius"
                                    style="background-color: white; padding: 20px 0px;">




                                <form action="{{ route('customer.profile.help.addHelp') }}" method="post">
                                    @csrf
                                    <div class="row no-gutters">

                                        <div class="col-xs-12 col-md-4">
                                            <p class="info-cols mb-0">
                                                <input class="contactusinput custom-control" type="text" name="name"
                                                    id="" placeholder="Full Name">
                                            </p>
                                        </div>


                                        <div class="col-xs-12 col-md-4">
                                            <p class="info-cols mb-0">
                                                <input class="contactusinput custom-control" type="email" name="email"
                                                    id="" placeholder="E-mail">
                                            </p>
                                        </div>


                                        <div class="col-xs-12 col-md-4">
                                            <p class="info-cols mb-0">
                                                <input class="contactusinput custom-control" type="text" name="title"
                                                    id="" placeholder="Subject">
                                            </p>
                                        </div>


                                        <div class="col-xs-12">
                                            <p class="info-cols mb-0">
                                                <textarea class="contactusta" name="message" id="" cols="30" rows="7"
                                                    placeholder="Your Message"></textarea>
                                            </p>
                                        </div>




                                        <div class="col-xs-12">
                                            <p class="info-cols mb-0">
                                                <button class="btn contactusbutton">
                                                    Send Mail
                                                </button>
                                            </p>
                                        </div>





                                    </div>
                                    <!-- end row -->

                                </form>

                                </div>
                                <!-- informations -->


                                <!-- hr -->
                                <div class="tg-companyfeaturebox" style="padding-top:0px;">

                                    <hr>

                                </div>
                                <!-- end hr -->

                            </div>
                            <!-- end of info to display -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
{{-- end main --}}











{{-- modals --}}

{{-- end modals --}}





@endsection
{{-- end section --}}