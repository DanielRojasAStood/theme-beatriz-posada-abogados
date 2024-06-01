<?php
$get_grupo_contador = !empty(get_field('grupo_contador')) ? get_field('grupo_contador') : get_query_var('grupo_contador');
$items = !empty($get_grupo_contador['items']) ? $get_grupo_contador['items'] : array();
$fondo = !empty($get_grupo_contador['fondo']) ? esc_attr($get_grupo_contador['fondo']) : '';
?>
<section class="seccionContador">
    <div class="seccionContador__fondo" style="background-color: <?php echo $fondo; ?>">
        <div class="container">
            <div class="seccionContador__grid">
                <?php 
                foreach ($items as $key => $item) { 
                    $numero = !empty($item['numero']) ? intval($item['numero']) : 0;
                    $detalle = !empty($item['detalle']) ? esc_html($item['detalle']) : '';
                    ?>
                    <div class="seccionContador__numero">
                        <h2 class="h1--medium font-nesans color--E0D6CD">
                            + <?php echo $numero; ?>
                        </h2>
                        <p class="text--24 color--E0D6CD fw--300">
                            <?php echo $detalle; ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
