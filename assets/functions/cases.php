<?php

function cases() {
  register_post_type( 'case',
    array(
      'labels' => array(
        'name' => __('Cases', 'bordingdata'),
        'singular_name' => __('Case', 'bordingdata'),
        'all_items' => __('All cases', 'bordingdata'),
        'add_new' => __('Add New', 'bordingdata'),
        'add_new_item' => __('Add New case', 'bordingdata'),
        'edit' => __( 'Edit', 'bordingdata' ),
        'edit_item' => __('Edit Post Types', 'bordingdata'),
        'new_item' => __('New Post Type', 'bordingdata'),
        'view_item' => __('View Post Type', 'bordingdata'),
        'search_items' => __('Search Post Type', 'bordingdata'),
        'not_found' =>  __('Nothing found in the Database.', 'bordingdata'),
        'not_found_in_trash' => __('Nothing found in Trash', 'bordingdata'),
        'parent_item_colon' => ''
      ),
      'description' => __( 'This is the example case post type', 'bordingdata' ),
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 8,
      'menu_icon' => 'dashicons-portfolio',
      'rewrite' => array( 'slug' => 'case', 'with_front' => false ),
      'has_archive' => 'case',
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')
    )
  );
}

add_action( 'init', 'cases');