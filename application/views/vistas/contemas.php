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
            <h5 class="font-italic">Unidad Didáctica: <?=$nivel->tit_tema?></h5>
        </div>
    </div>
    <div class="container mt-4 pt-2">
    <div class="row pb-4">
        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
            <?=$nivel->con_tema?>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
            <!----------AQUI EMPIEZA EL ACORDEON-->
            <!--img src="<php echo base_url().'assets/img/clic.gif'?>" alt="" class="aqui"-->
         <div id="accordion">
         <?php
            foreach ($tipo as $tip) {

         ?>
                <div class="card">
                    <div class="card-header acordion-header" id="heading<?=$tip->cod_tipo?>">
                    <h5 class="mb-0">
                        <button class="btn btn-link acordion-link" data-toggle="collapse" data-target="#collapse<?=$tip->cod_tipo?>" aria-expanded="true" aria-controls="collapse<?=$tip->cod_tipo?>">
                        <span class="fa-stack fa-sm">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span> 
                        
                        
                        <?=$tip->tipo_cont?>
                        </button>
                    </h5>
                    </div>

                    <div id="collapse<?=$tip->cod_tipo?>" class="collapse" aria-labelledby="heading<?=$tip->cod_tipo?>" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row" id="row">
                        <?php foreach ($archivos as $arch) {
                            if($arch->cod_tipo==$tip->cod_tipo){
                         ?>
                            <div class="col-12 col-sm-12 col-md-4 col-ld-4">
                                <a href="" data-toggle="modal" data-target="#exampleModalCenter" id="<?=$arch->arch_con?>" class="nano">
                                <img src="<?php echo base_url().'assets/uploads/files/img/'.$arch->img_con; ?>" class="fav-icon" alt=""></a>
                                <div class="caption text-center"><?=$arch->des_con?></div>
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
            <!----------AQUI TERMINA EL ACORDEON-->
        </div>
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

