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
                <h5 class="card-title">Textos de Aprendizaje<br></h5>
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
            <img src="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'_2.jpg';?>" class="img-fluid boton-sec mt-1 pt-1">
            <h4 class="text-center text-danger">Segundo Trimestre</h4>
            </a>
        </div>
        <div class="col-sm-6 col-md-3 col-ld-3 text-center">
            <a href="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'.pdf';?>" target="_blank">
            <img src="<?php echo base_url().'assets/img/'.$niv.'/cont/'.$nivel->cod_niv.$nivel->cod_gra.'.jpg';?>" class="img-fluid boton-sec mt-1 pt-1">
            <h4 class="text-center text-danger">Primer Trimestre</h4>
            </a>
        </div>
    </div>
    <h5 class="card-header text-center">
        Año de escolaridad: <?=$nivel->des_gra?> | <?=$nivel->des_niv?><br />
    </h5>
    <div class="row pt-4 mt-4">
        <?php 
        foreach ($campos as $campo) {?>
        <div class="col-12 col-sm-12 col-md-3 col-ld-3 text-center">
            <div class="mimgc">

            <?php
            if($nivel->cod_niv==5){
            ?>
                <a href="<?php echo base_url().'contenido/contenidocampo/'.$nivel->cod_gra.'/'.$campo->cod_cam?>">
                <!--a href="<php echo base_url().'assets/uploads/files/cont/pri2/'.$campo->arch_concam; ?>" target="_blank"-->
                <img src="<?php echo base_url().'assets/img/campos/'.$campo->img_cam.$niv.'.png'; ?>" class="<?=$fad?>">
                </a>
            <?php
                }else{
                    ?>
                <a href="<?php echo base_url().'contenido/areas/'.$curso.'/'.$campo->cod_cam; ?>">
                <img src="<?php echo base_url().'assets/img/campos/'.$campo->img_cam.$niv.'.png'; ?>" class="<?=$fad?>">
                </a>
            <?php
                }
                ?>
            </div>
        </div>
        <?php
        }
        ?>
    </div><!--ROW-->
</div>
</div>



