<?php 
$sitename       = get_bloginfo('name');
$grupo_texto    = get_field('grupo_texto');

$fondo          = !empty($grupo_texto['fondo']) ? esc_attr($grupo_texto['fondo']) : '#ffffff';
$titulo         = !empty($grupo_texto['titulo']) ? esc_html($grupo_texto['titulo']) : '';
$rol            = !empty($grupo_texto['rol']) ? esc_html($grupo_texto['rol']) : '';
$descripcion    = !empty($grupo_texto['descripcion']) ? esc_html($grupo_texto['descripcion']) : '';

?>

<section class="seccionTexto">
    <div class="seccionTexto__fondo" style="background-color: <?php echo $fondo; ?>">
        <div class="container">
            <div class="seccionTexto__contenido">
                <h2 class="font-nesans text--32" style="line-height: 23px;"><?php echo $titulo; ?></h2>
                <p class="text--16 fw--300"><?php echo $rol; ?></p>
                <p class="font-nesans text--32">
                    <img width="98" height="138" class="quote" src="<?php echo esc_url(IMG_BASE . 'icon/quote-left.svg'); ?>" alt="icon" title="icon">
                    <?php echo $descripcion; ?>
                    <img width="98" height="138" class="quote" src="<?php echo esc_url(IMG_BASE . 'icon/quote-right.svg'); ?>" alt="icon" title="icon">
                </p>
            </div>
        </div>
    </div>
</section>
