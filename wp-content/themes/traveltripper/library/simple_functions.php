<?php

register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'misfit' ),
) );


register_nav_menus( array(
	'category' => __( 'Categorical Navigation', 'misfit' ),
) );


// Sidebar Activation

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Sidebar',
'before_widget' => '<div class="widgets %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widgettitle">',
'after_title' => '</h3>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Footer Column 1',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));


if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Footer Column 2',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Footer Column 3',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));


/* this is for the image grabber 

*/
// Pull an image/post ID from the media gallery
function sp_get_image_id($num = 0) {
	global $post;
	$children = get_children(array(
		'post_parent' => $post->ID,
		'post_type' => 'attachment',
		'post_mime_type' => 'image',
		'orderby' => 'menu_order',
		'order' => 'ASC'
	));

	$count = 0;
    foreach ((array)$children as $key => $value) {
        $images[$count] = $value;
        $count++;
    }
	if(isset($images[$num]))
		return $images[$num]->ID;
	else
		return false;
}

// Pull an image URL from the media gallery
function sp_get_image($num = 0) {
	global $post;
	$children = get_children(array(
		'post_parent' => $post->ID,
		'post_type' => 'attachment',
		'post_mime_type' => 'image',
		'orderby' => 'menu_order',
		'order' => 'ASC'
	));

	$count = 0;
    foreach ((array)$children as $key => $value) {
        $images[$count] = $value;
        $count++;
    }
	if(isset($images[$num]))
		return wp_get_attachment_url($images[$num]->ID);
	else
		return false;
}
/* Determine how many words are in an excerpt and what the (Read More) link looks like */

function new_excerpt_length($length) {
	return 70;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($post) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

/* ==================================== */

if ( function_exists( 'add_theme_support' ) ) { // WP 2.9 Post Thumbnail Feature
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 115, 115, true ); // Normal Post Thumbnail
    add_image_size( 'featured-properties-thumbnail', 290, 200, true ); // Home Page Featured Property Thumbnail
    add_image_size( 'listing-photo-thumbnail', 110, 80, true ); // Property Listing Thumbnail
    add_image_size( 'archive-photo-thumbnail', 225, 150, true ); // Archive Listing Thumbnail
}

function get_page_with_template($template) {
	$pages = get_pages();
	foreach($pages as $p) {
		$meta = get_post_custom_values("_wp_page_template",$p->ID);
		if($meta[0] == $template.".php") {
			return $p->ID;
		}
	}
	return false;
}

function url_get_contents ($Url) {
    if (!function_exists('curl_init')){ 
        die('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

function feedFilter($query) {
	if ($query->is_feed) {
		add_filter('rss2_item', 'feedContentFilter');
		}
	return $query;
}
add_filter('pre_get_posts','feedFilter');
 
function feedContentFilter($item) {

	global $post;

	$args = array(
		'order'          => 'ASC',
		'post_type'      => 'attachment',
		'post_parent'    => $post->ID,
		'post_mime_type' => 'image',
		'post_status'    => null,
		'numberposts'    => 1,
	);
	$attachments = get_posts($args);
	if ($attachments) {
		foreach ($attachments as $attachment) {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
			$mime = get_post_mime_type($attachment->ID);
		}
	}
	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
	if ($imgsrc) {
		echo '<enclosure url="'.$imgsrc [0].'" length="" type="'.$mime.'"/>';
	} 
	return $item;
}

class Walker_Sitemap extends Walker_page {
 function start_el(&$output, $page, $depth, $args, $item, $current_page) {
		if ( $depth )
			$indent = str_repeat("\t", $depth);
		else
			$indent = '';
 
		extract($args, EXTR_SKIP);
 
		$output .= $indent . '' . apply_filters( 'the_title', $page->post_title, $page->ID ) . ',';
 
                $description = get_post_meta($page->ID, 'description', true);
                $desc = substr($description, 0, 10);
 
                if( ! empty( $description ) ) {
			$output .= '<div class="description">' . $desc . '</div>';
                }		
 
	}
}

class MV_Cleaner_Walker_Nav_Menu extends Walker {
    var $tree_type = array( 'post_type', 'taxonomy', 'custom' );
    var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
    function start_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<nav class=\"sub-menu\">\n";
    }
    function end_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</nav>\n";
    }
    function start_el(&$output, $item, $depth, $args) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes = in_array( 'current-menu-item', $classes ) ? array( 'current-menu-item' ) : array();
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = strlen( trim( $class_names ) ) > 0 ? ' class="' . esc_attr( $class_names ) . '"' : '';
        $id = apply_filters( 'nav_menu_item_id', '', $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
        $output .= $indent . '<span' . $id . $value . $class_names .'>';
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    function end_el(&$output, $item, $depth) {
        $output .= "</span>\n";
    }
}


add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
    return 'class="gohead"';
}
function posts_link_attributes_2() {
    return 'class="gohead"';
}

function custom_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 10; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'custom_tag_cloud_widget' );



