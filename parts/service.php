<?php
echo '<div class="service white medium-tbpadding">';
  echo '<div class="row ">';
    echo '<div class="small-12 text-center">';
      echo '<div class="small-12 columns">';
        if( get_field('service_title') ):
        echo '<h1 class="lite primary-color">' . get_field('service_title') . '</h1>';
        endif;
        if( get_field('service_sub_title') ):
        echo '<h2>' . get_field('service_sub_title') . '</h2>';
        endif;
      echo '</div>';
      if(get_field('service_list')):
      while(has_sub_field('service_list')):
      echo '<div class="small-12 medium-4 large-4 columns">';
        $post_object = get_sub_field('service_sub_post_link');
        if( $post_object ):
        // override $post
        $post = $post_object;
        setup_postdata( $post );
           echo '<div class="small-tbpadding">';
            echo '<img src="' . wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) . '"/>';
            the_title('<h2>', '</h2>');
            echo '<div class="text-left">';
              the_content();
            echo '</div>';
          echo '</div>';
         wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
        endif;
      echo '</div>';
      endwhile;
      endif;
    echo '</div>';
  echo '</div>';
echo '</div>';