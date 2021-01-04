<div class="container-fluid trans contenido">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'eduvit/'.$nivel->link_sis?>"><?=$nivel->desc_sis?></a></li>
    <li class="breadcrumb-item active" aria-current="page">Áreas</li>
  </ol>
</nav>
<div class="container contenido">
    <div class="row pt-4">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <h4>Subsistema de <?=$nivel->desc_sis?></h4>
            <h5><?=str_replace('<br>', ' ', $nivel->des_niv)?></h5>
            <h5>Áreas</h5>
        </div>
    </div>
    <div class="row row-height align-items-center">
        <?php
        foreach ($grados as $gra) {
        ?>
        <!--div class="col-6 col-sm-6 col-md-2 col-ld-2 text-center">
            <a href="<php echo base_url().'contenido/areas/'.$gra->cod_gra; ?>">
                <img src="<php echo base_url().'assets/uploads/files/img/'.$gra->img_gra; ?>" alt=""  class="boton-sec">    
            </a>
        </div-->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-2">
                <!-- colored -->
                <div class="ih-item square colored effect13 left_to_right">
                    <a href="<?php echo base_url().'conales/areas/'.$gra->cod_gra; ?>">
                    <div class="img"><img src="<?php echo base_url().'assets/uploads/files/img/'.$gra->img_gra; ?>" alt="img"></div>
                    <div class="info">
                        <h3><?=$gra->des_gra?></h3>
                        <!--?=$arch->txt_mat?-->
                    </div>
                    </a>
                </div>
                <!-- end colored -->
        </div>
        <?php
        }
        ?>
        
    </div>
    <!--div class="row pb-4">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <=$nivel->txt_niv?>
            <div class="col-6 col-sm-6 col-md-2 col-ld-2 text-center mimg">
            <a href="#">
                <img src="<php echo base_url().'assets/img/prueba.png' ?>" alt=""  class="fader ">    
            </a>
        </div>
        </div>
    </div-->
</div>
</div>



