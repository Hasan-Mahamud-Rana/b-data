<?php
echo '<div id="content" class="row">';
	echo '<main id="main" class="small-9 columns" role="main">';
		echo '<article id="post-' . get_the_ID() . '" class="'. join( ' ', get_post_class() ) .'">';
			the_title('<h1 class="lite">','</h1>');
			echo '<section class="content" itemprop="articleBody">';
				the_content();
				if( have_rows('file_upload') ):
					while ( have_rows('file_upload') ) : the_row();
						$file = get_sub_field('single_file_upload');
						if( $file ){
							$url = wp_get_attachment_url( $file );
							$fileUrl = $file['url']; 
							$fileTitle = $file['title']; 
								echo '<a href="' . $fileUrl . '">' . $fileTitle. '</a></br>';
						};
					endwhile;
				endif;
			echo '</section>';
		echo '</article>';
	echo '</main>';
	echo '<div class="small-3 columns">';
		echo '<a href="'. wp_logout_url();
		echo'">Logout</a>';
	echo '</div>';
echo '</div>';