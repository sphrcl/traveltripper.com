<?php get_header(); ?>
	
	<?php get_template_part('/functions/page-title'); ?>
    <div id="crumbs-container">
		<?php ocmx_breadcrumbs(); ?>     
	</div>
	<div id="content" class="clearfix">
    	<div id="left-column">
        	<ul class="post-list">
        		<?php if (have_posts()) :
                    while (have_posts()) : the_post(); setup_postdata($post);
                        get_template_part("/functions/post-view");
                    endwhile;
                else :
                    ocmx_no_posts();
                endif; ?>
	                
            </ul>
            <?php comments_template(); ?>
        </div>
        
        <?php if(get_option("ocmx_sidebar_layout") != "sidebarnone"): ?>
	        <?php get_sidebar(); ?>
	    <?php endif;?>
        
    </div>
	
<?php get_footer(); ?>