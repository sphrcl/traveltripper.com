<?php 

session_start();

$_SESSION['roompush'] = $push;

include('includes/header.php'); 

$sessionid = substr(str_shuffle(MD5(microtime())), 0, 15);

?>



	<div class="copybody" style="background-image: url(images/bg1.jpg);">
	
	
	<div class="stage">
		
		
		
		<div class="calendars">
						
			<div class="datepicker"></div>
					
		</div>
		<div class="reservationform">
						
			<form method="get" action="rooms-list-result.php?=">
				
				<input type="hidden" name="hotel_id" value="TTDEMO">
				<input type="hidden" name="currency" value="USD">
				<input type="hidden" name="session_id" value="<?php echo $sessionid; ?>">

				<!-- hidden arrival and departure dates -->
				<span class="calsec" style="display: none;">
					<input type="text"  id="arrival_date" name="arrival_date" placeholder="Arrival" class="calendarsection" />
					<input type="hidden"  id="arv">
					<input type="text" id="departure_date" name="departure_date" placeholder="Departure" class="calendarsection" />
					<input type="hidden" id="dep">
				</span>
				
				<span class="ad-drop">
					<select name="adults" class="halfsies">
						<option value="1">1 Adult</option>
						<option value="2">2 Adults</option>
						<option value="3">3 Adults</option>
						<option value="4">4 Adults</option>
					</select>
				</span>
				
				<span class="kid-drop">
					<select name="children" class="halfsies">
						<option value="0">0 Kids</option>
						<option value="1">1 Kid</option>
						<option value="2">2 Kids</option>
						<option value="3">3 Kids</option>
					</select>
				</span>
				
				<div class="clear"></div>
				
				<div class="inputpromo">
					<input type="text" id="promo" name="promo" placeholder="Offer Code" />
				</div>
				
				<div class="clear"></div>
				
				<button class="button" type="submit">Search Now</button>

			</form>
	
		
			<!-- BEGIN SLIDER 
				<div class="swiper-main">
				  <div class="swiper-container swiper1">
					<div class="swiper-wrapper">
					  <div class="swiper-slide"> <img src="content-images/02_ipads.jpg" alt="ipads"> </div>
					  <div class="swiper-slide"> <h3 style="margin:55px 20px 0 20px;">Simple text works too.<br><br>
						<a href="#">And links.</a><br><br>
						Pretty much whatever you need, really.</h3> 
					  </div>
					  <div class="swiper-slide"> <img src="content-images/01_iphones.jpg" alt="phones"> </div>
					  <div class="swiper-slide"> <img src="content-images/03_galaxy.jpg" alt="galaxy"> </div>
					  <div class="swiper-slide"> <img src="content-images/04_surface.jpg" alt="surface"> </div>
					</div>
				  </div>
				</div>
				<div class="pagination pagination1"></div>
			<!-- END SLIDER -->
			
			
			
				
				
			
		
		
		</div>
		
			<ul id="toggle-view">
					<li><h3><a href="rooms-list.php">View all guest rooms</a></h3></li>
						<li><h3><a href="#">Special Offers</h3><!--<div class="panel"><p>Ut eget mi tortor. Sed et mi ut felis consectetur porttitor. Cras eget turpis sit amet nulla auctor accumsan id pretium dui. Maecenas eget mauris augue, nec pretium magna. Proin sapien quam, fringilla sed hendrerit quis, rhoncus eget magna. <p></div>--></a></li>
						<li><h3><a href="#">Contact</h3></a></li>						
						
						</ul>
		
		
	</div>
	<!-- END COPYBODY -->
	
	
	
<?php include('includes/footer.php'); ?>
