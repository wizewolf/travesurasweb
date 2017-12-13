<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Travesuras Infantiles</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

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
        <link rel="stylesheet" href="{{ asset('') }}css/travesuras.css" />

        <script src="{{ asset('') }}js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="jquery-1.10.2.min.js" type="text/javascript"></script>
		<script>$(function() { $.scrollIt(); });</script>
		<script src="scrollIt.js" type="text/javascript"></script>
		{{--impor font de google--}}
		<link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Capriola" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lemon" rel="stylesheet">
        
    </head>
    <body>
        <!--[if lt IE 8]>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!--Home page style-->
        <header id="main_menu" class="header">
            <div class="main_menu_bg navbar-fixed-top">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu">
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav">
                                            <li><a href="#inicio" data-scroll-nav='1'>Inicio</a></li>
                                            <li><a href="#queofrecemos" data-scroll-nav='2'>¿Qué ofrecemos?</a></li>
                                            <li><a href="#nuestrotrabajo" data-scroll-nav='3'>Nuestros trabajos</a></li>
                                            <li><a href="#combos" data-scroll-nav='4'>Combos</a></li>
                                    		<li><a href="#contactos" data-scroll-nav='5'>Contactos</a></li>
											@if(\Illuminate\Support\Facades\Auth::guest())
												<li><a href="/login">Ingresar</a></li>
												<li><a href="/register">Registrarse</a></li>
											@else
												@if(\Illuminate\Support\Facades\Auth::user()->user_type == "administrador")
													<li><a href="/buscarcliente">Subir Fotos</a></li>
												@else
													<li><a href="/descargarfotos">Descargar Fotos</a></li>
												@endif
												<li><a href="/cerrar-sesion">Salir</a></li>
											@endif

                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                </div>

            </div>
        </header> <!--End of header -->



        <section id="inicio" class="home"  data-scroll-index='1'>
            <div class="home_overlay home-carucel">
                <div class="container">
                    <div class="row">

						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3"></li>
							<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								{{-- <div class="carousel-caption">
									<p>Disponemos de un amplio salón</p>
									
								</div>--}}
								<img src="{{ asset('') }}images/img1.jpg" alt="...">
							</div>
							<div class="item">
								{{--<div class="carousel-caption">
									<p>Disponemos de muchos motivos para sus fiestas</p>
									
								</div>--}}
								<img src="{{ asset('') }}images/img2.jpg" alt="...">
							</div>
							<div class="item">
								{{--<div class="carousel-caption">
									<p>Hay un pelotero increible</p>
									
								</div>--}}
								<img src="{{ asset('') }}images/pelotero.jpg" alt="...">
							</div>
							<div class="item">
								{{--<div class="carousel-caption">
									<p>Tambien para los mas chiquitos</p>
								</div>--}}
								<img src="{{ asset('') }}images/pelotero2.jpg" alt="...">
							</div>
							<div class="item">
								{{--<div class="carousel-caption">
									<p>Tenemos un espacio para los padres</p>
								</div>--}}
								<img src="{{ asset('') }}images/papas.jpg" alt="...">
							</div>
						</div>
						</div>
						
                    </div>
                </div>
            </div>
        </section><!-- End of Banner Section -->




        <section id="queofrecemos" class="whatido cuerpo"  data-scroll-index='2'>
            <div class="container">
                <div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="head_title text-center wow fadeInLeft"  data-wow-duration="3s">
							<h2>¿Qué ofrecemos?</h2>
							<div class="separator"></div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="head_title_rigth wow fadeInRight"  data-wow-duration="3s">
							<p class="esp">Realizamos fiestas personalizadas para su niÃ±o, contamos con todo lo necesario. Solo necesitamos tu idea de fiesta infantil y la hacemos realidad.</p>
						</div>
					</div><!-- End of col-sm-5 -->

                    <div class="col-md-12 col-sm-12 col-xs-12  main_whatido_content text-center">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single_whatido wow fadeInDown"  data-wow-duration="1s">
								<div class="single_whatido_img_globo">
									<img src="{{ asset('') }}images/globos1.png" alt="" />
								</div>
								<h3 class="titulo">Fiesta</h3>
								<p class="info">Ofrecemos una amplia gama de motivos para festejar la fiesta soÃ±ada de tu hijo ya sea pelotero y servicio de catering. </p>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single_whatido wow fadeInDown"  data-wow-duration="3s">
								<div class="single_whatido_img">
									<img src="{{ asset('') }}images/foto.png" alt="" />
								</div>
								<h3 class="titulo">Servicio de fotos</h3>
								<p class="info">Contamos con la mejor calidad para inmortalizar la fiesta de su hijo. </p>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single_whatido wow fadeInDown"  data-wow-duration="4s">
								<div class="single_whatido_img">
									<img src="{{ asset('') }}images/video.png" alt="" />
								</div>
								<h3 class="titulo">Servicio de video</h3>
								<p class="info">Si usted lo desea tenemos un servicio de video para no perder ningún momento de ese dia. </p>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </section><!-- End of Features Section -->

        <section id="nuestrotrabajo" class="myworks cuerpo"  data-scroll-index='3'>
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="head_title text-center wow fadeInLeft"  data-wow-duration="2s">
							<h2>Nuestros trabajos</h2>
							<div class="separator"></div>
						</div>
					</div>

                </div>
            </div>

			<div class="main_myworks_content text-center">
				<div class="single_work_colum col-md-3 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="1.5s">
					<div class="single_work">
						<img src="{{ asset('') }}images/cumpleanios1.jpg" alt="" />
					</div>
				</div>
				<div class="single_work_colum col-md-3 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="2s">
					<div class="single_work">
						<img src="{{ asset('') }}images/cumpleanios2.jpg" alt="" />
					</div>
				</div>
				<div class="single_work_colum col-md-3 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="3s">
					<div class="single_work">
						<img src="{{ asset('') }}images/cumpleanios3.jpg" alt="" />
					</div>
				</div>
				<div class="single_work_colum col-md-3 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="4s">
					<div class="single_work">
						<img src="{{ asset('') }}images/cumpleanios4.jpg" alt="" />
					</div>
				</div>

				<div class="btn_bg wow fadeInLeft"  data-wow-duration="3s">
					<a href="" class="btn"> Más fotos</a>
				</div>
			</div>
        </section><!-- End of Features Section -->



        <section id="combos" class="about cuerpo"  data-scroll-index='4'>
            <div class="container">
                <div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="2s">
						<div class="head_title text-center">
							<h2>Combos!</h2>
							<div class="separator"></div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight"  data-wow-duration="2s">
						<div class="head_title_rigth">
							<p class="esp">Contamos con los siguientes combos para ofrecerte.</p>
						</div>
					</div>
                    <div class="col-md-12 col-sm-12 col-xs-12 main_about_content text-center">
                       <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="1.5s">
							<div class="single_about">
								<div class="single_about_img_combo">
									<img src="{{ asset('') }}images/combo1.png" alt="" />
								</div>
								<h3 class="titulo"><span class="statistic-counter titulo" >30.25</span>Combo 1</h3>
								<p class="info">info combo 1</p>
							</div>
						</div>

                       <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="2s">
							<div class="single_about">
								<div class="single_about_img_combo ">
									<img src="{{ asset('') }}images/combo2.png" alt="" />
								</div>
								<h3 class="titulo"><span class="statistic-counter titulo">20.75</span>Combo 2</h3>
								<p class="info">info combo2</p>
							</div>
						</div>

                       <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="3s">
							<div class="single_about">
								<div class="single_about_img_combo">
									<img src="{{ asset('') }}images/combo3.png" alt="" />
								</div>
								<h3 class="titulo"><span class="statistic-counter" >15.20</span>Combo 3</h3>
								<p class="info">info combo 3 </p>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </section><!-- End of Features Section -->


        <section id="contactos" class="contact contac_custon" data-scroll-index='5'>
            <div class="container">
                <div class="row">
                    <div class="main_contact">

                        <div class="contact_content">

                            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInRight"  data-wow-duration="2s">
								<div class="contact_socail_bookmark_area">
								
									<div class="contact_adress">
										<h3>Direccion:</h3>
										<span>9 de Julio al 100,</span>
										<span>Chaco, Resistencia</span>
									</div>

									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="single_contact_phone">
												<p><label>Telefono: </label> +543624592345</p>

											</div>
										</div>

										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="single_contact_phone">
												<p><label>Email:</label> travesurasinfantiles@gmail.com</p>
											</div>
										</div>
									</div>
									<div class="contact_socail_bookmark">
										<p><label>Buscanos en:&nbsp</label><a href="www.facebook.com"><i class="fa fa-facebook-official" style="font-size:27px;color:white"></i></a></p>

									</div>

								</div>
							</div>
                        </div>
                    </div>
                </div>

				<div class="row">
					<div class="footer_copyright">

						<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown"  data-wow-duration="3s">
							<div class="single_copyirgth text-left">
								<p>Copyright 2017 &copy; by MPSoluciones</p>
							</div>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single_copyirgth wow fadeInUp"  data-wow-duration="2s">
								<ul class="navbar-right">
                                    <li><a href="#inicio" data-scroll-nav='1'>Inicio</a></li>
                                    <li><a href="#queofrecemos" data-scroll-nav='2'>¿Qué ofrecemos?</a></li>
                                    <li><a href="#nuestrotrabajo" data-scroll-nav='3'>Nuestros trabajos</a></li>
                                    <li><a href="#combos" data-scroll-nav='4'>Combos</a></li>
                                    <li><a href="#contactos" data-scroll-nav='5'>Contactos</a></li>

                                </ul>
                            </div>
						</div>

					</div>
				</div>
            </div>
        </section><!-- End of contact With Map Section -->

        <!-- STRAT SCROLL TO TOP -->

        <div class="scrollup">
            <a href="#" data-scroll-nav='1' ><i class="fa fa-chevron-up"></i></a>
        </div>

       <!-- <script src="{{ asset('') }}js/vendor/jquery-1.11.2.min.js"></script>-->
        <script src="{{ asset('') }}js/vendor/bootstrap.min.js"></script>
        <script src="{{ asset('') }}js/vendor/isotope.min.js"></script>
        <script src="{{ asset('') }}js/vendor/modernizr-2.8.3-respond-1.4.2.min.js "></script>


        <script src="{{ asset('') }}js/jquery.easypiechart.min.js"></script>
        <script src="{{ asset('') }}js/jquery.mixitup.min.js"></script>


        <script src="{{ asset('') }}js/plugins.js"></script>
        <script src="{{ asset('') }}js/main.js"></script>

    </body>
</html>
