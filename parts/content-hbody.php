<?php
  echo '<div class="row">';
    echo '<article id="post-' . get_the_ID() . '" class="'. join( ' ', get_post_class() ) .'">';
      echo '<div class="small-12 columns">';
        the_title('<h1 class="lite"><a href="' . get_the_permalink() . '" rel="bookmark" title="' . get_the_title() . '">','</a></h1>');
      echo '</div>';
      echo '<div class="small-12 columns case-text">';
        echo get_the_content();
      echo '</div>';
    echo '</article>';
   echo '</div>';