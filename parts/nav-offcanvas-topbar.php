<?php
echo '<div class="row top-bar" id="top-bar-menu">';
	echo '<div class="top-bar-left float-left">';
	echo '<ul class="pill menu">';
			echo '<li class="pillIcon hide-for-large"><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>';
			echo '<li><a class="logo" href="' . home_url() . '"></a></li>';
		echo '</ul>';
	echo '</div>';
	echo '<div class="top-bar-right show-for-large">';
		joints_top_nav();
	echo '</div>';
echo '</div>';