<?php 

session_start();

include('includes/header.php'); ?>



<?php 
	
	$hotel_id = $_GET['hotel_id'];
	$arrival = $_GET['arrival_date'];
	$departure = $_GET['departure_date'];
	$adults = $_GET['adults'];
	$children = $_GET['children'];		
	$session_id = $_GET['session_id'];	

?>
				
				

	<div class="copybody" style="background-image: url(images/bg1.jpg);">
	<!-- rooms output -->
		
		
		<!-- $link = 'https://us-admin-elb.reztrip.com/rt/hotels/rooms.json?hotel_id=NYCMIL&locale=en&portal_id=1&session_id='.$session_id.'&arrival_date_0='.$arrival.'&departure_date_0='.$departure.'&adults_0='.$adults.'&children_0='.$children.'&rooms=1'; -->
		
				<p class="datewhip"><!--<?php // echo floor($datediff/(60*60*24)); ?> Nights/ --><?php $ardate = '2014-09-25';  $reformarrive =  date("F d, Y", strtotime($arrival)); echo $reformarrive; ?> - <?php $ardates = '2014-09-27';  $reformdepart =  date("F d, Y", strtotime($departure)); echo $reformdepart; ?></p>

		<?php
		
		$link = 'https://qa.reztrip.com/rt/hotels/rooms.json?hotel_id=TTDEMO&locale=en&portal_id=1&session_id='.$session_id.'&arrival_date_0='.$arrival.'&departure_date_0='.$departure.'&adults_0='.$adults.'&children_0=0&rooms=1';
		
		
		$data = file_get_contents($link);
		
		$results = json_decode($data, true);
			
			$i = 1;
			
			foreach($results['rooms'] AS $post) { 
			 
			$imager = $post['photos']['thumb_jumbo'];
		    $featimg = $post['photos'][0]['large'];
		    $avgprc = $post['min_average_price'];
		    $text = $post['caption']['text'];
		    $roomtype = $post['name'];
     	    $roomcode = $post['code'];
			$availability = $post['available'];
			
		    $text = $post['description'];
		    $linker = $post['promo_url'];
     	    
     	    $specials = $post['rate_plans'];
			
			$fields_detail = $post['photos'];

		    
		    ?>
		   
		   				
		    <?php if($availability == 'true') { ?>
			<article class="roomtype detailed">
		    <!-- BEGIN SLIDER -->
				<div class="swiper-main">
				  <div class="swiper-container swiper<?php echo $i; ?>">
					<div class="swiper-wrapper">
					
					<?php $io = 0;
					foreach($fields_detail AS $poster) { 
		              $img = $poster['large']; ?>
					  <div class="swiper-slide"> <div class="slidimge" style="background-image: url(<?php echo $img; ?>);"><a href="rooms-detail.php?hotel_id=<?php echo $hotel_id; ?>&roomid=<?php echo $roomcode; ?>&arrival_date=<?php echo $arrival; ?>&departure_date=<?php echo $departure; ?>&adults=<?php echo $adults; ?>&children=<?php if($children == "") {}else{ echo $children; } ?>&session_id=<?php echo $session_id; ?>"></a></div></div>
					  
					  <?php   } $i0 ++; ?>

					</div>
				  </div>
				</div>
				<div class="pagination pagination<?php echo $i; ?>"></div>
				<div class="swroomslist arrow-left"><i class="fa fa-caret-left"></i></div>
				<div class="swroomslist arrow-right"><i class="fa fa-caret-right"></i></div>
			<!-- END SLIDER -->
					<header>
						<h3><?php echo $roomtype; ?> <span>$<?php echo $avgprc[0]; ?></span> / night</h3>			
						
						
					</header>
				
			</article>
			
			<div class="detail-content">
			<span class="strokebutton saddled"><a href="rooms-detail.php?hotel_id=<?php echo $hotel_id; ?>&roomid=<?php echo $roomcode; ?>&arrival_date=<?php echo $arrival; ?>&departure_date=<?php echo $departure; ?>&adults=<?php echo $adults; ?>&children=<?php if($children == "") {}else{ echo $children; } ?>&session_id=<?php echo $session_id; ?>"><span>Select</a></span><a href="#" class="more">Details&nbsp;&nbsp;<i class="fa fa-angle-down"></i></a>
			
				<div class="deetsbox">

					
					<p><?php echo $text; ?></p>
					
				</div>
				
			</div>	
	<?php 
			
			} else {
			
			if($i = 1) { ?>
			
			
				<div class="gen-content" style="min-height: 20px;">

					<h1>Sorry, there is no availability for the dates you selected. Please try another search.</h1>
			
				</div>
				
				
				<?php
				break;
				}
			}
		    
		     $i++; 
		}  
		
		
		
		?>
		
		
		
		<!-- end rooms output -->


		
		
	</div>
	<!-- END COPYBODY -->
	
	
	
<?php include('includes/footer.php'); ?>
