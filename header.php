<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<title>
			<?php if (is_home()) { echo bloginfo('name');
			} elseif (is_404()) {
			echo '404 Not Found';
			} elseif (is_category()) {
			echo 'Category:'; wp_title('');
			} elseif (is_search()) {
			echo 'Search Results';
			} elseif ( is_day() || is_month() || is_year() ) {
			echo 'Archives:'; wp_title('');
			} else {
			echo wp_title('');
			}
			?>
		</title>
	    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	    <?php }?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

		<script src="<?php bloginfo('template_url'); ?>/style/scripts/jquery-1.2.6.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php bloginfo('template_url'); ?>/style/scripts/jquery.scrollTo-1.4.0-min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php bloginfo('template_url'); ?>/style/scripts/jquery.localscroll-1.2.6-min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php bloginfo('template_url'); ?>/style/scripts/jquery.serialScroll-1.2.1-min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php bloginfo('template_url'); ?>/style/scripts/coda-slider.js" type="text/javascript" charset="utf-8"></script>
		
		<?php wp_head(); ?>

	</head>

	<body>
	
	
		<!-- HEADER -->	
		
		<div id="header">
			<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>

			<p><?php bloginfo('description'); ?></p>
		</div><!-- #header -->
		
		
		<!-- NAVIGATION -->


		<div id="navigation">
			<div id="menu">
				<ol> <!-- http://codex.wordpress.org/Conditional_Tags -->
					<li><a <?php if ( is_home() || is_category("work") ) { ?> class="active"<?php } ?> href="<?php echo get_option('home'); ?>/" >TRABAJOS<small>Mis Proyectos</small></a></li>

					<li><a <?php if ( is_page('about') ) { ?> class="active"<?php } ?> href="<?php echo get_option('home'); ?>/about" >ACERCA DE MI<small>Curriculum Vitae</small></a></li>

					<li id="menulast"><a <?php if ( is_page('contact-us') ) { ?> class="active"<?php } ?> href="<?php echo get_option('home'); ?>/contact-us" >CONTACTO<small>Contacta conmigo</small></a></li>
				</ol>

				<div id="feed">
					<a href="<?php bloginfo('rss2_url'); ?>" rel="alternate" title="Syndicate this site using RSS"><span>Feed - RSS</span></a>
				</div>
			</div><!-- #menu -->
		</div><!-- #navigation -->
