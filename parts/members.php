<?php
echo '<div class="member white medium-tbpadding">';
  echo '<div class="row" data-equalizer data-equalizer-mq="large-up">';
    echo '<div class="small-12">';
      echo '<div class="small-12 columns text-center">';
        if( get_field('member_title') ):
        echo '<h1 class="lite">' . get_field('member_title') . '</h1>';
        endif;
        if( get_field('member_sub_title') ):
        echo '<h3>' . get_field('member_sub_title') . '</h3>';
        endif;
      echo '</div>';
      
      $item = (int)count( get_field('member_list') );
      if($item <= 4) {
      $item = (int)12/$item;
      } else {
      $item = 3;
      }
      if(get_field('member_list')):
      while(has_sub_field('member_list')):
      echo '<div class="small-12 medium-' . $item . ' large-' . $item . ' columns text-center" data-equalizer-watch>';
        $post_object = get_sub_field('member_link');
        if( $post_object ):
        // override $post
        $post = $post_object;
        setup_postdata( $post );
        echo '<div class="small-tbpadding">';
          echo '<img src="' . wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) . '"/>';
          the_title('<h5>', '</h5>');
          if( get_field('designation') ):
          $designation = get_field('designation');
          echo '<p>' . $designation . '</p>';
          endif;
          
          if( get_sub_field('grid_post_link') ):
          if( get_sub_field('grid_post_link_text') ):
          echo '<p><a href="' . get_permalink() . '"> ' . get_sub_field('grid_post_link_text') . '</a></p>';
          endif;
          endif;
        echo '</div>';
        wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
        endif;
      echo '</div>';
      endwhile;
      endif;
      echo '<div class="small-12 columns text-center">';
        if( get_field('quick_link') ):
        if( get_field('quick_link_text') ):
        echo '<a class="button primary-bg-color" href="' . get_field('quick_link') . '"> ' . get_field('quick_link_text') . '</a>';
        endif;
        endif;
      echo '</div>';
    echo '</div>';
  echo '</div>';
echo '</div>';