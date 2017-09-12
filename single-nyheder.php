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
          echo '<div class="small-marginBottom"><span class="time white">';
            the_time('F j, Y');
          echo '</span></div>';

        if ( false && has_post_thumbnail() ) :
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
  echo '</div>';
echo '</div>';
  get_footer();
?>