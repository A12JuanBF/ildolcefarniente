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
        
        <title>Il dolce far niente | Subscripción</title>

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
        
        <script src="../js/jquery.js"></script>
        <script src="../js/suscrip.js"></script>
    </head><!--/head-->

    <body>

        <?php
        $vista->cabecero();
        ?>

        <section >
            
        </section>  <!--/gmap_area -->

        <section id="contact-page">
            <div class="container">
                <div class="center">        
                    <h2>Subscríbete a nuestras ofertas y sorteos</h2>
                    <p class="lead"></p>
                </div> 
                <div class="row contact-wrap"> 
                    <div id="mensaje" class="status alert alert-success" style="display: none"></div>
                    <form id="mainsubscripcion" class="contact-form" name="subscripcion">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Nombre *</label>
                                <input type="text" name="name" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" name="email" class="form-control" required="required">
                            </div>
                            
                                <label>Aceptar condiciones de uso *</label>
                                <input type="checkbox" name="aceptar"  required="required">
                            
                                                 
                        </div>
                        <div class="col-sm-12 ">
                            
                                                 
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Subscripción</button>
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