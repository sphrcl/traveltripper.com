<?php 
	
	$description = '';
	$pagetitle = 'Product and Services';
	$image = '';
	$template_class = 'template-base';

include('header.php'); 

?>
	
	<div id="pagetitle">
	
		<div class="container">
		<div class="subcontainer">
	
			<h1><?php echo $pagetitle; ?></h1>
		
		</div>
		</div>
		
	</div>

	<div id="breadcrumbs">
		<div class="container">
		<div class="subcontainer">
			<a href="index.php">Home</a> > <a href="#">Page Template</a>
		</div>
		</div>
	</div>
	
	<div id="mainpage">
	
		<div class="container">
		<div class="subcontainer">
	
			<div class="pagecontent">
				
				<div class="spacing">
				
				<div class="entry">
					
					<h2>Another page heading</h2>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lectus nisl, fermentum sed lacus vel, porttitor imperdiet lectus. Pellentesque sit amet dictum erat, quis congue tortor. Sed viverra tellus sapien, id imperdiet arcu imperdiet quis. Phasellus at metus non augue pharetra rutrum. Donec non neque pellentesque, egestas magna vitae, sodales tortor. In eu purus ultricies felis vestibulum congue ac at ex. Suspendisse at pellentesque lectus. Vivamus sagittis <a href="#">eget elit in semper</a>. Etiam molestie <strong>interdum commodo</strong>. Nam ultricies nunc a dictum malesuada. Phasellus vel neque nibh. Pellentesque vel neque quis risus iaculis porttitor. Nulla facilisi. Morbi varius elementum massa, sed tempor erat pellentesque at. Nunc eu aliquet ligula.</p>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lectus nisl, fermentum sed lacus vel, porttitor imperdiet lectus. Pellentesque sit amet dictum erat, quis congue tortor. Sed viverra tellus sapien, id imperdiet arcu imperdiet quis. Phasellus at metus non augue pharetra rutrum. Donec non neque pellentesque, egestas magna vitae, sodales tortor. In eu purus ultricies felis vestibulum congue ac at ex. Suspendisse at pellentesque lectus. Vivamus sagittis <a href="#">eget elit in semper</a>. Etiam molestie interdum commodo. Nam ultricies nunc a dictum malesuada. Phasellus vel neque nibh. </p>
					
					<ul>
						<li>Lorem ipsum dolor sit amet</li>
						<li>Etiam pretium ex ut augue</li>
						<li>Aliquam vitae lobortis leo</li>
						<li>Lorem ipsum dolor sit amet</li>
					</ul>
					
					<img class="featured-image" src="images/blog2.jpg" alt="blog2" />
						
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lectus nisl, fermentum sed lacus vel, porttitor imperdiet lectus. <strong>Pellentesque</strong> sit amet dictum erat, quis congue tortor. Sed viverra tellus sapien, id imperdiet arcu imperdiet quis. Phasellus at metus non augue pharetra rutrum. Donec non neque pellentesque, egestas magna vitae, sodales tortor. In eu purus ultricies felis vestibulum congue ac at ex. Suspendisse at pellentesque lectus. Vivamus sagittis <a href="#">eget elit in semper</a>. Etiam molestie interdum commodo. Nam ultricies nunc a dictum malesuada. Phasellus vel neque nibh. </p>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lectus nisl, fermentum sed lacus vel, porttitor imperdiet lectus. Pellentesque sit amet dictum erat, quis congue tortor. Sed viverra tellus sapien, id imperdiet arcu imperdiet quis. Phasellus at metus non augue pharetra rutrum. Donec non neque pellentesque, egestas magna vitae, sodales tortor. In eu purus ultricies felis vestibulum congue ac at ex. Suspendisse at pellentesque lectus. Vivamus sagittis <a href="#">eget elit in semper</a>. Etiam molestie interdum commodo. Nam ultricies nunc a dictum malesuada. Phasellus vel neque nibh. </p>

				</div>
				
				</div>
				
			</div>
			
			<div class="sidebar">
			
				<div class="widgets search">
				
					<form name="" action="#" method="get">

						<input type="text" name="s" value="" placeholder="SEARCH">
				
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
						<br/>
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
		
			<div class="clear"></div>
		
		</div>
		</div>
		
	</div>
	
	<?php include('cta-newsletter.php'); ?>
	
	<?php include('bottom-nav.php'); ?>
	
<?php include('footer.php'); ?>