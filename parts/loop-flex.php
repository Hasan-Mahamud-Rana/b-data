<?php 
echo '<div class="full-width">';
  while ( have_posts() ) : the_post();
  $bannerImage = "background-image: url(" . wp_get_attachment_url( get_post_thumbnail_id($post->ID)) .")";
  echo '<div class="background" style="height:605px; ' . $bannerImage . '">';
    echo '<div class="row">';
      echo '<article id="post-' . get_the_ID() . '" class="'. join( ' ', get_post_class() ) .'">';
        echo '<div class="small-12 medium-7 large-6 columns bannerContent">';
          the_title('<h1 class="lite largeheading">', '</h1>');
          echo '<h2>' . get_the_content() .'</h2>';
        echo '</div>';
      echo '</article>';
      endwhile;
    echo '</div>';
  echo '</div>';
echo '</div>';