<?php
echo '<div class="contact medium-tbpadding">';
  while ( have_posts() ) : the_post();
  get_template_part( 'parts/content', 'hbody' );
  endwhile;
  echo '<div class="contact-page">';
    echo '<div class="row" data-equalizer="contact">';
      echo '<div class="small-12 columns" >';
        $query = new WP_Query( 'order=asc&category_name=kontakt-da&post_status=publish&paged='. get_query_var('paged'));
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        $mapImage = "background-image: url(" . wp_get_attachment_url( get_post_thumbnail_id($post->ID)) .")";
        echo '<div class="small-12 background cover contactblock marginBottom" style="' . $mapImage . '">';
          echo '<div class="small-12 medium-5 large-4 white-text" >';
            echo '<div class="contact-text-block" data-equalizer-watch="contact">';
              the_title('<h3>', '</h3>');
              the_content();
            echo '</div>';
          echo '</div>';
        echo '</div>';
        endwhile;
        wp_reset_postdata();
        else :
        _e( 'Sorry, no posts matched your criteria.' );
        endif;
      echo '</div>';
    echo '</div>';
  echo '</div>';
echo '</div>';