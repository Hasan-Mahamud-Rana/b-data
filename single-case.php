<?php get_header(); ?>
<!--single content goes here case-->
<?php 
global $post; 
$postID = get_the_ID();
echo '<div class="medium-tbpadding">';
  echo '<div class="row">';
    while ( have_posts() ) : the_post();
      echo '<article id="post-' . get_the_ID() . '" class="'. join( ' ', get_post_class() ) .'">';
        echo '<div id="' . get_the_ID() . '" class="small-12 columns content">';
          if ( has_post_thumbnail() ) :
          echo '<div class="post-thumb">';
            the_post_thumbnail( '', array('class' => 'th') );
          echo '</div>';
          endif;
          the_title('<h1 class="lite"><a href="' . get_the_permalink() . '" rel="bookmark" title="' . get_the_title() . '">','</a></h1>');
          the_content();
        echo '</div>';
        echo '<div class="post-footer">';
          wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'bordingweb' ), 'after' => '</p></nav>' ) );
          the_tags();
        echo '</div>';
      echo '</article>';
  endwhile;
    echo '<div class="small-12 columns case-relevant"><hr></div>';
  echo '</div>';
echo '</div>'; 

echo '<div class="relevant-case-panel">';
  echo '<div class="row" >';
    echo '<div class="small-12 text-center">';
      $query = new WP_Query( array( 'post__not_in' => array($postID),'order' => 'ASC', 'post_type' => 'case', 'post_status' => 'publish'));
      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
      echo '<div class="small-12 medium-4 large-4 columns cc">';
        echo '<a href="' . get_the_permalink() . '">';
          the_post_thumbnail( array(320,242) );
        echo '</a>';
        echo '<div class="panel white">';
          if (strlen($post->post_title) > 39) {
            echo '<h3><a href="' . get_the_permalink() . '" rel="bookmark" title="' . get_the_title() . '">';
              echo substr(the_title($before = '', $after = '', FALSE), 0, 39) . '...';
            echo '</a></h3>';
          } else {
          the_title('<h3><a href="' . get_the_permalink() . '" rel="bookmark" title="' . get_the_title() . '">','</a></h3>');
          }
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
  get_footer();
?>