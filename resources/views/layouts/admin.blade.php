<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="image_src" type="image/jpeg" href="/images/logo.png" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <!-- Site Properities -->
    <meta name="generator" content="Visual Studio 2015" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Litmos</title>
    <meta name="description" content="Golgi Admin Theme" />
    <meta name="keywords" content="html5, ,semantic,ui, library, framework, javascript,jquery,admin,theme" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
</head>

<body class="admin">
<!--sidebar mobile-->
<div class="ui vertical push sidebar menu  thin" id="toc">
</div>
<!--sidebar mobile-->
<!--navbar mobile-->
<div class="mobilenavbar">
</div>
<!--navbar mobile-->

<div class="pusher">
    <div class="full height">
        <!--Load Sidebar Menu In App.js loadhtml function-->
        <div class="toc"></div>
        <!--Load Sidebar Menu In App.js loadhtml function-->

        <div class="article">

            <!--Load Navbar Menu In App.js loadhtml function-->
            <div class="navbarmenu"></div>
            <!--Load Navbar Menu In App.js loadhtml function-->

            <!--Begin Container-->
            @yield('content')
            <!--Finish Container-->

            <!--Load Footer Menu In App.js loadhtml function-->
            <div class="footer"></div>
            <!--Load Footer Menu In App.js loadhtml function-->
        </div>
    </div>
</div>
<script src='plugins/nicescrool/jquery.nicescroll.min.js'></script>
<script src="js/semantic.min.js"></script>
<script data-pace-options='{ "ajax": false }' src="plugins/pacejs/pace.js"></script>
<script src="plugins/datatable/jquery.dataTables.js"></script>
<script src="js/customjs/custom-datatable.js"></script>
<script src="{{ asset('js/golgi.js') }}?v=<?php echo time(); ?>" defer></script>
</body>
</html>