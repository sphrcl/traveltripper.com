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
					<h3>Designed to be direct  </h3>
					<p>We’ve created the industry’s most innovative booking engine—intuitive, elegant, and packed with features designed to convert lookers into bookers. Hotels that switch to RezTrip routinely see significant increases in their direct bookings, revenue, and conversion rates. </p>
				</div>
			</div>
			
			<div class="col_one_fourth">
			
			</div>
			
			<div class="module2">
					<div class="spacing2">
						<h2>76%</h2>
						<div class="modulecontent2">
							<p>Find out how Mayfair Hotel & Spa in Miami increased direct bookings by 76% with Travel Tripper’s booking engine.</p>
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
					<h3>Built-in features to maximize conversions</h3>
					<ul>
						<li>
							<h4>Automated Best Rate Guarantee</h4>
							<p>Inspire guests to book with unprecedented pricing transparency. Our integrated metasearch tool, the first of its kind, can search real-time rates on OTA sites and automatically price match whenever prices are lower elsewhere.</p>
						</li>
						<li>
							<h4>Rate calendar</h4>
							<p>Help travelers find the perfect dates and rates for their stay. Our integrated rate calendar allows travelers to easily see when the lowest prices are available, as well as when hotels are fully booked.</p>
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
					<ul>
						<li>
							<h4>Drive bookings the OTA way</h4>
							<p>Take advantage of similar tools that OTAs use to capture reservations. </p>
						</li>
						<li>
							<h4>Create urgency</h4>
							<p>Encourage fast booking with tools that create urgency for guests, including a countdown clock on special offers and widgets that show “rooms remaining” and number of recent bookings.</p>
						</li>
						<li>
							<h4>Instill confidence</h4>
							<p>Enhance your hotel’s appeal with an integrated TripAdvisor badge on your booking engine. Travelers can read reviews, see your star rating, and most importantly, gain the confidence to book directly with your hotel.</p>
						</li>
					</ul>
				</div>
			</div>
			
		</div>
		
	</div>
	
	<div id="page-layer-4" class="page-layer">
	
		<div class="container">
		
			<h3>Other key features</h3>
		
			<div class="col_one_fourth">
				<div class="spacing">
					<h4>Mobile optimized </h4>
					<p>RezTrip is perfectly optimized across web and mobile devices and can track statistics across type of device. Enable mobile-specific pricing using our CRS to target mobile users with special offers and deals.</p>
				</div>
			</div>
			
			<div class="col_one_fourth">
				<div class="spacing">
					<h4>Muli-property Search</h4>
					<p>Offer a portal booking engine for all of your hotel group’s properties. RezTrip allows for reservations search across any number of hotels, grouped by any criteria required (location, star rating, amenities, etc.)</p>
				</div>
			</div>
			
			<div class="col_one_fourth">
				<div class="spacing">
					<h4>Seamless Currency Conversion</h4>
					<p>Travelers can easily convert displayed rates into their home currency with RezTrip’s built-in currency conversion. Hotels have the option to choose which currencies to display on the booking engine. </p>
				</div>
			</div>
			
			<div class="col_one_fourth">
				<div class="spacing">
					<h4>Multilingual translations</h4>
					<p>Travel Tripper’s booking engine can display in multiple languages, including Spanish, French, German, Portuguese, and more. Hotels can select which language options they want to include.</p>
				</div>
			</div>
			
		</div>
		
	</div>
	
	

	
	<div id="calltoaction2">
		<div class="container">
		
			<div class="col_one_fourth">
				<h3>It’s time to be more direct.</h3>
				<p class="cta-text">Find out how Travel Tripper can help your hotel increase direct bookings and maximize revenue.</p>
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