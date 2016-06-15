<?php
$directoryURI = $_SERVER['PHP_SELF'];

if ($directoryURI == "/ildolce/carta/index.php") {

    $carta = "class='active'";
    $blog = " ";
    $contacto = " ";
} elseif ($directoryURI == "/ildolce/blog/index.php") {
    $carta = " ";
    $blog = "class='active'";
    $contacto = " ";
}
elseif ($directoryURI == "/ildolce/contacto/index.php") {
    $carta = " ";
    $blog = " ";
    $contacto = "class='active'";
}

?>
<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                </div>
                <div class="col-sm-6 col-xs-8">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>

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
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="margin-bottom: 7px;" class="navbar-brand" href="index.php"><img class="img-circle img-responsive" src="../images/logo1.jpg" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li ><a href="../">Inicio</a></li>
                    <!--<li><a href="about-us.html">About Us</a></li>-->
                    <!--<li><a href="services.html">Services</a></li>-->
                    <li <?php echo $carta; ?>><a href="../carta/">Carta</a></li>
                    <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-item.html">Blog Single</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="shortcodes.html">Shortcodes</a></li>
                        </ul>
                    </li>-->
                    <li <?php echo $blog; ?>><a href="../blog/">Blog</a></li> 
                    <li <?php echo $contacto; ?>><a href="../contacto/">Contacto</a></li>                        
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->

