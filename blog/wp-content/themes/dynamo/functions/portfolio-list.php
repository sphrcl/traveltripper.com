<?php global $layout;
	$link = get_permalink($post->ID); 
	if($layout == "one-column") :
		$width = 980;
		$height = 735;
		$resizer = '1000auto';
	else :
		$width = 480;
		$height = 460;
		$resizer = '4-3-medium';
	endif;
	
	if($layout == 'one-column' || $layout == 'two-column')
		$exclude_video = 0;
	else
		$exclude_video = 1;
		
    $args  = array( 'postid' => $post->ID, 'width' => $width, 'height' => $height, 'hide_href' => false, 'exclude_video' => $exclude_video, 'wrap' => 'div', 'wrap_class' => 'post-image fitvid', 'resizer' => $resizer );
	$image = get_obox_media($args); ?>
	
<li class="column">
    <?php if($image !="")
		echo $image; ?>   
    <div class="content">
        <h4 class="post-title"><a href="<?php echo $link; ?>"><?php the_title(); ?></a></h4>
        <?php the_excerpt(); ?>
    </div>    
</li>