<?php 
$bannerImage = "background-image: url(" . wp_get_attachment_url( get_post_thumbnail_id($post->ID)) .")";
echo '<div class="full-width-banner" style="height:605px; ' . $bannerImage . '">';
echo '</div>';
echo '<div id="content" class="row">';
	echo '<main id="main" class="small-12 columns" role="main">';
		echo '<article id="post-' . get_the_ID() . '" class="'. join( ' ', get_post_class() ) .'">';
			the_title('<h1 class="lite">','</h1>');
			echo '<section class="content" itemprop="articleBody">';
				the_content();
			echo '</section>';
		echo '</article>';
	echo '</main>';
echo '</div>';