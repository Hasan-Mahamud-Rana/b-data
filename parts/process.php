<?php
echo '<div class="process medium-tbpadding">';
  echo '<div class="row" data-equalizer data-equalizer-mq="large-up">';
    echo '<div class="small-12">';
      echo '<div class="small-12 columns text-center">';
        if( get_field('process_title') ):
        echo '<h2>' . get_field('process_title') . '</h2>';
        endif;
        if( get_field('process_sub_title') ):
        echo '<h3>' . get_field('process_sub_title') . '</h3>';
        endif;
      echo '</div>';
      if(get_field('process_list')):
      while(has_sub_field('process_list')):
      echo '<div class="small-12 medium-6 large-6 columns" data-equalizer-watch>';
        $post_object = get_sub_field('process_sub_post_link');
        if( $post_object ):
        // override $post
        $post = $post_object;
        setup_postdata( $post );
           echo '<div class="small-tbpadding">';
            the_title('<h4><img src="' . wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) . '"/>', '</h4>');
              the_content();
          echo '</div>';
         wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
        endif;
      echo '</div>';
      endwhile;
      endif;
    echo '</div>';
  echo '</div>';
echo '</div>';