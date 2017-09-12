<?php
$galleryFullwidth = get_sub_field('flex_gallery_full_width');
$galleryBgColor = get_sub_field('flex_gallery_bg_color');
$galleryPadding = get_sub_field('flex_gallery_padding');
$galleryMargin = get_sub_field('flex_gallery_margin');

if($galleryBgColor):
  $galleryBgColor = "background-color:" . $galleryBgColor;
else:
  $galleryBgColor = "";
endif;

echo '<div class="gallery-panel ' . $galleryPadding . ' ' . $galleryMargin . '" style="' . $galleryBgColor . '">';
  echo '<div class="' . $galleryFullwidth . ' row" >';
    echo '<div class="large-12 text-center">';
      if( get_sub_field('flex_gallery_title') ):
        echo '<h1 class="lite">' . get_sub_field('flex_gallery_title') . '</h1>';
      endif;
      $images = get_sub_field('flex_gallery_images');
      if( $images ):
        echo '<div class="row small-up-2 medium-up-3 large-up-4 columns" data-equalizer data-equalizer-mq="large-up">';
          foreach( $images as $image ):
            echo '<div class="column column-block marginBottom" data-equalizer-watch>';
              echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
            echo '</div>';
          endforeach;
        echo '</div>';
      endif;
    echo '</div>';
  echo '</div>';
echo '</div>';