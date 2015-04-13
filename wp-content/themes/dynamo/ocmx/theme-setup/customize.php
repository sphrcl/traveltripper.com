<?php //OCMX Custom logo and Favicon

function obox_logo_register($wp_customize){
    
    $wp_customize->add_section('obox_general', array(
        'title'    => __('General Theme Settings', 'obox'),
        'priority' => 21,
    ));
    
   // Custom Colors
	
	$wp_customize->add_setting('obox_ignore_colours', array(
        'default'        => 'no',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control('obox_header_menu', array(
        'label'      => __('Use Theme Default Color Scheme', 'obox'),
        'section'    => 'obox_general',
        'settings'   => 'obox_ignore_colours',
        'type'       => 'radio',
        'priority' => 0,
        'choices'    => array(
            'yes' => 'Yes',
            'no' => 'No'
        ),
    ));
 
    $wp_customize->add_setting('obox_custom_logo', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'obox_custom_logo', array(
        'label'    => __('Custom Logo', 'obox'),
        'section'  => 'obox_general',
        'settings' => 'obox_custom_logo',
    )));
    
    $wp_customize->add_setting('obox_custom_favicon', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'obox_custom_favicon', array(
        'label'    => __('Custom Favicon', 'obox'),
        'section'  => 'obox_general',
        'settings' => 'obox_custom_favicon',
    )));
    
}

add_action('customize_register', 'obox_logo_register');


// OCMX Color Options 

