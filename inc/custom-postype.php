<?php
/* 
  1 - Servicios
*/

// 1 - Servicios
function my_custom_post_servicios() {
  $labels = array(
      'name'               => _x('Servicios', 'nombre general del tipo de entrada', 'textdomain'),
      'singular_name'      => _x('Servicio', 'nombre singular del tipo de entrada', 'textdomain'),
      'add_new'            => _x('Agregar nuevo', 'servicio', 'textdomain'),
      'add_new_item'       => __('Agregar nuevo Servicio', 'textdomain'),
      'edit_item'          => __('Editar Servicio', 'textdomain'),
      'new_item'           => __('Nuevo Servicio', 'textdomain'),
      'all_items'          => __('Todos los Servicios', 'textdomain'),
      'view_item'          => __('Ver Servicio', 'textdomain'),
      'search_items'       => __('Buscar Servicios', 'textdomain'),
      'not_found'          => __('No se encontraron Servicios', 'textdomain'),
      'not_found_in_trash' => __('No se encontraron Servicios en la papelera', 'textdomain'),
      'parent_item_colon'  => '',
      'menu_name'          => 'Servicios'
  );
  $args = array(
      'labels'        => $labels,
      'description'   => 'Contiene nuestros servicios y datos específicos de los mismos',
      'public'        => true,
      'menu_position' => 5,
      'menu_icon'     => 'dashicons-hammer', // Puedes elegir el icono que desees de la lista de Dashicons
      'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
      'has_archive'   => true,
      'taxonomies'    => array('categoria_servicio')  // Usando una taxonomía personalizada
  );
  register_post_type('servicios', $args); 
}

// Hook para registrar el tipo de entrada personalizada
add_action('init', 'my_custom_post_servicios');
