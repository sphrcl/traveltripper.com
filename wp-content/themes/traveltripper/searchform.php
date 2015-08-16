<form name="" action="<?php bloginfo('url'); ?>" method="get">
	<input type="text" name="s" id="search" placeholder="<?php _e('SEARCH','misfitlang'); ?>" value="<?php the_search_query(); ?>" />
</form>