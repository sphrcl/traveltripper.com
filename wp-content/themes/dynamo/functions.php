<?php  global $themename, $input_prefix;

/*****************/
/* Theme Details */

$themename = "Dynamo";
$themeid = "dynamo";
$productid = "1720";
$presstrendsid = "bsb2lliacd49xuf1xlxc5hb3qy1682wq3iki";

/**********************/
/* Include OCMX files */
$include_folders = array("/ocmx/includes/", "/ocmx/theme-setup/", "/ocmx/widgets/", "/ocmx/front-end/", "/ajax/", "/ocmx/interface/");
include_once (get_template_directory()."/ocmx/folder-class.php");
include_once (get_template_directory()."/ocmx/load-includes.php");
include_once (get_template_directory()."/ocmx/custom.php");
include_once (get_template_directory()."/ocmx/maps-custom.php");

/*******************/
/* Set theme setup */

if(!get_option("ocmx_font_support"))
	update_option("ocmx_font_support", true);
add_theme_support( 'woocommerce' );

/*********************/
/* Load Localization */
load_theme_textdomain('ocmx', get_template_directory() . '/lang');

/*********************/
/* FOUNDATION FRAMEWORK - Javascript */

function foundation_javascript_inclusion() { 
    //first we must register the responsive framework's scripts
    
	wp_register_script('foundation-custom-modernizer', get_template_directory_uri() . '/js/vendor/custom.modernizr.js', array( 'jquery' ), true ); 

	wp_register_script('foundation-jquery', get_template_directory_uri() . '/js/vendor/custom.modernizr.js', array( 'jquery' ), true ); 

	wp_register_script('foundation-zepto', get_template_directory_uri() . '/js/vendor/custom.modernizr.js', array( 'jquery' ), true ); 

    wp_register_script('foundation-min', get_template_directory_uri() . '/js/foundation.min.js', true ); 
    
    wp_register_script('foundation-alerts', get_template_directory_uri() . '/js/foundation/foundation.alerts.js', true ); 
    
    wp_register_script('foundation-clearing', get_template_directory_uri() . '/js/foundation/foundation.clearing.js', true ); 
    
    wp_register_script('foundation-cookie', get_template_directory_uri() . '/js/foundation/foundation.cookie.js', true ); 
    
    wp_register_script('foundation-dropdown', get_template_directory_uri() . '/js/foundation/foundation.dropdown.js', true );
    
    wp_register_script('foundation-forms', get_template_directory_uri() . '/js/foundation/foundation.forms.js', true ); 
    
    wp_register_script('foundation-interchange', get_template_directory_uri() . '/js/foundation/foundation.interchange.js', true ); 
    
    wp_register_script('foundation-joyride', get_template_directory_uri() . '/js/foundation/foundation.joyride.js', true ); 
    
    wp_register_script('foundation-js', get_template_directory_uri() . '/js/foundation/foundation.js', true );
     
    wp_register_script('foundation-magellan', get_template_directory_uri() . '/js/foundation/foundation.magellan.js', true ); 
    
    wp_register_script('foundation-orbit', get_template_directory_uri() . '/js/foundation/foundation.orbit.js', true ); 
    
    wp_register_script('foundation-placeholder', get_template_directory_uri() . '/js/foundation/foundation.placeholder.js', true ); 
    
    wp_register_script('foundation-reveal', get_template_directory_uri() . '/js/foundation/foundation.reveal.js', true );
    
    wp_register_script('foundation-section', get_template_directory_uri() . '/js/foundation/foundation.section.js', true );

    wp_register_script('foundation-tooltips', get_template_directory_uri() . '/js/foundation/foundation.tooltips.js', true );

    wp_register_script('foundation-topbar', get_template_directory_uri() . '/js/foundation/foundation.topbar.js', true );
 
    //next, we enqueue the script so it gets placed into the theme's header
    
    wp_enqueue_script( 'foundation-custom-modernizer' );
    
    wp_enqueue_script( 'foundation-jquery' ); 
    
    wp_enqueue_script( 'foundation-zepto' );
    
    wp_enqueue_script( 'foundation-min' );
    
    wp_enqueue_script( 'foundation-alerts' );
    
    wp_enqueue_script('foundation-clearing' );
    
    wp_enqueue_script('foundation-cookie' );
    
    wp_enqueue_script('foundation-dropdown' );
    
    wp_enqueue_script('foundation-forms' );
    
    wp_enqueue_script('foundation-interchange' );
    
    wp_enqueue_script('foundation-joyride' ); 
    
    wp_enqueue_script('foundation-js' );
     
    wp_enqueue_script('foundation-magellan' );
    
    wp_enqueue_script('foundation-orbit' );
    
    wp_enqueue_script('foundation-placeholder' );
    
    wp_enqueue_script('foundation-reveal' );
    
    wp_enqueue_script('foundation-section' );

    wp_enqueue_script('foundation-tooltips' );

    wp_enqueue_script('foundation-topbar' );
     
} 
    add_action( 'wp_enqueue_scripts', 'foundation_javascript_inclusion', 5 ); 

