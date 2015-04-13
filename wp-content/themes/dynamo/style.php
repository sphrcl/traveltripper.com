<?php header('Content-type: text/css'); 
wp_reset_postdata();

// Load customizer styles
if(get_option("obox_ignore_colours") != "yes"): ?>
	
	<?php 
	
	// Header - Menu
	
	if(get_option("obox_header_background")) : ?>
		#header-container{background-color: <?php echo get_option('obox_header_background');?>;}
	<?php endif;
	
	if(get_option("obox_navigation_font_color")) : ?>
		ul#nav li a{color: <?php echo get_option('obox_navigation_font_color');?>;}
	<?php endif;
	
	if(get_option("obox_navigation_hover")) : ?>
		ul#nav li a:hover{color: <?php echo get_option('obox_navigation_hover');?>;}
	<?php endif;
	
	if(get_option("obox_subnav_background")) : ?>
		ul#nav ul.sub-menu, ul#nav .children{background-color: <?php echo get_option('obox_subnav_background');?>;}
	<?php endif;
	
	if(get_option("obox_subnav_link")) : ?>
		ul#nav ul.sub-menu li a, ul#nav .children li a{color: <?php echo get_option('obox_subnav_link');?>;}
	<?php endif;
	
	if(get_option("obox_subnav_link_hover")) : ?>
		ul#nav ul.sub-menu li a:hover, ul#nav .children li a:hover{color: <?php echo get_option('obox_subnav_link_hover');?>;}
	<?php endif;
	
	
	// Header - Page Title
	
	if(get_option("obox_header_pagetitle_background")) : ?>
		#title-container{background-color: <?php echo get_option('obox_header_pagetitle_background');?>;}
	<?php endif;
	
	if(get_option("obox_header_pagetitle_text")) : ?>
		.title-block h2{color: <?php echo get_option('obox_header_pagetitle_text');?>;}
	<?php endif;
	
	if(get_option("obox_header_pagetitle_blurb")) : ?>
		.title-block p{color: <?php echo get_option('obox_header_pagetitle_blurb');?>;}
	<?php endif;
	
	
	// Header - Breadcrumbs
	
	if(get_option("obox_header_breadcrumbs_background")) : ?>
		#crumbs-container{background-color: <?php echo get_option('obox_header_breadcrumbs_background');?>;}
	<?php endif;
	
	if(get_option("obox_header_breadcrumbs_border")) : ?>
		#crumbs-container{border-color: <?php echo get_option('obox_header_breadcrumbs_border');?>; box-shadow: none;}
	<?php endif;
	
	if(get_option("obox_header_breadcrumbs_text")) : ?>
		#crumbs li, #crumbs .current, #crumbs .current a{color: <?php echo get_option('obox_header_breadcrumbs_text');?>;}
	<?php endif;
	
	if(get_option("obox_header_breadcrumbs_link")) : ?>
		#crumbs a{color: <?php echo get_option('obox_header_breadcrumbs_link');?>;}
	<?php endif;
	
	if(get_option("obox_header_breadcrumbs_link_hover")) : ?>
		#crumbs a:hover{color: <?php echo get_option('obox_header_breadcrumbs_link_hover');?>;}
	<?php endif;
	
	
	// Content - Contained
	
	if(get_option("obox_content_contained_background")) : ?>
		.post-content, .products-single .type-product, .products .product, .portfolio-list .column, .content-widget .column, .portfolio-content, #comments, #disqus_thread{background-color: <?php echo get_option('obox_content_contained_background');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_posttitle")) : ?>
		.contained .post-title a, .products .product h3, .product_title, .entry-content h2, .service-title a, .service-title, #comments h2, .content-widget .post-title a, .page-title, .page-title a, .copy h2, .copy h2 a, .copy h3 .copy h3 a, .copy h4, .copy h4 a, .related.products h2{color: <?php echo get_option('obox_content_contained_posttitle');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_posttitle_hover")) : ?>
		.contained .post-title a:hover, .service-title a:hover, .products .product h3:hover, .content-widget .post-title a:hover, .page-title a:hover, .copy h2 a:hover, .copy h3 a:hover, .copy h4 a:hover{color: <?php echo get_option('obox_content_contained_posttitle_hover');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_text")) : ?>
		.contained .copy p, .entry-content p, .content, #comments{color: <?php echo get_option('obox_content_contained_text');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_link")) : ?>
		.contained .copy a, .post-date a, .content a, #comments a{color: <?php echo get_option('obox_content_contained_link');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_link_hover")) : ?>
		.contained .copy a:hover, .post-date a:hover, .content a:hover, #comments a:hover{color: <?php echo get_option('obox_content_contained_link_hover');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_meta")) : ?>
		.contained .post-date, .content-widget .post-date, .comment .date{color: <?php echo get_option('obox_content_contained_meta');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_border")) : ?>
		.post-meta, .comment, .comment .children{border-color: <?php echo get_option('obox_content_contained_border');?>;}
	<?php endif;
	
	
	// Content - Non Contained
	
	if(get_option("obox_content_not_contained_posttitle")) : ?>
		.non-contained .post-title a, #home_page_three_column .widgettitle, #home_page_three_column .widgettitle a{color: <?php echo get_option('obox_content_not_contained_posttitle');?>;}
	<?php endif;
	
	if(get_option("obox_content_not_contained_posttitle_hover")) : ?>
		.non-contained .post-title a:hover, #home_page_three_column .widgettitle a:hover{color: <?php echo get_option('obox_content_not_contained_posttitle_hover');?>;}
	<?php endif;
	
	if(get_option("obox_content_not_contained_text")) : ?>
		.non-contained .copy p{color: <?php echo get_option('obox_content_not_contained_text');?>;}
	<?php endif;
	
	if(get_option("obox_content_not_contained_link")) : ?>
		.non-contained .copy a{color: <?php echo get_option('obox_content_not_contained_link');?>;}
	<?php endif;
	
	if(get_option("obox_content_not_contained_link_hover")) : ?>
		.non-contained .copy a:hover{color: <?php echo get_option('obox_content_not_contained_link_hover');?>;}
	<?php endif;
	
	if(get_option("obox_content_not_contained_link_hover")) : ?>
		.non-contained .copy a:hover{color: <?php echo get_option('obox_content_not_contained_link_hover');?>;}
	<?php endif;
	
	
	// Content - eCommerce
	
	if(get_option("obox_content_ecommerce_borders")) : ?>
		table td, table th, .cart_totals th, .cart_totals td, .cart_totals table, .shipping-calculator-form, .shipping-calculator-form p{border-color: <?php echo get_option('obox_content_ecommerce_borders');?>;}
	<?php endif;
	
	if(get_option("obox_content_ecommerce_price")) : ?>
		.price{color: <?php echo get_option('obox_content_ecommerce_price');?>;}
	<?php endif;
	
	if(get_option("obox_content_ecommerce_sale")) : ?>
		.onsale{background-color: <?php echo get_option('obox_content_ecommerce_sale');?>;}
	<?php endif;
	
	if(get_option("obox_content_ecommerce_tab_background")) : ?>
		.tabs li a{background-color: <?php echo get_option('obox_content_ecommerce_tab_background');?>;}
	<?php endif;
	
	if(get_option("obox_content_ecommerce_tab_active")) : ?>
		.tabs li.active a{background-color: <?php echo get_option('obox_content_ecommerce_tab_active');?>;}
	<?php endif;
	
	if(get_option("obox_content_ecommerce_tab_border")) : ?>
		.tabs li a, .tabs, .upsells .products, .related, .related .products, .upsells .product, .related .product, .products .product img, .product_list_widget img{border-color: <?php echo get_option('obox_content_ecommerce_tab_border');?>;}
	<?php endif;
	
	if(get_option("obox_content_ecommerce_tab_text")) : ?>
		.tabs li a, .tabs li.active a{color: <?php echo get_option('obox_content_ecommerce_tab_text');?>;}
	<?php endif;
	
	
	// Buttons - Content
	
	if(get_option("obox_buttons_content_search")) : ?>
		#searchform input[type=submit]{background-color: <?php echo get_option('obox_buttons_content_search');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_content_search_hover")) : ?>
		#searchform input[type=submit]:hover{background-color: <?php echo get_option('obox_buttons_content_search_hover');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_content_comment")) : ?>
		#respond #submit{background-color: <?php echo get_option('obox_buttons_content_comment');?> !important;}
	<?php endif;
	
	if(get_option("obox_buttons_content_comment_hover")) : ?>
		#respond #submit:hover{background-color: <?php echo get_option('obox_buttons_content_comment_hover');?> !important;}
	<?php endif;
	
	if(get_option("obox_buttons_content_cta")) : ?>
		.content-widget .read-more, .post-content .read-more{color: <?php echo get_option('obox_buttons_content_cta');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_content_cta_hover")) : ?>
		.content-widget .read-more:hover, .post-content .read-more:hover{color: <?php echo get_option('obox_buttons_content_cta_hover');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_content_pagination")) : ?>
		.pagination .next a, .pagination .previous a{background-color: <?php echo get_option('obox_buttons_content_pagination');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_content_pagination_hover")) : ?>
		.pagination .next a:hover, .pagination .previous a:hover{background-color: <?php echo get_option('obox_buttons_content_pagination_hover');?>;}
	<?php endif;
	
	
	// Buttons - eCommerce
	
	if(get_option("obox_buttons_ecommerce_addcart")) : ?>
		.add_to_cart_button, .added_to_cart, .single_add_to_cart_button, .button.product_type_variable{background-color: <?php echo get_option('obox_buttons_ecommerce_addcart');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_ecommerce_addcart_hover")) : ?>
		.add_to_cart_button:hover, .added_to_cart:hover, .single_add_to_cart_button:hover, .button.product_type_variable:hover{background-color: <?php echo get_option('obox_buttons_ecommerce_addcart_hover');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_ecommerce_viewcart")) : ?>
		.widget_shopping_cart .button, .woocommerce-message .button{background-color: <?php echo get_option('obox_buttons_ecommerce_viewcart');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_ecommerce_viewcart_hover")) : ?>
		.widget_shopping_cart .button:hover, .woocommerce-message .button:hover{background-color: <?php echo get_option('obox_buttons_ecommerce_viewcart_hover');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_ecommerce_checkout")) : ?>
		.widget_shopping_cart .button.checkout, .shop_table .checkout-button{background-color: <?php echo get_option('obox_buttons_ecommerce_checkout');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_ecommerce_checkout_hover")) : ?>
		.widget_shopping_cart .button.checkout:hover, .shop_table .checkout-button:hover{background-color: <?php echo get_option('obox_buttons_ecommerce_checkout_hover');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_ecommerce_pricefilter")) : ?>
		.price_slider_wrapper .button{background-color: <?php echo get_option('obox_buttons_ecommerce_pricefilter');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_ecommerce_pricefilter_hover")) : ?>
		.price_slider_wrapper .button:hover{background-color: <?php echo get_option('obox_buttons_ecommerce_pricefilter_hover');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_ecommerce_addreview")) : ?>
		#respond #submit{background-color: <?php echo get_option('obox_buttons_ecommerce_addreview');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_ecommerce_addreview_hover")) : ?>
		#respond #submit:hover{background-color: <?php echo get_option('obox_buttons_ecommerce_addreview_hover');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_ecommerce_quantity")) : ?>
		.quantity .plus, .quantity .minus{background-color: <?php echo get_option('obox_buttons_ecommerce_quantity');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_ecommerce_quantity_hover")) : ?>
		.quantity .plus:hover, .quantity .minus:hover{background-color: <?php echo get_option('obox_buttons_ecommerce_quantity_hover');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_ecommerce_return_shop")) : ?>
		.woocommerce .button{background-color: <?php echo get_option('obox_buttons_ecommerce_return_shop');?>;}
	<?php endif;
	
	if(get_option("obox_buttons_ecommerce_return_shop_hover")) : ?>
		.woocommerce .button:hover{background-color: <?php echo get_option('obox_buttons_ecommerce_return_shop_hover');?>;}
	<?php endif;
	
	
	// Sidebar - Blog
	
	if(get_option("obox_sidebar_blog_background")) : ?>
		.blog-sidebar, .related-services-container{background-color: <?php echo get_option('obox_sidebar_blog_background');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_blog_widgettitle")) : ?>
		.blog-sidebar .widgettitle, .related-services-container .widgettitle{color: <?php echo get_option('obox_sidebar_blog_widgettitle');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_blog_text")) : ?>
		.blog-sidebar, .blog-sidebar p, .related-services-container, .related-services-container p{color: <?php echo get_option('obox_sidebar_blog_text');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_blog_link")) : ?>
		.blog-sidebar a, .related-services-container a{color: <?php echo get_option('obox_sidebar_blog_link');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_blog_link_hover")) : ?>
		.blog-sidebar a:hover, related-services-container a:hover{color: <?php echo get_option('obox_sidebar_blog_link_hover');?>;}
	<?php endif;
	
	
	// Sidebar - eCommerce
	
	if(get_option("obox_sidebar_ecommerce_background")) : ?>
		.shop-sidebar{background-color: <?php echo get_option('obox_sidebar_ecommerce_background');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_ecommerce_widgettitle")) : ?>
		.shop-sidebar .widgettitle{color: <?php echo get_option('obox_sidebar_ecommerce_widgettitle');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_ecommerce_text")) : ?>
		.shop-sidebar, .shop-sidebar p, .widget_shopping_cart .total{color: <?php echo get_option('obox_sidebar_ecommerce_text');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_ecommerce_link")) : ?>
		.shop-sidebar a{color: <?php echo get_option('obox_sidebar_ecommerce_link');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_ecommerce_link_hover")) : ?>
		.shop-sidebar a:hover{color: <?php echo get_option('obox_sidebar_ecommerce_link_hover');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_ecommerce_separator")) : ?>
		.product_list_widget li{border-color: <?php echo get_option('obox_sidebar_ecommerce_separator');?>;}
	<?php endif;
	
	
	// Footer - Container
	
	if(get_option("obox_footer_container_background")) : ?>
		#footer-container{background-color: <?php echo get_option('obox_footer_container_background');?>;}
	<?php endif;
	
	if(get_option("obox_footer_container_border")) : ?>
		#footer-container, .footer-widgets{border-color: <?php echo get_option('obox_footer_container_border');?>;}
	<?php endif;
	
	
	// Footer - Widgets
	
	if(get_option("obox_footer_widgets_widgettitle")) : ?>
		.footer-widgets .widgettitle{color: <?php echo get_option('obox_footer_widgets_widgettitle');?>;}
	<?php endif;
	
	if(get_option("obox_footer_widgets_text")) : ?>
		.footer-widgets, .footer-widgets .dater{color: <?php echo get_option('obox_footer_widgets_text');?>;}
	<?php endif;
	
	if(get_option("obox_footer_widgets_link")) : ?>
		.footer-widgets a{color: <?php echo get_option('obox_footer_widgets_link');?>;}
	<?php endif;
	
	if(get_option("obox_footer_widgets_link_hover")) : ?>
		.footer-widgets a:hover{color: <?php echo get_option('obox_footer_widgets_link_hover');?>;}
	<?php endif;
	
	if(get_option("obox_footer_widgets_separator")) : ?>
		.footer-widgets .widget li{color: <?php echo get_option('obox_footer_widgets_separator');?>;}
	<?php endif;
	
	
	// Footer - Base
	
	if(get_option("obox_footer_base_background")) : ?>
		#footer-base-container{background-color: <?php echo get_option('obox_footer_base_background');?>;}
	<?php endif;
	
	if(get_option("obox_footer_base_text")) : ?>
		.footer-text, .footer-text p{color: <?php echo get_option('obox_footer_base_text');?>;}
	<?php endif;
	
	if(get_option("obox_footer_base_link")) : ?>
		.footer-text a{color: <?php echo get_option('obox_footer_base_link');?>;}
	<?php endif;
	
	if(get_option("obox_footer_base_link_hover")) : ?>
		.footer-text a:hover, ul#footer-nav li a:hover{color: <?php echo get_option('obox_footer_base_link_hover');?>;}
	<?php endif;
		
endif;

// Load custom CSS
if(get_option("ocmx_custom_css") != ""): ?>
	<?php echo get_option("ocmx_custom_css"); ?>
<?php endif;

// Load header background
if(get_header_image() != "") : ?>  
	#title-container{background: url(<?php header_image(); ?>) no-repeat top center;}
<?php endif;

// Load header background
if(get_background_color() != "") : ?>  
	body{background-image: none;}
	#widget-block{background-image: none; background: #<?php echo background_color(); ?>;}
<?php endif;


// $background is the saved custom image, or the default image.
$background = set_url_scheme( get_background_image() );

// $color is the saved custom color.
// A default has to be specified in style.css. It will not be printed here.
$color = get_theme_mod( 'background_color' );

if ( ! $background && ! $color )
	return;

$style = $color ? "background-color: #$color;" : '';

if ( $background ) {
	$image = " background-image: url('$background');";

	$repeat = get_theme_mod( 'background_repeat', 'repeat' );
	if ( ! in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) )
		$repeat = 'repeat';
	$repeat = " background-repeat: $repeat;";

	$position = get_theme_mod( 'background_position_x', 'left' );
	if ( ! in_array( $position, array( 'center', 'right', 'left' ) ) )
		$position = 'left';
	$position = " background-position: top $position;";

	$attachment = get_theme_mod( 'background_attachment', 'scroll' );
	if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) )
		$attachment = 'scroll';
	$attachment = " background-attachment: $attachment;";

	$style .= $image . $repeat . $position . $attachment;
} ?>

#widget-block{ <?php echo trim( $style ); ?>; } 