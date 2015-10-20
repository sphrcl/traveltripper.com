<?php 

/* 404 Page Template 

*/
 get_header(); ?>

<div class="errorpage">
	
	<div class="container">
		<div class="subcontainer">
			<div class="errorbox">
				<h1>404</h1>
				<p>The page you are looking is not here.</p>
				<p>Click <a href="<?php echo bloginfo('url'); ?>">here</a> to return to homepage.</p>
			</div>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>