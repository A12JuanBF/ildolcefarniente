<?php
include '../vistas/vista.php';
$vista = new vista;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Il Dolce Far Niente es un restaurante con el sabor de la cocina casera siciliana, un lugar en el que disfrutar comiendo sin tener que hacer nada. Toda una experiencia culinaria que nos trasladará, a través de las texturas, sabores y aromas de sus platos, al sur de la bella Italia.">
        <meta name="author" content="Juan Diego Bermejo Fernández">
        <meta name="robots" content="Restaurante, Carta, Restaurante italiano, Santiago de Compostela, Il dolce far niente, platos, pizza, pasta" />
        <meta name="Title" content="Carta">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@ildolcesantiago">
        <meta name="twitter:title" content="Il dolce far niente">
        <meta name="twitter:description" content="Il Dolce Far Niente es un restaurante con el sabor de la cocina casera siciliana, un lugar en el que disfrutar comiendo sin tener que hacer nada.">
        <meta name="twitter:creator" content="Il dolce far niente">

        <meta property="og:title" content="Il dolce far niente" />
        <meta property="og:url" content=" http://www.ildolcefarniente.es/" />
        <meta property="og:image" content="http://www.ildolcefarniente.es/images/logo.jpg" />
        <meta property="og:description" content="Il Dolce Far Niente es un restaurante con el sabor de la cocina casera siciliana, un lugar en el que disfrutar comiendo sin tener que hacer nada. Toda una experiencia culinaria que nos trasladará, a través de las texturas, sabores y aromas de sus platos, al sur de la bella Italia." />

        <meta itemprop="name" content="Il dolce far niente">
        <meta itemprop="description" content="Il Dolce Far Niente es un restaurante con el sabor de la cocina casera siciliana, un lugar en el que disfrutar comiendo sin tener que hacer nada. Toda una experiencia culinaria que nos trasladará, a través de las texturas, sabores y aromas de sus platos, al sur de la bella Italia.">
        <meta itemprop="image" content="http://www.ildolcefarniente.es/images/logo.jpg"/>


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
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.jpg">
    </head><!--/head-->
    <body>

        <?php
        $vista->cabecero();
        ?>
        <section id="portfolio">
            <div class="container">
                <div class="center">
                    <h2>Carta</h2>
                    <p class="lead">Te mostramos a continuación algunos ejemplos de nuestra carta, con algunos de los platos estrella que no te podrás perder. Y si lo prefieres, estaremos encantados de recomendarte y aconsejarte en tu elección.</p>
                </div>

                <?php
                $vista->carta();
                ?>
                <!--/#portfolio-filter-->

                <div class="row">

                    <div class="portfolio-items">
                        <?php
                        $vista->platos();
                        ?>

                    </div>
                </div>
            </div>
        </section><!--/#portfolio-items-->

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
