<?php
    $args = array(
        'theme_location'  => 'menu-mobile',
        'container'       => '',
        'items_wrap'      => '<ul class="seccionHeader__ul" id="">%3$s</ul>',
    );
    wp_nav_menu($args);
?>

<div class="seccionHeader__logo seccionHeader__logo-mobile">
    <?php get_template_part('template-parts/page/header/content', 'header-logo') ?>
</div>