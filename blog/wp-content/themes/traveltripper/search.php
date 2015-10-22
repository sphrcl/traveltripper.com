<?php 
/* 
Search Result Template
*/
?>

<?php get_header(); ?>   

	<div id="mainblog" class="searchee">
	
		<div class="container">
		<div class="subcontainer">
	
			<div class="blogcontent">
				
				<?php if(have_posts()) { ?>
				<h1 class="searchtitle"><?php printf( __( 'Seach Results: "%s"', 'misfitlang' ), get_search_query() ); ?></h1>
				<?php } ?>
			
				<?php			
				if(have_posts()) : while(have_posts()) : the_post(); 
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
				
				<?php endwhile; ?>
				
				<?php else : ?>
				
				<div class="entry fullwidth">
				
					<h1 class="toph1">Sorry!</h1>
					<h1 class="lowh1"><?php printf( __( 'There is nothing found for "%s"', 'misfitlang' ), get_search_query() ); ?></h1>
					
					<p class="lowp">Please search again or head back to the <a href="#">homepage.</a></p>
					
					<div class="getthesearch">
						<?php get_search_form(); ?>
					</div>
					
					
                    
				</div>
				
				<?php endif; wp_reset_query(); ?>
				
				<!-- start pagination -->
				<div class="pagenav">
					<?php
					global $wp_query;

					$big = 999999999; // need an unlikely integer

					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages,
						'prev_text' => __('< NEWER'),
						'next_text' => __('OLDER >')
					) );
					?>
				</div>
				<!-- end pagination -->
			
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
	
		<?php include('cta-demo3.php'); ?>
	
	</div>

		
<?php get_footer(); ?>