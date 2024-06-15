<?php 
/* 
Template Name: Plantilla Inicio
*/

$grupo_banner = get_field('grupo_banner');
$activar_banner = $grupo_banner['activar_banner'];

$grupo_contador = get_field('grupo_contador');
$activar_contador = $grupo_contador['activar_contador'];

$grupo_metodo = get_field('grupo_metodo');
$activar_metodo = $grupo_metodo['activar_metodo'];

$grupo_atencion = get_field('grupo_atencion');
$activar_atencion = $grupo_atencion['activar_atencion'];

$grupo_dificultades = get_field('grupo_dificultades');
$activar_dificultades = $grupo_dificultades['activar_dificultades'];

$grupo_testimonios = get_field('grupo_testimonios');
$activar_testimonios = $grupo_testimonios['activar_testimonios'];

$grupo_texto = get_field('grupo_texto');
$activar_texto = $grupo_texto['activar_texto'];



get_header();
?>
<!-- CONTENIDO -->
    <!-- Loading -->
    <?php get_template_part('template-parts/content', 'loading');?>
    <!-- fin Loading -->
    <main id="main-content">
        <?php if($activar_banner) { ?>
        <!-- Banner -->
        <?php get_template_part('template-parts/secciones/seccion', 'banner');?>
        <!-- Fin Banner -->
        <?php } ?>

        <?php if($activar_contador) { ?>
        <!-- Contador -->
        <?php get_template_part('template-parts/secciones/seccion', 'contador');?>
        <!-- Fin Contador -->
        <?php } ?>

        <?php if($activar_metodo) { ?>
        <!-- Metodo -->
        <?php get_template_part('template-parts/secciones/seccion', 'metodo');?>
        <!-- Fin Metodo -->
        <?php } ?>

        <?php if($activar_atencion) { ?>
        <!-- Empresas -->
        <?php get_template_part('template-parts/secciones/seccion', 'empresas');?>
        <!-- Fin Empresas -->
        <?php } ?>

        <?php if($activar_dificultades) { ?>
        <!-- Dificultad -->
        <?php get_template_part('template-parts/secciones/seccion', 'dificultad');?>
        <!-- Fin Dificultad -->
        <?php } ?>

        <?php if($activar_testimonios) { ?>
        <!-- Testimonios -->
        <?php get_template_part('template-parts/secciones/seccion', 'testimonios');?>
        <!-- Fin Testimonios -->
        <?php } ?>

        <?php if($activar_texto) { ?>
        <!-- Beatriz -->
        <?php get_template_part('template-parts/secciones/seccion', 'texto');?>
        <!-- Fin Beatriz -->
        <?php } ?>


    </main>
<!-- FIN CONTENIDO -->

<?php get_footer();