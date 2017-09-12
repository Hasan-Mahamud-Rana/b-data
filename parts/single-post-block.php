<?php
$panelBackgroundImage = get_field('panel_background_image');
$singlePostBgColor = get_field('single_post_bg_color');
$panel_padding = get_field('panel_padding');
$panel_margin = get_field('panel_margin');
$contentPosition = get_field('content_position');
$textColor = get_field('text_color');
$contentWidth = (int)get_field('content_width');
$imageWidth = 12 - $contentWidth;

  if($panelBackgroundImage):
    $panelBackgroundImage = "background-image: url(" . $panelBackgroundImage ."); ";
  else:
    $panelBackgroundImage = "";
  endif;
  if($singlePostBgColor):
    $singlePostBgColor = "background-color:" . $singlePostBgColor ;
  else:
    $singlePostBgColor = "";
  endif;
echo '<div class="single-post-panel ' . $panel_padding . ' ' . $panel_margin . '" style="' . $panelBackgroundImage . $singlePostBgColor . '">';
  $panel_full_width = get_field('panel_full_width');
  echo '<div class="' . $panel_full_width . ' row" data-equalizer data-equalizer-mq="large-up">';
    $post_object = get_field('post_link');
    $link_text=get_field('read_more_link_text');
    if( $post_object ):
    $post = $post_object;
    setup_postdata( $post );

    if($contentPosition == "left") {
       echo '<div class="small-12 medium-6 large-'. $contentWidth .' columns ' . $textColor . '" data-equalizer-watch>';
          the_title('<h1 class="lite">','</h1>');
          the_excerpt();
          echo '<a class="button primary-bg-color" href="' . get_the_permalink() . '"> ' . $link_text . '</a>';
        echo '</div>';
        $postBgImage = "background-image: url(" . wp_get_attachment_url( get_post_thumbnail_id($post->ID)) .")";
        echo '<div class="small-12 medium-6 large-'. $imageWidth .' columns background" style="' . $postBgImage . '" >';
          echo '<div data-equalizer-watch>';
          echo '</div>';
        echo '</div>';
    } elseif($contentPosition == "right") {
        $postBgImage = "background-image: url(" . wp_get_attachment_url( get_post_thumbnail_id($post->ID)) .")";
        echo '<div class="small-12 medium-6 large-'. $imageWidth .' columns background" style="' . $postBgImage . '" >';
          echo '<div data-equalizer-watch>';
          echo '</div>';
        echo '</div>';
        echo '<div class="small-12 medium-6 large-'. $contentWidth .' columns ' . $textColor . '" data-equalizer-watch>';
          the_title('<h1 class="lite">','</h1>');
          the_excerpt();
          echo '<a class="button primary-bg-color" href="' . get_the_permalink() . '"> ' . $link_text . '</a>';
        echo '</div>';
    } else {
      echo '<div class="small-12 columns ' . $textColor . ' text-center" data-equalizer-watch>';
          the_title('<h1 class="lite">','</h1>');
          the_excerpt();
          echo '<a class="button primary-bg-color" href="' . get_the_permalink() . '"> ' . $link_text . '</a>';
        echo '</div>';
    }
    wp_reset_postdata();
    endif;
  echo '</div>';
echo '</div>';