function obox_customize_register($wp_customize) {

	/* Header - Menu:
		- Background
		- Link
		- Link Hover 
		- Sub Menu Background
		- Sub Menu Link
		- Sub Menu Hover
	*/
	
	$wp_customize->add_section('obox_header_menu', array(
		'title' => __( 'Header - Menu', 'obox' ),
		'priority' => 22,
		)
	);
    
    // Header - Background
    $wp_customize->add_setting( 'obox_header_background', array(
		'default' => '#fff',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_header_background', array(
		'label' => __( 'Background', 'obox' ),
		'section' => 'obox_header_menu',
		'settings' => 'obox_header_background',
		'priority' => 1,
	)));
	
	// Header - Link
    $wp_customize->add_setting( 'obox_navigation_font_color', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_navigation_font_color', array(
		'label' => __( 'Link', 'obox' ),
		'section' => 'obox_header_menu',
		'settings' => 'obox_navigation_font_color',
		'priority' => 10,
	)));
	
	// Header - Link Hover
	$wp_customize->add_setting( 'obox_navigation_hover', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_navigation_hover', array(
		'label' => __( 'Link Hover', 'obox' ),
		'section' => 'obox_header_menu',
		'settings' => 'obox_navigation_hover',
		'priority' => 20,
	)));
	
	// Header - Sub Menu Background
	$wp_customize->add_setting( 'obox_subnav_background', array(
		'default' => '#fff',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_subnav_background', array(
		'label' => __( 'Sub Menu Background', 'obox' ),
		'section' => 'obox_header_menu',
		'settings' => 'obox_subnav_background',
		'priority' => 30,
	)));
	
	// Header - Sub Menu Link
	$wp_customize->add_setting( 'obox_subnav_link', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_subnav_link', array(
		'label' => __( 'Sub Menu Link', 'obox' ),
		'section' => 'obox_header_menu',
		'settings' => 'obox_subnav_link',
		'priority' => 40,
	)));
	
	// Header - Sub Menu Link Hover
	$wp_customize->add_setting( 'obox_subnav_link_hover', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_subnav_link_hover', array(
		'label' => __( 'Sub Menu Link Hover', 'obox' ),
		'section' => 'obox_header_menu',
		'settings' => 'obox_subnav_link_hover',
		'priority' => 50,
	)));
	
	
	/* Header - Page Title:
		- Background
		- Title 
		- Blurb
	*/
	
	$wp_customize->add_section('obox_header_pagetitle', array(
		'title' => __( 'Header - Page Title', 'obox' ),
		'priority' => 23,
		)
	);
    
    // Page Title - Background
    $wp_customize->add_setting( 'obox_header_pagetitle_background', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_header_pagetitle_background', array(
		'label' => __( 'Background', 'obox' ),
		'section' => 'obox_header_pagetitle',
		'settings' => 'obox_header_pagetitle_background',
		'priority' => 1,
	)));
	
	// Page Title - Title
    $wp_customize->add_setting( 'obox_header_pagetitle_text', array(
		'default' => '#fff',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_header_pagetitle_text', array(
		'label' => __( 'Title', 'obox' ),
		'section' => 'obox_header_pagetitle',
		'settings' => 'obox_header_pagetitle_text',
		'priority' => 10,
	)));
	
	// Page Title - Blurb
    $wp_customize->add_setting( 'obox_header_pagetitle_blurb', array(
		'default' => '#eee',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_header_pagetitle_blurb', array(
		'label' => __( 'Blurb', 'obox' ),
		'section' => 'obox_header_pagetitle',
		'settings' => 'obox_header_pagetitle_blurb',
		'priority' => 20,
	)));
	
	
	/* Header - Breadcrumbs:
		- Background
		- Border (if border color added loose box-shadow)
		- Text
		- Link
		- Link Hover
	*/
	
	$wp_customize->add_section('obox_header_breadcrumbs', array(
		'title' => __( 'Header - Breadcrumbs', 'obox' ),
		'priority' => 24,
		)
	);
    
    // Breadcrumbs - Background
    $wp_customize->add_setting( 'obox_header_breadcrumbs_background', array(
		'default' => '#fff',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_header_breadcrumbs_background', array(
		'label' => __( 'Background', 'obox' ),
		'section' => 'obox_header_breadcrumbs',
		'settings' => 'obox_header_breadcrumbs_background',
		'priority' => 1,
	)));
	
	// Breadcrumbs - Border
    $wp_customize->add_setting( 'obox_header_breadcrumbs_border', array(
		'default' => '#fff',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_header_breadcrumbs_border', array(
		'label' => __( 'Border', 'obox' ),
		'section' => 'obox_header_breadcrumbs',
		'settings' => 'obox_header_breadcrumbs_border',
		'priority' => 10,
	)));
	
	// Breadcrumbs - Text
    $wp_customize->add_setting( 'obox_header_breadcrumbs_text', array(
		'default' => '#999',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_header_breadcrumbs_text', array(
		'label' => __( 'Text', 'obox' ),
		'section' => 'obox_header_breadcrumbs',
		'settings' => 'obox_header_breadcrumbs_text',
		'priority' => 20,
	)));
	
	// Breadcrumbs - Link
    $wp_customize->add_setting( 'obox_header_breadcrumbs_link', array(
		'default' => '#777',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_header_breadcrumbs_link', array(
		'label' => __( 'Link', 'obox' ),
		'section' => 'obox_header_breadcrumbs',
		'settings' => 'obox_header_breadcrumbs_link',
		'priority' => 30,
	)));
	
	// Breadcrumbs - Link Hover
    $wp_customize->add_setting( 'obox_header_breadcrumbs_link_hover', array(
		'default' => '#777',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_header_breadcrumbs_link_hover', array(
		'label' => __( 'Link Hover', 'obox' ),
		'section' => 'obox_header_breadcrumbs',
		'settings' => 'obox_header_breadcrumbs_link_hover',
		'priority' => 40,
	)));
	
	
	/* Content - Contained:
		- Background
		- Post Title
		- Post Title Hover 
		- Text
		- Link
		- Link Hover
		- Meta
	*/
	
	$wp_customize->add_section('obox_content_contained', array(
		'title' => __( 'Content - Contained', 'obox' ),
		'priority' => 25,
		)
	);
    
    // Contained - Background
    $wp_customize->add_setting( 'obox_content_contained_background', array(
		'default' => '#fff',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_contained_background', array(
		'label' => __( 'Background', 'obox' ),
		'section' => 'obox_content_contained',
		'settings' => 'obox_content_contained_background',
		'priority' => 1,
	)));
	
	// Contained - Post Title
    $wp_customize->add_setting( 'obox_content_contained_posttitle', array(
		'default' => '#111',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_contained_posttitle', array(
		'label' => __( 'Post Title', 'obox' ),
		'section' => 'obox_content_contained',
		'settings' => 'obox_content_contained_posttitle',
		'priority' => 10,
	)));
	
	// Contained - Post Title Hover
    $wp_customize->add_setting( 'obox_content_contained_posttitle_hover', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_contained_posttitle_hover', array(
		'label' => __( 'Post Title Hover', 'obox' ),
		'section' => 'obox_content_contained',
		'settings' => 'obox_content_contained_posttitle_hover',
		'priority' => 20,
	)));
	
	// Contained - Text
    $wp_customize->add_setting( 'obox_content_contained_text', array(
		'default' => '#777',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_contained_text', array(
		'label' => __( 'Text', 'obox' ),
		'section' => 'obox_content_contained',
		'settings' => 'obox_content_contained_text',
		'priority' => 30,
	)));
	
	// Contained - Link
    $wp_customize->add_setting( 'obox_content_contained_link', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_contained_link', array(
		'label' => __( 'Link', 'obox' ),
		'section' => 'obox_content_contained',
		'settings' => 'obox_content_contained_link',
		'priority' => 40,
	)));
	
	// Contained - Link Hover
    $wp_customize->add_setting( 'obox_content_contained_link_hover', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_contained_link_hover', array(
		'label' => __( 'Link Hover', 'obox' ),
		'section' => 'obox_content_contained',
		'settings' => 'obox_content_contained_link_hover',
		'priority' => 50,
	)));
	
	// Contained - Meta
    $wp_customize->add_setting( 'obox_content_contained_meta', array(
		'default' => '#999',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_contained_meta', array(
		'label' => __( 'Meta', 'obox' ),
		'section' => 'obox_content_contained',
		'settings' => 'obox_content_contained_meta',
		'priority' => 60,
	)));
	
	// Contained - Border
    $wp_customize->add_setting( 'obox_content_contained_border', array(
		'default' => '#ccc',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_contained_border', array(
		'label' => __( 'Border', 'obox' ),
		'section' => 'obox_content_contained',
		'settings' => 'obox_content_contained_border',
		'priority' => 70,
	)));
	
	
	/* Content - Non Contained:
		- Post Title
		- Post Title Hover 
		- Text
		- Link
		- Link Hover
	*/
	
	$wp_customize->add_section('obox_content_not_contained', array(
		'title' => __( 'Content - Non Contained', 'obox' ),
		'priority' => 26,
		)
	);
    
    // Non Contained - Post Title
    $wp_customize->add_setting( 'obox_content_not_contained_posttitle', array(
		'default' => '#111',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_not_contained_posttitle', array(
		'label' => __( 'Post Title', 'obox' ),
		'section' => 'obox_content_not_contained',
		'settings' => 'obox_content_not_contained_posttitle',
		'priority' => 1,
	)));
	
	// Non Contained - Post Title Hover
    $wp_customize->add_setting( 'obox_content_not_contained_posttitle_hover', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_not_contained_posttitle_hover', array(
		'label' => __( 'Post Title Hover', 'obox' ),
		'section' => 'obox_content_not_contained',
		'settings' => 'obox_content_not_contained_posttitle_hover',
		'priority' => 10,
	)));
	
	// Non Contained - Text
    $wp_customize->add_setting( 'obox_content_not_contained_text', array(
		'default' => '#777',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_not_contained_text', array(
		'label' => __( 'Text', 'obox' ),
		'section' => 'obox_content_not_contained',
		'settings' => 'obox_content_not_contained_text',
		'priority' => 20,
	)));
	
	// Non Contained - Link
    $wp_customize->add_setting( 'obox_content_not_contained_link', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_not_contained_link', array(
		'label' => __( 'Link', 'obox' ),
		'section' => 'obox_content_not_contained',
		'settings' => 'obox_content_not_contained_link',
		'priority' => 30,
	)));
	
	// Non Contained - Link Hover
    $wp_customize->add_setting( 'obox_content_not_contained_link_hover', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_not_contained_link_hover', array(
		'label' => __( 'Link Hover', 'obox' ),
		'section' => 'obox_content_not_contained',
		'settings' => 'obox_content_not_contained_link_hover',
		'priority' => 40,
	)));
	
	
	/* Content - eCommerce:
		- Container Borders
		- Price
		- Sale
		- Tab Background
		- Tab Active
		- Tab Border
		- Tab Text
	*/
	
	$wp_customize->add_section('obox_content_ecommerce', array(
		'title' => __( 'Content - eCommerce', 'obox' ),
		'priority' => 27,
		)
	);
    
    // eCommerce - Container Borders
    $wp_customize->add_setting( 'obox_content_ecommerce_borders', array(
		'default' => '#e0e0e0',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_ecommerce_borders', array(
		'label' => __( 'Container Borders', 'obox' ),
		'section' => 'obox_content_ecommerce',
		'settings' => 'obox_content_ecommerce_borders',
		'priority' => 1,
	)));
	
	// eCommerce - Price
    $wp_customize->add_setting( 'obox_content_ecommerce_price', array(
		'default' => '#777',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_ecommerce_price', array(
		'label' => __( 'Price', 'obox' ),
		'section' => 'obox_content_ecommerce',
		'settings' => 'obox_content_ecommerce_price',
		'priority' => 10,
	)));
	
	// Buttons - Sale 
    $wp_customize->add_setting( 'obox_content_ecommerce_sale', array(
		'default' => '#FF6C70',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_ecommerce_sale', array(
		'label' => __( 'Sale', 'obox' ),
		'section' => 'obox_content_ecommerce',
		'settings' => 'obox_content_ecommerce_sale',
		'priority' => 15,
	)));
	
	// eCommerce - Tab Border
    $wp_customize->add_setting( 'obox_content_ecommerce_tab_border', array(
		'default' => '#e0e0e0',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_ecommerce_tab_border', array(
		'label' => __( 'Border', 'obox' ),
		'section' => 'obox_content_ecommerce',
		'settings' => 'obox_content_ecommerce_tab_border',
		'priority' => 20,
	)));
	
	// eCommerce - Tab Background
    $wp_customize->add_setting( 'obox_content_ecommerce_tab_background', array(
		'default' => '#f2f2f2',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_ecommerce_tab_background', array(
		'label' => __( 'Tab Background', 'obox' ),
		'section' => 'obox_content_ecommerce',
		'settings' => 'obox_content_ecommerce_tab_background',
		'priority' => 30,
	)));
	
	// eCommerce - Tab Active
    $wp_customize->add_setting( 'obox_content_ecommerce_tab_active', array(
		'default' => '#fff',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_ecommerce_tab_active', array(
		'label' => __( 'Tab Active', 'obox' ),
		'section' => 'obox_content_ecommerce',
		'settings' => 'obox_content_ecommerce_tab_active',
		'priority' => 40,
	)));
	
	// eCommerce - Tab Text
    $wp_customize->add_setting( 'obox_content_ecommerce_tab_text', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_content_ecommerce_tab_text', array(
		'label' => __( 'Tab Text', 'obox' ),
		'section' => 'obox_content_ecommerce',
		'settings' => 'obox_content_ecommerce_tab_text',
		'priority' => 50,
	)));
	
	
	
	/* Buttons - Content:
		- Search 
		- Search  Hover 
		- Add Comment
		- Add Comment Hover
		- Call to Action (Read More)
		- Call to Action Hover
		- Pagination 
		- Pagination Hover
	*/
	
	$wp_customize->add_section('obox_buttons_content', array(
		'title' => __( 'Buttons - Content', 'obox' ),
		'priority' => 28,
		)
	);
    
    // Buttons - Search
    $wp_customize->add_setting( 'obox_buttons_content_search', array(
		'default' => '#315E9B',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_content_search', array(
		'label' => __( 'Search', 'obox' ),
		'section' => 'obox_buttons_content',
		'settings' => 'obox_buttons_content_search',
		'priority' => 1,
	)));
	
	// Buttons - Search Hover
    $wp_customize->add_setting( 'obox_buttons_content_search_hover', array(
		'default' => '#000',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_content_search_hover', array(
		'label' => __( 'Search Hover', 'obox' ),
		'section' => 'obox_buttons_content',
		'settings' => 'obox_buttons_content_search_hover',
		'priority' => 10,
	)));
	
	// Buttons - Add Comment
    $wp_customize->add_setting( 'obox_buttons_content_comment', array(
		'default' => '#FF6C70',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_content_comment', array(
		'label' => __( 'Add Comment', 'obox' ),
		'section' => 'obox_buttons_content',
		'settings' => 'obox_buttons_content_comment',
		'priority' => 20,
	)));
	
	// Buttons - Add Comment Hover
    $wp_customize->add_setting( 'obox_buttons_content_comment_hover', array(
		'default' => '#F47E81',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_content_comment_hover', array(
		'label' => __( 'Add Comment Hover', 'obox' ),
		'section' => 'obox_buttons_content',
		'settings' => 'obox_buttons_content_comment_hover',
		'priority' => 30,
	)));
	
	// Buttons - Call to Action
    $wp_customize->add_setting( 'obox_buttons_content_cta', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_content_cta', array(
		'label' => __( 'Call to Action', 'obox' ),
		'section' => 'obox_buttons_content',
		'settings' => 'obox_buttons_content_cta',
		'priority' => 40,
	)));
	
	// Buttons - Call to Action Hover
    $wp_customize->add_setting( 'obox_buttons_content_cta_hover', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_content_cta_hover', array(
		'label' => __( 'Call to Action Hover', 'obox' ),
		'section' => 'obox_buttons_content',
		'settings' => 'obox_buttons_content_cta_hover',
		'priority' => 50,
	)));
	
	// Buttons - Pagination
    $wp_customize->add_setting( 'obox_buttons_content_pagination', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_content_pagination', array(
		'label' => __( 'Pagination', 'obox' ),
		'section' => 'obox_buttons_content',
		'settings' => 'obox_buttons_content_pagination',
		'priority' => 60,
	)));
	
	// Buttons - Pagination Hover
    $wp_customize->add_setting( 'obox_buttons_content_pagination_hover', array(
		'default' => '#000',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_content_pagination_hover', array(
		'label' => __( 'Pagination Hover', 'obox' ),
		'section' => 'obox_buttons_content',
		'settings' => 'obox_buttons_content_pagination_hover',
		'priority' => 70,
	)));
	
	
	/* Buttons - eCommerce:
		- Add to Cart (linked to Òselect optionsÓ and Òupdate cartÓ)
		- Add to Cart Hover 
		- View Cart 
		- View Cart Hover
		- Checkout 
		- Checkout Hover
		- Price Filter
		- Price Filter Hover
		- Add Review
		- Add Review Hover
		- Quantity 
		- Quantity Hover
		- Return to Shop
		- Return to Shop Hover
	*/
	
	$wp_customize->add_section('obox_buttons_ecommerce', array(
		'title' => __( 'Buttons - eCommerce', 'obox' ),
		'priority' => 29,
		)
	);
    
    // Buttons - Add to Cart
    $wp_customize->add_setting( 'obox_buttons_ecommerce_addcart', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_ecommerce_addcart', array(
		'label' => __( 'Add to Cart', 'obox' ),
		'section' => 'obox_buttons_ecommerce',
		'settings' => 'obox_buttons_ecommerce_addcart',
		'priority' => 1,
	)));
	
	// Buttons - Add to Cart Hover
    $wp_customize->add_setting( 'obox_buttons_ecommerce_addcart_hover', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_ecommerce_addcart_hover', array(
		'label' => __( 'Add to Cart Hover', 'obox' ),
		'section' => 'obox_buttons_ecommerce',
		'settings' => 'obox_buttons_ecommerce_addcart_hover',
		'priority' => 10,
	)));
	
	// Buttons - View Cart 
    $wp_customize->add_setting( 'obox_buttons_ecommerce_viewcart', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_ecommerce_viewcart', array(
		'label' => __( 'View Cart', 'obox' ),
		'section' => 'obox_buttons_ecommerce',
		'settings' => 'obox_buttons_ecommerce_viewcart',
		'priority' => 20,
	)));
	
	// Buttons - View Cart Hover
    $wp_customize->add_setting( 'obox_buttons_ecommerce_viewcart_hover', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_ecommerce_viewcart_hover', array(
		'label' => __( 'View Cart Hover', 'obox' ),
		'section' => 'obox_buttons_ecommerce',
		'settings' => 'obox_buttons_ecommerce_viewcart_hover',
		'priority' => 30,
	)));
	
	// Buttons - Checkout 
    $wp_customize->add_setting( 'obox_buttons_ecommerce_checkout', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_ecommerce_checkout', array(
		'label' => __( 'Checkout', 'obox' ),
		'section' => 'obox_buttons_ecommerce',
		'settings' => 'obox_buttons_ecommerce_checkout',
		'priority' => 40,
	)));
	
	// Buttons - Checkout Hover
    $wp_customize->add_setting( 'obox_buttons_ecommerce_checkout_hover', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_ecommerce_checkout_hover', array(
		'label' => __( 'Checkout Hover', 'obox' ),
		'section' => 'obox_buttons_ecommerce',
		'settings' => 'obox_buttons_ecommerce_checkout_hover',
		'priority' => 50,
	)));
	
	// Buttons - Price Filter 
    $wp_customize->add_setting( 'obox_buttons_ecommerce_pricefilter', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_ecommerce_pricefilter', array(
		'label' => __( 'Price Filter ', 'obox' ),
		'section' => 'obox_buttons_ecommerce',
		'settings' => 'obox_buttons_ecommerce_pricefilter',
		'priority' => 60,
	)));
	
	// Buttons - Price Filter  Hover
    $wp_customize->add_setting( 'obox_buttons_ecommerce_pricefilter_hover', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_ecommerce_pricefilter_hover', array(
		'label' => __( 'Price Filter Hover', 'obox' ),
		'section' => 'obox_buttons_ecommerce',
		'settings' => 'obox_buttons_ecommerce_pricefilter_hover',
		'priority' => 70,
	)));
	
	// Buttons - Add Review
    $wp_customize->add_setting( 'obox_buttons_ecommerce_addreview', array(
		'default' => '#FF6C70',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_ecommerce_addreview', array(
		'label' => __( 'Add Review', 'obox' ),
		'section' => 'obox_buttons_ecommerce',
		'settings' => 'obox_buttons_ecommerce_addreview',
		'priority' => 80,
	)));
	
	// Buttons - Add Review  Hover
    $wp_customize->add_setting( 'obox_buttons_ecommerce_addreview_hover', array(
		'default' => '#F47E81',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_ecommerce_addreview_hover', array(
		'label' => __( 'Add Review Hover', 'obox' ),
		'section' => 'obox_buttons_ecommerce',
		'settings' => 'obox_buttons_ecommerce_addreview_hover',
		'priority' => 90,
	)));
	
	// Buttons - Quantity Plus
    $wp_customize->add_setting( 'obox_buttons_ecommerce_quantity', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_ecommerce_quantity', array(
		'label' => __( 'Quantity', 'obox' ),
		'section' => 'obox_buttons_ecommerce',
		'settings' => 'obox_buttons_ecommerce_quantity',
		'priority' => 100,
	)));
	
	// Buttons - Quantity Hover
    $wp_customize->add_setting( 'obox_buttons_ecommerce_quantity_hover', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_ecommerce_quantity_hover', array(
		'label' => __( 'Quantity Hover', 'obox' ),
		'section' => 'obox_buttons_ecommerce',
		'settings' => 'obox_buttons_ecommerce_quantity_hover',
		'priority' => 110,
	)));
	
	// Buttons - Return to Shop
    $wp_customize->add_setting( 'obox_buttons_ecommerce_return_shop', array(
		'default' => '#315E9B',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_ecommerce_return_shop', array(
		'label' => __( 'Return to Shop', 'obox' ),
		'section' => 'obox_buttons_ecommerce',
		'settings' => 'obox_buttons_ecommerce_return_shop',
		'priority' => 120,
	)));
	
	// Buttons - Return to Shop Hover
    $wp_customize->add_setting( 'obox_buttons_ecommerce_return_shop_hover', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_buttons_ecommerce_return_shop_hover', array(
		'label' => __( 'Return to Shop Hover', 'obox' ),
		'section' => 'obox_buttons_ecommerce',
		'settings' => 'obox_buttons_ecommerce_return_shop_hover',
		'priority' => 130,
	)));
	
	
	/* Sidebar - Blog:
		- Background 
		- Widget Title 
		- Text  
		- Link
		- Link Hover 
	*/
	
	$wp_customize->add_section('obox_sidebar_blog', array(
		'title' => __( 'Sidebar - Blog', 'obox' ),
		'priority' => 30,
		)
	);
    
    // Sidebar - Blog - Background
    $wp_customize->add_setting( 'obox_sidebar_blog_background', array(
		'default' => '#fff',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_sidebar_blog_background', array(
		'label' => __( 'Background', 'obox' ),
		'section' => 'obox_sidebar_blog',
		'settings' => 'obox_sidebar_blog_background',
		'priority' => 1,
	)));
	
	// Sidebar - Blog - Widget Title 
    $wp_customize->add_setting( 'obox_sidebar_blog_widgettitle', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_sidebar_blog_widgettitle', array(
		'label' => __( 'Widget Title ', 'obox' ),
		'section' => 'obox_sidebar_blog',
		'settings' => 'obox_sidebar_blog_widgettitle',
		'priority' => 10,
	)));
	
	// Sidebar - Blog - Text
    $wp_customize->add_setting( 'obox_sidebar_blog_text', array(
		'default' => '#777',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_sidebar_blog_text', array(
		'label' => __( 'Text ', 'obox' ),
		'section' => 'obox_sidebar_blog',
		'settings' => 'obox_sidebar_blog_text',
		'priority' => 20,
	)));
	
	// Sidebar - Blog - Link
    $wp_customize->add_setting( 'obox_sidebar_blog_link', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_sidebar_blog_link', array(
		'label' => __( 'Link', 'obox' ),
		'section' => 'obox_sidebar_blog',
		'settings' => 'obox_sidebar_blog_link',
		'priority' => 30,
	)));
	
	// Sidebar - Blog - Link Hover
    $wp_customize->add_setting( 'obox_sidebar_blog_link_hover', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_sidebar_blog_link_hover', array(
		'label' => __( 'Link Hover', 'obox' ),
		'section' => 'obox_sidebar_blog',
		'settings' => 'obox_sidebar_blog_link_hover',
		'priority' => 40,
	)));
	
	
	/* Sidebar - eCommerce:
		- Background 
		- Widget Title 
		- Text  
		- Link
		- Link Hover 
		- Separator
	*/
	
	$wp_customize->add_section('obox_sidebar_ecommerce', array(
		'title' => __( 'Sidebar - eCommerce', 'obox' ),
		'priority' => 31,
		)
	);
    
    // Sidebar - eCommerce - Background
    $wp_customize->add_setting( 'obox_sidebar_ecommerce_background', array(
		'default' => '#fff',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_sidebar_ecommerce_background', array(
		'label' => __( 'Background', 'obox' ),
		'section' => 'obox_sidebar_ecommerce',
		'settings' => 'obox_sidebar_ecommerce_background',
		'priority' => 1,
	)));
	
	// Sidebar - eCommerce - Widget Title 
    $wp_customize->add_setting( 'obox_sidebar_ecommerce_widgettitle', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_sidebar_ecommerce_widgettitle', array(
		'label' => __( 'Widget Title ', 'obox' ),
		'section' => 'obox_sidebar_ecommerce',
		'settings' => 'obox_sidebar_ecommerce_widgettitle',
		'priority' => 10,
	)));
	
	// Sidebar - eCommerce - Text
    $wp_customize->add_setting( 'obox_sidebar_ecommerce_text', array(
		'default' => '#777',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_sidebar_ecommerce_text', array(
		'label' => __( 'Text ', 'obox' ),
		'section' => 'obox_sidebar_ecommerce',
		'settings' => 'obox_sidebar_ecommerce_text',
		'priority' => 20,
	)));
	
	// Sidebar - eCommerce - Link
    $wp_customize->add_setting( 'obox_sidebar_ecommerce_link', array(
		'default' => '#333',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_sidebar_ecommerce_link', array(
		'label' => __( 'Link', 'obox' ),
		'section' => 'obox_sidebar_ecommerce',
		'settings' => 'obox_sidebar_ecommerce_link',
		'priority' => 30,
	)));
	
	// Sidebar - eCommerce - Link Hover
    $wp_customize->add_setting( 'obox_sidebar_ecommerce_link_hover', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_sidebar_ecommerce_link_hover', array(
		'label' => __( 'Link Hover', 'obox' ),
		'section' => 'obox_sidebar_ecommerce',
		'settings' => 'obox_sidebar_ecommerce_link_hover',
		'priority' => 40,
	)));
	
	// Sidebar - eCommerce - Separator
    $wp_customize->add_setting( 'obox_sidebar_ecommerce_separator', array(
		'default' => '#ccc',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_sidebar_ecommerce_separator', array(
		'label' => __( 'Separator', 'obox' ),
		'section' => 'obox_sidebar_ecommerce',
		'settings' => 'obox_sidebar_ecommerce_separator',
		'priority' => 50,
	)));
	
	
	/* Footer - Container:
		- Background 
		- Border 
		- Text  
		- Link
		- Link Hover 
	*/
	
	$wp_customize->add_section('obox_footer_container', array(
		'title' => __( 'Footer - Container', 'obox' ),
		'priority' => 32,
		)
	);
    
    // Footer - Container - Background
    $wp_customize->add_setting( 'obox_footer_container_background', array(
		'default' => '#3B4950',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_footer_container_background', array(
		'label' => __( 'Background', 'obox' ),
		'section' => 'obox_footer_container',
		'settings' => 'obox_footer_container_background',
		'priority' => 1,
	)));
	
	// Footer - Container - Border
    $wp_customize->add_setting( 'obox_footer_container_border', array(
		'default' => '#252E33',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_footer_container_border', array(
		'label' => __( 'Border', 'obox' ),
		'section' => 'obox_footer_container',
		'settings' => 'obox_footer_container_border',
		'priority' => 10,
	)));
	
	
	/* Footer - Widgets:
		- Widget Title  
		- Text  
		- Link
		- Link Hover 
		- Separator
	*/
	
	$wp_customize->add_section('obox_footer_widgets', array(
		'title' => __( 'Footer - Widgets', 'obox' ),
		'priority' => 33,
		)
	);
    
    // Footer - Widgets - Widget Title 
    $wp_customize->add_setting( 'obox_footer_widgets_widgettitle', array(
		'default' => '#fff',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_footer_widgets_widgettitle', array(
		'label' => __( 'Widget Title', 'obox' ),
		'section' => 'obox_footer_widgets',
		'settings' => 'obox_footer_widgets_widgettitle',
		'priority' => 1,
	)));
	
	// Footer - Widgets - Text
    $wp_customize->add_setting( 'obox_footer_widgets_text', array(
		'default' => '#ddd',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_footer_widgets_text', array(
		'label' => __( 'Text', 'obox' ),
		'section' => 'obox_footer_widgets',
		'settings' => 'obox_footer_widgets_text',
		'priority' => 10,
	)));
	
	// Footer - Widgets - Link
    $wp_customize->add_setting( 'obox_footer_widgets_link', array(
		'default' => '#ccc',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_footer_widgets_link', array(
		'label' => __( 'Link', 'obox' ),
		'section' => 'obox_footer_widgets',
		'settings' => 'obox_footer_widgets_link',
		'priority' => 20,
	)));
	
	// Footer - Widgets - Link Hover
    $wp_customize->add_setting( 'obox_footer_widgets_link_hover', array(
		'default' => '#fff',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_footer_widgets_link_hover', array(
		'label' => __( 'Link Hover', 'obox' ),
		'section' => 'obox_footer_widgets',
		'settings' => 'obox_footer_widgets_link_hover',
		'priority' => 30,
	)));
	
	// Footer - Widgets - Separator
    $wp_customize->add_setting( 'obox_footer_widgets_separator', array(
		'default' => '#43535C',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_footer_widgets_separator', array(
		'label' => __( 'Separator', 'obox' ),
		'section' => 'obox_footer_widgets',
		'settings' => 'obox_footer_widgets_separator',
		'priority' => 40,
	)));
	
	
	/* Footer - Base:
		- Background
		- Text  
		- Link
		- Link Hover 
	*/
	
	$wp_customize->add_section('obox_footer_base', array(
		'title' => __( 'Footer - Base', 'obox' ),
		'priority' => 34,
		)
	);
    
    // Footer - Base - Background 
    $wp_customize->add_setting( 'obox_footer_base_background', array(
		'default' => '#252E33',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_footer_base_background', array(
		'label' => __( 'Background', 'obox' ),
		'section' => 'obox_footer_base',
		'settings' => 'obox_footer_base_background',
		'priority' => 1,
	)));
    
    // Footer - Base - Text  
    $wp_customize->add_setting( 'obox_footer_base_text', array(
		'default' => '#999',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_footer_base_text', array(
		'label' => __( 'Text', 'obox' ),
		'section' => 'obox_footer_base',
		'settings' => 'obox_footer_base_text',
		'priority' => 10,
	)));
	
	// Footer - Base - Link  
    $wp_customize->add_setting( 'obox_footer_base_link', array(
		'default' => '#ccc',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_footer_base_link', array(
		'label' => __( 'Link', 'obox' ),
		'section' => 'obox_footer_base',
		'settings' => 'obox_footer_base_link',
		'priority' => 20,
	)));
	
	// Footer - Base - Link Hover
    $wp_customize->add_setting( 'obox_footer_base_link_hover', array(
		'default' => '#fff',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'obox_footer_base_link_hover', array(
		'label' => __( 'Link Hover', 'obox' ),
		'section' => 'obox_footer_base',
		'settings' => 'obox_footer_base_link_hover',
		'priority' => 30,
	)));
	
	wp_reset_query();

