<?php 
$sitename       = get_bloginfo('name');
$enlace__url    = get_query_var('enlace__url');
$titulo         = get_query_var('titulo');
?>
<a href="<?php echo $enlace__url; ?>" class="link" title="<?php echo $titulo . ' - ' . $sitename ?>">
    <?php echo $titulo; ?>
    <span class="icono">
        <?php 
            get_template_part('template-parts/content', 'icono');
            display_icon('next-purple'); 
        ?>
    </span>
</a>