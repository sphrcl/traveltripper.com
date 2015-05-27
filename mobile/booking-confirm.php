<?php 

session_start();
include('includes/header.php'); ?>
<?php 
	

	$_SESSION['arrival'] = $_GET['arrive'];
	$_SESSION['depart'] = $_GET['depart'];
	$_SESSION['adlt'] = $_GET['adults'];
	$_SESSION['child'] = $_GET['children'];	
	
	$_SESSION['room'] = $_GET['roomid'];	
	
	
	
	$name = $_GET['roomid'];		
	$emailaddress = $_GET['hotel_id'];
	$phone = $_GET['hotel_id'];
	$streetaddress = $_GET['arrival_date'];
	$country = $_GET['departure_date'];
	$state = $_GET['adults'];
	$city = $_GET['adults'];
	$zip = $_GET['adults'];
	

	$rmid = $_GET['roomid'];		
	$hotel_id = $_GET['hotel_id'];
	$arrival = $_GET['arrival_date'];
	$departure = $_GET['departure_date'];
	$adults = $_GET['adults'];
	$children = $_GET['children'];		
	$session_id = $_GET['session_id'];	




?>
				
	<div class="copybody" style="background-image: url(images/bg1.jpg);">
	<div class="andonwego"></div>
		<?php


		$link = 'https://us-admin-elb.reztrip.com/rt/hotels/bookings.json?adults=1&arrival_date=2014-09-25&children=0&code=&currency=USD&departure_date=2014-09-27&hotel_id=NYCMIL&iata_code=&locale=en&portal_id=1&room_id=S1FN&rooms=1&session_id=c4d328e5-4939-4be7-8a16-ade523b5999e';
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
     	    
     	    $rate = $results->rate_plans[0]->average_discounted_nightly_price;
     	    $specials = $results->rate_plans;
			
			$fields_detail = $results->photos;
			
			$bestrate = $results->rate_plans[0]->taxes_and_fees;
			$total = $results->rate_plans[0]->total_price;
			$terms = $results->rate_plans[0]->terms_and_conditions
		    
		    ?>



	
	<div class="registrationcontainer">
	
		<div class="overview">
			
			<h1><?php echo $roomtype; ?></h1>
			
			<span class="bookeddates">
				<?php
				$now = strtotime("2014-09-27"); // or your date as well
			     $your_date = strtotime("2014-09-25");
			     $datediff = $now - $your_date;
			     
			     ?>
				<?php echo floor($datediff/(60*60*24)); ?> Nights/ <?php $ardate = '2014-09-25';  $reformarrive =  date("F d, Y", strtotime($ardate)); echo $reformarrive; ?> - <?php $ardates = '2014-09-27';  $reformdepart =  date("F d, Y", strtotime($ardates)); echo $reformdepart; ?>
			</span>
			
			<div class="bookedrate">
				$<?php echo $rate; ?> Avg. Per Night
			
			</div>
			
		</div>
		
		<p class="personalinfo">Your Billing Info</p>
		
		<form class="reservationforms">
				
				<div class="inputpromo">
					<input type="text" id="promo" name="card_holder_name" placeholder="Name on Card" />
				</div>
				
					<span class="ad-drop" style="width: 100%;">
					<select name="card_type" id="promo" class="halfsies">
						<option value="1">Visa</option>
						<option value="2">Mastercard</option>
						<option value="3">American Express</option>
					</select>
			</span>
			<div class="clear"></div>
			<div class="inputpromo">
						<input type="text" style="width: 104%;" id="promo" name="card_number" placeholder="Card Number" />
				</div>
				
					<span class="ad-drop">
	
				
					<select id="promo" style="width: 107%;" name="expiration_date_month" class="halfsies">
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
					</select>
				
				</span>
				<span class="kid-drop">
					<select id="promo" style="width: 107%;" name="expiration_date_year" class="halfsies">
						<option value="">2014</option>
						<option value="1">2015</option>
						<option value="2">2016</option>
						<option value="3">2017</option>
					</select>
				</span>
				
					<!--<input type="text" id="security_code" name="security_code" value="1000" />
					<input type="text" id="street_address1" name="street_address1" value="1000" />
					<input type="text" id="street_address2" name="street_address2" value="1000" />
					<input type="text" id="city" name="city" value="1000" />
					<input type="text" id="state" name="state" value="1000" />
					
					<input type="text" id="country" name="country" value="1000" />
					<input type="text" id="zip_code" name="zip_code" value="1000" />
					<input type="text" id="session_id" name="session_id" value="1000" />
					<input type="text" id="utm_source" name="utm_source" value="1000" />
					<input type="text" id="utm_medium" name="utm_medium" value="1000" />
					
					<input type="text" id="utm_term" name="utm_term" value="1000" />
					<input type="text" id="utm_content" name="utm_content" value="1000" />
					<input type="text" id="utm_campaign" name="utm_campaign" value="1000" />
					<input type="text" id="abrc" name="abrc" value="1000" />
					<input type="text" id="bsp" name="bsp" value="1000" />
					<input type="text" id="ip_address" name="ip_address" value="1000" />-->
			
				<div class="clear"></div>
				
				<button class="button" type="submit">Continue Reservation</button>
			</form>	
				
							</div>
		
	</div>
	
	
	
	<div class="reviewinfo">
		
		<h4>Please review your reservation and our policies</h4>
		
		<div class="recippt">
		
			<div class="rec-rate">Your Rate:<span>$<?php echo $rate; ?></span></div>
			<div class="rec-night">Nights:<span><?php echo floor($datediff/(60*60*24)); ?></span></div>
			<div class="rec-taxes">Taxes<span>$<?php echo $bestrate; ?></span></div>

		</div>
	
		<div class="rec-total">Total:<span>$<?php echo $total; ?></span></div>
			
		<div class="rec-policy">
			<p><?php echo $terms[0]; ?></p>
		
		</div>
	
	</div>
	
	
	
		
		
	</div>
	<!-- END COPYBODY -->
	
	
	
<?php include('includes/footer.php'); ?>
