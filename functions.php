<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage ThemeBeatrizAbogados
 * @since ThemeBeatrizAbogados
 */

defined('ABSPATH') || exit;

define('URL_BASE', get_stylesheet_directory_uri() . '/');
define('IMG_BASE', URL_BASE . 'images/');
$incPath = get_template_directory() . '/inc/';
require_once($incPath . 'ajax.php');
require_once($incPath . 'custom-postype.php');
require_once($incPath . 'queries.php');
require_once($incPath . 'styles-scripts.php');
require_once($incPath . 'theme-setup.php');

/* 
*   Configuración tema
*/
if ( ! function_exists('theme_setup')) {
    function theme_setup()
    {
        if (function_exists('add_theme_support')) {
            add_theme_support('post-thumbnails');
            add_theme_support('custom-logo');
        }
    }
}
add_action('after_setup_theme', 'theme_setup');

/* 
*   Habilitar menu
*/
function slacip_menus()
{
    register_nav_menus(array(
        'menu-principal' => 'Menu Principal',
        'menu-mobile' => 'Menú Mobile',
    ));
}
add_action('init', 'slacip_menus');
