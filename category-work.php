<?php
/*
Template Name: Category Work
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php
		 // CUSTOM FIELDS | http://codex.wordpress.org/Using_Custom_Fields

			$client = get_post_meta($post->ID, "client_value", true);
			$tipo = get_post_meta($post->ID, "tipo_value", true);
			$deliverables = get_post_meta($post->ID, "deliverables_value", true);
			$src_featured_image = get_post_meta($post->ID, "src_featured_image_value", true);
			$view_web_site = get_post_meta($post->ID, "view_web_site_value", true);
	?>

	<div class="featured">
		<?php portfolio_panel() ?>
	</div><!-- .featured -->

<?php endwhile; endif; ?>
