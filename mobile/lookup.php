<?php 

session_start();
include('includes/header.php'); ?>
		
	<div class="copybody" style="background-image: url(images/bg1.jpg);">
	<div class="andonwego"></div>
	
	
	
	<div class="registrationcontainer">
	
		
		<p class="personalinfo">Look Up Reservation</p>
		
		<br>
		<div class="reservationforms">
		
			<form method="get" action="booking-confirm.php?=">
				
				
				
				
				<div class="inputpromo">
					<input type="text" id="promo" name="gname" placeholder="Confirmation Code" />
				</div>
				
				<div class="inputpromo">
						<input type="text" id="promo" name="gemail" placeholder="Email Address" />
				</div>
				
				
				
				
				<div class="clear"></div>
				
				<button class="button" type="submit">Find Reservation</button>
				
			</form>
			</div>
		
	</div>
	
	
	

	
	
	
		
		
	</div>
	<!-- END COPYBODY -->
	
	
	
<?php include('includes/footer.php'); ?>
