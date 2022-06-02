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
    
    
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets/prev-css/customstyle.css') }}">

</head>




<body class="tg-home tg-login custom-dark-bg pr-0" style="padding-right: 0px !important;">

    {{-- wrapper layout --}}
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">




        {{-- header --}}
        <header id="tg-header" class="tg-header tg-haslayout">
            <div class="tg-topbar tg-haslayout">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <ul class="tg-addressinfo mb-0 row" style="padding:0px">
                                <div class="col-xs-3 col-md-3 col-lg-2"
                                    style="background-color: white; padding-top: 2px; padding-bottom: 3px;">
                                    <strong class="tg-logo"><a href="{{ route('startup.home') }}">
                                            <img src="{{ asset('assets/images/logo.png') }}" width="90" height="120"
                                                alt="image description"></a></strong>
                                </div>
                                <div class="col-xs-9 col-md-9 col-lg-10 text-center">

                                    <h3 class="startupheading">Startup Services</h3>

                                </div>

                            </ul>

                            <div class="tg-adminbox custom-adminbox">
                                <div class="tg-loginregister">
                                    <a class="tg-btnlogin" href="javascript:void(0);">Login</a>
                                    <a class="tg-btnregister" href="javascript:void(0);">Register</a>
                                </div>
                                <div class="tg-useradminbox">
                                    <div class="tg-themedropdown tg-userdropdown">
                                        <a href="#" id="tg-usermenu" class="tg-btndropdown" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="padding: 12px 17px;">

                                            <span id="nav-profile-button-startup">
                                                <em><img src="{{ asset('assets/prev-images/avatar.png') }}"
                                                        class="navbar-logo-custom" alt="image description"></em>
                                                <span>Menu</span>
                                                <i class="fa fa-angle-down"></i>
                                            </span>


                                        </a>
                                        <div class="tg-dropdownmenu tg-usermenu" aria-labelledby="tg-usermenu">
                                            <nav id="tg-dashboardnav" class="tg-dashboardnav">
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('startup.home') }}">
                                                            <i class="lnr lnr-home"></i>
                                                            <span>Home</span>
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="{{ route('startup.login') }}">
                                                            <i class="lnr lnr-exit"></i>
                                                            <span>Logout</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>

                                        </div>
                                    </div>
                                </div>
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

        <footer id="tg-footer" class="tg-haslayout tg-footer tg-haslayout" style="height:8vh; background:#333;">

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
    {{-- end wrapper --}}










    {{-- javascripts --}}
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




    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            })
    </script>
    


</body>
{{-- end body --}}

</html>
{{-- end html --}}