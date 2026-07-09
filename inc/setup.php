<?php

function kumasagarandthekhwopa_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'kumasagarandthekhwopa'),
        'footer' => __('Footer Menu', 'kumasagarandthekhwopa')
    ));

}
add_action('after_setup_theme', 'kumasagarandthekhwopa_setup');

// register custom post type for artists
function kumasagarandthekhwopa_register_custom_post_type() {
    $labels = array(
        'name' => __('Artists', 'kumasagarandthekhwopa'),   
        'singular_name' => __('Artist', 'kumasagarandthekhwopa'),
        'add_new' => __('Add New', 'kumasagarandthekhwopa'),
        'add_new_item' => __('Add New Artist', 'kumasagarandthekhwopa'),
        'edit_item' => __('Edit Artist', 'kumasagarandthekhwopa'),
        'new_item' => __('New Artist', 'kumasagarandthekhwopa'),
        'view_item' => __('View Artist', 'kumasagarandthekhwopa'),
        'search_items' => __('Search Artists', 'kumasagarandthekhwopa'),
        'not_found' => __('No artists found', 'kumasagarandthekhwopa'),
        'not_found_in_trash' => __('No artists found in Trash', 'kumasagarandthekhwopa'),
        'parent_item_colon' => __('Parent Artist:', 'kumasagarandthekhwopa'),
        'menu_name' => __('Artists', 'kumasagarandthekhwopa'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-art',
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'rewrite' => array('slug' => 'artists'),
    );

    register_post_type('artist', $args);

    // register events custom post type
    $event_labels = array(
        'name' => __('Events', 'kumasagarandthekhwopa'),
        'singular_name' => __('Event', 'kumasagarandthekhwopa'),
        'add_new' => __('Add New', 'kumasagarandthekhwopa'),
        'add_new_item' => __('Add New Event', 'kumasagarandthekhwopa'),
        'edit_item' => __('Edit Event', 'kumasagarandthekhwopa'),
        'new_item' => __('New Event', 'kumasagarandthekhwopa'),
        'view_item' => __('View Event', 'kumasagarandthekhwopa'),
        'search_items' => __('Search Events', 'kumasagarandthekhwopa'),
        'not_found' => __('No events found', 'kumasagarandthekhwopa'),
        'not_found_in_trash' => __('No events found in Trash', 'kumasagarandthekhwopa'),
        'parent_item_colon' => __('Parent Event:', 'kumasagarandthekhwopa'),
        'menu_name' => __('Events', 'kumasagarandthekhwopa'),
    );

    $event_args = array(
        'labels' => $event_labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'rewrite' => array('slug' => 'events'),
    );

    register_post_type('event', $event_args);


}
add_action('init', 'kumasagarandthekhwopa_register_custom_post_type');