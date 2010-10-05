		<div id="footer">
			<div id="foot">
				
				<ol id="footnav">
					<li><a <?php if ( is_home() || is_category("work") ) { ?> class="active"<?php } ?> href="<?php echo get_option('home'); ?>/" title="Go to the Work page">WORK</a></li>
					<li>|</li>
					<li><a <?php if ( is_page('about') ) { ?> class="active"<?php } ?> href="<?php echo get_option('home'); ?>/about" title="Go to the About page">ABOUT</a></li>
					<li>|</li>
					<li><a <?php if ( is_page('contact-us') ) { ?> class="active"<?php } ?> href="<?php echo get_option('home'); ?>/contact-us" title="Go to the Contact page">CONTACT</a></li>
				</ol>

				<p>All contents © Copyright 2008 <a href="http://wpesp.com" title="Go to the WPESP site">WPESP</a>. All rights reserved.</p>
				
				<p class="rss"><a href="<?php bloginfo('rss2_url'); ?>" rel="alternate" title="Syndicate this site using RSS"><acronym title="Really Simple Syndication">RSS</acronym> Feed</a>. Proudly powered by <a href="http://www.wordpress.org">Wordpress</a> &amp; <a href="http://wpesp.com" title="Go to the WPESP site">WPESP</a>.</p>
				
			</div><!-- #foot -->
		</div><!-- #footer -->
		<?php wp_footer(); ?>

	<script type="text/javascript">
		$(document).ready(function(){
			$.getScript('http://www.google-analytics.com/ga.js',function(){
				if (typeof(_gat) == 'object'){
					var pageTracker = _gat._getTracker('UA-6031180-2');
					pageTracker._initData();
					pageTracker._trackPageView();
				}
			});
		});
	</script>
	</body>
</html>