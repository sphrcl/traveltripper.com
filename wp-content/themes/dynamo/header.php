<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--Set Viewport for Mobile Devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>
<?php
	// global $page, $paged, $post;
	// wp_title( '|', true, 'right' );
	// bloginfo( 'name' );
	// $site_description = get_bloginfo( 'description', 'display' );
	// if ( $site_description && ( is_home() || is_front_page() ) )
	// 	echo " | $site_description";
	// if ( $paged >= 2 || $page >= 2 )
	// 	echo ' | ' . sprintf( __( 'Page %s', 'ocmx' ), max( $paged, $page ) );
	wp_title();
?>
</title>
<!-- Setup OpenGraph support-->
<?php if(is_home()) : ?>

	<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
	<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
	<meta property="og:url" content="<?php echo home_url(); ?>"/>
	<meta property="og:image" content="<?php echo get_fbimage(); ?>"/>
	<meta property="og:type" content="<?php echo "website";?>"/>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>

<?php else : ?>
	<meta property="og:title" content="<?php the_title(); ?>"/>
	<meta property="og:description" content="<?php echo strip_tags($post->post_excerpt); ?>"/>
	<meta property="og:url" content="<?php the_permalink(); ?>"/>
	<meta property="og:image" content="<?php echo get_fbimage(); ?>"/>
	<meta property="og:type" content="<?php echo "article"; ?>"/>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
<?php endif; ?>
<!-- Begin Styling -->
<?php if(get_option("ocmx_custom_favicon") != "") : ?>
	<link href="<?php echo get_option("ocmx_custom_favicon"); ?>" rel="icon" type="image/png" />
<?php endif; ?>		
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script>
		 // DOM ready
		 $(function() {
		   
		      // Create the dropdown base
		      $("<span class='dropmenu'><select /></span>").appendTo("nav");
		      
		      // Create default option "Go to..."
		      $("<option />", {
		         "selected": "selected",
		         "value"   : "",
		         "text"    : "<?php _e('Menu', 'cebolang'); ?>"
		      }).appendTo("nav select");
		      
		      // Populate dropdown with menu items
		      $("nav .navsec li a").each(function() {
		       var el = $(this);
		       $("<option />", {
		           "value"   : el.attr("href"),
		           "text"    : el.text()
		       }).appendTo("nav select");
		      });
		
		      $("nav select").change(function() {
		        window.location = $(this).find("option:selected").val();
		      });
		 
		 });
	</script>
	
		
<?php wp_head(); ?>



	
<?php  // Load custom header image for spectific pages
$parentpage = get_template_link(get_post_type().".php");

if(!empty($parentpage) && !is_page())
	$headerid = $parentpage->ID;
elseif(is_page())
	$headerid = $post->ID;

if(isset($headerid)) :
$header_bg_image = get_post_meta($headerid, "header_image", true);
$header_bg_attributes = get_post_meta($headerid, "header_image_attributes", true);

if($header_bg_image  != '' || !empty($header_bg_attributes["colour"])) : ?>
	<style>#title-container{
		background: <?php if($header_bg_image != '') echo "url($header_bg_image);"; ?> <?php if(!empty($header_bg_attributes)) echo implode(" ", $header_bg_attributes);?>;}</style>
<?php endif;
endif; ?>

<?php if (is_page('confirmation') ) { ?>
<!-- Google Code for Lead Conversion Page on confirmation page -->
		<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 990223219;
			var google_conversion_language = "en";
			var google_conversion_format = "3";
			var google_conversion_color = "ffffff";
			var google_conversion_label = "5Ao1CO2hlAkQ87aW2AM";
			var google_conversion_value = 50.00;
			var google_remarketing_only = false;
			/* ]]> */
			</script>
			<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
			</script>
			<noscript>
			<div style="display:inline;">
				<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/990223219/?value=10.00&amp;label=5Ao1CO2hlAkQ87aW2AM&amp;guid=ON&amp;script=0"/>
				</div>
				</noscript>
<?php } ?>


<!-- Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans:400,600' rel='stylesheet' type='text/css'>
	
	<!-- CSS Fonts -->
	<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/fonts.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.css" rel="stylesheet">
	
	
	<!-- CSS Styles -->	
	<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/style.css">
	
	<!-- Lightbox -->	
	<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet"/>
	
	<!-- Media Queries -->	
	<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/media.css">








<style>	

html, body {
    height: 100%;
    margin-top: 0 !important;
    background: #000;
}


#content-container {
	padding-top: 0 !important;
}

<?php if(is_front_page()) { ?>


	/*--------------------------------------------------------
Typography
--------------------------------------------------------*/

h1, h2, h3, h4 {
	text-transform: uppercase;
	font-weight: 400;
}

h1 {
	font-family: Helvetica;
	font-size: 36px;
	position: relative;
	color: #001e3a;
}

.hello-container h1 {
	margin: 0;
}
.hello-container h2 {
	margin: 0;
}

h1.white {
	color: white;
}

h2 {
	font-family: Helvetica;
	font-size: 44px;
	text-transform: uppercase;
	position: relative;
}

h2.white {
	color: white;
}


h3 {
	font-family: Helvetica;
	font-size: 22px;
	color: #62b5e5;
}

h3.white {
	color: white;
}

h4 {
	font-family: Helvetica;
	font-size: 16px;
	color: #001e3a;
	font-weight: bold;
	padding: 15px 0;
}




p {
	font-family: Helvetica;
	color: #959494;
	font-size: 15px;
	line-height: 23px;
	padding: 0 0 15px 0;
	margin: 0;
}


p a {
	color: #00a2ff;
	text-decoration: none;
	font-family: Helvetica;
}

p a:hover {
	color: #333;
	transition: color 0.5s;
	-moz-transition: color 0.5s;
	-webkit-transition: color 0.5s;
	-o-transition: color 0.5s;
}



a {
	color: #00a2ff;
}
.clear {
	clear: both;
}





<?php } ?>

</style>


<?php if ( is_single() ) {?>
<link rel="author" href="https://plus.google.com/105614564767589376846"/>
<?php }?>


</head>

<body id="<?php if(is_front_page()) { ?>yellowboom<?php } ?>" <?php body_class(''); ?>

<div id="wrapper" class="<?php echo get_option("ocmx_site_layout"); ?> <?php if(!is_active_sidebar('slider')) echo "no-slider"; ?>>">
		
	    
	    <nav>
		
		<div class="widecontainer">
			<a href="<?php bloginfo ('url'); ?>"><img class="logo" src="<?php bloginfo ('template_url'); ?>/images/logo.png" width="250" alt="Travel Tripper" /></a>
			
			<ul class="navsec">
				<?  wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => false,  'items_wrap'      => '%3$s', ) ); ?>
					<li class="demo"><a href="http://demo.reztrip.com" target="_blank" class="button green">Demo Engine</a></li>
			</ul>
		</div>
		
		
		<i class="fa fa-bars"></i>
		
		
	</nav>

	    

	</div>

	<div id="content-container" class="<?php echo get_option("ocmx_sidebar_layout"); ?> clearfix">