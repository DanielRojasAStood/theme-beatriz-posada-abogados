<?php 
$sitename               = get_bloginfo('name');
$grupo_dificultades     = get_field('grupo_dificultades');
$fondo                  = $grupo_dificultades['fondo'];
$titulo                 = $grupo_dificultades['titulo'];

$enlace                 = $grupo_dificultades['enlace'];
$enlace_url             = $enlace['url'];
$enlace_titulo          = $enlace['title'];
$enlace_target          = $enlace['target'];

$dificultades           = $grupo_dificultades['dificultades'];

$imagen_id      = !empty($grupo_dificultades['imagen']['ID']) ? intval($grupo_dificultades['imagen']['ID']) : 0;
$imagen_src     = $imagen_id ? esc_url(wp_get_attachment_image_url($imagen_id, 'custom-size')) : '';

$imagen_srcset  = $imagen_id ? esc_attr(wp_get_attachment_image_srcset($imagen_id, 'custom-size')) : '';
$imagen_info    = $imagen_id ? wp_get_attachment_image_src($imagen_id, 'full') : array('', '', '');
$imagen_width   = !empty($imagen_info[1]) ? intval($imagen_info[1]) : '';
$imagen_height  = !empty($imagen_info[2]) ? intval($imagen_info[2]) : '';
$imagen_alt     = $imagen_id ? esc_attr(get_post_meta($imagen_id, '_wp_attachment_image_alt', true)) : '';
$imagen_title   = $imagen_id ? esc_html(get_the_title($imagen_id)) : '';
?>
<section class="seccionDificultad">
    <div class="seccionDificultad__fondo" style="background-color: <?php echo $fondo; ?>">
        <div class="seccionDificultad__grid">
            <div class="seccionDificultad__contenido">
                <h2 class="font-nesans"><?php echo $titulo; ?></h2>
                <a class="boton conocemas" href="<?php echo $enlace_url; ?>" target="<?php echo $enlace_target; ?>" title="<?php echo $enlace_titulo; ?>">
                    <?php echo $enlace_titulo; ?>
                    <img width="24" height="24" src="<?php echo esc_url(IMG_BASE . 'icon/icon-arrow-black.svg'); ?>" alt="conoce mas - <?php echo esc_attr($sitename); ?>" title="conoce mas">
                </a>
                <div class="seccionDificultad__dificultades">
                    <?php foreach ($dificultades as $dificultad) { 
                        $enlace__url = $dificultad['enlace']['url'];
                    ?>
                        <a href="<?php echo $enlace__url; ?>" class="seccionDificultad__dificultad" title="">
                            <?php echo $dificultad['dificultad']?>
                            <img width="40" height="31" src="<?php echo IMG_BASE . 'icon/icon-next.svg'?>" alt="siguiente - <?php echo $sitename; ?>" title="siguiente">
                        </a>
                    <?php } ?>
                </div>
            </div>
            <figure class="seccionDificultad__img" data-srcset="<?php echo $imagen_srcset; ?>"  style="background-image: url('<?php echo esc_url($imagen_info[0]); ?>');">
            </figure>
        </div>
    </div>
</section>