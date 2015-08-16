<?php 
/* 
Template Name: About Us
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
	$image = get_bloginfo('template_url') . '/images/banner1.jpg';
}
?>

	<div id="pagebanner" style="background-image: url(<?php echo $image; ?>);">
	
		<div class="container">
	
			<h2><?php the_title(); ?></h2>
		
		</div>
		
	</div>
	
	<div id="breadcrumbs">
		<div class="container">
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>
	
	
	<div id="aboutmain" class="wrapper">
	
		<div class="container">
		
			<div class="pagesection">
		
				<div class="col_one_fourth">
						<h3>Strategic partner in hotel distribution</h3>
				</div>
				
				<div class="col_one_half">
					<div class="spacing">
						<p class="aboutus">Travel Tripper is a full-service hotel web technology provider and strategic partner in helping hotels worldwide to optimize conversions, expand reach, and generate demand. We power properties with innovative technological solutions, including RezTrip, our industry leading central reservation system and hotel booking engine.</p>
					</div>
				</div>
		
			</div>
			
			<div id="leadership" class="pagesection">
		
				<div class="col_one_fourth">
						<h3>Leaderships</h3>
				</div>
				
				<div class="col_one_fourth">
					<div class="spacing">
						<img src="<?php bloginfo('template_url'); ?>/images/about-gautam.png" alt="gautam" />
						<h4>Gautam Lulla</h4>
						<p>CEO</p>
					</div>
				</div>
				
				<div class="col_one_fourth">
					<div class="spacing">
						<img src="<?php bloginfo('template_url'); ?>/images/about-steffan.png" alt="steffan" />
						<h4>Steffan Berelowitx Lulla</h4>
						<p>VP Digital Platforms</p>
					</div>
				</div>
				
				<div class="col_one_fourth">
					<div class="spacing">
						<img src="<?php bloginfo('template_url'); ?>/images/about-pj.png" alt="pj" />
						<h4>PJ MacIntyre</h4>
						<p>Senior Director of Sales and Business Development</p>
					</div>
				</div>
		
			</div>
			
			<div class="pagesection">
		
				<div class="col_one_fourth">
						<h3>Why we are different</h3>
				</div>
				
				<div class="col_one_fourth">
					<div class="spacing">
						<p><strong>We are a full-service shop.<br/>
						We build modern solutions.<br/>
						We are built by hoteliers for hoteliers.<br/>
						We are tied to your success.<br/>
						We are a part of your team.</strong></p>
					</div>
				</div>
				
				<div class="col_one_fourth">
					<div class="spacing">
						<p>At Travel Tripper, being direct is not just a distribution strategy; it’s our philosophy. Innovation is in our nature, and we constantly strive to find ways to make our solutions and services better, faster, and more powerful. Because with us, our success depends—directly—on yours.</p>
					</div>
				</div>
		
			</div>
			
			<div class="pagesection">
		
				<div class="col_one_fourth">
						<h3>Working for Travel Tripper</h3>
				</div>
				
				<div class="col_one_fourth">
					<div class="spacing">
						<p>Travel Tripper is a young and dynamic, profitable, fast-growing company based in Manhattan. Our team is comprised of professionals that bring their expertise in the hotel industry itself, marketing, technology, and more. </p>
					</div>
				</div>
				
				<div class="col_one_fourth">
					<div class="spacing">
						<p>We work together collaboratively and cross-functionally to brainstorm, refine, and then shape new ideas into great products for our customers.</p>
						<p>For any additional questions, email careers@traveltripper.com</p>
					</div>
				</div>
				
				<div class="col_one_fourth">
					<div class="spacing">
						<p><strong>OPEN POSITIONS:</strong></p>
						<ul>
							<li>Revenue Analyst New York, NY</li>
							<li>Finance & Admin. Associat New York, NY</li>
							<li>Business Development Director<br/>
							US: Major Metro Areas</li>
						</ul>

						<p><strong>SEE ALL OPEN POSITIONS</strong></p>
					</div>
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