<?php
/*
Template Name: Customer
*/
get_header();

$current_user = wp_get_current_user();
$current_user_role = $current_user->roles[0];

#var_dump($current_user_role);

if( is_user_logged_in()
&& (strcmp($current_user_role, "subscriber") == 0 || strcmp($current_user_role, "administrator") == 0)) {
	if (have_posts()) : 
		while (have_posts()) : the_post();
			get_template_part( 'parts/loop', 'customer' );
			comments_template();
		endwhile;
			joints_page_navi();
	else :
		get_template_part( 'parts/content', 'missing' );
	endif;
} else {
	echo '<div class="row">';
		echo '<div class="small-4 small-centered large-tbpadding columns">';
			echo '<h2>Customer Login Area</h2>';
			wp_login_form();
		echo '</div>';
	echo '</div>';
}
get_footer();