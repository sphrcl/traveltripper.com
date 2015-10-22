<?php 

/* 404 Page Template 

*/
 get_header(); ?>

	<div id="mainblog" class="errorpage">
	
		<div class="container">
		<div class="subcontainer">
	
			<div class="blogcontent">
			<div class="spacing">
			
				<div class="entry fullwidth">
					
					<h1 class="toph1">Sorry!</h1>
					<h1 class="lowh1">This page does not exist</h1>
					
					<div class="getthesearch">
						<?php get_search_form(); ?>
					</div>
					
				</div>
			
			</div>
			</div>
			
			<div class="sidebar">
			<div class="spacing">

				<?php include('sidebar-main.php'); ?>
				<?php get_sidebar(); ?>
				
			</div>
			</div>
			
			<div class="clear"></div>
		
		</div>
		</div>
		
	</div>

<?php get_footer(); ?>