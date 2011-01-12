<?php
function portfolio_hcard(){
	global $post;
	
	// CUSTOM FIELDS | http://codex.wordpress.org/Using_Custom_Fields
	$given_name = get_post_meta($post->ID, "given_name_value", $single = true);
	$family_name = get_post_meta($post->ID, "family_name_value", $single = true); 
	//$photo = 'http://lh4.ggpht.com/_s4jWs0qFI7k/TNq297dmaXI/AAAAAAAAAR4/nPxhr0SwGuQ/CV%20foto.jpg';
	$photo = 'http://lh3.ggpht.com/_s4jWs0qFI7k/TS3S6KthAVI/AAAAAAAAAWQ/A7Nvlh7k1oQ/CV%20foto%20Slide%2002.jpg';
	$url = get_post_meta($post->ID, "url_value", $single = true);
	$organization = get_post_meta($post->ID, "organization_value", $single = true);
	$map_link = get_post_meta($post->ID, "map_link_value", $single = true);
	$phone = get_post_meta($post->ID, "phone_value", $single = true);
	$fax = get_post_meta($post->ID, "fax_value", $single = true);
	$email = get_post_meta($post->ID, "email_value", $single = true);
	$vcard_link = get_post_meta($post->ID, "vcard_link_value", $single = true);
?>
	
	<div class="vcard">
		<?php if (is_page(about)): ?>
			<img src="<?php echo $photo; ?>" class="photo" alt="<?php echo $given_name ?> <?php echo $family_name ?>" title="<?php echo $given_name ?> <?php echo $family_name ?> Curriculum Vitae Photo" width="401" height="313" />
		<h3 class="fn n">
			<span class="given_name">
				<?php echo $given_name; ?>
			</span>
			<span class="family_name">
				<?php echo $family_name; ?>
			</span>
		</h3>
		<?php endif ?>
		
		<?php if (is_page('contact-us')): ?>
			<h2>Where to find us.</h2>
		<?php endif ?>
		
		
		<p>
			<a class="org url" href="<?php echo $url; ?>">
				<strong>
					<?php echo $organization; ?>
				</strong>
			</a>
		</p>
		
		<p class="adr">
		</p>

		<p>
			<span class="tel">
				<span class="value">
					<?php echo $phone; ?>
				</span>
			</span>
			<br />
			<?php if($fax !== ''): ?>
				<span class="tel">
					<span  class="type"><strong>Fax</strong></span><span>:</span><span class="value"><?php echo $fax; ?></span>
				</span>
				<br /><br />
			<?php endif ?>
			<a href="mailto:<?php echo antispambot($email); ?>" class="email">
				<?php echo antispambot($email); // http://codex.wordpress.org/Protection_From_Harvesters ?>
			</a>
		</p>
		<?php if($vcard_link !== ''): ?>
			<p>
				<a class="card" href="<?php echo $vcard_link; ?>" title="<?php echo $given_name; ?> <?php echo $family_name; ?> - vCard"><strong><?php if (is_page('contact-us')){ ?>Our vCard<?php }else{ ?>My vCard<?php } ?></strong></a>
			</p>
		<?php endif ?>
	</div>
<?php } ?>
