<?php
/*
* Template Name: Plantilla de Blog
* Description: Plantilla para mostrar todas las entradas del blog
*
* @package WordPress
* @subpackage theme-beatriz-posada-abogados
* @since 1.0.0
*/

$sitename = get_bloginfo('name');
get_header(); 
?>

<!-- CONTENIDO -->
    <main>
        <section class="seccionBlogBannerTitulo">
            <div class="seccionBlogBannerTitulo__fondo">
                <div class="container">
                    <div class="seccionBlogBannerTitulo__titulo">
                        <header>
                            <h1 class="font-nesans h1"><?php the_title(); ?></h1>
                        </header>
                    </div>
                </div>
            </div>
        </section>

        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1, 
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
            );
            $the_query = new WP_Query($args); ?>
            <section class="sectionBlogTargetas">
                <div class="sectionBlogTargetas__fondo">
                    <div class="sectionBlogTargetas__grid">
                        <?php if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                <article id="post-<?php the_ID(); ?>" class="sectionBlogTargetas__targeta post-item" style="display: none">
                                    <a href="<?php esc_url(get_permalink()); ?>" rel="bookmark">
                                        <div class="sectionBlogTargetas__info">
                                            <?php 
                                                $imagen_id     = get_post_thumbnail_id(); 
                                                $imagen_src    = $imagen_id ? esc_url(wp_get_attachment_image_url($imagen_id, 'custom-size')) : '';
                                                $imagen_srcset = $imagen_id ? esc_attr(wp_get_attachment_image_srcset($imagen_id, 'custom-size')) : '';
                                                $imagen_info   = $imagen_id ? wp_get_attachment_image_src($imagen_id, 'full') : array('', '', '');
                                                $imagen_width  = !empty($imagen_info[1]) ? intval($imagen_info[1]) : '';
                                                $imagen_height = !empty($imagen_info[2]) ? intval($imagen_info[2]) : '';
                                                $imagen_alt    = $imagen_id ? esc_attr(get_post_meta($imagen_id, '_wp_attachment_image_alt', true)) : '';
                                                $imagen_title  = $imagen_id ? esc_html(get_the_title($imagen_id)) : '';

                                                $titulo = get_the_title();
                                            ?>
                                            <figure>
                                                <img width="<?php echo $imagen_width ?>" height="<?php echo $imagen_height ?>" src="<?php echo $imagen_src ?>" data-src="<?php echo $imagen_src ?>" srcset="<?php echo $imagen_srcset ?>" data-srcset="<?php echo $imagen_srcset ?>" alt="<?php echo esc_attr($titulo . ' - ' . $sitename); ?>" title="<?php echo esc_attr($titulo); ?>">
                                            </figure>
                                            <header>
                                                <?php the_title(sprintf('<h2 class="font-nesans text--32">'), '</h2>'); ?>
                                            </header>
                                            <div class="excerpt">
                                                <?php 
                                                    $content = get_the_excerpt();
                                                    $trimmed_content = wp_trim_words(strip_tags($content), 16, '...');
                                                    echo $trimmed_content;
                                                ?>
                                            </div>
                                        </div>
                                        <footer>
                                            <?php 
                                                echo get_avatar(get_the_author_meta('ID'), 45);
                                                echo '<span class="author-name">' . get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name') . '</span>';
                                                echo '<span class="post-date">' . get_the_date() . '</span>';
                                            ?>
                                        </footer>
                                    </a>
                                </article>

                            <?php endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                    <button class="sectionBlogTargetas__vermas" type="button" data-vermas>Mostrar más</button>
                </div>
            </section>
    </main>
<!-- FIN CONTENIDO -->

<?php get_footer(); ?>