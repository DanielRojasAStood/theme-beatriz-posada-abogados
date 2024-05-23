<?php
/* 
	1 - ACF json
	2 - SVG
    3 - Titulo
    4 - Resolucion de imagenes
    5 - Menu
*/

// 1 - Guarda archivos JSON de ACF en la carpeta '/acf-json' dentro del tema activo.
function my_acf_json_save_point( $path ) {
	return get_stylesheet_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );

// 3 - Permitir la carga de archivos SVG
function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// Titulo
function slug_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'slug_setup');

// Resolucion de imagenes
function img_setup_theme() {
    add_image_size('custom-size', 423, 519, true); // Normal resolution
    add_image_size('custom-size-2x', 846, 1038, true); // High resolution
}
add_action('after_img_setup_theme', 'setup_theme');

?>



