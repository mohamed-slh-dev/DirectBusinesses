@extends('layouts.startups-regular')

{{-- make no margin in banner (only this page) --}}
<style>
    .tg-innerpagebanner {
        margin-bottom: 0px !important;
    }


    th {
        font-size: 14px !important;
    }
</style>



{{-- section --}}
@section('content')



{{-- main  --}}
<main id="tg-main" class="tg-main tg-haslayout tg-paddingzero" style="background-color: black;">
    <div class="tg-serviceprovider tg-detailpage tg-serviceproviderdetail">
        <div class="tg-detailpagehead">
            <figure>
                <img style="object-fit: cover; object-position: center;" src="{{ asset('assets/prev-images/outer-cover.jpg') }}"
                    alt="image description">
                <figcaption>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-detailpageheadcontent">
                                    <div class="tg-companylogo"><img src="{{ asset('assets/prev-images/demologo2.jpg') }}"
                                            alt="image description"></div>
                                    <div class="tg-companycontent">

                                        <div class="tg-title">
                                            <h1>Eishar Company</h1>
                                            <span>IT Comapny</span>
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
                        <h2>Software Development </h2>
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

                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et
                                            dolore magna
                                            aliqua enim ad minimat quis nostrud exercitation ullamco laboris nisi ut
                                            aliquip ex ea
                                            commodo consequat aute irure dolor reprehenderit in voluptate velit esse
                                            cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                                            in culpa qui
                                            officia deserunt mollit anim id est laborum ut perspiciatis unde omnis iste
                                            natus error sit
                                            voluptatem accusantium doloremque laudantium totam rem aperiam ab illo
                                            inventore veritatis
                                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                            voluptatem quia voluptas
                                            sit aspernatur aut fugit sed quia consequuntur magni dolores eos qui ratione
                                            voluptatem
                                            sequi nesciunt.</p>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                            adipisci velit,
                                            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
                                            aliquam quaerat
                                            voluptatem.</p>


                                    </div>
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
                                                        Sharjah, Dubai
                                                    </span>
                                                </a>

                                            </p>
                                        </div>



                                        <div class="col-xs-4">
                                            <p class="info-cols">
                                                <i class="fa fa-envelope"></i>
                                                <span class="company-profile-info">
                                                    demomail@company.ae
                                                </span>
                                            </p>
                                        </div>

                                        <div class="col-xs-4">
                                            <p class="info-cols">
                                                <i class="fa fa-phone"></i>
                                                <span class="company-profile-info">
                                                    +971 88 212 99
                                                </span>
                                            </p>
                                        </div>

                                        <div class="col-xs-4">
                                            <p class="info-cols">
                                                <i class="fa fa-link"></i>
                                                <span class="company-profile-info">
                                                    Companyurl.com
                                                </span>
                                            </p>
                                        </div>



                                    </div>
                                    <!-- end row -->

                                </div>
                                <!-- informations -->





                                <!-- social info -->
                                <div class="tg-dashboardbox d-none" style="margin-bottom: 25px;">

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
                                                            name="facebooklink" value="Facebook Link">
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <a class="social-links-link" href="javascript:void(0);">
                                                    <div class="form-group tg-inputwithicon tg-twitter">
                                                        <i class="tg-icon fa fa-twitter"></i>
                                                        <input readonly type="text" class="form-control"
                                                            name="twitterlink" value="twitter Link">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <a class="social-links-link" href="javascript:void(0);">
                                                    <div class="form-group tg-inputwithicon tg-linkedin">
                                                        <i class="tg-icon fa fa-linkedin"></i>
                                                        <input readonly type="text" class="form-control"
                                                            name="linkedinlink" value="linkedin Link">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                                <a class="social-links-link" href="javascript:void(0);">

                                                    <div class="form-group tg-inputwithicon tg-skype">
                                                        <i class="tg-icon fa fa-skype"></i>
                                                        <input readonly type="text" class="form-control"
                                                            name="skypelink" value="skype Link">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <a class="social-links-link" href="javascript:void(0);">
                                                    <div class="form-group tg-inputwithicon tg-googleplus">
                                                        <i class="tg-icon fa fa-google-plus"></i>
                                                        <input readonly type="text" class="form-control"
                                                            name="googlepluslink" value="google Plus Link">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <a class="social-links-link" href="javascript:void(0);">
                                                    <div class="form-group tg-inputwithicon tg-pinterestp">
                                                        <i class="tg-icon fa fa-pinterest-p"></i>
                                                        <input readonly type="text" class="form-control"
                                                            name="pinterestlink" value="pinterest Link">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- social info -->





                                <!-- certificates view -->
                                <div class="tg-companyfeaturebox tg-certicicatesawards">
                                    <div class="tg-companyfeaturetitle">
                                        <h3 class="text-white-f profile-subtitles-custom">Certificates &amp; Awards</h3>
                                    </div>
                                    <ul>
                                        <li class="margin-top-0 cert-border-top">
                                            <figure>
                                                <!-- <img src="images/serviceproviders/img-08.jpg" alt="images description"> -->
                                            </figure>
                                            <div class="tg-textbox" style="padding: 24px; background:white;">
                                                <h4 class="text-black-f">Best Service Provider</h4>
                                                <time class="text-darkmaroon-f" style="font-weight: 500;"
                                                    datetime="2016-08-08">June 27,
                                                    2021</time>

                                            </div>
                                        </li>
                                        <li class="margin-top-0 cert-border-top">
                                            <figure>
                                                <!-- <img src="images/serviceproviders/img-09.jpg" alt="images description"> -->
                                            </figure>
                                            <div class="tg-textbox" style="padding: 24px; background:#f7f7f7;">
                                                <h4 class="text-black-f">Best Customer Support</h4>
                                                <time class="text-darkmaroon-f" style="font-weight: 500;"
                                                    datetime="2016-08-08">May 12,
                                                    2020</time>

                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <!-- end certificate -->

                                <div class="tg-companyfeaturebox" style="padding-top:0px;">

                                    <hr>

                                </div>



                                <!-- services with prices -->
                                <div class="tg-companyfeaturebox tg-services" style="padding-top:35px;">
                                    <div class="tg-companyfeaturetitle">
                                        <h3 class="text-white-f profile-subtitles-custom">Services</h3>
                                    </div>

                                    <!-- serice -->
                                    <div id="tg-accordion" class="tg-accordion">
                                        <div class="tg-service tg-panel" style="border-bottom: 1px solid grey">
                                            <div class="tg-accordionheading">
                                                <h4><span>Web Devolopment</span></h4>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-description">
                                                    <p style="color:#393939">Consectetur adipisicing elit sed do eiusmod
                                                        tempor
                                                        incididunt ut labore
                                                        etiatoe dolore magna aliqua eni minimat quis nostrud
                                                        exercitation ullamco
                                                        laboris.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end service -->

                                        <!-- service -->
                                        <div class="tg-service tg-panel" style="border-bottom: 1px solid grey;">
                                            <div class="tg-accordionheading">
                                                <h4 class="service-title"><span>Mobile App</span></h4>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-description">
                                                    <p style="color:#393939">Consectetur adipisicing elit sed do eiusmod
                                                        tempor
                                                        incididunt ut labore
                                                        etiatoe dolore magna aliqua eni minimat quis nostrud
                                                        exercitation ullamco
                                                        laboris.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end service -->


                                    </div>
                                </div>
                                <!-- services with prices -->



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


                                        <!-- comment 1 -->
                                        <div class="tg-feedback">
                                            <figure class=""><a href="javascript:void(0);"><img
                                                        src="{{ asset('assets/prev-images/demologo6.jpg') }}" alt="image description"></a>
                                            </figure>
                                            <div class="tg-feedbackcontent">

                                                <div class="tg-feedbackbox review-content-wrapper"
                                                    style="background:white;">
                                                    <div class="tg-contenthead">
                                                        <div class="tg-leftbox">
                                                            <div class="tg-name">
                                                                <h4><a href="#">Great Customer Services</a></h4>
                                                            </div>
                                                            <ul class="tg-matadata">
                                                                <li><a href="javascript:void(0);">Auba Ltd.</a></li>
                                                                <li><a href="#">20 July 2021</a></li>
                                                            </ul>
                                                        </div>

                                                        <!-- rating % -->
                                                        <div class="tg-overallratingbox review-prec">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning-bar progress-bar-striped progress-bar-animated"
                                                                    role="progressbar" aria-valuenow="40"
                                                                    aria-valuemin="0" aria-valuemax="100"
                                                                    style="width: 40%">
                                                                    Poor</div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>Cliqua enim ad minim veniam quis nostrud exercitation ullamco
                                                            laboris nisi ut
                                                            aliquip modoia aiat
                                                            irure dolor in reprehenderit in.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- end comment 1 -->

                                    </div>
                                    <!-- end customers reviews  -->












                                    <!-- customer reviews -->
                                    <div id="switch-reviews-vendors" class="tg-feedbacks d-none">


                                        <!-- comment 1 -->
                                        <div class="tg-feedback">
                                            <figure class=""><a href="javascript:void(0);"><img
                                                        src="{{ asset('assets/prev-images/demologo1.png') }}" alt="image description"></a>
                                            </figure>
                                            <div class="tg-feedbackcontent">

                                                <div class="tg-feedbackbox review-content-wrapper"
                                                    style="background:white;">
                                                    <div class="tg-contenthead">
                                                        <div class="tg-leftbox">
                                                            <div class="tg-name">
                                                                <h4><a href="#">Good Service</a></h4>
                                                            </div>
                                                            <ul class="tg-matadata">
                                                                <li><a href="javascript:void(0);">Eishar Ltd.</a></li>
                                                                <li><a href="#">28 July 2021</a></li>
                                                            </ul>
                                                        </div>

                                                        <!-- rating % -->
                                                        <div class="tg-overallratingbox review-prec">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                                                                    role="progressbar" aria-valuenow="100"
                                                                    aria-valuemin="0" aria-valuemax="100"
                                                                    style="width: 100%">
                                                                    Excellent</div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>Cliqua enim ad minim veniam quis nostrud exercitation ullamco
                                                            laboris nisi ut
                                                            aliquip modoia aiat
                                                            irure dolor in reprehenderit in.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- end comment 1 -->

                                    </div>
                                    <!-- end customers reviews  -->




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
                                            <address>UAE - Dubai</address>
                                        </li>

                                        <li class="text-offwhite-f">
                                            <i class="lnr lnr-phone-handset"></i>
                                            <span>+97121445877</span>
                                        </li>

                                        <li class="text-offwhite-f">
                                            <i class="lnr lnr-envelope"></i>
                                            <span><a class="text-offwhite-f" style="text-decoration: underline;"
                                                    href="mailto:query@domain.com">info@truth.ae</a></span>
                                        </li>

                                        <li class="text-offwhite-f">
                                            <i class="lnr lnr-screen"></i>
                                            <span><a class="text-offwhite-f" style="text-decoration: underline;"
                                                    href="www.domainurl.com" target="_blank">truth.ae</a></span>
                                        </li>
                                    </ul>
                                    <ul class="tg-socialicons">
                                        <li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="tg-skype"><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="tg-pinterestp"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
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






@endsection
{{-- end section --}}