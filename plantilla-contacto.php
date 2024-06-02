<?php 
/*
* Template Name: Plantilla Contáctanos
* Template Post Type: page
* Description: Contáctanos
*
* @package WordPress
* @subpackage theme-beatriz-posada-abogados
* @author Daniel Rojas Astood
* @since 1.0.0
*/
$grupo_informacion_adicional = get_field('grupo_informacion_adicional');

$imagen_id          = !empty($grupo_informacion_adicional['banner']['ID']) ? intval($grupo_informacion_adicional['banner']['ID']) : 0;
$imagen_src         = $imagen_id ? esc_url(wp_get_attachment_image_url($imagen_id, 'custom-size')) : '';

get_header(); ?>

<!-- CONTENIDO -->
    <main>
        <section class="paginaContactanos">
            <div class="paginaContactanos__fondo">
                <div class="paginaContactanos__grid">
                    <div class="paginaContactanos__titulo">
                        <header>
                            <h1 class="font-nesans color--8E7F21">Contáctanos</h1>
                        </header>
                    </div>
                    <figure class="paginaContactanos__img" style="background-image: url(<?php echo $imagen_src; ?>)">
                    </figure>
                    <div class="paginaContactanos__formulario">
                        <?php echo do_shortcode('[contact-form-7 id="47f878c" title="Formulario de contacto"]')?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<!-- FIN CONTENIDO -->

<?php get_footer(); ?>

