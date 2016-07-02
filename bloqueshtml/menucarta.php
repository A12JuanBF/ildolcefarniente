<?php
   include '../clases/mostrarcarta.php';
   $carta=new mostrarcarta('idfn');
?>
<!--
bloque de html dinámico que muestra el menú de la carta
-->

    <ul class="portfolio-filter text-center">
        <?php
        $arrcarta=json_decode($carta->getcarta());
        ?>
        <?php foreach ($arrcarta as $value): ?>
        <li><a class="btn btn-default" href="#" data-filter=".<?php echo $value->nombre ?>"><?php echo $value->nombre ?></a></li>
        <?php endforeach;?>
    </ul>

