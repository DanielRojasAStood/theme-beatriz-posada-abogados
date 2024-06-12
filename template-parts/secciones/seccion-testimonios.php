<?php 
$sitename           = get_bloginfo('name');
$grupo_testimonios  = get_field('grupo_testimonios');
$fondo              = !empty($grupo_testimonios['fondo']) ? esc_attr($grupo_testimonios['fondo']) : '#ffffff';
$titulo             = !empty($grupo_testimonios['titulo']) ? esc_html($grupo_testimonios['titulo']) : '';
$descripcion        = !empty($grupo_testimonios['descripcion']) ? esc_html($grupo_testimonios['descripcion']) : '';
$testimonios        = !empty($grupo_testimonios['testimonios']) ? $grupo_testimonios['testimonios'] : [];

?>
<section class="seccionTestimonios">
    <div class="seccionTestimonios__fondo" style="background-color: <?php echo $fondo; ?>">
        <div class="seccionTestimonios__titulo">
            <h2 class="h2 font-nesans"><?php echo $titulo; ?></h2>
            <p class="text--16 fw--300"><?php echo $descripcion; ?></p>
        </div>
        <div class="seccionTestimonios__targetas slickTestimonios">
            <?php foreach ($testimonios as $testimonio) { 
                $nombre     = !empty($testimonio['nombre']) ? esc_html($testimonio['nombre']) : '';
                $rol        = !empty($testimonio['rol']) ? esc_html($testimonio['rol']) : '';
                $comentario = !empty($testimonio['comentario']) ? esc_html($testimonio['comentario']) : '';
            ?>
            <div class="seccionTestimonios__padding">
                <article class="seccionTestimonios__targeta" aria-label="<?php echo $nombre; ?>">
                    <div class="seccionTestimonios__avatar">
                        <span>
                            <img src="<?php echo esc_url(IMG_BASE . 'icon/icon-star.svg'); ?>" alt="estrella - <?php echo $sitename; ?>" title="estrella">
                        </span>
                    </div>
                    <div class="seccionTestimonios__info">
                        <h3>GANACHE</h3>
                        <h4 class="text--24"><?php echo $nombre; ?></h4>
                        <p class="font-nesans text--16"><?php echo $rol; ?></p>
                        <p class="text--12"><?php echo $comentario; ?></p>
                    </div>
                </article>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
