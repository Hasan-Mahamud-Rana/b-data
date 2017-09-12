<?php

function theme_support() {

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(125, 125, true);
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5',
	         array(
	         	'comment-list',
	         	'comment-form',
	         	'search-form',
	         )
	);

 add_theme_support( 'post-formats',
		array(
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat'
		)
	);

	$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 1200 );

}
add_action( 'after_setup_theme', 'theme_support' );

function excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'excerpt_support_for_pages' );

function pagination($pages = '', $range = 1) {
     $showitems = ($range * 1)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '') {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages) {
             $pages = 1;
         }
     }

     if(1 != $pages) {
         echo "<div class=\"pagination\">";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&laquo; Tidligere</a>";

         for ($i=1; $i <= $pages; $i++) {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Næste &raquo;</a>";
         echo "</div>\n";
     }
}
add_action( 'init', 'blockusers_init' );
  function blockusers_init() {
    if ( is_user_logged_in() ) {
        if ( is_admin() && ! current_user_can( 'administrator' ) &&
          ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
          wp_redirect( home_url() );
        exit;
    }
  }
}
 
/* Add a custom user role
$result = add_role( 'client', __('Client' ),
  array(
    'read' => true, // true allows this capability
    'edit_posts' => false, // Allows user to edit their own posts
    'edit_pages' => false, // Allows user to edit pages
    'edit_others_posts' => false, // Allows user to edit others posts not just their own
    'create_posts' => false, // Allows user to create new posts
    'manage_categories' => false, // Allows user to manage post categories
    'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
    'edit_themes' => false, // false denies this capability. User can’t edit your theme
    'install_plugins' => false, // User cant add new plugins
    'update_plugin' => false, // User can’t update any plugins
    'update_core' => false // user cant perform core updates
  )
);
*/