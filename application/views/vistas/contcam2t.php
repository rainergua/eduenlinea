<?php 
    $texto = "Este material tiene la finalidad de fortalecer capacidades, potencialidades y cualidades a partir de contenidos dosificados planteados en el currículo. Asimismo, permite coadyuvar en los aprendizajes para encarar la gestión escolar.";
    $texto2 = "Este material tiene la finalidad de fortalecer capacidades, potencialidades y cualidades a partir de contenidos dosificados planteados en el currículo. Asimismo, permitirá coadyuvar en los aprendizajes para encarar el segundo trimestre.";
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
        $texto = "Este material tiene la finalidad de fortalecer capacidades, potencialidades y cualidades a partir de contenidos dosificados planteados en el currículo. Asimismo, permite coadyuvar en los aprendizajes para encarar la gestión escolar.";
        $texto2 = "Este material tiene la finalidad de fortalecer capacidades, potencialidades, habilidades y cualidades productivas a partir de contenidos dosificados planteados en el currículo para el segundo trimestre. Asimismo, permitirá coadyuvar en los aprendizajes para encarar el segundo trimestre.";
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
            <div class="card-block">
            <h5 class="card-title">Textos de Aprendizaje</h5>
            <p class="card-text text-justify"><?=$texto?></p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-ld-3 text-center">
            <a href="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'_3.pdf';?>" target="_blank">
            <img src="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'_3.jpg';?>" class="img-fluid boton-sec mt-1 pt-1">
            <h4 class="text-center text-danger">Tercer Trimestre</h4>
            </a>
        </div>
        <div class="col-sm-6 col-md-3 col-ld-3 text-center">
            <a href="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'_2.pdf';?>" target="_blank">
            <img src="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'_2.png';?>" class="img-fluid boton-sec mt-1 pt-1">
            <h4 class="text-center text-danger">Segundo Trimestre</h4>
            </a>
        </div>
        <div class="col-sm-6 col-md-3 col-ld-3 text-center">
            <a href="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'.pdf';?>" target="_blank">
            <img src="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'.png';?>" class="img-fluid boton-sec mt-1 pt-1">
            <h4 class="text-center text-danger">Primer Trimestre</h4>
            </a>
        </div>
        
    </div>
    <h5 class="card-header text-center">
        <?=$nivel->des_niv?> | Año de escolaridad: <?=$nivel->des_gra?><br />
        <!--Área de cononcimiento: <=$nivel->des_area?--> 
    </h5>

    <div id="accordion">
    <?php
            foreach ($periodos as $periodo) {
                $clase = '';
                $sym = 'fa-plus';
                if($periodo->cod_per == 3){
                    $clase = 'show';
                    $sym = 'fa-minus';
                }
         ?>
                <div class="card">
                    <div class="card-header acordion-header" id="heading<?=$periodo->cod_per?>">
                    <h5 class="mb-0">
                        <button class="btn btn-link acordion-link" data-toggle="collapse" data-target="#collapse<?=$periodo->cod_per?>" aria-expanded="true" aria-controls="collapse<?=$periodo->cod_per?>">
                        <span class="fa-stack fa-sm">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas <?=$sym?> fa-stack-1x fa-inverse"></i>
                        </span> 
                        
                        
                        <?=$periodo->des_per?>
                        </button>
                    </h5>
                    </div>

                    <div id="collapse<?=$periodo->cod_per?>" class="collapse <?=$clase?>" aria-labelledby="heading<?=$periodo->cod_per?>" data-parent="#accordion">
                    <div class="card-body">





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
            if($periodo->cod_per == $cont->cod_per){
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
        }
        ?>
    </div><!--ROW-->

    </div>
                    </div>
                </div>
        <?php
        }
        ?>
        </div> 
        </div><!--div id="accordion"-->


</div>
</div>



