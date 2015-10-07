<?php 
	
	$description = '';
	$pagetitle = 'Blog';
	$image = '';
	$template_class = "template-blog";

include('header.php'); 

?>
	
	<div id="mainblog" class="mainblog">
	
		<div class="container">
		<div class="subcontainer">
	
			<div class="blogcontent">
			<div class="spacing">
			
				<div class="entry">
					<a href="blog-post.php"><img class="featured-image" src="images/blog1.jpg" alt="blog1" /></a>
					<h2 class="blogtitle"><a href="blog-post.php">Capture more direct reservations with TripConnect Instant Booking</a></h2>
					<p>Our elegant and easy-to-use website platform adipiscing elit. Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae.</p>
					<div class="meta">
						<span class="author">by <a href="#">Gautam Lulla</a></span>
						<span class="blogdate">April 28, 2015</span>
						<span class="comments"><a href="#">Comments</a></span>
						<span class="category"><a href="#">Industry Trends</a>, <a href="#">Revenue Management</a></span>
					</div>
				</div>
				
				<div class="entry">
					<a href="#"><img class="featured-image" src="images/blog2.jpg" alt="blog2" /></a>
					<h2 class="blogtitle"><a href="#">Capture more direct reservations with TripConnect™ Instant Booking</a></h2>
					<p>Our elegant and easy-to-use website platform adipiscing elit. Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae.</p>
					<div class="meta">
						<span class="author">by <a href="#">Gautam Lulla</a></span>
						<span class="blogdate">April 28, 2015</span>
						<span class="comments"><a href="#">Comments</a></span>
						<span class="category"><a href="#">Industry Trends</a>, <a href="#">Revenue Management</a></span>
					</div>
				</div>
				
				<div class="entry">
					<a href="#"><img class="featured-image" src="images/blog3.jpg" alt="blog3" /></a>
					<h2 class="blogtitle"><a href="#">How metasearch could revolutionize Best Rate Guarantee programs in hotels</a></h2>
					<p>Our elegant and easy-to-use website platform adipiscing elit. Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae.</p>
					<div class="meta">
						<span class="author">by <a href="#">Gautam Lulla</a></span>
						<span class="blogdate">April 28, 2015</span>
						<span class="comments"><a href="#">Comments</a></span>
						<span class="category"><a href="#">Industry Trends</a>, <a href="#">Revenue Management</a></span>
					</div>
				</div>
				
				<div class="entry">
					<a href="#"><img class="featured-image" src="images/blog4.jpg" alt="blog4" /></a>
					<h2 class="blogtitle"><a href="#">Dissecting the direct booking funnel: a guide for independent hotels</a></h2>
					<p>Our elegant and easy-to-use website platform adipiscing elit. Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae.</p>
					<div class="meta">
						<span class="author">by <a href="#">Gautam Lulla</a></span>
						<span class="blogdate">April 28, 2015</span>
						<span class="comments"><a href="#">Comments</a></span>
						<span class="category"><a href="#">Industry Trends</a>, <a href="#">Revenue Management</a></span>
					</div>
				</div>
				
				<div class="entry">
					<a href="#"><img class="featured-image" src="images/blog5.jpg" alt="blog5" /></a>
					<h2 class="blogtitle"><a href="#">Capture more direct reservations with TripConnect™ Instant Booking</a></h2>
					<p>Our elegant and easy-to-use website platform adipiscing elit. Maecenas ut cursus ligula. ROI pharetra consequat dolor non semper. Nam in ligula dictum, ultrices ante vitae, sollicitudin vitae.</p>
					<div class="meta">
						<span class="author">by <a href="#">Gautam Lulla</a></span>
						<span class="blogdate">April 28, 2015</span>
						<span class="comments"><a href="#">Comments</a></span>
						<span class="category"><a href="#">Industry Trends</a>, <a href="#">Revenue Management</a></span>
					</div>
				</div>
				
				<div class="pagenav">
					<span><a class="active" href="#">1</a></span>
					<span><a href="#">2</a></span>
					<span><a href="#">3</a></span>
					<span><a href="#">4</a></span>
					<span><a href="#">OLDER ></a></span>
				</div>
			
			</div>
			</div>
			
			<div class="sidebar">
			<div class="spacing">
				
				<?php include('sidebar-top.php'); ?>
				<?php include('sidebar-api.php'); ?>
				
			</div>
			</div>
			
			<div class="clear"></div>
			
		</div>
		</div>
		
	</div>
	
	<?php include('cta-newsletter.php'); ?>

<?php include('footer.php'); ?>