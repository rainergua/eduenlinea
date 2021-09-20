<script src="<?php echo base_url().'assets/js/valid/jquery.validate.min.js'; ?>"></script>
<div class="container-fluid trans">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-ld-12 py-2 my-2">
                <h5 class="card-header text-center">
                    REGISTRO DE ESTUDIANTES CON POTENCIALIDADES PRODUCTIVAS O HABILIDADES EXTRAORDINARIAS EN EL SEP
                </h5>
            </div>
        </div>
        <?php
            $att = array('id' => 'talento', 'class' =>'form-group', 'enctype' => 'multipart/form-data' );
            echo form_open(base_url().'conales/savetal', $att);
        ?>
    <div class="form-group">
        <label for="error" class="error"><?=$error?></label>
    </div>
    <hr>
    <div class="col-sm-12 col-md-12 col-ld-12 text-center bluebold">Datos del Estudiante</div>
    <hr>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <div class="form-group">
                    <label for="rude" class="form-label">(*) RUDE, RUDEES, RUDEAL:</label>
                    <input type="text" class="form-control col-8" id="rude" name="rude" aria-describedby="rude" placeholder="RUDE">
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="nombre" class="form-label">(*) Nombres y Apellidos del Estudiante:</label>
                <input type="text" class="form-control col-8" id="nombre" name="nombre" aria-describedby="nombre" placeholder="Nombre Completo">
            </div>
        </div>
    </div>
    <div class="form-row">
        
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="carnet" class="form-label">(*) Carnet de Identidad:</label>
                <input type="number" class="form-control col-8" id="carnet" name="carnet" aria-describedby="carnet" placeholder="Carnet de Identidad">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="fecnac" class="form-label">(*) Fecha de Nacimiento:</label>
                <input type="date" class="form-control col-8" id="fecnac" name="fecnac" aria-describedby="fecnac" placeholder="Fecha de NAcimiento">
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="fono" class="form-label">(*) Teléfono Celular:</label>
                <input type="number" class="form-control col-8" id="fono" name="fono" aria-describedby="fono" placeholder="Teléfono Celular">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="correo" class="form-label">(*) Correo Electrónico:</label>
                <input type="email" class="form-control col-8" id="correo" name="correo" aria-describedby="correo" placeholder="Correo Electrónico">
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <div class="form-group">
                    <label for="tutor" class="form-label">(*) Nombres y Apellidos del Padre, Madre o Tutor:</label>
                    <input type="text" class="form-control col-8" id="tutor" name="tutor" aria-describedby="tutor" placeholder="Nombre Padre, Madre o Tutor">
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="fonotut" class="form-label">(*) Teléfono Padre, Madre o Tutor:</label>
                <input type="number" class="form-control col-8" id="fonotut" name="fonotut" aria-describedby="fonotut" placeholder="Teléfono Padre, Madre o Tutor">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-ld-12 text-center bluebold">Datos de la Unidad Educativa o Institución</div>
    </div>
    <hr>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="depto"  class="form-label">Departamento:</label>
                <select name="depto" id="tut_exp"  class="form-control col-8">
                    <option value="">Departamento:</option>
                    <option value="La Paz">La Paz</option>
                    <option value="Oruro">Oruro</option>
                    <option value="Potosí">Potosí</option>
                    <option value="Cochabamba">Cochabamba</option>
                    <option value="Tarija">Tarija</option>
                    <option value="Chuquisaca">Chuquisaca</option>
                    <option value="Santa Cruz">Santa Cruz</option>
                    <option value="Beni">Beni</option>
                    <option value="Pando">Pando</option>
                </select>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="munic" class="form-label">(*) Municipio:</label>
                <input type="text" class="form-control col-8" id="munic" name="munic" aria-describedby="munic" placeholder="Municipio">
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="distrito" class="form-label">Distrito Educativo:</label>
                <input type="text" class="form-control col-8" id="distrito" name="distrito" aria-describedby="distrito" placeholder="Distrito">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <div class="form-group">
                    <label for="ue" class="form-label">(*) Unidad Educativa o Institución:</label>
                    <input type="ue" class="form-control col-8" id="ue" name="ue" aria-describedby="ue" placeholder="Unidad Educativa o Institución">
                </div>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="fonoue" class="form-label">(*) Teléfono:</label>
                <input type="text" class="form-control col-8" id="fonoue" name="fonoue" aria-describedby="fonoue" placeholder="Teléfono">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="dependencia" class="form-label">(*) Dependencia:</label>
                <select name="dependencia" id="dependencia" class="form-control col-8">
                    <option value="">Dependencia:</option>
                    <option value="F">Fiscal</option>
                    <option value="C">Convenio</option>
                    <option value="P">Particular</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="nivel" class="form-label">(*) Nivel de Escolaridad:</label>
                <select name="nivel" id="nivel"  class="form-control col-8">
                    <option value="">Nivel de Escolaridad:</option>
                    <option value="P">Primaria</option>
                    <option value="S">Secundaria</option>
                    <option value="O">Otro</option>
                </select>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="anio" class="form-label">(*) Año de Escolaridad:</label>
                <select name="anio" id="anio"  class="form-control col-8">
                    <option value="">Año de Escolaridad:</option>
                    <option value="1">Primero</option>
                    <option value="2">Segundo</option>
                    <option value="3">Tercero</option>
                    <option value="4">Cuarto</option>
                    <option value="5">Quinto</option>
                    <option value="6">Sexto</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="cenesp" class="form-label">Centro de Educación Especial:</label>
                <input type="text" class="form-control col-8" id="cenesp" name="cenesp" aria-describedby="cenesp" placeholder="Centro de Educación Especial">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <div class="form-group">
                    <label for="dircesp" class="form-label">Dirección del Centro de Educación Especial:</label>
                    <input type="dircesp" class="form-control col-8" id="dircesp" name="dircesp" aria-describedby="dircesp" placeholder="Unidad Educativa o Institución">
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="col-sm-12 col-md-12 col-ld-12 text-center bluebold">Datos del producto, obra intelectual, potencialidad o habilidad extraordinaria</div>
    <hr>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="areapot" class="form-label">(*) Área del producto, o habilidad extraordinaria:</label>
                <select name="areapot" id="areapot"  class="form-control col-8">
                    <option value="">Elija Área de Potencialidad:</option>
                    <option value="1">Área Científica Tecnológica</option>
                    <option value="2">Área Humanística Sociocultural</option>
                    <option value="3">Área Artes Plásticas</option>
                    <option value="4">Área Educación Musical</option>
                    <option value="5">Área Deportiva</option>
                </select>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <div class="form-group">
                    <label for="tut_tipo" class="form-label">(*) Subir un video demostrativo del producto, obra intelectual y/o habilidad extraordinaria:</label>
                    <div class="custom-file col-8">
                    <input type="file" class="custom-file-input" accept="video/*" id="videxp" name="videxp">
                    <label for="videxp" class="custom-file-label">(*) Subir un video</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="tutulo" class="form-label">(*) Título del producto, o habilidad extraordinaria:</label>
                <input type="text" class="form-control col-8" id="tutulo" name="tutulo" aria-describedby="tutulo" placeholder="Título">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="desc" class="form-label">(*) Describa el producto o habilidad extraordinaria presentada:</label>
                <textarea class="form-control col-8" id="desc" name="desc" rows="3"></textarea>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <div class="form-group">
                    <label for="tut_tipo" class="form-label">Otras evidencias archivo ppt, pptx o pdf:</label>
                    <div class="custom-file col-8">
                    <input type="file" class="custom-file-input" accept="application/vnd.ms-powerpoint, .pptx, application/pdf" id="arcexp" name="arcexp">
                    <label for="customFile" class="custom-file-label">Subir Archivo</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="noment" class="form-label">Nombre del Mentor (Si corresponde):</label>
                <input type="text" class="form-control col-8" id="noment" name="noment" aria-describedby="noment" placeholder="Nombre del Mentor">
            </div>
        </div>
        
    </div>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <div class="form-group">
                    <label for="fonoment" class="form-label">Teléfono del Mentor (Si corresponde):</label>
                    <input type="number" class="form-control col-8" id="fonoment" name="fonoment" aria-describedby="fonoment" placeholder="Teléfono del Mentor">
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-ld-6">
            <div class="form-group">
                <label for="descnec" class="form-label">Describa las necesidades o apoyo de la o el estudiante para seguir acrecentando su potencialidad o habilidad extraordinaria:</label>
                <input type="text" class="form-control col-8" id="descnec" name="descnec" aria-describedby="descnec" placeholder="Describa las necesidades de la o el estudiante">
            </div>
        </div>
    </div>
    <div class="form-row pt-2 mt-2">
        <div class="col-sm-6 col-md-6 col-ld-6  text-center">
            <input type="submit" value="Enviar" class="btn btn-primary" >
        </div>
        <div class="col-sm-6 col-md-6 col-ld-6 text-center">
            <input type="reset" value="Limpiar" class="btn btn-danger" >
        </div>
    </div>
        <?php echo form_close();?>
    </div>
