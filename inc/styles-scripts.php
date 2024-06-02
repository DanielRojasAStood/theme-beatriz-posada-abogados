<?php

if ( ! function_exists('beatriz_posada_add_theme_scripts') ) {
	function beatriz_posada_add_theme_scripts()
	{
		$cssFilePath = glob( get_template_directory() . '/css/build/main.min.*.css' );
		$cssFileURI = get_template_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
		wp_enqueue_style( 'main_css', $cssFileURI );
	
		$jsFilePath = glob( get_template_directory() . '/js/build/main.min.*.js' );
		$jsFileURI = get_template_directory_uri() . '/js/build/' . basename($jsFilePath[0]);
		wp_enqueue_script( 'main_js', $jsFileURI , null , null , true );

		// Add extra params
		wp_localize_script('main_js', 'lm_params', array(
			'ajaxurl' => admin_url('admin-ajax.php'),
		));
	}
}
add_action('wp_enqueue_scripts', 'beatriz_posada_add_theme_scripts');