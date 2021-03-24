<div class="container-fluid trans">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-ld-12 py-2 my-2">
                <h5 class="card-header text-center">
                    CONMEMORACIÓN DEL DÍA DEL MAR
                </h5>
            </div>
        </div>
        <div class="row py-2 my-2">
            <div class="col-sm-12 col-md-7 col-ld-7 py-2 my-2">
                <a href="<?php echo base_url().'assets/img/otro/convoca.pdf';?>" target="_blank"> 
                <img src="<?php echo base_url().'assets/img/otro/diamar.png';?>" class="img-fluid" alt="Concurso de conmemoración al día del mar">
                </a>
            </div>
            
            <div class="col-sm-12 col-md-5 col-ld-5 form-group">
                <?php
                    $att = array('id' => 'video', 'class' =>'form-group', 'enctype' => 'multipart/form-data' );
                    echo form_open(base_url().'diadelmar/guardar', $att);
                    //print_r($info);
                ?>
                <div class="form-group">
                    <label for="error" class="error"><?=$error?></label>
                </div>
                <div class="form-group row">
                    <label for="rude" class="col-4 col-form-label">Código RUDE - Carnet:</label>
                    <input type="text" class="form-control col-8" id="rude" name="rude" aria-describedby="rude" placeholder="Ingresa RUDE o Carnet">
                </div>
                <div class="form-group row">
                    <label for="nombre" class="col-4 col-form-label">Nombres:</label>
                    <input type="text" class="form-control col-8" id="nombre" name="nombre" aria-describedby="nombres" placeholder="Ingresa Nombres">
                </div>
                <div class="form-group row">
                    <label for="apellido" class="col-4 col-form-label">Apellidos:</label>
                    <input type="text" class="form-control col-8" id="apellido" name="apellido" aria-describedby="apellidos" placeholder="Ingresa Apellidos">
                </div>
                <div class="form-group row">
                    <label for="fono" class="col-4 col-form-label">Teléfono Celular:</label>
                    <input type="number" class="form-control col-8" id="fono" name="fono" aria-describedby="telefono" placeholder="Ingresa tu teléfono">
                </div>
                <div class="form-group row">
                    <label for="titulo" class="col-4 col-form-label">Título del Video:</label>
                    <input type="text" class="form-control col-8" id="titulo" name="titulo" aria-describedby="telefono" placeholder="Título de video">
                </div>
                <div class="form-group row">
                    <label for="departamento" class="col-4 col-form-label">Departamento:</label>
                    <input type="text" class="form-control col-8" id="departamento" name="departamento" aria-describedby="departamento" placeholder="Ingresa Departamento">
                </div>
                <div class="form-group row">
                    <label for="municipio" class="col-4 col-form-label">Municipio:</label>
                    <input type="text" class="form-control col-8" id="municipio" name="municipio" aria-describedby="municipio" placeholder="Ingresa Municipio">
                </div>
                <div class="form-group row" class="col-4 col-form-label">
                    <label for="ue" class="col-4 col-form-label">Unidad Educativa - ESFM:</label>
                    <input type="text" class="form-control col-8" id="ue" name="ue" aria-describedby="unidad educativa" placeholder="Ingresa Unidad Educativa">
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" accept="video/*" id="userfile" name="userfile">
                    <label class="custom-file-label" for="customFile">Elige tu video</label>
                </div>
                <div class="row pt-2 mt-2">
                    <div class="col-sm-6 col-md-6 col-ld-6  text-center">
                        <input type="submit" value="Enviar" class="btn btn-success" >
                    </div>
                    <div class="col-sm-6 col-md-6 col-ld-6 text-center">
                        <input type="reset" value="Limpiar" class="btn btn-danger" >
                    </div>
                </div>

                <?php echo form_close();?>

            </div>
        </div>
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