if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}


// Removed shortcodes from the content
function  strip_shortcode_gallery( $content ) {
    preg_match_all( '/'. get_shortcode_regex() .'/s', $content, $matches, PREG_SET_ORDER );
    if ( ! empty( $matches ) ) {
        foreach ( $matches as $shortcode ) {
            if ( 'gallery' === $shortcode[2] ) {
                $pos = strpos( $content, $shortcode[0] );
                if ($pos !== false)
                    return substr_replace( $content, '', $pos, strlen($shortcode[0]) );
            }
        }
    }
    return $content;
};

// Get attached images & spits out a list of them.
function nerdy_get_images($size = 'thumbnail', $limit = '0', $offset = '0') {
    global $post;
    $images = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );
    if ($images) {
        $num_of_images = count($images);
        if ($offset > 0) : $start = $offset--; else : $start = 0; endif;
        if ($limit > 0) : $stop = $limit+$start; else : $stop = $num_of_images; endif;
        $i = 0;
        foreach ($images as $image) {
            if ($start <= $i and $i < $stop) {
            $img_title = $image->post_title;   // title.
            $img_description = $image->post_content; // description.
            $img_caption = $image->post_excerpt; // caption.
            $img_url = wp_get_attachment_url($image->ID); // url of the full size image.
            $preview_array = image_downsize( $image->ID, $size );
            $img_preview = $preview_array[0]; // thumbnail or medium image to use for preview.
            ?>
            <li>
                <a href="<?php echo $img_url; ?>"><img src="<?php echo $img_preview; ?>" alt="<?php echo $img_caption; ?>" title="<?php echo $img_title; ?>"></a>
            </li>
            <?
            }
            $i++;
        }
    }
}

function get_post_gallery_imagess() {
    $attachment_ids = array();
    $pattern = get_shortcode_regex();
    $images = array();
    if (preg_match_all( '/'. $pattern .'/s', get_the_content(), $matches ) ) {
        //finds the "gallery" shortcode and puts the image ids in an associative array at $matches[3]
        $count = count($matches[3]);      //in case there is more than one gallery in the post.
        for ($i = 0; $i < $count; $i++){
            $atts = shortcode_parse_atts( $matches[3][$i] );
            if ( isset( $atts['ids'] ) ){
                $attachment_ids = explode( ',', $atts['ids'] );
                $attachementsCount = count($attachment_ids);
                if ($attachementsCount > 0){
                    for ($j = 0; $j < $attachementsCount ; $j++) { 
                        $image = array();
                        $attachmentId = intval($attachment_ids[$j]);
                        $image['id'] = $attachmentId;
                        $image['full'] = wp_get_attachment_image_src($attachmentId, 'full');
                        $image['medium'] = wp_get_attachment_image_src($attachmentId, 'medium');
                        $image['thumbnail'] = wp_get_attachment_image_src($attachmentId, 'thumbnail');
                        $image['captioner'] = wp_get_attachment_metadata($attachmentId, true);
                        array_push($images, $image);
                    }
                }
            }
        }
    }
    return $images;
}

add_filter('show_admin_bar', '__return_false');


if ( !function_exists('ss_framework_admin_scripts') ) {

	// Backend Scripts
	function ss_framework_admin_scripts( $hook ) {

		if( $hook == 'post.php' || $hook == 'post-new.php' ) {
			wp_register_script( 'tinymce_scripts', SS_BASE_URL . 'library/tinymce/js/scripts.js', array('jquery'), false, true );
			wp_enqueue_script('tinymce_scripts');
		}

	}
	add_action('admin_enqueue_scripts', 'ss_framework_admin_scripts');
	
}

