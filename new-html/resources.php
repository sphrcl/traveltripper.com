<?php 
	
	$description = '';
	$pagetitle = 'Resources';
	$image = 'images/About-TravelTripper-Office.jpg';
	$template_class = "template-resources";

include('header.php'); 

?>
	
	
	<div id="pagebanner" class="about" style="background-image: url(<?php echo $image; ?>);">
	
		<div class="container">
	
			<h2><?php echo $pagetitle; ?></h2>
		
		</div>
		
	</div>
	
	<div id="resourceslist">
	
		<div class="container">
		<div class="subcontainer">
		
			<div class="resourcebox one">
				<div class="spacing">
					<a class="resourceimg" href="#" style="background-image: url('images/resources1.jpg');"></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Spot The Conversion Killers</a></h3>
				</div>
			</div>
			
			<div class="resourcebox two">
				<div class="spacing">
					<a class="resourceimg" href="#" style="background-image: url('images/resources2.jpg');"></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Tnooz: Hotels, OTAs battle tech solution</a></h3>
				</div>
			</div>
			
			<div class="resourcebox three">
				<div class="spacing">
					<a class="resourceimg" href="#" style="background-image: url('images/resources3.jpg');"></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Skift: Will Rethinking Metasearch Increase Direct Bookings for Hotels?</a></h3>
				</div>
			</div>
			
			<div class="resourcebox four">
				<div class="spacing">
					<a class="resourceimg" href="#" style="background-image: url('images/resources4.jpg');"></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Skift: Paradox of Choice</a></h3>
				</div>
			</div>
			
			<div class="resourcebox one">
				<div class="spacing">
					<a class="resourceimg" href="#" style="background-image: url('images/resources1.jpg');"></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Spot The Conversion Killers</a></h3>
				</div>
			</div>
			
			<div class="resourcebox two">
				<div class="spacing">
					<a class="resourceimg" href="#" style="background-image: url('images/resources2.jpg');"></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Tnooz: Hotels, OTAs battle tech solution</a></h3>
				</div>
			</div>
			
			<div class="resourcebox three">
				<div class="spacing">
					<a class="resourceimg" href="#" style="background-image: url('images/resources3.jpg');"></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Skift: Will Rethinking Metasearch Increase Direct Bookings for Hotels?</a></h3>
				</div>
			</div>
			
			<div class="resourcebox four">
				<div class="spacing">
					<a class="resourceimg" href="#" style="background-image: url('images/resources4.jpg');"></a>
					<div class="category">ARTICLE</div>
					<h3><a href="#">Skift: Paradox of Choice</a></h3>
				</div>
			</div>
		
		</div>
		</div>
		
	</div>
	
	<?php include('cta-demo3.php'); ?>
	
	<?php include('bottom-nav.php'); ?>

<?php include('footer.php'); ?>