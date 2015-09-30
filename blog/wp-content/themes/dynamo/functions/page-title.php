<?php $parentpage = get_template_link(get_post_type().".php");
$pagetitle_copy = get_option("ocmx_pagetitle_copy");
if(function_exists('is_shop') && ( is_shop() || is_cart() || is_checkout() ) ) : ?>
    <div id="title-container">
        <div class="title-block">
            <h2><?php _e("Shop", "ocmx"); ?></h2>		    
        </div>
    </div>
<?php elseif(!is_page() && get_query_var('term' ) != '' ) :
	$term = get_term_by( 'slug', get_query_var('term' ), get_query_var( 'taxonomy' ) ); ?>
	<div id="title-container">
	    <div class="title-block">
	        <h2><?php echo $term->name; ?></h2>
	       	<?php if($pagetitle_copy !="no") :
				if ( !empty( $term->description) ) :
		            echo '<p>'.$term->description.'</p>';
		        else :
		            false;
		        endif;
			endif; ?>
	    </div>
	</div>
<?php elseif(!empty($parentpage)) : 
	$parentpage = get_template_link(get_post_type().".php"); 
	$pagetitle_copy = get_post_meta($post->ID, "ocmx_pagetitle_copy", true);?>
	<div id="title-container">
		<div class="title-block">
            <h2><?php echo $parentpage->post_title; ?></h2>
            <?php if($pagetitle_copy !="no") :
            	if($parentpage->post_excerpt != '') : echo '<p>'.$parentpage->post_excerpt.'</p>'; endif;
            endif; ?>
        </div>
    </div>
<?php else : ?>
	<?php while ( have_posts() ) : the_post(); 
		$header_bg_image = get_post_meta($post->ID, "header_image", true);
		$header_bg_attributes = get_post_meta($post->ID, "header_image_attributes", true);
		if($header_bg_image  != '' || !empty($header_bg_attributes["colour"]) || is_page()) : ?>
		<div id="title-container">		
			<div class="title-block">
		    	<h2><?php the_title(); ?></h2>
		    	<?php if($pagetitle_copy !="no") :
					the_excerpt();
				endif; ?>
		    </div>
		</div>
	<?php endif;
	endwhile; ?>
<?php endif; ?>