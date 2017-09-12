<?php
echo '<div class="promo-panel medium-tbpadding">';
	echo '<div class="row" >';
		echo '<div class="small-12 columns text-center">';
			if( get_field('promo_title') ):
			echo '<h1 class="lite">' . get_field('promo_title') . '</h1>';
			endif;
			if( get_field('promo_text') ):
        echo '<h2>' . get_field('promo_text') .'</h2>';
        endif;
		echo '</div>';
	echo '</div>';
echo '</div>';