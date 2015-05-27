<?php 

session_start();
include('includes/header.php'); ?>
<?php 
	

	$_SESSION['arrival'] = $_GET['arrive'];
	$_SESSION['depart'] = $_GET['depart'];
	$_SESSION['adlt'] = $_GET['adults'];
	$_SESSION['child'] = $_GET['children'];	
	
	$rmid = $_GET['roomid'];	
	
	$hotel_id = $_GET['hotel_id'];
	$arrival = $_GET['arrival_date'];
	$departure = $_GET['departure_date'];
	$adults = $_GET['adults'];
	$children = $_GET['children'];		
	$session_id = $_GET['session_id'];	


?>
				
	<div class="copybody" style="background-image: url(images/bg1.jpg);">
	

				<p class="datewhip"><!--<?php // echo floor($datediff/(60*60*24)); ?> Nights/ --><?php $ardate = '2014-09-25';  $reformarrive =  date("F d, Y", strtotime($arrival)); echo $reformarrive; ?> - <?php $ardates = '2014-09-27';  $reformdepart =  date("F d, Y", strtotime($departure)); echo $reformdepart; ?></p>

	
	<div class="z-container roomdetail">
	
	<!-- http://rownyc.reztrip.com/rt/hotels/roomDetails.json?adults='.$adults.'&arrival_date='.$arrival.'&children='.$children.'&currency=USD&departure_date='.$departure.'&hotel_id='.$hotel_id.'&iata_code=&locale=en&portal_id=1&room_id='.$rmid.'&rooms=1&session_id='.$session_id.' -->
	
	<?php

		
		$link = 'http://qa.reztrip.com/rt/hotels/roomDetails.json?adults='.$adults.'&arrival_date='.$arrival.'&children='.$children.'&currency=USD&departure_date='.$departure.'&hotel_id=TTDEMO&iata_code=&locale=en&portal_id=1&room_id='.$rmid.'&rooms=1&session_id='.$session_id.'';

		$data = file_get_contents($link);
		
		$results = json_decode($data);
		$reg_exUrls = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
		$reg_exHashs = "/#([a-z_0-9]+)/i";
		$reg_exUsers = "/@([a-z_0-9]+)/i";

		
		$locations = [];
		
		$i = 0;
		
		    $imager = $results->photos->thumb_jumbo;
		    $featimg = $results->photos[0]->large;
		    $avgprc = $results->min_average_price;
		    $latitude = $results->location->latitude;
		    $longitude = $results->location->longitude;
		    $locations [] = ["longitudes"=>$longitude, "latitudes"=>$latitude, "images"=>$images];
		    $text = $results->description;
		    $linker = $results->promo_url;
		    $roomtype = $results->name;
     	    $roomcode = $results->code;
     	    
     	    $specials = $results->rate_plans;
			
			$fields_detail = $results->photos;
		    
		    ?>
		    
		    <article class="roomtype detailed">
		    <!-- BEGIN SLIDER -->
				<div class="detailimage">
					
					<?php $i = 0;
		              foreach ($fields_detail as $poster):{ ?>
		              
		              <?php if($i == 0) { ?>
		              
					  <div class="dtlimg" style="background-image: url(<?php echo $poster->large; ?>);"> </div>
					  
					  <?php } else { ?>
					  
					  <?php } ?>
					  
					  <?php  $i++;  } endforeach;  ?>
				</div>
				<div class="pagination pagination1"></div>
			
					
			</article>
			

			<div class="rateboxes">
			
			<h2><?php echo $roomtype; ?><br>Available At These Rates</h2>
				
			<?php if($specials) { ?>
			
			<?php $i = 0; foreach ($specials as $offer):{ ?>
		              
				<div class="specialbox">
							
				<h1><?php echo $offer->name; ?> - $<?php echo $offer->average_nightly_price; ?>/per night</h1>
				
				<!--<p><?php echo $offer->description; ?></p>
				
				<span class="strokebutton"></span>-->
				
				
			<div class="detail-content">
			<span class="strokebutton saddled"><a href="booking.php?hotel_id=<?php echo $hotel_id; ?>&roomid=<?php echo $roomcode; ?>&arrival_date=<?php echo $arrival; ?>&departure_date=<?php echo $departure; ?>&adults=<?php echo $adults; ?>&children=<?php echo $children; ?>&rateplan=<?php echo $offer->code; ?>&session=<?php echo $session_id; ?>&rate_name=<?php $off = $offer->name; $offname = urlencode($off); echo $offname; ?>"><span>Select</a></span><a href="#" class="more">Details&nbsp;&nbsp;<i class="fa fa-angle-down"></i></a>
			
				<div class="deetsbox">

					
					<p><?php echo $offer->description; ?></p>
					
				</div>
				
			</div>	
			
			</div>    			
			<?php  $i++;  } endforeach;  ?>

			<?php } ?>
		
			</div>

		</div>
		<!-- end roomdetail -->


		
		
	</div>
	<!-- END COPYBODY -->
	
	
	
<?php include('includes/footer.php'); ?>
