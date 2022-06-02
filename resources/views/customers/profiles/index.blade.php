@extends('layouts.customer')



{{-- section --}}
@section('content')



{{-- banner --}}
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-pagetitle">
                    <h1>Profile</h1>

                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="tg-active">Profile</li>
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
                                    <li class="tg-active">
                                        <a href="{{ route('customer.profile') }}">
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
                                
                                
                                    <li>
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


                            <!-- about -->
                            <div class="tg-companyfeatures">
                                <div class="tg-companyfeaturebox tg-introduction">
                                    <div class="tg-companyfeaturetitle">
                                        <h3 class="text-white-f profile-subtitles-custom">About</h3>
                                    </div>
                                    <div class="tg-description text-white-f">
                                        <p>
                                            {{$user->desc}}
                                        </p>

                                    </div>
                                </div>
                                <!-- about -->



                                <!-- Informations -->
                                <div class="tg-companyfeaturetitle" style="margin-top: 20px">
                                    <h3 class="text-white-f profile-subtitles-custom">Contact Us</h3>
                                </div>

                                <div class="tg-haslayout">

                                    <div class="row">

                                        <div class="col-xs-4">
                                            <p class="info-cols">
                                                <i class="fa fa-map-marker"></i>
                                                <a href="#" class="text-black-f" style="text-decoration: underline;">
                                                    <span class="company-profile-info">
                                                      {{$user->city}}
                                                    </span>
                                                </a>

                                            </p>
                                        </div>



                                        <div class="col-xs-4">
                                            <p class="info-cols">
                                                <i class="fa fa-envelope"></i>
                                                <span class="company-profile-info">
                                                    {{$user->email}}
                                                </span>
                                            </p>
                                        </div>

                                        <div class="col-xs-4">
                                            <p class="info-cols">
                                                <i class="fa fa-phone"></i>
                                                <span class="company-profile-info">
                                                    {{$user->phone}}
                                                </span>
                                            </p>
                                        </div>

                                        <div class="col-xs-4">
                                            <p class="info-cols">
                                                <i class="fa fa-link"></i>
                                                <span class="company-profile-info">
                                                    {{$user->company_url}}
                                                </span>
                                            </p>
                                        </div>



                                    </div>
                                    <!-- end row -->

                                </div>
                                <!-- informations -->






                                <!-- social info -->
                                <div class="tg-dashboardbox" style="margin-bottom: 25px;">

                                    <div class="tg-companyfeaturetitle" style="margin-top: 35px">
                                        <h3 class="text-white-f profile-subtitles-custom">Links</h3>
                                    </div>


                                    <div class="tg-socialinformationbox">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <a class="social-links-link" href="javascript:void(0);">
                                                    <div class="form-group tg-inputwithicon tg-facebook">
                                                        <i class="tg-icon fa fa-facebook"></i>
                                                        <input readonly type="text" class="form-control"
                                                            name="facebooklink" value="{{!empty($user_social->where('platform','facebook')->first()->url) ? $user_social->where('platform','facebook')->first()->url : ''}}">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                                <a class="social-links-link" href="javascript:void(0);">
                                                    <div class="form-group tg-inputwithicon tg-twitter">
                                                        <i class="tg-icon fa fa-twitter"></i>
                                                        <input readonly type="text" class="form-control"
                                                            name="twitterlink" value="{{!empty($user_social->where('platform','twitter')->first()->url) ? $user_social->where('platform','twitter')->first()->url : ''}}">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                                <a class="social-links-link" href="javascript:void(0);">
                                                    <div class="form-group tg-inputwithicon tg-linkedin">
                                                        <i class="tg-icon fa fa-linkedin"></i>
                                                        <input readonly type="text" class="form-control"
                                                            name="linkedinlink" value="{{!empty($user_social->where('platform','linkedin')->first()->url) ? $user_social->where('platform','linkedin')->first()->url : ''}}">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                                <a class="social-links-link" href="javascript:void(0);">
                                                    <div class="form-group tg-inputwithicon tg-skype">
                                                        <i class="tg-icon fa fa-skype"></i>
                                                        <input readonly type="text" class="form-control"
                                                            name="skypelink" value="{{!empty($user_social->where('platform','skype')->first()->url) ? $user_social->where('platform','skype')->first()->url : ''}}">
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <a class="social-links-link" href="javascript:void(0);">
                                                    <div class="form-group tg-inputwithicon tg-googleplus">
                                                        <i class="tg-icon fa fa-google-plus"></i>
                                                        <input readonly type="text" class="form-control"
                                                            name="googlepluslink" value="{{!empty($user_social->where('platform','googleplus')->first()->url) ? $user_social->where('platform','googleplus')->first()->url : ''}}">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <a class="social-links-link" href="javascript:void(0);">
                                                    <div class="form-group tg-inputwithicon tg-pinterestp">
                                                        <i class="tg-icon fa fa-pinterest-p"></i>
                                                        <input readonly type="text" class="form-control"
                                                            name="pinterestlink" value="{{!empty($user_social->where('platform','painterest')->first()->url) ? $user_social->where('platform','painterest')->first()->url : ''}}">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- social info -->





                                {{-- if there's one --}}
                                @if ($user->certificates->count() > 0)


                                <!-- certificates view -->
                                <div class="tg-companyfeaturebox tg-certicicatesawards">
                                    <div class="tg-companyfeaturetitle">
                                        <h3 class="text-white-f profile-subtitles-custom">Certificates &amp; Awards</h3>
                                    </div>
                                    <ul>
                                       @foreach ($user->certificates as $certi)
                                           
                                        <li class="margin-top-0 cert-border-top"
                                            style="padding: 24px; background:white;">
                                            <figure>
                                                <!-- <img src="images/serviceproviders/img-09.jpg" alt="images description"> -->
                                            </figure>
                                            <div class="tg-textbox" style="padding: 0px;">
                                                <h4 class="text-black-f"> {{$certi->title}} </h4>
                                                <time class="text-darkmaroon-f" style="font-weight: 500;"
                                                    datetime="2016-08-08">{{$certi->date}}</time>

                                            </div>
                                        </li>

                                        @endforeach
                                    </ul>
                                </div>
                                <!-- end certificate -->


                                @endif
                                {{-- end if --}}


                                <!-- hr -->
                                <div class="tg-companyfeaturebox" style="padding-top:0px;">

                                    <hr>

                                </div>
                                <!-- end hr -->


                            </div>
                            <!-- end of info to display -->





                            <!-- top customers -->
                            <div class="tg-dashboardbox" style="margin-bottom: 25px;">

                                <div class="tg-companyfeaturetitle" style="margin-top: 35px">

                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <h3 class="text-white-f profile-subtitles-custom">Top 5 Clients</h3>
                                        </div>

                                        <div class="col-6">
                                            <a href="javascript:void(0);"
                                                class="tg-btnaddservices text-offwhite-f profileunlockbutton"
                                                style="text-decoration: underline;"><i
                                                    class="fa fa-lock mr-2"></i>Unlock Feature</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="tg-socialinformationbox">
                                    <div class="row no-gutters">
                                        <div class="col-12 bg-white border-all-radius py-4">


                                            <div class="row topfive-row">
                                                <div class="col-md-6 col-lg-4 col-xl-4">
                                                    <img src="{{ asset('assets/prev-images/demologodefault.jpg') }}" alt="">
                                                    <div class="topfive-border-bottom">
                                                        {{-- <p>Orbits Ltd.</p> --}}
                                                        <p>***</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-4 col-xl-2">
                                                    <img src="{{ asset('assets/prev-images/demologodefault.jpg') }}" alt="">
                                                    <div class="topfive-border-bottom">
                                                        <p>***</p>
                                                    </div>
                                                </div>


                                                <div class="col-md-6 col-lg-4 col-xl-2">
                                                    <img src="{{ asset('assets/prev-images/demologodefault.jpg') }}" alt="">
                                                    <div class="topfive-border-bottom">
                                                        <p>***</p>
                                                    </div>

                                                </div>


                                                <div class="col-md-6 col-lg-4 col-xl-2">
                                                    <img src="{{ asset('assets/prev-images/demologodefault.jpg') }}" alt="">
                                                    <div class="topfive-border-bottom">
                                                        <p>***</p>
                                                    </div>

                                                </div>



                                                <div class="col-md-6 col-lg-4 col-xl-2">
                                                    <img src="{{ asset('assets/prev-images/demologodefault.jpg') }}" alt="">
                                                    <div class="topfive-border-bottom">
                                                        <p>***</p>
                                                    </div>

                                                </div>







                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- end top customers -->







                            <!-- customers reviews + recent activities -->
                            <div class="tg-profilewidgetholder" style="margin-top: 20px;">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tg-profilewidget tg-peaoplereviews">
                                            <div class="tg-profilewidgethead">
                                                <a class="tg-btnrefresh switch-reviews-button"
                                                    href="javascript:void(0);">Switch <i class="lnr lnr-sync"></i></a>
                                                <p class="mb-1"></p>

                                                <h2 id="switch-reviews-title">Customers Reviews</h2>
                                            </div>

                                            <!-- customers review box -->
                                            <div id="switch-reviews-customers" class="tg-box">
                                                <div class="tg-reviewarea">
                                                    <ul class="tg-reviews tg-themescrollbar">
                                                        @foreach ($ratings->where('reviewer_type','Customer') as $rate)
                                                        
                                                        <li>

                                                            <div class="tg-reviewcontent">
                                                                <div class="tg-reviewhead">
                                                                    <div class="tg-reviewheading review-company-name">
                                                                        <h3><a href="{{ route('customer.companies.profile', [$rate->reviewer->id]) }}">
                                                                            {{$rate->reviewer->company_name}}
                                                                        </a></h3>
                                                                    </div>
                                                                    <!-- progress bar -->
                                                                    <span class="d-block">
                                                                        <span>
                                                                            <div class="progress">
                                                                            @if ( $rate->rating == 1 )
                                                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                                                                                role="progressbar" aria-valuenow="20"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                style="width: 20%">
                                                                                Bad</div>
                                                                            
                                                                            @elseif ( $rate->rating == 2 )
                                                                           
                                                                            <div class="progress-bar bg-warning-bar progress-bar-striped progress-bar-animated"
                                                                            role="progressbar" aria-valuenow="40"
                                                                            aria-valuemin="0" aria-valuemax="100"
                                                                            style="width: 40%">
                                                                            Poor</div>
                                                                            @elseif( $rate->rating == 3 )
                                                                           
                                                                            <div class="progress-bar bg-primary-bar progress-bar-striped progress-bar-animated"
                                                                            role="progressbar" aria-valuenow="40"
                                                                            aria-valuemin="0" aria-valuemax="100"
                                                                            style="width: 40%">
                                                                            Avarage</div>
            
                                                                             @elseif( $rate->rating == 4 )
                                                                          
                                                                             <div class="progress-bar bg-success-bar progress-bar-striped progress-bar-animated"
                                                                                role="progressbar" aria-valuenow="80"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                style="width: 80%">
                                                                                Great</div>
                                                                            @elseif ( $rate->rating == 5 )
                                                                            <div class="progress-bar bg-success-bar progress-bar-striped progress-bar-animated"
                                                                            role="progressbar" aria-valuenow="100"
                                                                            aria-valuemin="0" aria-valuemax="100"
                                                                            style="width: 100%">
                                                                            Excellent</div>
                                                                            @endif
                                                                           
                                                                        </div>
            
                                                                        </span>
                                                                    </span>
                                                                    <!-- end progress bar -->
                                                                </div>

                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- end of customers reviews box -->







                                            <!-- vendors review box -->
                                            <div id="switch-reviews-vendors" class="tg-box d-none">
                                                <div class="tg-reviewarea">
                                                    <ul class="tg-reviews tg-themescrollbar">
                                                        @foreach ($ratings->where('reviewer_type','Vendor') as $rate)
                                                        
                                                        <li>

                                                            <div class="tg-reviewcontent">
                                                                <div class="tg-reviewhead">
                                                                    <div class="tg-reviewheading review-company-name">
                                                                        <h3><a href="{{ route('customer.companies.profile', [$rate->reviewer->id]) }}">
                                                                            {{$rate->reviewer->company_name}}
                                                                        </a></h3>
                                                                    </div>
                                                                    <!-- progress bar -->
                                                                    <span class="d-block">
                                                                        <span>
                                                                            <div class="progress">
                                                                            @if ( $rate->rating == 1 )
                                                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                                                                                role="progressbar" aria-valuenow="20"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                style="width: 20%">
                                                                                Bad</div>
                                                                            
                                                                            @elseif ( $rate->rating == 2 )
                                                                           
                                                                            <div class="progress-bar bg-warning-bar progress-bar-striped progress-bar-animated"
                                                                            role="progressbar" aria-valuenow="40"
                                                                            aria-valuemin="0" aria-valuemax="100"
                                                                            style="width: 40%">
                                                                            Poor</div>
                                                                            @elseif( $rate->rating == 3 )
                                                                           
                                                                            <div class="progress-bar bg-primary-bar progress-bar-striped progress-bar-animated"
                                                                            role="progressbar" aria-valuenow="40"
                                                                            aria-valuemin="0" aria-valuemax="100"
                                                                            style="width: 40%">
                                                                            Avarage</div>
            
                                                                             @elseif( $rate->rating == 4 )
                                                                          
                                                                             <div class="progress-bar bg-success-bar progress-bar-striped progress-bar-animated"
                                                                                role="progressbar" aria-valuenow="80"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                style="width: 80%">
                                                                                Great</div>
                                                                            @elseif ( $rate->rating == 5 )
                                                                            <div class="progress-bar bg-success-bar progress-bar-striped progress-bar-animated"
                                                                            role="progressbar" aria-valuenow="100"
                                                                            aria-valuemin="0" aria-valuemax="100"
                                                                            style="width: 100%">
                                                                            Excellent</div>
                                                                            @endif
                                                                           
                                                                        </div>
            
                                                                        </span>
                                                                    </span>
                                                                    <!-- end progress bar -->
                                                                </div>

                                                            </div>
                                                        </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- end of vendors reviews box -->



                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tg-profilewidget tg-recentactivities">
                                            <div class="tg-profilewidgethead">
                                                <a class="tg-btnrefresh" href="javascript:void(0);"></a>
                                                <h2>Recent Activities</h2>
                                            </div>
                                            <div class="tg-box">
                                                <div class="tg-reviewarea">
                                                    <ul class="tg-reviews tg-themescrollbar">
                                                        {{-- <li>
                                                            <div class="tg-recentcontent">
                                                                <h3>You Logged In Via Mobile</h3>
                                                                <span>02 Minutes Ago</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="tg-recentcontent">
                                                                <h3>You Submit Quatation for <a
                                                                        class="quotation-company" href="#">E-commerce
                                                                    </a>
                                                                </h3>
                                                                <span>01 Day Ago</span>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="tg-recentcontent">
                                                                <h3>You Posted A Requiemrent - <a
                                                                        class="quotation-company" href="#">Sport Kits
                                                                    </a>
                                                                </h3>
                                                                <span>03 Day Ago</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="tg-recentcontent">
                                                                <h3>Your Quatation accepted for DesignLanding Page </h3>
                                                                <span>03 Days Ago</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="tg-recentcontent">
                                                                <h3>You Logged In Via Mobile</h3>
                                                                <span>02 Minutes Ago</span>
                                                            </div>
                                                        </li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of customer reviews -->



                            {{-- if there's one --}}
                            @if ($user->services->count() > 0)
                                

                            <!-- services with prices -->
                            <div class="tg-companyfeaturebox tg-services" style="padding-top:35px;">
                                <div class="tg-companyfeaturetitle">
                                    <h3 class="text-white-f profile-subtitles-custom">Services</h3>
                                </div>

                                <!-- serice -->
                                 <div id="tg-accordion" class="tg-accordion">

                                    @foreach ($user->services as $service)
                                        
                                  
                                    <div class="tg-service tg-panel" style="border-bottom: 1px solid grey">
                                        <div class="tg-accordionheading">
                                            <h4><span>{{$service->service}}</span></h4>
                                        </div>
                                        <div class="tg-panelcontent">
                                            <div class="tg-description">
                                                <p style="color:#383636">
                                                    {{$service->desc}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end service -->

                                    @endforeach

                                </div>
                            </div>
                            <!-- services with prices -->



                            @endif
                            {{-- end if --}}







                            <!-- blogs -->
                            <div class="tg-companyfeaturebox" style="padding-top:35px;">
                                <div class="tg-companyfeaturetitle">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="text-white-f profile-subtitles-custom">Blogs</h3>
                                        </div>
                            
                                        <div class="col-6">
                                            <a href="{{ route('customer.blogs.post') }}" class="tg-btnaddservices text-offwhite-f"
                                                style="text-decoration: underline;">+
                                                Add Blog</a>
                                        </div>
                                    </div>
                                </div>
                            
                            

                                {{-- if there's some --}}
                                @if ($user->blogs->count() > 0)
                            
                                <div class="row" style="margin-top: 43px;">
                            
                            
                                    @foreach ($user->blogs as $blog)
                            
                                    <!-- first blog -->
                                    <div class="col-sm-4">
                            
                                        <a href="{{ route('customer.blogs.view', [$blog->id]) }}" class="blog-compact-item-container">
                                            <div class="blog-compact-item blog-custom-card border-all-radius">
                                                <img src="{{ asset('assets/uploads/blogs/'.$blog->img) }}" alt="" class="border-bothtop-radius"
                                                    style="height: 170px; width: 100%; object-fit:contain">
                            
                                                {{-- tags --}}
                                                <span class="blog-item-tag custom-blog-tag" style="word-break:break-all;">
                            
                                                    @foreach ($blog->tags as $tag)
                                                    <span class="mr-1" style="word-break:break-word;">{{ $tag->subcategory->name }}</span>
                                                    @endforeach
                            
                                                </span>
                                                {{-- end tags --}}
                            
                                                <div class="blog-compact-item-content custom-blog-content">
                                                    <ul class="blog-post-tags">
                                                        <li class="custom-blog-date">{{ date('d M Y', strtotime($blog->created_at)) }}</li>
                                                    </ul>
                                                    <h3 class="custom-blog-title">{{ $blog->title }}</h3>
                            
                                                    <p class="custom-blog-parag">{{ $blog->desc }}</p>
                                                </div>
                                            </div>
                                        </a>
                            
                                    </div>
                                    <!-- first card -->
                            
                            
                                    @endforeach
                                    {{-- end foreach --}}
                            
                            
                            
                            
                            
                            
                                </div>
                                <!-- end row -->
                            

                                @else
                                
                                <div class="row empty-section" style="margin-top: 43px;">
                                    <div class="col-12 text-center">
                                        <h4>Empty</h4>
                                    </div>
                                </div>
                                
                                @endif
                                
                            </div>
                            <!-- blogs -->


                            <!-- info -->
                            <!-- <div class="tg-dashboardnotifications">
										<div class="tg-dashboardnotificationholder">
											<div class="tg-dashboardnotofication tg-totaljobs">
												<i class="lnr lnr-calendar-full"></i>
												<div class="tg-dashboardinfo">
													<h3>Total Posted Requirements</h3>
													<span>120 Requirements Posted</span>
												</div>
											</div>
										</div>
										<div class="tg-dashboardnotificationholder">
											<div class="tg-dashboardnotofication tg-totalappointment">
												<i class="lnr lnr-layers"></i>
												<div class="tg-dashboardinfo">
													<h3>Total Submitted Quotations</h3>
													<span>109 Quotation </span>
												</div>
											</div>
										</div>
										<div class="tg-dashboardnotificationholder">
											<div class="tg-dashboardnotofication tg-currentpackege">
												<i class="lnr lnr-eye"></i>
												<div class="tg-dashboardinfo">
													<h3>Total Accepted Quotations </h3>
													<span>100 Quotations </span>
												</div>
											</div>
										</div>
									</div> -->
                            <!-- infos -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


{{-- end main --}}



@endsection
{{-- end section --}}