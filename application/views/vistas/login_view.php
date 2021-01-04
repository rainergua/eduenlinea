<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bienvenido(a)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="jumbotron">
                    <div class="login">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="text-center">Si eres estudiante digita tu RUDE</h6>
                                <h6 class="text-center">Si eres maestro digita tu Carnet o RDA</h6>
                            </div>
                            <div class="card-body">
                                <!--form id="form_login" method="post"-->
                                <?php

                                $attributes = ['id' => 'form_login'];
                                echo form_open(base_url().'login/ingresar', $attributes);

                                $ci = &get_instance();
                                $ci->load->library("token");
                                $token = $ci->token->tokenlb();
                                echo form_hidden('token',$token);
                                ?>
                                <div class="form-group">
                                    <div class="input-group-prepend text-center">
                                        <span class="input-group-text">
                                            <span>
                                            CARNET - RDA - RUDE &nbsp;&nbsp;&nbsp;
                                            </span>
                                            <i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Digita tu Carnet, RUDE o RDA" name="password" id="password" autocomplete="off">
                                </div>
                                <div class="form-group text-center">
                                    <input type="button" value="Ingresar al sistema" class="btn btn-success mr-4" id="btnlogin">
                                </div>
                                </form>
                                <div class="error text-center"></div>
                                <div class="load text-center"></div>
                            </div><!--CARD BODY-->
                        </div><!--CARD-->
                    </div><!--LOGIN END-->
            </div><!--FIN JUMBOTRON-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
</div>