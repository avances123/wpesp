<?php
/*
Template Name: About
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
		<div id="content">
	
			<!-- Ct-Info -->
			<div id="ct-info">
		
				<h2>
					<?php $given_name = get_post_meta($post->ID, "given_name_value", true); echo $given_name; ?>
					<?php $family_name = get_post_meta($post->ID, "family_name_value", true); echo $family_name; ?>
				</h2>
		
				<?php the_content() ?>
		
			</div>

			<div id="sidebar">
				<?php portfolio_hcard() ?>
			</div><!-- #sidebar -->
		</div><!-- #content -->
<?php endwhile; endif; ?>