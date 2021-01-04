<div class="container-fluid trans contenido">
<!--nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<php echo base_url().'eduvit/'.$nivel->link_sis?>"><=$nivel->desc_sis?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="<php echo base_url().'contenido/nivel/'.$nivel->cod_niv?>">Años de escolaridad</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="<php echo base_url().'contenido/areas/'.$nivel->cod_gra?>">Areas de conocimiento</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="<php echo base_url().'contenido/contarea/'.$nivel->cod_gra.'/'.$nivel->cod_area?>">Material de apoyo</a></li>
    <li class="breadcrumb-item active" aria-current="page">Temas</li>
  </ol>
</nav-->
<div class="container contenido">
    <div class="row pt-4">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <h4>Subsistema de Educación Superior - UNIVERSIDADES</h4>
            <h5>Departameno de <?=$depto->nom_dep?></h5>
            <h5 class="font-italic"><?=$uni->nom_uni?></h5>
            <h5 class="font-italic">Carrera: <?=$carrera->nom_car?></h5-->
        </div>
    </div>
    <div class="container mt-4 pt-2">
    <div class="row pb-4">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12">
            <!----------AQUI EMPIEZA EL ACORDEON-->
         <div id="accordion">
         <?php
            $i=0;
            foreach ($semestres as $sem) {
                $i++;

         ?>
                <div class="card">
                    <div class="card-header acordion-header" id="heading<?=$i?>">
                    <h5 class="mb-0">
                        <button class="btn btn-link acordion-link" data-toggle="collapse" data-target="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapse<?=$i?>">
                        <span class="fa-stack fa-sm">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span>
                        <?=$sem->per_mat?> 
                        </button>
                    </h5>
                    </div>

                    <div id="collapse<?=$i?>" class="collapse" aria-labelledby="heading<?=$i?>" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row" id="row">
                        <?php foreach ($materias as $mat) {
                            if($sem->per_mat==$mat->per_mat){
                         ?>
                            <div class="col-12 col-sm-12 col-md-6 col-ld-6">
                                <a href=""><?=$mat->des_mat?></a>
                            </div>
                            <?php
                            } 
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

<!--div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
</div--> <!--End Modal-->

