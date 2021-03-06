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
        if($nivel->cod_niv==4){
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
        <?=$nivel->des_niv?> | Año de escolaridad: <?=$nivel->des_gra?><br />
        <!--Área de cononcimiento: <=$nivel->des_area?--> 
    </h5>
    <div class="row align-items-center pt-4 mt-2">
        <?php 
        foreach($contenidos as $cont){
            if($cont->cod_tipo==8){
                $icono = 'mp4.png';
            }elseif($cont->cod_tipo==23){
                $icono = 'mp3.png';
            }else{
                $icono = 'pdf.png';
            }
            ?>
            <div class="col-sm-6 col-md-2 col-ld-2 text-center">
                <a href="<?php echo base_url().'assets/uploads/files/cont/pri2/'.$cont->arch_concam; ?>" target="_blank" rel="noopener noreferrer">
                <figure class="figure">
                    <img src="<?php echo base_url().'assets/img/'.$icono;?>" class="figure-img img-fluid rounded">
                    <figcaption class="figure-caption text-center"><h6>
                    <?php print($cont->tipo_cont.'-'.$cont->des_concam);?></h6></figcaption>
                </figure>
                </a>
            </div>
        <?php
        }
        ?>
    </div><!--ROW-->
</div>
</div>



