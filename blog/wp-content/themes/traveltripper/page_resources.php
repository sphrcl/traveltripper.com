<?php 
/* 
Template Name: Resources
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
	$image = get_bloginfo('template_url') . '/images/banner-resources.jpg';
}
?>

	<div id="pagetitle" class="resources">
	
		<div class="container">
	
			<h1><?php echo $pagetitle; ?></h1>
		
		</div>
		
	</div>
	
	<div id="resourcesmain">
	
		<div class="container">
			<div class="respic">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/mayfair.jpg" alt="mayfair" /></a>
			</div>
			
			<div class="resinfo">
				<div class="spacing">
					<div class="category">CASE STUDY</div>
					
					<h2><a href="#">Mayfair Case Study</a></h2>
					
					<p>Our elegant and easy-to-use website platform adipiscing elit. Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae.</p>
				</div>
			
			</div>

		</div>

	</div>
	
	<div id="resourceslist">
	
		<div class="container">
		
			<div class="resourcebox">
				<div class="spacing">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/resources1.jpg" alt="resources1" /></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Spot The Conversion Killers</a></h3>
				</div>
			</div>
			
			<div class="resourcebox">
				<div class="spacing">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/resources2.jpg" alt="resources2" /></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Tnooz: Hotels, OTAs battle tech solution</a></h3>
				</div>
			</div>
			
			<div class="resourcebox">
				<div class="spacing">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/resources3.jpg" alt="resources3" /></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Skift: Will Rethinking Metasearch Increase Direct Bookings for Hotels?</a></h3>
				</div>
			</div>
			
			<div class="resourcebox">
				<div class="spacing">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/resources4.jpg" alt="resources4" /></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Skift: Paradox of Choice</a></h3>
				</div>
			</div>
			
			<div class="resourcebox">
				<div class="spacing">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/resources1.jpg" alt="resources1" /></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Spot The Conversion Killers</a></h3>
				</div>
			</div>
			
			<div class="resourcebox">
				<div class="spacing">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/resources2.jpg" alt="resources2" /></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Tnooz: Hotels, OTAs battle tech solution</a></h3>
				</div>
			</div>
			
			<div class="resourcebox">
				<div class="spacing">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/resources3.jpg" alt="resources3" /></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Skift: Will Rethinking Metasearch Increase Direct Bookings for Hotels?</a></h3>
				</div>
			</div>
			
			<div class="resourcebox">
				<div class="spacing">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/resources4.jpg" alt="resources4" /></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Skift: Paradox of Choice</a></h3>
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