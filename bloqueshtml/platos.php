
<?php
$platos = new mostrarcarta('idfn');
$arrplatos=json_decode($platos->getplatos());
?>
<?php foreach ($arrplatos as $value): ?>

<div class="portfolio-item <?php echo $value->tipo; ?> col-xs-12 col-sm-4 col-md-3">
    <div class="recent-work-wrap">
        <img class="img-responsive" src="../img-platos/<?php echo $value->imagen; ?>" alt="<?php echo $value->nombre; ?>" title="<?php echo $value->nombre; ?>">
        <div class="overlay">
            <div class="recent-work-inner">
                <h3><?php echo $value->nombre; ?></h3>
                <p><?php echo $value->descripcion; ?></p>
                <a class="preview" href="../img-platos/<?php echo $value->imagen; ?>" rel="prettyPhoto"><span>Precio: <?php echo $value->precio; ?> <i class="glyphicon glyphicon-euro"></i></span>&nbsp;<i class="fa fa-eye"></i> Ampliar imagen</a>
            </div> 
        </div>
    </div>
</div><!--/.portfolio-item-->

<?php endforeach; ?>