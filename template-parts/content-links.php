<?php 
$sitename       = get_bloginfo('name');
$enlace__url    = get_query_var('enlace__url');
$titulo         = get_query_var('titulo');
?>
<a href="<?php echo $enlace__url; ?>" class="link" title="<?php echo $titulo . ' - ' . $sitename ?>">
    <?php echo $titulo; ?>
    <img width="40" height="31" src="<?php echo IMG_BASE . 'icon/icon-next.svg'?>" alt="siguiente - <?php echo $sitename; ?>" title="siguiente">
</a>