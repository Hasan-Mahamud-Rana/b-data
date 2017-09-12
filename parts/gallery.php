<?php
$panelBgColor = get_field('panel_bg_color');
if( $panelBgColor ):
if( get_field('gallery_title') ):
endif;
echo '<div class="gallery-panel medium-tbpadding" style="background-color:' . $panelBgColor . '">';
  else:
  if( get_field('gallery_title') ):
  echo '<div class="gallery-panel medium-tbpadding" >';
    endif;
    endif;
    if( get_field('gallery_title') ):
    echo '<div class="gallery-panel">';
      echo '<div class="row" >';
        echo '<div class="large-12 text-center">';
          echo '<h1 class="lite">' . get_field('gallery_title') . '</h1>';
          endif;
          $images = get_field('gallery_images');
          if( $images ):
          echo '<div class="row small-up-2 medium-up-3 large-up-4 columns" data-equalizer data-equalizer-mq="large-up">';
            foreach( $images as $image ):
            echo '<div class="column column-block marginBottom" data-equalizer-watch>';
              echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
            echo '</div>';
            endforeach;
          echo '</div>';
          endif;
          if( get_field('gallery_title') ):
        echo '</div>';
      echo '</div>';
    echo '</div>';
  echo '</div>';
endif;