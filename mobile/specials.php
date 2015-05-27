<?php include('includes/header.php'); ?>



	<div class="copybody" style="background-image: url(images/bg1.jpg);">
	
	
	<div class="z-container">
	
	<h1 class="main">Special Offers</h1>
	<!-- rooms output -->
	
	<?php
	
	
		$link = 'http://rownyc.reztrip.com/rt/ext/special_rates?hotel_id=NYCMIL';
		$data = file_get_contents($link);
		
		$result = json_decode($data);
		$reg_exUrls = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
		$reg_exHashs = "/#([a-z_0-9]+)/i";
		$reg_exUsers = "/@([a-z_0-9]+)/i";
	
		
		$locations = [];
		$i = 0;
		foreach ($result->special_rates as $post):{
		    $images = $post->lead_photo_url->thumb_jumbo;
		    $latitude = $post->location->latitude;
		    $longitude = $post->location->longitude;
		    $locations [] = ["longitudes"=>$longitude, "latitudes"=>$latitude, "images"=>$images];
		    $text = $post->rate_plan_name;
		    $texter = $post->short_description;
		    $linker = $post->promo_url;
		    
		
		    
		    ?>
	
						
						<div class="specialbox">
							
							<h1><?php echo $text; ?></h1>
							
							<p><?php echo $texter; ?></p>
							
							<!--<span class="strokebutton">$<?php echo $avgprc[0]; ?>/ngt avg</span>-->
							
							<a class="bookit" href="#">Book Now</a>
						
						</div>    

						
						<?php 
							    
							    // echo "<li class='map-location' data-jmapping='{id: ". $i .", point: {lat:  ". $latitude . ", lng: " . $longitude . " }, category: 'place', bounded: false}'><a href='#' class='map-link insta' rel='insta'>" . $i ."</a><div class='info-box'><a href='#'><h3>#</h3></a></div></li>";
							    
							    
							    
							     $i++; 
							} endforeach;
							
							
							//echo json_encode($locations);
							
							
							
							
							
							
							
							?>
		<!-- end rooms output -->

	</div>

		
		
	</div>
	<!-- END COPYBODY -->
	
	
	
<?php include('includes/footer.php'); ?>
