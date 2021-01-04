<div class="container-fluid trans contenido">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'eduvit/'.$nivel->link_sis?>"><?=$nivel->desc_sis?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url().'contenido/nivel/'.$nivel->cod_niv?>">Años de escolaridad</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url().'contenido/areas/'.$nivel->cod_gra?>">Areas de conocimiento</a></li>
    <li class="breadcrumb-item active" aria-current="page">Material de apoyo</li>
  </ol>
</nav>
<div class="container">
    <div class="row pt-4">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <h4>Subsistema de <?=$nivel->desc_sis?></h4>
            <h5><?=$nivel->des_niv?> - <?=$nivel->des_gra?></h5>
            <h5 class="font-italic">Área de Conocimiento: <?=$nivel->des_area?></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12  text-titmin car-header2">
        <?=$nivel->txt_area?>
        </div>
    </div>
    <div class="container mt-2 pt-2">
    <h4 class="font-italic text-center">MATERIAL DE APOYO GENERAL</h4>
    <div class="row row-height align-items-center">
        <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center">
            <div class="card cont-tarj">
                <div class="ih-item circle effect1">
                    <a href="<?php echo base_url().'contenido/dispcontcurr/'.$nivel->cod_gra.'/'.$nivel->cod_area; ?>">
                    <div class="spinner"></div>
                    <div class="img"><img src="<?php echo base_url().'assets/img/nuevo/curric.png'; ?>" alt="img"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-titmin">Currículo ajustado</h5>
                    
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center">
            <div class="card cont-tarj">
                <div class="ih-item circle effect1">
                    <a href="<?php echo base_url().'contenido/dispcontarea/'.$nivel->cod_gra.'/'.$nivel->cod_area; ?>">
                    <div class="spinner"></div>
                    <div class="img"><img src="<?php echo base_url().'assets/img/nuevo/libroac.png'; ?>" alt="img"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-titmin">Textos educativos</h5>
                    
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center">
            <div class="card cont-tarj">
                <div class="ih-item circle effect1">
                <?php 
                    if($enlace){
                        if(count($enlace)==1){
                ?>
                    <a href="<?php echo base_url().'assets/sites/'.$enlace[0]->lnk_mat; ?>" target="_blank">
                <?php }else{
                    ?>
                    <a href="<?php echo base_url().'contenido/dispcontrec/'.$nivel->cod_gra.'/'.$nivel->cod_area; ?>">
                    <?php
                }
                    }else{
                ?>
                    <a href="#">
                    <?php 
                    }
                    ?>
                    <!--a href="<php echo base_url().'contenido/dispcontareavideo/'.$nivel->cod_gra.'/'.$nivel->cod_area; ?>"-->
                    <div class="spinner"></div>
                    <div class="img"><img src="<?php echo base_url().'assets/img/nuevo/receduc.png'; ?>" alt="img"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-titmin">Recursos interactivos</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-height align-items-center">
    <div class="col-12 col-sm-12 col-md-2 col-ld-2 text-center"></div>
        <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center">
            <div class="card cont-tarj">
                <div class="ih-item circle effect1">
                    <!--a href="<php echo base_url().'contenido/dispcontareamas/'.$nivel->cod_gra.'/'.$nivel->cod_area; ?>"-->
                    <a href="#">
                    <div class="spinner"></div>
                    <div class="img"><img src="<?php echo base_url().'assets/img/nuevo/fichas.png'; ?>" alt="img"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-titmin">Fichas educativas</h5>
                    <!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p-->
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center">
            <div class="card cont-tarj">
                <div class="ih-item circle effect1">
                    <a href="<?php echo base_url().'contenido/dispcontareaotro/'.$nivel->cod_gra.'/'.$nivel->cod_area; ?>">
                    <div class="spinner"></div>
                    <div class="img"><img src="<?php echo base_url().'assets/img/nuevo/otro.png'; ?>" alt="img"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-titmin">Otros aportes pedagógicos</h5>
                    <!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p-->
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-ld-2 text-center"></div>
    </div>
    </div>
    <?= (count($contenidos)==0) ? '<h2 class="text-center titulo mt-3 pt-3"></h2>' : ''?>
    <div class="row pb-4">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12">
            <!----------AQUI EMPIEZA EL ACORDEON-->
            <!--div id="accordion">
                <php 
                $i = $j = $k = 0;
                foreach ($contenidos as $contenido) {
                    if(count($contenidos)>$k+1){
                        $k++;}
                    if($i==0){
                      echo '<div class="card-header car-header1">'.$periodos[$j]->des_per.'</div> ';
                      $i++;
                    }
                    if($periodos[$j]->cod_per!=$contenidos[$k]->cod_per){
                        $j++;
                        $i=0;
                    }
                ?>
                <div class="card">
                    <div class="card-header acordion-header" id="heading<=$contenido->cod_tema?>">
                    <h5 class="mb-0">
                        <button class="btn btn-link acordion-link collapsed" data-toggle="collapse" data-target="#collapse<=$contenido->cod_tema?>" aria-expanded="false" aria-controls="collapse<=$contenido->cod_tema?>">
                        <span class="fa-stack fa-sm">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span>
                        <=$contenido->tit_tema?>
                        </button>
                        <a href="<php echo base_url().'contenido/vermaterial/'.$nivel->cod_area.'/'.$contenido->cod_tema; ?>" class="btn btn-danger btn-sm text-center">Ver material</a>
                    </h5>
                    </div>
                    <div id="collapse<=$contenido->cod_tema?>" class="collapse" aria-labelledby="heading<=$contenido->cod_tema?>" data-parent="#accordion">
                    <div class="card-body">
                        <=$contenido->con_tema?>
                    </div>
                    </div>
                </div>
                <php
                }
                ?>
            </div-->   
            <!----------AQUI TERMINA EL ACORDEON-->
        </div>
    </div>
</div>
</div>



