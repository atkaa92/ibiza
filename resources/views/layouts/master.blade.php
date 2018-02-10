<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ibiza - Hotel And Sauna</title>
        <link rel="icon" href="/images/favicon.png" sizes="32x16">
        <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/settings.css') }}" rel="stylesheet">
        <link href="{{ url('css/extralayers.css') }}" rel="stylesheet">
        <link href="{{ url('css/jquery-ui.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/lightGallery.css') }}" rel="stylesheet">
        <link href="{{ url('css/animate.css') }}" rel="stylesheet">
        <link href="{{ url('css/styleUi.css') }}" rel="stylesheet">
        <script src="{{ url('/js/jquery.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700,300' rel='stylesheet' type='text/css'>
        @stack('stylesheets')
    </head>
    <body>
        @include('includes/header')
        @yield('container')
        @include('includes/footer')
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJLQSoWWlWiSvOfF68k2TRaSrbCVCqCb8"></script>
        <script src="{{ url('/js/jquery-ui.min.js') }}"></script>
        <script src="{{ url('/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ url('/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ url('/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ url('/js/lightGallery.min.js') }}"></script>
        {{--  <script src="{{ url('/js/validator.min.js') }}"></script>  --}}
        <script src="{{ url('/js/mainUi.js') }}"></script>
        <script>
            jQuery(document).ready(function() {
                $(".gallery").lightGallery({
                    thumbnail:false
                });
                $(function() {
                    $( ".js-datapiker" ).datepicker();
                });
                var head = $('.header').outerHeight();
                var reserv = $('.section--reserv').outerHeight();
                var wnd = $(window).height();
                var sum = wnd - head - reserv;
                $('.tp-banner').show().revolution({
                    dottedOverlay:"none",
                    delay:9000,
                    startwidth:940,
                    startheight:sum,
                    hideThumbs:200,
                    minHeight:300,
                    thumbWidth:100,
                    thumbHeight:50,
                    thumbAmount:3,
                    simplifyAll:"off",
                    navigationType:"bullet",
                    navigationArrows:"solo",
                    navigationStyle:"round",
                    touchenabled:"on",
                    onHoverStop:"off",
                    nextSlideOnWindowFocus:"off",
                    keyboardNavigation:"on",
                    navigationHAlign:"center",
                    navigationVAlign:"bottom",
                    navigationHOffset:0,
                    navigationVOffset:20,
                    soloArrowLeftHalign:"left",
                    soloArrowLeftValign:"center",
                    soloArrowLeftHOffset:20,
                    soloArrowLeftVOffset:0,
                    soloArrowRightHalign:"right",
                    soloArrowRightValign:"center",
                    soloArrowRightHOffset:20,
                    soloArrowRightVOffset:0,
                    shadow:0,
                    fullWidth:"on",
                    fullScreen:"off",
                });
                (function(){
                    var options = {
                        center: {
                            lat: 40.1948175,
                            lng: 44.5466866
                        },
                        zoom: 15,
                        disableDefaultUi: false,
                        scrollwheel: false,
                        draggable: true,
                        mapTypeId: google.maps.MapTypeId.ROUDMAP,
                        zoomControlOptions: {
                            position: google.maps.ControlPosition.LEFT_BOTTOM,
                            style: google.maps.ZoomControlStyle.SMALL
                        },
                        panControlOptions: {
                            position: google.maps.ControlPosition.LEFT_BOTTOM,
                        }
                    };
                    var element = document.getElementById('map');
                    var map = new google.maps.Map(element, options);
                    var marker = new google.maps.Marker({
                        position: {
                            lat: 40.1948175,
                            lng: 44.5466866
                        },
                        map: map,
                        icon: '/images/map.png'
                    });
                    var info = new google.maps.InfoWindow({
                        content: "Ibiza"
                    });
                }());
            });	
        </script>
        @stack('scripts')
    </body>
</html>