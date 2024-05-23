<?php
/* 
  1 - Videos
*/
// 1 - videos
// function my_custom_post_videos() {
//   $labels = array(
//     'name'               => _x('Videos', 'nombre general del tipo de entrada', 'textdomain'),
//     'singular_name'      => _x('Video', 'nombre singular del tipo de entrada', 'textdomain'),
//     'add_new'            => _x('Agregar nuevo', 'video', 'textdomain'),
//     'add_new_item'       => __('Agregar nuevo Video', 'textdomain'),
//     'edit_item'          => __('Editar Video', 'textdomain'),
//     'new_item'           => __('Nuevo Video', 'textdomain'),
//     'all_items'          => __('Todos los Videos', 'textdomain'),
//     'view_item'          => __('Ver Video', 'textdomain'),
//     'search_items'       => __('Buscar Videos', 'textdomain'),
//     'not_found'          => __('No se encontraron Videos', 'textdomain'),
//     'not_found_in_trash' => __('No se encontraron Videos en la papelera', 'textdomain'),
//     'parent_item_colon'  => '',
//     'menu_name'          => 'Videos'
//   );
//   $args = array(
//     'labels'        => $labels,
//     'description'   => 'Contiene nuestros videos y datos específicos de los mismos',
//     'public'        => true,
//     'menu_position' => 5,
//     'menu_icon'     => 'dashicons-video-alt3',
//     'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
//     'has_archive'   => true,
//     'taxonomies'    => array('categoria_video')  // Usando la taxonomía personalizada
//   );
//   register_post_type('videos', $args); 
// }
// add_action('init', 'my_custom_post_videos');