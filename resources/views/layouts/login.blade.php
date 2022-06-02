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




<body class="tg-login">
    

    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        



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


    <!-- customly added js -->
    <script src="{{ asset('assets/prev-js/custom.js') }}"></script>



</body>
{{-- end body --}}

</html>
{{-- end html --}}