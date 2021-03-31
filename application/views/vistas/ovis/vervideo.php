<div class="container-fluid contpri">
<div class="container-fluid pt-1 mt-1">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-ld-8">
            <div class="card" id="repro">
                <h5 class="card-header">Videos concurso día del mar</h5>
                <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video src="<?php echo base_url().'/assets/img/video/primer.mp4';?>" controls></video>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-ld-4">
            <div class="card" id="video_selc">
            <h5 class="card-header">Lista de Videos</h5>
            <div class="card-body livid">
            <?php
                foreach ($res as $video) {
                 ?>
                    <div class="row py-1">
                        <div class="col-sm-12 col-md-4 col-ld-4">
                            <a href="#" id="video-<?=$video->cod_diamar?>" class="prueba">
                                <img src="<?php echo base_url().'assets/img/icnvideo.png'?>" class="img-fluid rounded">
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-8 col-ld-8">
                           <div class="text-center">Título: <?=$video->titulo;?></div>
                            Autor: <?=$video->nombres.' '.$video->apellidos;?> <br>
                            Institución: <?=$video->ue;?> <br>
                            Lugar: <?=$video->municipio.' - '.$video->departamento;?> <br>
                        </div>
                    </div>
                    <hr>
            <?php    
                }
                ?>
            </div></div></div>    
        </div>
    </div>
</div>
</div>