<?php 
// Custom fields for WP write panel

$obox_meta = array(
		"media" => array (
			"name"			=> "other_media",
			"default" 		=> "",
			"label" 		=> "Image",
			"desc"      	=> "Select a feature image to use for your post.",
			"input_type"  	=> "image",
			"input_size"	=> "50",
			"img_width"		=> "535",
			"img_height"	=> "255"
		),	
		"video" => array (
			"name"			=> "video_link",
			"default" 		=> "",
			"label" 		=> "Video Link",
			"desc"      	=> "Provide your video link instead of the embed code and we'll use <a href='http://codex.wordpress.org/Embeds' target='_blank'>oEmbed</a> to translate that into a video.",
			"input_type"  	=> "text"
		),	
		"embed" => array (
			"name"			=> "main_video",
			"default" 		=> "",
			"label" 		=> "Embed Code",
			"desc"      	=> "Input the embed code of your video here.",
			"input_type"  	=> "textarea"
		)
	);
	
$services_meta = array(
		"icon" => array (
			"name"			=> "icon",
			"default" 		=> "",
			"label" 		=> "Icon",
			"desc"      	=> "Select an icon for your service.",
			"input_type"  	=> "image",
			"input_size"	=> "50",
			"img_width"		=> "535",
			"img_height"	=> "255"
		),
		"media" => array (
			"name"			=> "other_media",
			"default" 		=> "",
			"label" 		=> "Image",
			"desc"      	=> "Select a feature image to use for your post.",
			"input_type"  	=> "image",
			"input_size"	=> "50",
			"img_width"		=> "535",
			"img_height"	=> "255"
		),
		"video" => array (
			"name"			=> "video_link",
			"default" 		=> "",
			"label" 		=> "Video Link",
			"desc"      	=> "Provide your video link instead of the embed code and we'll use <a href='http://codex.wordpress.org/Embeds' target='_blank'>oEmbed</a> to translate that into a video.",
			"input_type"  	=> "text"
		),	
		"embed" => array (
			"name"			=> "main_video",
			"default" 		=> "",
			"label" 		=> "Embed Code",
			"desc"      	=> "Input the embed code of your video here.",
			"input_type"  	=> "textarea"
		)
	);
	
$features_meta = array(
		"icon" => array (
			"name"			=> "icon",
			"default" 		=> "",
			"label" 		=> "Icon",
			"desc"      	=> "Select an icon for your feature.",
			"input_type"  	=> "image",
			"input_size"	=> "50",
			"img_width"		=> "535",
			"img_height"	=> "255"
		),
		"media" => array (
			"name"			=> "other_media",
			"default" 		=> "",
			"label" 		=> "Image",
			"desc"      	=> "Select a feature image to use for your post.",
			"input_type"  	=> "image",
			"input_size"	=> "50",
			"img_width"		=> "535",
			"img_height"	=> "255"
		)
	);
	
$partners_meta = array(
		"media" => array (
			"name"			=> "other_media",
			"default" 		=> "",
			"label" 		=> "Image",
			"desc"      	=> "Select a feature image to use for your post.",
			"input_type"  	=> "image",
			"input_size"	=> "50",
			"img_width"		=> "535",
			"img_height"	=> "255"
		),
		"link" => array (
			"name"			=> "link",
			"default" 		=> "",
			"label" 		=> "Link",
			"desc"      	=> "eg. http://nike.com",
			"input_type"  	=> "text"
		),
	);
	
$testimonials_meta = array(
		"media" => array (
			"name"			=> "other_media",
			"default" 		=> "",
			"label" 		=> "Avatar",
			"desc"      	=> "Select a feature image to use for your post.",
			"input_type"  	=> "image",
			"input_size"	=> "50",
			"img_width"		=> "535",
			"img_height"	=> "255"
		),
		"link" => array (
			"name"			=> "link",
			"default" 		=> "",
			"label" 		=> "Link",
			"desc"      	=> "eg. http://www.brainyquote.com",
			"input_type"  	=> "text"
		),
	);
	
