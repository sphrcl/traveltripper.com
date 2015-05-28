<?php 

session_start();

include('includes/header.php'); ?>



<?php 
	
	$arrival = $_GET['arrival_date'];
	$departure = $_GET['departure_date'];
	$adults = $_GET['adults'];
	$children = $_GET['children'];		
	
	$_SESSION['arrive'] = $_GET['arrival_date'];
	$_SESSION['depart'] = $_GET['departure_date'];
	$_SESSION['adlt'] = $_GET['adults'];
	$_SESSION['child'] = $_GET['children'];
 	
 	


?>

	<div class="copybody" style="background-image: url(images/bg1.jpg);">
	
	<!-- rooms output -->
	
	
		<?php


		$link = 'http://qa.reztrip.com/rt/hotels/rooms.json?hotel_id=TTDEMO&locale=en&portal_id=1&session_id=30&arrival_date_0=&departure_date_0=&adults_0=1&children_0=0&rooms=1';
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
					  <div class="swiper-slide"> <div class="slidimge" style="background-image: url(<?php echo $img; ?>);"> </div></div>
					  
					  <?php   } $i0 ++; ?>

					</div>
				  </div>
				</div>
				<div class="pagination pagination<?php echo $i; ?>"></div>
				<div class="swroomslist arrow-left"><i class="fa fa-caret-left"></i></div>
				<div class="swroomslist arrow-right"><i class="fa fa-caret-right"></i></div>
			<!-- END SLIDER -->
					<header>
						<h3><?php echo $roomtype; ?></h3>			
											</header>
				
			</article>
			
			<div class="detail-content">
				<span class="strokebutton saddled"><a class="other-menu-button" style="line-height: 22px; float: none; width: 100%; height: inherit;" href="#">Check Rates</a></span>

				<a href="#" class="more">Details&nbsp;&nbsp;<i class="fa fa-angle-down"></i></a>
					
				<div class="deetsbox">
					<p><?php echo $text; ?></p>
				</div>				
				
			</div>	
	<?php 
			
			}
		    
		     $i++; 
		}
		
		
		
		?>
		
		<!-- end rooms output -->


		
		
	</div>
	<!-- END COPYBODY -->
	
	
	
<?php include('includes/footer.php'); ?>
