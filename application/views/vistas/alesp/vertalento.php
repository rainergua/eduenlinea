<div class="container-fluid contenido">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-ld-12 text-right">
                <a href="<?php echo base_url().'login/logout';?>">Cerrar</a>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12 col-md-12 col-ld-12 text-center">
                <h2 class="text-center">Talentos Registrados</h2>
                <h4>Bienvenido(a): <?php 
                echo $user->nombres . ' ' . $user->paterno . ' ' . $user->materno; 
                ?></h4>
            </div>
        </div>
        <?php
            if($talent){?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Nro</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Distrito</th>
                        <th scope="col">Centro</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Área</th>
                        <th scope="col">Video</th>
                        <th scope="col">Presentación</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                foreach ($talent as $rowtal) {
                    echo '<tr><th scope="row">'.$i.'</th>';
                    echo '<td>'.$rowtal->nombre.'</td>';
                    echo '<td>'.$rowtal->depto.'</td>';
                    echo '<td>'.$rowtal->distrito.'</td>';
                    echo '<td>'.$rowtal->ue.'</td>';
                    echo '<td>'.$rowtal->desc_tal.'</td>';
                    echo '<td>'.$rowtal->areapot.'</td>';
                    echo '<td><a href="'.base_url().'assets/uploads/files/especial/talento/'.$rowtal->videxp.'" target="_blank">'.$rowtal->videxp.'</a></td>';
                    echo '<td><a href="'.base_url().'assets/uploads/files/especial/talento/'.$rowtal->arcexp.'" target="_blank">'.$rowtal->arcexp.'</a></td>';
                    echo '</tr>';
                    $i++;
                }
                echo '</tbody></table>';
            }else{
                echo '<h4 class="error">No existen registros</h4>';
            }
        ?>
    </div>
</div>


