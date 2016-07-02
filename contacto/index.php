<?php
include '../vistas/vista.php';
$vista = new vista;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Juan Diego Bermejo Fernández">
        <meta name="robots" content="Restaurante italiano, Santiago de Compostela, Il dolce far niente" />
        <meta name="Title" content="Contacto">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="">
        <meta name="twitter:title" content="Il dolce far niente">
        <meta name="twitter:description" content="">
        <meta name="twitter:creator" content="">

        <meta property="og:title" content="Il dolce far niente" />
        <meta property="og:url" content=" http://www.ildolcefarniente.es/" />
        <meta property="og:image" content="http://www.ildolcefarniente.es/images/logo1.jpg" />
        <meta property="og:description" content="" />

        <meta itemprop="name" content="Il dolce far niente">
        <meta itemprop="description" content="">
        <meta itemprop="image" content="http://www.ildolcefarniente.es/images/logo1.jpg"/>
        
        <title>Il dolce far niente | Contacto</title>

        <!-- core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/prettyPhoto.css" rel="stylesheet">
        <link href="../css/animate.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/responsive.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="../images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.jpg">
    </head><!--/head-->

    <body>

        <?php
        $vista->cabecero();
        ?>

        <section id="contact-info">
            <div class="center">                
                <h2>Dónde estamos?</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>
            <div class="gmap-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 text-center">
                            <div class="gmap">
                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2923.571994003097!2d-8.54315378507517!3d42.88187720998091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2efe45bb0be595%3A0x9e3f49e1ab4cfc06!2sR%C3%BAa+das+Casas+Reais%2C+21%2C+15704+Santiago+de+Compostela%2C+A+Coru%C3%B1a!5e0!3m2!1ses!2ses!4v1466105045374"></iframe>
                            </div>
                        </div>

                        <div class="col-sm-7 map-content">
                            <ul class="row">
                                <li class="col-sm-9">
                                    <address>
                                        <h5>Restaurante. Il dolce far niente</h5>
                                        
                                        <p> <i class="fa fa-map-marker"></i> Casas Reais, 21. Santiago de Compostela,15704 </p>
                                        
                                        <p><i class="glyphicon glyphicon-earphone"></i> Tlf: 881 125 391</p>
                                        <p><i class="glyphicon glyphicon-envelope"></i> contacto@ildolcefarniente.es</p>   
                                    </address>

                                   
                                </li>
                                <li class="col-sm-9"><address><h5>Horario</h5></address></li>
                                <li class="col-sm-9">Lunes: CERRADO</li>
                                <li class="col-sm-9">Martes - Domingo: 12:30 – 16:00 / 19:30 - 00:00</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>  <!--/gmap_area -->

        <section id="contact-page">
            <div class="container">
                <div class="center">        
                    <h2>Contacta con nosotros</h2>
                    <p class="lead">Déjanos un mensaje y contacteremos contigo a la mayor brevedad posible </p>
                </div> 
                <div class="row contact-wrap"> 
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="../include/mail.php">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                                <label>Nombre *</label>
                                <input type="text" id="name" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" id="email" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input id="number" type="number" class="form-control">
                            </div>
                                                 
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Asunto *</label>
                                <input type="text" id="subject" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Mensaje *</label>
                                <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                            </div>                        
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar mensaje</button>
                            </div>
                        </div>
                    </form> 
                </div><!--/.row-->
            </div><!--/.container-->
        </section><!--/#contact-page-->

        <?php
        $vista->menudesarrollado();
        ?>

        <?php
        $vista->pie();
        ?>


        <?php
        $vista->scripts();
        ?>
    </body>
</html>