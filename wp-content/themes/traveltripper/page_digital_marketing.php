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
					<p>The industry’s most innovative hotel reservations solution. Maecenas ut cursus ligula. ROI pharetra consequat dolor non. semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae, sollicitudin.</p>
					
					<ul class="icon44">
						<li class="icon44-www">
							<h4>PCC MANAGEMENT</h4>
							<p>The industry’s most innovative maecenas ut cursus ligula ROI pharetra maecenas ut</p>
						</li>
						<li class="icon44-search">
							<h4>SEARCH MARKETING</h4>
							<p>The industry’s most innovative maecenas ut cursus ligula ROI pharetra maecenas ut</p>
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
					<h2>45%</h2>
					<div class="modulecontent2">
						<p>Find out how Mayfair Hotel & Spa in Miami more than doubled the ROI of their PPC marketing.</p>
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
					<h3>Reporting and analytics</h3>
					<h4>Detailed monitoring of your website and channel performance</h4>
					<p>Powerful intelligence reporting. Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae, sollicitudin. </p>
					
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
	
			<h3>Personalized service from one single account team</h3>
			<p>Unified marketing and distribution strategy. Dedicated team helps you with implementation, training, strategy, ongoing support</p>
			
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