<div class="container-fluid contini">
    <div class=" container d-flex justify-content-center py-2 my-2">
        <ul class="pagination shadow-lg">
            <li class="page-item "><a class="page-link" href="<?php echo base_url()?>"><i class="fa fa-home "></i> Inicio </a></li>
            <li class="page-item  active"><a class="page-link " href="<?php echo base_url().'eduvit/regular'?>">Educación Regular &nbsp; </a></li>
        </ul>
    </div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-ld-12 mt-4 pt-4 text-center">
                <img src="<?php echo base_url().'/assets/img/ini/inicial.png';?>" class="img-fluid mt-4 pt-4">
        </div>
    </div>
    <div class="row align-items-end">
        <div class="col-sm-12 col-md-2 col-ld-2 mt-4 pt-4 text-center">
        </div>
        <div class="col-sm-12 col-md-4 col-ld-3 mt-4 pt-3 text-center">
            <a href="<?php echo base_url().'contenido/areas/9';?>">
            <div class="mimg"> <img src="<?php echo base_url().'/assets/img/ini/prim.png';?>" class="fader"></div>
            </a>
        </div>
        <div class="col-sm-12 col-md-2 col-ld-2 mt-4 pt-4 text-center">
        </div>
        <div class="col-sm-12 col-md-4 col-ld-3 mt-4 pt-3 text-center">
            <a href="<?php echo base_url().'contenido/areas/10';?>">
            <div class="mimg"> <img src="<?php echo base_url().'/assets/img/ini/seg.png';?>" class="fader"></div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-ld-6 mt-4 pt-4 text-center">
        </div>
    </div>
    
    <div class="row" id="videos">
        <div class="col-sm-12 col-md-8 col-ld-8">
            <div class="card" id="repro">
                <h5 class="card-header">Biblioteca</h5>
                <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video src="<?php echo base_url().'/assets/img/video/ini1.mp4';?>" controls></video>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-ld-4">
            <div class="card" id="video_sel">
                <h5 class="card-header">Lista de Videos de Apoyo</h5>
                <div class="card-body lividini">
                <?php
                    foreach ($videos as $video) {
                    ?>
                        <div class="row py-1">
                            <div class="col-sm-12 col-md-6 col-ld-6">
                                <a href="#videos" id="video-<?=$video->cod_vid?>" class="prueba">
                                    <img src="<?php echo base_url().'assets/img/'.$video->img_video?>" class="img-fluid rounded">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 col-ld-6">
                            <div class="text-center">Video: <?=$video->tit_video;?></div> <br>
                                <?=$video->txt_video;?> <br>
                                <!--Reproducciones: <=$video->rep_video;?> <br-->
                                Idioma: <?=$video->lng_video;?> <br>
                            </div>
                        </div>
                        <hr>
                    <?php    
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>



    <div class="row mt-2 pt-2"> 
        <div class="col-sm-12 col-md-3 col-ld-3 text-center">
            <a href="<?php echo base_url().'assets/img/recursos/progini.pdf';?>" target="_blank">
            <img src="<?php echo base_url().'/assets/img/recursos/progini.png';?>" class="img-fluid boton-sec mt-1 pt-1">
            </a>
        </div>
        <div class="col-sm-12 col-md-9 col-ld-9 text-center">
            <div class="card-block">
                <h5 class="card-title">Programas de estudio dosificados</h5>
                <p class="card-text text-justify">Los Programas de estudio de Educación Inicial en Familia Comunitaria con contenidos dosificados, 
                excepcionalmente está dirigido en una primera instancia a fortalecer y desarrollar habilidades, capacidades y potencialidades que las y los 
                estudiantes no alcanzaron en la gestión 2020, debido a la abrupta clausura del año escolar. A partir del segundo trimestre de la presente gestión 
                se procederá a la normalización de la gestión educativa.
                </p>
            </div>
        </div>
    </div>

    <div class="row mt-2 pt-2"> 
        <div class="col-sm-12 col-md-3 col-ld-3 text-center">
            <a href="<?php echo '#'/* echo base_url().'contenido/nivel/5';*/?>">
            <img src="<?php echo base_url().'/assets/img/recursos/tv.png';?>" class="img-fluid boton-sec mt-1 pt-1">
            </a>
        </div>
        <div class="col-sm-12 col-md-9 col-ld-9 text-center">
            <div class="card-block">
                <h5 class="card-title">Transmisiones Televisivas</h5>
                <p class="card-text text-justify">Las transmisiones televisivas tienen la finalidad de apoyar los contenidos curriculares dosificados 
                        que se encuentran en los textos educativos de cada año de escolaridad.  <br />
                    Horario de clases "EDUCA BOLIVIA" BTV: .<br />
                    Mañana: 09:00 a 10:00 Inicial y Primaria<br />
                    Mañana: 11:30 a 12:00 Primaria<br />
                    Tarde: 15:00 a 16:00 Secundaria<br />
                    Tarde: 18:00 a 18:30 Secundaria<br />
                </p>
            </div>
        </div>
    </div>
    <div class="row mt-2 pt-2"> 
        <div class="col-sm-12 col-md-3 col-ld-3 text-center">
            <a href="<?php echo '#'/* echo base_url().'contenido/nivel/5';*/?>">
            <img src="<?php echo base_url().'/assets/img/recursos/radio.png';?>" class="img-fluid boton-sec mt-1 pt-1">
            </a>
        </div>
        <div class="col-sm-12 col-md-9 col-ld-9 text-center">
            <div class="card-block">
                <h5 class="card-title">Transmisiones Radiales</h5>
                <p class="card-text text-justify">Las transmisiones radiales estarán disponibles en diferentes horarios y frecuencias. 
                Cada programa responde al currículo dosificado y al cuaderno de fortalecimiento del proceso educativo.<br />
                    Si te perdiste algunos de los temas puedes encontrarlos en tu año de escolaridad y el área de conocimiento correspondiente. 
                    Te pedimos que puedas visitar tu año de escolaridad y estés atento a los  horarios de difusión en las siguientes cadenas radiales, Patria Nueva y SNRPO.<br />
                    Mañana: 08:00 a 09:30 Inicial y Primaria<br />
                    Tarde: 13:30 a 15:00 Secundaria<br />

                </p>
            </div>
        </div>
    </div>
    <div class="row mt-2 pt-2"> 
        <div class="col-sm-12 col-md-3 col-ld-3 text-center">
            <a href="<?php echo '#'/* echo base_url().'contenido/nivel/5';*/?>">
            <img src="<?php echo base_url().'/assets/img/recursos/sat.png';?>" class="img-fluid boton-sec mt-1 pt-1">
            </a>
        </div>
        <div class="col-sm-12 col-md-9 col-ld-9 text-center">
            <div class="card-block">
                <h5 class="card-title">Transmisiones Satelitales</h5>
                <p class="card-text text-justify">El Ministerio de Educación en coordinación con la Agencia Bolivia Espacial (ABE), ponen al servicio de 
                    la comunidad educativa las transmisiones por medio de radio y televisión satelital, para tener una cobertura en todo el territorio del Estado Plurinacional de Bolivia. 
                </p>
            </div>
        </div>
        
    </div>

    

</div>
</div>



