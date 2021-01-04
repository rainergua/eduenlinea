<div class="container-fluid trans contenido">
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <h4>Subsistema de Educación Superior</h4>
            <h5>Departamento de <?=$depto->nom_dep?></h5>
            <h5>Universidades</h5>
        </div>
    </div>
    <div class="row mt-3">
        <?php 
        foreach ($unis as $uni) {
        ?>        
            <div class="col-6 col-sm-6 col-md-2 col-ld-2 text-center mt-2 pt-2">
                <div class="ih-item square square2 colored effect7">
                    <a href="<?php echo base_url().'consup/carreras/'.$uni->cod_uni.'/'.$depto->cod_dep; ?>">
                    <div class="img"><img src="<?php echo base_url().'assets/uploads/files/img/'.$uni->img_uni; ?>" alt="img"></div>
                    <div class="mask1"></div>
                    <div class="mask2"></div>
                    <div class="info">
                        <h3><?=$uni->nom_uni?></h3>
                        <p><?=$uni->nom_uni?></p>
                    </div></a>
                </div>
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



