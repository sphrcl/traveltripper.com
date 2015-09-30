<?php
class obox_content_widget extends WP_Widget {
    /** constructor */
    function obox_content_widget() {
        parent::WP_Widget(false, $name = __("(Obox) Content Widget", "ocmx"), array("description" => "Display various kinds of content in a multi-column layout on your home page."));	
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        global $woocommerce;

        // Turn $args array into variables.
        extract( $args );
        
        // Turn $instance array into variables
        $instance_defaults = array ( 'excerpt_length' => 80, 'post_thumb' => true);
        $instance_args = wp_parse_args( $instance, $instance_defaults );
        extract( $instance_args, EXTR_SKIP );
        
        // Setup the post filter if it's defined
		if(isset($postfilter) && isset($instance[$postfilter]))
	        $filterval = esc_attr($instance[$postfilter]);
		else
			$filterval = 0;	 
	
		// Set the base query args
		$args = array(
			"post_type" => $posttype,
			"posts_per_page" => $post_count
		);
		
		// Filter by the chosen taxonomy
		if(isset($postfilter) && $postfilter != "" && $filterval != "0") :
			$args['tax_query'] = array(
					array(
						"taxonomy" => $postfilter,
						"field" => "slug",
						"terms" => $filterval
					)
				);
		endif;
		
		// Set the post order
		if(isset($post_order_by)) :
			$args['order'] = $post_order;
			$args['orderby'] = $post_order_by;
		endif;
		
		// Main Post Query
		$loop = new WP_Query($args); ?>
		
		<li class="content-widget <?php echo $posttype; ?>-content-widget widget clearfix">
			
			<?php if(isset($title) && $title != "") : ?>
				<h3 class="widgettitle"><?php echo $title; ?></h3>
			<?php endif; ?>
			
            <ul class="<?php echo $layout_columns; ?>-column content-widget-item <?php echo $posttype; ?><?php if($posttype == "product") echo 'products' ?> clearfix">
            
            	<?php while ( $loop->have_posts() ) : $loop->the_post();
					if($posttype == "product") :
	                    global $post;
                    else :
    	                global $post, $product;
                    endif;
                	if($posttype == 'partners') :
                		$width = 200;
                		$height = 200;
                		$resizer = '4-3-medium-nocrop';
					elseif($posttype == 'team') :
                		$width = 150;
                		$height = 150;
                		$resizer = '1-1-medium';
                	else: 
                		$width = 490;
                		$height = 368;
                		$resizer = '4-3-medium';
                	endif;
                	
                    $link = get_permalink($post->ID); 
               		$image_args  = array('postid' => $post->ID, 'width' => $width, 'height' => $height, 'hide_href' => false, 'exclude_video' => $post_thumb, 'wrap' => 'div', 'wrap_class' => 'post-image fitvid', 'imglink' => false, 'resizer' => $resizer);
					$image = get_obox_media($image_args); 
					
					// For Services Post Type
					if($posttype == 'services')
						$icon = get_post_meta( $post->ID, 'icon', true ); 
					
					// For Team Post Type
					if($posttype == 'team') :
						$position = get_post_meta($post->ID, "position", true);
			        	$facebook = get_post_meta($post->ID, "facebook", true);
			        	$twitter = get_post_meta($post->ID, "twitter", true);
			        	$linkedin = get_post_meta($post->ID, "linkedin", true); 
		        	endif; ?>
                    
                    <li class="column">
						<?php if( ( $post_thumb == 1 || $post_thumb == 0 ) && $layout_columns !='one') :
							if(isset($icon) && $icon !='') : ?>
                        		<div class="post-image fitvid">
			        				<img src="<?php echo $icon; ?>" alt="<?php esc_attr(get_the_title()); ?>" /> 
			        			</div>
			        		<?php elseif($image != ""): 
			        			echo $image;
		        			endif; 
		        		endif; ?>
	                       
                    	<?php if($posttype != 'partners') : ?>
	                       	<div class="content">
                 
		                        <?php if(isset($show_date) && $show_date == "on") : ?>
	                       			<h5 class="post-date"><?php echo date('F j, Y', strtotime($post->post_date)); ?></h5>
	                       		<?php endif; ?>
	                        
								<h4 class="post-title"><a href="<?php echo $link; ?>"><?php the_title(); ?></a></h4>
	                            
	                            <?php if($post_thumb != "none" && $layout_columns == 'one') :
	                                //Show the Featured Image or Video
	                                if($image != "") {echo $image;}
	                            endif;
	                            
	                            if($posttype == 'team') : ?>
	                            	<!--Show the Position, if it exists -->
						            <?php if($position !='') : ?>
				                    	<h5 class="position"><?php echo $position; ?></h5>
				                    <?php endif; ?>
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
	                            <?php endif;
								
								// Excerpts on/off
			                    if(isset( $show_excerpts ) && $show_excerpts == "on" ) :
			                    	// Check if we're using a real excerpt or the content
		                        	if( $post->post_excerpt != "") :
										$excerpt = get_the_excerpt();
										$excerpttext = strip_tags( $excerpt );
		                        	else :
					                    $content = get_the_content();
										$excerpttext = strip_tags($content);
		                        	endif;
		                        	
		                        	// If the Excerpt exists, continue
									if( $excerpttext != "" ) :
				                    	// Check how long the excerpt is
										$counter = strlen( $excerpttext );
										
				                    	// If we've set a limit on the excerpt, put it into play
						                if( !isset( $excerpt_length ) || ( isset ($excerpt_length ) && $excerpt_length == '' ) ) :
						                	$excerpttext = $excerpttext;
						                else :
						                	$excerpttext = substr( $excerpttext, 0, $excerpt_length );
						                endif;
						                
				                    	// Use an ellipsis if the excerpt is longer than the count
				                    	if ( $excerpt_length < $counter )
											$excerpttext .= '&hellip;';
											echo '<p>'.$excerpttext.'</p>';
									endif;	
									
									if(isset($read_more) && $read_more == "on")
										echo '<a href="'.$link.'" class="read-more">'.__('Read More', 'ocmx').'</a>';
		                      	endif; ?>
	                       	
                       		</div>
                       		<?php if($posttype == "product") :
	                       		woocommerce_get_template( 'loop/sale-flash.php' );
	                       		do_action( 'woocommerce_after_shop_loop_item_title' );
	                       		do_action( 'woocommerce_after_shop_loop_item' );
                       		endif; ?>
						<?php endif; ?>
                    </li>		
                <?php endwhile; ?>
            </ul>
     	</li>
    
<?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {
        
        // Turn $instance array into variables
        $instance_defaults = array ( 'excerpt_length' => 80, 'post_thumb' => 1, 'posttype' => 'post', 'postfilter' => '0', 'post_count' => 4, 'layout_columns' => 2);
        $instance_args = wp_parse_args( $instance, $instance_defaults );
        extract( $instance_args, EXTR_SKIP );
        
        // Setup the post filter if it's defined
		if(isset($postfilter) && isset($instance[$postfilter]))
	        $filterval = esc_attr($instance[$postfilter]);
		else
			$filterval = 0;	   

		$post_type_args = array("public" => true, "exclude_from_search" => false, "show_ui" => true);
		$post_types = get_post_types( $post_type_args, "objects");
?>

	<p><em><?php _e("Click Save after selecting a filter from each menu to load the next filter", "ocmx"); ?></em></p>
	
	<p>
		<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e("Title", "ocmx"); ?><input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php if(isset($title)) echo $title; ?>" /></label>
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id('posttype'); ?>"><?php _e("Display", "ocmx"); ?></label>
       	<select size="1" class="widefat" id="<?php echo $this->get_field_id("posttype"); ?>" name="<?php echo $this->get_field_name("posttype"); ?>">
       		<option <?php if(!isset($posttype) || $posttype == ""){echo "selected=\"selected\"";} ?> value="">--- Select a Content Type ---</option>
			<?php foreach($post_types as $post_type => $details) : ?>
            	<option <?php if(isset($posttype) && $posttype == $post_type){echo "selected=\"selected\"";} ?> value="<?php echo $post_type; ?>"><?php echo $details->labels->name; ?></option>
			<?php endforeach; ?>
        </select>
    </p>

    <?php if($posttype != "") :
    	if($posttype != "page") :
    		$taxonomyargs = array('post_type' => $posttype, "public" => true, "exclude_from_search" => false, "show_ui" => true); 
			$taxonomies = get_object_taxonomies($taxonomyargs,'objects');
			if(is_array($taxonomies) && !empty($taxonomies)) : ?>
				<p>
					<label for="<?php echo $this->get_field_id('postfilter'); ?>"><?php _e("Filter by", "ocmx"); ?></label>
		           	<select size="1" class="widefat" id="<?php echo $this->get_field_id("postfilter"); ?>" name="<?php echo $this->get_field_name("postfilter"); ?>">
		           		<option <?php if($postfilter == ""){echo "selected=\"selected\"";} ?> value="">--- Select a Filter ---</option>
		 				<?php foreach($taxonomies as $taxonomy => $details) : ?>
			                <option <?php if($postfilter == $taxonomy){echo "selected=\"selected\"";} ?> value="<?php echo $taxonomy; ?>"><?php echo $details->labels->name; ?></option>
		 				<?php $validtaxes[] = $taxonomy;
		 				endforeach; ?>
		            </select>
		        </p>
	        <?php endif; // !empty($taxonomies)
	        
	        if(isset($validtaxes) && $postfilter != "" && ( (is_array($validtaxes) && in_array($postfilter, $validtaxes)) || !is_array($validtaxes) ) ) :
				$tax = get_taxonomy($postfilter);
				$terms = get_terms($postfilter, "orderby=count&hide_empty=0"); ?>
				<p><label for="<?php echo $this->get_field_id($postfilter); ?>"><?php echo $tax->labels->name; ?></label>
		           <select size="1" class="widefat" id="<?php echo $this->get_field_id($postfilter); ?>" name="<?php echo $this->get_field_name($postfilter); ?>">
		                <option <?php if($filterval == 0){echo "selected=\"selected\"";} ?> value="0">All</option>
		                <?php foreach($terms as $term => $details) :?>
							<option  <?php if($filterval == $details->slug){echo "selected=\"selected\"";} ?> value="<?php echo $details->slug; ?>"><?php echo $details->name; ?></option>
		                <?php endforeach;?>
		            </select>
		        </p>
		    <?php endif; // isset($postfilter) && $postfilter != ""
	     endif;  // $posttype != "page"
	endif;  // $posttype != "" 
	
	// Setup the column layouts
	if($posttype != 'partners') : 
		$layout_options = array('two' => '2', 'three' => '3', 'four' => '4');
	else :
		$layout_options = array('two' => '2', 'three' => '3', 'four' => '4', 'six' => '6'); ?>
	<?php endif; ?>
	<p>
        <label for="<?php echo $this->get_field_id('layout_columns'); ?>"><?php _e("Column Layout", "ocmx"); ?></label>
        <select size="1" class="widefat" id="<?php echo $this->get_field_id('layout_columns'); ?>" name="<?php echo $this->get_field_name('layout_columns'); ?>">
        	<?php foreach($layout_options as $value => $label) : ?>
				<option <?php if($layout_columns == $value) : ?>selected="selected"<?php endif; ?> value="<?php echo $value; ?>"><?php echo $label; ?></option>
			<?php endforeach; ?>
        </select>
    </p>
	
	<p>
        <label for="<?php echo $this->get_field_id('post_count'); ?>"><?php _e("Post Count", "ocmx"); ?></label>
        <select size="1" class="widefat" id="<?php echo $this->get_field_id('post_count'); ?>" name="<?php echo $this->get_field_name('post_count'); ?>">
            <?php $i = 1;
			while($i < 13) :?>
				<option <?php if($post_count == $i) : ?>selected="selected"<?php endif; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php if($i < 1) :
					$i++;
				else: 
					$i=($i+1);
				endif;
			endwhile; ?>
        </select>
    </p>
	<?php  // Setup the order values
	$order_params = array("date" => "Post Date", "title" => "Post Title", "rand" => "Random",  "comment_count" => "Comment Count",  "menu_order" => "Menu Order"); ?> 
	<p>
        <label for="<?php echo $this->get_field_id('post_order_by'); ?>"><?php _e("Order By", "ocmx"); ?></label>
        <select size="1" class="widefat" id="<?php echo $this->get_field_id('post_order_by'); ?>" name="<?php echo $this->get_field_name('post_order_by'); ?>">
            <?php foreach($order_params as $value => $label) :?>
				<option  <?php if(isset($post_order_by) && $post_order_by == $value){echo "selected=\"selected\"";} ?> value="<?php echo $value; ?>"><?php echo $label; ?></option>
	        <?php endforeach;?>
        </select>
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('post_order'); ?>"><?php _e("Order", "ocmx"); ?></label>
        <select size="1" class="widefat" id="<?php echo $this->get_field_id('post_order'); ?>" name="<?php echo $this->get_field_name('post_order'); ?>">
			<option <?php if(!isset($post_order) || isset($post_order) && $post_order == "DESC") : ?>selected="selected"<?php endif; ?> value="DESC"><?php _e("Descending", 'ocmx'); ?></option>
			<option <?php if(isset($post_order) && $post_order == "ASC") : ?>selected="selected"<?php endif; ?> value="ASC"><?php _e("Ascending", 'ocmx'); ?></option>
		</select>
    </p>
	
	<?php if($posttype != 'partners') : ?>
		 <p>
	        <label for="<?php echo $this->get_field_id('post_thumb'); ?>"><?php _e("Show Images or Videos?", "ocmx"); ?></label>
	        <select size="1" class="widefat" id="<?php echo $this->get_field_id('post_thumb'); ?>" name="<?php echo $this->get_field_name('post_thumb'); ?>">
					<option <?php if($post_thumb == "none") : ?>selected="selected"<?php endif; ?> value="none"><?php _e("None", "ocmx"); ?></option>
					<option <?php if($post_thumb == "1") : ?>selected="selected"<?php endif; ?> value="1"><?php _e("Featured Thumbnails", "ocmx"); ?></option>
					<option <?php if($post_thumb == "0") : ?>selected="selected"<?php endif; ?> value="0"><?php _e("Videos", "ocmx"); ?></option>
	        </select>
	    </p>
    
		<p>
	        <label for="<?php echo $this->get_field_id('show_date'); ?>">
	        	<input type="checkbox" <?php if(isset($show_date) && $show_date == "on") : ?>checked="checked"<?php endif; ?> id="<?php echo $this->get_field_id('show_date'); ?>" name="<?php echo $this->get_field_name('show_date'); ?>">
				<?php _e("Show Date", "ocmx"); ?>
	        </label>
		</p>
	
	    <p>
	        <label for="<?php echo $this->get_field_id('show_excerpts'); ?>">
	        	<input type="checkbox" <?php if(isset($show_excerpts) && $show_excerpts == "on") : ?>checked="checked"<?php endif; ?> id="<?php echo $this->get_field_id('show_excerpts'); ?>" name="<?php echo $this->get_field_name('show_excerpts'); ?>">
				<?php _e("Show Excerpts", "ocmx"); ?>
	        </label>
		</p>
		
	    <p>
	    	<label for="<?php echo $this->get_field_id('excerpt_length'); ?>"><?php _e("Excerpt Length (character count)", "ocmx"); ?><input class="shortfat" id="<?php echo $this->get_field_id('excerpt_length'); ?>" name="<?php echo $this->get_field_name('excerpt_length'); ?>" type="text" value="<?php echo $excerpt_length; ?>" /><br /></label>
	    </p>
	<?php endif; ?>
    <p>
        <label for="<?php echo $this->get_field_id('read_more'); ?>">
        	<input type="checkbox" <?php if(isset($read_more) && $read_more == "on") : ?>checked="checked"<?php endif; ?> id="<?php echo $this->get_field_id('read_more'); ?>" name="<?php echo $this->get_field_name('read_more'); ?>">
			<?php _e("Show 'Read More' Link", "ocmx"); ?>
        </label>
	</p>
<?php 
	} // form

}// class

//This sample widget can then be registered in the widgets_init hook:

// register FooWidget widget
add_action('widgets_init', create_function('', 'return register_widget("obox_content_widget");'));

?>