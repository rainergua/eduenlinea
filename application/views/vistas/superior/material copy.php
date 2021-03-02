<div class="container-fluid contenido">
    <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <?php
            $i=0;
            foreach ($anios as $anio) {

            ?>
            <li class="nav-item">
                <a class="nav-link <?= $i==0 ? 'active' : ''?>" data-toggle="tab" href="#link<?=$anio->cod_nivesfm?>"><?=$anio->des_nivesm?></a>
            </li>
            <?php
            $i++;
            }
            ?>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <?php
            $i=0;
            foreach ($anios as $anio) {
            ?>
            <div class="tab-pane container <?= $i==0 ? 'active' : ''?>" id="link<?=$anio->cod_nivesfm?>">
            <?php
                foreach ($materias as $materia) {
                    if($materia->cod_nivesfm == $anio->cod_nivesfm){
                        /*echo '<li>';
                        print($materia->des_matcar);
                        print($materia->cod_nivesfm);
                        echo '</li>';*/
            ?>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header acordion-header" id="heading<?=$materia->cod_matcar?>">
                            <h5 class="mb-0">
                                <button class="btn btn-link acordion-link" data-toggle="collapse" data-target="#collapse<?=$materia->cod_matcar?>" aria-expanded="true" aria-controls="collapse<?=$materia->cod_matcar?>">
                                <span class="fa-stack fa-sm">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                </span> 
                                <?=$materia->des_matcar?>
                                </button>
                            </h5>
                            </div>

                            <div id="collapse<?=$materia->cod_matcar?>" class="collapse" aria-labelledby="heading<?=$materia->cod_matcar?>" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row" id="row">
                                <?php foreach ($contenidos as $contenido) {
                                    if($contenido->cod_caresfm == $materia->cod_caresfm  && $contenido->cod_matesfm == $materia->cod_matcar){
                                    switch ($contenido->tipo_matesfm) {
                                        case 'pdf':
                                            $icon = 'fa-file-pdf';
                                            break;
                                        case 'pres':
                                            $icon = 'fa-file-powerpoint';
                                            break;
                                        case 'word':
                                            $icon = 'fa-file-word';
                                            break;
                                        case 'video':
                                            $icon = 'fa-file-video';
                                            break;
                                        case 'imagen':
                                            $icon = 'fa-file-image';
                                            break;
                                        case 'audio':
                                            $icon = 'fa-file-audio';
                                            break;
                                        default:
                                            $icon = '';
                                            break;
                                    }
                                ?>
                                    <div class="col-12 col-sm-12 col-md-4 col-ld-4">
                                        <a href="<?php echo base_url().'/assets/uploads/files/cont/esfm/'.$contenido->arch_matesfm;?>" target="_blank">
                                        <div class="caption text-center"><i class="fas <?=$icon?> px-1"></i><?=$contenido->des_matesfm?></div>
                                    </a>
                                    </div>
                                <?php }
                            }?>    
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
            <?php ///******** */
                    }
                }
                echo '</div>';
                $i++;
            }
            echo '</div>';
            ?>
        </div>
    </div>
</div>