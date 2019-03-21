<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ app()->getLocale() }}">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Car Store">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('images/backend-image/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('css/backend-css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend-css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend-css/libs/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend-css/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend-css/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend-css/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend-css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/backend-css/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend-css/flag-icon-css/flag-icon.min.css') }}">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Sniglet') }}" rel="stylesheet">
    @yield('style')

   
    <title>{{ config('app.name', 'Laravel') }}|@yield('title')</title>

</head>

<body style="font-family: 'Sniglet', cursive;">

<!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('header') 
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('sidebar') 
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
         @yield('content')
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- jquery 3.3.1 -->
    <script src="{{ asset('js/backend-js/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('js/backend-js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('js/backend-js/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/backend-js/libs/main-js.js') }}"></script>
    <!-- chart chartist js -->
    <script src="{{ asset('js/backend-js/chartist.min.js') }}"></script>
    <!-- sparkline js -->
    <script src="{{ asset('js/backend-js/jquery.sparkline.js') }}"></script>
    <!-- morris js -->
    <script src="{{ asset('js/backend-js/raphael.min.js') }}"></script>
    <script src="{{ asset('js/backend-js/morris.js') }}"></script>
    <!-- chart c3 js -->
    <script src="{{ asset('js/backend-js/c3.min.js') }}"></script>
    <script src="{{ asset('js/backend-js/d3-5.4.0.min.js') }}"></script>
    <script src="{{ asset('js/backend-js/C3chartjs.js') }}"></script>
    <script src="{{ asset('js/backend-js/dashboard-ecommerce.js') }}"></script>
     @yield('js')
</body>

</html>
