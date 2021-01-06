<?php 
    if($nivel->cod_niv==4){
        $cla = "contini";
    }
?>
<div class="container-fluid trans <?=$cla?>">
<div class="container">
    <div class="row row-height align-items-center pt-4 mt-4">
        <?php foreach ($areas as $area) {?>
        <div class="col-12 col-sm-12 col-md-3 col-ld-3 text-center">
            <a href="<?php echo base_url().'contenido/contarea/'.$area->cod_gra.'/'.$area->cod_area; ?>">
                <img src="<?php echo base_url().'assets/uploads/files/img/'.$area->img_area; ?>" class="img-fluid boton-sec">
            </a>
        </div>
        <?php
        }?>
    </div><!--ROW-->
</div>
</div>



