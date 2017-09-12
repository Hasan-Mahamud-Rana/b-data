<?php
					echo '<footer class="footer" role="contentinfo">';
						echo '<div class="row medium-tbpadding white-text" data-equalizer="footer" data-equalize-by-row="true">';
							echo '<div class="small-6 medium-6 large-3 columns" data-equalizer-watch="footer">';
								get_sidebar( 'footertop1' );
							echo '</div>';
							echo '<div class="small-6 medium-6 large-3 columns" data-equalizer-watch="footer">';
								get_sidebar( 'footertop2' );
							echo '</div>';
							echo '<div class="small-6 medium-6 large-3 columns" data-equalizer-watch="footer">';
								get_sidebar( 'footertop3' );
							echo '</div>';
							echo '<div class="small-6 medium-6 large-3 columns" data-equalizer-watch="footer">';
								get_sidebar( 'footertop4' );
							echo '</div>';
						echo '</div>';

						echo '<div class="copyright">';
							echo '<div class="row">';
								get_sidebar( 'social' );
								get_sidebar( 'footerlocation' );
							echo '</div>';
						echo '</div>';
					echo '</footer>';
				echo '</div>';
			echo '</div>';
		wp_footer();
		?>
		<script id="CookieConsent" src="https://policy.cookieinformation.com/uc.js" data-cbid="874980f8-2470-4103-9ea0-79333f15e01a" type="text/javascript"></script>
		<?php
	echo '</body>';
echo '</html>';