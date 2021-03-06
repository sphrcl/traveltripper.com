<?php 
	
	$template_class = 'template-careers';
	$description = '';
	$pagetitle = 'Careers';
	$image = '';

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
			<a href="index.php">Travel Tripper</a> <i class="fa fa-angle-right"></i> <a href="aboutus.php">About Us</a> <i class="fa fa-angle-right"></i> <a href="careers.php">Careers</a>
		</div>
		</div>
	</div>
	
	<div id="careermain" class="wrapper">
		
		<div id="working" class="pagesection">
		
			<div class="container">
			<div class="subcontainer">
		
				<div class="col_one_fourth">
					<h3>Working at Travel Tripper</h3>
				</div>
				
				<div class="col_one_half">
					<div class="spacing">
						
						<p class="one">Travel Tripper is a young and dynamic, profitable, fast-growing company based in Manhattan. Our team is comprised of professionals that bring their expertise in the hotel industry itself, marketing, technology, and more. We work together collaboratively and cross-functionally to brainstorm, refine, and then shape new ideas into great products for our customers.</p>

						<p class="two">For any additional questions, email <a href="mailto:careers@traveltripper.com">careers@traveltripper.com</a></p>
						
					</div>
				</div>
				
				<div class="clear"></div>
				
			</div>
			</div>
			
		</div>
		
		<div id="positions" class="pagesection">
			
			<div class="container">
			<div class="subcontainer">
			
				<div class="col_one_fourth left">
					<h3>Open Positions</h3>
				</div>
				
				<div class="col_one_half">
				
					<div class="col_one_half">
						<div class="spacing">
							<h3 class="one">Revenue Analyst <br>New York, NY</h3>
							<p>The Revenue Analyst position is primarily responsible for generating online reservations for Travel Tripper’s customers in order to meet...</p>
							<a href="revenue-analyst.php">See Details</a>
						</div>
					</div>
					
				</div>
				
				<div class="clear"></div>
			
			</div>
			</div>
		
		</div>
	</div>
	
	<?php include('cta-demo3.php'); ?>

<?php include('footer.php'); ?>