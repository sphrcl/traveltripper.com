<?php 
	
	$description = '';
	$pagetitle = 'About Travel Tripper';
	// $image = 'images/banner1.jpg';
	$image = 'images/About-TravelTripper-Office.jpg';
	$template_class = "template-aboutus";


include('header.php'); 

?>

	<div id="pagebanner" class="about" style="background-image: url(<?php echo $image; ?>);">
	
		<div class="container">
	
			<h2><?php echo $pagetitle; ?></h2>
		
		</div>
		
	</div>
	
	<div id="breadcrumbs">
		<div class="container">
		<div class="subcontainer">
			<a href="index.php">Home</a> > <a href="#">About Us</a>
		</div>
		</div>
	</div>
	
	
	<div id="aboutmain" class="wrapper">
		
		<div class="strategic pagesection">
			
			<div class="container">
			<div class="subcontainer">
			
				<div class="col_one_fourth">
					<h3>Strategic partner in hotel distribution</h3>
				</div>
				
				<div class="col_one_half">
					<div class="spacing">
						<p class="aboutus">Travel Tripper is a full-service hotel web technology provider and strategic partner in helping hotels worldwide to optimize conversions, expand reach, and generate demand. We power properties with innovative technological solutions, including RezTrip, our industry leading central reservation system and hotel booking engine.</p>
					</div>
				</div>
				
				<div class="clear"></div>
			
			</div>
			</div>
		
		</div>
		
		<div class="leadership pagesection">
			
			<div class="container">
			<div class="subcontainer">
			
				<div class="col_one_fourth one">
					<h3>Leaderships</h3>
				</div>
				
				<div class="col_one_fourth two">
					<div class="spacing">
						<img src="images/about-gautam.png" alt="gautam" />
						<h4>Gautam Lulla</h4>
						<p>CEO</p>
					</div>
				</div>
				
				<div class="col_one_fourth three">
					<div class="spacing">
						<img src="images/about-steffan.png" alt="steffan" />
						<h4>Steffan Berelowitx Lulla</h4>
						<p>VP Digital Platforms</p>
					</div>
				</div>
				
				<div class="col_one_fourth four">
					<div class="spacing">
						<img src="images/about-pj.png" alt="pj" />
						<h4>PJ MacIntyre</h4>
						<p>Senior Director of Sales <br>and Business Development</p>
					</div>
				</div>
				
				<div class="clear"></div>
			
			</div>
			</div>
		
		</div>
		
		<div class="different pagesection">
			
			<div class="container">
			<div class="subcontainer">
				
				<div class="col_one_fourth one">
					<h3>Why we are different</h3>
				</div>
				
				<div class="col_one_fourth two">
					<div class="spacing">
						<p>We are a full-service shop.</p>
						<p>We build modern solutions.</p>
						<p>We are built by hoteliers <br>for hoteliers.</p>
						<p>We are tied to your success.</p>
						<p>We are a part of your team.</p>
					</div>
				</div>
					
				<div class="col_one_fourth three">
					<div class="spacing">
						<p>At Travel Tripper, being direct is not just a distribution strategy; it’s our philosophy. Innovation is in our nature, and we constantly strive to find ways to make our solutions and services better, faster, and more powerful. Because with us, our success depends—directly—on yours.</p>
					</div>
				</div>
				
				<div class="clear"></div>
				
			</div>
			</div>
		
		</div>
		
		<div class="working pagesection">
			
			<div class="container">
			<div class="subcontainer">
			
				<div class="col_one_fourth one">
					<h3>Working for Travel Tripper</h3>
				</div>
				
				<div class="col_one_fourth two">
					<div class="spacing">
						<p>Travel Tripper is a young and dynamic, profitable, fast-growing company based in Manhattan. Our team is comprised of professionals that bring their expertise in the hotel industry itself, marketing, technology, and more. </p>
					</div>
				</div>
				
				<div class="col_one_fourth three">
					<div class="spacing">
						<p class="one">We work together collaboratively and cross-functionally to brainstorm, refine, and then shape new ideas into great products for our customers.</p>
						<p class="two">For any additional questions, email <a href="mailto:careers@traveltripper.com">careers@traveltripper.com</a>
					</div>
				</div>
				
				<div class="col_one_fourth four">
					<div class="spacing">
						<p>Open positions:</p>
						<ul>
							<li>Revenue Analyst New York, NY</li>
							<li>Finance &amp; Admin. Associat New York, NY</li>
							<li>Business Development Director<br/>
							US: Major Metro Areas</li>
						</ul>
						<a href="#">SEE ALL OPEN POSITIONS</a>
					</div>
				</div>
				
				<div class="clear"></div>
				
			</div>
			</div>
	
		</div>
		
	</div>
	
	<div id="calltoaction2">
		<div class="container">
		<div class="subcontainer">
		
			<div class="col_one_fourth">
				<h3>Book more. <br>Be direct.</h3>
			</div>
			
			<form name="" action="#" method="get">

				<div class="col_one_fourth stacked">
					<input type="text" name="name" value="" placeholder="NAME">
				</div>
				
				<div class="col_one_fourth stacked">
					<input type="text" name="email" value="" placeholder="E-MAIL ADDRESS">
				</div>
			
			</form>
			
			<div class="col_one_fourth stacked">
				<a class="button3" href="#">REQUEST A DEMO</a>
			</div>
			
			<div class="clear"></div>

		</div>
		</div>
	</div>

<?php include('footer.php'); ?>