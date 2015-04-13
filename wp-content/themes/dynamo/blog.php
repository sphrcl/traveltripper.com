<?php
/*
Template Name: Blog
*/ 

get_header(); ?>

<div id="title-container">
	<div class="title-block">
    	<h2><?php the_title(); ?></h2>
	</div>
</div>
<div id="crumbs-container">
	<?php ocmx_breadcrumbs(); ?>
</div>

<div id="content" class="clearfix">
    <div id="left-column">
    	<ul class="post-list">
			<?php $args = array('');
            $loop = new WP_Query($args);
            while ( $loop->have_posts() ) : $loop->the_post();
                global $post;
                    get_template_part("/functions/post-list");
            endwhile; ?>
        </ul>
        <?php motionpic_pagination("clearfix", "pagination clearfix"); ?>
	</div>
	
	<?php if(get_option("ocmx_sidebar_layout") != "sidebarnone"): ?>
		<?php get_sidebar(); ?>
	<?php endif;?>
</div>
<?php get_footer(); ?>