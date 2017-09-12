<?php
echo '<form role="search" method="get" class="search-form" action="' . home_url( '/' ) . '">';
 	echo '<input type="submit" class="search-submit show-for-small-only" value="" />';
 	echo '<input type="search" class="search-field" placeholder="' . esc_attr_x( 'Hvad leder du efter?', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label' ) . '" />';
	echo '<span class="clear"></span>';
echo '</form>';