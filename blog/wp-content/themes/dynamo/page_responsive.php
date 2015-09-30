<?php 
/* Template Name: Full Width - Responsive */
get_header(); ?>
	
   <img class="big-banner-image" src="http://localhost:8888/wp-content/uploads/2014/08/background-responsive1.jpg">
    
<?php get_template_part('/functions/page-title'); ?>

<div id="content" class="clearfix">
    <div id="full-width" class="clearfix">                    
        <?php if (have_posts()) :
            global $show_author, $post;
            $show_author = 1;
            while (have_posts()) : the_post(); setup_postdata($post);
                $link = get_permalink($post->ID); 
                $args  = array('postid' => $post->ID, 'width' => 1000, 'height' => '', 'wrap' => 'div', 'wrap_class' => 'post-image fitvid',  'hide_href' => false, 'imglink' => true, 'resizer' => '1000auto');
                $image = get_obox_media($args); ?>
                
                <div class="post-content clearfix big-banner">
                    <!--Show the Featured Image -->
                    <?php if($image !="") : 
                    	echo $image; 
                	endif; ?>
                     <!--Get the Content -->           
                    <div class="copy <?php echo $image_class; ?> clearfix">
                         <?php the_content(""); ?>
                    </div>
                </div>
            <?php endwhile;
            else :
                ocmx_no_posts();
            endif; ?>
            <?php if(comments_open()) comments_template(); ?>
    </div>
</div>
<?php get_footer(); ?>