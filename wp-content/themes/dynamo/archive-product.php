<?php get_header();
global $product;
$_product = $product; ?>

<div id="title-container">
	<div class="title-block">
    	<h2><?php _e("Shop", "ocmx"); ?></h2>		    
	</div>
</div>
<div id="crumbs-container">
    <?php ocmx_breadcrumbs(); ?>     
</div>

<div id="content" class="clearfix">
	<div id="left-column">
		<?php  do_action('woocommerce_before_shop_loop'); ?>
		<ul class="products">
        	<?php if (have_posts()) :
            	while (have_posts()) :	the_post(); setup_postdata($post);
            		woocommerce_get_template_part( 'content', 'product' );
            	endwhile;
            else :
                ocmx_no_posts();
            endif; ?>
		</ul>
		<?php motionpic_pagination("clearfix", "pagination clearfix"); ?>
	</div>
	<?php if(get_option("ocmx_sidebar_layout") != "sidebarnone"): ?>
        <?php get_sidebar(); ?>
    <?php endif;?>
</div>

<?php get_footer(); ?>