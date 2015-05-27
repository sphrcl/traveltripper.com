
				
				
				
				<form  id="form">
					<div class="the-return">
				  [HTML is replaced when successful.]
				</div>
					
					<!-- reservation info -->
					
					<input type="text" id="hotel_id" name="hotel_id" value="TTDEMO" />
					<input type="text" id="locale" name="locale" value="en" />
					<input type="text" id="c" name="currency" value="1" />
					
					
					<!-- booking items -->
					
					<input type="text" id="booking_items.confirmation_code" name="booking_items.confirmation_code" value="<?php echo $_GET['garrive']; ?>" />
					<input type="text" id="booking_items.arrival_date" name="booking_items.arrival_date" value="<?php echo $_GET['garrive']; ?>" />
					<input type="text" id="booking_items.departure_date" name="booking_items.departure_date" value="<?php echo $_GET['gdepart']; ?>" />
					<input type="text" id="booking_items.adults" name="booking_items.adults" value="<?php echo $_GET['gadults']; ?>" />
					<input type="text" id="booking_items.children" name="booking_items.children" value="<?php echo $_GET['gchildren']; ?>" />			
					<input type="text" id="booking_items.room_id" name="booking_items.room_id" value="STD" />
					<input type="text" id="booking_items.rate_plan_id" name="booking_items.rate_plan_id" value="BAR" />
					<input type="text" id="booking_items.first_name" name="booking_items.first_name" value="<?php $firstname = $_GET['gname']; $string = $firstname;
$substring = substr($string, 0, strpos($string, ' ')); echo $substring?>" />
					<input type="text" id="booking_items.last_name" name="booking_items.last_name" value="<?php $lastname = $_GET['gname']; $part = substr($lastname, strpos($lastname, ' ')); echo $part; ?>" />
						
					<input type="text" id="booking_items.email" name="booking_items.email" value="<?php echo $_GET['grateplan']; ?>" />
					<input type="text" id="booking_items.policy_id" name="booking_items.policy_id" value="<?php echo $_GET['grateplan']; ?>" />
					<input type="text" id="booking_items.additional_guests" name="booking_items.additional_guests" value="<?php echo $_GET['grateplan']; ?>" />
					
					
					
					<input type="text" id="booking_items.special_requests" name="booking_items.special_requests" value="<?php echo $_GET['grateplan']; ?>" />
					<input type="text" id="booking_items.arrival_information" name="booking_items.arrival_information" value="<?php echo $_GET['grateplan']; ?>" />
					<input type="text" id="booking_items.bed_type_preference" name="booking_items.bed_type_preference" value="<?php echo $_GET['grateplan']; ?>" />
					<input type="text" id="booking_items.smoking_preference" name="booking_items.smoking_preference" value="<?php echo $_GET['grateplan']; ?>" />
					<input type="text" id="booking_items.room_price" name="booking_items.room_price" value="<?php echo $_GET['grateplan']; ?>" />
					<input type="text" id="booking_items.services_price" name="booking_items.services_price" value="<?php echo $_GET['grateplan']; ?>" />
					<input type="text" id="booking_items.tax" name="booking_items.tax" value="<?php echo $_GET['grateplan']; ?>" />
					<input type="text" id="booking_items.grand_total_price" name="booking_items.grand_total_price" value="<?php echo $_GET['grateplan']; ?>" />
										
					
					<!-- personal info -->
					
					
					<!-- billing info -->
								
					<input type="text" id="room_price" name="room_price" value="<?php echo $_GET['grateplan']; ?>" />
					<input type="text" id="services_price" name="services_price" value="<?php echo $_GET['grateplan']; ?>" />
					<input type="text" id="tax" name="tax" value="<?php echo $_GET['grateplan']; ?>" />
					<input type="text" id="grand_total_price" name="grand_total_price" value="<?php echo $_GET['grateplan']; ?>" />	
				
					<input type="text" id="card_holder_name" name="card_holder_name" placeholder="Name on Card" />
				
				
				
					<select name="card_type" id="card_type" class="halfsies">
						<option value="1">Visa</option>
						<option value="2">Mastercard</option>
						<option value="3">American Express</option>
					</select>
			
			
						<input type="text" id="card_number" name="card_number" placeholder="Card Number" />
					
				
					<select id="expiration_date_month" name="expiration_date_month" class="halfsies">
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
					</select>
				
				
				
					<select id="expiration_date_year" name="expiration_date_year" class="halfsies">
						<option value="">2014</option>
						<option value="1">2015</option>
						<option value="2">2016</option>
						<option value="3">2017</option>
					</select>
				
				
					<input type="text" id="security_code" name="security_code" value="1000" />
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
					<input type="text" id="ip_address" name="ip_address" value="1000" />
			
				<input id="input" type="submit" name="submit" value="Post It" />
				
			</form>
