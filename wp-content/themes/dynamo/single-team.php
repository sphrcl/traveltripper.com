<?php get_header();
global $post;
$args  = array('postid' => $post->ID, 'width' => 320, 'hide_href' => false, 'exclude_video' => true, 'imglink' => false, 'imgnocontainer' => true, 'resizer' => '660auto');
$image = get_obox_media($args); 
$position = get_post_meta($post->ID, "position", true);
$facebook = get_post_meta($post->ID, "facebook", true);
$twitter = get_post_meta($post->ID, "twitter", true);
$linkedin = get_post_meta($post->ID, "linkedin", true); 
$parentpage = get_template_link("team.php");
?>
	
	<div id="title-container">		
			<div class="title-block">
		    	<h2><?php the_title(); ?></h2>
		    	<!--Show the Position, if it exists -->
		        <?php if($position !='') : ?>
                	<p class="position"><?php echo $position; ?></p>
				<?php endif; ?>
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
                        
                        <?php if($facebook !='' || $twitter !='' || $linkedin !='') : ?>
	                        <!--Show Social Links -->                   
	                        <ul class="team-social clearfix">
		                		<?php if($facebook !='') : ?>
		                    		<li>
		                    			<a class="team-facebook" href="<?php echo $facebook; ?>">Facebook</a>
		                    		</li>
		                    	<?php endif; ?>
		                    	<?php if($twitter !='') : ?>
		                    		<li>
		                    			<a class="team-twitter" href="<?php echo $twitter; ?>">Twitter</a>
		                    		</li>
		                    	<?php endif; ?>
		                    	<?php if($linkedin !='') : ?>
		                    		<li>
		                    			<a class="team-linkedin" href="<?php echo $linkedin; ?>">Linkedin</a>
		                    		</li>
		                    	<?php endif; ?>
		                	</ul>
		                <?php endif; ?>
	                   	
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