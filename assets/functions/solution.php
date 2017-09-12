<?php

/**
 * Proper way to enqueue scripts and styles
 */
function solution_scripts() {
	if ( is_page( 'losninger' ) || is_page('viking-commerce') ){
	wp_enqueue_style( 'solution-stylesheet', get_template_directory_uri() .'/css/accordion.css' );
	wp_enqueue_script( 'solution-easing-script', get_template_directory_uri() . '/js/accordian/jquery.easing.1.3.js');
  wp_enqueue_script( 'solution-liteaccordion-script', get_template_directory_uri() . '/js/accordian/accordion.min.js');
  }
}

add_action( 'wp_enqueue_scripts', 'solution_scripts' );

function solution() {
  register_post_type( 'solution',
    array(
      'labels' => array(
        'name' => __('Solution', 'bordingdata'),
        'singular_name' => __('Solution', 'bordingdata'),
        'all_items' => __('All solutions', 'bordingdata'),
        'add_new' => __('Add New', 'bordingdata'),
        'add_new_item' => __('Add New solution', 'bordingdata'),
        'edit' => __( 'Edit', 'bordingdata' ),
        'edit_item' => __('Edit Post Types', 'bordingdata'),
        'new_item' => __('New Post Type', 'bordingdata'),
        'view_item' => __('View Post Type', 'bordingdata'),
        'search_items' => __('Search Post Type', 'bordingdata'),
        'not_found' =>  __('Nothing found in the Database.', 'bordingdata'),
        'not_found_in_trash' => __('Nothing found in Trash', 'bordingdata'),
        'parent_item_colon' => ''
      ),
      'description' => __( 'This is the example solution post type', 'bordingdata' ),
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 8,
      'menu_icon' => 'dashicons-smiley',
      'rewrite' => array( 'slug' => 'solution', 'with_front' => false ),
      'has_archive' => 'solution',
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'solution-fields', 'comments', 'revisions', 'sticky')
    )
  );
}

add_action( 'init', 'solution');