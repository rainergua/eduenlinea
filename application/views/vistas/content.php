<?php 
    if($nivel->cod_niv==4){
        $cla = "contini";
        $fad = "img-fluid boton-sec";
        $niv = "ini";
        $bread = 'Inicial';
    }elseif($nivel->cod_niv==5){
        $cla = "contpri";
        $fad = "fader";
        $niv = "pri";
        $bread = 'Primaria';
    }elseif($nivel->cod_niv==6){
        $cla = "contpri";
        $fad = "fader";
        $niv = "sec";
        $bread = 'Secundaria';
    }
?>
<div class="container-fluid contenido">
    <div class=" container d-flex justify-content-center py-2 my-2">
        <ul class="pagination shadow-lg">
            <li class="page-item"><a class="page-link" href="<?php echo base_url()?>"><i class="fa fa-home "></i> Inicio </a></li>
            <li class="page-item"><a class="page-link " href="<?php echo base_url().'eduvit/regular'?>">Educación Regular</a></li>
            <li class="page-item"><a class="page-link" href="<?php echo base_url().'contenido/nivel/'.$nivel->cod_niv?>"><?=$bread?></a></li>
            <li class="page-item active"><a class="page-link" href="<?php echo base_url().'contenido/campos/'.$grado?>">Campos</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-ld-12  text-center">
                <img src="<?php echo base_url().'/assets/img/txtfnd.png';?>" class="img-fluid mt-4 pt-4">
            </div>
        </div>
        <div class="row mt-2 pt-2">
            <div class="col-sm-12 col-md-12 col-ld-12 text-center">
                <div class="card">
                    <h5 class="card-header">
                        Contenidos para el <?=$nivel->des_gra?> año de escolaridad del <?=$nivel->des_niv?><br />
                        Campo: <?=$nivel->desc_cam?>; Área: <?=$nivel->des_area?>
                    </h5>
                    <div class="card-body">


                        <div id="accordion">
         <?php
            foreach ($tipo as $tip) {
                if($tip->cod_tema == 3)
                    $icon = 'fa-file-video';
                else
                    $icon = 'fa-file-pdf';
         ?>
                <div class="card">
                    <div class="card-header acordion-header" id="heading<?=$tip->cod_tema?>">
                    <h5 class="mb-0">
                        <button class="btn btn-link acordion-link" data-toggle="collapse" data-target="#collapse<?=$tip->cod_tema?>" aria-expanded="true" aria-controls="collapse<?=$tip->cod_tema?>">
                        <span class="fa-stack fa-sm">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span> 
                        <?=$tip->tit_tema?>
                        </button>
                    </h5>
                    </div>

                    <div id="collapse<?=$tip->cod_tema?>" class="collapse" aria-labelledby="heading<?=$tip->cod_tema?>" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row" id="row">
                        <?php foreach ($material as $mat) {
                            if($mat->cod_tema==$tip->cod_tema){
                         ?>
                            <div class="col-12 col-sm-12 col-md-4 col-ld-4">
                                <a href="<?php echo base_url().'/assets/uploads/files/cont/'.$niv.'/'.$mat->arch_con;?>" target="_blank">
                                <div class="caption text-center"><i class="fas <?=$icon?> px-1"></i><?=$mat->des_con?></div>
                            </a>
                            </div>
                        <?php }
                    }?>    
                        </div>
                    </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div> 



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


