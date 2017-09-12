<?php
echo '<div class="branch white medium-tbpadding">';
  echo '<div class="row ">';
    echo '<div class="small-12 small-centered medium-12 medium-centered  large-9 large-centered text-center">';
      echo '<div class="small-12 columns">';
        if( get_field('brancher_title') ):
        echo '<h1 class="lite primary-color">' . get_field('brancher_title') . '</h1>';
        endif;
        if( get_field('brancher_sub_title') ):
        echo '<h2>' . get_field('brancher_sub_title') . '</h2>';
        endif;
      echo '</div>';
echo '<div class="row small-up-3">';

      if(get_field('brancher_list')):
      while(has_sub_field('brancher_list')):
      echo '<div class="column column-block">';
        $post_object = get_sub_field('brancher_sub_post_link');
        if( $post_object ):
        // override $post
        $post = $post_object;
        setup_postdata( $post );
        echo '<a href="' . get_the_permalink() . '">';
          echo '<div class="sub_post_link small-tbpadding">';
            echo '<img src="' . wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) . '"/>';
            the_title('<h4>', '</h4>');
          echo '</div>';
        echo '</a>';
        wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
        endif;
      echo '</div>';
      endwhile;
      endif;

echo '</div>';
    echo '</div>';
  echo '</div>';
echo '</div>';