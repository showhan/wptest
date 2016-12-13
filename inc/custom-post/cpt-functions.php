<?php
if ( !function_exists( 'rwpbs_register_custom_post' ) ) : 

	// Function 'rwpbs_register_custom_post' starts
	function rwpbs_register_custom_post() {

		//require get_template_directory().'/inc/custom-post/cpt-service.php';
		//require get_template_directory().'/inc/custom-post/cpt-portfolio.php';
		require get_template_directory().'/inc/custom-post/cpt-service.php';
		//require get_template_directory().'/inc/custom-post/cpt-brand.php';

	} 
	// Function 'wpbootscore_register_custom_post' ends


	add_action( 'init', 'rwpbs_register_custom_post');
	// Hook into the 'init' action
	
	
endif;
// end of rwpbs_register_custom_post function_exists