<?php
/**
 * The template for displaying the footer.
 *
**/
?>

<?php wp_footer(); ?>
		
		<div id="footer">
		
			<div class="container">
			<div class="subcontainer">
			
				<div class="col_one_fourth one">
					<div class="footernav">
						<a href="index.php"><img src="<?php bloginfo('template_url'); ?>/images/traveltripperlogo.png" alt="travel tripper" /></a>
						<br/><br/><br/><br/>
						<p>&copy; 2015 Travel Tripper Inc.</p>
					</div>
				</div>
				
				<div class="col_one_fourth two">
					<div class="footernav">
						<ul>
							<li><a href="/aboutus.html">Company</a></li>
							<li><a href="/solutions.html">Products &amp; Solutions</a></li>
							<li><a href="/careers.html">Careers</a></li>
							<li><a href="http://www.traveltripper.com/contact/contact.html">Contact Us</a></li>
						</ul>
					</div>
				</div>
				
				<div class="col_one_fourth three">
					<div class="footeradd">
						<i class="fa fa-map-marker"></i>
						<p>370 Lexington Avenue,<br/>
						Suite 1601, New York, NY 10017<br/>
						+ 1.212.683.6161</p>
					</div>
				</div>
				
				<div class="col_one_fourth four">
					<div class="footersocial">
						<ul>
							<li><a href="https://www.linkedin.com/company/travel-tripper" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://www.facebook.com/traveltripper" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="https://twitter.com/Travel_Tripper" target="_blank"><i class="fa fa-twitter"></i></a></li>
						</ul>
						
						<p><a href="mailto:hello@traveltripper.com">Say Hello &rarr;</a></p>
						
					</div>
				</div>
				
				<div class="clear"></div>
				
			</div>
			</div>
		</div>

	</div> <!-- #wrapper -->
	
	<!-- and your javascript file here -->		
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.sticky.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.inview.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/general.js"></script>
	
	<!-- mailchimp -->
	
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
	<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

</body>
</html>