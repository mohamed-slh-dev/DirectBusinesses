@extends('layouts.customer')



{{-- section --}}
@section('content')



{{-- banner --}}
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-pagetitle">
                    <h1>Reviews</h1>

                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="tg-active">Reviews</li>
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
                                    <h3> {{$user->company_name}} </h3>
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
                                
                                
                                    <li class="tg-active">
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



                                <!-- hr -->
                                <div class="tg-companyfeaturebox" style="padding-top:0px;">

                                    <hr>

                                </div>
                                <!-- end hr -->






                                <!-- customers reviews + recent activities -->
                                <div class="tg-profilewidgetholder" style="margin-top: 20px;">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="tg-profilewidget tg-peaoplereviews" style="border-radius:5px;">

                                                <!-- heading -->
                                                <div class="tg-profilewidgethead">
                                                    <a class="tg-btnrefresh switch-reviews-button"
                                                        href="javascript:void(0);">Switch <i
                                                            class="lnr lnr-sync"></i></a>
                                                    <p class="mb-1"></p>

                                                    <h2 id="switch-reviews-title">Customers Reviews</h2>
                                                </div>
                                                <!-- heading -->


                                                <!-- customers reviews -->
                                                <div id="switch-reviews-customers" class="tg-feedbacks"
                                                    style="background:white; padding: 30px 15px;">

                                                @foreach ($ratings->where('reviewer_type','Customer') as $rate)
                                                    
                                           
                                                    <!-- comment 1 -->
                                                    <div class="tg-feedback d-block">
                                                        <figure class=""><a href="javascript:void(0);"><img
                                                            src="{{ asset('assets/uploads/profile-logos/'.$rate->reviewer->profile_img) }}" alt="image description"></a>
                                                </figure>
                                                        <div class="tg-feedbackcontent">

                                                            <div class="tg-feedbackbox review-content-wrapper">
                                                                <div class="tg-contenthead">
                                                                    <div class="tg-leftbox">
                                                                        <div class="tg-name">
                                                                            <h4><a href="javascript:void(0);"
                                                                                    class="text-white-f">
                                                                                {{$rate->title}} </a></h4>
                                                                        </div>
                                                                        <ul class="tg-matadata">
                                                                            <li><a href="{{ route('customer.companies.profile', [$rate->reviewer_id]) }}"
                                                                                    class="text-warning">
                                                                            {{$rate->reviewer->company_name}}</a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);"
                                                                                    class="text-offwhite-f">
                                                                                 {{$rate->date}} </a></li>
                                                                        </ul>
                                                                    </div>

                                                                    <!-- rating % -->
                                                                    <div class="tg-overallratingbox review-prec">
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
        
                                                                </div>
                                                                </div>
                                                                <div class="tg-description text-offwhite-f">
                                                                    <p>
                                                                        {{$rate->comment}}
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end comment 1 -->
                                                    @endforeach

                                                </div>
                                                <!-- end customers reviews -->










                                                <!-- vendors reviews -->
                                                <div id="switch-reviews-vendors" class="tg-feedbacks d-none"
                                                    style="background:white; padding: 30px 15px;">


                                                  

                                                    @foreach ($ratings->where('reviewer_type','Vendor') as $rate)
                                                    
                                           
                                                    <!-- comment 1 -->
                                                    <div class="tg-feedback d-block">
                                                        <figure class=""><a href="javascript:void(0);"><img
                                                            src="{{ asset('assets/uploads/profile-logos/'.$rate->reviewer->profile_img) }}" alt="image description"></a>
                                                </figure>
                                                        <div class="tg-feedbackcontent">

                                                            <div class="tg-feedbackbox review-content-wrapper">
                                                                <div class="tg-contenthead">
                                                                    <div class="tg-leftbox">
                                                                        <div class="tg-name">
                                                                            <h4><a href="javascript:void(0);"
                                                                                    class="text-white-f">
                                                                                {{$rate->title}} </a></h4>
                                                                        </div>
                                                                        <ul class="tg-matadata">
                                                                            <li><a href="{{ route('customer.companies.profile', [$rate->reviewer_id]) }}"
                                                                                    class="text-warning">
                                                                            {{$rate->reviewer->company_name}}</a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);"
                                                                                    class="text-offwhite-f">
                                                                                 {{$rate->date}} </a></li>
                                                                        </ul>
                                                                    </div>

                                                                    <!-- rating % -->
                                                                    <div class="tg-overallratingbox review-prec">
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
        
                                                                </div>
                                                                </div>
                                                                <div class="tg-description text-offwhite-f">
                                                                    <p>
                                                                        {{$rate->comment}}
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end comment 1 -->
                                                    @endforeach


                                                </div>
                                                <!-- end vendors reviews -->

                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end of customer reviews -->


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