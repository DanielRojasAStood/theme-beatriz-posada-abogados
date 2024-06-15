<?php
$sitename           = get_bloginfo('name');
$get_grupo_metodo   = !empty(get_field('grupo_metodo')) ? get_field('grupo_metodo') : get_query_var('grupo_metodo');
$titulo             = !empty($get_grupo_metodo['titulo']) ? $get_grupo_metodo['titulo'] : '';

$palabras       = explode(' ', $titulo);
$texto_1        = isset($palabras[0]) ? esc_html($palabras[0]) : '';
$texto_2        = isset($palabras[1]) ? esc_html($palabras[1]) : '';

$fondo          = !empty($get_grupo_metodo['fondo']) ? esc_attr($get_grupo_metodo['fondo']) : '';

$imagen_id      = !empty($get_grupo_metodo['imagen']['ID']) ? intval($get_grupo_metodo['imagen']['ID']) : 0;
$imagen_src     = $imagen_id ? esc_url(wp_get_attachment_image_url($imagen_id, 'custom-size')) : '';
$imagen_srcset  = $imagen_id ? esc_attr(wp_get_attachment_image_srcset($imagen_id, 'custom-size')) : '';
$imagen_info    = $imagen_id ? wp_get_attachment_image_src($imagen_id, 'full') : array('', '', '');
$imagen_width   = !empty($imagen_info[1]) ? intval($imagen_info[1]) : '';
$imagen_height  = !empty($imagen_info[2]) ? intval($imagen_info[2]) : '';
$imagen_alt     = $imagen_id ? esc_attr(get_post_meta($imagen_id, '_wp_attachment_image_alt', true)) : '';
$imagen_title   = $imagen_id ? esc_html(get_the_title($imagen_id)) : '';

$items          = !empty($get_grupo_metodo['items']) ? $get_grupo_metodo['items'] : array();
?>
<section class="seccionMetodo">
    <div class="seccionMetodo__fondo" style="background-color: <?php echo $fondo; ?>">
        <div class="container">
            <div class="seccionMetodo__grid">
                <div class="seccionMetodo__foto">
                    <h2 class="font-nesans h1--medium color--E0D6CD"><?php echo $texto_1; ?></h2>
                    <figure class="seccionMetodo__img">
                        <img width="<?php echo $imagen_width ?>" height="<?php echo $imagen_height ?>" src="<?php echo $imagen_src ?>" data-src="<?php echo $imagen_src ?>" srcset="<?php echo $imagen_srcset ?>" data-srcset="<?php echo $imagen_srcset ?>" alt="<?php echo esc_attr($titulo . ' - ' . $sitename); ?>" title="<?php echo esc_attr($titulo); ?>">
                    </figure>
                    <h2 class="font-nesans h1--medium color--E0D6CD"><?php echo $texto_2; ?></h2>
                </div>
                <div class="seccionMetodo__contenido">
                    <?php
                    $idx = 1;
                    foreach ($items as $key => $item) { 
                        $titulo         = !empty($item['titulo']) ? esc_html($item['titulo']) : '';
                        $descripcion    = !empty($item['descripcion']) ? esc_html($item['descripcion']) : '';

                        $enlace_url     = !empty($item['enlace']['url']) ? esc_url($item['enlace']['url']) : '';
                        $enlace_title   = !empty($item['enlace']['title']) ? esc_html($item['enlace']['title']) : '';
                        $enlace_target  = !empty($item['enlace']['target']) ? esc_attr($item['enlace']['target']) : '';
                        ?>
                        <a href="<?php echo $enlace_url; ?>" class="seccionMetodo__paso" title="<?php echo $enlace_title; ?>" target="<?php echo $enlace_target; ?>">
                            <span class="font-nesans h1--medium color--E0D6CD">0<?php echo $idx; ?>.</span>
                            <div class="seccionMetodo__texto">
                                <p class="color--E0D6CD fw--500"><?php echo $titulo; ?></p>
                                <p class="color--E0D6CD"><?php echo $descripcion; ?></p>
                            </div>
                            <span>
                                <?php 
                                    get_template_part('template-parts/content', 'icono');
                                    display_icon('next-purple'); 
                                ?>
                            </span>
                        </a>
                    <?php $idx++; } ?>
                </div>
            </div>
        </div>
    </div>
</section>