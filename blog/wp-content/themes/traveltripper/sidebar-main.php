<?php
/**
 * The Sidebar 2
 */
?>

	<div class="widgets search">
		
		<form name="" action="<?php bloginfo('url'); ?>" method="get">
			<input type="text" name="s" id="search" placeholder="<?php _e('SEARCH','misfitlang'); ?>" value="<?php the_search_query(); ?>" />
		</form>
		
	</div>
		
	<div class="widgets social">
		
		<ul>
			<li><a href="https://www.linkedin.com/company/travel-tripper" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="https://www.facebook.com/traveltripper" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
			<li><a href="https://twitter.com/Travel_Tripper" target="_blank"><i class="fa fa-twitter"></i></a></li>
		</ul>
		
	</div>