<?php 
$sitename       = get_bloginfo('name');
$grupo_atencion = get_field('grupo_atencion');

$fondo          = !empty($grupo_atencion['fondo']) ? esc_attr($grupo_atencion['fondo']) : '#ffffff';
$logo           = !empty($grupo_atencion['logo']) ? esc_url($grupo_atencion['logo']) : '';
$titulo         = !empty($grupo_atencion['titulo']) ? esc_html($grupo_atencion['titulo']) : '';
$descripcion    = !empty($grupo_atencion['descripcion']) ? esc_html($grupo_atencion['descripcion']) : '';
$empresas       = !empty($grupo_atencion['empresas']) ? $grupo_atencion['empresas'] : [];

?>
<section class="seccionEmpresas">
    <div class="seccionEmpresas__fondo" style="background-color: <?php echo $fondo; ?>">
        <div class="container">
            <div class="seccionEmpresas__contenido">
                <?php if ($logo) : ?>
                    <img class="seccionEmpresas__logo" width="48" height="79" src="<?php echo $logo; ?>" alt="Beatriz Posada" title="Beatriz Posada">
                <?php endif; ?>
                <h2 class="h2 font-nesans"><?php echo $titulo; ?></h2>
                <p class="text--16"><?php echo $descripcion; ?></p>
            </div>

            <div class="seccionEmpresas__empresas">
                <div class="slickEmpresas">
                    <?php foreach ($empresas as $empresa) { 
                        $imagen = !empty($empresa['imagen']) ? esc_url($empresa['imagen']) : '';
                        if ($imagen) {
                    ?>
                        <div>
                            <figure>
                                <img width="" height="" src="<?php echo $imagen; ?>" alt="Beatriz Posada" title="Beatriz Posada">
                            </figure>
                        </div>
                    <?php 
                        } // end if
                    } // end foreach 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
