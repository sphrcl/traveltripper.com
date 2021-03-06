<?php

	$sitename = 'Travel Tripper';
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$baseurl = "http://$_SERVER[HTTP_HOST]/[directory to installation if subdirectory]";

?>
<!DOCTYPE HTML>
<!--[if lt IE 7 ]> <html lang="en" class="ie ie6"> <![endif]-->
<!--[if IE 7 ]>	<html lang="en" class="ie ie7"> <![endif]-->
<!--[if IE 8 ]>	<html lang="en" class="ie ie8"> <![endif]-->
<!--[if IE 9 ]>	<html lang="en" class="ie ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php echo $sitename; ?> <?php echo $pagetitle; ?></title>
<meta name="description" content="<?php echo $description; ?>"/>

<meta property="og:title" content="<?php echo $sitename; ?> <?php echo $pagetitle; ?>" />
<meta property="og:site_name" content="<?php echo $sitename; ?>"/>
<meta property="og:url" content="<?php echo $actual_link; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<?php if($image) { ?><meta property="og:image" content="<?php echo $baseurl; echo $image; ?>" /><?php } ?>
<meta property="fb:app_id" content="1595619917381833" />
<meta property="og:type" content="article" />

<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link rel="stylesheet" type="text/css" href="css/flexslider.css" >
<link rel="stylesheet" type="text/css" href="css/bigvideo.css">

<link rel="stylesheet" type="text/css" href="style.css">

<!-- responsive style -->
<link rel="stylesheet" type="text/css" href="css/media.css">

<!-- favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>-->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script>
<script type="text/javascript" src="js/skrollr.min.js"></script>

<script type="text/javascript" src="js/video.js"></script>
<script type="text/javascript" src="js/bigvideo.js"></script>

<script type="text/javascript" src="js/general.js"></script>

</head>

<?php

	$basename = basename($_SERVER['PHP_SELF'],'.php');

	if($basename != 'index') {
		$bodyclass = 'page';
	} else {
		$bodyclass = 'home';
	}

?>

<body class="<?php echo $bodyclass; ?> <?php echo $template_class; ?>">

	<div id="wrapper">

		<div id="header">

			<div class="container">

				<div class="logo">
					<a href="index.php"><img src="images/traveltripperlogo.png" alt="travel tripper" /></a>
				</div>

				<div class="navigation">
					<ul class="main-nav">
						<li>
							<a href="solutions.php" class="<?php if($basename == 'solutions') { ?>active-page<?php } ?>">Solutions</a>
							<ul class="subnavigation">
								<li class="icon-crs-distribution"><a href="crs.php">CRS &amp; Distribution</a></li>
								<li class="icon-booking-engine"><a href="booking-engine.php">Booking Engine</a></li>
								<li class="icon-web-mobile"><a href="web-mobile.php">Web &amp; Mobile</a></li>
								<li class="icon-digital-marketing"><a href="digital-marketing.php">Digital Marketing</a></li>
								<li class="icon-revenue-management"><a href="revup.php">Revenue Management</a></li>

							</ul>
						</li>
						<li><a href="resources.php" class="<?php if($basename == 'resources') { ?>active-page<?php } ?>">Resources</a></li>
						<li><a href="/blog" class="<?php if($basename == 'blog') { ?>active-page<?php } ?>">Blog</a></li>
						<li><a href="aboutus.php" class="<?php if($basename == 'aboutus') { ?>active-page<?php } ?>">About Us</a></li>
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
					<li><a href="index.php">Home</a></li>
					<li>
						<a href="solutions.php">Solutions</a>
						<ul class="subbies">
							<li class="sub-crs"><a href="crs.php">CRS &amp; Distribution</a></li>
							<li class="sub-booking"><a href="booking-engine.php">Booking Engine</a></li>
							<li class="sub-web"><a href="web-mobile.php">Web &amp; Mobile</a></li>
							<li class="sub-digital"><a href="digital-marketing.php">Digital Marketing</a></li>
							<li class="sub-revup"><a href="revup.php">Revenue Management</a></li>
						</ul>
					</li>
					<li><a href="resources.php">Resources</a></li>
					<li><a href="/blog">Blog</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li class="mobcase"><a class="mc-left" href="#">Login</a><a class="mc-right" href="#">Demo Engine</a></li>
				</ul>
				
			</div>
			</div>
		
		</div>
