<?php 
/* 
Template Name: Booking Engine
*/
?>

<?php get_header(); ?>

<?php 
if(have_posts()) : while(have_posts()) : the_post();
$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
?>

<?php
if ($imgsrc) {
	$image = $imgsrc[0];
} else {
	$image = get_bloginfo('template_url') . '/images/banner-booking-engine.jpg';
}
?>

	<div id="pagebanner" class="contentright" style="background-image: url(<?php echo $image; ?>);">
	
		<div class="container">
		
			<h1><?php the_title(); ?></h1>
			
			<?php the_content(); ?>
		
		</div>
		
	</div>

	<div id="breadcrumbs">
		<div class="container">
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>
	
	<div id="page-layer-1" class="page-layer">
	
		<div class="container">
		
			<div class="col_one_half">
				<img src="<?php bloginfo('template_url'); ?>/images/booking-engine-designed-to-convert.png" alt="Designed to convert" />
			</div>
			
			<div class="col_one_fourth">
				<div class="spacing">
					<h3>Designed to convert</h3>
					<h4>Best-in-class booking engine</h4>
					<p>The industry’s most innovative hotel reservations solution. Maecenas ut cursus ligula. ROI pharetra consequat dolor non. semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae, sollicitudin.</p>
				</div>
			</div>
			
			<div class="col_one_fourth">
			
			</div>
			
			<div class="module2">
					<div class="spacing2">
						<h2>76%</h2>
						<div class="modulecontent2">
							<p>Find out how Mayfair Hotel & Spa in Miami increased direct bookings by 76% </p>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
			
		</div>
		
	</div>
	
	<div id="page-layer-2" class="page-layer">
	
		<div class="container">
		
			<div class="col_one_fourth">
				<div class="spacing">
					<h3>Built-in tools to maximize conversions</h3>
					<h4>Automated Best Rate Guarantee</h4>
					<p>Powerful intelligence reporting. Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae, sollicitudin.</p>
					
					<ul>
						<li>
							<h4>Automated Email Retargeting</h4>
							<p>The industry’s most innovative hotel reservations solution. Maecenas ut cursus ligula. ROI pharetra.</p>
						</li>
					</ul>
					
				</div>
			</div>
		
			<div class="col_three_fourth">
				<img src="<?php bloginfo('template_url'); ?>/images/booking-engine-best-rate-guaranteed.png" alt="Best rate guaranteed" />
			</div>

		</div>
		
	</div>
	
	<div id="page-layer-3" class="page-layer">
	
		<div class="container">
		
			<div class="col_one_half">
				<img src="<?php bloginfo('template_url'); ?>/images/booking-engine-iphone.png" alt="mobile" />
			</div>
			
			<div class="col_one_fourth">
				<div class="spacing">
					<h3>Optimized for mobile booking</h3>
					<h4>Mobile-specific pricing</h4>
					<p>Powerful intelligence reporting. Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae, sollicitudin. </p>
				</div>
			</div>
			
		</div>
		
	</div>
	
	<div id="page-layer-4" class="page-layer">
	
		<div class="container">
		
			<h3>Other key features</h3>
		
			<div class="col_one_fourth">
				<div class="spacing">
					<h4>Rate Calendar</h4>
					<p>The industry’s most innovative hotel reservations solution. Maecenas ut cursus ligula. ROI pharetra.</p>
				</div>
			</div>
			
			<div class="col_one_fourth">
				<div class="spacing">
					<h4>Muli-property Search</h4>
					<p>The industry’s most innovative hotel reservations solution. Maecenas ut cursus ligula. ROI pharetra.</p>
				</div>
			</div>
			
			<div class="col_one_fourth">
				<div class="spacing">
					<h4>Seamless Currency Conversion</h4>
					<p>The industry’s most innovative hotel reservations solution. Maecenas ut cursus ligula. ROI pharetra.</p>
				</div>
			</div>
			
			<div class="col_one_fourth">
				<div class="spacing">
					<h4>Language Conversion</h4>
					<p>The industry’s most innovative hotel reservations solution. Maecenas ut cursus ligula. ROI pharetra.</p>
				</div>
			</div>
			
		</div>
		
	</div>
	
	

	
	<div id="calltoaction2">
		<div class="container">
		
			<div class="col_one_fourth">
				<h3>Book more. Be direct.</h3>
			</div>
			
			<form name="" action="#" method="get">

				<div class="col_one_fourth">
					<input type="text" name="name" value="" placeholder="NAME">
				</div>
				
				<div class="col_one_fourth">
					<input type="text" name="email" value="" placeholder="E-MAIL ADDRESS">
				</div>
			
			</form>
			
			<div class="col_one_fourth">
				<a class="button3" href="#">REQUEST A DEMO</a>
			</div>

		</div>
	</div>
	
<?php endwhile; endif; wp_reset_query(); ?>

<?php get_footer(); ?>