/*********************/
/* FOUNDATION FRAMEWORK - CSS */

function foundation_stylesheet_inclusion() { 
    //register styles for our theme 
    
    wp_register_style( 'foundation-stylesheet', get_template_directory_uri() . '/css/foundation.css', array(), 'all' ); 
    
    wp_register_style( 'foundation-min-stylesheet', get_template_directory_uri() . '/css/foundation.min.css', array(), 'all'); 
    
    wp_register_style( 'foundation-normalize', get_template_directory_uri() . '/css/normalize.css', array(), 'all'); 
    
	wp_register_style( 'product-stylesheet', get_template_directory_uri() . '/css/product.css', array(), 'all' ); 

    wp_enqueue_style( 'foundation-stylesheet' );
    
    wp_enqueue_style( 'foundation-min-stylesheet' );
    
    wp_enqueue_style( 'foundation-normalize' );
    
    wp_enqueue_style( 'product-stylesheet' ); 

} 
    add_action( 'wp_enqueue_scripts', 'foundation_stylesheet_inclusion' ); 

/***********************/
/* Add OCMX Menu Items */

add_action('admin_menu', 'ocmx_add_admin');
function ocmx_add_admin() {
	global $wpdb;
	
	add_object_page("Theme Options", "Theme Options", 'edit_themes', basename(__FILE__), '', 'http://obox-design.com/images/ocmx-favicon.png');
	add_submenu_page(basename(__FILE__), "General Options", "General", "edit_theme_options", basename(__FILE__), 'ocmx_general_options');
	add_submenu_page(basename(__FILE__), "Adverts", "Adverts", "administrator",  "ocmx-adverts", 'ocmx_advert_options');
	add_submenu_page(basename(__FILE__), "Typography", "Typography", "edit_theme_options", "ocmx-fonts", 'ocmx_font_options');
	add_submenu_page(basename(__FILE__), "Customize", "Customize", "edit_theme_options", "customize.php");
	add_submenu_page(basename(__FILE__), "Help", "Help", "edit_theme_options", "obox-help", 'ocmx_welcome_page');
};

/*****************/
/* Add Nav Menus */

if (function_exists('register_nav_menus')) :
	register_nav_menus( array(
		'primary' => __('Primary Navigation', '$themename'),
		'secondary' => __('Secondary Navigation', '$themename')
	) );
endif;

/************************************************/
/* Fallback Function for WordPress Custom Menus */

function ocmx_fallback() {
	echo '<ul id="nav" class="clearfix">';
	wp_list_pages('title_li=&');
	echo '</ul>';
}

/*******************************/
/* Integrate goo.gl Shortlinks */

function googl_shortlink($url, $post_id) {
	global $post;
	
	if (!$post_id && $post) $post_id = $post->ID;

	if (is_object($post) && $post->post_status != 'publish')
		return "";

	$shortlink = get_post_meta($post_id, '_googl_shortlink', true);
	if ($shortlink)
		return $shortlink;

	$permalink = get_permalink($post_id);

	$http = new WP_Http();
	$headers = array('Content-Type' => 'application/json');
	$result = $http->request('https://www.googleapis.com/urlshortener/v1/url', array( 'method' => 'POST', 'body' => '{"longUrl": "' . $permalink . '"}', 'headers' => $headers));
	if(is_array($result))
		$result = json_decode($result['body']);
	$shortlink = isset($result->id);

	if ($shortlink) {
		add_post_meta($post_id, '_googl_shortlink', $shortlink, true);
		return $shortlink;
	}
	else {
		return $url;
	}
}

