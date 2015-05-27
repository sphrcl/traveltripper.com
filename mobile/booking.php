<?php 

session_start();
include('includes/header.php'); ?>
<?php 
	

	$_SESSION['arrival'] = $_GET['arrive'];
	$_SESSION['depart'] = $_GET['depart'];
	$_SESSION['adlt'] = $_GET['adults'];
	$_SESSION['child'] = $_GET['children'];	
	
	$_SESSION['room'] = $_GET['roomid'];	
	$_SESSION['rate'] = $_GET['rate_plan'];		
	
	$rmid = $_GET['roomid'];	
	
	$hotel_id = $_GET['hotel_id'];
	$arrival = $_GET['arrival_date'];
	$departure = $_GET['departure_date'];
	$adults = $_GET['adults'];
	$children = $_GET['children'];		
	$session_id = $_GET['session_id'];	
	$code = $_GET['rateplan'];	
	$ratename = $_GET['rate_name'];	

?>
				
	<div class="copybody" style="background-image: url(images/bg1.jpg);">
	<div class="andonwego"></div>
	
	<?php

		
		$link = 'http://qa.reztrip.com/rt/hotels/rateplanDetails.json?hotel_id='.$hotel_id.'&room_id='.$rmid.'&rate_plan_id='.$code.'&arrival_date='.$arrival.'&departure_date='.$departure.'&locale=en&adults='.$adults.'&portal_id=1&session_id='.$session_id .'';
		
		
		
		
		$data = file_get_contents($link);
		
		$results = json_decode($data);
		
		
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
     	    
     	    $rate = $results->average_discounted_nightly_price;
			$originalrate = $results->average_nightly_price;

     	    $specials = $results->rate_plans;
     	    $rate_plan_choice = $results->rate_plans[1]->code;
			
			$fields_detail = $results->photos;
			
			$bestrate = $results->rate_plans[1]->taxes_and_fees;
			$total = $results->rate_plans[0]->total_price;
			$totals = $results->rate_plans[1]->total_price;
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
				<?php $ardate = '2014-09-25';  $reformarrive =  date("F d, Y", strtotime($arrival)); echo $reformarrive; ?> - <?php $ardates = '2014-09-27';  $reformdepart =  date("F d, Y", strtotime($departure)); echo $reformdepart; ?>
			</span>
			<span class="bookeddates">
			<?php $rname = urldecode($ratename);  echo $rname; ?>
			</span>			
			<div class="bookedrate">
				<?php if($originalrate == $rate) { ?><?php } else { ?><span class="struck">$<?php echo $originalrate;  ?></span> <?php } ?>$<?php echo $rate; ?> Avg. Per Night
			
			</div>
			
		</div>
		
		<p class="personalinfo">Your Billing Info</p>
		
		
		<div class="reservationforms">
		
			<form id="ttresform">
				
				<input type="hidden" id="hotel_id" name="hotel_id" value="<?php echo $hotel_id; ?>" />
				<input type="hidden" id="locale" name="locale" value="en" />
				<input type="hidden" id="c" name="currency" value="1" />
				
				
				<span class="city-drop">
				<div class="inputpromo">
				
					<input type="text" class="promo firstname" id="booking_items[0].first_name" name="booking_items[0].first_name" placeholder="First Name" />
				</div>
				
				</span>
				<span class="zip-drop">
				<div class="inputpromo">
				
					<input type="text" class="promo lastname" id="booking_items[0].last_name" name="booking_items[0].last_name" placeholder="Last Name" />
					
				</div>
				</span>
				
				<div class="clear"></div>
				<div class="inputpromo">
					<input type="text" id="promo" name="gname" placeholder="Name on Card (if different)" />
				</div>
				
			
				
				
				<div class="inputpromo">
					<input type="text" class="promo" id="booking_items[0].email" name="booking_items[0].email" placeholder="Guest Email" />
				</div>
				
				<div class="inputpromo">
					<input type="text" id="card_number" class="promo" name="card_number" placeholder="Credit Card Number" value="" />
				</div>
				
				<span class="city-drop">
				<div class="inputpromo">
				
					<input type="text" class="promo firstname" id="booking_items[0].zip_code" name="booking_items[0].zip_code" placeholder="Billing Zip" />
				</div>
				
				</span>
				<span class="zip-drop">
				<div class="inputpromo">
				
					<input type="text" class="promo lastname" id="booking_items[0].security_code" name="booking_items[0].security_code" placeholder="CVV Code" />
					
				</div>
				</span>
								
				<span class="ad-drop">
					
					<div class="inputpromo">
						<select id="expiration_date_month" name="expiration_date_month" class="halfsies">
							<option>Expiration Month</option>
							<option value='01'>January</option>
							<option value='02'>February</option>
							<option value='03'>March</option>
							<option value='04'>April</option>
							<option value='05'>May</option>
							<option value='06'>June</option>
							<option value='07'>July</option>
							<option value='08'>August</option>
							<option value='09'>September</option>
							<option value='10'>October</option>
							<option value='11'>November</option>
							<option value='12'>December</option>
						</select>
					</div>
				
				</span>
				
				<span class="kid-drop">
					
					<div class="inputpromo">
						<select id="expiration_date_year" name="expiration_date_year" class="halfsies">
						<option>Expiration Year</option>
						<?php $year = date("Y"); for ($i = 0; $i <= 8; $i++) {echo "<option value='".$year."'>$year</option>"; $year++;}?>
						</select>
					</div>
				
				</span>
				<div class="clear"></div>

				<!-- hidden booking information -->
				
				<input type="hidden" id="booking_items[0].confirmation_code" name="booking_items[0].confirmation_code" value="" />
				<input type="hidden" id="booking_items[0].arrival_date" name="booking_items[0].arrival_date" value="<?php echo $arrival; ?>" />
				<input type="hidden" id="booking_items[0].departure_date" name="booking_items[0].departure_date" value="<?php echo $departure; ?>" />
				<input type="hidden" id="booking_items[0].adults" name="booking_items[0].adults" value="<?php echo $adults; ?>" />
				<input type="hidden" id="booking_items[0].children" name="booking_items[0].children" value="<?php echo $children; ?>" />			
				<input type="hidden" id="booking_items[0].room_id" name="booking_items[0].room_id" value="<?php echo $rmid; ?>" />
				<input type="hidden" id="booking_items[0].rate_plan_id" name="booking_items[0].rate_plan_id" value="<?php echo $rate_plan_choice; ?>" />


				
				<input type="hidden" id="booking_items[0].policy_id" name="booking_items[0].policy_id" value="STDPOL" />
				
				
				
				<input type="hidden" id="booking_items[0].additional_guests[].first_name" name="booking_items[0].additional_guests[].first_name" value="" />
				<input type="hidden" id="booking_items[0].additional_guests[].last_name" name="booking_items[0].additional_guests[].last_name" value="" />
				
				
				<input type="hidden" id="booking_items[0].special_requests" name="booking_items[0].special_requests" value="nil" />
				<input type="hidden" id="booking_items[0].arrival_information[0]" name="booking_items[0].arrival_information" value="nil" />
				<input type="hidden" id="booking_items[0].bed_type_preference" name="booking_items[0].bed_type_preference" value="NP" />
				<input type="hidden" id="booking_items[0].smoking_preference" name="booking_items[0].smoking_preference" value="NS" />
				<input type="hidden" id="booking_items[0].room_price" name="booking_items[0].room_price" value="<?php echo $rate; ?>" />
				<input type="hidden" id="booking_items[0].services_price" name="booking_items[0].services_price" value="0" />
				<input type="hidden" id="booking_items[0].tax" name="booking_items[0].tax" value="<?php echo $bestrate; ?>" />
				<input type="hidden" id="booking_items[0].grand_total_price" name="booking_items[0].grand_total_price" value="<?php $amount = ($rate * $days); $totalamount = ($amount + $bestrate); echo $totalamount; ?>" />
				<!-- billing info -->
					
				<input type="hidden" id="room_price" name="room_price" value="<?php echo $rate; ?>" />
				<input type="hidden" id="services_price" name="services_price" value="0" />
				<input type="hidden" id="tax" name="tax" value="<?php echo $bestrate; ?>" />
				<input type="hidden" id="grand_total_price" name="grand_total_price" value="<?php $amount = ($rate * $days); $totalamount = ($amount + $bestrate); echo $totalamount; ?>" />	
			
				<input type="hidden" id="card_holder_name" name="card_holder_name" placeholder="Name on Card" value="Cebo Campbell" />
			
				
			
				<select style="display: none;" name="card_type" id="card_type" class="halfsies">
					<option value="VS">Visa</option>
					<option value="2">Mastercard</option>
					<option value="3">American Express</option>
				</select>
			
			
			
				<input type="hidden" id="street_address1" name="street_address1" value="370 Lexington Avenue" />
				<input type="hidden" id="street_address2" name="street_address2" value="Suite 1601" />
				<input type="hidden" id="city" name="city" value="New York" />
				<input type="hidden" id="state" name="state" value="NY" />
				
				<input type="hidden" id="country" name="country" value="US" />
				<input type="hidden" id="phone_number" name="phone_number" value="8403409080" />
				<input type="hidden" id="session_id" name="session_id" value="<?php echo $session_id; ?>" />
				<input type="hidden" id="utm_source" name="utm_source" value="" />
				<input type="hidden" id="utm_medium" name="utm_medium" value="" />
				
				<input type="hidden" id="utm_term" name="utm_term" value="" />
				<input type="hidden" id="utm_content" name="utm_content" value="" />
				<input type="hidden" id="utm_campaign" name="utm_campaign" value="" />
				<input type="hidden" id="abrc" name="abrc" value="" />
				<input type="hidden" id="bsp" name="bsp" value="Start" />
				<input type="hidden" id="ip_address" name="ip_address" value="" />


				<div class="clear"></div>
				
				<!--<a class="diffcc" href="#">If Different Credit Card Holder? </a>-->
				
				<button class="button" id="input" type="submit">Confirm Reservation</button>
				
			</form>
			</div>
		
	</div>
	
	
	
	<div class="reviewinfo">
		
		<h4>Please review your reservation and our policies</h4>
		
		<div class="recippt">
			
			<?php $days = floor($datediff/(60*60*24)); ?>
			<div class="rec-rate">Your Rate:<span>$<?php echo $rate; ?></span></div>
			<div class="rec-night">Nights:<span><?php echo $days; ?></span></div>
			<div class="rec-taxes">Taxes<span>$<?php echo $bestrate; ?></span></div>

		</div>
	
		<div class="rec-total">Total:<span>$<?php $amount = ($rate * $days); $totalamount = ($amount + $bestrate); echo $totalamount; ?></span></div>
			
		<div class="rec-policy">
			<p><?php echo $terms[0]; ?></p>
		
		</div>
	
	</div>
	
	
	
		
		
	</div>
	<!-- END COPYBODY -->
	
	
	
<?php include('includes/footer.php'); ?>
