<?php
function nyheder() {
  register_post_type( 'nyheder',
    array(
      'labels' => array(
        'name' => __('Nyheders', 'bordingdata'),
        'singular_name' => __('Nyheder', 'bordingdata'),
        'all_items' => __('All nyheders', 'bordingdata'),
        'add_new' => __('Add New', 'bordingdata'),
        'add_new_item' => __('Add New nyheder', 'bordingdata'),
        'edit' => __( 'Edit', 'bordingdata' ),
        'edit_item' => __('Edit Post Types', 'bordingdata'),
        'new_item' => __('New Post Type', 'bordingdata'),
        'view_item' => __('View Post Type', 'bordingdata'),
        'search_items' => __('Search Post Type', 'bordingdata'),
        'not_found' =>  __('Nothing found in the Database.', 'bordingdata'),
        'not_found_in_trash' => __('Nothing found in Trash', 'bordingdata'),
        'parent_item_colon' => ''
      ),
      'description' => __( 'This is the example nyheder post type', 'bordingdata' ),
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 8,
      'menu_icon' => 'dashicons-testimonial',
      'rewrite' => array( 'slug' => 'nyheder', 'with_front' => false ),
      'has_archive' => 'nyheder',
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')
    )
  );
}

add_action( 'init', 'nyheder');