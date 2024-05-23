<?php 
$clases = isset($args['clases']) ? $args['clases'] : '';
$titulo = isset($args['titulo']) ? $args['titulo'] : '';
$heading = isset($args['heading']) ? $args['heading'] : 'h2';
?>

<<?php echo $heading ?> class="<?php echo $clases ?>">
    <?php echo $titulo ?>
</<?php echo $heading ?>>
