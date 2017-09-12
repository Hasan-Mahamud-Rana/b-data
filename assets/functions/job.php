<?php

function job()
{
    register_post_type('job', array(
        'labels' => array(
            'name' => __('Jobs', 'bordingdata'),
            'singular_name' => __('Job', 'bordingdata'),
            'all_items' => __('All jobs', 'bordingdata'),
            'add_new' => __('Add New', 'bordingdata'),
            'add_new_item' => __('Add New job Type', 'bordingdata'),
            'edit' => __('Edit', 'bordingdata'),
            'edit_item' => __('Edit Post Types', 'bordingdata'),
            'new_item' => __('New Post Type', 'bordingdata'),
            'view_item' => __('View Post Type', 'bordingdata'),
            'search_items' => __('Search Post Type', 'bordingdata'),
            'not_found' => __('Nothing found in the Database.', 'bordingdata'),
            'not_found_in_trash' => __('Nothing found in Trash', 'bordingdata'),
            'parent_item_colon' => ''
        ),
        'description' => __('This is the example job post type', 'bordingdata'),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_position' => 8,
        'menu_icon' => 'dashicons-businessman',
        'rewrite' => array(
            'slug' => 'job',
            'with_front' => false
        ),
        'has_archive' => 'job',
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt',
            'trackbacks'
        )
    ));

    #register_taxonomy_for_object_type('category', 'job');
    #register_taxonomy_for_object_type('post_tag', 'job');

}

add_action('init', 'job');

register_taxonomy('job_cat', array(
    'job'
), array(
    'hierarchical' => true,
    'labels' => array(
        'name' => __('Job categories', 'bordingdata'),
        'singular_name' => __('Job category', 'bordingdata'),
        'search_items' => __('Search job Categories', 'bordingdata'),
        'all_items' => __('All job Categories', 'bordingdata'),
        'parent_item' => __('Parent job Category', 'bordingdata'),
        'parent_item_colon' => __('Parent job Category:', 'bordingdata'),
        'edit_item' => __('Edit job Category', 'bordingdata'),
        'update_item' => __('Update job Category', 'bordingdata'),
        'add_new_item' => __('Add New job Category', 'bordingdata'),
        'new_item_name' => __('New job Category Name', 'bordingdata')
    ),
    'show_admin_column' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array(
        'slug' => 'job-slug'
    )
));

register_taxonomy('job_tag', array(
    'job'
), array(
    'hierarchical' => false,
    'labels' => array(
        'name' => __('Job tags', 'bordingdata'),
        'singular_name' => __('Job tag', 'bordingdata'),
        'search_items' => __('Search job Tags', 'bordingdata'),
        'all_items' => __('All job Tags', 'bordingdata'),
        'parent_item' => __('Parent job Tag', 'bordingdata'),
        'parent_item_colon' => __('Parent job Tag:', 'bordingdata'),
        'edit_item' => __('Edit job Tag', 'bordingdata'),
        'update_item' => __('Update job Tag', 'bordingdata'),
        'add_new_item' => __('Add New job Tag', 'bordingdata'),
        'new_item_name' => __('New job Tag Name', 'bordingdata')
    ),
    'show_admin_column' => true,
    'show_ui' => true,
    'query_var' => true
));