<?php
echo '<!doctype html>';
echo '<html class="no-js" ' . get_language_attributes() . '>';
	echo '<head>';
		echo '<meta charset="utf-8">';
		echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
		echo '<meta class="foundation-mq">';
		if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
		# Icons & Favicons
		echo '<link rel="icon" href="' . get_template_directory_uri() . '/favicon.png">';
		echo '<link href="' . get_template_directory_uri() . '/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />';
		#<!--[if IE]>
		echo '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/favicon.ico">';
		#<![endif]-->
		echo '<meta name="msapplication-TileColor" content="#f01d4f">';
		echo '<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">';
		echo '<meta name="theme-color" content="#121212">';
		}
		echo '<link rel="pingback" href="' . get_bloginfo('pingback_url') . '">';
		wp_head();
		?><!-- Drop Google Analytics here --><script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-52596410-1', 'auto');
  ga('send', 'pageview');</script><!-- Start of Async HubSpot Analytics--><script type="text/javascript">var _hsq = _hsq || [];
_hsq.push(["setContentType", "standard-page"]);
(function(d,s,i,r) {
  if (d.getElementById(i)){return;}
  var n = d.createElement(s),e = document.getElementsByTagName(s)[0];
  n.id=i;n.src = '//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/1260192.js';
  e.parentNode.insertBefore(n, e);
})(document, "script", "hs-analytics", 300000);</script><!-- end analytics --><?php
	echo '</head>';
	echo '<body class="'. join( ' ', get_body_class() ) .'">';
		echo '<div class="off-canvas-wrapper">';
			get_template_part( 'parts/content', 'offcanvas' );
			echo '<div class="off-canvas-content" data-off-canvas-content>';
				echo '<header class="header white" role="banner" data-sticky-container>';
					echo '<div class="white" data-sticky data-options="marginTop:0;" style="width:100%">';
						get_template_part( 'parts/nav', 'offcanvas-topbar' );
					echo '</div>';
				echo '</header>';
				#echo '<div class="child-nav-bar-bg show-for-medium-up">&nbsp;</div>';
				echo '<div class="search-bar-bg show-for-medium-up">';
					get_template_part( 'parts/search' );
				echo '</div>';