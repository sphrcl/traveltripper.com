<?php 
/* Template Name: Widgetized Page */
get_header();
global $post; 
$widgetpage = $post->post_title; 
?>
<?php dynamic_sidebar($widgetpage." Slider"); ?> 
<div id="widget-block" class="clearfix">
    <ul class="widget-list home-page">
        <?php dynamic_sidebar($widgetpage." Body"); ?>
    </ul>
</div>

    <div id="full-width" class="widget-page clearfix">        
        <?php if (have_posts()) :
            global $show_author, $post;
            $show_author = 1;
            while (have_posts()) : the_post(); setup_postdata($post);
                $link = get_permalink($post->ID); 
                $args  = array('postid' => $post->ID, 'width' => 1000, 'height' => '', 'hide_href' => false, 'imglink' => true, 'imgnocontainer' => true, 'resizer' => '1000auto');
                $image = get_obox_media($args); ?>
                
                <div class="post-content clearfix">
                    <!--Show the Title -->
                    <div class="page-title-block">
                        <h3 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                    <!--Show the Featured Image -->
                    <?php if($image !="") : ?>
                        <div class="post-image">
                            <?php echo $image; ?>
                        </div>
                    <?php endif; ?>
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

<?php get_footer(); ?>