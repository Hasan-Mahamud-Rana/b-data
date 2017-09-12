<?php
/*
Template Name: Search Page
*/
get_header();
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
  $query_split = explode("=", $string);
  $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>

<!--Search content goes here -->

<div class="row searchContent medium-tbpadding">
  <div class="small-12 columns" role="main">
  <?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
echo '<div class="row search">';
  echo '<article id="post-' . get_the_ID() . '" class="'. join( ' ', get_post_class() ) .'">';
    echo '<div class="small-12 columns" data-equalizer="search">';
      echo '<div class="columns white blogBox">';
        echo '<div class="small-12 medium-4 large-3 columns">';
          $blogImage = "background-image: url(" . wp_get_attachment_url( get_post_thumbnail_id($post->ID)) .")";
          echo '<a href="' . get_the_permalink() . '">';
            echo '<div class="background cover" style="' . $blogImage . '" >';
              echo '<div data-equalizer-watch="search">';
              echo '</div>';
            echo '</div>';
          echo '</a>';
        echo '</div>';
        echo '<div class="small-12 medium-8 large-9 columns" data-equalizer-watch="search">';
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
  echo '</article>';
echo '</div>';
endwhile;
echo '<div class="row navigation text-center small-tbmargin">';
  echo '<div class="small-12 columns">';
    if (function_exists("pagination")) {
    pagination($query->max_num_pages);
    }
  echo '</div>';
echo '</div>';
wp_reset_postdata();
else :
    ?>
    <h4 class="srch"><?php _e( 'Beklager, intet blev fundet med dine søgekriterier. <br/>
Vil du prøve igen?' ); ?></h4>
    <div class="row">
      <div class="small-12 columns CustomSearch" role="main">
        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
          <div class="input-group">
            <input type="search"
            class="input-group-field search-text-field"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>"
            name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
            <div class="input-group-button">
              <input type="submit" class="search-submit button" value="Search">
            </div>
          </div>
        </form>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>
<?php
global $wp_query;
$total_results = $wp_query->found_posts;
get_footer();