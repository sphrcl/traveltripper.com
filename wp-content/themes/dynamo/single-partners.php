<?php get_header();
global $post;
$args  = array('postid' => $post->ID, 'width' => 320, 'hide_href' => false, 'exclude_video' => true, 'imglink' => false, 'imgnocontainer' => true, 'resizer' => '660auto');
$image = get_obox_media($args);  
$parentpage = get_template_link("partners.php");
?>
	
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
            <?php if (have_posts()) : while (have_posts()) : the_post(); setup_postdata($post); ?>
                <li id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                    <div class="post-content clearfix">    
                        <div class="post-image">
							<?php echo $image;?>
                        </div>
	                   	
                        <div class="copy">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </li>
            <?php endwhile;
            else :
                ocmx_no_posts();
            endif; ?>
            </ul>
        
        </div><!--End  Left Column -->
        
        <?php get_sidebar(); ?>
        
    </div><!--End Content -->
	
<?php get_footer(); ?>