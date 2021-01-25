<?php 
    if($nivel->cod_niv==4){
        $cla = "contini";
        $fad = "img-fluid boton-sec";
        $niv = "prim";
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
                <p class="card-text text-justify">queremos compartirte este cuaderno de Fortalecimiento de
                Procesos Educativos integrales, que te permitirá
                nivelar tus aprendizajes, para encarar este nuevo año educativo. Este material
                está pensado para fortalecer las Capacidades, Potencialidades y Cualidades en
                el desarrollo de todas las áreas.</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-ld-3 text-center">
            <a href="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'.pdf';?>" target="_blank">
            <img src="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'.png';?>" class="img-fluid boton-sec mt-1 pt-1">
            </a>
        </div>
        <div class="col-sm-6 col-md-3 col-ld-3 text-center">
            <div class="card-block">
                <h5 class="card-title">Texto Escolar</h5>
                <p class="card-text text-justify">queremos compartirte este cuaderno de Fortalecimiento de
                Procesos Educativos integrales, que te permitirá
                nivelar tus aprendizajes, para encarar este nuevo año educativo. Este material
                está pensado para fortalecer las Capacidades, Potencialidades y Cualidades en
                el desarrollo de todas las áreas.</p>
            </div>
        </div>
    </div>
    <div class="row pt-4 mt-4">
        <?php 
        foreach ($campos as $campo) {?>
        <div class="col-12 col-sm-12 col-md-3 col-ld-3 text-center">
            <div class="mimgc">
                <a href="<?php echo base_url().'contenido/areas/'.$curso.'/'.$campo->cod_cam; ?>">
                <img src="<?php echo base_url().'assets/img/campos/'.$campo->img_cam.$niv.'.png'; ?>" class="<?=$fad?>">
                </a>
            </div>
        </div>
        <?php
        }
        ?>
    </div><!--ROW-->
</div>
</div>


