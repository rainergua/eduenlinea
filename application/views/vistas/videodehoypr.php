<div class="container-fluid contpri">
<div class="container-fluid pt-1 mt-1">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-ld-8">
            <div class="card" id="repro">
                <h5 class="card-header">Biblioteca</h5>
                <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video src="<?php echo base_url().'/assets/img/video/primer.mp4';?>" controls></video>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-ld-4">
            <div class="card" id="video_sel">
            <h5 class="card-header">Lista de Videos</h5>
            <div class="card-body livid">
            <?php
                foreach ($videos as $video) {
                 ?>
                    <div class="row py-1">
                        <div class="col-sm-12 col-md-6 col-ld-6">
                            <a href="#" id="video-<?=$video->cod_codcam?>" class="hoypr">
                                <img src="<?php echo base_url().'assets/img/icnvideo.png'?>" class="img-fluid rounded">
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-ld-6">
                           <div class="text-center">Video: <?=$video->des_concam;?></div> <br>
                            <?=$video->des_concam;?> <br>
                            <!--Reproducciones: <=$video->rep_video;?> <br>
                            Idioma: <?=$video->lng_video;?> <br-->
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



