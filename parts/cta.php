<?php
echo '<div class="cta-panel medium-tbpadding">';
	echo '<div class="row" >';
		echo '<div class="small-12 columns text-center">';
			if( get_field('cta_title') ):
			echo '<h1 class="lite">' . get_field('cta_title') . '</h1>';
			endif;
			$cta_link = get_field('cta_link');
			$cta_button_text = get_field('cta_button_text');
			if( $cta_link ):
			echo '<a class="button primary-bg-color" href="' . $cta_link . '"> ' . $cta_button_text . '</a>';
			endif;
		echo '</div>';
	echo '</div>';
echo '</div>';