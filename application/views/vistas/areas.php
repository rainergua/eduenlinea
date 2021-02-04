<?php 
    $texto = "Este material tiene la finalidad de fortalecer capacidades, potencialidades y cualidades a partir de contenidos dosificados planteados en el currículo. Asimismo, permitirá coadyuvar la nivelación de aprendizajes para encarar esta gestión escolar.";
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
        $texto = "Este material tiene la finalidad de fortalecer capacidades, potencialidades, habilidades y cualidades productivas a partir de contenidos dosificados planteados en el currículo para el primer trimestre. Asimismo, permitirá coadyuvar la nivelación de aprendizajes para encarar esta gestión escolar.  ";
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
                <h5 class="card-title">Texto de Aprendizaje</h5>
                <p class="card-text text-justify"><?=$texto?></p>
            </div>
        </div>
        <?php
        if($nivel->cod_niv==4 || $nivel->cod_niv==5){
        ?>
        <div class="col-sm-6 col-md-3 col-ld-3 text-center">
            <a href="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'e.pdf';?>" target="_blank">
            <img src="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'e.png';?>" class="img-fluid boton-sec mt-1 pt-1">
            </a>
        </div>
        <div class="col-sm-6 col-md-3 col-ld-3 text-center">
            <div class="card-block">
                <h5 class="card-title">Evaluación de aprendizajes</h5>
                <p class="card-text text-justify">El proceso de Evaluación de Aprendizajes, se desarrollará en la primera semana de clases, del 1 al 5 de febrero del 2021. 
                    El objetivo es evaluar, en cada estudiante, el desarrollo de conocimientos y capacidades en los cuatro Campos de Saberes y Conocimientos.
                    Este será el punto de partida para que la o el maestro defina de mejor manera la planificación de los procesos educativos.
                <br/>

                </p>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <h5 class="card-header text-center">
                        Año de escolaridad: <?=$nivel->des_gra?> | <?=$nivel->des_niv?><br />
                    </h5>
    <div class="row align-items-center pt-2 mt-2">
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
            <a href="<?php echo base_url().'contenido/contenidoarea/'.$area->cod_gra.'/'.$area->cod_area?>">
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



