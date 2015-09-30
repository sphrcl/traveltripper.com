<!DOCTYPE HTML>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>
		<?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' );
	
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
	
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'misfitlang' ), max( $paged, $page ) );
		?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if (get_option('misfit_custom_favicon') == '') { ?>
	
	<link rel="icon" href="<?php bloginfo ('template_url'); ?>/cebo_options/<?php bloginfo ('template_url'); ?>/images/admin_sidebar_icon.png" type="image/x-ico"/>
	
	<? } else { ?>
	
	<link rel="icon" href="<?php echo get_option('misfit_custom_favicon'); ?>" type="image/x-ico"/>
	
	<? } ?>
	
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('misfit_feedburner_url') <> "" ) { echo get_option('misfit_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/flexslider.css" >
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Media Queries -->	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/media.css">

	<!-- Your jquery library is included in the /library/simple_functions.php file line 294 //ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js  -->
	
	
	

	<?php
		/****************** DO NOT REMOVE **********************
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>
	</head> 
	
<body <?php body_class( $class ); ?>>

	<div id="wrapper">

		<div id="header">
		
			<div class="container">
		
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>">
					<?php if (get_option('misfit_logo') == '') { ?>
						<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" />
					<? } else { ?>
						<img src="<?php echo get_option('misfit_logo'); ?>" alt="<?php bloginfo('name'); ?>" />
					<? } ?>
					</a>
				</div>

				<div class="navigation">
					<ul class="main-nav">
							<?php wp_nav_menu( array( 'theme_location' => 'primary',  'items_wrap' => '%3$s', 'container' => '' ) ); ?>
					</ul>
				</div>
				
				<div class="rightnav">
					<ul>
						<li class="demo-login"><a href="login.php">Login</a></li>
						<li class="demo-engine"><a href="#">Demo Engine</a></li>

					</ul>
				</div>
				
			</div>
		
		</div>