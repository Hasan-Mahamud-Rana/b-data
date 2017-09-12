<?php

$pbsinglePostBgColor = get_sub_field('flex_post_bg_color');
$pbpanel_padding = get_sub_field('flex_panel_padding');
$pbpanel_margin = get_sub_field('flex_panel_margin');
$pbcontentPosition = get_sub_field('flex_content_position');
$panelBgImagePosition = get_sub_field('flex_panel_bg_image_position');
$pbcontentWidth = (int)get_sub_field('flex_content_width');
$pbimageWidth = 12 - $pbcontentWidth;
if($pbsinglePostBgColor):
  $pbsinglePostBgColor = "; background-color:" . $pbsinglePostBgColor;
else:
  $pbsinglePostBgColor = "";
endif;

$pbpost_object = get_sub_field('flex_select_your_post');
$pblink_text = get_sub_field('flex_read_more_link_text');

if( $pbpost_object ):
  $post = $pbpost_object;
  setup_postdata( $post );
  if($pbcontentPosition == "left") {
    $pbpostBgImage = "background-image: url(" . wp_get_attachment_url( get_post_thumbnail_id($post->ID)) .")";
    $panel_bg_image_size = get_sub_field('flex_panel_bg_image_size');
    if($panelBgImagePosition == "panel") {
      echo '<div class="single-post-panel ' . $pbpanel_padding . ' ' . $pbpanel_margin . ' background ' . $panel_bg_image_size . '" style="' . $pbpostBgImage . $pbsinglePostBgColor . '">';
    } else {
      echo '<div class="single-post-panel ' . $pbpanel_padding . ' ' . $pbpanel_margin . ' background ' . $panel_bg_image_size . '" style="' . $pbsinglePostBgColor . '">';
    }
    
    $pbpanel_full_width = get_sub_field('flex_panel_full_width');
    $pbtext_color = get_sub_field('flex_text_color');
    echo '<div class="' . $pbpanel_full_width . ' row" data-equalizer="single" data-equalize-on-stack="false">';
      echo '<div class="small-12 medium-6 large-'. $pbcontentWidth .' columns '. $pbtext_color .'" data-equalizer-watch="single">';
        the_title('<h2>','</h2>');
        the_excerpt();
        echo '<a class="button primary-bg-color" href="' . get_the_permalink() . '"> ' . $pblink_text . '</a>';
      echo '</div>';
      echo '<div class="small-12 medium-6 large-'. $pbimageWidth .' columns">';
        if($panelBgImagePosition == "panel") {
        echo '<div class="' . $panel_bg_image_size . ' show-for-large">';
          } else {
          echo '<div class="background ' . $panel_bg_image_size . '" style="' . $pbpostBgImage . '" >';
            }
            echo '<div data-equalizer-watch="single">';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
    echo '</div>';
    } elseif($pbcontentPosition == "right") {
      $panel_bg_image_size = get_sub_field('flex_panel_bg_image_size');
      $pbpostBgImage = "background-image: url(" . wp_get_attachment_url( get_post_thumbnail_id($post->ID)) .")";
      if($panelBgImagePosition == "panel") {
        echo '<div class="single-post-panel ' . $pbpanel_padding . ' ' . $pbpanel_margin . ' background ' . $panel_bg_image_size . '" style="' . $pbpostBgImage . $pbsinglePostBgColor . '">';
      } else {
        echo '<div class="single-post-panel ' . $pbpanel_padding . ' ' . $pbpanel_margin . ' background ' . $panel_bg_image_size . '" style="' . $pbsinglePostBgColor . '">';
      }
      $pbpanel_full_width = get_sub_field('flex_panel_full_width');
        echo '<div class="' . $pbpanel_full_width . ' row" data-equalizer="single" data-equalize-on-stack="false">';
      $pbpostBgImage = "background-image: url(" . wp_get_attachment_url( get_post_thumbnail_id($post->ID)) .")";
        echo '<div class="small-12 medium-6 large-'. $pbimageWidth .' columns">';
      if($panelBgImagePosition == "panel") {
        echo '<div class="' . $panel_bg_image_size . ' show-for-large">';
      } else {
        echo '<div class="background ' . $panel_bg_image_size . '" style="' . $pbpostBgImage . '" >';
      }
         echo '<div data-equalizer-watch="single">';
        echo '</div>';
      echo '</div>';
    echo '</div>';
      $pbtext_color = get_sub_field('flex_text_color');
        echo '<div class="small-12 medium-6 large-'. $pbcontentWidth .' columns ' . $pbtext_color . '" data-equalizer-watch="single">';
          the_title('<h2>','</h2>');
          the_excerpt();
          echo '<a class="button primary-bg-color" href="' . get_the_permalink() . '"> ' . $pblink_text . '</a>';
        echo '</div>';
      echo '</div>';
    echo '</div>';
  } else {
    echo '<div class="single-post-panel ' . $pbpanel_padding . ' ' . $pbpanel_margin . ' background text-center" style="' . $pbsinglePostBgColor . '">';
    $pbpanel_full_width = get_sub_field('flex_panel_full_width');
      echo '<div class="' . $pbpanel_full_width . ' row">';
        $pbtext_color = get_sub_field('flex_text_color');
          echo '<div class="small-12 columns ' . $pbtext_color . '">';
            the_title('<h2>','</h2>');
            the_excerpt();
          echo '<a class="button primary-bg-color" href="' . get_the_permalink() . '"> ' . $pblink_text . '</a>';
        echo '</div>';
      echo '</div>';
    echo '</div>';
  }
  wp_reset_postdata();
endif;