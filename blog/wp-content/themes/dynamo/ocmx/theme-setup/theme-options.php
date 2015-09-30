<?php function ocmx_theme_options(){
	global $obox_meta, $theme_options;
	if(!isset($theme_options))
		$theme_options = array();
	$theme_options["general_site_options"] =
			array(
				array("label" => "Custom Logo", "description" => "Full URL or folder path to your custom logo.", "name" => "ocmx_custom_logo", "default" => "", "id" => "upload_button", "input_type" => "file", "args" => array("width" => 90, "height" => 75)),
				array("label" => "Favicon", "description" => "Select a favicon for your site", "name" => "ocmx_custom_favicon", "default" => "", "id" => "upload_button_favicon", "input_type" => "file", "sub_title" => "favicon", "args" => array("width" => 16, "height" => 16)),	
				array("label" => "Custom Login Logo", "description" => "Select a custom login logo, recommended dimensions (326px x 82px)", "name" => "ocmx_custom_login", "default" => "", "id" => "upload_button_login", "input_type" => "file", "sub_title" => "login logo", "args" => array("width" => 326, "height" => 82)),   
				array("label" => "Breadcrumbs", "description" => "Select whether or not to display breadcrumbs throughout the site.","name" => "ocmx_breadcrumbs", "default" => "yes", "id" => "ocmx_content_length", "input_type" => 'select', 'options' => array('Enabled' => 'yes', 'Disabled' => 'no')),
		        
		        array(
						"main_section" => "Post Meta &amp; Content Display",
						"main_description" => "These settings control which post meta is displayed in posts and lists.",
						"sub_elements" => 
							array(							
		                		array("label" => "Show Date", "name" => "ocmx_meta_date_post", "", "default" => "true", "id" => "ocmx_meta_date_post", "input_type" => "checkbox"),
								array("label" => "Show Author", "name" => "ocmx_meta_author_post", "", "default" => "true", "id" => "ocmx_meta_author_post", "input_type" => "checkbox"),
								array("label" => "Show Tags", "name" => "ocmx_meta_tags", "default" => "true", "id" => "ocmx_meta_tags", "input_type" => "checkbox"),
								array("label" => "Show Social Sharing", "name" => "ocmx_meta_social_post", "default" => "true", "id" => "ocmx_meta_social_post", "input_type" => "checkbox"),
								array("label" => "Content Length on List Pages", "description" => "Selecting excerpts will show the Read More link.","name" => "ocmx_content_length", "default" => "yes", "id" => "ocmx_content_length", "input_type" => 'select', 'options' => array('Show Excerpts' => 'yes', 'Show Full Post Content' => 'no')),
							)
						),
				array(
						"main_section" => "Page Meta",
						"main_description" => "These settings control which post meta is displayed in pages.",
						"sub_elements" => 
							array(
								array("label" => "Show Date", "name" => "ocmx_meta_date_page", "", "default" => "true", "id" => "ocmx_meta_date_page", "input_type" => "checkbox"),
								array("label" => "Show Author", "name" => "ocmx_meta_author_page", "", "default" => "true", "id" => "ocmx_meta_author_page", "input_type" => "checkbox"),
								array("label" => "Show Social Sharing", "name" => "ocmx_meta_social_page", "default" => "true", "id" => "ocmx_meta_social", "input_type" => "checkbox"),
							)
						),
								array(
					"main_section" => "Custom Styling",
					"main_description" => "Set your own custom social buttons and CSS for any element you wish to restyle.",
					"sub_elements" => 
						array(
				  
							array("label" => "Custom CSS", "description" => "Enter changed classes from the theme stylesheet, or custom CSS here.", "name" => "ocmx_custom_css", "default" => "", "id" => "ocmx_custom_css", "input_type" => "memo"),
							array("label" => "Social Widget Code", "description" => "Paste the template tag or code for your social sharing plugin here.", "name" => "ocmx_social_tag", "default" => "", "id" => "", "input_type" => "memo"),
				             )
				    ),
				array("label" => "Custom RSS URL", "description" => "Paste the URL to your custom RSS feed, such as Feedburner.", "name" => "ocmx_rss_url", "default" => "", "id" => "", "input_type" => "text"),	   
				array(
					"main_section" => "Press Trends Analytics",
					"main_description" => "Select Yes Opt out. No personal data is collected.",
					"sub_elements" => 
					array(
						array("label" => "Disable Press Trends?", "description" => "PressTrends helps Obox build better themes and provide awesome support by retrieving aggregated stats. PressTrends also provides a <a href='http://wordpress.org/extend/plugins/presstrends/' title='PressTrends Plugin for WordPress' target='_blank'>plugin for you</a> that delivers stats on how your site is performing against similar sites like yours. <a href='http://www.presstrends.me' title='PressTrends' target='_blank'>Learn more&hellip;</a>","name" => "ocmx_disable_press_trends", "default" => "no", "id" => "ocmx_disable_press_trends", "input_type" => 'select', 'options' => array('Yes' => 'yes', 'No' => 'no'))
		                 )
				     )
			);
	
	$theme_options["header_options"] = array(
				array("label" => "Page Title Copy", "description" => "Select whether or not to display page title copy throughout the site.","name" => "ocmx_pagetitle_copy", "default" => "yes", "id" => "ocmx_pagetitle_copy", "input_type" => 'select', 'options' => array('Enabled' => 'yes', 'Disabled' => 'no')),
				array(
						"main_section" => "Header Contact",
						"main_description" => "These settings control the header contact block at the top of the website.",
						"sub_elements" => 
							array(							
		                		array("label" => "Show Header Contact", "name" => "ocmx_header_contact_show", "", "default" => "true", "id" => "ocmx_header_contact_show", "input_type" => "checkbox"),
								array("label" => "Phone Number", "name" => "ocmx_header_contact_phone", "", "default" => "", "id" => "ocmx_header_contact_phone", "input_type" => "input"),
								array("label" => "Facebook Link", "name" => "ocmx_header_contact_facebook", "", "default" => "", "id" => "ocmx_header_contact_facebook", "input_type" => "input"),
								array("label" => "Twitter Link", "name" => "ocmx_header_contact_twitter", "", "default" => "", "id" => "ocmx_header_contact_twitter", "input_type" => "input"),
								array("label" => "LinkedIn Link", "name" => "ocmx_header_contact_linkedin", "", "default" => "", "id" => "ocmx_header_contact_linkedin", "input_type" => "input"),
								array("label" => "Pinterest Link", "name" => "ocmx_header_contact_pinterest", "", "default" => "", "id" => "ocmx_header_contact_pinterest", "input_type" => "input"),
							)
						)
	);
					
	$theme_options["footer_options"] = array(
				array(
						"main_section" => "Site Wide Call to Action",
						"main_description" => "These settings control the site wide call to action at the bottom of the website.",
						"sub_elements" => 
							array(							
		                		array("label" => "Show Site Wide Call to Action", "name" => "ocmx_footer_cta_show", "", "default" => "true", "id" => "ocmx_footer_cta_show", "input_type" => "checkbox"),
								array("label" => "Text", "name" => "ocmx_footer_cta_text", "", "default" => "", "id" => "ocmx_footer_cta_text", "input_type" => "input"),
								array("label" => "Button Text", "name" => "ocmx_footer_cta_button_text", "", "default" => "", "id" => "ocmx_footer_cta_button_text", "input_type" => "input"),
								array("label" => "Button Link", "name" => "ocmx_footer_cta_button_link", "", "default" => "", "id" => "ocmx_footer_cta_button_link", "input_type" => "input"),
							)
						),
	
				array("label" => "Custom Footer Text", "description" => "", "name" => "ocmx_custom_footer", "default" => "Copyright ".date("Y")." Dynamo was created in WordPress by Obox Themes."	, "id" => "ocmx_custom_footer", "input_type" => "memo"),
				
				array("label" => "Hide Obox Logo", "description" => "Hide the Obox Logo from the footer.", "name" => "ocmx_logo_hide", "default" => "false", "id" => "ocmx_logo_hide", "input_type" => 'select', 'options' => array('Yes' => 'true', 'No' => 'false')),
				array("label" => "Site Analytics", "description" => "Enter in the Google Analytics Script here.","name" => "ocmx_googleAnalytics", "default" => "", "id" => "","input_type" => "memo")
	);
	
	$theme_options["layout_options"] = array(
		array(
			  	"label" => "Site Layout",
				"description" => "Would you like your site to be contained or span the full width of your web page?",
				"name" => "ocmx_site_layout", "default" => "fullwidth",
				"id" => "ocmx_site_layout",
				"input_type" => "hidden",
				"default" => "fullwidth",
				"options" => 
					array(
							"fullwidth" => array("label" => "Wide", "description" => ""),
						  	"boxed" => array("label" => "Boxed", "description" => "")
						)
				),
		array(
			  	"label" => "Home Page Layout",
				"description" => "Set your home page to either display as a blog, mimic our theme demo or take full control by using widgets.",
				"name" => "ocmx_home_page_layout", "default" => "blog",
				"id" => "ocmx_home_page_layout",
				"input_type" => "hidden",
				"default" => "blog",
				"options" => 
					array(
						  	"blog" => array("label" => "Blog", "description" => "Set your home page to display like a normal blog.", "load_options" => "widget_home_options"),
							"preset" => array("label" => "Preset", "description" => "Mimic the exact layout of our theme demo.", "load_options" => "preset_home_options"),
							"widget" => array("label" => "Widget Driven", "description" => "Take control by setting up your home page with widgets.")
						)
				),
		array(
			  	"label" => "Sidebar Layout",
				"description" => "Choose which side you would like your site sidebar to display on posts and pages. Alternatively hide it completely on all pages.",
				"name" => "ocmx_sidebar_layout", "default" => "sidebarright",
				"id" => "ocmx_sidebar_layout",
				"input_type" => "hidden",
				"default" => "sidebarright",
				"options" => 
					array(
							"sidebarright" => array("label" => "Sidebar Right", "description" => ""),
							"sidebarleft" => array("label" => "Sidebar Left", "description" => ""),
						  	"sidebarnone" => array("label" => "No Sidebar", "description" => "") 
						)
				)
	);
	
$portfolio_cats = get_terms("portfolio-category", "orderby=count&hide_empty=0");
$portfolio_cat_list["Exclude This Widget"] = 1;
$portfolio_cat_list["All"] = 0;
foreach($portfolio_cats as $category) :
	if(isset($category->name))
		$portfolio_cat_list[$category->name] = $category->slug;
endforeach;

$services_cats = get_terms("services-category", "orderby=count&hide_empty=0");
$services_cat_list["Exclude This Widget"] = 1;
$services_cat_list["All"] = 0;
foreach($services_cats as $category) :
	if(isset($category->name))
		$services_cat_list[$category->name] = $category->slug;
endforeach;

$partners_cats = get_terms("partners-category", "orderby=count&hide_empty=0");
$partners_cat_list["Exclude This Widget"] = 1;
$partners_cat_list["All"] = 0;
foreach($partners_cats as $category) :
	if(isset($category->name))
		$partners_cat_list[$category->name] = $category->slug;
endforeach;

$testimonials_cats = get_terms("testimonials-category", "orderby=count&hide_empty=0");
$testimonials_cat_list["Exclude This Widget"] = 1;
$testimonials_cat_list["All"] = 0;
foreach($testimonials_cats as $category) :
	if(isset($category->name))
		$testimonials_cat_list[$category->name] = $category->slug;
endforeach;

$theme_options["preset_home_options"] =
	array(
		array(
				"main_section" => "Feature Slider",
				"main_description" => "Select which posts will be used for the Homepage Post Slider.",
				"sub_elements" => 
					array(
						array("label" => "Exclude Widget", "description" => "", "name" => "ocmx_feature_post_exclude", "default" => "0", "id" => "ocmx_feature_post_exclude", "input_type" => "select", "options" => array("No" => "0", "Yes" => "1")),
						array("label" => "Post Count", "description" => "", "name" => "ocmx_feature_post_count", "default" => "0", "id" => "ocmx_feature_post_count", "input_type" => "select", "options" => array("1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "10" => "10")),
						array("label" => "Auto Slide Interval (seconds)", "description" => "(Set to 0 for no auto-sliding)", "name" => "ocmx_feature_post_interval", "id" => "", "input_type" => "input"),
				)			
			),
		array(
				"main_section" => "Services Three Column",
				"main_description" => "Select options for your services.",
				"sub_elements" => 
					array(
						array("label" => "Title", "description" => "", "name" => "ocmx_services_three_col_title", "id" => "", "input_type" => "input"),
						array("label" => "Category", "description" => "", "name" => "ocmx_services_three_col_cat", "default" => "0", "zero_wording" => "Exclude this Widget", "id" => "ocmx_feature_post_cat", "input_type" => "select", "options" => $services_cat_list),
						
						array("label" => "Post Count", "description" => "", "name" => "ocmx_services_three_col_post_count", "default" => "0", "id" => "", "input_type" => "select", "options" => array("3" => "3", "6" => "6", "9" => "9", "12" => "12")),
							
						array("label" => "Show Images/Video?", "description" => "", "name" => "ocmx_services_three_col_images", "default" => "0", "id" => "", "input_type" => "select", "options" => array("Images" => "1", "Videos" => "0", "None" => "none")),
						
						array("label" => "Show Excerpt", "description" => "", "name" => "ocmx_services_three_col_excerpt", "default" => "0", "zero_wording" => "Yes", "id" => "", "input_type" => "select", "options" => array("Yes" => "on", "No" => "off"))

					)
			),
		array(
				"main_section" => "Portfolio Three Column",
				"main_description" => "Select a category for the Two Column posts on the home page..",
				"sub_elements" => 
					array(
						array("label" => "Title", "description" => "", "name" => "ocmx_portfolio_three_col_title", "id" => "", "input_type" => "input"),
						array("label" => "Category", "description" => "", "name" => "ocmx_portfolio_three_col_cat", "default" => "0", "zero_wording" => "Exclude this Widget", "id" => "ocmx_feature_post_cat", "input_type" => "select", "options" => $portfolio_cat_list),
						
						array("label" => "Post Count", "description" => "", "name" => "ocmx_portfolio_three_col_post_count", "default" => "0", "id" => "", "input_type" => "select", "options" => array("2" => "2", "4" => "4", "8" => "8", "12" => "12")),
							
						array("label" => "Show Images/Video?", "description" => "", "name" => "ocmx_portfolio_three_col_images", "default" => "0", "zero_wording" => "Yes", "id" => "", "input_type" => "select", "options" => array("Yes" => "on", "No" => "off")),
						
						array("label" => "Show Excerpt", "description" => "", "name" => "ocmx_portfolio_three_col_excerpt", "default" => "0", "zero_wording" => "Yes", "id" => "", "input_type" => "select", "options" => array("Yes" => "on", "No" => "off"))
					)
			),
		array(
				"main_section" => "Partners Four Column",
				"main_description" => "Select a category for the Two Column posts on the home page..",
				"sub_elements" => 
					array(
						array("label" => "Title", "description" => "", "name" => "ocmx_partners_four_col_title", "id" => "", "input_type" => "input"),
						array("label" => "Category", "description" => "", "name" => "ocmx_partners_four_col_cat", "default" => "0", "zero_wording" => "Exclude this Widget", "id" => "ocmx_feature_post_cat", "input_type" => "select", "options" => $partners_cat_list),
						array("label" => "Post Count", "description" => "", "name" => "ocmx_partners_four_col_post_count", "default" => "0", "id" => "", "input_type" => "select", "options" => array("2" => "2", "4" => "4", "8" => "8", "12" => "12"))
					)
			),
		array(
				"main_section" => "Testimonials",
				"main_description" => "Select a category for the Two Column posts on the home page..",
				"sub_elements" => 
					array(
						array("label" => "Title", "description" => "", "name" => "ocmx_testimonials_title", "id" => "", "input_type" => "input"),
						array("label" => "Category", "description" => "", "name" => "ocmx_testimonials_cat", "default" => "0", "zero_wording" => "Exclude this Widget", "id" => "ocmx_testimonials_cat", "input_type" => "select", "options" => $testimonials_cat_list),
						array("label" => "Post Count", "description" => "", "name" => "ocmx_testimonials_post_count", "default" => "0", "id" => "", "input_type" => "select", "options" => array("2" => "2", "4" => "4", "8" => "8", "12" => "12")),
						array("label" => "Auto Slide Interval (seconds)", "description" => "(Set to 0 for no auto-sliding)", "name" => "ocmx_testimonials_interval", "id" => "", "input_type" => "input"),
					)
			)
	);
	$theme_options["small_ad_options"] = array(
		array(
				"label" => "Number of Small Ads", 
				"description" => "When using the select box, you must click \"Save Changes\" before the blocks are added or removed.", 
				"name" => "ocmx_small_ads", 
				"id" =>  "ocmx_small_ads",
				"prefix" => "ocmx_small_ad",
				"default" => "0", 
				"input_type" => "select", 
				"options" => array("None" => "0", "1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "10" => "10"), 
				"args" => array("width" => 125, "height" => "125")
			)
	  );

	$theme_options["medium_ad_options"] = array( 
		array(
				"label" => "Number of Medium Ads", 
				"description" => "", 
				"name" => "ocmx_medium_ads", 
				"id" =>  "ocmx_medium_ads",
				"prefix" => "ocmx_medium_ad", 
				"default" => "0", 
				"input_type" => "select", 
				"options" => array("None" => "0", "1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "10" => "10"), 
				"args" => array("width" => 300, "height" => "250")
			)
		);
	
}
add_action("init", "ocmx_theme_options"); 
	
/***************************************************************************/
/* Setup Defaults for this theme for optiosn which aren't set in this page */
if(is_admin() && !get_option(isset($themeid)."-defaults")) :
	update_option("ocmx_general_font_style_default", "'proxima-nova', 'Proxima Nova', 'Helvetica Neue'");
	update_option("ocmx_navigation_font_style_default", "'proxima-nova', 'Proxima Nova', 'Helvetica Neue'");
	update_option("ocmx_sub_navigation_font_style_default", "'proxima-nova', 'Proxima Nova', 'Helvetica Neue'");
	update_option("ocmx_post_font_titles_style_default", "'proxima-nova', 'Proxima Nova', 'Helvetica Neue'");
	update_option("ocmx_post_font_meta_style_default", "'proxima-nova', 'Proxima Nova', 'Helvetica Neue'");
	update_option("ocmx_post_font_copy_font_style_default", "'proxima-nova', 'Proxima Nova', 'Helvetica Neue'");
	update_option("ocmx_widget_font_titles_font_style_default", "'proxima-nova', 'Proxima Nova', 'Helvetica Neue'");
	update_option("ocmx_widget_footer_titles_font_size_default", "'proxima-nova', 'Proxima Nova', 'Helvetica Neue'");
	
	
	update_option("ocmx_general_font_color_default", "#333");
	update_option("ocmx_navigation_font_color_default", "#777");
	update_option("ocmx_sub_navigation_font_color_default", "#333");
	update_option("ocmx_post_titles_font_color_default", "#333");
	update_option("ocmx_post_meta_font_color_default", "#999");
	update_option("ocmx_post_copy_font_color_default", "#333");
	update_option("ocmx_widget_titles_font_color_default", "#999");
	update_option("ocmx_widget_footer_titles_font_color_default", "#999");
	
	update_option("ocmx_general_font_size_default", "17");
	update_option("ocmx_navigation_font_size_default", "12");
	update_option("ocmx_sub_navigation_font_size_default", "12");
	update_option("ocmx_post_titles_font_size_default", "10");
	update_option("ocmx_post_meta_font_size_default", "13");
	update_option("ocmx_post_copy_font_size_default", "17");
	update_option("ocmx_widget_titles_font_size_default", "15");
	update_option("ocmx_widget_footer_titles_font_size_default", "15");
	update_option($themeid."-defaults", 1);
endif;
update_option("allow_gallery_effect", "1");

add_action("switch_theme", "remove_ocmx_gallery_effects"); 
function remove_ocmx_gallery_effects(){delete_option("allow_gallery_effect");}; ?>