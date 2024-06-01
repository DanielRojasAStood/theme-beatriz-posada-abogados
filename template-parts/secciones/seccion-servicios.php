<?php
    $args = array(
        'post_type' => 'servicios',
        'posts_per_page' => -1
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php 
                        $enlace__url    = get_the_permalink();
                        $titulo         = get_the_title();
                        set_query_var('enlace__url', $enlace__url);
                        set_query_var('titulo', $titulo);

                        get_template_part('template-parts/content', 'links');
                    ?>
                </header>
            </article>
        <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No hay servicios disponibles en este momento.</p>';
    endif;
?>

