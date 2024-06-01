<?php
$sitename           = get_bloginfo('name');
$footer             = get_page_by_path('contenido-header-footer')->ID;
$grupo_footer       = ($footer) ? get_field('grupo_footer', $footer) : null;
$fondo              = $grupo_footer['fondo'];
$logo               = $grupo_footer['grupo_logo']['logo'];
$descripcion        = $grupo_footer['grupo_logo']['descripcion'];
$redes_sociales     = $grupo_footer['grupo_logo']['redes_sociales'];
$contactos          = $grupo_footer['grupo_contactanos']['contacto'];
$servicios          = $grupo_footer['grupo_servicios']['servicios'];

// $grupo_copyright = ($footer) ? get_field('grupo_copyright', $footer) : null;
?>
<footer class="seccionFooter">
    <div class="seccionFooter__fondo" style="background-color: <?php echo $fondo; ?>">
        <div class="seccionFooter__grid">
            <div class="seccionFooter__logo">
                <img width="33" height="55" src="<?php echo $logo; ?>" alt="Beatriz posada - <?php echo $sitename; ?>" title="Beatriz posada">
                <h2 class="font-nesans text--24 color--E0D6CD">Beatriz Posada</h2>
                <p class="text--12 color--E0D6CD">Abogados</p>
                <div class="font-nesans text--24 color--E0D6CD">
                    <?php echo $descripcion; ?>
                </div>
                <div class="seccionFooter__sociales">
                    <?php foreach ($redes_sociales as $key => $social) { 
                        $icono_link = $social['enlace']['url'];
                        $icono_title = $social['enlace']['title'];
                        $icono_target = $social['enlace']['target'];
                    ?>
                        <a href="<?php echo $icono_link; ?>" target="<?php echo $icono_target; ?>" title="<?php echo $icono_title; ?>">
                            <img width="22" height="22" src="<?php echo $social['icono']; ?>" alt="<?php echo $icono_title . ' - ' . $sitename; ?>" title="<?php echo $icono_title; ?>">
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="seccionFooter__contacto">
                <div class="seccionFooter__titulo">
                    <h3 class="font-nesans text--32 color--E0D6CD">Contáctanos</h3>
                    <h3 class="font-nesans text--32 color--E0D6CD">Servicios</h3>
                </div>
                <div class="seccionFooter__info">
                    <div class="seccionFooter__col">
                        <button type="button" class="toggle" data-footer-open-menu>
                            <h3 class="font-nesans text--32 color--E0D6CD">
                                Contáctanos
                                <img width="24" height="24" src="<?php echo IMG_BASE . 'icon/icon-chevron-down.svg'?>" alt="chevron" title="chevron">
                            </h3>
                        </button>
                        <div class="seccionFooter__menu">
                            <?php foreach ($contactos as $key => $contacto) { 
                                $contacto_link = $contacto['enlace']['url'];
                                $contacto_title = $contacto['enlace']['title'];
                                $contacto_target = $contacto['enlace']['target'];
                            ?>
                                <a class="text--14 color--E0D6CD fw-300" href="<?php echo $contacto_link; ?>" target="<?php echo $contacto_target; ?>" title="<?php echo $contacto_title; ?>">
                                    <?php echo $contacto_title; ?>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="seccionFooter__col">
                        <button type="button" class="toggle" data-footer-open-menu>
                            <h3 class="font-nesans text--32 color--E0D6CD">
                                Servicios
                                <img width="24" height="24" src="<?php echo IMG_BASE . 'icon/icon-chevron-down.svg'?>" alt="chevron" title="chevron">
                            </h3>
                        </button>
                        <div class="seccionFooter__menu">
                            <?php foreach ($servicios as $key => $servicio) { 
                                $servicio_link = $servicio['enlace']['url'];
                                $servicio_title = $servicio['enlace']['title'];
                                $servicio_target = $servicio['enlace']['target'];
                            ?>
                                <a class="text--14 color--E0D6CD fw-300" href="<?php echo $servicio_link; ?>" target="<?php echo $servicio_target; ?>" title="<?php echo $servicio_title; ?>">
                                    <?php echo $servicio_title; ?>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</footer>