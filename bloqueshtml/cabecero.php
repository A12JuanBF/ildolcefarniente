<?php
$directoryURI = $_SERVER['PHP_SELF'];

if ($directoryURI == "/carta/index.php") {

    $carta = "class='active'";
    $galeria = " ";
    $contacto = " ";
} 
elseif ($directoryURI == "/contacto/index.php") {
    $carta = " ";
    $galeria = " ";
    $contacto = "class='active'";
}
elseif ($directoryURI == "/galeria/index.php") {
    $carta = " ";
    $contacto = " ";
    $galeria = "class='active'";
}
elseif ($directoryURI == "/subscripcion/index.php") {
    $carta = " ";
    $contacto = "class='active'";
    $galeria = " ";
}

?>
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
                <a style="margin-bottom: 7px;" class="navbar-brand" href="../"><img class="img-circle img-responsive" src="../images/logo1.jpg" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li ><a href="../">Restaurante</a></li>
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
                    <li <?php echo $galeria; ?>><a href="../galeria/">Galeria</a></li> 
                    <li class="dropdown" <?php echo $contacto; ?>><a href="#" class="dropdown-toggle" data-toggle="dropdown">Contactar <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li ><a href="../contacto">Contacto</a></li>
                                    <li><a href="../subscripcion">Subscripción</a></li>
                                    
                                </ul>
                            </li>                        
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->

