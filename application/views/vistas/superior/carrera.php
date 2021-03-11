<div class="container-fluid trans contenido">
<div class="container">
<div class="row">
<?php 
    $i=0;
    foreach ($carreras as $carr) {
    ?>  
        <div class="col-3 col-sm-3 col-md-3 col-ld-3">
            <a href="<?php echo base_url().'consup/materias/'.$carr->cod_caresfm; ?>" class="btn btn-link acordion-link">
            <img src="<?php echo base_url().'/assets/img/super/'.$carr->corto_caresfm.'.png';?>" class="img-fluid boton-sec" alt="Carrera de <?php echo $carr->nom_caresfm?>">
            </a>
        </div>
    <?php
    }?> 
</div>
</div>
</div>