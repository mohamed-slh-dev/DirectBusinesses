<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Service Provider</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min-fresh.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.countdown.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/prev-css/customstyle.css') }}">
    
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>


    
    
</head>







{{-- body --}}
<body class="tg-home tg-login custom-dark-bg pr-0" style="padding-right: 0px !important;">



    {{-- path for assets --}}
    <script>
        
    var path ="{{URL::asset('assets/')}}";
        
    </script>

    {{-- end path for assets --}}


    {{-- end wrapper of page --}}
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">



        {{-- header --}}
        <header id="tg-header" class="tg-header tg-haslayout">
            <div class="tg-topbar tg-haslayout">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <ul class="tg-addressinfo mb-0 row">
                                <div class="col-xs-3 col-md-3 col-lg-2">
                                    <i class="lnr lnr-tag"></i>
                                    <a href="javascript:void(0);" class="text-white-f">News :</a>
                                </div>
                                <div class="col-xs-9 col-md-9 col-lg-10">
                                    <div class="scroll-left">

                                        <span>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing | Lorem, ipsum dolor sit
                                            amet
                                            consectetur
                                            adipisicing elit. |
                                            Lorem ipsum dolor sit amet consectetur | Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing elit. Eius,
                                            est!</span>
                                    </div>

                                </div>

                            </ul>

                            <div class="tg-adminbox custom-adminbox">
                                <div class="tg-loginregister">
                                    <a class="tg-btnlogin" href="javascript:void(0);">Login</a>
                                    <a class="tg-btnregister" href="javascript:void(0);">Register</a>
                                </div>

                                {{-- buttons row --}}
                                <div class="row align-items-center" style="height:50px;">
                                    <div class="col-5">

                                        <div class="tg-themedropdown tg-userdropdown">
                                            <a href="#" class="btn btn-none active notif-bell" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-bell" style="padding:0px;"></i>
                                                <span></span>
                                            </a>


                                            {{-- dropdown menu --}}
                                            <div class="tg-dropdownmenu tg-usermenu" aria-labelledby="tg-notification" style="max-height: 330px; overflow:auto">
                                                
                                                {{-- notification single --}}
                                                <a href="#" class="d-block notif-link">
                                                    <h6 class="notif-title">
                                                        <i class="fa fa-info-circle mr-2"></i>No Older Notifications</h6>
                                                
                                                </a>


                                                {{-- <a href="#" class="d-block notif-link">
                                                    <h6 class="notif-title">
                                                        <i class="fa fa-info-circle mr-2"></i>Notification Title</h6>
                                                    <p class="notif-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto optio in necessitatibus tempore excepturi earum laboriosam blanditiis. Eos?</p>
                                                </a> --}}
                                            </div>


                                        </div>
                                        {{-- end dropdown wrapper --}}

                                    </div>

                                    <div class="col-5">
                                        <a class="btn btn-none inbox-messages" href="#">
                                            <i class="fa fa-envelope"></i>
                                            <span></span>
                                        </a>
                                    </div>

                                </div>
                                {{-- end row --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- uppper section --}}

            <!-- navigation and logo -->
            <div class="tg-navigationarea" style="padding: 8px 0px; background-color: white;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <strong class="tg-logo"><a href="{{ route('vendor.home') }}">
                                    <img src="{{ asset('assets/images/logo.png') }}" width="90" height="120"
                                        alt="image description"></a></strong>
                            <div class="tg-rightarea">
                                <nav id="tg-nav" class="tg-nav">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#tg-navigation" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                        <ul>

                                            <li style="padding-right:0px;">
                                                <a href="{{ route('vendor.requirements.browse') }}" class="see-opp-button">See Opportunities</a>
                                            </li>

                                            <li>
                                                <a class="see-opp-button-two" href="{{ route('vendor.deals.post') }}" style="margin-left:0px;">Post Deals</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </nav>
                                


                                <div class="tg-useradminbox" style="width: 130px;">
                                
                                
                                    {{-- dropdown button --}}
                                    <div class="tg-themedropdown tg-userdropdown">
                                        <a href="#" id="tg-usermenu" class="tg-btndropdown" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                
                                            <span id="nav-profile-button">
                                                <em><img src="{{ asset('assets/prev-images/demologo1.png') }}" class="navbar-logo-custom"
                                                        alt="image description"></em>
                                                <span>Menu</span>
                                                <i class="fa fa-angle-down"></i>
                                            </span>
                                
                                        </a>
                                
                                
                                        {{-- dropdown menu --}}
                                        <div class="tg-dropdownmenu tg-usermenu" aria-labelledby="tg-usermenu">
                                            <nav id="tg-dashboardnav" class="tg-dashboardnav">
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('vendor.profile') }}">
                                                            <i class="fa fa-gears"></i>
                                                            <span>Profile</span>
                                                        </a>
                                                    </li>


                                                    <li>
                                                        <a href="{{ route('vendor.profile.reviews') }}">
                                                            <i class="fa fa-comments"></i>
                                                            <span>Reviews</span>
                                                        </a>
                                                    </li>
                                                
                                                
                                                    <li>
                                                        <a href="{{ route('vendor.profile.requirements') }}">
                                                            <i class="fa fa-tasks"></i>
                                                            <span>Opportunities</span>
                                                        </a>
                                                    </li>
                                                
                                                
                                                    <li>
                                                        <a href="{{ route('vendor.profile.deals') }}">
                                                            <i class="fa fa-briefcase"></i>
                                                            <span>Deals</span>
                                                        </a>
                                                    </li>
                                                
                                    
                                                
                                                
                                                    <li>
                                                        <a href="{{ route('vendor.profile.help') }}">
                                                            <i class="fa fa-info-circle"></i>
                                                            <span>Help</span>
                                                        </a>
                                                    </li>
                                                
                                                
                                                    <li>
                                                        <a href="{{ route('customer.home') }}">
                                                            <i class="fa fa-user"></i>
                                                            <span>Switch to Customer</span>
                                                        </a>
                                                    </li>
                                                
                                                
                                                    <li>
                                                        <a href="{{ route('login') }}">
                                                            <i class="fa fa-sign-out"></i>
                                                            <span>Logout</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        {{-- end dropdown menu --}}
                                    </div>
                                    {{-- end dropdown button --}}
                                
                                </div>
                                {{-- dropdown wrapper --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        {{-- end header --}}










        {{-- page content here --}}



        @yield('content')


        {{-- end page content --}}




        {{-- footer --}}

        <footer id="tg-footer" class="tg-haslayout tg-footer tg-haslayout">

            <div class="tg-footerbar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <span>&copy;TRUTH 2021 All Rights Reserved </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        {{-- end footer --}}




    </div>
    {{-- end wrapper page --}}







    {{-- -------------------- --}}
    
    
    

    {{-- javascripts --}}
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/mmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/tippy.all.min.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/snackbar.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    
    



    <!-- customly added js -->
    <script src="{{ asset('assets/prev-js/custom.js') }}"></script>
    

    
    
    
    <script src="{{ asset('assets/prev-js/slide-cards.js') }}"></script>
    <script src="{{ asset('assets/prev-js/vendor/jquery-library.js') }}"></script>
    <script src="{{ asset('assets/prev-js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/prev-js/mapclustering/data.json') }}"></script>
    <script src="{{ asset('assets/prev-js/mapclustering/markerclusterer.min.js') }}"></script>
    <script src="{{ asset('assets/prev-js/mapclustering/infobox.js') }}"></script>
    <script src="{{ asset('assets/prev-js/mapclustering/map.js') }}"></script>
    <script src="{{ asset('assets/prev-js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets/prev-js/owl.carousel.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/prev-js/scrollbar.min.js') }}"></script> --}}
    <script src="{{ asset('assets/prev-js/prettyPhoto.js') }}"></script>
    <script src="{{ asset('assets/prev-js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/prev-js/readmore.js') }}"></script>
    <script src="{{ asset('assets/prev-js/gmap3.js') }}"></script>
    <script src="{{ asset('assets/prev-js/main.js') }}"></script>
    
    
    <!-- Bootstrap JS -->
    {{-- <script src="{{ asset('assets/dash-css/js/bootstrap.bundle.min.js') }}"></script> --}}
    <!--plugins-->
    {{-- <script src="{{ asset('assets/dash-css/js/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('assets/dash-css/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/dash-css/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/dash-css/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script> --}}
    <!-- Vector map JavaScript -->
    <script src="{{ asset('assets/dash-css/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/dash-css/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- highcharts js -->
    <script src="{{ asset('assets/dash-css/plugins/highcharts/js/highcharts.js') }}"></script>
    <script src="{{ asset('assets/dash-css/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/dash-css/js/index2.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('assets/dash-css/js/app.js') }}"></script>
    <script>
        new PerfectScrollbar('.dashboard-top-countries');
    </script>
    {{-- end scripts --}}





    {{-- scripts --}}
    <script src="{{ asset('assets/js/vendor/jquery-library.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/mapclustering/data.json') }}"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
    <script src="{{ asset('assets/js/mapclustering/markerclusterer.min.js') }}"></script>
    <script src="{{ asset('assets/js/mapclustering/infobox.js') }}"></script>
    <script src="{{ asset('assets/js/mapclustering/map.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/prettyPhoto.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/readmore.js') }}"></script>
    <script src="{{ asset('assets/js/gmap3.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>




    {{-- custom js --}}
    <script src="{{ asset('assets/prev-js/post-blog.js') }}"></script>
    <script src="{{ asset('assets/prev-js/post-deal.js') }}"></script>
    <script src="{{ asset('assets/prev-js/download-button.js') }}"></script>
    <script src="{{ asset('assets/prev-js/category-select.js') }}"></script>
    
    <script>
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    

</body>
{{-- end body --}}


</html>
{{-- end html --}}