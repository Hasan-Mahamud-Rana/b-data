<?php

/**
 * Proper way to enqueue scripts and styles
 */
function slider_scripts() {
	if ( is_front_page() || is_home()) {
		wp_enqueue_style( 'slick-stylesheet', get_template_directory_uri() .'/css/slick.css' );
    wp_enqueue_style( 'slick-theme-stylesheet', get_template_directory_uri() .'/css/slick-theme.css' );
		//wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true );
  }
}

add_action( 'wp_enqueue_scripts', 'slider_scripts' );

function slide() {
  register_post_type( 'slide',
    array(
      'labels' => array(
        'name' => __('Slider', 'bordingdata'),
        'singular_name' => __('Slide', 'bordingdata'),
        'all_items' => __('All slides', 'bordingdata'),
        'add_new' => __('Add New', 'bordingdata'),
        'add_new_item' => __('Add New slide', 'bordingdata'),
        'edit' => __( 'Edit', 'bordingdata' ),
        'edit_item' => __('Edit Post Types', 'bordingdata'),
        'new_item' => __('New Post Type', 'bordingdata'),
        'view_item' => __('View Post Type', 'bordingdata'),
        'search_items' => __('Search Post Type', 'bordingdata'),
        'not_found' =>  __('Nothing found in the Database.', 'bordingdata'),
        'not_found_in_trash' => __('Nothing found in Trash', 'bordingdata'),
        'parent_item_colon' => ''
      ),
      'description' => __( 'This is the example slide post type', 'bordingdata' ),
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 8,
      'menu_icon' => 'dashicons-slides',
      'rewrite' => array( 'slug' => 'slide', 'with_front' => false ),
      'has_archive' => 'slide',
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'slide-fields', 'comments', 'revisions', 'sticky')
    )
  );
}

add_action( 'init', 'slide');