<?php if (have_posts()) : while (have_posts()) : the_post();  ?>

		<div id="content">
	
			<!-- Ct-Info -->
			<div id="ct-info">
				<?php the_content() ?>
			</div>

			<div id="sidebar">
		
				<?php
					 // CUSTOM FIELDS | http://codex.wordpress.org/Using_Custom_Fields

						$client = get_post_meta($post->ID, "client_value", true);
						$company = get_post_meta($post->ID, "company_value", true);
						$deliverables = get_post_meta($post->ID, "deliverables_value", true);
						$src_featured_image = get_post_meta($post->ID, "src_featured_image_value", true);
						$view_web_site = get_post_meta($post->ID, "view_web_site_value", true);
				?>
		
				<?php if($client or $company or $deliverables !== '') { ?>
					<dl>
						<?php if($client !== '') { // If have Cliente print it ?>
							<dt><strong>Client</strong>:&nbsp;</dt>
							<dd><?php echo $client; ?></dd>
						<?php } ?>
			
						<?php if($company !== '') { ?>
						<dt><strong>Company</strong>:&nbsp;</dt>
						<dd><?php echo $company; ?></dd>
						<?php } ?>
			
						<?php if($deliverables !== '') { ?>
						<dt><strong>Deliverables</strong>:&nbsp;</dt>
						<dd><?php echo $deliverables; ?></dd>
						<?php } ?>
					</dl>
				<?php } ?>
		
				<ul>
					<li><a href="<?php echo $view_web_site; ?>" title="Go to View Web Site"><strong>View Web Site</strong></a></li>
					<?php previous_post_link('<li>%link</li>', '<strong>&laquo;&nbsp;Previous Work</strong>', TRUE); // http://codex.wordpress.org/Template_Tags/previous_post_link ?>
					<?php next_post_link('<li>%link</li>', '<strong>Next Work&nbsp;&raquo;</strong>', TRUE); ?>
				</ul>
		
			</div><!-- #sidebar -->
		</div><!-- #content -->
		
<?php endwhile; endif; ?>