$team_meta = array(
		"media" => array (
			"name"			=> "other_media",
			"default" 		=> "",
			"label" 		=> "Image / Logo",
			"desc"      	=> "Select a feature image to use for your post.",
			"input_type"  	=> "image",
			"input_size"	=> "50",
			"img_width"		=> "535",
			"img_height"	=> "255"
		),
		"position" => array (
			"name"			=> "position",
			"default" 		=> "",
			"label" 		=> "Position",
			"desc"      	=> "eg. CEO, Co-founder.",
			"input_type"  	=> "text"
		),
		"facebook" => array (
			"name"			=> "facebook",
			"default" 		=> "",
			"label" 		=> "Facebook",
			"desc"      	=> "eg. http://facebook.com/mark",
			"input_type"  	=> "text"
		),
		"twitter" => array (
			"name"			=> "twitter",
			"default" 		=> "",
			"label" 		=> "Twitter",
			"desc"      	=> "eg. http://twitter.com/jack",
			"input_type"  	=> "text"
		),
		"linkedin" => array (
			"name"			=> "linkedin",
			"default" 		=> "",
			"label" 		=> "LinkedIn",
			"desc"      	=> "eg. http://www.linkedin.com/profile/view?id=48580712",
			"input_type"  	=> "text"
		)
	);
	
$portfolio_meta = array(
		"media" => array (
			"name"			=> "other_media",
			"default" 		=> "",
			"label" 		=> "Image",
			"desc"      	=> "Select a feature image to use for your post.",
			"input_type"  	=> "image",
			"input_size"	=> "50",
			"img_width"		=> "535",
			"img_height"	=> "255"
		),	
		"video" => array (
			"name"			=> "video_link",
			"default" 		=> "",
			"label" 		=> "Video Link",
			"desc"      	=> "Provide your video link instead of the embed code and we'll use <a href='http://codex.wordpress.org/Embeds' target='_blank'>oEmbed</a> to translate that into a video.",
			"input_type"  	=> "text"
		),	
		"embed" => array (
			"name"			=> "main_video",
			"default" 		=> "",
			"label" 		=> "Embed Code",
			"desc"      	=> "Input the embed code of your video here.",
			"input_type"  	=> "textarea"
		),
		"client" => array (
			"name"			=> "client",
			"default" 		=> "",
			"label" 		=> "Client",
			"desc"      	=> "eg. Samsung",
			"input_type"  	=> "text"
		),
		"website" => array (
			"name"			=> "website",
			"default" 		=> "",
			"label" 		=> "Website External Link",
			"desc"      	=> "eg. http://www.samsung.com",
			"input_type"  	=> "text"
		)
	);
	
