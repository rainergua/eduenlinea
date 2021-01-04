<div class="container-fluid trans contenido">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'eduvit/'.$nivel->link_sis?>"><?=$nivel->desc_sis?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url().'contenido/nivel/'.$nivel->cod_niv?>">Años de escolaridad</a></li>
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
    </div>
    <div class="row row-height align-items-center">
        <?php foreach ($areas as $area) {?>
        <div class="col-12 col-sm-12 col-md-3 col-ld-3 text-center">
            <div class="row">
            <div class="col">
            <div class="ih-item circle effect1">
                <a href="<?php echo base_url().'contenido/contarea/'.$area->cod_gra.'/'.$area->cod_area; ?>">
                <div class="spinner"></div>
                <div class="img"><img src="<?php echo base_url().'assets/uploads/files/img/'.$area->img_area; ?>" alt="img"></div>
                <div class="info">
                <div class="info-back">
                    <h3><?=strtoupper($area->des_area)?></h3>
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
        }?>
    </div><!--ROW-->
    <div class="row pb-4">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <?=$nivel->txt_gra?>
        </div>
    </div>
</div>
</div>



