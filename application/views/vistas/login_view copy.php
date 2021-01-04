<div class="container-fluid trans">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-2 col-ld-2"></div>
            <div class="col-12 col-sm-12 col-md-8 col-ld-8">
                <div class="jumbotron">
                    <div class="login">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">Bienvenido(a)</h4>
                                <h4 class="text-center">Si eres estudiante digita tu Carnet o RUDE</h4>
                                <h4 class="text-center">Si eres maestro digita tu Carnet o RDA</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?=base_url()?>login/ingresar" id="form_login" method="post">
                                <?php
                                $ci = &get_instance();
                                $ci->load->library("token");
                                $token = $ci->token->tokenlb();
                                echo form_hidden('token',$token)?>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <span>
                                                &nbsp;&nbsp;&nbsp;CARNET - RUDE - RDA &nbsp;&nbsp;&nbsp;
                                            </span>
                                            <i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Digita tu Carnet, RUDE o RDA" name="password" id="password">
                                </div>
                                <div class="form-group text-center">
                                    <input type="submit" value="Ingresar al sistema" class="btn btn-success mr-4" id="btnlogin">
                                </div>
                                
                                </form>
                                <div class="error text-center"></div>
                            </div><!--CARD BODY-->
                            <!--div class="card-footer">
                            
                            </div-->
                        </div><!--CARD-->
                    </div><!--LOGIN END-->
            </div><!--FIN JUMBOTRON-->
            </div><!--COL-->
            <div class="col-12 col-sm-12 col-md-2 col-ld-2"></div>
        </div><!--row-->
    </div> 
</div>



