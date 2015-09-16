<?php 
/* 
Template Name: Digital Marketing
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
	$image = get_bloginfo('template_url') . '/images/banner-digital-marketing.jpg';
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
	
	<div id="dm-layer-1" class="dm-layer">
	
		<div class="container">
		
			<div class="col_one_fourth">
				<div class="spacing">
					<h3>Target audiences with precision</h3>
					
					<ul class="icon44">
						<li class="icon44-www">
							<h4>PPC Search Marketin</h4>
							<p>Travel Tripper’s pay-per-click strategic management can help your hotel increase interested traffic through geo-targeted, cost-effective campaigns. Our expertise includes market analysis, keyword targeting, bidding, ad and landing page development, and budgeting. </p>
						</li>
						<li class="icon44-computer">
							<h4>Site Retargeting</h4>
							<p>Our hotel remarketing solutions include email, site, and search retargeting services. Our digital marketing team will guide and manage hotel retargeting campaigns, including ad placement, landing page development, and budgeting. </p>
						</li>
						<li class="icon44-metasearch">
							<h4>Metasearch Placement</h4>
							<p>Drive traffic from the major travel metasearch sites, such as TripAdvisor, Google, Kayak, Trivago, WeGo and more. Travel Tripper can help you find ways to target searches and place links so you can get the best value for your ad spend. </p>
						</li>
					</ul>
					
				</div>
			</div>
			
			<div class="col_one_fourth">
				<div class="dmlogos">
					<ul>
						<li><img src="<?php bloginfo('template_url'); ?>/images/logo-orbitz.png" alt="orbitz"></li>
						<li><img src="<?php bloginfo('template_url'); ?>/images/logo-google.png" alt="google"></li>
						<li><img src="<?php bloginfo('template_url'); ?>/images/logo-expedia.png" alt="expedia"></li>
						<li><img src="<?php bloginfo('template_url'); ?>/images/logo-kayak.png" alt="kayak"></li>
					</ul>
				</div>
			</div>
			
			<div class="col_one_half">
				<img src="<?php bloginfo('template_url'); ?>/images/dm-layer1.jpg" alt="dm layer1" />
			</div>
			
			<div class="clear"></div>
			
			<div class="module2">
				<div class="spacing2">
					<h2>100%</h2>
					<div class="modulecontent2">
						<p>Find out how Mayfair Hotel & Spa in Miami more than doubled the ROI of their search marketing after switching to Travel Tripper.</p>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
	
	<div id="dm-layer-2" class="dm-layer">
	
		<div class="container">
		
			<div class="col_one_fourth">
				<div class="spacing">
					<h3>Maximum visibility for minimum cost</h3>
					<p>Successful digital marketing is not just about generating clicks and bookings—we closely monitor and track marketing spend and ROI to ensure you’re getting meaningful results and making the most of your advertising dollars. </p>
					
				</div>
			</div>
			

			
			<div class="col_one_half">

				<div class="dmstats">
					<div class="dmreport">+15.90%</div>
					<div class="dmbuttons">CONVERSIONS</div> <span class="dm-up"></span>
				</div>
				<div class="dmstats">
					<div class="dmreport">+10.30%</div>
					<div class="dmbuttons">TOTAL REVENUE</div> <span class="dm-up"></span>
				</div>
				<div class="dmstats">
					<div class="dmreport">+8.10%</div>
					<div class="dmbuttons">TOTAL IMPRESSIONS</div> <span class="dm-up"></span>
				</div>
				<div class="dmstats">
					<div class="dmreport">+11.30%</div>
					<div class="dmbuttons">TOTAL CLICKS</div> <span class="dm-up"></span>
				</div>
				
			
			</div>
			
		</div>
		

	
	</div>
	
	
	
	<div id="bottombanner" class="contentleft" style="background-image: url(<?php bloginfo('template_url'); ?>/images/banner-digital-marketing2.jpg);">
	
		<div class="container">
	
			<h3>Your personal revenue optimization team</h3>
			<p>With Travel Tripper, you’ll get dedicated, hands-on support from hotel marketing and distribution experts that will guide your hotel to success. Our integrated client services and customer support teams allow for a single point of contact so you can quickly get the help and answers you need. </p>
			
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