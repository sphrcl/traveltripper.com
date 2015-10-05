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

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link rel="stylesheet" type="text/css" href="css/flexslider.css" >
<link rel="stylesheet" type="text/css" href="css/bigvideo.css">

<link rel="stylesheet" type="text/css" href="style.css">

<!-- responsive style -->
<link rel="stylesheet" type="text/css" href="css/media.css">

<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>-->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script>

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
							<a title="Solutions" href="solutions.php" class="<?php if($basename == 'solutions') { ?>active-page<?php } ?>">Solutions</a>
							<ul class="subnavigation">
								<li class="icon-crs-distribution"><a title="CRS &amp; Distribution" href="crs.php">CRS &amp; Distribution</a></li>
								<li class="icon-booking-engine"><a title="Booking Engine" href="booking-engine.php">Booking Engine</a></li>
								<li class="icon-web-mobile"><a title="Web &amp; Mobile" href="web-mobile.php">Web &amp; Mobile</a></li>
								<li class="icon-digital-marketing"><a title="Digital Marketing" href="digital-marketing.php">Digital Marketing</a></li>
								<li class="icon-revenue-management"><a title="Revenue Management" href="revup.php">Revenue Management</a></li>

							</ul>
						</li>
						<li><a title="Resources" href="resources.php" class="<?php if($basename == 'resources') { ?>active-page<?php } ?>">Resources</a></li>
						<li><a title="Blog" href="/blog" class="<?php if($basename == 'blog') { ?>active-page<?php } ?>">Blog</a></li>
						<li><a title="About Us" href="aboutus.php" class="<?php if($basename == 'aboutus') { ?>active-page<?php } ?>">About Us</a></li>
					</ul>
				</div>

				<div class="rightnav">
					<ul>
						<!-- <li class="demo-login"><a href="login.php">Login</a></li> -->
						<li class="demo-engine"><a href="https://demo.reztrip.com/">Demo Engine</a></li>
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