//ADD JQUERY

if ( $wp_customize->is_preview() && ! is_admin() )
	add_action( 'wp_footer', 'obox_customize_preview', 21);
	
	function obox_customize_preview() {
	?>
	<script type="text/javascript">
	
	( function( $ ){
	
		// Header - Menu
		
		wp.customize('obox_header_background',function( value ) {
			value.bind(function(to) {
				jQuery('#header-container').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_navigation_font_color',function( value ) {
			value.bind(function(to) {
				jQuery('ul#nav li a').css({'color': to});
			});
		});
		
		wp.customize('obox_subnav_background',function( value ) {
			value.bind(function(to) {
				jQuery('ul#nav ul.sub-menu, ul#nav .children').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_subnav_link',function( value ) {
			value.bind(function(to) {
				jQuery('ul#nav ul.sub-menu li a, ul#nav .children li a').css({'color': to});
			});
		});
		
		
		// Header - Page Title
		
		wp.customize('obox_header_pagetitle_background',function( value ) {
			value.bind(function(to) {
				jQuery('#title-container').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_header_pagetitle_text',function( value ) {
			value.bind(function(to) {
				jQuery('.title-block h2').css({'color': to});
			});
		});
		
		wp.customize('obox_header_pagetitle_blurb',function( value ) {
			value.bind(function(to) {
				jQuery('.title-block p').css({'color': to});
			});
		});
		
		
		// Header - Breadcrumbs
		
		wp.customize('obox_header_breadcrumbs_background',function( value ) {
			value.bind(function(to) {
				jQuery('#crumbs-container').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_header_breadcrumbs_border',function( value ) {
			value.bind(function(to) {
				jQuery('#crumbs-container').css({'borderColor': to});
			});
		});
		
		wp.customize('obox_header_breadcrumbs_text',function( value ) {
			value.bind(function(to) {
				jQuery('#crumbs li, #crumbs .current, #crumbs .current a').css({'color': to});
			});
		});
		
		wp.customize('obox_header_breadcrumbs_link',function( value ) {
			value.bind(function(to) {
				jQuery('#crumbs a').css({'color': to});
			});
		});
		
		
		// Content - Contained
		
		wp.customize('obox_content_contained_background',function( value ) {
			value.bind(function(to) {
				jQuery('.post-content, .products-single .type-product, .products .product, .portfolio-list .column, .content-widget .column, .portfolio-content, #comments').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_content_contained_posttitle',function( value ) {
			value.bind(function(to) {
				jQuery('.contained .post-title a, .products .product h3, .product_title, .entry-content h2, .service-title a, .service-title, #comments h2, .content-widget .post-title a, .page-title, .page-title a, .copy h2, .copy h2 a, .copy h3 .copy h3 a, .copy h4, .copy h4 a').css({'color': to});
			});
		});
		
		wp.customize('obox_content_contained_text',function( value ) {
			value.bind(function(to) {
				jQuery('.contained .copy p, .entry-content p, #comments').css({'color': to});
			});
		});
		
		wp.customize('obox_content_contained_link',function( value ) {
			value.bind(function(to) {
				jQuery('.contained .copy a, #comments a, .post-date a').css({'color': to});
			});
		});
		
		wp.customize('obox_content_contained_meta',function( value ) {
			value.bind(function(to) {
				jQuery('.contained .post-date, .content-widget .post-date').css({'color': to});
			});
		});
		
		wp.customize('obox_content_contained_border',function( value ) {
			value.bind(function(to) {
				jQuery('.post-meta, .comment, .comment .children').css({'borderColor': to});
			});
		});
		
		
		// Content - Non Contained
		
		wp.customize('obox_content_not_contained_posttitle',function( value ) {
			value.bind(function(to) {
				jQuery('.non-contained .post-title a, #home_page_three_column .widgettitle, #home_page_three_column .widgettitle a').css({'color': to});
			});
		});
		
		wp.customize('obox_content_not_contained_text',function( value ) {
			value.bind(function(to) {
				jQuery('.non-contained .copy p').css({'color': to});
			});
		});
		
		wp.customize('obox_content_not_contained_link',function( value ) {
			value.bind(function(to) {
				jQuery('.contained .copy a').css({'color': to});
			});
		});
		
		
		// Content - eCommerce
		
		wp.customize('obox_content_ecommerce_borders',function( value ) {
			value.bind(function(to) {
				jQuery('table td, table th, .cart_totals th, .cart_totals td, .cart_totals table, .shipping-calculator-form, .shipping-calculator-form p').css({'borderColor': to});
			});
		});
		
		wp.customize('obox_content_ecommerce_price',function( value ) {
			value.bind(function(to) {
				jQuery('.price').css({'color': to});
			});
		});
		
		wp.customize('obox_content_ecommerce_sale',function( value ) {
			value.bind(function(to) {
				jQuery('.onsale').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_content_ecommerce_tab_background',function( value ) {
			value.bind(function(to) {
				jQuery('.tabs li a').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_content_ecommerce_tab_active',function( value ) {
			value.bind(function(to) {
				jQuery('.tabs li.active a').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_content_ecommerce_tab_border',function( value ) {
			value.bind(function(to) {
				jQuery('.tabs li a, .tabs, .upsells .products, .related, .related .products, .upsells .product, .related .product, .products .product img, .product_list_widget img').css({'borderColor': to});
			});
		});
		
		wp.customize('obox_content_ecommerce_tab_text',function( value ) {
			value.bind(function(to) {
				jQuery('.tabs li a, .tabs li.active a').css({'color': to});
			});
		});
		
		
		// Buttons - Content
		
		wp.customize('obox_buttons_content_search',function( value ) {
			value.bind(function(to) {
				jQuery('#searchform input[type=submit]').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_buttons_content_comment',function( value ) {
			value.bind(function(to) {
				jQuery('#respond #submit').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_buttons_content_cta',function( value ) {
			value.bind(function(to) {
				jQuery('.content-widget .read-more, .post-content .read-more ').css({'color': to});
			});
		});
		
		wp.customize('obox_buttons_content_pagination',function( value ) {
			value.bind(function(to) {
				jQuery('.pagination .next a, .pagination .previous a').css({'backgroundColor': to});
			});
		});
		
		
		// Buttons - eCommerce
		
		wp.customize('obox_buttons_ecommerce_addcart',function( value ) {
			value.bind(function(to) {
				jQuery('.add_to_cart_button, .added_to_cart, .single_add_to_cart_button, .button.product_type_variable').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_buttons_ecommerce_viewcart',function( value ) {
			value.bind(function(to) {
				jQuery('.widget_shopping_cart .button, .woocommerce-message .button').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_buttons_ecommerce_checkout',function( value ) {
			value.bind(function(to) {
				jQuery('.widget_shopping_cart .button.checkout, .shop_table .checkout-button').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_buttons_ecommerce_pricefilter',function( value ) {
			value.bind(function(to) {
				jQuery('.price_slider_wrapper .button').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_buttons_ecommerce_addreview',function( value ) {
			value.bind(function(to) {
				jQuery('#respond #submit').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_buttons_ecommerce_quantity',function( value ) {
			value.bind(function(to) {
				jQuery('.quantity .plus, .quantity .minus').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_buttons_ecommerce_return_shop',function( value ) {
			value.bind(function(to) {
				jQuery('.woocommerce .button').css({'backgroundColor': to});
			});
		});
		
		// Sidebar - Blog
		
		wp.customize('obox_sidebar_blog_background',function( value ) {
			value.bind(function(to) {
				jQuery('.blog-sidebar, .related-services-container').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_sidebar_blog_widgettitle',function( value ) {
			value.bind(function(to) {
				jQuery('.blog-sidebar .widgettitle, .related-services-container .widgettitle').css({'color': to});
			});
		});
		
		wp.customize('obox_sidebar_blog_text',function( value ) {
			value.bind(function(to) {
				jQuery('.blog-sidebar, .blog-sidebar p, .related-services-container, .related-services-container p').css({'color': to});
			});
		});
		
		wp.customize('obox_sidebar_blog_link',function( value ) {
			value.bind(function(to) {
				jQuery('.blog-sidebar a, .related-services-container a').css({'color': to});
			});
		});
		
		
		// Sidebar - eCommerce
		
		wp.customize('obox_sidebar_ecommerce_background',function( value ) {
			value.bind(function(to) {
				jQuery('.shop-sidebar').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_sidebar_ecommerce_widgettitle',function( value ) {
			value.bind(function(to) {
				jQuery('.shop-sidebar .widgettitle').css({'color': to});
			});
		});
		
		wp.customize('obox_sidebar_ecommerce_text',function( value ) {
			value.bind(function(to) {
				jQuery('.shop-sidebar, .shop-sidebar p, .widget_shopping_cart .total').css({'color': to});
			});
		});
		
		wp.customize('obox_sidebar_ecommerce_link',function( value ) {
			value.bind(function(to) {
				jQuery('.shop-sidebar a').css({'color': to});
			});
		});
		
		wp.customize('obox_sidebar_ecommerce_separator',function( value ) {
			value.bind(function(to) {
				jQuery('.product_list_widget li').css({'borderColor': to});
			});
		});
		
		
		// Footer - Container
		
		wp.customize('obox_footer_container_background',function( value ) {
			value.bind(function(to) {
				jQuery('#footer-container').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_footer_container_border',function( value ) {
			value.bind(function(to) {
				jQuery('#footer-container, .footer-widgets').css({'borderColor': to});
			});
		});
		
		
		// Footer - Widgets
		
		wp.customize('obox_footer_widgets_widgettitle',function( value ) {
			value.bind(function(to) {
				jQuery('.footer-widgets .widgettitle').css({'color': to});
			});
		});
		
		wp.customize('obox_footer_widgets_text',function( value ) {
			value.bind(function(to) {
				jQuery('.footer-widgets, .footer-widgets .dater').css({'color': to});
			});
		});
		
		wp.customize('obox_footer_widgets_link',function( value ) {
			value.bind(function(to) {
				jQuery('.footer-widgets a').css({'color': to});
			});
		});
		
		wp.customize('obox_footer_widgets_separator',function( value ) {
			value.bind(function(to) {
				jQuery('.footer-widgets .widget li').css({'borderColor': to});
			});
		});
		
		
		// Footer - Base
		
		wp.customize('obox_footer_base_background',function( value ) {
			value.bind(function(to) {
				jQuery('#footer-base-container').css({'backgroundColor': to});
			});
		});
		
		wp.customize('obox_footer_base_text',function( value ) {
			value.bind(function(to) {
				jQuery('.footer-text').css({'color': to});
			});
		});
		
		wp.customize('obox_footer_base_link',function( value ) {
			value.bind(function(to) {
				jQuery('.footer-text a').css({'color': to});
			});
		});

	
	} )( jQuery );
	</script>
	
<?php } ?>

	<style>	
		li.control-section[id*=-obox_] .customize-section-title {
			color: #fff;
			text-shadow: 0 1px 0 #000;
			background-image: url(<?php echo get_template_directory_uri(); ?>/ocmx/images/obox-logo-customizer.png), -webkit-gradient(linear, left top, left bottom, from(#5b7490), to(#354a62)); 
			background-image: url(<?php echo get_template_directory_uri(); ?>/ocmx/images/obox-logo-customizer.png), -moz-linear-gradient(top, #5b7490, #354a62);
			background-image: url(<?php echo get_template_directory_uri(); ?>/ocmx/images/obox-logo-customizer.png), -ms-linear-gradient(top, #5b7490, #354a62);
			background-repeat: no-repeat;
			padding-left: 50px;
		}
		
		li.control-section[id*=-obox_] {
			border-top: 1px solid #899bb0; border-bottom: none;
		}
		
		li.control-section[id*=-obox_] .customize-section-title:hover,
		li.control-section[id*=-obox_] .customize-section-title:focus {
			background: #1b2a43 url(<?php echo get_template_directory_uri(); ?>/ocmx/images/obox-logo-customizer.png) no-repeat !important;
		}
	</style> 

<?php 

// CHANGE ORDER
$wp_customize->get_section('title_tagline')->priority = 40;

// REMOVE SECTION
$wp_customize->remove_section( 'static_front_page');


// ADD POST MESSAGE (dunno if this is really needed?)
$wp_customize->get_setting('obox_header_background')->transport='postMessage';

}
add_action( 'customize_register', 'obox_customize_register' );


// CUSTOM CSS
function ocmx_add_query_vars($query_vars) {
	$query_vars[] = 'stylesheet';
	return $query_vars;
}
add_filter( 'query_vars', 'ocmx_add_query_vars' );
function ocmx_takeover_css() {
	    $style = get_query_var('stylesheet');
	    if($style == "custom") {
		    get_template_part("/style");
	        exit;
	    }
	}
add_action( 'template_redirect', 'ocmx_takeover_css');