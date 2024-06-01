<?php 
/*
* Template Name: Página Servicios
* Template Post Type: page
* Description: Nuestros servicios
*
* @package WordPress
* @subpackage theme-beatriz-posada-abogados
* @author Daniel Rojas Astood
* @since 1.0.0
*/

$grupo_titulo       = get_field('grupo_titulo');
$fondo              = $grupo_titulo['fondo'];
$titulo             = $grupo_titulo['titulo'];

$pagina_inicio      = get_page_by_path('inicio')->ID;
$grupo_contador     = ($pagina_inicio) ? get_field('grupo_contador', $pagina_inicio) : null;
$grupo_metodo       = ($pagina_inicio) ? get_field('grupo_metodo', $pagina_inicio) : null;
get_header(); ?>

<!-- CONTENIDO -->
    <main>

        <section class="seccionServiciosBannerTitulo">
            <div class="seccionServiciosBannerTitulo__fondo" style="background-color: <?php echo $fondo;?>">
                <div class="container">
                    <div class="seccionServiciosBannerTitulo__titulo">
                        <header>
                            <h1 class="font-nesans h1"><?php echo $titulo; ?></h1>
                        </header>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contador -->
        <?php 
        set_query_var('grupo_contador', $grupo_contador);
        get_template_part('template-parts/secciones/seccion', 'contador');
        ?>
        <!-- Fin Contador -->

        <!-- Servicios -->
        <section class="seccionServiciosLinks">
            <div class="seccionServiciosLinks__fondo">
                <div class="container">
                    <?php get_template_part('template-parts/secciones/seccion', 'servicios');?>
                </div>
            </div>
        </section>
        <!-- Fin Servicios -->

        <!-- Metodo -->
        <?php 
        set_query_var('grupo_metodo', $grupo_metodo);
        get_template_part('template-parts/secciones/seccion', 'metodo');
        ?>
        <!-- Fin Metodo -->

    </main>
<!-- FIN CONTENIDO -->

<?php get_footer(); ?>

