<div class="container-fluid trans">
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-ld-2"></div>
        <div class="col-12 col-sm-12 col-md-8 col-ld-8">
            <div class="jumbotron">
                <h3 class="text-center">ESTUDIANTES CON POTENCIALIDADES PRODUCTIVAS O HABILIDADES EXTRAORDINARIAS EN EL SEP</h3>
                <div class="login">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Bienvenido(a)</h4>
                            <h4 class="text-center">Ingreso al Sistema para ver Registros</h4>
                        </div>
                        <div class="card-body">
							<form action="<?=base_url()?>login/ingresar" id="form_login" method="post">
                            <?=form_hidden('token',$token)?>
                            <div class="input-group form-group">
                                
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span>Carnet de Identidad &nbsp;&nbsp;</span><i class="fas fa-user"></i></span>
                                    
                                </div>
                                <input type="text" class="form-control" placeholder="Digite su carnet de identidad" name="username" id="username">
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            RDA
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Digite su RDA" name="password" id="password">
                            </div>
                            <!--div class="form-group text-center">
                                <h5 class="acordion-link">Las incripciones fueron hasta el 1ro de mayo</h5>
                            </div-->
                            <div class="form-group text-center">
                                <input type="submit" value="Iniciar sesión" class="btn btn-success mr-4" id="btnlogin">
                                <a href="<?php echo base_url().'assets/docs/manual.pdf';?>" target="_blank" class="btn btn-info ml-4">Guía para inscripción</a>
                            </div>
                            
							</form>
                            <label for="error" class="error"><?=$error?></label>
						</div><!--CARD BODY-->
					</div><!--CARD-->
                </div><!--LOGIN END-->
           </div><!--FIN JUMBOTRON-->
        </div><!--COL-->
        <div class="col-12 col-sm-12 col-md-2 col-ld-2"></div>
    </div><!--row-->
</div> 
</div>



