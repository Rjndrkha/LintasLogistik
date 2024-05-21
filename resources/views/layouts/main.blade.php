<!DOCTYPE html>
<html dir="ltr" lang="en-US">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Google Fonts
        ============================================= -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- Stylesheets
        ============================================= -->
        <link rel="stylesheet" href="{{url('assets/css/plugin.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}" type="text/css" />
        @yield('additional-css')
        <!-- JavaScripts
        ============================================= -->
        <script type="text/javascript" src="{{url('assets/js/jquery.js')}}"></script>
        @yield('script-after-jquery')
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        @yield('title')
        
    </head>

    <body onload="hideTotal()">
        <div id="preloader">
            <div id="status">
                <img src="{{url('assets/img/custom/header.png')}}" alt="" />
            </div>
        </div>

        <!-- MAIN WRAPPER
        ============================================= -->
        <div id="main-wrapper" class="clearfix">

            <!-- HEADER
            ============================================= -->
             @include('layouts.header')
            <!-- HEADER END -->

             @yield('content')
           
            
            <!-- FOOTER START
            ============================================= -->
             @include('layouts.footer')
            <!-- FOOTER END -->

        </div>
        <!-- MAIN WRAPPER END -->

        <!-- Footer Scripts
        ============================================= -->
        <!-- External -->
        <script type="text/javascript" src="{{url('assets/js/plugin.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/main.js')}}"></script>
        @yield('additional-js')
        
    </body>
</html>