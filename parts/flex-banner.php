<?php

$bannerFullwidth = get_sub_field('flex_banner_full_width');
$bannerBgColor = get_sub_field('flex_banner_bg_color');
$bannerPadding = get_sub_field('flex_banner_padding');
$bannerMargin = get_sub_field('flex_banner_margin');

if($bannerBgColor):
  $bannerBgColor = "background-color:" . $bannerBgColor;
else:
  $bannerBgColor = "";
endif;

$bannerTextColor = get_sub_field('flex_banner_text_color');
$bannerBgImagePosition = get_sub_field('flex_banner_bg_image_position');
$bannerBgImageSize = get_sub_field('flex_banner_bg_image_size');

  while ( have_posts() ) : the_post();
  $flex_banner_image = get_sub_field('flex_banner_image');
  if($flex_banner_image):
    $flex_banner_image = "background-image: url(" . $flex_banner_image ."); ";
  else:
    $flex_banner_image = "";
  endif;
  if($bannerBgImagePosition == "panel") {
    echo '<div class="full-width-banner ' . $bannerBgImageSize . '' . $bannerPadding . ' ' . $bannerMargin . '" style="height:605px; ' . $flex_banner_image . ' ' . $bannerBgColor . '">';
    echo '<div class="' . $bannerFullwidth . ' row" >';
  } else {
    echo '<div class="full-width-banner ' . $bannerPadding . ' ' . $bannerMargin . '" style="height:605px;">';
    echo '<div class="' . $bannerFullwidth . ' row background ' . $bannerBgImageSize . '" style="' . $flex_banner_image . ' ' . $bannerBgColor . '">';
  }
      echo '<div class="small-12 medium-7 large-6 columns pageBannerContent '. $bannerTextColor .'">';
        if( get_sub_field('flex_banner_title') ):
          echo '<h1 class="lite largeheading '. $bannerTextColor .'">' . get_sub_field('flex_banner_title') . '</h1>';
        endif;
        if( get_sub_field('flex_banner_sub_title') ):
          echo '<h2>' . get_sub_field('flex_banner_sub_title') .'</h2>';
        endif;
      echo '</div>';
    echo '</div>';
  echo '</div>';
  endwhile;