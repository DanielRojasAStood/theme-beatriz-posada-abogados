<header class="seccionHeader">
    <div class="seccionHeader__fondo">
        <div class="seccionHeader__grid">
            <button class="seccionHeader__boton-menu" type="button" aria-label="menu" data-abrir-menu>
                <img width="24px" height="24" src="<?php echo IMG_BASE . 'icon/icon-menu.svg'; ?>" alt="menu" title="menu">
            </button>
            <div class="seccionHeader__logo">
                <?php get_template_part('template-parts/page/header/content', 'header-logo') ?>
            </div>
            <div class="seccionHeader__menu">
                <?php get_template_part('template-parts/page/header/content', 'header-menu') ?>
            </div>
            <div class="seccionHeader__logo">
                <?php get_template_part('template-parts/page/header/content', 'header-logo') ?>
            </div>
        </div>
    </div>
</header>

<section class="sectionMenuMobile" data-menu-mobile>
    <button class="seccionHeader__boton-cerrar" type="button" aria-label="menu" data-cerrar-menu>
        Cerrar
        <img width="24px" height="24" src="<?php echo IMG_BASE . 'icon/icon-close.svg'; ?>" alt="cerrar" title="cerrar">
    </button>
    <div class="seccionHeader__menu">
        <?php get_template_part('template-parts/page/header/content', 'header-menu') ?>
    </div>
    <div class="seccionHeader__logo">
        <?php get_template_part('template-parts/page/header/content', 'header-logo') ?>
    </div>
</section>
