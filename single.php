<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
	get_template_part( 'parts/loop', 'archive' );
endwhile;
	joints_page_navi();
else :
	get_template_part( 'parts/content', 'missing' );
endif;
get_footer();