<?php get_header();
$parentpage = get_template_link("portfolio.php");
$layout = get_post_meta($parentpage->ID, "layout", true);
$terms = get_terms("portfolio-category", "orderby=count&hide_empty=0"); 
$activeterm = get_term_by( 'slug', get_query_var('term' ), get_query_var( 'taxonomy' ) ); ?>
	<?php get_template_part('/functions/page-title'); ?>
	<div id="crumbs-container">
	    <?php ocmx_breadcrumbs(); ?>     
	</div>
	<div id="content" class="contained clearfix">
		<?php // Query Portfolio Categories
		if ( !empty($activeterm) ) : ?>
		    <ul class="portfolio-categories">
		        <li><a href="<?php  echo get_permalink($parentpage->ID); ?>"><?php _e("All", "ocmx"); ?></a></li>
		        <?php foreach($terms as $term) :
		            $link = get_term_link($term->slug, "portfolio-category");
					$class = "";
					if($activeterm->slug == $term->slug	)
						$class = "class=\"selected\"";
		            echo "<li><a href=\"$link\" $class>".$term->name."</a></li>";
		        endforeach; ?>
		    </ul>
		<?php endif; ?>  
		<ul class="<?php echo $layout ;?> portfolio-list clearfix">
	        <?php while (have_posts() ) : the_post();
		        	get_template_part("functions/portfolio-list"); ?>
			<?php endwhile; ?>
	    </ul>
	</div>
<?php get_footer(); ?>

