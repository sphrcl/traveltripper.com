<?php 
/* 
Template Name: Blog
*/
?>

<?php get_header(); ?>

	<div id="mainblog" class="mainblog">
	
		<div class="container">
		<div class="subcontainer">
	
			<div class="blogcontent">
			<div class="spacing">
			
				<?php
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
				$post_query = new wp_query(array(
							'post_type' => 'post',
							//'posts_per_page' => 10,
							'paged' => $paged,
							));
				if($post_query->have_posts()) : while($post_query->have_posts()) : $post_query->the_post(); 
				$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 
				$image = $imgsrc[0];
				?>
			
				<div class="entry">
					<a href="<?php the_permalink(); ?>">
					<?php if ($imgsrc) { ?>
						<img class="featured-image" src="<?php echo $image; ?>" alt="<?php the_title(); ?>" />
					<?php } ?>
					</a>
					
					<h2 class="blogtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
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
				</div>
				
				<?php endwhile; endif; wp_reset_query(); ?>
				
				<!-- start pagination -->
				<div class="pagenav">
					<?php
					global $wp_query;

					$big = 999999999; // need an unlikely integer

					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $post_query->max_num_pages,
						'prev_text' => __('< NEWER'),
						'next_text' => __('OLDER >')
					) );
					?>
				</div>
				<!-- end pagination -->
			
			</div>
			</div>
			
			<div class="sidebar">
			<div class="spacing">

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
				
				<div class="widgets newsletter">
				
					<h3 class="widgettitle">Subscribe to our blog</h3>
				
					<form name="" action="#" method="get">
						<input type="text" name="email" value="" placeholder="E-MAIL ADDRESS"><br>
						<input type="submit" name="submit" value="SIGN UP">
					</form>
				
				</div>
				
				<?php get_sidebar(); ?>
				
			</div>
			</div>
			
			<div class="clear"></div>
		
		</div>
		</div>
		
		
		
	</div>
	
	<?php include(TEMPLATEPATH . '/cta-demo3.php'); ?>

<?php get_footer(); ?>