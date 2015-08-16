<?php 
/* 
Template Name: CRS & Distribution
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
	$image = get_bloginfo('template_url') . '/images/banner-crs.jpg';
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
	
	<div id="crs-overview">
	
		<div class="container">
		
			<div class="col_one_third">
				<div class="spacing">
					<h3>Overview of CRS</h3>
					<h4>Best-in-class booking engine</h4>
					
					<p>The industry’s most innovative hotel reservations solution. Maecenas ut cursus ligula. ROI pharetra consequat dolor non. semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae, sollicitudin. </p>
				</div>
			</div>
			
			<div class="col_one_third">
				<ul class="icon44">
					<li class="icon44-dollar">
						<h5>VERSATILE PRICING</h5>
						<p>The industry’s most innovative hotel reservations solution maecenas ut.</p>
					</li>
					<li class="icon44-property">
						<h5>MULTI-PROPERTY MANAGEMENT</h5>
						<p>Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper.</p>
					</li>
					<li class="icon44-computer">
						<h5>CONTENT MANAGEMENT</h5>
						<p>The industry’s most innovative hotel reservations solution maecenas ut.</p>
					</li>
					<li class="icon44-arrows">
						<h5>CHANNEL MANAGEMENT</h5>
						<p>The industry’s most innovative maecenas ut cursus ligula ROI pharetra.</p>
					</li>
				</ul>
			</div>
			
			<div class="col_one_third">
				<ul class="icon44">
					<li class="icon44-metasearch">
						<h5>METASEARCH CONNECTIVITY</h5>
						<p>The industry’s most innovative hotel reservations solution maecenas ut.</p>
					</li>
					<li class="icon44-user">
						<h5>CALL CENTER</h5>
						<p>The industry’s most innovative maecenas ut cursus ligula ROI pharetra.</p>
					</li>
					<li class="icon44-interface">
						<h5>PMS/RMS Interfaces</h5>
						<p>Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper.</p>
					</li>
					<li class="icon44-pci">
						<h5>PCI Compliance</h5>
						<p>The industry’s most innovative hotel reservations solution maecenas ut.</p>
					</li>
				</ul>
			</div>
			
			<div class="clear"></div>
			
			<div class="module2">
				<div class="spacing2">
					<h2>34%</h2>
					<div class="modulecontent2">
						<p>We increased Parkside Hotel conversion rates by 34%</p>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
			</div>
			
		</div>
		

	
	</div>
	
	<div id="crspricetool">
	
		<div class="container">
		
			<div class="col_one_third">
			
				<div class="spacing">
	
					<h3>Powerful pricing tools to help you maximize revenue</h3>
					
					<p>Powerful intelligence reporting. Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae, sollicitudin.</p>
					
					<ul>
						<li>
							<h4>Geo-targeted pricing</h4>
							<p>The industry’s most innovative hotel reservations solution. Maecenas ut cursus ligula. ROI pharetra.</p>
						</li>
						<li>
							<h4>Dynamic pricing module</h4>
							<p>The industry’s most innovative hotel reservations solution. Maecenas ut cursus ligula. ROI pharetra.</p>
						</li>
					</ul>
				
				</div>
				
			</div>
			
			<div class="col_two_third">
				
				<img src="<?php bloginfo('template_url'); ?>/images/crs-map.jpg" alt="crs map" />
				
			</div>
		
		</div>
		
	</div>
	
	<div id="crspmsrms">
	
		<div class="container">
		
			<div class="col_one_third">
			
				<div class="spacing">
	
					<h3>PMS/RMS integrations</h3>
					
					<p>Powerful intelligence reporting. Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae, sollicitudin. </p>
					
					<a class="button1" href="#">LEARN MORE</a>
				
				</div>
				
			</div>
			
			<div class="col_two_third">
				
				<ul class="checklist">
					<li><span class="checkbutton">Autoclerk</span></li>
					<li><span class="checkbutton">Maestro</span></li>
					<li><span class="checkbutton">Roommaster</span></li>
					<li><span class="checkbutton">Champagne</span></li>
					<li><span class="checkbutton">Opera</span></li>
					<li><span class="checkbutton">Springer Miller</span></li>
					<li><span class="checkbutton">Epitomie</span></li>
					<li><span class="checkbutton">Protel</span></li>
					<li><span class="checkbutton">Visual One</span></li>
				</ul>
				
			</div>
		
		</div>
		
	</div>
	
	<div id="bottombanner" class="contentright" style="background-image: url(<?php bloginfo('template_url'); ?>/images/banner-crs2.jpg);">
	
		<div class="container">
	
			<h3>Dedicated account service</h3>
			<h4>Talk to a person, not a ticket</h4>
			<p>Powerful intelligence reporting. Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae, sollicitudin. </p>
			
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