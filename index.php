<!DOCTYPE html>
<?php
include 'vistas/vista.php';
$vista = new vista;
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Il Dolce Far Niente es un restaurante en Santiago de Compostela con el sabor de la cocina casera siciliana, un lugar en el que disfrutar comiendo sin tener que hacer nada. Toda una experiencia culinaria que nos trasladará, a través de las texturas, sabores y aromas de sus platos, al sur de la bella Italia.">
        <meta name="author" content="JDBF">
        <meta name="robots" content="Restaurante, Restaurante italiano, Santiago de Compostela, Il dolce far niente, Pizza, Pasta" />
        <meta name="Title" content="Restaurante. Il dolce far niente">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@ildolcesantiago">
        <meta name="twitter:title" content="Il dolce far niente">
        <meta name="twitter:description" content="Il Dolce Far Niente es un restaurante con el sabor de la cocina casera siciliana, un lugar en el que disfrutar comiendo sin tener que hacer nada.">
        <meta name="twitter:creator" content="Il dolce far niente">

        <meta property="og:title" content="Restaurante. Il dolce far niente" />
        <meta property="og:url" content=" http://www.ildolcefarniente.es/" />
        <meta property="og:image" content="http://www.ildolcefarniente.es/images/logo.jpg" />
        <meta property="og:description" content="Il Dolce Far Niente es un restaurante en Santiago de Compostela con el sabor de la cocina casera siciliana, un lugar en el que disfrutar comiendo sin tener que hacer nada. Toda una experiencia culinaria que nos trasladará, a través de las texturas, sabores y aromas de sus platos, al sur de la bella Italia." />


        <meta itemprop="name" content="Il dolce far niente">
        <meta itemprop="description" content="Il Dolce Far Niente es un restaurante con el sabor de la cocina casera siciliana, un lugar en el que disfrutar comiendo sin tener que hacer nada. Toda una experiencia culinaria que nos trasladará, a través de las texturas, sabores y aromas de sus platos, al sur de la bella Italia.">
        <meta itemprop="image" content="http://www.ildolcefarniente.es/images/logo.jpg">


        <title>Il dolce far niente | Restaurante</title>

        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.jpg">
        <script>!function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + '://platform.twitter.com/widgets.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, 'script', 'twitter-wjs');</script>
    
</head><!--/head-->

