<?php 
    if($nivel->cod_niv==4){
        $cla = "contini";
        $fad = "img-fluid boton-sec";
        $niv = "prim";
        $bread = 'Inicial';
    }elseif($nivel->cod_niv==5){
        $cla = "contpri";
        $fad = "fader";
        $niv = "prim";
        $bread = 'Primaria';
    }elseif($nivel->cod_niv==6){
        $cla = "contpri";
        $fad = "fader";
        $niv = "sec";
        $bread = 'Secundaria';
    }
?>
<div class="container-fluid trans <?=$cla?>">
    <div class=" container d-flex justify-content-center py-2 my-2">
        <ul class="pagination shadow-lg">
            <li class="page-item"><a class="page-link" href="<?php echo base_url()?>"><i class="fa fa-home "></i> Inicio </a></li>
            <li class="page-item"><a class="page-link " href="<?php echo base_url().'eduvit/regular'?>">Educación Regular</a></li>
            <li class="page-item active"><a class="page-link" href="<?php echo base_url().'contenido/nivel/'.$nivel->cod_niv?>"><?=$bread?></a></li>
        </ul>
    </div>

<div class="container">
    <div class="row my-2 py-2">
        <div class="col-sm-6 col-md-3 col-ld-3 text-center">
            <a href="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'.pdf';?>" target="_blank">
            <img src="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'.png';?>" class="img-fluid boton-sec mt-1 pt-1">
            </a>
        </div>
        <div class="col-sm-6 col-md-3 col-ld-3 text-center">
            <div class="card-block">
                <h5 class="card-title">Texto Escolar</h5>
                <p class="card-text text-justify">Queremos compartir este cuaderno de Fortalecimiento de
                Procesos Educativos integrales, que te permitirá
                nivelar tus aprendizajes, para encarar este nuevo año educativo. Este material está pensado 
                para fortalecer las Capacidades, Potencialidades y Habilidades en el desarrollo integral 
                y holístico.</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-ld-3 text-center">
            <a href="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'e.pdf';?>" target="_blank">
            <img src="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'.png';?>" class="img-fluid boton-sec mt-1 pt-1">
            </a>
        </div>
        <div class="col-sm-6 col-md-3 col-ld-3 text-center">
            <div class="card-block">
                <h5 class="card-title">Evaluación de aprendizaje</h5>
                <p class="card-text text-justify">Queremos compartir este cuaderno de Fortalecimiento de
                Procesos Educativos integrales, que te permitirá
                nivelar tus aprendizajes, para encarar este nuevo año educativo. Este material está pensado 
                para fortalecer las Capacidades, Potencialidades y Habilidades en el desarrollo integral 
                y holístico.</p>
            </div>
        </div>
    </div>
    <div class="row row-height align-items-center pt-4 mt-4">
        <?php 
        if($nivel->cod_niv==4){
            if($nivel->cod_gra == 9){
                $arch = "1er";
            }else{
                $arch = "2do";
            }
        foreach ($areas as $area) {?>
        <div class="col-12 col-sm-12 col-md-3 col-ld-3 text-center">
            <a href="<?php echo base_url().'assets/img/ini/'.$arch.$area->corto_area.'-1t.pdf'; ?>" target="_blank">
                <img src="<?php echo base_url().'assets/uploads/files/img/'.$area->img_area; ?>" class="<?=$fad?>">
            </a>
        </div>
        <?php
        }}
        elseif($nivel->cod_niv==5 || $nivel->cod_niv==6){
        foreach ($areas as $area) {?>
        <div class="col-12 col-sm-12 col-md-3 col-ld-3 text-center">
            <a href="<?php echo base_url().'contenido/material/'.$area->cod_gra.'/'.$area->cod_area; ?>">
            <div class="mimg">
                <img src="<?php echo base_url().'assets/img/'.$niv.'/'.$area->cod_niv.$area->corto_area.'.png'; ?>" class="<?=$fad?>" alt="<?=$area->des_area?>">
            </div>
            </a>
        </div>
        <?php
        }}?>
    </div><!--ROW-->
</div>
</div>



