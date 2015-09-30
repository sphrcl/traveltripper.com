<?php
function ocmx_add_scripts()
	{
		global $themeid;
		
		//Add support for 2.9 and 3.0 functions and setup jQuery for theme
		wp_enqueue_script("jquery");
		if(!is_admin() && !(in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) ) ) ):
			// Include stylesheets
			wp_enqueue_style( $themeid.'-style', get_bloginfo( 'stylesheet_url' ) );
			wp_enqueue_style( $themeid.'-responsive', get_template_directory_uri().'/responsive.css');
			wp_enqueue_style( $themeid.'-jplayer', get_template_directory_uri().'/ocmx/jplayer.css');
			wp_enqueue_style( $themeid.'-customizer', home_url().'/?stylesheet=custom');
        
			wp_enqueue_script( $themeid."-menus", get_template_directory_uri()."/scripts/menus.js", array( "jquery" ) );
			wp_enqueue_script( $themeid."-twitter", get_template_directory_uri()."/scripts/twitter.js", array( "jquery" ) );
			wp_enqueue_script( $themeid."-fitvid", get_template_directory_uri()."/scripts/fitvid.js", array( "jquery" ) );
			wp_enqueue_script( $themeid."-scripts", get_template_directory_uri()."/scripts/theme.js", array( "jquery" ) );
			wp_enqueue_script( $themeid."-portfolio", get_template_directory_uri()."/scripts/portfolio.js", array( "jquery" ) );
			
			if(is_home())
				wp_enqueue_script( $themeid."-slider", get_template_directory_uri()."/scripts/slider.js", array( "jquery" ) );
				
			wp_register_style('googleFonts1', 'http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic');
	        wp_enqueue_style( 'googleFonts1');
			
			if(is_page() && wp_basename(get_page_template()) == 'contact.php') :
				wp_enqueue_script( $themeid."-map-api","http://maps.googleapis.com/maps/api/js?sensor=false");
				wp_enqueue_script( $themeid."-map-trigger", get_template_directory_uri()."/scripts/maps.js", array( "jquery" ) );
			endif; 
			if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
			//Localization
			wp_localize_script( $themeid."-jquery", "ThemeAjax", array( "ajaxurl" => admin_url( "admin-ajax.php" ) ) );

		else :
			/* Back-end */
			wp_enqueue_script( 'jquery-ui-draggable' );
			wp_enqueue_script( 'jquery-ui-droppable' );
			wp_enqueue_script( 'jquery-ui-sortable' );
			wp_enqueue_script( 'jquery-ui-tabs' );
			
			wp_enqueue_script( "ajaxupload", get_template_directory_uri()."/scripts/ajaxupload.js", array( "jquery" ) );
			wp_enqueue_script( "ocmx-jquery", get_template_directory_uri()."/scripts/ocmx.js", array( "jquery" ) );
			wp_localize_script( "ocmx-jquery", "ThemeAjax", array( "ajaxurl" => admin_url( "admin-ajax.php" ) ) );
			
			wp_enqueue_style( 'welcome-page', get_template_directory_uri() . '/ocmx/welcome-page.css');
		endif;
	}
add_action('wp_enqueue_scripts', 'ocmx_add_scripts');
add_action('admin_enqueue_scripts', 'ocmx_add_scripts');

function ocmx_add_ajax_calls(){
	//AJAX Functions
	add_action( 'wp_ajax_nopriv_ocmx_cart_display', 'ocmx_cart_display'  );
	add_action( 'wp_ajax_ocmx_cart_display', 'ocmx_cart_display' );
		
	add_action( 'wp_ajax_ocmx_save-options', 'update_ocmx_options');
	add_action( 'wp_ajax_ocmx_reset-options', 'reset_ocmx_options');
	add_action( 'wp_ajax_ocmx_ads-refresh', 'ocmx_ads_refresh' );
	add_action( 'wp_ajax_ocmx_ads-remove', 'ocmx_ads_remove' );
	add_action( 'wp_ajax_ocmx_layout-refresh', 'ocmx_layout_refresh' );
	add_action( 'wp_ajax_ocmx_ajax-upload', 'ocmx_ajax_upload' );
	add_action( 'wp_ajax_ocmx_remove-image', 'ocmx_ajax_remove_image' );
}
add_action('init', 'ocmx_add_ajax_calls');