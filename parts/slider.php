<div class="homepage-article">
  <div class="row showcase">
  <div class="small-12">
    <div class="slider">
      <?php $query = new WP_Query( 'order=asc&post_type=slide&p=1046&post_status=publish&paged='. get_query_var('paged')); ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="large-12 medium-12 columns fpbdslider" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)" data-equalizer>
        <div class="row" data-equalizer-watch>
        <div class="small-12 large-6 columns">
        <h1><?php the_title(); ?></h1>
        <h4><?php echo get_the_excerpt(); ?></h4>
        </div>
        <div class="small-12 large-6 columns">&nbsp;</div>
        </div>
      </div>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
  </div>
  </div>
</div>
</div>