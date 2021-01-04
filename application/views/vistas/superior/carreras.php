<div class="container-fluid trans contenido">
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <h4>Subsistema de Educación Superior</h4>
            <h5>Departamento de <?=$depto->nom_dep?></h5>
            <h5><?=$uni->nom_uni?></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12">
        <p>
        <?=$uni->des_uni?>
        </p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-ld-6">
            <div class="card-header acordion-header">
                <h5 class="mb-0 acordion-link text-center">
                    CARRERAS
                </h5>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-ld-6">
            <div class="card-header acordion-header">
                <h5 class="mb-0 acordion-link text-center">
                    NIVEL
                </h5>
            </div>
        </div>
    </div>
    <?php 
    $i=0;
    foreach ($carreras as $carr) {
        $i++;
    ?>  <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-ld-6">
                <div class="card-header car-header<?=$i%2?>">
                    <h5 class="mb-0">
                        <a href="<?php echo base_url().'consup/materias/'.$carr->cod_car.'/'.$depto->cod_dep; ?>" class="btn btn-link acordion-link">
                        <span class="fa-stack fa-sm">
                            <i class="fas fa-circle fa-stack-2x"></i>
                        </span> 
                        <?=$carr->nom_car?>
                        </a>
                    </h5>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-ld-6">
            <div class="card-header car-header<?=$i%2?>">
                <h5 class="mb-0 acordion-link text-center">
                    <a href="<?php echo base_url().'consup/carreras/'.$carr->cod_car; ?>" class="btn btn-link acordion-link">
                        <span class="fa-stack fa-sm">
                            <i class="fas fa-circle fa-stack-2x"></i>
                        </span> 
                        <?=$carr->niv_car?>
                    </a>
                </h5>
            </div>
        </div>
        </div>     
    <?php
    }?> 
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12">
             
        </div>
    </div>
</div>
</div>



