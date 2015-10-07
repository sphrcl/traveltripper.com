<?php 
	
	$description = '';
	$pagetitle = 'Blog Single';
	$image = '';
	$template_class = "template-blog-single";

include('header.php'); 

?>
	
	<div id="mainblog" class="singlepost">
	
		<div class="container">
		<div class="subcontainer">
		
			<div class="socialshare desk">
				<!--<p>211 people <br/>shared this</p>-->
				<ul>
					<li><a href="https://www.linkedin.com/company/travel-tripper" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://www.facebook.com/traveltripper" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
					<li><a href="https://twitter.com/Travel_Tripper" target="_blank"><i class="fa fa-twitter"></i></a></li>
				</ul>
			</div>
	
			<div class="blogcontent">
			<div class="spacing">
				
				<div class="entry">
				
					<img class="featured-image" src="images/blog1.jpg" alt="blog1" />
					
					<div class="meta">
						<span class="author">by <a href="#">Gautam Lulla</a></span>
						<span class="blogdate">April 28, 2015</span>
						<span class="comments"><a href="#">Comments</a></span>
						<span class="category"><a href="#">Industry Trends</a>, <a href="#">Revenue Management</a></span>
					</div>
					
					<h1 class="blogtitle">Capture more direct reservations with TripConnect Instant Booking</h1>
					
					<div class="socialshare mob">
						<!--<p>211 people <br/>shared this</p>-->
						<ul>
							<li><a href="https://www.linkedin.com/company/travel-tripper" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://www.facebook.com/traveltripper" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="https://twitter.com/Travel_Tripper" target="_blank"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lectus nisl, fermentum sed lacus vel, porttitor imperdiet lectus. Pellentesque sit amet dictum erat, quis congue tortor. Sed viverra tellus sapien, id imperdiet arcu imperdiet quis. Phasellus at metus non augue pharetra rutrum. Donec non neque pellentesque, egestas magna vitae, sodales tortor. In eu purus ultricies felis vestibulum congue ac at ex. Suspendisse at pellentesque lectus. Vivamus sagittis <a href="#">eget elit in semper</a>. Etiam molestie <strong>interdum commodo</strong>. Nam ultricies nunc a dictum malesuada. Phasellus vel neque nibh. Pellentesque vel neque quis risus iaculis porttitor. Nulla facilisi. Morbi varius elementum massa, sed tempor erat pellentesque at. Nunc eu aliquet ligula.</p>
					
					<img src="images/blogpost1.jpg" alt="blogpost1" />
					
					<ul>
						<li>Lorem ipsum dolor sit amet</li>
						<li>Etiam pretium ex ut augue</li>
						<li>Aliquam vitae lobortis leo</li>
						<li>Lorem ipsum dolor sit amet</li>
					</ul>
						
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lectus nisl, fermentum sed lacus vel, porttitor imperdiet lectus. <strong>Pellentesque</strong> sit amet dictum erat, quis congue tortor. Sed viverra tellus sapien, id imperdiet arcu imperdiet quis. Phasellus at metus non augue pharetra rutrum. Donec non neque pellentesque, egestas magna vitae, sodales tortor. In eu purus ultricies felis vestibulum congue ac at ex. Suspendisse at pellentesque lectus. Vivamus sagittis <a href="#">eget elit in semper</a>. Etiam molestie interdum commodo. Nam ultricies nunc a dictum malesuada. Phasellus vel neque nibh. </p>
					
					<blockquote>“Capture more direct reservations with TripConnect Instant Booking”</blockquote>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lectus nisl, fermentum sed lacus vel, porttitor imperdiet lectus. Pellentesque sit amet dictum erat, quis congue tortor. Sed viverra tellus sapien, id imperdiet arcu imperdiet quis. Phasellus at metus non augue pharetra rutrum. Donec non neque pellentesque, egestas magna vitae, sodales tortor. In eu purus ultricies felis vestibulum congue ac at ex. Suspendisse at pellentesque lectus. Vivamus sagittis <a href="#">eget elit in semper</a>. Etiam molestie interdum commodo. Nam ultricies nunc a dictum malesuada. Phasellus vel neque nibh. </p>

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