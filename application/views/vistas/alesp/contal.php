<div class="container-fluid contenido">
    <div class=" container d-flex justify-content-center py-2 my-2">
        <ul class="pagination shadow-lg">
            <li class="page-item"><a class="page-link" href="<?php echo base_url()?>"><i class="fa fa-home "></i> Inicio </a></li>
            <li class="page-item"><a class="page-link " href="<?php echo base_url().'eduvit/alternativa'?>">Educación Alternativa y Especial</a></li>
            <li class="page-item active"><a class="page-link " href="<?php echo base_url().'conales/nivel/9'?>">Educación Alternativa</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row pb-2">
            <div class="col-sm-12 col-md-12 col-ld-12  text-center">
                <img src="<?php echo base_url().'/assets/img/txtfnd.png';?>" class="img-fluid mt-4 pt-4">
            </div>
        </div>

        <div id="accordion">
         <?php
            foreach ($tipo as $tip) {
         ?>
                <div class="card">
                    <div class="card-header acordion-header" id="heading<?=$tip->cod_tipo?>">
                    <h5 class="mb-0">
                        <button class="btn btn-link acordion-link" data-toggle="collapse" data-target="#collapse<?=$tip->cod_tipo?>" aria-expanded="true" aria-controls="collapse<?=$tip->cod_tipo?>">
                        <span class="fa-stack fa-sm">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span> 
                        <?=$tip->tipo_cont?>
                        </button>
                    </h5>
                    </div>

                    <div id="collapse<?=$tip->cod_tipo?>" class="collapse" aria-labelledby="heading<?=$tip->cod_tipo?>" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row" id="row">
                        <?php foreach ($material as $mat) {
                            if($tip->cod_tipo == 3)
                                $icon = 'fa-file-video';
                            else
                                $icon = 'fa-file-pdf';
                            if($mat->cod_tipo==$tip->cod_tipo){
                         ?>
                            <div class="col-12 col-sm-12 col-md-3 col-ld-3">
                                <a href="<?php echo base_url().'assets/uploads/files/cont/ales/'.$mat->arch_matanio;?>" target="_blank">
                                <?php
                                $ext = explode('.', $mat->arch_matanio);
                                if($ext[1] == 'mp3'){?>
                                    <figure class="figure">
                                    <img src="<?php echo base_url().'assets/img/mp3.png'?>" class="figure-img img-fluid">
                                    <figcaption class="figure-caption text-center"><h6>
                                    <?php print($mat->des_matanio);?></h6></figcaption>
                                    </figure>
                                <?php
                                }
                                elseif($mat->img_matanio==""){
                                ?>
                                <div class="caption text-center"><i class="fas <?=$icon?> px-1"></i><?=$mat->des_matanio?></div>
                                <?php
                                }else{?>
                                    <figure class="figure">
                                    <img src="<?php echo base_url().'assets/uploads/files/cont/ales/img/'.$mat->img_matanio;?>" class="figure-img img-fluid">
                                    <figcaption class="figure-caption text-center"><h6>
                                    <?php print($mat->des_matanio);?></h6></figcaption>
                                    </figure>
                                <?php
                                }?>
                            </a>
                            </div>
                        <?php }
                    }?>    
                        </div>
                    </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div> 
    </div>
</div>


