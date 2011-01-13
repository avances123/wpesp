<?php
function portfolio_panel(){
	global $post;
	// CUSTOM FIELDS | http://codex.wordpress.org/Using_Custom_Fields

	$client = get_post_meta($post->ID, "client_value", $single = true);
	$tipo = get_post_meta($post->ID, "tipo_value", $single = true);
	$deliverables = get_post_meta($post->ID, "deliverables_value", $single = true);
	$src_featured_image = get_post_meta($post->ID, "src_featured_image_value", $single = true);
	$view_web_site = get_post_meta($post->ID, "view_web_site_value", $single = true);
?>

<!-- INFO -->
<div class="info">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Go to View Case Study of <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

	<?php if($client or $tipo or $deliverables !== '') { ?>
		<dl>
			<?php if($client !== '') { ?><!-- If have Cliente print it -->
				<dt><strong>Cliente</strong>:&nbsp;</dt>
				<dd><?php echo $client; ?></dd>
			<?php } ?>

			<?php if($tipo !== '') { ?>
			<dt><strong>Tipo</strong>:&nbsp;</dt>
			<dd><?php echo $tipo; ?></dd>
			<?php } ?>

			<?php if($deliverables !== '') { ?>
			<dt><strong>Deliverables</strong>:&nbsp;</dt>
			<dd><?php echo $deliverables; ?></dd>
			<?php } ?>
		</dl>
	<?php } ?>

	<?php the_excerpt(); ?>

</div><!-- #info -->

<!-- VIEW -->
<ul class="view">

	
	<?php edit_post_link('Edit', '<li><li></li><li>', '</li>'); ?>
</ul><!-- #view -->


<!-- STICK -->
<div class="stick">
	<?php if (in_category(5)): // Featured Category (in our case id=5) ?>
		<img class="new" src="<?php bloginfo('template_url'); ?>/style/images/new.png" width="66" height="28" alt="New!" />
	<?php endif ?>
	<a class="<?php if (in_category(5)): // Featured Category (in our case id=5) ?>afternew <?php endif ?>br-rd4" href="<?php the_permalink() ?>" title="Go to View Case Study page <?php the_title_attribute(); ?>"><img src="<?php echo $src_featured_image; ?>" width="359" height="269" alt="<?php the_title_attribute(); ?>" title="panel image of <?php the_title_attribute(); ?>" /></a>
</div><!-- #stick -->
<?php } ?>