</div>
<?php
	$this->load->helper('html');
	$link = array(
	'href' => 'assets/css/otro.css',
	'rel' => 'stylesheet',
	'type' => 'text/css',
	);
	echo link_tag($link);?>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>


<div class="modal" tabindex="-1" role="dialog" id="mymodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title acordion-link">Sus datos estan siendo enviados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Está seguro de enviar los datos?<br>
          <span class="cursos"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="confVideo">Confirmar envío</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Revisar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="modalNoti">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title acordion-link">Lea con mucha atención este mensaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 class="text-center bluebold">REGISTRO DE ESTUDIANTES CON POTENCIALIDADES PRODUCTIVAS O HABILIDADES EXTRAORDINARIAS EN EL SEP</h3>
        <p>Este formulario será llenado y enviado por la/el maestro, padre de familia o estudiante, si cumple los <br>
            *  Edad comprendida entre 7 a 20 años. <br>
            *  ¿Cuenta con algún producto, obra intelectual de su creación o habilidad extraordinaria?<br>
            *  ¿Le gustaría obtener derechos de autoría, demostrar en público y recibir apoyo para seguir acrecentando su potencialidad?<br>

            El propósito es descubrir estudiantes con Potencialidades Productivas y/o Habilidades Extraordinarias en las Unidades Educativas e instituciones del Sistema Educativo Plurinacional en las áreas: Científica tecnológica, humanística sociocultural, artes plásticas, educación musical y deportiva con miras a constituir Escuelas Mentores Territoriales de Talento Extraordinario (EMTTE).<br>

            Para más información comuníquese  con las y los maestros responsables del Programa de Talento Extraordinario del SEP, según los departamentos: Beni(72581457), Chuquisaca(61885507), Cochabamba(79713784), La Paz(70156829), El Alto(78989228) Oruro(67224032), Pando(72938308), Potosí(78734691), Santa Cruz(74694648) y Tarija(72016371).<br>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>