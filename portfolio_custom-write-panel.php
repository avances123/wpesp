<?php
/*
	Plugin Name: Custom Write Panel
	Plugin URI: http://wefunction.com/2008/10/tutorial-create-custom-write-panels-in-wordpress
	Description: Allows custom fields to be added to the WordPress Post Page. Adapted by Víctor García (http://wpesp.com) - WPESP Theme Portfolio
	Version: 1.0
	Author: Spencer
	Author URI: http://wefunction.com
/* ----------------------------------------------*/

	$work_meta_boxes =
	array(
	"client" => array(
	"name" => "client",
	"std" => "",
	"title" => "Client",
	"description" => "Upload a Client, add the Client name here and <strong>save the post</strong>."), // "," Important to separate arrays
	
	"company" => array(
	"name" => "company",
	"std" => "",
	"title" => "Company",
	"description" => "Upload a Company, add the Company name here and <strong>save the post</strong>."),
	
	"deliverables" => array(
	"name" => "deliverables",
	"std" => "",
	"title" => "Deliverables",
	"description" => "Upload a Deliverables, add the Deliverables info and <strong>save the post</strong>."),
	
	"view_web_site" => array(
	"name" => "view_web_site",
	"std" => "",
	"title" => "Web Site",
	"description" => "Upload a Web Site, add the Web Site URL here and <strong>save the post</strong>."),
	
	"src_thumb" => array(
	"name" => "src_thumb",
	"std" => "",
	"title" => "Thumb Panel Image",
	"description" => "Upload a Thumb Panel Image, add the Thumb Panel Image URL here and <strong>save the post</strong>."),
	
	"src_featured_image" => array(
	"name" => "src_featured_image",
	"std" => "",
	"title" => "Panel Image",
	"description" => "Upload a Full Image, add the Panel Image URL here and <strong>save the post</strong>.")
	);
	
	$hcard_meta_boxes =
	array(
	"photo" => array(
	"name" => "photo",
	"std" => "",
	"title" => "Photo",
	"description" => "Upload a Photo, add the Photo link here and <strong>save the post</strong>."), // "," Important to separate arrays
	
	"family_name" => array(
	"name" => "family_name",
	"std" => "",
	"title" => "Family Name",
	"description" => "Upload a Family Name, add the Family Name here and <strong>save the post</strong>."),
	
	"given_name" => array(
	"name" => "given_name",
	"std" => "",
	"title" => "Given Name",
	"description" => "Upload a Given Name, add the Given Name here and <strong>save the post</strong>."),
	
	"organization" => array(
	"name" => "organization",
	"std" => "",
	"title" => "Organization",
	"description" => "Upload a Organization, add the Organization name here and <strong>save the post</strong>."),
	
	"street" => array(
	"name" => "street",
	"std" => "",
	"title" => "Street",
	"description" => "Upload a Street, add the Street name here and <strong>save the post</strong>."),
	
	"postal_code" => array(
	"name" => "postal_code",
	"std" => "",
	"title" => "Postal Code",
	"description" => "Upload a Postal Code, add the Postal Code name here and <strong>save the post</strong>."),
	
	"locality" => array(
	"name" => "locality",
	"std" => "",
	"title" => "Locality",
	"description" => "Upload a Locality, add the Locality name here and <strong>save the post</strong>."),
	
	"region" => array(
	"name" => "region",
	"std" => "",
	"title" => "Region",
	"description" => "Upload a Region, add the Region name here and <strong>save the post</strong>."),
	
	"country" => array(
	"name" => "country",
	"std" => "",
	"title" => "Country",
	"description" => "Upload a Country, add the Country name here and <strong>save the post</strong>."),
	
	"map_link" => array(
	"name" => "map_link",
	"std" => "",
	"title" => "Map link",
	"description" => "Upload a Map link, add the Map link here and <strong>save the post</strong>."),
	
	"phone" => array(
	"name" => "phone",
	"std" => "",
	"title" => "Phone",
	"description" => "Upload a Phone, add the Phone number here and <strong>save the post</strong>."),
	
	"fax" => array(
	"name" => "fax",
	"std" => "",
	"title" => "Fax",
	"description" => "Upload a Fax, add the Fax number here and <strong>save the post</strong>."),
	
	"email" => array(
	"name" => "email",
	"std" => "",
	"title" => "Email",
	"description" => "Upload a Email, add the Email link here and <strong>save the post</strong>."),
	
	"url" => array(
	"name" => "url",
	"std" => "",
	"title" => "URL",
	"description" => "Upload a URL, add the URL link here and <strong>save the post</strong>."),
	
	"vcard_link" => array(
	"name" => "vcard_link",
	"std" => "",
	"title" => "vCard link",
	"description" => "Upload a vCard link, add the vCard link here and <strong>save the post</strong>."),
	);
	
	function work_meta_boxes() {
		global $post, $work_meta_boxes, $hcard_meta_boxes;
		foreach($work_meta_boxes as $meta_box) {
			$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);

			if($meta_box_value == "")
			$meta_box_value = $meta_box['std'];
		
			echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';

			echo'<h2>'.$meta_box['title'].'</h2>';

			echo'<input type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="55" /><br />';

			echo'<p><label for="'.$meta_box['name'].'_value">'.$meta_box['description'].'</label></p>';
		}
	}

	function hcard_meta_boxes() {
		global $post, $hcard_meta_boxes;

		foreach($hcard_meta_boxes as $meta_box) {
			if ($post->ID == 5 or $post->ID == 89) { // If is About (in our case id=5) or Contact (in our case id=89) page
				$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
			
				if($meta_box_value == "")
					$meta_box_value = $meta_box['std'];
					echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
					echo'<h2>'.$meta_box['title'].'</h2>';
					echo'<input type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="55" /><br />';
					echo'<p><label for="'.$meta_box['name'].'_value">'.$meta_box['description'].'</label></p>';
			
			} else {
				if ($i == 0) {
					echo '<strong>No Options for this Page<strong>'; // Show once
				}
				$i++;
			}

		}
	}

	function create_meta_box() {
		global $theme_name;
	
		if ( function_exists('add_meta_box') )
			add_meta_box( 'work-meta-boxes', 'Portfolio Post Settings', 'work_meta_boxes', 'post', 'normal', 'high' );
			add_meta_box( 'hcard-meta-boxes', 'hCard Post Settings', 'hcard_meta_boxes', 'page', 'normal', 'high' );
	}



	function save_postdata( $post_id ) {
		global $post, $work_meta_boxes;
		foreach($work_meta_boxes as $meta_box) {
		// Verify
			if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) )) {
				return $post_id;
			}

			if ( 'page' == $_POST['post_type'] ) {
				if ( !current_user_can( 'edit_page', $post_id ))
					return $post_id;
			} else {
				if ( !current_user_can( 'edit_post', $post_id ))
					return $post_id;
			}

			$data = $_POST[$meta_box['name'].'_value'];

			if(get_post_meta($post_id, $meta_box['name'].'_value') == "")
				add_post_meta($post_id, $meta_box['name'].'_value', $data, true);
			elseif($data != get_post_meta($post_id, $meta_box['name'].'_value', true))
				update_post_meta($post_id, $meta_box['name'].'_value', $data);
			elseif($data == "")
				delete_post_meta($post_id, $meta_box['name'].'_value', get_post_meta($post_id, $meta_box['name'].'_value', true));
		}
	}
	
	function save_pagedata( $post_id ) {
		global $post, $hcard_meta_boxes;
		foreach($hcard_meta_boxes as $meta_box) {
		// Verify
			if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) )) {
				return $post_id;
			}

			if ( 'page' == $_POST['post_type'] ) {
				if ( !current_user_can( 'edit_page', $post_id ))
					return $post_id;
			} else {
				if ( !current_user_can( 'edit_post', $post_id ))
					return $post_id;
			}

			$data = $_POST[$meta_box['name'].'_value'];

			if(get_post_meta($post_id, $meta_box['name'].'_value') == "")
				add_post_meta($post_id, $meta_box['name'].'_value', $data, true);
			elseif($data != get_post_meta($post_id, $meta_box['name'].'_value', true))
				update_post_meta($post_id, $meta_box['name'].'_value', $data);
			elseif($data == "")
				delete_post_meta($post_id, $meta_box['name'].'_value', get_post_meta($post_id, $meta_box['name'].'_value', true));
		}
	}

	add_action('admin_menu', 'create_meta_box');  
	add_action('save_post', 'save_postdata');
	add_action('save_post', 'save_pagedata');
?>