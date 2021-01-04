<?php
// Librería que trata la fecha en español
    $CI =& get_instance();
    $CI->load->library('user_agent');
?>
<div class="container-fluid trans contenido">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'eduvit/'.$nivel->link_sis?>"><?=$nivel->desc_sis?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url().'contenido/nivel/'.$nivel->cod_niv?>">Años de escolaridad</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url().'contenido/areas/'.$nivel->cod_gra?>">Areas de conocimiento</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url().'contenido/contarea/'.$nivel->cod_gra.'/'.$nivel->cod_area?>">Material de apoyo</a></li>
    <li class="breadcrumb-item active" aria-current="page">Temas</li>
  </ol>
</nav>
<div class="container contenido">
    <div class="row pt-4">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <h4>Subsistema de <?=$nivel->desc_sis?></h4>
            <h5><?=$nivel->des_niv?> - <?=$nivel->des_gra?></h5>
            <h5 class="font-italic">Área de Conocimiento: <?=$nivel->des_area?></h5>
            <h5 class="font-italic">Otros aportes pedagógicos</h5>
        </div>
    </div>
    <div id="accordion">
    <div class="row pb-4 mt-4 mb-4" id="row">
            <?php
            foreach ($archivos as $arch) {
            ?>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <!-- colored -->
                <div class="ih-item square colored effect13 left_to_right">
                    <a href="<?php echo base_url().'assets/uploads/files/cont/'.$arch->arch_mat?>" target="_blank">
                    <div class="img"><img src="<?php echo base_url().'assets/uploads/files/img/'.$arch->img_mat ?>" alt="img"></div>
                    <div class="info">
                        <h3><?=$arch->des_mat?></h3>
                        <?=$arch->txt_mat?>
                    </div>
                    </a>
                </div>
                <!-- end colored -->
            </div>
            <?php
            }
            ?>
    </div>
    </div>
</div>
</div>