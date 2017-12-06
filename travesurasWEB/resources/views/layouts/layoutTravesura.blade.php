<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Travesuras Infantiles') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/travesuras.css') }}" rel="stylesheet">
    <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="{{ asset('') }}css/fonticons.css">
    <link rel="stylesheet" href="{{ asset('') }}fonts/stylesheet.css">
    <link rel="stylesheet" href="{{ asset('') }}css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('') }}css/bootstrap.min.css">
<!--        <link rel="stylesheet" href="{{ asset('') }}css/bootstrap-theme.min.css">-->


    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{ asset('') }}css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{ asset('') }}css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{ asset('') }}css/responsive.css" />
    <link rel="stylesheet" href="{{ asset('') }}css/siderbar.css" />

    <script src="{{ asset('') }}js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="jquery-1.10.2.min.js" type="text/javascript"></script>
    <script>$(function() { $.scrollIt(); });</script>
    <script src="scrollIt.js" type="text/javascript"></script>
    {{--impor font de google--}}
    <link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Capriola" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lemon" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('') }}css/bootstrap1.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('') }}css/demo.css" rel="stylesheet" />
    <link href="{{ asset('') }}css/travesuras.css" rel="stylesheet" />
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg bg-info paddingnone marginnone">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="#pablo">
                    Navbar
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>


            </div>

            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#pablo">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#pablo">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="wrapper" class="active">

        <!-- Sidebar -->
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul id="sidebar_menu" class="sidebar-nav">
                <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span class="glyphicon glyphicon-align-justify"></span></a></li>
            </ul>
            <ul class="sidebar-nav" id="sidebar">
                <li><a>Reservar fecha<span class="siderbaricon glyphicon glyphicon-link"></span></a></li>
                <li><a>Descargar Foto<span class="siderbaricon glyphicon glyphicon-link"></span></a></li>
            </ul>
        </div>

        <!-- Page content -->
        @yield('content')

    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/travesuras.js') }}"></script>
<!-- <script src="{{ asset('') }}js/vendor/jquery-1.11.2.min.js"></script>-->
<script src="{{ asset('') }}js/vendor/bootstrap.min.js"></script>
<script src="{{ asset('') }}js/vendor/isotope.min.js"></script>

<script src="{{ asset('') }}js/jquery.easypiechart.min.js"></script>
<script src="{{ asset('') }}js/jquery.mixitup.min.js"></script>


<script src="{{ asset('') }}js/plugins.js"></script>
<script src="{{ asset('') }}js/main.js"></script>
<!--   Core JS Files   -->
<script src="{{ asset('') }}js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="{{ asset('') }}js/core/popper.min.js" type="text/javascript"></script>
<script src="{{ asset('') }}js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('') }}js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('') }}js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{ asset('') }}js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('') }}js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script src="{{ asset('') }}js/login.js" type="text/javascript"></script>
</body>
</html>>