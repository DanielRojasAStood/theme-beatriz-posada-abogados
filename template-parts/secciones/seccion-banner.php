<?php
$sitename           = get_bloginfo('name');
$grupo_banner       = get_field('grupo_banner');

$fondo              = !empty($grupo_banner['fondo']) ? esc_attr($grupo_banner['fondo']) : '';
$subtitulo          = !empty($grupo_banner['subtitulo']) ? esc_html($grupo_banner['subtitulo']) : '';
$titulo             = !empty($grupo_banner['titulo']) ? esc_html($grupo_banner['titulo']) : '';

$enlace_url         = !empty($grupo_banner['enlace']['url']) ? esc_url($grupo_banner['enlace']['url']) : '';
$enlace_titulo      = !empty($grupo_banner['enlace']['title']) ? esc_html($grupo_banner['enlace']['title']) : '';
$enlace_target      = !empty($grupo_banner['enlace']['target']) ? esc_attr($grupo_banner['enlace']['target']) : '';

$imagen_id          = !empty($grupo_banner['foto']['ID']) ? intval($grupo_banner['foto']['ID']) : 0;
$imagen_src         = $imagen_id ? esc_url(wp_get_attachment_image_url($imagen_id, 'custom-size')) : '';
$imagen_srcset      = $imagen_id ? esc_attr(wp_get_attachment_image_srcset($imagen_id, 'custom-size')) : '';
$imagen_info        = $imagen_id ? wp_get_attachment_image_src($imagen_id, 'full') : array('', '', '');
$imagen_width       = !empty($imagen_info[1]) ? intval($imagen_info[1]) : '';
$imagen_height      = !empty($imagen_info[2]) ? intval($imagen_info[2]) : '';
$imagen_alt         = $imagen_id ? esc_attr(get_post_meta($imagen_id, '_wp_attachment_image_alt', true)) : '';
$imagen_title       = $imagen_id ? esc_html(get_the_title($imagen_id)) : '';

$bckg_id            = !empty($grupo_banner['imagen']['ID']) ? intval($grupo_banner['imagen']['ID']) : 0;
$bckg_src           = $bckg_id ? esc_url(wp_get_attachment_image_url($bckg_id, 'custom-size-2x')) : '';
?>

<section class="sectionBanner">
    <div class="sectionBanner__fondo" style="background-color: <?php echo $fondo; ?>">
        <div class="sectionBanner__grid">
            <div class="sectionBanner__contenido">
                <p class="text--16"><?php echo $subtitulo; ?></p>
                <h1 class="h2 font-nesans"><?php echo $titulo; ?></h1>
                <a class="boton" href="<?php echo $enlace_url; ?>" target="<?php echo $enlace_target; ?>" title="<?php echo $enlace_titulo; ?>">
                    <?php echo $enlace_titulo; ?>
                    <img width="24" height="24" src="<?php echo esc_url(IMG_BASE . 'icon/icon-arrow-black.svg'); ?>" alt="conoce mas - <?php echo esc_attr($sitename); ?>" title="conoce mas">
                </a>
                <figure class="sectionBanner__img">
                    <img width="<?php echo $imagen_width ?>" height="<?php echo $imagen_height ?>" src="<?php echo $imagen_src ?>" data-src="<?php echo $imagen_src ?>" srcset="<?php echo $imagen_srcset ?>" data-srcset="<?php echo $imagen_srcset ?>" alt="<?php echo esc_attr($titulo . ' - ' . $sitename); ?>" title="<?php echo esc_attr($titulo); ?>">
                </figure>
            </div>
            <figure class="sectionBanner__bckg" style="background-image: url(<?php echo $bckg_src; ?>)">
            </figure>
        </div>
    </div>
</section>
