<div class="container-fluid contenido">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url().'/assets/img/slide/0.jpg';?>" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url().'/assets/img/slide/1.jpg';?>" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url().'/assets/img/slide/2.jpg';?>" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url().'/assets/img/slide/3.jpg';?>" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




    <div class="container-fluid  mt-4 pt-4">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-ld-12  text-center">
            <h2 class="text-center">2021 AÑO POR LA RECUPERACIÓN DEL DERECHO A LA EDUCACIÓN</h2>
            </div>
        </div>

        <div class="row mt-4 pt-4">
            <div class="col-sm-12 col-md-4 col-ld-4 text-justify">

                <div class="card">
                    <!--a href="<php echo base_url().'eduvit/regular';?>"></a-->
                    <img src="<?php echo base_url().'/assets/img/btnreg.png';?>" class="card-img-top boton-sec" alt="Primaria">
                    <div class="card-body">
                        <h5 class="card-title">Regular</h5>
                        <p class="card-text">Educación Inicial en Familia Comunitaria, Educación Primaria Comunitaria Vocacional y Educación Secundaria Comunitaria Productiva. 
                            Tu biblioteca en linea, para que puedas desfrutar del contenido elaborado para tí.</p>
                            <div class="row">
                            <div class="col-6"><a href="<?php echo base_url().'eduvit/regular';?>" class="btn btn-danger btn-block">Biblioteca</a></div>
                            <div class="col-6"><a href="http://regular.minedu.gob.bo" class="btn btn-info btn-block" target="_blank">Aula Regular</a></div>
                            </div>
                    </div>
                </div>

            </div>   
            <div class="col-sm-12 col-md-4 col-ld-4 text-justify">
                
                <div class="card">
                    <!--a href="<php echo base_url().'eduvit/alternativa';?>"></a-->
                    <img src="<?php echo base_url().'/assets/img/btnalt.png';?>" class="card-img-top boton-sec" alt="Primaria">
                    
                    <div class="card-body">
                        <h5 class="card-title">Alternativa y Especial</h5>
                        <p class="card-text">La Educación Alternativa y Especial es intracultural, intercultural y plurilingüe. Comprende ambitos de Educación Alternativa y Educación Especial.</p>
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-6"><a href="<?php echo base_url().'eduvit/alternativa';?>" class="btn btn-primary btn-block">Biblioteca</a></div>
                            <div class="col-3"></div>
                        </div>
                        <div class="row pt-1 mt-1">
                            <div class="col-6"><a href="http://alternativa.minedu.gob.bo" class="btn btn-warning text-white btn-block" target="_blank">Aula Alternativa</a></div>
                            <div class="col-6"><a href="http://especial.minedu.gob.bo" class="btn btn-secondary text-white btn-block" target="_blank">Aula Especial</a></div>
                        </div>
                        
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-4 col-ld-4 text-justify">
                
                <div class="card">
                    <!--a href="<php echo base_url().'eduvit/superior';?>"></a-->
                    <img src="<?php echo base_url().'/assets/img/btnsup.png';?>" class="card-img-top boton-sec" alt="Primaria">
                    
                    <div class="card-body">
                        <h5 class="card-title">Superior</h5>
                        <p class="card-text">Formación de Maestros, Institutos Técnico Tecnológicos, Universidades Indígenas, Especiales y Privadas; 
                        forman profesionales de alta competitividad, con compromiso social y conciencia crítica al servicio del pueblo, para el desarrollo del país. </p>
                        <div class="row">
                            <div class="col-6"><a href="<?php echo base_url().'eduvit/superior';?>" class="btn btn-success btn-block">Biblioteca</a></div>
                            <div class="col-6"><a href="#" class="btn btn-info btn-block">Aula Superior</a></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="row my-4 py-4">
            <div class="col-sm-12 col-md-3 col-ld-3 text-center">
                <div class="row my-1 py-1">
                    <div class="col-sm-12 col-md-4 col-ld-4 text-center">
                        <img src="<?php echo base_url().'/assets/img/recursos/video.png';?>" class="img-fluid">
                    </div>
                    <div class="col-sm-12 col-md-8 col-ld-8 text-center">
                        <div class="card-block">
                            <h6 class="card-title">Videos Guía de uso educa.minedu.gob.bo</h6>
                            <a href="<?php echo base_url().'tutoriales';?>" class="btn btn-primary">Ver Videos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-ld-3 text-center">
                <div class="row my-1 py-1">
                    <div class="col-sm-12 col-md-4 col-ld-4 text-center">
                        <img src="<?php echo base_url().'/assets/img/recursos/001-reg.png';?>" class="img-fluid">
                    </div>
                    <div class="col-sm-12 col-md-8 col-ld-8 text-center">
                        <div class="card-block">
                            <h6 class="card-title">Resolución Ministerial 001/2021 - Educación Regular</h6>
                            <a href="https://www.minedu.gob.bo/index.php?option=com_content&view=article&id=4770&catid=90&Itemid=933" class="btn btn-primary" target="_blank">Ver Resolución</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-ld-3 text-center">
                <div class="row my-1 py-1">
                    <div class="col-sm-12 col-md-4 col-ld-4 text-center">
                        <img src="<?php echo base_url().'/assets/img/recursos/001-esp.jpg';?>" class="img-fluid">
                    </div>
                    <div class="col-sm-12 col-md-8 col-ld-8 text-center">
                        <div class="card-block">
                            <h6 class="card-title">Resolución Ministerial 001/2021 - Educación Alterativa y Especial</h6>
                            <a href="https://www.minedu.gob.bo/index.php?option=com_content&view=article&id=4782&catid=90&Itemid=933" class="btn btn-primary" target="_blank">Ver Resolución</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-ld-3 text-center">
                <div class="row my-1 py-1">
                    <div class="col-sm-12 col-md-4 col-ld-4 text-center">
                        <img src="<?php echo base_url().'/assets/img/recursos/001-sup.jpg';?>" class="img-fluid">
                    </div>
                    <div class="col-sm-12 col-md-8 col-ld-8 text-center">
                        <div class="card-block">
                            <h6 class="card-title">Resolución Ministerial 001/2021 - Educación Superior y formación Profesional</h6>
                            <a href="https://www.minedu.gob.bo/index.php?option=com_content&view=article&id=4777&catid=90&Itemid=933" class="btn btn-primary" target="_blank">Ver Resolución</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