$slider_meta = array(
		"media" => array (
			"name"			=> "other_media",
			"default" 		=> "",
			"label" 		=> "Image / Logo",
			"desc"      	=> "Select a feature image to use for your post.",
			"input_type"  	=> "image",
			"input_size"	=> "50",
			"img_width"		=> "535",
			"img_height"	=> "255"
		),	
		"video" => array (
			"name"			=> "video_link",
			"default" 		=> "",
			"label" 		=> "Video Link",
			"desc"      	=> "Provide your video link instead of the embed code and we'll use <a href='http://codex.wordpress.org/Embeds' target='_blank'>oEmbed</a> to translate that into a video.",
			"input_type"  	=> "text"
		),	
		"embed" => array (
			"name"			=> "main_video",
			"default" 		=> "",
			"label" 		=> "Embed Code",
			"desc"      	=> "Input the embed code of your video here.",
			"input_type"  	=> "textarea"
		),
		"image_position" => array (
			"name"			=> "image_position",
			"default" 		=> "image-right",
			"label" 		=> "Slider Layout",
			"desc"      	=> "Determine how you would like this slide to be laid out. Choose between five different options.",
			"input_type"  	=> "image-select",
			"image-folder"	=> "/images/slider-positions/",
			"options" => array("image-left", "image-right", "image-only", "image-title", "text-only")
		),
		"link" => array (
			"name"			=> "link",
			"default" 		=> "",
			"label" 		=> "Button Link",
			"desc"      	=> "Provide a link. (Once a link is provided the button will show on the slide)",
			"input_type"  	=> "text"
		),
		"button" => array (
			"name"			=> "button",
			"default" 		=> "",
			"label" 		=> "Button Text",
			"desc"      	=> "Provide text for your button.",
			"input_type"  	=> "text"
		),
		"button_colour" => array (
			"name"			=> "button_colour",
			"default" 		=> "",
			"label" 		=> "Button Background Colour",
			"desc"      	=> "Select a background for your button.",
			"input_type"  	=> "color"
		),
		"sliderbg" => array (
			"name"			=> "sliderbg",
			"default" 		=> "",
			"default_colour" => "ffffff",
			"label" 		=> "Slider Image Background",
			"desc"      	=> "Select a background for your slide (at least 1920px by 520px)",
			"input_type"  	=> "background"
		),
		"videobg" => array (
            "name"            => "videobg",
            "default"         => "",
            "default_colour" => "ffffff",
            "label"         => "Slider Video Background",
            "desc"          => "Enter a selfhosted video to use as your slider background. View detailed instructions <a target='_blank' href='http://kb.oboxsites.com/themedocs/dynamo-how-to-use-video-slider-backgrounds/'>here.</a>",
            "input_type"      => "selfhosted"
        )
	);
	
$layout = array(
			"layout" => array (
				"name"			=> __("layout",'ocmx'),
				"default" 		=> __("two-column",'ocmx'),
				"label" 		=> __("Layout",'ocmx'),
				"desc"      	=> __("Select the layout of your page.",'ocmx'),
				"input_type"  	=> "image-select",
				"image-folder"	=> "/images/page-layouts/",
				"options" => array("two-column", "three-column", "four-column")
			),
			"header_image" => array (
				"name"			=> __("header_image",'ocmx'),
				"default" 		=> __("",'ocmx'),
				"label" 		=> __("Custom Header Image",'ocmx'),
				"desc"      	=> __("Select an image to carry through this post type.",'ocmx'),
				"input_type"  	=> __("background",'ocmx')
			)
		);
		
$maps = array(
		"location" => array (
			"name"			=> "map-location",
			"default" 		=> "",
			"label" 		=> "Google Maps Location",
			"desc"      	=> "Provide a specific address <br /> i.e. (79 Sample Road, Cape Town, Western Cape, South Africa) <br /> <a href='http://maps.google.com' target='_blank'>Check on Google Maps</a> ",
			"input_type"  	=> "text"
		),
		"latlong" => array (
			"name"			=> "map-latlong",
			"default" 		=> "",
			"label" 		=> "Google Maps Latitude & Longitude (Optional)",
			"desc"      	=> "Provide specific GPS co-ordinates for Google Maps. Use this if your location does not have a valid Google Maps Location<br /> i.e. (-34.397, 150.644)",
			"input_type"  	=> "text"
		),
		"address" => array (
			"name"			=> "address",
			"default" 		=> "",
			"label" 		=> "Address Shown",
			"desc"      	=> "Provide an Address shown to the public.",
			"input_type"  	=> "textarea"
		)
	);
	
function create_meta_box_ui() {
	global $post, $obox_meta, $layout, $maps;
	if(get_post_type($post->ID) == "page") :
		$obox_meta = array_merge($obox_meta, $layout);
	endif;
	if(strpos(get_page_template(), 'contact.php')) :
		$obox_meta = array_merge($obox_meta, $maps);
	endif;
	
	post_meta_panel($post->ID, $obox_meta);
}

function create_meta_box_ui_services() {
	global $post, $services_meta;
	post_meta_panel($post->ID, $services_meta);
}

