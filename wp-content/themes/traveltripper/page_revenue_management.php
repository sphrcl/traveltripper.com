<?php 
/* 
Template Name: Revenue Management
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
	$image = get_bloginfo('template_url') . '/images/banner-revup.jpg';
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
	
	<div id="revup-layer-1" class="revup-layer">
	
		<div class="container">
		
			<div class="col_one_half">
				<img src="<?php bloginfo('template_url'); ?>/images/revup-track-monitor.jpg" alt="Designed to convert" />
			</div>
			
			<div class="col_one_fourth">
				<div class="spacing">
					<h3>Track and monitor demand trends</h3>
					<p>Make smart decisions based on historical and future data. RevUp’s powerful hotel revenue management dashboard includes pace calendars, on-the-books stats, variance of current vs. last year figures, as well as foward-looking demand data for many markets.</p>
				</div>
			</div>
			
			<div class="col_one_fourth">
			
			</div>
			
			<!--<div class="module2">
					<div class="spacing2">
						<h2>34%</h2>
						<div class="modulecontent2">
							<p>We increased Parkside Hotel conversion rates by 34%</p>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>-->
			
		</div>
		
	</div>
	
	<div id="revup-layer-2" class="revup-layer">
	
		<div class="container">
		
			<div class="col_one_fourth">
				<div class="spacing">
					<h3>Powerful reports</h3>
					<p>RevUp captures daily revenue performance, eliminates the time associated with gathering historical data, and provides instant analytical reports. It gives users powerful tools, such as pickup and pace-by-day reports that analyze revenue projects across key hotel metrics. </p>
				</div>
			</div>
			
			<div class="col_three_fourth">
				<img src="<?php bloginfo('template_url'); ?>/images/revup-layer-2.jpg" alt="revup2" />
			</div>

		</div>
		
	</div>
	
	<div id="revup-layer-3" class="revup-layer">
	
		<div class="container">
		
			<div class="col_one_half">
				<img src="<?php bloginfo('template_url'); ?>/images/revup-layer-3.jpg" alt="revup3" />
			</div>
		
			<div class="col_one_fourth">
				<div class="spacing">
					<h3>Real-time comp set and market data</h3>
					<p>Powerful intelligence reporting. Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae, sollicitudin. </p>
				</div>
			</div>

		</div>
		
	</div>
	
	<div id="revup-layer-4" class="revup-layer">
	
		<div class="container">
		
			<div class="col_one_fourth">
				<div class="spacing">
					<h3>Forecast data</h3>
					<p>Anticipate market demand with access to daily flight data and trends, and adjust pricing strategies ahead of the competition. </p>
				</div>
			</div>
			
			<div class="col_three_fourth">
				<img src="<?php bloginfo('template_url'); ?>/images/revup-layer-4.jpg" alt="revup4" />
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