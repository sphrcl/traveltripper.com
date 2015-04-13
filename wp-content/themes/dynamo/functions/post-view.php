<?php global $post; global $post_type;
$layout = get_option( "ocmx_sidebar_layout" );
if(isset($layout) && $layout == 'sidebarnone') : 
	$resizer = '1000auto';
	$width = '1000';
	$height = '750';
else : 
	$resizer = '660auto';
	$width = '660';
	$height = '360';
endif; 


$args  = array('postid' => $post->ID, 'width' => $width, 'height' => $height, 'hide_href' => true, 'exclude_video' => false, 'imglink' => false, 'wrap' => 'div', 'wrap_class' => 'post-image fitvid', 'resizer' => $resizer);
$image = get_obox_media($args);

// Meta Arguments
if(!is_page()) :
	$date = get_option("ocmx_meta_date_post");
	$author = get_option("ocmx_meta_author_post");
	$social = get_option("ocmx_meta_social_post");
else :
	$date = get_option("ocmx_meta_date_page");
	$author = get_option("ocmx_meta_author_page");
	$social = get_option("ocmx_meta_social_page");
endif;

?>
<li id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	<div class="post-content contained clearfix">    
	    <div class="post-title-block">
           <?php if( $date != "false" || $author != "false" ) : ?>
	            <h5 class="post-date">
	                <?php if( $author != "false" ) {_e("Posted by", "ocmx"); ?> <?php the_author_posts_link();} // Hide the date unless enabled in Theme Options ?>
	                <?php if( $date != "false" ) {_e("on ", "ocmx"); echo the_time(get_option('date_format'));} //Hide the author unless enabled in Theme Options ?> 
	            </h5>
            <?php endif; ?>
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
    
        <?php echo $image; ?>
        
        <div class="copy">
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
        </div>
        <?php if(!is_page() || $social != "false" ) :?>
	        <ul class="post-meta"> 
	    		<?php if( get_option("ocmx_meta_tags") != "false" ) : // Show tags if enabled in Theme Options ?>
				    <li class="meta-block tags">
					    <ul>
						    <?php the_tags('<li>Tags &raquo;</li><li>','</li><li>','</li>'); ?>
					    </ul>
				    </li>
			    <?php endif; ?>
	            <?php if( get_option("ocmx_social_tag") !="" ) : ?>
	            	<span class="social"><?php echo get_option("ocmx_social_tag"); ?></span> 
			    <?php elseif( $social != "false" ) : // Show sharing if enabled in Theme Options ?>
				    <li class="meta-block social">
	                    <!-- AddThis Button BEGIN : Customize at http://www.addthis.com -->
	                    <div class="addthis_toolbox addthis_default_style ">
	                        <a class="addthis_button_facebook_like"></a>
	                        <a class="addthis_button_tweet"></a>
	                        <a class="addthis_counter addthis_pill_style"></a>
	                    </div>
	                    <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-507462e4620a0fff"></script>
	                    <!-- AddThis Button END -->
				    </li>
			    <?php endif; ?>         
		    </ul>
		<?php endif; ?>
    </div>
</li>