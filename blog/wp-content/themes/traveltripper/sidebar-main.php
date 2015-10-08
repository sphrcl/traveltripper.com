<?php
/**
 * The Sidebar 2
 */
?>
	
	<?php
	
		$encodeid = $wp_query->post->ID;
		
		$encode_title = urlencode(html_entity_decode(get_the_title($encodeid), ENT_COMPAT, 'UTF-8'));
		$encode_url = urlencode(html_entity_decode(get_permalink($encodeid), ENT_COMPAT, 'UTF-8'));
		$encode_summary = urlencode(html_entity_decode(get_the_excerpt($encodeid), ENT_COMPAT, 'UTF-8'));
		
	?>
	
	<div class="widgets search">
		
		<form name="" action="<?php bloginfo('url'); ?>" method="get">
			<input type="text" name="s" id="search" placeholder="<?php _e('SEARCH','misfitlang'); ?>" value="<?php the_search_query(); ?>" />
		</form>
		
	</div>
		
	<div class="widgets social">
		
		<ul>
			<li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $encode_url; ?>&text=<?php echo $encode_title; ?>&hashtags=bedirect&via=Travel_Tripper"><i class="fa fa-twitter"></i></a></li>
			<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?&u=<?php echo $encode_url; ?>&display=popup"><i class="fa fa-facebook-square"></i></a></li>
			<li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $encode_url; ?>&title=<?php echo $encode_title; ?>&summary=<?php echo $encode_summary ?>&source=traveltripperblog"><i class="fa fa-linkedin"></i></a></li>
		</ul>
		
	</div>