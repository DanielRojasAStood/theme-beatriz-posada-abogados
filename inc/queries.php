<?php

defined('ABSPATH') || exit;

function legger_get_posts($post_type = 'post', $quantity = 3, $date_comparison = null, $order_by = 'date', $order = 'DESC', $categories = false, $meta_key = false) {
    $args = array(
        'post_type'         => $post_type,
        'posts_per_page'    => $quantity,
        'post_status'       => 'publish',
        'orderby'           => $order_by,
        'order'             => $order,
        'meta_key'          => $meta_key,
    );

    if ($categories) {
        $taxonomy = get_object_taxonomies($post_type)[0];
        $categories = get_terms(array(
            'taxonomy'  => $taxonomy,
            'fields'    => 'ids'
        ));
        $args['tax_query'] = array(
            array(
                'taxonomy'  => $taxonomy,
                'field'     => 'term_id',
                'terms'     => $categories
            )
        );
    }

    $query  = new WP_Query($args);
    $result = array();

    if ($query->have_posts()) {
        $result['pages'] = $query->max_num_pages;
        while ($query->have_posts()) {
            $query->the_post();
            $post_data = array(
                'ID'    => get_the_ID()
            );
            $result['posts'][] = $post_data;
        }
    }

    wp_reset_postdata();
    return $result;
}
