<?php /* Template Name: Portfolio List */
get_header(); 
$layout = get_post_meta($post->ID, "layout", true);
if($layout == '' ) $layout = 'two-column'; ?>

	<?php get_template_part('/functions/page-title'); ?>
    
    <div id="crumbs-container">
        <?php ocmx_breadcrumbs(); ?>     
    </div>
	    
	<div id="content" class="contained clearfix">
		<?php // Query Portfolio Categories
		$cat_list = get_terms("portfolio-category", "orderby=count&hide_empty=0");
		if ( $cat_list != "" ) : ?>
		    <ul class="portfolio-categories">
		        <?php foreach($cat_list as $tax) :
		            $link = get_term_link($tax->slug, "portfolio-category");
		            echo "<li><a href=\"$link\">".$tax->name."</a></li>";
		        endforeach; ?>
		    </ul>
		<?php endif; ?>
		<ul class="<?php echo $layout ;?> portfolio-list clearfix">
			<?php // Portfolio Query
				$args = array( "post_type" => 'portfolio', 'orderby' => 'menu_order', 'order' => 'ASC', 'post_status' => 'publish', 'showposts' => '-1' );
				$portfolio = new WP_Query($args);
				while ($portfolio->have_posts() ) : $portfolio->the_post();
					get_template_part("functions/portfolio-list"); ?>
			<?php endwhile; ?>
		</ul>
	</div>
	    
<?php get_footer(); ?>