function create_meta_box_ui_features() {
	global $post, $features_meta;
	post_meta_panel($post->ID, $features_meta);
}

function create_meta_box_ui_partners() {
	global $post, $partners_meta;
	post_meta_panel($post->ID, $partners_meta);
}

function create_meta_box_ui_testimonials() {
	global $post, $testimonials_meta;
	post_meta_panel($post->ID, $testimonials_meta);
}

function create_meta_box_ui_portfolio() {
	global $post, $portfolio_meta;
	post_meta_panel($post->ID, $portfolio_meta);
}

function create_meta_box_ui_team() {
	global $post, $team_meta;
	post_meta_panel($post->ID, $team_meta);
}

function create_meta_box_ui_slider() {
	global $post, $slider_meta;
	post_meta_panel($post->ID, $slider_meta);
}

function insert_obox_metabox($pID) {
	global $post, $maps, $obox_meta, $services_meta, $features_meta, $testimonials_meta, $portfolio_meta, $partners_meta, $team_meta, $slider_meta, $meta_added, $layout;

	wp_reset_postdata();
	if(get_post_type($post) == "page") :
		$obox_meta = array_merge($obox_meta, $layout);
	endif;
	if(strpos(get_page_template(), 'contact.php')) :
		$obox_meta = array_merge($obox_meta, $maps);
	endif;
	if(!isset($meta_added) && !empty($post)):
		if(get_post_type() == "services") :
			post_meta_update($post->ID, $services_meta);
			post_type_meta_update($post->ID, "services");
		elseif(get_post_type() == "partners") :
			post_meta_update($post->ID, $partners_meta);
		elseif(get_post_type() == "features") :
			post_meta_update($post->ID, $features_meta);
		elseif(get_post_type() == "portfolio") :
			post_meta_update($post->ID, $portfolio_meta);
		elseif(get_post_type() == "testimonials") :
			post_meta_update($post->ID, $testimonials_meta);
		elseif(get_post_type() == "team") :
			post_meta_update($post->ID, $team_meta);
		elseif(get_post_type() == "slider") :
			post_meta_update($post->ID, $slider_meta);
		else :
			post_meta_update($post->ID, $obox_meta);
		endif;			
	endif;
	$meta_added = 1;
}

function add_obox_meta_box() {
	if (function_exists('add_meta_box') ) {
		add_meta_box('obox-meta-box',$GLOBALS['themename'].' Options','create_meta_box_ui','post','normal','high');
		add_meta_box('obox-meta-box',$GLOBALS['themename'].' Options','create_meta_box_ui','page','normal','high');
		
		add_meta_box('obox-meta-box','Services Options','create_meta_box_ui_services','services','normal','high');
		add_meta_box('obox-meta-box','Features Options','create_meta_box_ui_features','features','normal','high');
		add_meta_box('obox-meta-box','Partners Options','create_meta_box_ui_partners','partners','normal','high');
		add_meta_box('obox-meta-box','Testimonials Options','create_meta_box_ui_testimonials','testimonials','normal','high');
		add_meta_box('obox-meta-box','Portfolio Options','create_meta_box_ui_portfolio','portfolio','normal','high');
		add_meta_box('obox-meta-box','Team Options','create_meta_box_ui_team','team','normal','high');
		add_meta_box('obox-meta-box','Slider Options','create_meta_box_ui_slider','slider','normal','high');
	}
}

function my_page_excerpt_meta_box() {
	add_meta_box( 'postexcerpt', __('Excerpt', 'ocmx'), 'post_excerpt_meta_box', 'page', 'normal', 'core' );
}

add_action('admin_menu', 'add_obox_meta_box');
add_action('admin_menu', 'my_page_excerpt_meta_box');
add_action('admin_head-post-new.php', 'ocmx_change_metatype');
add_action('admin_head-post.php', 'ocmx_change_metatype');
add_action('save_post', 'insert_obox_metabox');
add_action('publish_post', 'insert_obox_metabox');  ?>