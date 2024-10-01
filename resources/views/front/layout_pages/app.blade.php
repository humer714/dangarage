<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ trim($__env->yieldContent('meta_title', 'Pros Chimney cleaning')) }} - Pros Chimney cleaning</title>
    <meta name="keywords" content="{{ trim($__env->yieldContent('meta_tags', 'Default meta Keywords')) }}" />
    <meta name="description" content="{{ trim($__env->yieldContent('meta_description', 'Default meta description')) }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- all css here -->

    <!--Favicon-->

    <link rel="shortcut icon" href="{{ asset('front/asset2/img/favicon.png') }}">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ asset('front/asset2/css/bootstrap.min.css') }}">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{ asset('front/asset2/css/all.min.css') }}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('front/asset2/css/animate.css') }}">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ asset('front/asset2/css/magnific-popup.css') }}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('front/asset2/css/meanmenu.css') }}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ asset('front/asset2/css/swiper-bundle.min.css') }}">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ asset('front/asset2/css/nice-select.css') }}">
    <!--<< Color.css >>-->
    <link rel="stylesheet" href="{{ asset('front/asset2/css/color.css') }}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('front/asset2/css/main.css') }}">

    @yield('css')


</head>


<body>

    <!-- ======= Top Bar ======= -->
    {{-- @include('front.layout_pages.topbar') --}}


    <!-- ======= Header ======= -->
    @include('front.layout_pages.header')





    <main id="main">

        @yield('content')




    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('front.layout_pages.footer')


    <!-- all js here -->
    
    <!-- Scroll Top Area -->
    <a href="#top" class="go-top"><i class="las la-angle-up"></i></a>


        <!--<< All JS Plugins >>-->
        <script src="{{ asset('front/asset2/js/jquery-3.7.1.min.js') }}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{ asset('front/asset2/js/viewport.jquery.js') }}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{ asset('front/asset2/js/bootstrap.bundle.min.js') }}"></script>
        <!--<< Nice Select Js >>-->
        <script src="{{ asset('front/asset2/js/jquery.nice-select.min.js') }}"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{ asset('front/asset2/js/jquery.waypoints.js') }}"></script>
        <!--<< Counterup Js >>-->
        <script src="{{ asset('front/asset2/js/jquery.counterup.min.js') }}"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="{{ asset('front/asset2/js/swiper-bundle.min.js') }}"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{ asset('front/asset2/js/jquery.meanmenu.min.js') }}"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{ asset('front/asset2/js/jquery.magnific-popup.min.js') }}"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{ asset('front/asset2/js/wow.min.js') }}"></script>
        <!--<< Main.js >>-->
        <script src="{{ asset('front/asset2/js/main.js') }}"></script>

    @yield('script')
</body>

</html>
