<?php 
/* 
Basic Single Page Template 
*/
?>

<?php get_header(); ?>

<?php 
if(have_posts()) : while(have_posts()) : the_post();
$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
?>

	<div id="pagetitle">
	
		<div class="container">
		<div class="subcontainer">
	
			<h1><?php the_title(); ?></h1>
		
		</div>
		</div>
		
	</div>

	<div id="breadcrumbs">
		<div class="container">
		<div class="subcontainer">
			<?php custom_breadcrumbs(); ?>
		</div>
		</div>
	</div>
	
	<div id="mainpage">
	
		<div class="container">
		<div class="subcontainer">
	
			<div class="pagecontent">
			<div class="spacing">
			
				<div class="entry">
					
					<?php the_content(); ?>

				</div>
				
			</div>
			</div>
			
			<div class="sidebar">
			<div class="spacing">

				<?php include('sidebar-blog.php'); ?>
				<?php get_sidebar(); ?>
				
			</div>
			</div>
			
			<div class="clear"></div>
		
		</div>
		</div>
		
	</div>
	
<?php endwhile; endif; wp_reset_query(); ?>

	<?php include(TEMPLATEPATH . '/cta-newsletter.php'); ?>

<?php get_footer(); ?>