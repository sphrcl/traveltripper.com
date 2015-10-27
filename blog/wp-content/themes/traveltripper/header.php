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
	<!--
	<?php if (get_option('misfit_custom_favicon') == '') { ?>
	
	<link rel="icon" href="<?php bloginfo ('template_url'); ?>/cebo_options/<?php bloginfo ('template_url'); ?>/images/admin_sidebar_icon.png" type="image/x-ico"/>
	
	<?php } else { ?>
	
	<link rel="icon" href="<?php echo get_option('misfit_custom_favicon'); ?>" type="image/x-ico"/>
	
	<?php } ?>
	-->
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('misfit_feedburner_url') <> "" ) { echo get_option('misfit_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/flexslider.css" >
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Media Queries -->	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/media.css">

	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/images/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/images/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/images/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/images/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/images/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/images/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/images/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/images/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/images/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

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
	
	<?php if(is_singular()) { ?>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
	<?php } ?>
	
	</head>
	
<body <?php body_class( $class ); ?>>

	<div id="wrapper">

		<div id="header">
		
			<div class="container">
		
				<div class="logo">
					<!-- <a href="<?php bloginfo('url'); ?>"> -->
					<a href="http://www.traveltripper.com.php54-4.ord1-1.websitetestlink.com/new-html/index.php">

					<?php if (get_option('misfit_logo') == '') { ?>
						<img src="<?php bloginfo('template_url'); ?>/images/traveltripperlogo.png" alt="<?php bloginfo('name'); ?>" />
					<?php } else { ?>
						<img src="<?php echo get_option('misfit_logo'); ?>" alt="<?php bloginfo('name'); ?>" />
					<?php } ?>
					</a>
				</div>

				<div class="navigation">
					<ul class="main-nav">
							<?php wp_nav_menu( array( 'theme_location' => 'primary',  'items_wrap' => '%3$s', 'container' => '' ) ); ?>
					</ul>
				</div>
				
				<div class="rightnav">
					<ul>
						<!-- <li class="demo-login"><a href="login.php">Login</a></li> -->
						<li class="demo-engine"><a href="http://try.traveltripper.com/request-demo/">Request a Demo</a></li>

					</ul>
				</div>
				
				<div class="openme"><i class="fa fa-bars"></i></div>
				
			</div>
		
		</div>
		
		
		<div id="mobhead">
			
			<div class="container">
			<div class="subcontainer">
				
				<div class="closeme"><i class="fa fa-times"></i></div>
				
				<ul class="mainsubs">
					<li><a href="http://www.traveltripper.com.php54-4.ord1-1.websitetestlink.com/new-html/">Home</a></li>
					<?php wp_nav_menu( array( 'theme_location' => 'primary',  'items_wrap' => '%3$s', 'container' => '' ) ); ?>
					<li class="mobcase">
						<!-- <a class="mc-left" href="login.php">Login</a> -->
						<a class="mc-right" href="http://try.traveltripper.com/request-demo/">Request a Demo</a>
					</li>
				</ul>
				
			</div>
			</div>
		
		</div>