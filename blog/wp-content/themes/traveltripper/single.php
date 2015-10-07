<?php 
/* 
Basic Single Post Template 
*/
?>

<?php get_header(); ?>

<?php 
if(have_posts()) : while(have_posts()) : the_post();
$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
$image = $imgsrc[0];
?>

	<div id="mainblog" class="singlepost">
	
		<div class="container">
		<div class="subcontainer">
			
			<?php
				$encode_title = urlencode(get_the_title());
				$encode_url = urlencode(get_permalink());
				$encode_summary = urlencode(get_the_excerpt());
			?>
			
			<div class="socialshare desk">
				<!-- <p>211 people <br/>shared this</p> -->
				<ul>
					<li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $encode_url; ?>&text=<?php echo $encode_title; ?>"><i class="fa fa-twitter"></i></a></li>
					<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?&u=<?php echo $encode_url; ?>&display=popup"><i class="fa fa-facebook-square"></i></a></li>
					<li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $encode_url; ?>&title=<?php echo $encode_title; ?>&summary=<?php echo $encode_summary ?>&source=traveltripperblog"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
	
			<div class="blogcontent">
			<div class="spacing">
			
				<div class="entry">
					
					<?php if ($imgsrc) { ?>
						<img class="featured-image" src="<?php echo $image; ?>" alt="<?php the_title(); ?>" />
					<?php } ?>
					
					<div class="meta">
						<span class="author">by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a></span>
						<span class="blogdate"><?php the_time('F j, Y') ?></span>
						<span class="comments"><a href="#">Comments</a></span>
						<span class="category">
						<?php 
						$categories = get_the_category();
						$separator = ', ';
						$output = '';
						if ( ! empty( $categories ) ) {
							foreach( $categories as $category ) {
								$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
							}
							echo trim( $output, $separator );
						}
						?>
						</span>
						
					</div>
					
					<h1 class="blogtitle"><?php the_title(); ?></h1>
					
					<div class="socialshare mob">
						<!-- <p>211 people <br/>shared this</p> -->
						<ul>
							<li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $encode_url; ?>&text=<?php echo $encode_title; ?>"><i class="fa fa-twitter"></i></a></li>
							<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?&u=<?php echo $encode_url; ?>&display=popup"><i class="fa fa-facebook-square"></i></a></li>
							<li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $encode_url; ?>&title=<?php echo $encode_title; ?>&summary=<?php echo $encode_summary ?>&source=traveltripperblog"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					
					<?php the_content(); ?>

				</div>
				
				<?php comments_template(); ?>
				
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
	
<?php endwhile; endif; wp_reset_query(); ?>

	<?php include(TEMPLATEPATH . '/cta-newsletter.php'); ?>

<?php get_footer(); ?>