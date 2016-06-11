<?php
include '../vistas/vista.php';
$vista = new vista;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Il dolce far niente | Carta</title>
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
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->
    <body>

        <?php
        $vista->cabecero();
        ?>
        <section id="portfolio">
            <div class="container">
                <div class="center">
                    <h2>Menú</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>


                <ul class="portfolio-filter text-center">
                    <li><a class="btn btn-default active" href="#" data-filter="*">Platos</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Primeros</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".html">Segundos</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".wordpress">Postres</a></li>
                </ul><!--/#portfolio-filter-->

                <div class="row">
                    <div class="portfolio-items">
                        <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                <img class="img-responsive" src="../images/portfolio/recent/item1.png" alt="">
                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h3><a href="#">Business theme</a></h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        <a class="preview" href="../images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                    </div> 
                                </div>
                            </div>
                        </div><!--/.portfolio-item-->

                        <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                <img class="img-responsive" src="../images/portfolio/recent/item2.png" alt="">
                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h3><a href="#">Business theme</a></h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        <a class="preview" href="../images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                    </div> 
                                </div>
                            </div>          
                        </div><!--/.portfolio-item-->

                        <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                <img class="img-responsive" src="../images/portfolio/recent/item3.png" alt="">
                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h3><a href="#">Business theme</a></h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        <a class="preview" href="../images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                    </div> 
                                </div>
                            </div>        
                        </div><!--/.portfolio-item-->

                        <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                <img class="img-responsive" src="../images/portfolio/recent/item4.png" alt="">
                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h3><a href="#">Business theme</a></h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        <a class="preview" href="../images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                    </div> 
                                </div>
                            </div>           
                        </div><!--/.portfolio-item-->

                        <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                <img class="img-responsive" src="../images/portfolio/recent/item5.png" alt="">
                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h3><a href="#">Business theme</a></h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        <a class="preview" href="../images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                    </div> 
                                </div>
                            </div>      
                        </div><!--/.portfolio-item-->

                        <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                <img class="img-responsive" src="../images/portfolio/recent/item6.png" alt="">
                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h3><a href="#">Business theme</a></h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        <a class="preview" href="../images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                    </div> 
                                </div>
                            </div>         
                        </div><!--/.portfolio-item-->

                        <div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                <img class="img-responsive" src="../images/portfolio/recent/item7.png" alt="">
                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h3><a href="#">Business theme</a></h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        <a class="preview" href="../images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                    </div> 
                                </div>
                            </div>          
                        </div><!--/.portfolio-item-->

                        <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                <img class="img-responsive" src="../images/portfolio/recent/item8.png" alt="">
                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h3><a href="#">Business theme</a></h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        <a class="preview" href="../images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                    </div> 
                                </div>
                            </div>          
                        </div><!--/.portfolio-item-->
                    </div>
                </div>
            </div>
        </section><!--/#portfolio-item-->

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