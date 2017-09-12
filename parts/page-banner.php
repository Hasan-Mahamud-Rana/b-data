<?php
echo '<div class="full-width">';
  while ( have_posts() ) : the_post();
  $page_banner_image = get_field('page_banner_image');
  if($page_banner_image):
    $page_banner_image = "background-image: url(" . $page_banner_image ."); ";
  else:
    $page_banner_image = "";
  endif;
  echo '<div class="full-width-banner" style="height:605px; ' . $page_banner_image . '">';
    echo '<div class="row">';
      echo '<div class="small-12 medium-7 large-6 columns pageBannerContent white-text">';
        if( get_field('page_banner_title') ):
        echo '<h1 class="lite white-text largeheading">' . get_field('page_banner_title') . '</h1>';
        endif;
        if( get_field('page_banner_sub_title') ):
        echo '<h2>' . get_field('page_banner_sub_title') .'</h2>';
        endif;
      echo '</div>';
      endwhile;
    echo '</div>';
  echo '</div>';
echo '</div>';