<?php
/*
Template Name: Home
*/
?>
<?php // http://codex.wordpress.org/Pages#Alternate_Methods_for_Setting_the_Front_Page | Alternate Methods for Setting the Front Page ?>

<?php get_header(); ?>

	<div id="slider">
		
		
		<!-- =============================================================
			#PANEL
		============================================================= -->
		
		<!-- element with overflow applied -->
		<div class="scroll">
			<!-- the element that will be scrolled during the effect -->
			<div class="scrollContainer">

				<?php 
					$the_query = new WP_Query('category_name=featured&showposts=1');
					while ($the_query->have_posts()) : $the_query->the_post();
					$do_not_duplicate = $post->ID; 
					// We show just 1 post of category panel order by post date descendent and don't be show after | http://codex.wordpress.org/The_Loop#Multiple_Loops_in_Action
				?>
					<div class="panel">
						<?php portfolio_panel() ?>
					</div>
				<?php endwhile; ?> <!-- End panel -->
		
		
		
		<?php
			query_posts('category_name=work');
			// http://codex.wordpress.org/Template_Tags/query_posts | We show posts from category Work
		?>
		
		
			<?php
				if (have_posts()) : while (have_posts()) : the_post();
				if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts);
				// http://codex.wordpress.org/The_Loop#Multiple_Loops_in_Action
			?>
				<div class="panel">
					<?php portfolio_panel() ?>
				</div>
			<?php endwhile; endif; ?>
		
			</div><!-- .scrollContainer -->
		</div><!-- .scroll -->


		<!-- =============================================================
			#WORKS
		============================================================= -->
		<div id="works">
			<div class="minus14">
				<?php // Featurd Work goes first
					$the_query = new WP_Query('category_name=featured&showposts=1');
					while ($the_query->have_posts()) : $the_query->the_post();
					$do_not_duplicate = $post->ID; 
					// We show just one post of category work and don't duplicate it after | http://codex.wordpress.org/The_Loop#Multiple_Loops_in_Action
				?>
				
					<div class="thumb">
						<a href="<?php the_permalink() ?>" title="View Case Study - <?php the_title_attribute(); ?>"><img src="<?php $src_thumb_value = get_post_meta($post->ID, "src_thumb_value", true); echo $src_thumb_value; ?>" width="276" height="115" alt="<?php the_title_attribute(); ?>" title="Thumb of <?php the_title_attribute(); ?>" /></a>
					</div><!-- .thumb -->
				
				<?php endwhile; ?>
				
				<?php // Rest of works
					if (have_posts()) : while (have_posts()) : the_post();
					if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts);
					// http://codex.wordpress.org/The_Loop#Multiple_Loops_in_Action
				?>

					<div class="thumb">
						<a href="<?php the_permalink() ?>" title="View Case Study - <?php the_title_attribute(); ?>"><img src="<?php $src_thumb_value = get_post_meta($post->ID, "src_thumb_value", true); echo $src_thumb_value; ?>" width="276" height="115" alt="<?php the_title_attribute(); ?>" title="Thumb of <?php the_title_attribute(); ?>" /></a>
					</div><!-- .thumb -->
			
				<?php endwhile; endif; ?>
				
			</div><!-- .minus14 -->
		</div><!-- #work -->
		
	</div><!-- #slider -->
	
		
<?php get_footer(); ?>
