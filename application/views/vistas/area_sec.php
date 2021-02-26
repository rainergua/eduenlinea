<!--PAGINA QUE NO ESTA EN USO APARENTE-->
<div class="container-fluid trans contenido">
<div class="container contenido">
    <div class="row pt-4">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <h3>Nivel Secundario - <?=$curso?></h3>
            <h3 class="font-italic">Áreas de Conocimiento</h3>
        </div>
    </div>

    <div class="row row-height align-items-center">
    <?php foreach ($areas as $area) {?>
        <div class="col-12 col-sm-12 col-md-3 col-ld-3 text-center">
            <div class="row">
            <div class="col">
            <div class="ih-item circle effect1">
                <a href="<?php echo base_url().'secundaria/contenido/'.$area['curso'].'/'.$area['cod_mat']; ?>">
                <div class="spinner"></div>
                <div class="img"><img src="<?php echo base_url().'assets/img/'.$area['img']; ?>" alt="img"></div>
                <div class="info">
                <div class="info-back">
                    <h3><?=$area['materia']?></h3>
                    <p></p>
                </div>
                </div>
                </a>
            </div>
            </div>
            </div>
            <div class="row pt-3">
                <div class="col text-center">
                    <p class="caption"><?=$area['materia']?></p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>    
    </div>

    <div class="row pb-4">
        <div class="col-12 col-sm-12 col-md-12 col-ld-12 text-center">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis commodi dolorem, facere vitae quibusdam ea, fuga aperiam architecto facilis, 
                numquam distinctio atque tenetur voluptatibus! Perspiciatis pariatur voluptatibus tempore dignissimos harum accusantium minima similique ipsum 
                eveniet temporibus blanditiis neque nulla iusto repellat, sunt excepturi laboriosam, atque sequi autem expedita nostrum quod.
            </p>
        </div>
    </div>
</div>
</div>



