<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('') }}img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('') }}img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Travesuras Infantiles</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('') }}css/bootstrap1.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('') }}css/demo.css" rel="stylesheet" />
    <link href="{{ asset('') }}css/travesuras.css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="login-page sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{ asset('') }}img/blurred-image-1.jpg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/mobile">Volver</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header" filter-color="orange">
    <div class="page-header-image" style="background-image:url({{ asset('') }}img/pelotero2.jpg)"></div>
    <div class="container">
        <div class="col-md-4 content-center">
            <div class="card card-login card-plain">
                <form class="form" method="" action="">
                    <div class="header text-center">
                        <h4 class="title title-up">Crear Cuenta</h4>
                    </div>


                    <div class="card-body">
                        <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                            <input id="nombre" type="text" class="form-control" placeholder="Nombre...">
                        </div>
                        <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_email-85"></i>
                                        </span>
                            <input id="mail" type="text" class="form-control" placeholder="Email...">
                        </div>
                        <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_email-85"></i>
                                        </span>
                            <input id="dni" type="number" class="form-control" placeholder="DNI...">
                        </div>
                        <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                        </span>
                            <input id="pass" type="password" class="form-control" placeholder="Contraseña...">
                        </div>
                        <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                        </span>
                            <input id="repass" type="password" class="form-control" placeholder="Confirme la contraseña...">
                        </div>
                    </div>
                    <div class="footer text-center">
                        <a class="btn btn-primary btn-round btn-lg btn-block register">Registrate</a>
                    </div>
                </form>
                <div class="pull-left">
                    <h6>
                        <a href="/mobile" class="link crearCuenta">volver</a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, Diseñado por MPSoluciones.
            </div>
        </div>
    </footer>
</div>
</body>

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
<script src="{{ asset('') }}js/newUserMobil.js" type="text/javascript"></script>


</html>