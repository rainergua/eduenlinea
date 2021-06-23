<div class="container-fluid contenido">
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-sm-12 col-md-12 col-ld-12 text-center">
            <h4>Subsistema de Educación Superior de Formación Profesional</h4>
            <h5><?php echo $titulo?></h5>
            <label> Departamento de: <?php echo $departamento->nom_dep?></label-->
            <input type="hidden" name="depto" id="depto" value="<?php echo $depto?>">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md- col-ld-12 text-center">
            <h4>Busqueda por Municipio e Instituto</h4>
        </div>
    </div>
    <div class="row my-2 py-2">
        <div class="col-sm-12 col-md-12 col-ld-12 text-center">
            Municipio: <select name="muni" id="muni">
                <option value="">Municipio</option>
                <?php
                    foreach ($munis as $muni) {
                        echo '<option value="'.$muni->municipio.'">'.$muni->municipio.'</option>';
                    }
                ?>
            </select>

            Instituto: <select id='inst' name='inst'>
            <option value="">Instituto</option>
            </select>
        </div>
    </div>
    <hr>
    <table class="table table-striped table-hover table-responsive">
    <thead>
    <tr>
      <th scope="col">Municipio</th>
      <th scope="col">Instituto</th>
      <th scope="col">Carrera</th>
      <th scope="col">Grado</th>
      <th scope="col">RM Apertura</th>
      <th scope="col">RM Carrera</th>
      <th scope="col">Dependencia</th>
      <th scope="col">Sitio Web</th>
    </tr>
    </thead>
    <tbody id="tab">
    
    <?php 
        foreach ($inst as $insti) {
            echo '<tr>
            <th>'.$insti->municipio.'</th>
            <td>'.$insti->instituto.'</td>
            <td>'.$insti->carrera.'</td>
            <td>'.$insti->grado_ac.'</td>
            <td>'.$insti->rm_ap.'</td>
            <td>'.$insti->rm_carr.'</td>
            <td>'.$insti->dependencia.'</td>
            <td>'.$insti->sitio_web.'</td>
          </tr>';
    }?> 
    
    </div>
    </tbody>
    </table>
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12">
             
        </div>
    </div>
</div>
</div>



