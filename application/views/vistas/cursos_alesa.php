<div class="container-fluid trans contenido">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'eduvit/'.$nivel->link_sis?>"><?=$nivel->desc_sis?></a></li>
    <li class="breadcrumb-item active" aria-current="page">Áreas</li>
  </ol>
</nav>
<div class="container contenido">
    <div class="row pt-3">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <h4>Subsistema de <?=$nivel->desc_sis?></h4>
            <h5><?=str_replace('<br>', ' ', $nivel->des_niv)?></h5>
            <h5>Grados</h5>
        </div>
    </div>
    <?php 
        $i=1;
        foreach ($grados as $gra) {
            if($i==1 || $i==7){
        ?>
           
            <div class="card m-4 ">
                <div class="card-header bg-success text-white"><h5>
                    <?=($i==1) ? ' ' : ' '?>
                    </h5></div>
                <div class="card-body">
                 <div class="row align-items-center pl-4 ml-4">
            <?php
            }
            ?>
            <div class="col-6 col-sm-6 col-md-2 col-ld-2 text-center  pt-4 mt-4">
                <div class="mimg">
                    <a href="<?php echo base_url().'conales/areas/'.$gra->cod_gra; ?>" data-toggle="tooltip" data-placement="top" title="<?=$gra->des_gra?>" id="curso">
                        <img src="<?php echo base_url().'assets/uploads/files/img/'.$gra->img_gra ?>" class="fader ">
                    </a>
                </div>
            </div>
        <?php
            if($i==6 || $i==12){
                ?>
                </div>
                </div>
                </div>
        <?php
            }
            $i++;
        }
        ?>
    </div>
</div>
</div>



