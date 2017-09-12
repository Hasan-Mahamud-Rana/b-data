<?php
function joints_register_sidebars() {
	register_sidebar(array(
	'id' => 'sidebar',
	'name' => __('Sidebar', 'bordingweb'),
	'description' => __('The first (primary) sidebar.', 'bordingweb'),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="widgettitle">',
	'after_title' => '</h4>',
	));
	register_sidebar(array(
	'id' => 'offcanvas-widgets',
	'name' => __('Offcanvas', 'bordingweb'),
	'description' => __('The offcanvas sidebar.', 'bordingweb'),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="widgettitle" style="display:none;">',
	'after_title' => '</h4>',
	));
	register_sidebar(array(
	'id' => 'footertop1-widgets',
	'name' => __( 'Footer Top 1 widgets', 'bordingweb' ),
	'description' => __( 'Drag widgets to this footer top container', 'bordingweb' ),
	'before_widget' => '<div id="%1$s" class="small-12 widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
	'id' => 'footertop2-widgets',
	'name' => __( 'Footer Top 2 widgets', 'bordingweb' ),
	'description' => __( 'Drag widgets to this footer top container', 'bordingweb' ),
	'before_widget' => '<div id="%1$s" class="small-12 widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
	'id' => 'footertop3-widgets',
	'name' => __( 'Footer Top 3 widgets', 'bordingweb' ),
	'description' => __( 'Drag widgets to this footer top container', 'bordingweb' ),
	'before_widget' => '<div id="%1$s" class="small-12 widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
	'id' => 'footertop4-widgets',
	'name' => __( 'Footer Top 4 widgets', 'bordingweb' ),
	'description' => __( 'Drag widgets to this footer top container', 'bordingweb' ),
	'before_widget' => '<div id="%1$s" class="small-12 widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
	'id' => 'social-widgets',
	'name' => __( 'social widgets', 'bordingweb' ),
	'description' => __( 'Drag widgets to this footer container', 'bordingweb' ),
	'before_widget' => '<div id="%1$s" class="small-6 columns white-text widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
	'id' => 'footerlocation-widgets',
	'name' => __( 'Location widgets', 'bordingweb' ),
	'description' => __( 'Drag widgets to this footer container', 'bordingweb' ),
	'before_widget' => '<div id="%1$s" class="small-6 columns text-right widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h6 class="f3" style="display:none;">',
	'after_title' => '</h6>',
	));
	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointswp'),
		'description' => __('The second (secondary) sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!