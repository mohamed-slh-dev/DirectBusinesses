@extends('layouts.customer')






{{-- make no margin in banner (only this page) --}}
<style>
    .tg-innerpagebanner {
    margin-bottom: 0px !important;
    }
</style>




{{-- section --}}
@section('content')


{{-- banner --}}
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-pagetitle">
                    <a href="{{ route('customer.home') }}" class="home-button-custom">
                        <i class="fa fa-arrow-circle-left"></i>Home</a>
                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="tg-active">Company Profile</li>
                </ol>
            </div>
        </div>
    </div>
</div>
{{-- end banner --}}









{{-- main --}}
<main id="tg-main" class="tg-main tg-haslayout tg-paddingzero" style="background-color: black;">
    <div class="tg-serviceprovider tg-detailpage tg-serviceproviderdetail">
        <div class="tg-detailpagehead">
            <figure>
                @if (empty($user->banner_img))
                <img style="object-fit: cover; object-position: center;"
                    src="{{ asset('assets/uploads/banner-imgs/default-header.png') }}" alt="image description">
                @else
                <img style="object-fit: cover; object-position: center;"
                    src="{{ asset('assets/uploads/banner-imgs/'.$user->banner_img) }}" alt="image description">
                @endif
            
                <figcaption>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-detailpageheadcontent">
                                    <div class="tg-companylogo"><img
                                            src="{{ asset('assets/uploads/profile-logos/'.$user->profile_img) }}"
                                            alt="image description"></div>
                                    <div class="tg-companycontent">

                                        <div class="tg-title">
                                            <h1>{{$user->company_name}}</h1>
                                            <span>{{$user->industry->name}}</span>
                                        </div>
                                        <ul class="tg-matadata">
                                            <li style="width: 200px;">

                                                <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-1"
                                                    data-rating="4" style="display:inline-block; text-align: center;">
                                                </div>

                                            </li>

                                        </ul>
                                    </div>
                                    <!-- <button class="tg-btn" type="buttton" data-toggle="modal" data-target=".tg-appointmentModal">Make Appointment</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>
        </div>


        <!-- small banner -->
        <div class="tg-companynameandviews" style="background-color: #ac5454;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <h2> {{$user->department->name}} </h2>
                    </div>
                </div>
            </div>
        </div>


        <div id="tg-twocolumns" class="tg-twocolumns">
            <div class="container">


                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8 pull-left">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-advertisement">
                                <!-- <img src="images/advertisement/img-01.png" alt="image description"></a> -->
                            </div>
                            <div class="tg-companyfeatures">
                                <div class="tg-companyfeaturebox tg-introduction">

                                    <div class="tg-companyfeaturetitle">
                                        <h3 class="text-white-f profile-subtitles-custom">About</h3>
                                    </div>

                                    @if ($user->desc == "")
                                        <div class="tg-companyfeaturebox empty-section">
                                            <h4>No info yet ..</h4>
                                        </div>
                                    @else
                                        <div class="tg-description">
                                            <p style="color:rgb(245, 245, 245) !important;">
                                                {{ $user->desc }}
                                            </p>
                                        </div>
                                    @endif
                                    
                                </div>
                                <!-- end about -->






                                <!-- Informations -->
                                <div class="tg-companyfeaturetitle d-none" style="margin-top: 20px">
                                    <h3 class="text-white-f profile-subtitles-custom">Contact Us</h3>
                                </div>

                                <div class="tg-haslayout d-none">

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
                                                    {{$user->copmany_url}}
                                                </span>
                                            </p>
                                        </div>



                                    </div>
                                    <!-- end row -->

                                </div>
                                <!-- informations -->









                                {{-- if there's services --}}
                                @if ($user->certificates->count() > 0)

                                <!-- certificates view -->
                                <div class="tg-companyfeaturebox tg-certicicatesawards">
                                    <div class="tg-companyfeaturetitle">
                                        <h3 class="text-white-f profile-subtitles-custom">Certificates &amp; Awards</h3>
                                    </div>
                                    <ul>
                                        @foreach ($user->certificates as $certi)

                                        <li class="margin-top-0 cert-border-top">
                                            <figure>
                                                <!-- <img src="images/serviceproviders/img-09.jpg" alt="images description"> -->
                                            </figure>
                                            <div class="tg-textbox" style="padding: 24px; background:#f7f7f7;">
                                                <h4 class="text-black-f">{{$certi->title}}</h4>
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


                                <div class="tg-companyfeaturebox" style="padding-top:0px;">

                                    <hr>

                                </div>



                                {{-- if there's services --}}
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








                                {{-- if there's reviews make this visible --}}
                                @if ($ratings->count() > 0)

                                <div class="tg-companyfeaturebox tg-reviews">
                                    <div class="tg-companyfeaturetitle">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-8">

                                                <h3 class="text-white-f" id="switch-reviews-title">Customers Reviews
                                                </h3>

                                            </div>

                                            <div class="col-4 text-right">
                                                <a class="tg-btnrefresh switch-reviews-button"
                                                    href="javascript:void(0);"
                                                    style="position: relative !important; display:inline-block !important">Switch
                                                    <i class="lnr lnr-sync"></i></a>
                                            </div>
                                        </div>


                                    </div>


                                    <!-- customer reviews -->
                                    <div id="switch-reviews-customers" class="tg-feedbacks">

                                        @foreach ($ratings->where('reviewer_type','Customer') as $rate)

                                        <!-- comment 1 -->
                                        <div class="tg-feedback">
                                            <figure class=""><a href="javascript:void(0);"><img
                                                        src="{{ asset('assets/uploads/profile-logos/'.$rate->reviewer->profile_img) }}"
                                                        alt="image description"></a>
                                            </figure>
                                            <div class="tg-feedbackcontent">

                                                <div class="tg-feedbackbox review-content-wrapper"
                                                    style="background:white;">
                                                    <div class="tg-contenthead">
                                                        <div class="tg-leftbox">
                                                            <div class="tg-name">
                                                                <h4><a href="#">{{$rate->title}}</a></h4>
                                                            </div>
                                                            <ul class="tg-matadata">
                                                                <li><a
                                                                        href="{{ route('customer.companies.profile', [$rate->reviewer->id]) }}">{{$rate->reviewer->company_name}}</a>
                                                                </li>
                                                                <li><a href="#">{{$rate->date}}</a></li>
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
                                                    <div class="tg-description">
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
                                    <!-- end customers reviews  -->












                                    <!-- customer reviews -->
                                    <div id="switch-reviews-vendors" class="tg-feedbacks d-none">


                                        @foreach ($ratings->where('reviewer_type','Vendor') as $rate)

                                        <!-- comment 1 -->
                                        <div class="tg-feedback">
                                            <figure class=""><a href="javascript:void(0);"><img
                                                        src="{{ asset('assets/uploads/profile-logos/'.$rate->reviewer->profile_img) }}"
                                                        alt="image description"></a>
                                            </figure>
                                            <div class="tg-feedbackcontent">

                                                <div class="tg-feedbackbox review-content-wrapper"
                                                    style="background:white;">
                                                    <div class="tg-contenthead">
                                                        <div class="tg-leftbox">
                                                            <div class="tg-name">
                                                                <h4><a href="#">{{$rate->title}}</a></h4>
                                                            </div>
                                                            <ul class="tg-matadata">
                                                                <li><a
                                                                        href="{{ route('customer.companies.profile', [$rate->reviewer->id]) }}">{{$rate->reviewer->company_name}}</a>
                                                                </li>
                                                                <li><a href="#">{{$rate->date}}</a></li>
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

                                                                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated"
                                                                    role="progressbar" aria-valuenow="40"
                                                                    aria-valuemin="0" aria-valuemax="100"
                                                                    style="width: 40%">
                                                                    Poor</div>
                                                                @elseif( $rate->rating == 3 )

                                                                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated"
                                                                    role="progressbar" aria-valuenow="40"
                                                                    aria-valuemin="0" aria-valuemax="100"
                                                                    style="width: 40%">
                                                                    Avarage</div>

                                                                @elseif( $rate->rating == 4 )

                                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                                                                    role="progressbar" aria-valuenow="80"
                                                                    aria-valuemin="0" aria-valuemax="100"
                                                                    style="width: 80%">
                                                                    Great</div>
                                                                @elseif ( $rate->rating == 5 )
                                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                                                                    role="progressbar" aria-valuenow="100"
                                                                    aria-valuemin="0" aria-valuemax="100"
                                                                    style="width: 100%">
                                                                    Excellent</div>
                                                                @endif

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p> {{$rate->comment}}.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- end comment 1 -->
                                        @endforeach

                                    </div>
                                    <!-- end customers reviews  -->






                                    <div class="tg-btnbox">
                                        <a class="tg-btn tg-btnloadmore" href="javascript:void(0);"></a>
                                    </div>
                                </div>


                                @endif
                                {{-- end if --}}


                                <div class="tg-companyfeaturebox tg-reviewformrating">
                                    <form class="tg-themeform tg-formleavefeedback"
                                        action="{{ route('vendor.companies.addreview') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="company_id" value="{{$company_id}}">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                                    <div class="tg-companyfeaturetitle">
                                                        <h3 class="text-white-f">Leave Your Review</h3>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="tg-reviewtitle">
                                                            <input type="text" name="title"
                                                                class="form-control text-black-f"
                                                                placeholder="Review Title">
                                                        </div>
                                                        <div class="tg-recommendedradio pl-2">
                                                            <select name="rate"
                                                                class="form-control custom-select loginselect" id=""
                                                                style="height: 40px !important; margin-bottom: 0px !important;">
                                                                <option value="" class="d-none " selected="">Your Rating
                                                                </option>

                                                                <option value="5">Excellent</option>
                                                                <option value="4">Great</option>

                                                                <option value="3">Average</option>

                                                                <option value="2">Poor</option>
                                                                <option value="1">Bad</option>

                                                            </select>
                                                        </div>
                                                    </div>



                                                    <!-- relationship with company -->
                                                    <div class="form-group">
                                                        <textarea name="relation" class="form-control text-black-f"
                                                            placeholder="What is your relationship with this reviewee company?"
                                                            style="height: 100px;"></textarea>
                                                    </div>






                                                    <!-- comment -->
                                                    <div class="form-group">
                                                        <textarea name="comment" class="form-control text-black-f"
                                                            placeholder="Your comment"></textarea>
                                                    </div>
                                                    <button type="submit" class="tg-btn p-submit-button">Submit
                                                        Review</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 pull-right">
                        <aside id="tg-sidebar" class="tg-sidebar">
                            <div class="tg-widget tg-widgetlocationandcontactinfo">
                                <div class="tg-mapbox">
                                    <div style="visibility: hidden !important;" id="tg-locationmap"
                                        class="tg-locationmap"></div>
                                </div>
                                <div class="tg-contactinfobox">
                                    <ul class="tg-contactinfo">
                                        <li class="text-offwhite-f">
                                            <i class="lnr lnr-location"></i>
                                            <address>
                                                {{$user->country->name}}
                                            </address>
                                        </li>
                                    
                                        <li class="text-offwhite-f">
                                            <i class="lnr lnr-phone-handset"></i>
                                            <span>
                                                {{$user->phone}}
                                            </span>
                                        </li>
                                    
                                        <li class="text-offwhite-f">
                                            <i class="lnr lnr-envelope"></i>
                                            <span><a class="text-offwhite-f" style="text-decoration: underline;" href="mailto:{{$user->email}}">
                                                    @if (empty($user->email))
                                                    Not Available
                                                    @else
                                                    {{$user->email}}
                                                    @endif
                                                </a>
                                            </span>
                                        </li>
                                    
                                        <li class="text-offwhite-f">
                                            <i class="lnr lnr-screen"></i>
                                            <span><a class="text-offwhite-f" style="text-decoration: underline;" href="javascript:void(0);">
                                                    @if (empty($user->company_url))
                                                    Not Available
                                                    @else
                                                    {{$user->company_url}}
                                                    @endif
                                                </a></span>
                                        </li>
                                    </ul>


                                    <ul class="tg-socialicons">
                                        @if (!empty($user_social->where('platform','facebook')->first()->url))
                                        <li class="tg-facebook"><a
                                                href="https://{{$user_social->where('platform','facebook')->first()->url}}"><i
                                                    class="fa fa-facebook"></i></a></li>

                                        @else

                                        <li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        @endif


                                        @if (!empty($user_social->where('platform','twitter')->first()->url))
                                        <li class="tg-twitter"><a
                                                href="https://{{$user_social->where('platform','twitter')->first()->url}}"><i
                                                    class="fa fa-twitter"></i></a></li>

                                        @else

                                        <li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>

                                        @endif


                                        @if (!empty($user_social->where('platform','linkedin')->first()->url))
                                        <li class="tg-linkedin"><a
                                                href="https://{{$user_social->where('platform','linkedin')->first()->url}}"><i
                                                    class="fa fa-linkedin"></i></a></li>

                                        @else

                                        <li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>

                                        @endif



                                        @if (!empty($user_social->where('platform','skype')->first()->url))
                                        <li class="tg-skype"><a
                                                href="https://{{$user_social->where('platform','skype')->first()->url}}"><i
                                                    class="fa fa-skype"></i></a></li>

                                        @else

                                        <li class="tg-skype"><a href="#"><i class="fa fa-skype"></i></a></li>

                                        @endif


                                        @if (!empty($user_social->where('platform','googleplus')->first()->url))
                                        <li class="tg-googleplus"><a
                                                href="https://{{$user_social->where('platform','googleplus')->first()->url}}"><i
                                                    class="fa fa-google-plus"></i></a></li>

                                        @else

                                        <li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>

                                        @endif


                                        @if (!empty($user_social->where('platform','painterest')->first()->url))
                                        <li class="tg-pinterestp"><a
                                                href="https://{{$user_social->where('platform','painterest')->first()->url}}"><i
                                                    class="fa fa-pinterest-p"></i></a></li>

                                        @else

                                        <li class="tg-pinterestp"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>


                                        @endif




                                    </ul>
                                    <a class="tg-btn tg-btn-lg p-direction-button" href="javascript:void(0);">get
                                        direction</a>
                                </div>
                            </div>

                        </aside>
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