function change_contact_info($contactmethods) {
    unset($contactmethods['aim']);
    unset($contactmethods['yim']);
    unset($contactmethods['jabber']);
    $contactmethods['website_title'] = 'Website Title';
    $contactmethods['twitter'] = 'Twitter';
    $contactmethods['facebook'] = 'Facebook';
    $contactmethods['linkedin'] = 'Linked In';
    $contactmethods['gplus'] = 'Google +';
    return $contactmethods;
}

add_filter('user_contactmethods','change_contact_info',10,1);


/* Adding Image Upload Fields */
add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) 
{ 
?>

	<h3>Profile Images</h3>

	<style type="text/css">
		.fh-profile-upload-options th,
		.fh-profile-upload-options td,
		.fh-profile-upload-options input {
			vertical-align: top;
		}

		.user-preview-image {
			display: block;
			height: auto;
			width: 300px;
		}

	</style>

	<table class="form-table fh-profile-upload-options">
		<tr>
			<th>
				<label for="image">Main Profile Image</label>
			</th>

			<td>
				<img class="user-preview-image" src="<?php echo esc_attr( get_the_author_meta( 'image', $user->ID ) ); ?>">

				<input type="text" name="image" id="image" value="<?php echo esc_attr( get_the_author_meta( 'image', $user->ID ) ); ?>" class="regular-text" />
				<input type='button' class="button-primary" value="Upload Image" id="uploadimage"/><br />

				<span class="description">Please upload an image for your profile.</span>
			</td>
		</tr>

		<tr>
			<th>
				<label for="image">Sidebar Profile Image</label>
			</th>

			<td>
				<img class="user-preview-image" src="<?php echo esc_attr( get_the_author_meta( 'sidebarimage', $user->ID ) ); ?>">

				<input type="text" name="sidebarimage" id="sidebarimage" value="<?php echo esc_attr( get_the_author_meta( 'sidebarimage', $user->ID ) ); ?>" class="regular-text" />
				<input type='button' class="button-primary" value="Upload Image" id="sidebarUploadimage"/><br />

				<span class="description">Please upload an image for the sidebar.</span>
			</td>
		</tr>
	</table>

	<script type="text/javascript">
		(function( $ ) {
			$( '#uploadimage' ).on( 'click', function() {
				tb_show('test', 'media-upload.php?type=image&TB_iframe=1');

				window.send_to_editor = function( html ) 
				{
					imgurl = $( 'img',html ).attr( 'src' );
					$( '#image' ).val(imgurl);
					tb_remove();
				}

				return false;
			});

			$( 'input#sidebarUploadimage' ).on('click', function() {
				tb_show('', 'media-upload.php?type=image&TB_iframe=true');

				window.send_to_editor = function( html ) 
				{
					imgurl = $( 'img', html ).attr( 'src' );
					$( '#sidebarimage' ).val(imgurl);
					tb_remove();
				}

				return false;
			});
		})(jQuery);
	</script>

<?php 
}



add_action( 'admin_enqueue_scripts', 'enqueue_admin' );

function enqueue_admin()
{
	wp_enqueue_script( 'thickbox' );
	wp_enqueue_style('thickbox');

	wp_enqueue_script('media-upload');
}

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
{
		return false;
	}

update_user_meta( $user_id, 'image', $_POST[ 'image' ] );
	update_user_meta( $user_id, 'sidebarimage', $_POST[ 'sidebarimage' ] );
}


// Add to the body_class function
function condensed_body_class($classes) {
    global $post;
 
    // add a class for the name of the page - later might want to remove the auto generated pageid class which isn't very useful
    if( is_page()) {
        $pn = $post->post_name;
        $classes[] = "page_".$pn;
    }
 
    // add a class for the parent page name
    $post_parent = get_post($post->post_parent);
    $parentSlug = $post_parent->post_name;
    
    if ( is_page() && $post->post_parent ) {
            $classes[] = "parent_".$parentSlug;
    }
 
    // add class for the name of the custom template used (if any)
    $temp = get_page_template();
    if ( $temp != null ) {
        $path = pathinfo($temp);
        $tmp = $path['filename'] . "." . $path['extension'];
        $tn= str_replace(".php", "", $tmp);
        $classes[] = "template_".$tn;
    }
 
    return $classes;
 
}
 
