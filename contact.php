<?php
/*
Template Name: Contact Us
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
		<div id="content">
	
			<!-- Ct-Info -->
			<div id="ct-info">
				<div id="contact" class="br-rd4">
					<?php the_content() ?>
				</div>
			</div><!-- #ct-info -->

			<div id="sidebar">
				<?php portfolio_hcard() ?>
			</div><!-- #sidebar -->
		</div><!-- #content -->
<?php endwhile; endif; ?>