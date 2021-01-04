<div class="container-fluid trans contenido">
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <h4>Subsistema de <?=($sis->desc_sis)?></h4>
        </div>
    </div>
    <div class="row mt-3">
        <?php 
        foreach ($nivel as $niv) {
        ?>       
        
            <?php
            if($sis->link_sis=='regular'){?>
            <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center mt-4 pt-2">
                <a href="<?php echo base_url().'contenido/nivel/'.$niv->cod_niv; ?>">
                <div class="card redondo" style="width: 18rem;">
                <img src="<?php echo base_url().'assets/uploads/files/img/'.$niv->img_niv; ?>" class="card-img-top" alt="...">
                <div class="card-body text-center">
                <h5 class="card-title"><?=$niv->des_niv?></h5>
                </div>
                </div>
                </a>
            </div>
            <?php
            }else{?>
            <div class="col-12 col-sm-12 col-md-4 col-ld-4 text-center mt-4 pt-2">
                <a href="<?php echo base_url().'conales/nivel/'.$niv->cod_niv; ?>">
                    <div class="card cuadrado" >
                        <img src="<?php echo base_url().'assets/uploads/files/img/'.$niv->img_niv; ?>" class="card-img-top-cc" alt="...">
                        <div class="card-body text-center tam">
                            <h5 class="card-title"><?=$niv->des_niv?></h5>
                        </div>
                    </div>
                </a>
            </div>
            <?php
            }?>    
        <?php 
        }
        ?>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12">
            <?=$sis->txt_sis?>  
        </div>
    </div>
</div>
</div>



