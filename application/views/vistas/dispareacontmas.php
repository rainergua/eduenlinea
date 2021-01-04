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
            <h5 class="font-italic">Recursos varios</h5>
        </div>
    </div>
    <div class="row pt-4 pb-4 mt-4 mb-4">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!-- colored -->
                <div class="ih-item square colored effect13 left_to_right"><a href="#">
                    <div class="img"><img src="<?php echo base_url().'assets/uploads/files/img/tapa/lenchi.png' ?>" alt="img"></div>
                    <div class="info">
                        <h3>Libro de texto para Sexto</h3>
                        <p>Es un libro de texto proveído para el avance de los estudiantes</p>
                    </div>
                    </a>
                </div>
                    <!-- end colored -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!-- colored -->
                <div class="ih-item square colored effect13 left_to_right"><a href="#">
                    <div class="img"><img src="<?php echo base_url().'assets/uploads/files/img/tapa/lensal.png' ?>" alt="img"></div>
                    <div class="info">
                        <h3>Libro de texto para apoyo</h3>
                        <p>Es un libro de texto proveído como apoyo a los estudiantes</p>
                    </div></a>
                </div>
                    <!-- end colored -->
            </div>
    </div>
</div>
</div>



