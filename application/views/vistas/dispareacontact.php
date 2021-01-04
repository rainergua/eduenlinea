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
            <h5 class="font-italic">Libros de Actividades</h5>
        </div>
    </div>
    <div id="accordion">
    <div class="row mb-2 pb-2">
            <?php
            foreach ($archivos as $arch) {
            ?>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-4 pt-2">
                <!-- colored -->
                <div class="ih-item square colored effect13 left_to_right">
                    <!--a href="<php echo base_url().'assets/uploads/files/cont/'.$arch->archivo?>" target="_blank"-->
                    <a href="" data-toggle="modal" data-target="#exampleModalCenter" id="<?=$arch->archivo?>" class="nano">
                    <div class="img"><img src="<?php echo base_url().'assets/uploads/files/img/'.$arch->imagen?>" alt=""></div>
                    <div class="info">
                        <h3><?=$arch->titulo?></h3>
                        <?=$arch->texto?>
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

<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Documento de apoyo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="objeto">
                
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                
            </div>
        </div>
    </div>
</div> <!--Endo Modal-->