add_filter('body_class', 'condensed_body_class');



add_filter('post_gallery', 'my_post_gallery', 10, 2);
function my_post_gallery($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';

    // Here's your actual output, you may customize it to your need

    $output = "</div></article></section><div class=\"gallerybanner\">\n";
    $output .= "<div id=\"carousel-gallery\" class=\"touchcarousel  black-and-white\">\n";
    $output .= "<ul class=\"touchcarousel-container\">\n";

    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it's up to you)
//      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
        $img = wp_get_attachment_image_src($id, 'full');
        $caption =  $attachment->post_excerpt;

        $output .= "<li class=\"touchcarousel-item\">\n";
        $output .= "<a href=\"{$img[0]}\" data-title=\"{$caption}\" data-lightbox=\"gallery\"><img src=\"{$img[0]}\" alt=\"alternate text\" title=\"here is a title\" /></a>\n";
        $output .= "</li>\n";
    }

    $output .= "</ul></div></div>\n";
    $output .= "<section class=\"pagecopy nowreturn\"><article class=\"content\"><div>\n";

    return $output;
}

// Breadcrumbs
function custom_breadcrumbs() {
      
    // Settings
    $separator          = '&gt;';
    $breadcrums_id      = 'bcrumbs';
    $breadcrums_class   = 'bcrumbs';
    $home_title         = 'Home';
     
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
      
    // Get the query & post information
    global $post,$wp_query;
      
    // Do not display on the homepage
    if ( !is_front_page() ) {
      
        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
          
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
          
        if ( is_archive() && !is_tax() && !is_category() ) {
             
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
             
        } else if ( is_archive() && is_tax() && !is_category() ) {
             
            // If post is a custom post type
            $post_type = get_post_type();
             
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                 
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
             
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
             
            }
             
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
             
        } else if ( is_single() ) {
             
            // If post is a custom post type
            $post_type = get_post_type();
             
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                 
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
             
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
             
            }
             
            // Get post category info
            $category = get_the_category();
             
            // Get last category post is in
            $last_category = end(array_values($category));
             
            // Get parent any categories and create array
            $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
            $cat_parents = explode(',',$get_cat_parents);
             
            // Loop through parent categories and store in variable $cat_display
            $cat_display = '';
            foreach($cat_parents as $parents) {
                $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
            }
             
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                  
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
              
            }
             
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                 
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                 
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
             
            } else {
                 
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                 
            }
             
        } else if ( is_category() ) {
              
            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
              
        } else if ( is_page() ) {
              
            // Standard page
            if( $post->post_parent ){
                  
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                  
                // Get parents in the right order
                $anc = array_reverse($anc);
                  
                // Parent page loop
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                  
                // Display parent pages
                echo $parents;
                  
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                  
            } else {
                  
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_tag() ) {
              
            // Tag page
              
            // Get tag information
            $term_id = get_query_var('tag_id');
            $taxonomy = 'post_tag';
            $args ='include=' . $term_id;
            $terms = get_terms( $taxonomy, $args );
              
            // Display the tag name
            echo '<li class="item-current item-tag-' . $terms[0]->term_id . ' item-tag-' . $terms[0]->slug . '"><strong class="bread-current bread-tag-' . $terms[0]->term_id . ' bread-tag-' . $terms[0]->slug . '">' . $terms[0]->name . '</strong></li>';
          
        } elseif ( is_day() ) {
              
            // Day archive
              
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
              
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
              
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
              
        } else if ( is_month() ) {
              
            // Month Archive
              
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
              
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
              
        } else if ( is_year() ) {
              
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
              
        } else if ( is_author() ) {
              
            // Auhor archive
              
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
              
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
          
        } else if ( get_query_var('paged') ) {
              
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
              
        } else if ( is_search() ) {
          
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
          
        } elseif ( is_404() ) {
              
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
      
        echo '</ul>';
          
    }
      
}



?>