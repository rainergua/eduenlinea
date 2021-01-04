<div class="container-fluid trans contenido">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'eduvit/'.$nivel->link_sis?>"><?=$nivel->desc_sis?></a></li>
    <li class="breadcrumb-item active" aria-current="page">Años de escolaridad</li>
  </ol>
</nav>
<div class="container contenido">

    <div class="row pt-4">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <h4>Subsistema de <?=$nivel->desc_sis?></h4>
            <h5>Nivel <?=$nivel->des_niv?></h5>
            <h5>Años de Escolaridad</h5>
        </div>
    </div>
    <div class="row row-height align-items-center">

        <div class="col-12 col-sm-12 col-md-1 co-ld-1 text-center">
            
        </div>
        
        <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center">
            <a href="<?php echo base_url().'contenido/areas/'.$grados[0]->cod_gra; ?>">
                <img src="<?php echo base_url().'assets/uploads/files/img/'.$grados[0]->img_gra; ?>" alt=""  class="boton-efect">    
            </a>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-ld-2 text-center">
            
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center">
            <a href="<?php echo base_url().'contenido/areas/'.$grados[1]->cod_gra; ?>">
                <img src="<?php echo base_url().'assets/uploads/files/img/'.$grados[1]->img_gra; ?>" alt=""  class="boton-efect">    
            </a>
        </div>
        <div class="col-12 col-sm-12 col-md-1 col-ld-1 text-center">
            
        </div>
    </div>

    <div class="row pb-4">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <p>
            <?=$nivel->txt_niv?>
            </p>
        </div>
    </div>
</div>
</div>



