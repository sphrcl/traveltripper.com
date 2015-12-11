<?php
/**
 * The Sidebar 
 */
?>
	<div class="widgets newsletter">
	
		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup" class="mcsidebar">
		
			<form action="//traveltripper.us1.list-manage.com/subscribe/post?u=c4be58401190609c7fb988378&amp;id=8d85c74feb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
					<h3 class="widgettitle">Subscribe to our Blog</h3>
					
					<div class="mc-field-group">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="E-MAIL ADDRESS" >
					</div>
					
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>
					
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					
					<div style="position: absolute; left: -5000px;"><input type="text" name="b_c4be58401190609c7fb988378_8d85c74feb" tabindex="-1" value=""></div>
					<div class="clear">
						<input type="submit" value="SIGN UP" name="subscribe" id="mc-embedded-subscribe" class="button">
					</div>
					
				</div>
			</form>
			
		</div>
		
		<!--End mc_embed_signup-->
	
	</div>
	
	
	<div class="widgets">
		<h3 class="widgettitle">Featured Posts</h3>
		
		<ul>
			<?php
				
				$args = array(
					'cat' => 189,
					'posts_per_page' => 5,
				);
			
				$the_query = new WP_Query( $args );
				
				if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
				
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				
			<?php }} wp_reset_postdata(); ?>
		</ul>
	</div>
	
	<?php if ( !function_exists('dynamic_sidebar')
			|| !dynamic_sidebar('Sidebar') ) : ?>
	<?php endif; ?>  
