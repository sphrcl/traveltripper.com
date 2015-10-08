<?php

// https://www.elegantthemes.com/blog/tips-tricks/how-to-add-open-graph-tags-to-wordpress

function fb_opengraph() {

global $post;

if(is_single()) {
	
	if(has_post_thumbnail($post->ID)) {
		$img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'large');
	} else {
		// $img_src = get_stylesheet_directory_uri() . '/img/opengraph_image.jpg';
	}
	
	$excerpt = get_the_excerpt();
	
?>
 
    <meta property="og:title" content="<?php echo the_title(); ?>"/>
    <meta property="og:description" content="<?php echo $excerpt; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <meta property="og:image" content="<?php echo $img_src[0]; ?>"/>
 
<?php } else {
	
	$img_src = get_template_directory_uri() . '/images/traveltripperlogo.png';
	
	if (get_the_excerpt() != '') {
		$excerpt = get_the_excerpt();
	} else {
		$excerpt = 'Discover Travel Tripper’s powerful hotel platforms designed to increase direct reservations and maximize revenue';
	}
	
	if (is_home()) {
		$fb_title = 'Travel Tripper';
	} else {
		$fb_title = get_the_title();
	}
	
?>

    <meta property="og:title" content="<?php echo $fb_title; ?>"/>
    <meta property="og:description" content="<?php echo $excerpt; ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <meta property="og:image" content="<?php echo $img_src; ?>"/>
	
<?php } ?>


<?php } // END FUNCTION
add_action('wp_head', 'fb_opengraph', 5);
?>