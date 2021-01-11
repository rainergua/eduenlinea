<?php 
    if($nivel->cod_niv==4){
        $cla = "contini";
        $fad = "img-fluid boton-sec";
    }elseif($nivel->cod_niv==5){
        $cla = "contpri";
        $fad = "fader";
    }
?>
<div class="container-fluid trans <?=$cla?>">
<div class="container">
    <div class="row row-height align-items-center pt-4 mt-4">
        <?php 
        if($nivel->cod_niv==4){
        foreach ($areas as $area) {?>
        <div class="col-12 col-sm-12 col-md-3 col-ld-3 text-center">
            <a href="<?php echo base_url().'contenido/contarea/'.$area->cod_gra.'/'.$area->cod_area; ?>">
                <img src="<?php echo base_url().'assets/uploads/files/img/'.$area->img_area; ?>" class="<?=$fad?>">
            </a>
        </div>
        <?php
        }}
        elseif($nivel->cod_niv==5 || $nivel->cod_niv==6){?>
        <div class="col-12 col-sm-12 col-md-3 col-ld-3 text-center">
            <div class="mimg"><img src="<?php echo base_url().'assets/img/prim/prleng.png'; ?>" class="<?=$fad?>"></div>
        </div>
        <div class="col-12 col-sm-12 col-md-3 col-ld-3 text-center">
            <div class="mimg"><img src="<?php echo base_url().'assets/img/prim/prmat.png'; ?>" class="<?=$fad?>"></div>
        </div>
        <div class="col-12 col-sm-12 col-md-3 col-ld-3 text-center">
            <div class="mimg"><img src="<?php echo base_url().'assets/img/prim/prnat.png'; ?>" class="<?=$fad?>"></div>
        </div>
        <div class="col-12 col-sm-12 col-md-3 col-ld-3 text-center">
            <div class="mimg"><img src="<?php echo base_url().'assets/img/prim/prsoc.png'; ?>" class="<?=$fad?>"></div>
        </div>
        <?php
        }?>
    </div><!--ROW-->
</div>
</div>


