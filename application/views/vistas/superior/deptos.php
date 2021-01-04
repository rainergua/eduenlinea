<div class="container-fluid trans contenido">
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <h4>Subsistema de Educación Superior</h4>
            <h5><?=$titulo?></h5>
        </div>
    </div>
    <div class="row mt-3">
        <?php 
        foreach ($depto as $dep) {
        ?>        
            <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center mt-4 pt-2">
                <div class="ih-item square colored effect7">
                    <a href="<?php echo base_url().'consup/'.$link.'/'.$dep->cod_dep; ?>">
                    <div class="img"><img src="<?php echo base_url().'assets/uploads/files/img/'.$dep->img_dep; ?>" alt="img"></div>
                    <div class="mask1"></div>
                    <div class="mask2"></div>
                    <div class="info">
                        <h3><?=$dep->nom_dep?></h3>
                        <p><?=$dep->des_dep?></p>
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



