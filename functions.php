<?php
/**
 * Register and enqueue a custom stylesheet in the WordPress admin.
 */
function wpdocs_enqueue_custom_admin_style() {
    wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/admin-style.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );

function create_custom_post_type() {
    $labels = array(
        'name'               => 'Custom Posts',
        'singular_name'      => 'Custom Post',
        'menu_name'          => 'Custom Posts',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Custom Post',
        'edit_item'          => 'Edit Custom Post',
        'new_item'           => 'New Custom Post',
        'view_item'          => 'View Custom Post',
        'search_items'       => 'Search Custom Posts',
        'insert_into_item'   => 'Insert into custom post',
        'uploaded_to_this_item' => 'Uploaded to this custom post',
        'items_list'         => 'Custom posts list',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-welcome-write-blog', 
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'custom-posts' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    );

    register_post_type( 'custom_post', $args );
}
add_action( 'init', 'create_custom_post_type' );

function create_custom_taxonomy() {
    $labels = array(
        'name'              => 'Genres',
        'singular_name'     => 'Genre',
        'search_items'      => 'Search Genres',
        'all_items'         => 'All Genres',
        'edit_item'         => 'Edit Genre',
        'update_item'       => 'Update Genre',
        'add_new_item'      => 'Add New Genre',
        'new_item_name'     => 'New Genre Name',
        'menu_name'         => 'Genres',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'genre' ),
    );

    register_taxonomy( 'genre', 'custom_post', $args );
}
add_action( 'init', 'create_custom_taxonomy' );

