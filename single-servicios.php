<?php
/*
* Template Name: Entrada de Servicio
* Template Post Type: servicios
* Description: Plantilla para mostrar información detallada sobre un servicio
*
* @package WordPress
* @subpackage theme-beatriz-posada-abogados
* @since 1.0.0
*/

$sitename = get_bloginfo('name');
$grupo_targetas = get_field('grupo_targetas');
$targetas = isset($grupo_targetas['targetas']) ? $grupo_targetas['targetas'] : array();

get_header(); ?>

<!-- CONTENIDO -->
<main>
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <section class="seccionInternaBannerTitulo">
                <div class="seccionInternaBannerTitulo__fondo">
                    <div class="seccionInternaBannerTitulo__wrapper">
                        <div class="seccionInternaBannerTitulo__titulo">
                            <header>
                                <h1 class="font-nesans h2"><?php echo esc_html(get_the_title()); ?></h1>
                            </header>
                            <div class="text--16">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="seccionInternaTargetas__fondo">
                <?php if (!empty($targetas)) : ?>
                    <?php foreach ($targetas as $key => $targeta) :
                        $imagen_id = !empty($targeta['imagen']['ID']) ? intval($targeta['imagen']['ID']) : 0;
                        $imagen_src = $imagen_id ? esc_url(wp_get_attachment_image_url($imagen_id, 'custom-size')) : '';
                        $imagen_srcset = $imagen_id ? esc_attr(wp_get_attachment_image_srcset($imagen_id, 'custom-size')) : '';
                        $imagen_info = $imagen_id ? wp_get_attachment_image_src($imagen_id, 'full') : array('', '', '');
                        $imagen_width = !empty($imagen_info[1]) ? intval($imagen_info[1]) : '';
                        $imagen_height = !empty($imagen_info[2]) ? intval($imagen_info[2]) : '';
                        $imagen_alt = $imagen_id ? esc_attr(get_post_meta($imagen_id, '_wp_attachment_image_alt', true)) : '';
                        $imagen_title = $imagen_id ? esc_html(get_the_title($imagen_id)) : '';

                        $titulo = !empty($targeta['titulo']) ? esc_html($targeta['titulo']) : '';
                        $descripcion = !empty($targeta['descripcion']) ? $targeta['descripcion'] : '';
                        $icono = !empty($targeta['icono']) ? $targeta['icono'] : '';
                    ?>
                        <div class="seccionInternaTargeta">
                            <div class="seccionInternaTargeta__grid">
                                <figure class="seccionInternaTargeta__img">
                                    <?php if ($imagen_src) : ?>
                                        <img width="<?php echo esc_attr($imagen_width); ?>" height="<?php echo esc_attr($imagen_height); ?>" src="<?php echo esc_url($imagen_src); ?>" srcset="<?php echo esc_attr($imagen_srcset); ?>" alt="<?php echo esc_attr($titulo . ' - ' . $sitename); ?>" title="<?php echo esc_attr($titulo); ?>">
                                    <?php endif; ?>
                                </figure>
                                <div class="seccionInternaTargeta__info">
                                    <?php if ($icono) : ?>
                                        <img width="24" height="24" src="<?php echo esc_url($icono); ?>" alt="<?php echo esc_attr($titulo); ?>" title="<?php echo esc_attr($titulo); ?>">
                                    <?php endif; ?>
                                    <h2 class="font-nesans h2"><?php echo esc_html($titulo); ?></h2>
                                    <div class="text--16"><?php echo wp_kses_post($descripcion); ?></div>
                                    <a href="/contactanos" class="boton boton--primario" title="<?php echo esc_attr('¡Contáctanos - ' . $sitename); ?>">¡Contáctanos!</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>No hay tarjetas disponibles en este momento.</p>
                <?php endif; ?>
            </section>

        </article>
    <?php endwhile; ?>
</main>
<!-- FIN CONTENIDO -->
<?php get_footer(); ?>
