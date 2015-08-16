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
		
			<div class="socialshare">
				<p>211 people <br/>shared this</p>
				<ul>
					<li><a href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
					<li><a href="http://www.facebook.com/"><i class="fa fa-facebook-square"></i></a></li>
					<li><a href="http://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
	
			<div class="blogcontent">
			
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
					
					<?php the_content(); ?>

				</div>
				
			</div>
			
			<div class="sidebar">
			
				<div class="widgets search">
				
					<form name="" action="<?php bloginfo('url'); ?>" method="get">
						<input type="text" name="s" id="search" placeholder="<?php _e('SEARCH','misfitlang'); ?>" value="<?php the_search_query(); ?>" />
					</form>
				
				</div>
				
				<div class="widgets social">
				
					<ul>
						<li><a href="http://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="http://www.facebook.com/"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
					</ul>
				
				</div>
				
				<div class="widgets newsletter">
				
					<h3 class="widgettitle">Join Our Newsletter</h3>
				
					<form name="" action="#" method="get">
						<input type="text" name="email" value="" placeholder="E-MAIL ADDRESS">
						<input type="submit" name="submit" value="SIGN UP">
					</form>
				
				</div>
				
				<?php get_sidebar(); ?>
		
			</div>
		
		</div>
		
		
		
	</div>
	
	<div id="calltoaction2">
		<div class="container">
		
			<div class="col_one_fourth">
				<h3>Newsletter</h3>
			</div>
			
			<div class="col_one_fourth">
				<p>Release notes, new feature sets, lorem ipsum dolor sit amet.</p>
			</div>
			
			<form name="" action="#" method="get">

				<div class="col_one_fourth">
					<input type="text" name="email" value="" placeholder="E-MAIL ADDRESS">
				</div>
			
			</form>
			
			<div class="col_one_fourth">
				<a class="button3" href="#">SIGN UP</a>
			</div>

		</div>
	</div>
	
<?php endwhile; endif; wp_reset_query(); ?>

<?php get_footer(); ?>