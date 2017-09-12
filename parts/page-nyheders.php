<?php
echo '<div class="blog medium-tbpadding">';
  while ( have_posts() ) : the_post();
  get_template_part( 'parts/content', 'hbody' );
  endwhile;
  echo '<div class="nyheder-panel">';
    $query = new WP_Query( 'order=desc&post_type=nyheder&posts_per_page=10&post_status=publish&paged='. get_query_var('paged'));
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
    echo '<div class="row">';
      echo '<div class="small-12 columns" data-equalizer="news">';
        echo '<div class="columns white blogBox">';
          echo '<div class="small-12 medium-4 large-3 columns">';
            $blogImage = "background-image: url(" . wp_get_attachment_url( get_post_thumbnail_id($post->ID)) .")";
            echo '<a href="' . get_the_permalink() . '">';
              echo '<div class="background cover" style="' . $blogImage . '" >';
                echo '<div data-equalizer-watch="news">';
                echo '</div>';
              echo '</div>';
            echo '</a>';
          echo '</div>';
          echo '<div class="small-12 medium-8 large-9 columns" data-equalizer-watch="news">';
            the_title('<h3><a href="' . get_the_permalink() . '" rel="bookmark" title="' . get_the_title() . '">','</a></h3>');
            echo '<p class="time">';
              the_time('F j, Y');
            echo '</p>';
            the_excerpt();
            echo '<p><a class="readmore primary-color" href="' . get_the_permalink() . '" rel="bookmark" title="' . get_the_title() . '">';
              echo "Læs mere her";
            echo '</a></p>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
    echo '</div>';
    endwhile;
    echo '<div class="row navigation text-center">';
      echo '<div class="small-12 columns">';
        if (function_exists("pagination")) {
        pagination($query->max_num_pages);
        }
      echo '</div>';
    echo '</div>';
    wp_reset_postdata();
    else :
    _e( 'Beklager, ingen indlæg matchede dine kriterier.' );
    endif;
  echo '</div>';
echo '</div>';