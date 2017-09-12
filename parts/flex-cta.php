<?php

$ctaFullwidth = get_sub_field('flex_cta_full_width');
$ctaBgColor = get_sub_field('flex_cta_bg_color');
$ctaPadding = get_sub_field('flex_cta_padding');
$ctaMargin = get_sub_field('flex_cta_margin');

if($ctaBgColor):
  $ctaBgColor = "background-color:" . $ctaBgColor;
else:
  $ctaBgColor = "";
endif;

$ctaTextColor = get_sub_field('flex_cta_text_color');

echo '<div class="cta-panel ' . $ctaPadding . ' ' . $ctaMargin . '" style="' . $ctaBgColor . '">';
	echo '<div class="' . $ctaFullwidth . ' row" >';
		echo '<div class="small-12 columns text-center '. $ctaTextColor .'">';
			if( get_sub_field('flex_cta_title') ):
				echo '<h1 class="lite '. $ctaTextColor .'">' . get_sub_field('flex_cta_title') . '</h1>';
			endif;
			$cta_link = get_sub_field('flex_cta_link');
			$cta_button_text = get_sub_field('flex_cta_button_text');
			if( $cta_link ):
				echo '<a class="button primary-bg-color" href="' . $cta_link . '">' . $cta_button_text . '</a>';
			endif;
		echo '</div>';
	echo '</div>';
echo '</div>';