add_filter('get_shortlink', 'googl_shortlink', 9, 2);


/*******************/
/* Widgetized Page */
function add_widgetized_pages(){
	global $wpdb;
	$get_widget_pages = $wpdb->get_results("SELECT * FROM ".$wpdb->postmeta." WHERE `meta_key` = '_wp_page_template' AND  `meta_value` = 'widget-page.php'");
	foreach($get_widget_pages as $pages) :
		$post = get_post($pages->post_id);
		register_sidebar(array("name" => $post->post_title." Slider", "description" => "Place all 'Home Page Widgets' here."));
		register_sidebar(array("name" => $post->post_title." Body", "description" => "Place all 'Home Page Widgets' here.", "before_title" => '<h4 class="widgettitle">', "after_title" => '</h4><div class="content">', 'before_widget' => '<li id="%1$s" class="widget %2$s">', 'after_widget' => '</div></li>'));
	endforeach;
}
add_action("init", "add_widgetized_pages");


/**************************/
/* WP 3.4 Support         */
global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) ) 
	add_theme_support( 'custom-background' ); 
	add_theme_support( 'post-thumbnails' ); 
	add_theme_support( 'automatic-feed-links' ); 
	
if ( ! isset( $content_width ) ) $content_width = 980;


/************************/
/* Add WP Custom Header */
function ocmx_header_style() { $do = "nothing"; }
function ocmx_admin_header_style() { $do = "nothing"; }

/// Add support for custom headers
$headerargs = array( 'wp-head-callback' => 'ocmx_header_style', 'admin-head-callback' => 'ocmx_admin_header_style', 'width' => '2000', 'height' => '520',  'header-text' => false, 'random-default' => true);
add_theme_support( 'custom-header', $headerargs );


/******************************************************************************/
/* Each theme has their own "No Posts" styling, so it's kept in functions.php */

function ocmx_no_posts(){ ?>
<li class="post">
	<h2 class="post-title"><a href="#"><?php _e("No Content Found", "ocmx"); ?></a></h2>
    <div class="copy <?php echo $image_class; ?>">
	    <?php _e("The content you are looking for does not exist", "ocmx"); ?>
    </div>
</li>
<?php 
}

/**************************/
/* Set Up Thumbnails */
function ocmx_setup_image_sizes() {
	//image info: (name, width, height, force-crop)
	add_image_size('4-3-large', 1000, 750, true); 
	add_image_size('4-3-medium', 660, 495, true);
	add_image_size('4-3-medium-nocrop', 660, 495, false); 
	add_image_size('1-1-medium', 660, 660, true);
	add_image_size('1000auto', 1000);
	add_image_size('660auto', 660);
} 

add_action( 'after_setup_theme', 'ocmx_setup_image_sizes' );

/**************************/
/* Facebook Support      */
function get_fbimage() {
  global $post;
  $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '', '' );
  $fbimage = null;
  if ( has_post_thumbnail($post->ID) ) {
    $fbimage = $src[0];
  } else {
    global $post, $posts;
    $fbimage = '';
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i',
    $post->post_content, $matches);
    if(!empty($matches[1]))
	    $fbimage = $matches [1] [0];
  }
  if(empty($fbimage)) {
    $fbimage = get_the_post_thumbnail($post->ID);
  }
  return $fbimage;
}

/********************/
/* WP COMMENTS      */
function personal_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div id="comment-<?php comment_ID(); ?>">
			<div class="comment-author vcard">
				<?php echo get_avatar($comment, $size = '60'); ?>
			</div>
			
			<div class="comment-meta commentmetadata">
				<?php if ($comment->comment_approved == '0') : ?>
					<em><?php _e('Your comment is awaiting moderation.', 'ocmx') ?></em>
					<br />
				<?php endif; ?>
				<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
				<a class="date" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s', 'ocmx'), get_comment_date(),  get_comment_time()) ?></a>
				<?php edit_comment_link(__('(Edit)', 'ocmx'),'  ','') ?>
				<?php comment_text() ?>
			</div>

			<div class="reply">
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</div>
		</div>
<?php
}