<body class="homepage">
     <div id="overbox3">
        <div id="infobox3">
            <p>Esta web utiliza cookies para obtener datos estadísticos de la navegación de sus usuarios. Si continúas navegando consideramos que aceptas su uso.
                <a href="politica-privacidad/">Más información</a>
                <a href="#" id="aceptar"  style="cursor:pointer;">Cerrar</a></p>
        </div>
    </div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=1778723105744928";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
   
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-5">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  881 125 391</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-7">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/Il-Dolce-Far-Niente-Santiago-1722276494712764"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/ildolcesantiago"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://plus.google.com/+IldolcefarnienteSantiagodeCompostela"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <!-- <div class="search">
                                 <form role="form">
                                     <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                     <i class="fa fa-search"></i>
                                 </form>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Menú</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a style="margin-bottom: 7px;" class="navbar-brand" href="index.php"><img class="img-circle img-responsive" src="images/logo1.jpg" alt="logo" title="Il dolce far niente"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active" ><a href="index.php">Restaurante</a></li>
                        <!--<li><a href="about-us.html">About Us</a></li>-->
                        <!--<li><a href="services.html">Services</a></li>-->
                        <li><a href="carta/">Carta</a></li>

                        <li ><a href="galeria/">Galeria</a></li> 

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contactar <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li ><a href="contacto/">Contacto</a></li>
                                <li><a href="subscripcion/">Subscripción</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->


    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg2.JPG)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">El arte de relajarse comiendo....</h1>
                                    <h2 class="animation animated-item-2">Il Dolce Far Niente es un restaurante en Santiago de Compostela con el sabor de la cocina casera siciliana, un lugar en el que disfrutar comiendo sin tener que hacer nada. Toda una experiencia culinaria que nos trasladará, a través de las texturas, sabores y aromas de sus platos, al sur de la bella Italia.</h2>

                                </div>
                            </div>



                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Saboreando Sicilia, saboreando Italia...</h1>
                                    <h2 class="animation animated-item-2">Te ofrecemos una exquisita carta con una variedad gastronómica en la que podrás degustar platos típicos sicilianos elaborados a la manera tradicional de los fogones de casa, así como un alto servicio profesional y de calidad.</h2>
                                    <a class="btn-slide animation animated-item-3" href="carta/">Nuestra Carta</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <a class="preview" href="images/slider/img2.jpg" rel="prettyPhoto"><img src="images/slider/img2.jpg" class="img-responsive col-lg-9 pull-right col-lg-offset-1" alt="Carta" title="Carta"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Tómate un respiro....</h1>
                                    <h2 class="animation animated-item-2">La dulzura de no hacer nada es una manera de disfrutar de la vida que nos enseñan los italianos. ¿Y qué mejor manera de hacerlo que comiendo?</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Subscripción</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class=" row" style="margin-bottom: 10px;">
                                    <h2 class="pull-right col-lg-9 col-sm-11 hidden-sm hidden-xs">Síguenos en las redes sociales</h2>
                                </div>
                                <div class="row" style="margin: 10px">
                                    <div class="pull-right col-lg-9 col-sm-11  hidden-sm hidden-xs fb-like " data-href="https://www.facebook.com/Il-Dolce-Far-Niente-Santiago-1722276494712764" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
                                </div>
                                <div class="row" style="margin: 10px">
                                    <div class="pull-right col-lg-9 col-sm-11  hidden-sm hidden-xs ">

                                        <a href="https://twitter.com/ildolcesantiago" class=" twitter-follow-button" data-show-count="false" data-size="large">Síguenos @ildolcesantiago</a> 

                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div><!--/.item-->
    </div><!--/.carousel-inner-->
</div><!--/.carousel-->
<a class="prev hidden-xs" href="#main-slider" data-slide="prev" >
    <i class="fa fa-chevron-left"></i>
</a>
<a class="next hidden-xs" href="#main-slider" data-slide="next">
    <i class="fa fa-chevron-right"></i>
</a>
</section><!--/#main-slider-->

<section id="conatcat-info">
    <div class="container">
        <div class="row">

            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h2>Quieres hacer una reserva?</h2>
                        <p>¿Te lo vas a perder? Si quieres experimentar nuestra cocina, estaremos encantados de recibirte. Reserva ya tu mesa por teléfono 881 125 391</p>
                    </div>
                </div>
                <div class="video">
                    <object >
                        <video controls>
                            <source src="images/fede trial.mp4" type="video/mp4">
                        </video>
                    </object>
                </div>
            </div>

        </div>
    </div><!--/.container-->    
</section><!--/#conatcat-info-->

<section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Carta</h3>
                    <ul>
                        <li><a href="/carta/">Ir a la carta</a></li>
                        <li><a href="#">Ver la carta en pdf</a></li>


                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Sobre nosotros</h3>
                    <ul>
                        <li><a href="https://ildolcefarnienteweb.wordpress.com/">Nuestro Blog</a></li>
                        <li><a href="galeria/">Galería de fotos</a></li>


                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Dónde estamos?</h3>
                    <ul>
                        <li><a href="contacto/">Contacto</a></li>
                        <li><a href="subscripcion/">Subscripción</a></li>

                    </ul>
                </div>    
            </div><!--/.col-md-3-->
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Otros sitios de interés</h3>
                    <ul>
                        <li><a href="#">A taberna da Chorima</a></li>

                    </ul>
                </div>    
            </div>

        </div>
    </div>
</section><!--/#bottom-->

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2016 <a target="_blank" href="#" title="Il dolce far niente">Il dolce far niente</a>. Restaurante.
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="https://ildolcefarnienteweb.wordpress.com/">Blog</a></li>
                    <li><a href="contacto/">Contacto</a></li>
                    <li><a href="subscripcion/">Subscripción</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
<srcript src="js/cookies.js"></srcript>


</body>
</html>