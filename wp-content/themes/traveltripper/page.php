<?php 
/* 
Basic Single Page Template 
*/
?>

<?php get_header(); ?>

<?php 
if(have_posts()) : while(have_posts()) : the_post();
$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
?>

	<div id="pagetitle">
	
		<div class="container">
	
			<h1><?php the_title(); ?></h1>
		
		</div>
		
	</div>

	<div id="breadcrumbs">
		<div class="container">
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>
	
	<div id="mainpage">
	
		<div class="container">
	
			<div class="pagecontent">
			
				<div class="entry">
					
					<?php the_content(); ?>

				</div>
				
			</div>
			
			<div class="sidebar">
			
				<div class="widgets search">
				
					<form name="" action="<?php bloginfo('url'); ?>" method="get">
						<input type="text" name="s" id="search" placeholder="<?php _e('SEARCH','misfitlang'); ?>" value="<?php the_search_query(); ?>" />
					</form>
				
				</div>
				
				<div class="widgets social">
				
					<ul>
						<li><a href="http://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="http://www.facebook.com/"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
					</ul>
				
				</div>
				
				<div class="widgets newsletter">
				
					<h3 class="widgettitle">Join Our Newsletter</h3>
				
					<form name="" action="#" method="get">
						<input type="text" name="email" value="" placeholder="E-MAIL ADDRESS">
						<input type="submit" name="submit" value="SIGN UP">
					</form>
				
				</div>
				
				<div class="widgets featured-posts">
				
					<h3 class="widgettitle">FEATURED POSTS</h3>
				
					<ul>
						<li><a href="#">What hotels can learn from Airbnb’s design and user experience</a></li>
						<li><a href="#">Capture more direct reservations with TripConnect™ Instant Booking</a></li>
						<li><a href="#">Find the best hotel booking engine: design makes a difference</a></li>
					</ul>

				</div>
				
				<div class="widgets recent-posts">
				
					<h3 class="widgettitle">RECENT POSTS</h3>
				
					<ul>
						<li><a href="#">What hotels can learn from Airbnb’s design and user experience</a></li>
						<li><a href="#">Capture more direct reservations with TripConnect™ Instant Booking</a></li>
						<li><a href="#">Find the best hotel booking engine: design makes a difference</a></li>
					</ul>

				</div>
				
				<div class="widgets textwidget">
				
					<h3><a href="#">News</a></h3>

				</div>
				
				<div class="widgets textwidget">
				
					<h3><a href="#">Trends</a></h3>

				</div>
				
				<div class="widgets textwidget">
				
					<h3><a href="#">Whats on our minds</a></h3>

				</div>
		
			</div>
		
		</div>
		
		
		
	</div>
	
	<div id="calltoaction2">
		<div class="container">
		
			<div class="col_one_fourth">
				<h3>Newsletter</h3>
			</div>
			
			<div class="col_one_fourth">
				<p>Release notes, new feature sets, lorem ipsum dolor sit amet.</p>
			</div>
			
			<form name="" action="#" method="get">

				<div class="col_one_fourth">
					<input type="text" name="email" value="" placeholder="E-MAIL ADDRESS">
				</div>
			
			</form>
			
			<div class="col_one_fourth">
				<a class="button3" href="#">SIGN UP</a>
			</div>

		</div>
	</div>
	
<?php endwhile; endif; wp_reset_query(); ?>

<?php get_footer(); ?>