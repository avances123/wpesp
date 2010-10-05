<?php get_header(); ?>

	<?php
		if (is_category(work) or is_category(featured)):
		// Category Work | http://codex.wordpress.org/Conditional_Tags#A_Category_Page
			include(TEMPLATEPATH . '/category-work.php');
		elseif( in_category(3) ) :
		// Post in Category Work (in our case ID 3) *View Case Study* | http://codex.wordpress.org/Conditional_Tags#A_Category_Page & http://codex.wordpress.org/Template_Tags/in_category#Use_OUTSIDE_The_Loop
	 		include(TEMPLATEPATH . '/work.php');
		endif
	?>
	
	<?php
		if(is_page(about)) : // Page About | http://codex.wordpress.org/Conditional_Tags#A_PAGE_Page
			include(TEMPLATEPATH . '/about.php');
		elseif(is_page(contact-us)) : // Page Contact
			include(TEMPLATEPATH . '/contact.php');
		endif // About & Contact
	?>

<?php get_footer(); ?>