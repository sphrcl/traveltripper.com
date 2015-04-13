<?php class obox_feature_posts_widget extends WP_Widget {
    /** constructor */
    function obox_feature_posts_widget() {
        parent::WP_Widget( false, $name = __("(Obox) Slider","ocmx"), array( "description" => __("Display fading posts and images from a speficic category","ocmx") ) );	
    }

    /** @see WP_Widget::widget */
    function widget( $args, $instance ) {		
        extract( $args );
        
        // Turn $instance array into variables
        $instance_defaults = array ();
        $instance_args = wp_parse_args( $instance, $instance_defaults );
        extract( $instance_args, EXTR_SKIP );

		$post_thumb = 0;	
		$args = array( "post_type" => 'slider', "posts_per_page" => $post_count);
		$slider_posts = new WP_Query($args);
		//Set the post Aguments and Query accordingly
		$count = 1; ?> 
  		<div class="slider clearfix">
			<ul>
				<?php while ( $slider_posts->have_posts() ) : $slider_posts->the_post(); 
					global $post;
					
			        $image_position  = get_post_meta($post->ID, "image_position", true);
			        if($image_position == '') $image_position = 'image-right';
					if($image_position == 'image-only')
						$resizer = 'large';
					else
						$resizer = '4-3-large';
						
					$args  = array('postid' => $post->ID, 'width' => 480, 'height' => 270, 'hide_href' => true, 'exclude_video' => $post_thumb, 'wrap' => 'div', 'wrap_class' => 'post-image fitvid', 'imglink' => false, 'imgnocontainer' => true, 'resizer' => $resizer);
					$image = get_obox_media($args);
					
			        $link = get_post_meta($post->ID, "link", true);
			        $buttontext = get_post_meta($post->ID, "button", true);
			        $buttoncolour = get_post_meta($post->ID, "button_colour", true);
			        $sliderbg = get_post_meta($post->ID, "sliderbg", true);
			        $sliderbg_attributes = get_post_meta($post->ID, "sliderbg_attributes", true);
			        $videobg_mp4 = get_post_meta($post->ID, "videobg_mp4", true);
			        $videobg_ogv = get_post_meta($post->ID, "videobg_ogv", true);
			        ?>
					<li class="<?php if($slider_posts->current_post != 0 ) : ?>no_display<?php else : ?>active<?php endif; ?>" style="background: url(<?php echo $sliderbg; ?>) <?php if(!empty($sliderbg_attributes)) echo implode(" ", $sliderbg_attributes);?>">
						
						<?php if($videobg_mp4 !="" || $videobg_ogv !="") : ?>
                            <div class="videobg">
                            	<video preload="true" autoplay="" onended="this.play();" loop="" muted="">
									<source src="<?php echo $videobg_mp4; ?>" type="video/mp4">
									<source src="<?php echo $videobg_ogv; ?>" type="video/ogg">
								</video>
                            </div>
                        <?php endif; ?>
                        
						<div class="slider-content <?php echo $image_position; ?>" data-class="<?php echo $image_position; ?>">
						
                            <div class="slider-copy <?php // opacity_zero; ?> ">
                                <h2><?php the_title(); ?></h2>
                                <h5><?php echo $post->post_excerpt; ?></h5>
                                <?php the_content(); ?>
                                <?php if($link !='') : ?>
                                    <a class="action-link" href="<?php echo $link; ?>" <?php if($buttoncolour != '') : ?>style="background: <?php echo $buttoncolour; ?>;"<?php endif; ?>><?php echo $buttontext; ?></a>
                                <?php endif; ?>
                            </div>
                            
                            <?php if($image != '') : ?>
	                            <div class="slider-image <?php // opacity_zero; ?> <?php if(obox_has_video($post->ID)): ?>has-video<?php endif; ?>">
	                               <?php echo $image; ?>
	                            </div>
                            <?php endif; ?>
                        </div>
					</li>
				<?php endwhile; ?>
			</ul>	
			<div class="slider-arrows">
				<a href="#" class="previous"><?php _e("Previous", "ocmx"); ?></a>
				<a href="#" class="next"><?php _e("Next", "ocmx"); ?></a>
			</div>
		</div>
		<div id="slider-auto" class="no_display"><?php echo $auto_interval; ?></div>
<?php
    }

    /** @see WP_Widget::update */
    function update( $new_instance, $old_instance ) {
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {
        
        // Turn $instance array into variables
        $instance_defaults = array ('post_count' => 3, 'auto_interval' => '');
        $instance_args = wp_parse_args( $instance, $instance_defaults );
        extract( $instance_args, EXTR_SKIP ); ?>
   		 <p><label for="<?php echo $this->get_field_id('post_count'); ?>"><?php _e("Post Count", "ocmx"); ?></label>
            <select size="1" class="widefat" id="<?php echo $this->get_field_id('post_count'); ?>" name="<?php echo $this->get_field_name('post_count'); ?>">
                <?php for($i = 1; $i < 10; $i++) : ?>
                    <option <?php if($post_count == $i) : ?>selected="selected"<?php endif; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
        </p>
        <p>
			<label for="<?php echo $this->get_field_id('auto_interval'); ?>">
				<?php _e("Auto Slide Interval (seconds)", "ocmx"); ?>
                <input class="shortfat" id="<?php echo $this->get_field_id('auto_interval'); ?>" name="<?php echo $this->get_field_name('auto_interval'); ?>" type="text" value="<?php echo $auto_interval; ?>" />
                <small class="obox-widget-tip"><?php _e("(Set to 0 for no auto-sliding)", "ocmx"); ?></small></label>
		</p>
<?php 
	} // form

}// class

//This sample widget can then be registered in the widgets_init hook:

// register FooWidget widget
add_action('widgets_init', create_function('', 'return register_widget("obox_feature_posts_widget");'));

?>