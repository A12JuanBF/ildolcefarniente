<?php
include '../vistas/vista.php';
$vista = new vista;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Il Dolce Far Niente es un restaurante en Santiago de Compostela con el sabor de la cocina casera siciliana, un lugar en el que disfrutar comiendo sin tener que hacer nada. Toda una experiencia culinaria que nos trasladará, a través de las texturas, sabores y aromas de sus platos, al sur de la bella Italia.">
        <meta name="author" content="Juan Diego Bermejo Fernández">
        <meta name="robots" content="Restaurante italiano, Santiago de Compostela, Il dolce far niente, local, mobiliario" />
        <meta name="Title" content="Galería">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@ildolcesantiago">
        <meta name="twitter:title" content="Il dolce far niente">
        <meta name="twitter:description" content="Il Dolce Far Niente es un restaurante con el sabor de la cocina casera siciliana, un lugar en el que disfrutar comiendo sin tener que hacer nada.">
        <meta name="twitter:creator" content="Il dolce far niente">

        <meta property="og:title" content="Il dolce far niente" />
        <meta property="og:url" content=" http://www.ildolcefarniente.es/" />
        <meta property="og:image" content="http://www.ildolcefarniente.es/images/logo1.jpg" />
        <meta property="og:description" content="Il Dolce Far Niente es un restaurante en Santiago de Compostela con el sabor de la cocina casera siciliana, un lugar en el que disfrutar comiendo sin tener que hacer nada. Toda una experiencia culinaria que nos trasladará, a través de las texturas, sabores y aromas de sus platos, al sur de la bella Italia." />

        <meta itemprop="name" content="Il dolce far niente">
        <meta itemprop="description" content="Il Dolce Far Niente es un restaurante en Santiago de Compostela con el sabor de la cocina casera siciliana, un lugar en el que disfrutar comiendo sin tener que hacer nada. Toda una experiencia culinaria que nos trasladará, a través de las texturas, sabores y aromas de sus platos, al sur de la bella Italia.">
        <meta itemprop="image" content="http://www.ildolcefarniente.es/images/logo1.jpg"/>

        <title>Il dolce far niente | Galeria</title>

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

        <?php
        $vista->cabecero();
        ?>

        <section id="feature" class="transparent-bg">
            <div class="container">





                <div class="get-started center wow fadeInDown">
                    <h2>Galería de fotos</h2>
                    <p class="lead">Imágenes de la materia prima que utilizamos para elaborar nuestros platos, de nuestro equipo de trabajo y del exterior e interior de nuestro restaurante.</p>
                    <!--<div class="request">
                        <h4><a href="#">Request a free Quote</a></h4>
                    </div>-->
                </div><!--/.get-started-->

                <section id="recent-works" class="shortcode-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="recent-work-wrap">
                                    <img class="img-responsive img-thumbnail" src="../images/portfolio/recent/barra.jpg" alt="Barra" title="Barra">
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            
                                            <a class="preview" href="../images/portfolio/full/barra.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ampliar imagen</a>
                                        </div> 
                                    </div>
                                </div>
                            </div>   
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="recent-work-wrap">
                                    <img class="img-responsive img-thumbnail" src="../images/portfolio/recent/cocina.jpg" alt="cocina" title="Cocina">
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            
                                            <a class="preview" href="../images/portfolio/full/cocina.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ampliar imagen</a>
                                        </div> 
                                    </div>
                                </div>
                            </div>   
                            
                            

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="recent-work-wrap">
                                    <img class="img-responsive img-thumbnail" src="../images/portfolio/recent/mesas.jpg" alt="Sala" title="Sala">
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            
                                            <a class="preview" href="../images/portfolio/full/mesas.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ampliar imagen</a>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 10px;" class="row">
                            
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="recent-work-wrap">
                                    <img class="img-responsive img-thumbnail" src="../images/portfolio/recent/fuera.jpg" alt="Puerta" title="Puerta">
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            
                                            <a class="preview" href="../images/portfolio/full/fuera.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ampliar imagen</a>
                                        </div> 
                                    </div>
                                </div>
                            </div>   

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="recent-work-wrap">
                                    <img class="img-responsive img-thumbnail" src="../images/portfolio/recent/ildolce.jpg" alt="Mesas" title="Mesas">
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            
                                            <a class="preview" href="../images/portfolio/full/ildolce.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ampliar imagen</a>
                                        </div> 
                                    </div>
                                </div>
                            </div>   

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="recent-work-wrap">
                                    <img class="img-responsive img-thumbnail" src="../images/portfolio/recent/fuera2.jpg" alt="Benvenuti" title="Benvenuti">
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            
                                            <a class="preview" href="../images/portfolio/full/fuera2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ampliar imagen</a>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div style="margin-top: 10px;" class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="recent-work-wrap">
                                    <img class="img-responsive img-thumbnail" src="../images/portfolio/recent/pasta1.jpg" alt="Pasta" title="pasta">
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            
                                            <a class="preview" href="../images/portfolio/full/pasta1.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ampliar imagen</a>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="recent-work-wrap">
                                    <img class="img-responsive img-thumbnail" src="../images/portfolio/recent/pasta2.jpg" alt="Pasta" title="pasta">
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            
                                            <a class="preview" href="../images/portfolio/full/pasta2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ampliar imagen</a>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="recent-work-wrap">
                                    <img class="img-responsive img-thumbnail" src="../images/portfolio/recent/pasta3.jpg" alt="Pasta" title="pasta">
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            
                                            <a class="preview" href="../images/portfolio/full/pasta3.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ampliar imagen</a>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            
                        </div>

                    </div>
                </section>

                <div class="center">
                    <div class="row" style="margin-bottom: 10px;">
                    <h2 >Nuestra actividad en redes sociales</h2>
                    </div>
                    

                    
                    <div class="col-lg-7 fb-page" data-href="https://www.facebook.com/Il-Dolce-Far-Niente-Santiago-1722276494712764/" data-tabs="timeline" data-width="600" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">

                        <blockquote cite="https://www.facebook.com/Il-Dolce-Far-Niente-Santiago-1722276494712764/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Il-Dolce-Far-Niente-Santiago-1722276494712764/">Il Dolce Far Niente - Santiago</a></blockquote>
                    </div>


                    <div class="col-lg-5">
                        <img class="col-lg-6 img-responsive" src="../images/twitter.png" alt="Twitter" title="Twitter logo"/>
                    </div>
                    <div class="col-lg-5" style="height:500px; overflow:scroll;">


                        <a class="twitter-timeline" href="https://twitter.com/ildolcesantiago">Tweets by ildolcesantiago</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>


                </div><!--/.container-->


        </section><!--/#feature-->


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