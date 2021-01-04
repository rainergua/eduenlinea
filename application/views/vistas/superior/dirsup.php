<div class="container-fluid trans contenido">
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <h4>Subsistema de <?=($sis->desc_sis)?></h4>
        </div>
    </div>
    <div class="row mt-3">
              
            <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center mt-4 pt-2">
                <a href="<?php echo base_url().'consup/deptoesfm'?>">
                <div class="card redondo" style="width: 18rem;">
                <img src="<?php echo base_url().'assets/img/dgfm.png'?>" class="card-img-top" alt="...">
                <div class="card-body text-center">
                <h5 class="card-title">FORMACIÓN DE <br> MAESTROS</h5>
                </div>
                </div>
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center mt-4 pt-2">
                <a href="<?php echo base_url().'eduvit/superior'?>">
                <div class="card redondo" style="width: 18rem;">
                <img src="<?php echo base_url().'assets/img/tecno.png' ?>" class="card-img-top" alt="...">
                <div class="card-body text-center">
                <h5 class="card-title">INSTITUTOS TECNOLÓGICOS</h5>
                </div>
                </div>
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center mt-4 pt-2">
                <a href="<?php echo base_url().'consup/deptouni'?>">
                    <div class="card redondo" style="width: 18rem;">
                    <img src="<?php echo base_url().'assets/img/unis.png' ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                    <h5 class="card-title">UNIVERSIDADES</h5>
                    </div>
                    </div>
                </a>
            </div>
           
    </div>
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12">
            <?=$sis->txt_sis?>  
        </div>
    </div>
</div>
</div>



