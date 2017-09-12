<?php

$promoFullwidth = get_sub_field('flex_promo_full_width');
$promoBgColor = get_sub_field('flex_promo_bg_color');
$promoPadding = get_sub_field('flex_promo_padding');
$promoMargin = get_sub_field('flex_promo_margin');

if($promoBgColor):
  $promoBgColor = "background-color:" . $promoBgColor;
else:
  $promoBgColor = "";
endif;

$promoTextColor = get_sub_field('flex_promo_text_color');

echo '<div class="promo-panel ' . $promoPadding . ' ' . $promoMargin . '" style="' . $promoBgColor . '">';
	echo '<div class="' . $promoFullwidth . ' row" >';
		echo '<div class="small-12 columns text-center '. $promoTextColor .'">';
			if( get_sub_field('flex_promo_title') ):
				echo '<h1 class="lite '. $promoTextColor .'">' . get_sub_field('flex_promo_title') . '</h1>';
			endif;
			if( get_sub_field('flex_promo_text') ):
        echo '<h2>' . get_sub_field('flex_promo_text') .'</h2>';
      endif;
		echo '</div>';
	echo '</div>';
echo '</div>';