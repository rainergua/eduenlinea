<div class="container-fluid trans contenido">
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <h4>Subsistema de Educación Superior</h4>
            <h5><?php echo $titulo?></h5>
        </div>
    </div>
    <div class="row">
        <?php 
        foreach ($depto as $dep) {
        ?>        
            <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center ">
                <div class="mimgsup">
                <a href="<?php echo base_url().'consup/superior/'.$dir.'/'.$dep->cod_dep;?>">
                <img src="<?php echo base_url().'assets/img/super/depto/'.$dep->img_dep; ?>" alt="<?php echo $dep->nom_dep?>" class="fader mt-4 pt-4">
                </a></div>
            </div>
            <?php
            }?> 
    </div>
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12">
             
        </div>
    </div>
</div>
</div>



