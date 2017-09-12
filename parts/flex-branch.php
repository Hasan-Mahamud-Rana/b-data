<?php


$branchFullwidth = get_sub_field('flex_branch_full_width');
$branchBgColor = get_sub_field('flex_branch_bg_color');
$branchPadding = get_sub_field('flex_branch_padding');
$branchMargin = get_sub_field('flex_branch_margin');

if($branchBgColor):
  $branchBgColor = "background-color:" . $branchBgColor;
else:
  $branchBgColor = "";
endif;

$branchTextColor = get_sub_field('flex_branch_text_color');

echo '<div class="branch ' . $branchPadding . ' ' . $branchMargin . '" style="' . $branchBgColor . '">';
  echo '<div class="' . $branchFullwidth . ' row" >';
    echo '<div class="small-12 small-centered medium-12 medium-centered large-9 large-centered text-center '. $branchTextColor .'">';

      echo '<div class="small-12 columns">';
        if( get_sub_field('flex_branch_title') ):
        echo '<h1 class="lite primary-color '. $branchTextColor .'">' . get_sub_field('flex_branch_title') . '</h1>';
        endif;
        if( get_sub_field('flex_branch_sub_title') ):
        echo '<h2>' . get_sub_field('flex_branch_sub_title') . '</h2>';
        endif;
      echo '</div>';
      
      echo '<div class="row small-up-3">';
        if(get_sub_field('flex_branch_list')):
        while(has_sub_field('flex_branch_list')):
        echo '<div class="column column-block">';
          $post_object = get_sub_field('flex_branch_sub_post_link');
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