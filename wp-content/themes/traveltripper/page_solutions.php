<?php 
/* 
Template Name: Solutions
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
	$image = get_bloginfo('template_url') . '/images/banner-solutions.jpg';
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
	
	
	<div id="solutionsmain">
	
		<div class="container">
		
			<div class="pagesection">
		
				<h3>The “suite” solution from search to stay</h3>
		
			</div>
			
			<div class="pagesection">
		
				<div class="col_one_third">
					<div class="spacing">
						<img src="<?php bloginfo('template_url'); ?>/images/icon-blue-crs.png" alt="crs" />
						<h4>CRS & Distribution</h4>
						<p>Travel Tripper CRS is your most powerful tool in managing room rates, inventory, and reservations. Our platform provides comprehensive hotel distribution to all major channels, seamless connectivity to the major PMS/RMS services, and robust tools for pricing and revenue management. </p>
						<p><a class="button1" href="crs.php">LEARN MORE</a></p>
					</div>
				</div>
				
				<div class="col_one_third">
					<div class="spacing">
						<img src="<?php bloginfo('template_url'); ?>/images/icon-blue-booking-engine.png" alt="booking engine" />
						<h4>Booking Engine</h4>
						<p>Find out why hotels love RezTrip, Travel Tripper’s innovative booking engine. With its sleek, user-friendly booking flow and unique features such as Automated Best Rate Guarantee, this booking engine is designed to optimize conversions through your most profitable channel—your website.</p>
						<p><a class="button1" href="#">LEARN MORE</a></p>
					</div>
				</div>
				
				<div class="col_one_third">
					<div class="spacing">
						<img src="<?php bloginfo('template_url'); ?>/images/icon-blue-web-mobile.png" alt="web mobile" />
						<h4>Web & Mobile</h4>
						<p>Introducing Travel Tripper Web, a cloud web and booking platform designed specifically for hotels to entice travelers and drive direct bookings. Create stunning responsive websites perfect for web and mobile, and tap into intelligent features such as dynamic rate integration and interactive maps and calendars.</p>
						<p><a class="button1" href="#">LEARN MORE</a></p>
					</div>
				</div>
		
			</div>
			
			<div class="line1"></div>
			
			<div class="pagesection">
		
				<div class="col_one_third">
					<div class="spacing">
						<img src="<?php bloginfo('template_url'); ?>/images/icon-blue-digital-marketing.png" alt="digital marketing" />
						<h4>Digital Marketing</h4>
						<p>Generate awareness and increase traffic to your hotel site with our digital marketing services. From managing search marketing to developing custom special offers, our dedicated marketing team ensures that your hotel gets maximum visibility for minimum cost.</p>
						<p><a class="button1" href="#">LEARN MORE</a></p>
					</div>
				</div>
				
				<div class="col_one_third">
					<div class="spacing">
						<img src="<?php bloginfo('template_url'); ?>/images/icon-blue-revenue-management.png" alt="revenue management" />
						<h4>Revenue Management</h4>
						<p>Make the smartest pricing decisions for your hotel with RevUP, Travel Tripper’s comprehensive revenue management software. Track past performance and future projections, anticipate market demand with flight data, monitor comp set and market data, and generate detailed reporting all from one dashboard.</p>
						<p><a class="button1" href="#">LEARN MORE</a></p>
					</div>
				</div>
				
				<div class="col_one_third">
					<div class="spacing">
						
						<h4>Selected Clients & Testimonials</h4>
					
						<div class="flexslider testiflex">
							<ul class="slides">
								<li>
									<img src="<?php bloginfo('template_url'); ?>/images/logo-row.png" alt="row" />
									<p>“Lorem ipsum dolor sit amet,consectetur adipiscing elit. Vestibu blandit risus sit amet posuere” ornare“Praesent non velit eros.”</p>
									<p class="author">- Veronika Volovik</p>
									<p class="authorinfo">Web Marketing Director, Beacon Hotel</p>
								</li>
								<li>
									<img src="<?php bloginfo('template_url'); ?>/images/logo-row.png" alt="row" />
									<p>“Lorem ipsum dolor sit amet,consectetur adipiscing elit. Vestibu blandit risus sit amet posuere” ornare“Praesent non velit eros.”</p>
									<p class="author">- Veronika Volovik</p>
									<p class="authorinfo">Web Marketing Director, Beacon Hotel</p>
								</li>
								<li>
									<img src="<?php bloginfo('template_url'); ?>/images/logo-row.png" alt="row" />
									<p>“Lorem ipsum dolor sit amet,consectetur adipiscing elit. Vestibu blandit risus sit amet posuere” ornare“Praesent non velit eros.”</p>
									<p class="author">- Veronika Volovik</p>
									<p class="authorinfo">Web Marketing Director, Beacon Hotel</p>
								</li>
							</ul>
						</div>
					
					</div>
				</div>
		
			</div>
	
		</div>
		
		<div class="container2">
		
			<div class="pagesection">
		
				<h3>Why choose Travel Tripper?</h3>
				
			</div>
			
			<div class="pagesection">
				
				<div class="col_one_third">
					<div class="spacing">
						<h4>Dedicated Service</h4>
						<p>Travel Tripper’s integrated client services ensures that you’ll get hands-on support on all your questions from a dedicated account team.</p>
					</div>
				</div>
				
				<div class="col_one_third">
					<div class="spacing">
						<h4>Unparalleled Expertise</h4>
						<p>We’re built for hoteliers by hoteliers—our team will provide the expertise and insights needed to make sure your hotel succeeds.</p>
					</div>
				</div>
				
				<div class="col_one_third">
					<div class="spacing">
						<h4>Constant Innovation</h4>
						<p>At Travel Tripper, our success depends directly on yours. We never stop striving to make our solutions better, faster, and more powerful.</p>
					</div>
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