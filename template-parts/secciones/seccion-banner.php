<?php
$sitename           = get_bloginfo('name');
$grupo_banner       = get_field('grupo_banner');
$slides             = $grupo_banner['slides'];
?>

<section>
    <div class="slickBanner">
        <?php foreach ($slides as $key => $slide) { 
            $fondo          = !empty($slide['fondo']) ? esc_attr($slide['fondo']) : '';
            $color_texto    = !empty($slide['text_color']) ? esc_attr($slide['text_color']) : '';
            $subtitulo      = !empty($slide['subtitulo']) ? esc_html($slide['subtitulo']) : '';
            $titulo         = !empty($slide['titulo']) ? esc_html($slide['titulo']) : '';
            $habilitar_logo = !empty($slide['habilitar_logo']) ? esc_html($slide['habilitar_logo']) : '';
            
            $enlace_url     = !empty($slide['enlace']['url']) ? esc_url($slide['enlace']['url']) : '';
            $enlace_titulo  = !empty($slide['enlace']['title']) ? esc_html($slide['enlace']['title']) : '';
            $enlace_target  = !empty($slide['enlace']['target']) ? esc_attr($slide['enlace']['target']) : '';
            
            $imagen_id      = !empty($slide['foto']['ID']) ? intval($slide['foto']['ID']) : 0;
            $imagen_src     = $imagen_id ? esc_url(wp_get_attachment_image_url($imagen_id, 'custom-size')) : '';
            $imagen_srcset  = $imagen_id ? esc_attr(wp_get_attachment_image_srcset($imagen_id, 'custom-size')) : '';
            $imagen_info    = $imagen_id ? wp_get_attachment_image_src($imagen_id, 'full') : array('', '', '');
            $imagen_width   = !empty($imagen_info[1]) ? intval($imagen_info[1]) : '';
            $imagen_height  = !empty($imagen_info[2]) ? intval($imagen_info[2]) : '';
            $imagen_alt     = $imagen_id ? esc_attr(get_post_meta($imagen_id, '_wp_attachment_image_alt', true)) : '';
            $imagen_title   = $imagen_id ? esc_html(get_the_title($imagen_id)) : '';
            
            $bckg_id        = !empty($slide['imagen']['ID']) ? intval($slide['imagen']['ID']) : 0;
            $bckg_src       = $bckg_id ? esc_url(wp_get_attachment_image_url($bckg_id, 'custom-size-2x')) : '';

            
        ?>
            <div class="sectionBanner">
                <div class="sectionBanner__fondo" style="background-color: <?php echo $fondo; ?>">
                    <div class="sectionBanner__grid">
                        <div>
                            <?php if($habilitar_logo) : ?>
                                <div class="sectionBanner__logo">
                                    <?php 
                                        get_template_part('template-parts/content', 'icono');
                                        display_icon('logo-repeater'); 
                                    ?>
                                </div>
                            <?php endif?>
                            <?php if($key % 2 == 0) { ?>
                            <div class="sectionBanner__contenido">
                            <?php } else { ?>
                            <div class="sectionBanner__contenido sectionBanner__revertir">
                            <?php } ?>
                                <div class="sectionBanner__info">
                                    <?php if($subtitulo) : ?>
                                    <p class="text--16" style="color: <?php echo $color_texto ?>"><?php echo $subtitulo; ?></p>
                                    <?php endif; ?>
        
                                    <?php if($titulo) : ?>
                                        <?php if($key == 0) : ?>
                                            <h1 class="h2 font-nesans" style="color: <?php echo $color_texto ?>"><?php echo $titulo; ?></h1>
                                        <?php else : ?>
                                            <h2 class="h2 font-nesans" style="color: <?php echo $color_texto ?>"><?php echo $titulo; ?></h2>
                                        <?php endif; ?>
                                    <?php endif; ?>
        
                                    <?php if($enlace_titulo) : ?>
                                    <a style="color: <?php echo $color_texto ?>" class="boton" href="<?php echo $enlace_url; ?>" target="<?php echo $enlace_target; ?>" title="<?php echo $enlace_titulo; ?>">
                                        <?php echo $enlace_titulo; ?>
                                        <?php 
                                        get_template_part('template-parts/content', 'icono');
                                        display_icon('arrow'); 
                                        ?>
        
                                        <!-- <img width="24" height="24" src="<?php echo esc_url(IMG_BASE . 'icon/icon-arrow-black.svg'); ?>" alt="conoce mas - <?php echo esc_attr($sitename); ?>" title="conoce mas"> -->
                                    </a>
                                    <?php endif; ?>
                                </div>
                                <?php if($imagen_id) : ?>
                                    <figure class="sectionBanner__img">
                                        <img width="<?php echo $imagen_width ?>" height="<?php echo $imagen_height ?>" src="<?php echo $imagen_src ?>" data-src="<?php echo $imagen_src ?>" srcset="<?php echo $imagen_srcset ?>" data-srcset="<?php echo $imagen_srcset ?>" alt="<?php echo esc_attr($titulo . ' - ' . $sitename); ?>" title="<?php echo esc_attr($titulo); ?>">
                                    </figure>
                                <?php endif; ?>
                            </div>
                        </div>
                        <figure class="sectionBanner__bckg" style="background-image: url(<?php echo $bckg_src; ?>)">
                        </figure>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>