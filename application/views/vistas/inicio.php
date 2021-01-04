<div class="container-fluid trans contenido">
<div class="container">
    <div class="row mt-3">
        <!--div class="col-12 col-sm-12 col-md-1 col-ld-1"></div-->
        <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center">
            <a href="<?=base_url().'eduvit/regular' ?>" data-toggle="modal" data-target="#exampleModal">
            <div class="card redondo" style="width: 18rem;">
            <img src="<?php echo base_url().'assets/uploads/files/img/d9e4f-regular.png' ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">Educación Regular</h5>
            </div>
            </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center">
            <a href="<?=base_url().'eduvit/alternativa' ?>">
            <div class="card redondo" style="width: 18rem;">
            <img src="<?php echo base_url().'assets/uploads/files/img/5d6af-alternativa.png' ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">Educación Alternativa y Especial</h5>
            </div>
            </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center">
            <a href="<?=base_url().'eduvit/superior' ?>">
            <div class="card redondo" style="width: 18rem;">
            <img src="<?php echo base_url().'assets/uploads/files/img/315bb-superior.png'?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">Educación Superior</h5>
            </div>
            </div>
            </a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12">
            <p class="text-justify">
                El uso de Tecnologías de Información y Comunicación (TIC) nos ofrece una visión amplia de la realidad, programas educativos y una parte muy importante del trabajo anónimo del profesorado. <br />
                Uno de los ámbitos donde se ha producido mayor crecimiento del uso de TIC a nivel mundial es el referido a la educación. <br />
                En Bolivia, esto ha significado la promoción de un uso más intensivo de TIC en el ámbito educativo; algunos ejemplos son los programas "Una computadora por docente", "Una computadora por alumno". <br />
                El Ministerio de Educación presenta el portal educativo "Aula virtual para la educación en Bolivia" para que docentes y estudiantes
                 tengan la posibilidad de continuar con el proceso de "enseñanza y aprendizaje" en tiempos de emergencia sanitaria. 

            </p>    
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <?php
        $this->load->view('vistas/login_view');
    ?>
  </div>
</div>


