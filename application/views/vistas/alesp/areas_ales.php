<div class="container-fluid trans contenido">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'eduvit/'.$nivel->link_sis?>"><?=$nivel->desc_sis?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url().'conales/nivel/'.$nivel->cod_niv?>">Años de escolaridad</a></li>
    <li class="breadcrumb-item active" aria-current="page">Areas de conocimiento</li>
  </ol>
</nav>
<div class="container contenido">
    <div class="row pt-4">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <h4>Subsistema de <?=$nivel->desc_sis?></h4>
            <h5><?=$nivel->des_niv?> - <?=$nivel->des_gra?></h5>

            <h5 class="font-italic">Áreas de Conocimiento</h5>
        </div>
    </div><?php
    if($areas){
        ?>
    <div class="row row-height align-items-center">
    
        <?php 
        
        foreach ($areas as $area) {?>
        <div class="col-12 col-sm-12 col-md-3 col-ld-3 text-center">
            <div class="row">
            <div class="col">
            <div class="ih-item circle effect1">
                <!--a href="<php echo base_url().'contenido/contarea/'.$area->cod_gra.'/'.$area->cod_area; ?>"-->
                <a href="#">
                <div class="spinner"></div>
                <div class="img"><img src="<?php echo base_url().'assets/uploads/files/img/'.$area->img_area; ?>" alt="img"></div>
                <div class="info">
                <div class="info-back">
                    <h3><?=$area->des_area?></h3>
                    <p></p>
                </div>
                </div>
                </a>
            </div>
            </div>
            </div>
            <div class="row pt-3">
                <div class="col text-center">
                    <p class="caption"><?=$area->des_area?></p>
                </div>
            </div>
        </div>
        <?php
        }
       ?>
    </div><!--ROW--><?php
}
?>
    <div class="card">
        <div class="card-header text-white bg-success">
            <h5>MÓDULOS</h5>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <?php
                $i=0;
                foreach ($matanio as $material) {
                    $i++
                    ?>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-ld-12">
                            <div class="card-header car-header<?=$i%2?>" >
                                <h5 class="mb-0">
                                    <a href="<?php echo base_url().'assets/uploads/files/cont/'.$material->arch_matanio; ?>" class="btn btn-link acordion-link" target="_blank">
                                    <span class="fa-stack fa-sm">
                                        <i class="fas fa-file-pdf fa-stack-2x"></i>
                                    </span> 
                                    <?=$material->des_matanio?>
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if($i==0){
                    echo 'Material cargado proximamente';
                }
                ?>
            </blockquote>
        </div>
    </div>
</div>
</div>



