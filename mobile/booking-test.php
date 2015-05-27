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
		
		
		<div class="reservationforms">
		
			<p>JSON test run</p>
				<form action="return.php" class="js-ajax-php-json" method="post" accept-charset="utf-8">
				  <input type="text" name="favorite_beverage" value="" placeholder="Favorite restaurant" />
				  <input type="text" name="favorite_restaurant" value="" placeholder="Favorite beverage" />
				  <select name="gender">
				    <option value="male">Male</option>
				    <option value="female">Female</option>
				  </select>
				  <input type="submit" name="submit" value="Submit form"  />
				</form>
				<div class="the-return">
				  [HTML is replaced when successful.]
				</div>

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
