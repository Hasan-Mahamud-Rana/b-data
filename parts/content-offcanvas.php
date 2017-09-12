<?php
echo '<div class="off-canvas position-left" id="off-canvas" data-off-canvas>';
	joints_off_canvas_nav();
	echo '<div class="mobile search columns">';
		get_sidebar( 'offcanvas' );
	echo '</div>';
echo '</div>';