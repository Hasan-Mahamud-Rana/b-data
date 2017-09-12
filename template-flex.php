<?php
/*
Template Name: Flex
*/
get_header();  
	get_template_part( 'parts/loop', 'flex' );



if( have_rows('page_unit') ):

    while ( have_rows('page_unit') ) : the_row();

        if( get_row_layout() == 'branch' ):

			get_template_part( 'parts/flex', 'branch' );
		
		elseif( get_row_layout() == 'page_banner' ): 

			get_template_part( 'parts/flex', 'banner' );

		elseif( get_row_layout() == 'promo' ): 

			get_template_part( 'parts/flex', 'promo' );

		elseif( get_row_layout() == 'image_gallery' ): 

			get_template_part( 'parts/flex', 'gallery' );
		
		elseif( get_row_layout() == 'post_block' ): 

			get_template_part( 'parts/flex', 'post-block' );
        

		elseif( get_row_layout() == 'call_to_action' ): 

			get_template_part( 'parts/flex', 'cta' );
        endif;

    endwhile;

else :

    // no layouts found

endif;



get_footer();