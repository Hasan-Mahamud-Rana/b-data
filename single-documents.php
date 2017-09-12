<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
echo '<div id="content" class="row">';
	echo '<main id="main" class="small-12 columns" role="main">';
		echo '<article id="post-' . get_the_ID() . '" class="'. join( ' ', get_post_class() ) .'">';
			the_title('<h1 class="lite">','</h1>');
			echo '<section class="content" itemprop="articleBody">';
				the_content();
				$file = get_field('file_upload_');

			if( $file ): ?>
	<a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>

<?php endif; 
echo '</section>';
		echo '</article>';
	echo '</main>';
echo '</div>';
endwhile; endif;
comments_template(); 
get_footer();