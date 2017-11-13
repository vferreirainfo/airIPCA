<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array.
   */
  $saved_settings = get_option( 'option_tree_settings', array() );

  /**
   * Custom settings array that will eventually be
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array(
    'contextual_help' => array(
      'sidebar'       => ''
    ),
    'sections'        => array(
      array(
        'id'          => 'general',
        'title'       => 'General',
		'class'		  => 'tmq_icon_general'
      ),
      array(
        'id'          => 'tmq_ajax',
        'title'       => 'Ajax Loader',
		'class'		  => 'tmq_icon_ajax'
      ),
      array(
        'id'          => 'tmq_header_sec',
        'title'       => 'Header Options',
		'class'		  => 'tmq_icon_header tmq_blog_bgcolor tmq_block_start block_parent'
      ),
      array(
        'id'          => 'tmq_top_bar_sec',
        'title'       => 'Header: Top Bar',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_header_sec'
      ),
      array(
        'id'          => 'tmq_menu_sec',
        'title'       => 'Header: Menu',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_header_sec'
      ),
      array(
        'id'          => 'tmq_undermenu_sec',
        'title'       => 'Header: Under Menu Area',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_header_sec'
      ),
      array(
        'id'          => 'tmq_banner_sec',
        'title'       => 'Header: Banner Area',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_header_sec'
      ),
      array(
        'id'          => 'tmq_toggle_sec',
        'title'       => 'Header: Toggle Bar',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_header_sec'
      ),
      array(
        'id'          => 'tmq_footer_sec',
        'title'       => 'Footer Settings',
		'class'		  => 'tmq_icon_footer'
      ),	  
      array(
        'id'          => 'tmq_pageoptions_sec',
        'title'       => 'Page Options',
		'class'		  => 'tmq_icon_page tmq_blog_bgcolor tmq_block_start block_parent'
      ),
      array(
        'id'          => 'tmq_404_sec',
        'title'       => '404 Error Page',
		'class'		  => 'tmq_icon_page tmq_blog_bgcolor tmq_block_start block_parent',
		'block'		  => 'tmq_pageoptions_sec'
      ),
      array(
        'id'          => 'tmq_blogoptions',
        'title'       => 'Blog Options',
		'class'		  => 'tmq_icon_blog tmq_blog_bgcolor block_parent'
      ),
      array(
        'id'          => 'tmq_blog_index',
        'title'       => 'Blog: Index Page',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_blogoptions'
      ),
      array(
        'id'          => 'tmq_gallery_post_format_options',
        'title'       => 'Blog: Gallery Format',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_blogoptions'
      ),
      array(
        'id'          => 'tmq_related_posts_options',
        'title'       => 'Blog: Related Posts',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_blogoptions'
      ),
      array(
        'id'          => 'tmq_blog_pagination_options',
        'title'       => 'Blog: Pagination',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_blogoptions'
      ),
      array(
        'id'          => 'tmq_blog_category_options',
        'title'       => 'Blog: Category',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_blogoptions'
      ),
      array(
        'id'          => 'tmq_portfolio_sec',
        'title'       => 'Portfolio Options',
		'class'		  => 'tmq_icon_portfolio tmq_blog_bgcolor block_parent'
      ),
      array(
        'id'          => 'tmq_portfolio_gallery_post_format_options',
        'title'       => 'Portfolio: Gallery Format',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_portfolio_sec'
	  ),
      array(
        'id'          => 'tmq_portfolio_related_posts_options',
        'title'       => 'Portfolio: Related Posts',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_portfolio_sec'
      ),
      array(
        'id'          => 'tmq_search_sec',
        'title'       => 'Search Page Settings',
		'class'		  => 'tmq_icon_search'
      ),
      array(
        'id'          => 'tmq_typography_sec',
        'title'       => 'Typography',
		'class'		  => 'tmq_icon_typography block_parent',
      ),
      array(
        'id'          => 'tmq_typography_blog',
        'title'       => 'Typography: Blog',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_typography_sec'
      ),
      array(
        'id'          => 'tmq_typography_banner',
        'title'       => 'Typography: Banner Area',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_typography_sec'
      ),
      array(
        'id'          => 'tmq_typography_menu',
        'title'       => 'Typography: Menu',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_typography_sec'
      ),
      array(
        'id'          => 'tmq_sidebars_sec',
        'title'       => 'Unlimited Sidebars',
		'class'		  => 'tmq_icon_sidebars'
      ),
      array(
        'id'          => 'tmq_3rd_party',
        'title'       => '3rd Party',
		'class'		  => 'tmq_icon_thirdparty'
      ),
      array(
        'id'          => 'tmq_woocommerce_sec',
        'title'       => 'WooCommerce',
		'class'		  => 'tmq_icon_woocommerce tmq_blog_bgcolor block_parent'
      ),
      array(
        'id'          => 'tmq_woocommerce_product',
        'title'       => 'WooCommerce: Product Page',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_woocommerce_sec'
	  ),
      array(
        'id'          => 'tmq_woocommerce_category',
        'title'       => 'WooCommerce: Category Page',
		'class'		  => 'tmq_blog_bgcolor',
		'block'		  => 'tmq_woocommerce_sec'
	  ),
      array(
        'id'          => 'tmq_rendered_code',
        'title'       => 'Custom CSS',
		'class'		  => 'tmq_icon_css'
      )
    ),
    'settings'        => array(
      array(
        'id'          => 'tmq_css',
        'label'       => '',
        'desc'        => '',
        'std'         => '{{tmq_color_settings}}',
        'type'        => 'css',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => 'hidden'
      ),	  
	  array(
        'id'          => 'tmq_responsive_layout',
        'label'       => 'Responsive Layout',
        'desc'        => 'If for any reason you want to disable responsive layout for your site, you are able to turn it off here.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	  
	  array(
        'id'          => 'tmq_full_width_layout',
        'label'       => 'Full Width Layout',
        'desc'        => 'You can turn on the full width layout here. (Turning on this feature will turn off toggle bar automatically - won\'t work perfect when responsive layout is set to off)',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	  
	  array(
        'id'          => 'tmq_wide_1600',
        'label'       => 'Support Responsive on 1600px+ Wide Screens',
        'desc'        => 'If you enable this, the width of page will increase in screens with at least 1600px width',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',		
		'condition'   => 'tmq_full_width_layout:is(off)',
		'operator'	  => 'and',	
        'taxonomy'    => '',
        'class'       => ''
      ),	  
	  array(
        'id'          => 'tmq_wide_1900',
        'label'       => 'Support Responsive on 1920px+ Wide Screens',
        'desc'        => 'If you enable this, the width of page will increase in screens with at least 1920px width',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',		
		'condition'   => 'tmq_full_width_layout:is(off)',
		'operator'	  => 'and',	
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_accent_color',
        'label'       => 'Accent Color of the Site',
        'desc'        => 'Choose the accent color of the theme - This is the most important color of your website',
        'std'         => '#007aff',
        'type'        => 'colorpicker',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_backgroundcolor',
        'label'       => 'Background Color',
        'desc'        => 'Choose the background color of your website.',
        'std'         => '#666666',
        'type'        => 'colorpicker',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	  
      array(
        'id'          => 'tmq_backgroundimage',
        'label'       => 'Background Image',
        'desc'        => 'Upload a large and beautiful background image for your site. This will override the background color.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	  
      array(
        'id'          => 'tmq_backgroundimage_dots',
        'label'       => 'Overlay Background with Dots',
        'desc'        => 'Overlay background image with dark dots.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_scrollbar',
        'label'       => 'Smooth Scrollbar',
        'desc'        => 'You can turn on Smooth scroll bar to emulate modern tablets smooth scroll effect on your website. This won\'t work on old IEs',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
      ),
      array(
        'id'          => 'tmq_favicon',
        'label'       => 'Favorite Icon',
        'desc'        => 'Upload favorite icon of the website. File dimension should be 16 x 16 pixels in .png or .ico formats.<BR><BR>Note: Old IEs will work only if you upload an <strong>.ico</strong> image',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_appletouchicon',
        'label'       => 'Apple Touch Icon',
        'desc'        => 'Upload your apple touch icon for the website. File dimension should be 129 x 129 pixels in .png format.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_ajax_loader_title',
        'label'       => 'Please Read This Before Activating Ajax:',
        'desc'        => 'Ajax is a cool feature that is well supported in Vertikal theme. But please note that we don\'t recommend to use Ajax feature on sites with much content and also we don\'t recommend to enable it if you are using any third party plugins or javascripts.<br><br>Because of the nature of Ajax, all of your javascript codes should be prepared for a Ajax loaded page and we can\'t guarantee other plugins and scripts. Please also note that Flickr shortcode is not compatible with this cool ajax feature right now.<br><BR>So, if you compltely understand these technical issues, you may decide better to enable Ajax navigation now.',
        'std'         => '',
        'type'        => 'textblock_titled',
        'section'     => 'tmq_ajax',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_ajax_loader',
        'label'       => 'Enable Ajax Page Navigation',
        'desc'        => 'You can enable or disable the Ajax page loading feature here.',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'tmq_ajax',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_ajax_scroll',
        'label'       => 'Auto Scroll to Top',
        'desc'        => 'By turning on this option, page will scroll to top once a page is loaded via Ajax.',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'tmq_ajax',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_ajax_footer',
        'label'       => 'Ajax on Footer Links',
        'desc'        => 'Do you want to enable Ajax page loading on footer links?',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'tmq_ajax',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_ajax_paginations',
        'label'       => 'Ajax on Pagination Links',
        'desc'        => 'Do you want to enable Ajax page loading on pagination links (blog or portfolio)?',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'tmq_ajax',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_ajax_blog_posts',
        'label'       => 'Ajax on Blog Links',
        'desc'        => 'Do you want to enable Ajax page loading on blog links?',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'tmq_ajax',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_ajax_portfolio',
        'label'       => 'Ajax on Portfolio Links',
        'desc'        => 'Do you want to enable Ajax page loading on portfolio links?',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'tmq_ajax',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_ajax_breadcrumb',
        'label'       => 'Ajax on Breadcrumb Links',
        'desc'        => 'Do you want to enable Ajax page loading on breadcrumb links?',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'tmq_ajax',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_logo_type',
        'label'       => 'Logo Type',
        'desc'        => 'Do you have a image to upload as your logo or you want to keep it simple with a text only logo?',
        'std'         => 'tmq_image',
        'type'        => 'select',
        'section'     => 'tmq_header_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_image',
            'label'       => 'Image',
            'src'         => ''
          ),
          array(
            'value'       => 'tmq_text',
            'label'       => 'Text',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'tmq_logo',
        'label'       => 'Website Logo',
        'desc'        => 'Upload Logo of your business. Please upload a png transparent file',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'tmq_header_sec',
        'rows'        => '',
        'post_type'   => '',
		'condition'   => 'tmq_logo_type:is(tmq_image)',
		'operator'	  => 'and',			
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_logo_text',
        'label'       => 'Website Name (Text Logo)',
        'desc'        => 'Enter the name of website. ( It\'s highly recommended to upload a image logo )',
        'std'         => 'Vertikal',
        'type'        => 'text',
        'section'     => 'tmq_header_sec',
        'rows'        => '',
        'post_type'   => '',
		'condition'   => 'tmq_logo_type:is(tmq_text)',
		'operator'	  => 'and',	
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_logo_padding',
        'label'       => 'Logo Top/Bottom Padding',
        'desc'        => 'Specify the space between logo and the top and the bottom of the logo location (usually 50px is fine but it depends on your logo size)',
        'std'         => '50',
        'type'        => 'numeric-slider',
        'section'     => 'tmq_header_sec',
        'taxonomy'    => '',
		'min_max_step'=> '30,100,1',
        'class'       => ''
      ),	  
	  array(
        'id'          => 'tmq_logo_background',
        'label'       => 'Logo Background Color',
        'desc'        => 'Choose the background color of logo area',
        'std'         => '#222222',
        'type'        => 'colorpicker',
        'section'     => 'tmq_header_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_search_topbar',
        'label'       => 'Show Search in Top Bar',
        'desc'        => 'Turn this on to have search button right on your top bar section',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'tmq_top_bar_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_topbar_background_color',
        'label'       => 'Top Bar Background Color',
        'desc'        => 'Choose the background color of the top bar',
        'std'         => '#ffffff',
        'type'        => 'colorpicker',
        'section'     => 'tmq_top_bar_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_topbar_color',
        'label'       => 'Top Bar Text Color',
        'desc'        => 'Choose the color of the texts in top bar ( Social elements and icons will use the main accent color not this one )',
        'std'         => '#253135',
        'type'        => 'colorpicker',
        'section'     => 'tmq_top_bar_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_email_contact',
        'label'       => 'Contact Email Address',
        'desc'        => 'Enter your company main email address here. It will appear in header. Enter none if you don\'t want to have this option on the header',
        'std'         => 'info@company.com',
        'type'        => 'text',
        'section'     => 'tmq_top_bar_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_email_contact_url',
        'label'       => 'Link of Email Address',
        'desc'        => 'Link email address to this URL. You should use mailto:emailaddress to link it to email address or a better idea is to link it to your contact page. Leave it empty to ignore this.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'tmq_top_bar_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_phone_contact',
        'label'       => 'Contact Phone Number',
        'desc'        => 'Enter your company main phone number here. It will appear in header. Enter none if you don\'t want to have this option on the header',
        'std'         => '+1-888-123-1234',
        'type'        => 'text',
        'section'     => 'tmq_top_bar_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_phone_contact_url',
        'label'       => 'Link of Phone Number',
        'desc'        => 'Link phone number to this URL. For example you can link it to your contact page. Leave it empty to ignore this.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'tmq_top_bar_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'label'       => 'Social Items',
        'id'          => 'tmq_social_items',
        'type'        => 'list-item',
        'desc'        => 'Add social items that you want. You can sort, edit or remove them anytime.',
        'settings'    => array(
          array(
            'label'       => 'Item Type',
            'id'          => 'tmq_social_items_type',
            'type'        => 'select',
            'desc'        => 'What is this social item? Is this facebook, twitter or ...?',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => '',
			'choices'     => array(
				array(
				'value'       => 'facebook',
				'label'       => 'Facebook',
				'src'         => ''
				),
				array(
				'value'       => 'twitter',
				'label'       => 'Twitter',
				'src'         => ''
				),
				array(
				'value'       => 'google',
				'label'       => 'Google+',
				'src'         => ''
				),
				array(
				'value'       => 'vimeo',
				'label'       => 'Vimeo',
				'src'         => ''
				),
				array(
				'value'       => 'dribbble',
				'label'       => 'Dribbble',
				'src'         => ''
				),
				array(
				'value'       => 'pinterest',
				'label'       => 'Pinterest',
				'src'         => ''
				),
				array(
				'value'       => 'youtube',
				'label'       => 'YouTube',
				'src'         => ''
				),
				array(
				'value'       => 'linkedin',
				'label'       => 'LinkedIn',
				'src'         => ''
				),
				array(
				'value'       => 'custom',
				'label'       => 'Custom',
				'src'         => ''
				),
			),
          ),
          array(
            'label'       => 'Item URL',
            'id'          => 'tmq_social_items_url',
            'type'        => 'text',
            'desc'        => 'Enter URL of your page in this social network. Don\'t forget to prefix it with http://',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'label'       => '(Icon Name) Custom Type Only',
            'id'          => 'tmq_social_custom_icon',
            'type'        => 'text',
            'desc'        => 'Enter the name of your custom Icon. You can choose it from Font Awesome names ( Such as link, contact, share, instagram, yelp and ... ). Please use icon element in Visual Composer to find the names.',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
			'condition'   => 'tmq_social_items_type:is(custom)',
			'operator'	  => 'and',			
            'taxonomy'    => '',
            'class'       => ''
          )
        ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'tmq_top_bar_sec'
      ),
	  array(
        'id'          => 'tmq_sticky_menu',
        'label'       => 'Sticky Menu',
        'desc'        => 'Do you want the main menu follow visitors when they scroll down the page? It\'s recommended to let it stay enable if you have less than 10 menu items. For more menu items, please disable it.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'tmq_menu_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	  
	  array(
        'id'          => 'tmq_menu_background_color',
        'label'       => 'Menu Background Color',
        'desc'        => 'Choose the background color of the menu (First level).',
        'std'         => '#007aff',
        'type'        => 'colorpicker',
        'section'     => 'tmq_menu_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_menu_color',
        'label'       => 'Menu Text Color',
        'desc'        => 'Choose the text color of the menu (First level).',
        'std'         => '#ffffff',
        'type'        => 'colorpicker',
        'section'     => 'tmq_menu_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),  
	  array(
		'label'       => 'Menu Font Transform',
		'id'          => 'tmq_menu_transform',
		'type'        => 'select',
        'section'     => 'tmq_menu_sec',
		'desc'        => 'Set the text transform of the top level menus (First Level). Default is Uppercase',
		'std'         => 'tmq_uppercase',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => 'Uppercase',
			'value'        => 'tmq_uppercase'
			),
			array(
			'label'        => 'Lowercase',
			'value'        => 'tmq_lowercase'
			),
			array(
			'label'        => 'Capitalize',
			'value'        => 'tmq_capitalize'
			),
			array(
			'label'        => 'None',
			'value'        => 'tmq_none'
			)
		)
	  ),
	  array(
		'label'       => 'Sub Menu Font Transform',
		'id'          => 'tmq_submenu_transform',
		'type'        => 'select',
        'section'     => 'tmq_menu_sec',
		'desc'        => 'Set the text transform of the sub menus. Default is Capitalize',
		'std'         => 'tmq_uppercase',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => 'Capitalize',
			'value'        => 'tmq_capitalize'
			),
			array(
			'label'        => 'Uppercase',
			'value'        => 'tmq_uppercase'
			),
			array(
			'label'        => 'Lowercase',
			'value'        => 'tmq_lowercase'
			),
			array(
			'label'        => 'None',
			'value'        => 'tmq_none'
			)
		)
	  ),
	  array(
        'id'          => 'tmq_menu_l2_background_color',
        'label'       => 'SUB Menu Background Color',
        'desc'        => 'Choose the background color of the sub menu.',
        'std'         => '#ffffff',
        'type'        => 'colorpicker',
        'section'     => 'tmq_menu_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_menu_l2_color',
        'label'       => 'SUB Menu Text Color',
        'desc'        => 'Choose the text color of the sub menu.',
        'std'         => '#646464',
        'type'        => 'colorpicker',
        'section'     => 'tmq_menu_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_menu_l2_hover_color',
        'label'       => 'SUB Menu Text Mouse Over Color',
        'desc'        => 'Choose the text color of the sub menu items when mouse is over them.',
        'std'         => '#000000',
        'type'        => 'colorpicker',
        'section'     => 'tmq_menu_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_menu_width',
        'label'       => 'Width of menu and logo area',
        'desc'        => 'Enter the preferred width of menu and logo area. Default: 270px',
        'std'         => '270',
        'type'        => 'numeric-slider',
        'section'     => 'tmq_menu_sec',
		'min_max_step'=> '220,320,10',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_menu_l2_width',
        'label'       => 'Width of Submenu items',
        'desc'        => 'Enter the preferred width of submenu items. Default: 220px',
        'std'         => '220',
        'type'        => 'numeric-slider',
        'section'     => 'tmq_menu_sec',
		'min_max_step'=> '180,280,1',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_menu_padding',
        'label'       => 'Top/Bottom Padding of Menu Items',
        'desc'        => 'This will control the height of the top level menu items. Default: 15px',
        'std'         => '15',
        'type'        => 'numeric-slider',
        'section'     => 'tmq_menu_sec',
		'min_max_step'=> '10,30,1',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_menu_l2_padding',
        'label'       => 'Top/Bottom Padding of SubMenu Items',
        'desc'        => 'This will control the height of the submenu items. Default: 18px',
        'std'         => '18',
        'type'        => 'numeric-slider',
        'section'     => 'tmq_menu_sec',
		'min_max_step'=> '10,32,1',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_undermenu_sidebar',
        'label'       => 'Enable Under Menu Sidebar',
        'desc'        => 'You can enable a widgetized area below the main menu by turning on this option.',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'tmq_undermenu_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_undermenu_opacity',
        'label'       => 'Opacity of Under Menu Area in %',
        'desc'        => 'You may control the under menu area opacity here. Please consider your sidebar content when choosing a sidebar will low opacity level.',
        'std'         => '96',
        'type'        => 'numeric-slider',
        'section'     => 'tmq_undermenu_sec',
		'min_max_step'=> '80,100,2',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
		'label'       => __('Default Banner Area Settings', 'vertikal'),
		'id'          => 'tmq_banner_area_setting',
		'type'        => 'select',
        'section'     => 'tmq_banner_sec',
		'desc'        => __('Set the default setting for pages/posts that slider setting is not configured for them. Usually for pages or posts that exist on this site before installing Vertikal.', 'vertikal'),
		'std'         => 'tmq_text',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => __('Do not show anything', 'vertikal'),
			'value'        => 'tmq_none'
			),
			array(
			'label'        => __('Show title and subtitle', 'vertikal'),
			'value'        => 'tmq_text'
			)
		)
	  ),	  
      array(
        'id'          => 'tmq_about_banner_defaults',
        'label'       => 'Important Note About Default Title and Subtitle',
        'desc'        => 'The following two items are very important for your site SEO. If you don\'t set these two items for each page or post individually, it will show the below strings as a default text. But this way title will not place in a <strong> &lt;&nbsp;H1&nbsp;&gt; </strong> tag which is important for your page SEO. Instead it will be placed in a <strong> &lt;&nbsp;SPAN&nbsp;&gt; </strong> tag.',
        'std'         => '',
        'type'        => 'textblock_titled',
        'section'     => 'tmq_banner_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	  
      array(
        'id'          => 'tmq_default_banner_title',
        'label'       => 'Default Heading Title for Pages/Posts',
        'desc'        => 'This text will be placed as the title of the banner area if nothing is entered in the page or post. Leave this empty if you want that page/post title sets here if nothing is set per page/post.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'tmq_banner_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_default_banner_subtitle',
        'label'       => 'Default Sub-Title for Pages/Posts',
        'desc'        => 'This text will be placed as the subtitle of the banner area if nothing is entered in the page or post.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'tmq_banner_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_brcr',
        'label'       => 'Breadcrumb Visibility',
        'desc'        => 'Choose the visibility of the breadcrumb in the site. Some people simply doesn\'t like breadcrumbs!',
        'std'         => 'tmq_show',
        'type'        => 'select',
        'section'     => 'tmq_banner_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_show',
            'label'       => 'Show it',
            'src'         => ''
          ),
          array(
            'value'       => 'tmq_hide',
            'label'       => 'Hide it',
            'src'         => ''
          )
        ),
      ),
	  array(
        'id'          => 'tmq_brcr_format',
        'label'       => 'Breadcrumb Text Format',
        'desc'        => 'How do you like to see breadcrumb texts on your site?',
        'std'         => 'tmq_lowercase',
        'type'        => 'select',
        'section'     => 'tmq_banner_sec',
        'rows'        => '',
        'post_type'   => '',
		'condition'   => 'tmq_brcr:is(tmq_show)',
		'operator'	  => 'and',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_none',
            'label'       => 'none',
            'src'         => ''
          ),
          array(
            'value'       => 'tmq_lowercase',
            'label'       => 'lowercase',
            'src'         => ''
          ),
          array(
            'value'       => 'tmq_uppercase',
            'label'       => 'UPPERCASE',
            'src'         => ''
          ),
          array(
            'value'       => 'tmq_capitalize',
            'label'       => 'Capitalize',
            'src'         => ''
          )
        ),
      ),
	  array(
        'id'          => 'tmq_banner_bg_type',
        'label'       => 'Background Type',
        'desc'        => 'Choose the background type of banner area?',
        'std'         => 'tmq_gradient',
        'type'        => 'select',
        'section'     => 'tmq_banner_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_color',
            'label'       => 'Background Color',
            'src'         => ''
          ),
          array(
            'value'       => 'tmq_gradient',
            'label'       => 'Gradient Background Color',
            'src'         => ''
          ),
          array(
            'value'       => 'tmq_image',
            'label'       => 'Background Image',
            'src'         => ''
          )
        ),
      ),
	  array(
        'id'          => 'tmq_banner_background_color',
        'label'       => 'Background Color of Banner Area',
        'desc'        => 'Choose the background color of the background area',
        'std'         => '#666666',
        'type'        => 'colorpicker',
        'section'     => 'tmq_banner_sec',
        'rows'        => '',
        'post_type'   => '',
		'condition'	  => 'tmq_banner_bg_type:is(tmq_color)',
		'operator'	  => 'and',		
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_banner_background_gradient_1',
        'label'       => 'Gradient Color - Start',
        'desc'        => 'Choose the start color of the background gradient color of banner area',
        'std'         => '#666666',
        'type'        => 'colorpicker',
        'section'     => 'tmq_banner_sec',
        'rows'        => '',
        'post_type'   => '',
		'condition'	  => 'tmq_banner_bg_type:is(tmq_gradient)',
		'operator'	  => 'and',		
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_banner_background_gradient_2',
        'label'       => 'Gradient Color - End',
        'desc'        => 'Choose the end color of the background gradient color of banner area',
        'std'         => '#999999',
        'type'        => 'colorpicker',
        'section'     => 'tmq_banner_sec',
        'rows'        => '',
        'post_type'   => '',
		'condition'	  => 'tmq_banner_bg_type:is(tmq_gradient)',
		'operator'	  => 'and',		
        'taxonomy'    => '',
        'class'       => ''
      ),	  
      array(
        'id'          => 'tmq_banner_background_image',
        'label'       => 'Background Image of Banner Area',
        'desc'        => 'Upload an image to set it as the background of the banner area. You can change this per page or post.<br><br>Leave it empty if you want to use the default gray gradient color of the theme.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'tmq_banner_sec',
        'rows'        => '',
        'post_type'   => '',
		'condition'	  => 'tmq_banner_bg_type:is(tmq_image)',
		'operator'	  => 'and',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_banner_padding',
        'label'       => 'Top and Bottom Padding (Height)',
        'desc'        => 'Enter the preferred size of the top and bottom padding for this area. This will affect the height of this area. Default: 41px',
        'std'         => '41',
        'type'        => 'numeric-slider',
        'section'     => 'tmq_banner_sec',
		'min_max_step'=> '25,60,1',
        'taxonomy'    => '',
        'class'       => ''
      ),	  
      array(
        'id'          => 'tmq_toggle_bar',
        'label'       => 'Enable Toggle Bar',
        'desc'        => 'You can enable toggle bar here. This will let you add some widgets in this area too.',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'tmq_toggle_sec',
        'rows'        => '',
        'post_type'   => '',
		'condition'	  => '',
		'operator'	  => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_toggle_background',
        'label'       => 'Background Color of Toggle Bar',
        'desc'        => 'Choose the background color of the toggle bar in the header.',
        'std'         => '#303030',
        'type'        => 'colorpicker',
        'section'     => 'tmq_toggle_sec',
        'rows'        => '',
        'post_type'   => '',
		'condition'	  => '',
		'operator'	  => '',
        'taxonomy'    => '',
		'condition'	  => 'tmq_toggle_bar:is(on)',
		'operator'	  => 'and',
        'class'       => ''
      ),	  
      array(
        'id'          => 'tmq_toggle_header_color',
        'label'       => 'Widgets Heading Color',
        'desc'        => 'Choose the color of the heading titles of the widgets that are placed in toggle bar widgets.',
        'std'         => '#ffffff',
        'type'        => 'colorpicker',
        'section'     => 'tmq_toggle_sec',
        'rows'        => '',
        'post_type'   => '',
		'condition'	  => '',
		'operator'	  => '',
        'taxonomy'    => '',
		'condition'	  => 'tmq_toggle_bar:is(on)',
		'operator'	  => 'and',
        'class'       => ''
      ),	  
      array(
        'id'          => 'tmq_toggle_color',
        'label'       => 'Text and Paragraph Color',
        'desc'        => 'Choose the color of the texts that are placed in toggle bar widgets.',
        'std'         => '#dbdbdb',
        'type'        => 'colorpicker',
        'section'     => 'tmq_toggle_sec',
        'rows'        => '',
        'post_type'   => '',
		'condition'	  => '',
		'operator'	  => '',
        'taxonomy'    => '',
		'condition'	  => 'tmq_toggle_bar:is(on)',
		'operator'	  => 'and',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_togglewidgetzones',
        'label'       => 'Widget Zones',
        'desc'        => 'Choose the desire mode for header toggle bar widget zones. You can add widgets in Appearance > Widgets.',
        'std'         => 'tmq_13_13_13',
        'type'        => 'radio-image',
        'section'     => 'tmq_toggle_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
		'condition'	  => 'tmq_toggle_bar:is(on)',
		'operator'	  => 'and',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_1',
            'label'       => 'One Column',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_1.png'
          ),
          array(
            'value'       => 'tmq_12_12',
            'label'       => 'Two Columns',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_12_12.png'
          ),
          array(
            'value'       => 'tmq_13_13_13',
            'label'       => 'Three Columns',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_13_13_13.png'
          ),
          array(
            'value'       => 'tmq_13_23',
            'label'       => 'Two Columns (1/3 and 2/3)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_13_23.png'
          ),
          array(
            'value'       => 'tmq_23_13',
            'label'       => 'Two Columns (2/3 and 1/3)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_23_13.png'
          ),
          array(
            'value'       => 'tmq_14_14_14_14',
            'label'       => 'Four Columns',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_14_14_14_14.png'
          ),
          array(
            'value'       => 'tmq_14_12_14',
            'label'       => 'Three Columns (1/4 - 1/2 and 1/4)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_14_12_14.png'
          ),
          array(
            'value'       => 'tmq_12_14_14',
            'label'       => 'Three Columns (1/2 - 1/4 and 1/4)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_12_14_14.png'
          ),
          array(
            'value'       => 'tmq_14_14_12',
            'label'       => 'Three Columns (1/4 - 1/4 and 1/2)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_14_14_12.png'
          )
        ),
      ),
      array(
        'id'          => 'tmq_toggle_bar_custom_color_status',
        'label'       => 'Enable Custom Accent Color for Toggle Bar Sidebar',
        'desc'        => 'If you turn this off, the main accent color of them will use here too.',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'tmq_toggle_sec',
        'rows'        => '',
        'post_type'   => '',
		'condition'	  => '',
		'operator'	  => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	  
	  array(
        'id'          => 'tmq_toggle_bar_custom_color',
        'label'       => 'Accent Color in Toggle Bar Area',
        'desc'        => 'Choose the accent color of all elements in Toggle bar area.',
        'std'         => '#0079fa',
        'type'        => 'colorpicker',
        'section'     => 'tmq_toggle_sec',
        'rows'        => '',
        'post_type'   => '',	
		'condition'	  => 'tmq_toggle_bar_custom_color_status:is(on)',
		'operator'	  => 'and',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_footer_background_color',
        'label'       => 'Background Color of Website Footer',
        'desc'        => 'Choose the background color of the website footer area. Default is #ffffff. Using dark colors is not recommended.',
        'std'         => '#ffffff',
        'type'        => 'colorpicker',
        'section'     => 'tmq_footer_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_copyright_background_color',
        'label'       => 'Background Color of Copyright Area',
        'desc'        => 'Choose the background color of the copyright area of the footer. Default is #0079fa. It\'s recommended to use a same color as main accent color of the site.',
        'std'         => '#0079fa',
        'type'        => 'colorpicker',
        'section'     => 'tmq_footer_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_footerwidgetzones',
        'label'       => 'Widget Zones',
        'desc'        => 'Choose the desire mode for footer widget zones. You can add widgets in Appearance > Widgets.',
        'std'         => 'tmq_13_13_13',
        'type'        => 'radio-image',
        'section'     => 'tmq_footer_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_1',
            'label'       => 'One Column',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_1.png'
          ),
          array(
            'value'       => 'tmq_12_12',
            'label'       => 'Two Columns',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_12_12.png'
          ),
          array(
            'value'       => 'tmq_13_13_13',
            'label'       => 'Three Columns',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_13_13_13.png'
          ),
          array(
            'value'       => 'tmq_13_23',
            'label'       => 'Two Columns (1/3 and 2/3)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_13_23.png'
          ),
          array(
            'value'       => 'tmq_23_13',
            'label'       => 'Two Columns (2/3 and 1/3)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_23_13.png'
          )
        ),
      ),
      array(
        'id'          => 'tmq_copyrighttext',
        'label'       => 'Copyright Text',
        'desc'        => 'Copyright message on footer of the site',
        'std'         => 'Copyright 2013 Themique.',
        'type'        => 'text',
        'section'     => 'tmq_footer_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_backtotop',
        'label'       => 'Back to Top Button',
        'desc'        => 'You can enable or disable back to top button on your site here.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'tmq_footer_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
      ),
	  array(
        'id'          => 'tmq_page_background_color',
        'label'       => 'Background Color of Content Area',
        'desc'        => 'Choose the background color of the website content area. Default is #ffffff. Using dark colors is not recommended.',
        'std'         => '#ffffff',
        'type'        => 'colorpicker',
        'section'     => 'tmq_pageoptions_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_page_p_color',
        'label'       => 'Default Paragraph Color',
        'desc'        => 'Choose the default paragraph color of the theme. Default is #9a9a9a. Using very light colors is not recommended.',
        'std'         => '#9a9a9a',
        'type'        => 'colorpicker',
        'section'     => 'tmq_pageoptions_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_default_sidebar_position',
        'label'       => 'Default Sidebar Position',
        'desc'        => 'Default page layout. There is a per/page option in add/edit pages for this setting. You can choose the default settings here.',
        'std'         => 'tmq_fullwidth',
        'type'        => 'radio-image',
        'section'     => 'tmq_pageoptions_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_rightsidebar',
            'label'       => 'Right Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_right_105.png'
          ),
          array(
            'value'       => 'tmq_leftsidebar',
            'label'       => 'Left Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_left_105.png'
          ),
         array(
            'value'       => 'tmq_fullwidth',
            'label'       => 'No Sidebars (Full Width)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_full_width_105.png'
          )
		),
      ),
      array(
        'id'          => 'tmq_def_left_sidebar',
        'label'       => 'Default Left Sidebar',
        'desc'        => 'Choose default sidebar for pages with <strong>left sidebar template</strong>. You can change this per page/post.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_pageoptions_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_def_right_sidebar',
        'label'       => 'Default Right Sidebar',
        'desc'        => 'Choose default sidebar for pages with <strong>right sidebar template</strong>. You can change this per page/post.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_pageoptions_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_404_heading',
        'label'       => '404 Error Page Heading',
        'desc'        => 'Choose 404 page not found error page heading',
        'std'         => '404 File Not Found!',
        'type'        => 'text',
        'section'     => 'tmq_404_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_404_text',
        'label'       => '404 Error Page Text',
        'desc'        => 'Choose 404 page not found error page text',
        'std'         => 'Oops! The page you are looking for could not be found! Maybe you want to search for it?',
        'type'        => 'text',
        'section'     => 'tmq_404_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	
      array(
        'id'          => 'tmq_404_search',
        'label'       => 'Enable Search Box?',
        'desc'        => 'You can enable or disable search box on 404 not found page.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'tmq_404_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	  
      array(
        'id'          => 'tmq_def_blog_sidebar_position',
        'label'       => 'Default Blog Layout',
        'desc'        => 'Choose position of sidebar in blog index page and also the default position for single posts. You can override this option per post.',
        'std'         => 'tmq_rightsidebar',
        'type'        => 'radio-image',
        'section'     => 'tmq_blogoptions',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_rightsidebar',
            'label'       => 'Right Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_right_105.png'
          ),
          array(
            'value'       => 'tmq_leftsidebar',
            'label'       => 'Left Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_left_105.png'
          ),
          array(
            'value'       => 'tmq_fullwidth',
            'label'       => 'No Sidebar (Full Width)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_full_width_105.png'
          )
        ),
      ),
      array(
        'id'          => 'tmq_blog_left_sidebar',
        'label'       => 'Default Left Sidebar',
        'desc'        => 'Choose the sidebar to show on blog posts with left sidebar. You can override this per post.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_blogoptions',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_blog_right_sidebar',
        'label'       => 'Default Right Sidebar',
        'desc'        => 'Choose the sidebar to show on blog posts with right sidebar. You can override this per post.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_blogoptions',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
		'id'          => 'tmq_author_box',
		'label'       => __('Default Status of Author Information Box', 'vertikal'),
		'type'        => 'select',
        'section'     => 'tmq_blogoptions',
		'desc'        => __('Do you want your visitors see the author information box in the bottom of each post? You can override this setting per post.', 'vertikal'),
		'std'         => 'tmq_show',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => __('Show', 'vertikal'),
			'value'        => 'tmq_show'
			),
			array(
			'label'        => __('Hide', 'vertikal'),
			'value'        => 'tmq_hide'
			)
	  	)
	  ),
      array(
        'id'          => 'tmq_blogexceptlimit',
        'label'       => 'Limit Posts Excerpt Lengh',
        'desc'        => 'Enter number of words that you want to see in posts excerpt section. Choose less words if you\'ve selected more columns.',
        'std'         => '40',
        'type'        => 'numeric-slider',
        'section'     => 'tmq_blogoptions',
		'min_max_step'=> '0,80,1',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_blogexcept_after_text',
        'label'       => 'Text to Show After Excerpt',
        'desc'        => 'This text will be shown after excerpt in blog posts list.',
        'std'         => '[...]',
        'type'        => 'text',
        'section'     => 'tmq_blogoptions',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
		'label'       => __('Comments On Blog Posts', 'vertikal'),
		'id'          => 'tmq_blog_comments',
		'type'        => 'on-off',
		'desc'        => __('Do you want to globally enable or disable comments on blog posts?', 'vertikal'),
        'section'     => 'tmq_blogoptions',   
		'std'         => 'on',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => ''
	  ),	  
      array(
        'id'          => 'tmq_blog_columns',
        'label'       => 'Default Blog Page Columns',
        'desc'        => 'Choose the number of columns for default blog page. <BR><BR>For the pages with a sidebar, if you choose three (3) columns, it will automatically reduce to two (2) columns to keep your site beautiful!',
        'std'         => 'tmq_12_12',
        'type'        => 'radio-image',
        'section'     => 'tmq_blog_index',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_1',
            'label'       => 'One Column',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_1.png'
          ),
          array(
            'value'       => 'tmq_12_12',
            'label'       => 'Two Columns',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_12_12.png'
          ),
          array(
            'value'       => 'tmq_13_13_13',
            'label'       => 'Three Columns',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_13_13_13.png'
          )
        ),
      ),	  
	  array(
		'label'       => __('Slider Type - Banner Area Setting', 'vertikal'),
		'id'          => 'tmq_blog_slidertype',
		'type'        => 'select',
		'desc'        => __('How should this page deal with Sliders?', 'vertikal'),
		'std'         => 'tmq_text',
        'section'     => 'tmq_blog_index',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
				'label'        => __('None', 'vertikal'),
				'value'        => 'tmq_none'
			),
			array(
				'label'        => __('Text and Background', 'vertikal'),
				'value'        => 'tmq_text'
			),
			array(
				'label'        => __('Revolution Slider', 'vertikal'),
				'value'        => 'tmq_revolution'
			),
			array(
				'label'        => __('Flex Slider', 'vertikal'),
				'value'        => 'tmq_flex'
			)
		)
	  ),
	  array(
		'label'       => __('Blog Index Page Heading', 'vertikal'),
		'id'          => 'tmq_blog_banner_title',
		'type'        => 'text',
		'desc'        => __('The Main Title of this Page.', 'vertikal'),
		'std'         => 'Our Blog',
        'section'     => 'tmq_blog_index',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_blog_slidertype:is(tmq_text)',
		'operator'    => 'and',	
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'label'       => __('Blog Index Page Subtitle', 'vertikal'),
		'id'          => 'tmq_blog_banner_subtitle',
		'type'        => 'text',
		'desc'        => __('The second line in the banner area. A quick description about this page. Use at most 10 words.', 'vertikal'),
		'std'         => 'fresh news about latest design trends',
        'section'     => 'tmq_blog_index',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_blog_slidertype:is(tmq_text)',
		'operator'    => 'and',						
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'id'          => 'tmq_blog_banner_bg_type',
		'label'       => 'Background Type',
		'desc'        => 'Choose the background type of banner area?',
		'std'         => 'tmq_gradient',
        'section'     => 'tmq_blog_index',
		'type'        => 'select',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_blog_slidertype:is(tmq_text)',
		'operator'    => 'and',			
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
				'value'       => 'tmq_color',
				'label'       => 'Background Color',
				'src'         => ''
			),
			array(
				'value'       => 'tmq_gradient',
				'label'       => 'Gradient Background Color',
				'src'         => ''
			),
			array(
				'value'       => 'tmq_image',
				'label'       => 'Background Image',
				'src'         => ''
			)
		),
	  ),
	  array(
		'id'          => 'tmq_blog_banner_background_color',
		'label'       => 'Background Color of Banner Area',
		'desc'        => 'Choose the background color of the background area',
		'std'         => '#666666',
        'section'     => 'tmq_blog_index',
		'type'        => 'colorpicker',
		'rows'        => '',
		'post_type'   => '',
		'condition'	  => 'tmq_blog_slidertype:is(tmq_text),tmq_blog_banner_bg_type:is(tmq_color)',
		'operator'	  => 'and',		
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'id'          => 'tmq_blog_banner_background_gradient_1',
		'label'       => 'Gradient Color - Start',
		'desc'        => 'Choose the start color of the background gradient color of banner area',
		'std'         => '#666666',
        'section'     => 'tmq_blog_index',
		'type'        => 'colorpicker',
		'rows'        => '',
		'post_type'   => '',
		'condition'	  => 'tmq_blog_slidertype:is(tmq_text),tmq_blog_banner_bg_type:is(tmq_gradient)',
		'operator'	  => 'and',		
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'id'          => 'tmq_blog_banner_background_gradient_2',
		'label'       => 'Gradient Color - End',
		'desc'        => 'Choose the end color of the background gradient color of banner area',
		'std'         => '#999999',
        'section'     => 'tmq_blog_index',
		'type'        => 'colorpicker',
		'rows'        => '',
		'post_type'   => '',
		'condition'	  => 'tmq_blog_slidertype:is(tmq_text),tmq_blog_banner_bg_type:is(tmq_gradient)',
		'operator'	  => 'and',		
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'label'       => __('Upload Background Image for Banner Area', 'vertikal'),
		'id'          => 'tmq_blog_banner_background_image',
		'type'        => 'upload',
		'desc'        => __('Upload image to set it as the background image of the banner area.<br><br> This will only work if <strong>Text and Background</strong> is set as <strong>Slider Type</strong>.', 'vertikal'),
		'std'         => '',
        'section'     => 'tmq_blog_index',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_blog_slidertype:is(tmq_text),tmq_blog_banner_bg_type:is(tmq_image)',
		'operator'    => 'and',						
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'label'       => __('Choose Revolution Slider to Show', 'vertikal'),
		'id'          => 'tmq_blog_revolution_slider',
		'type'        => 'revslider-select',
		'desc'        => __('Choose a revolution slider which you have built previously.<br><br> This will only work if <strong>Revolution Slider</strong> is set as <strong>Slider Type</strong>.', 'vertikal'),
		'std'         => '',
        'section'     => 'tmq_blog_index',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_blog_slidertype:is(tmq_revolution)',
		'operator'    => 'and',						
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'label'       => __('Upload Images for Flex Slider', 'vertikal'),
		'id'          => 'tmq_blog_flex_gallery',
		'type'        => 'gallery',
		'desc'        => __('Uplad images to be used in flex slider.', 'vertikal'),
		'std'         => '',
        'section'     => 'tmq_blog_index',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_blog_slidertype:is(tmq_flex)',
		'operator'    => 'and',						
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'label'       => __('Customize Gallery Post Format', 'vertikal'),
		'id'          => 'tmq_custom_gallery_format',
		'type'        => 'select',
        'section'     => 'tmq_gallery_post_format_options',
		'desc'        => __('Do you want to customize gallery post format images?', 'vertikal'),
		'std'         => 'tmq_default',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => __('No - Use Default - Keep it Simple', 'vertikal'),
			'value'        => 'tmq_default'
			),
			array(
			'label'        => __('Yes! I want my own settings', 'vertikal'),
			'value'        => 'tmq_custom'
			)
		)
	  ),
	  array(
        'label'       => 'Zoom Effect on Click',
        'id'          => 'tmq_gallery_image_zoom',
		'type'        => 'select',
        'section'     => 'tmq_gallery_post_format_options',
        'desc'        => 'You can decide to show full size image when a visitor clicks on any image in slideshow or not.',
		'std'         => 'tmq_zoom',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',		
		'condition'   => 'tmq_custom_gallery_format:is(tmq_custom)',
		'operator'	  => 'and',	
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => __('Enable Zoom Effect', 'vertikal'),
			'value'        => 'tmq_zoom'
			),
			array(
			'label'        => __('Disable it!', 'vertikal'),
			'value'        => 'tmq_dont_zoom'
			)
		)
      ),
      array(
        'id'          => 'tmq_gallery_image_desc',
        'label'       => 'IMPORTANT NOTICE',
        'desc'        => 'You can change dimension of the images that will be used in gallery post format slideshow. But please note that if you change this dimensions after you\'ve uploaded any files, the old files will not automatically resize and you should use a plugin to re-generate all images with the new dimensions.',
        'std'         => '',
        'type'        => 'textblock_titled',
        'section'     => 'tmq_gallery_post_format_options',
        'taxonomy'    => '',
		'condition'   => 'tmq_custom_gallery_format:is(tmq_custom)',
		'operator'	  => 'and',	
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_gallery_image_width',
        'label'       => 'Gallery Post Format: Image Width',
        'desc'        => 'Set the default width of images in gallery post format slideshow. ( Default is 600px )',
        'std'         => '600',
        'type'        => 'numeric-slider',
        'section'     => 'tmq_gallery_post_format_options',
		'min_max_step'=> '400,900,1',
        'taxonomy'    => '',
		'condition'   => 'tmq_custom_gallery_format:is(tmq_custom)',
		'operator'	  => 'and',	
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_gallery_image_height',
        'label'       => 'Gallery Post Format: Image Height',
        'desc'        => 'Set the default height of images in gallery post format slideshow. ( Default is 450px )',
        'std'         => '450',
        'type'        => 'numeric-slider',
        'section'     => 'tmq_gallery_post_format_options',
		'min_max_step'=> '250,700,1',
        'taxonomy'    => '',
		'condition'   => 'tmq_custom_gallery_format:is(tmq_custom)',
		'operator'	  => 'and',	
        'class'       => ''
      ),
	  array(
		'label'       => __('Default Setting for Related Posts', 'vertikal'),
		'id'          => 'tmq_relatedposts',
		'type'        => 'select',
        'section'     => 'tmq_related_posts_options',
		'desc'        => __('Show related post at the end of the each post. You can override this per post.', 'vertikal'),
		'std'         => 'tmq_show',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => __('Show', 'vertikal'),
			'value'        => 'tmq_show'
			),
			array(
			'label'        => __('Hide', 'vertikal'),
			'value'        => 'tmq_hide'
			)
		)
	  ),
	  array(
		'label'       => __('Customize Related Posts', 'vertikal'),
		'id'          => 'tmq_custom_relatedposts',
		'type'        => 'select',
        'section'     => 'tmq_related_posts_options',
		'desc'        => __('Do you want to customize related posts?', 'vertikal'),
		'std'         => 'tmq_default',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => __('No - Use Default - Keep it Simple', 'vertikal'),
			'value'        => 'tmq_default'
			),
			array(
			'label'        => __('Yes! I want my own settings', 'vertikal'),
			'value'        => 'tmq_custom'
			)
		)
	  ),	  
	  array(
		'label'       => __('Related Posts: Number of Columns for Posts WITH Sidebar', 'vertikal'),
		'id'          => 'tmq_relatedposts_sidebar_cols',
		'type'        => 'select',
        'section'     => 'tmq_related_posts_options',
		'desc'        => __('Select the number of columns of the related posts in posts that have sidebar', 'vertikal'),
		'std'         => 'tmq_2',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_custom_relatedposts:is(tmq_custom)',
		'operator'	  => 'and',		
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => __('2 Columns', 'vertikal'),
			'value'        => 'tmq_2'
			),
			array(
			'label'        => __('1 Column', 'vertikal'),
			'value'        => 'tmq_1'
			)
		)
	  ),	  
	  array(
		'label'       => __('Related Posts: Number of Columns for Posts WITHOUT Sidebar', 'vertikal'),
		'id'          => 'tmq_relatedposts_no_sidebar_cols',
		'type'        => 'select',
        'section'     => 'tmq_related_posts_options',
		'desc'        => __('Select the number of columns of the related posts in posts that don\'t have any sidebar.', 'vertikal'),
		'std'         => 'tmq_3',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_custom_relatedposts:is(tmq_custom)',
		'operator'	  => 'and',		
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => __('3 Columns', 'vertikal'),
			'value'        => 'tmq_3'
			),
			array(
			'label'        => __('2 Columns', 'vertikal'),
			'value'        => 'tmq_2'
			),
			array(
			'label'        => __('1 Column', 'vertikal'),
			'value'        => 'tmq_1'
			)
		)
	  ),
	  array(
		'label'       => __('Related Posts: Show Image', 'vertikal'),
		'id'          => 'tmq_relatedposts_show_image',
		'type'        => 'select',
        'section'     => 'tmq_related_posts_options',
		'desc'        => __('You can remove the image from related posts if you don\'t want to add featured image for each post.', 'vertikal'),
		'std'         => 'tmq_hide',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_custom_relatedposts:is(tmq_custom)',
		'operator'	  => 'and',		
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => __('Hide it', 'vertikal'),
			'value'        => 'tmq_hide'
			),
			array(
			'label'        => __('Show it', 'vertikal'),
			'value'        => 'tmq_show'
			)
		)
	  ),
      array(
        'id'          => 'tmq_relatedposts_exceptlimit',
        'label'       => 'Related Posts: Limit Posts Excerpt Lengh',
        'desc'        => 'Enter number of words that you want to see in posts excerpt section. Choose less words if you\'ve selected more columns.',
        'std'         => '40',
        'type'        => 'numeric-slider',
        'section'     => 'tmq_related_posts_options',
		'min_max_step'=> '0,80,1',
		'condition'   => 'tmq_custom_relatedposts:is(tmq_custom)',
		'operator'	  => 'and',			
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_blog_pagination_top',
        'label'       => 'Show Pagination Above the Posts',
        'desc'        => 'Enable pagination links for blog index pages on top side of the posts (before showing posts).',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'tmq_blog_pagination_options',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_blog_pagination_top_align',
        'label'       => 'Top Pagination: Alignment',
        'desc'        => 'Choose the alignment of the pagination links on top of the posts.',
        'std'         => 'tmq_left',
        'type'        => 'select',
        'section'     => 'tmq_blog_pagination_options',
		'condition'   => 'tmq_blog_pagination_top:is(on)',
		'operator'	  => 'and',			
        'taxonomy'    => '',
        'class'       => '',
		'choices'	  => array(
			array(
				'label'        => __('Left', 'vertikal'),
				'value'        => 'tmq_left'
			),
			array(
				'label'        => __('Center', 'vertikal'),
				'value'        => 'tmq_center'
			),
			array(
				'label'        => __('Right', 'vertikal'),
				'value'        => 'tmq_right'
			)
		)		
      ),
      array(
        'id'          => 'tmq_blog_pagination_bottom',
        'label'       => 'Show Pagination Below of the Posts',
        'desc'        => 'Enable pagination links for blog index pages on bottom side of the posts (after showing posts).',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'tmq_blog_pagination_options',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_blog_pagination_bottom_align',
        'label'       => 'Bottom Pagination: Alignment',
        'desc'        => 'Choose the alignment of the pagination links on bottom of the posts.',
        'std'         => 'tmq_left',
        'type'        => 'select',
        'section'     => 'tmq_blog_pagination_options',
		'condition'   => 'tmq_blog_pagination_bottom:is(on)',
		'operator'	  => 'and',			
        'taxonomy'    => '',
        'class'       => '',
		'choices'	  => array(
			array(
				'label'        => __('Left', 'vertikal'),
				'value'        => 'tmq_left'
			),
			array(
				'label'        => __('Center', 'vertikal'),
				'value'        => 'tmq_center'
			),
			array(
				'label'        => __('Right', 'vertikal'),
				'value'        => 'tmq_right'
			)
		)		
      ),	  
      array(
        'id'          => 'tmq_blog_category_columns',
        'label'       => 'Blog Category Pages Columns',
        'desc'        => 'Choose the number of columns for default blog category pages. <BR><BR>For the pages with a sidebar, if you choose three (3) columns, it will automatically reduce to two (2) columns to keep your site beautiful!',
        'std'         => 'tmq_12_12',
        'type'        => 'radio-image',
        'section'     => 'tmq_blog_category_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_1',
            'label'       => 'One Column',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_1.png'
          ),
          array(
            'value'       => 'tmq_12_12',
            'label'       => 'Two Columns',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_12_12.png'
          ),
          array(
            'value'       => 'tmq_13_13_13',
            'label'       => 'Three Columns',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_13_13_13.png'
          )
        ),
      ),	
	  array(
        'id'          => 'tmq_blog_category_sidebar_position',
        'label'       => 'Blog Category Pages Layout',
        'desc'        => 'Choose default position of sidebar in blog category pages.',
        'std'         => 'tmq_rightsidebar',
        'type'        => 'radio-image',
        'section'     => 'tmq_blog_category_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_rightsidebar',
            'label'       => 'Right Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_right_105.png'
          ),
          array(
            'value'       => 'tmq_leftsidebar',
            'label'       => 'Left Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_left_105.png'
          ),
          array(
            'value'       => 'tmq_fullwidth',
            'label'       => 'No Sidebar (Full Width)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_full_width_105.png'
          )
        ),
      ),
      array(
        'id'          => 'tmq_blog_category_left_sidebar',
        'label'       => 'Left Sidebar',
        'desc'        => 'Choose the sidebar to show on blog category pages with left sidebar.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_blog_category_options',
        'rows'        => '',
        'post_type'   => '',		
		'condition'   => 'tmq_blog_category_sidebar_position:is(tmq_leftsidebar)',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_blog_category_right_sidebar',
        'label'       => 'Right Sidebar',
        'desc'        => 'Choose the sidebar to show on blog category pages with right sidebar.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_blog_category_options',
        'rows'        => '',
        'post_type'   => '',		
		'condition'   => 'tmq_blog_category_sidebar_position:is(tmq_rightsidebar)',
        'taxonomy'    => '',
        'class'       => ''
      ),	  
      array(
        'id'          => 'tmq_def_portfolio_sidebar_position',
        'label'       => 'Default Portfolio Layout',
        'desc'        => 'Choose default position of sidebar in portfolio posts. You can override this option per post.',
        'std'         => 'tmq_rightsidebar',
        'type'        => 'radio-image',
        'section'     => 'tmq_portfolio_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_rightsidebar',
            'label'       => 'Right Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_right_105.png'
          ),
          array(
            'value'       => 'tmq_leftsidebar',
            'label'       => 'Left Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_left_105.png'
          ),
          array(
            'value'       => 'tmq_fullwidth',
            'label'       => 'No Sidebar (Full Width)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_full_width_105.png'
          )
        ),
      ),
      array(
        'id'          => 'tmq_portfolio_left_sidebar',
        'label'       => 'Default Left Sidebar',
        'desc'        => 'Choose the sidebar to show on portfolio posts with left sidebar. You can override this per post.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_portfolio_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_portfolio_right_sidebar',
        'label'       => 'Default Right Sidebar',
        'desc'        => 'Choose the sidebar to show on portfolio posts with right sidebar. You can override this per post.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_portfolio_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_defportfoliopage',
        'label'       => 'Portfolio Archive Page URL',
        'desc'        => 'Where should a user go when he/she clicks on portfolio list in the single portfolio item?<BR><BR>Please go to string translation if you want to have a different URL for your other languages in WPML',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'tmq_portfolio_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
		'label'       => __('Comments On Portfolio', 'vertikal'),
		'id'          => 'tmq_portfolio_comments',
		'type'        => 'on-off',
		'desc'        => __('Do you want to enable comments on portfolio items?', 'vertikal'),
        'section'     => 'tmq_portfolio_sec',    
		'std'         => 'off',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'label'       => __('Customize Gallery Post Format', 'vertikal'),
		'id'          => 'tmq_portfolio_custom_gallery_format',
		'type'        => 'select',
        'section'     => 'tmq_portfolio_gallery_post_format_options',
		'desc'        => __('Do you want to customize gallery post format images?', 'vertikal'),
		'std'         => 'tmq_default',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => __('No - Use Default - Keep it Simple', 'vertikal'),
			'value'        => 'tmq_default'
			),
			array(
			'label'        => __('Yes! I want my own settings', 'vertikal'),
			'value'        => 'tmq_custom'
			)
		)
	  ),
      array(
        'id'          => 'tmq_portfolio_gallery_image_desc',
        'label'       => 'IMPORTANT NOTICE',
        'desc'        => 'You can change dimension of the images that will be used in gallery post format slideshow. But please note that if you change this dimensions after you\'ve uploaded any files, the old files will not automatically resize and you should use a plugin to re-generate all images with the new dimensions.',
        'std'         => '',
        'type'        => 'textblock_titled',
        'section'     => 'tmq_portfolio_gallery_post_format_options',
        'taxonomy'    => '',
		'condition'   => 'tmq_portfolio_custom_gallery_format:is(tmq_custom)',
		'operator'	  => 'and',	
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_portfolio_gallery_image_width',
        'label'       => 'Gallery Post Format: Image Width',
        'desc'        => 'Set the default width of images in gallery post format slideshow. ( Default is 600px )',
        'std'         => '600',
        'type'        => 'numeric-slider',
        'section'     => 'tmq_portfolio_gallery_post_format_options',
		'min_max_step'=> '400,900,1',
        'taxonomy'    => '',
		'condition'   => 'tmq_portfolio_custom_gallery_format:is(tmq_custom)',
		'operator'	  => 'and',	
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_portfolio_gallery_image_height',
        'label'       => 'Gallery Post Format: Image Height',
        'desc'        => 'Set the default height of images in gallery post format slideshow. ( Default is 450px )',
        'std'         => '450',
        'type'        => 'numeric-slider',
        'section'     => 'tmq_portfolio_gallery_post_format_options',
		'min_max_step'=> '250,700,1',
        'taxonomy'    => '',
		'condition'   => 'tmq_portfolio_custom_gallery_format:is(tmq_custom)',
		'operator'	  => 'and',	
        'class'       => ''
      ),	  
	  array(
		'label'       => __('Default Setting for Related Portfolio Items', 'vertikal'),
		'id'          => 'tmq_portfolio_relatedposts',
		'type'        => 'select',
        'section'     => 'tmq_portfolio_related_posts_options',
		'desc'        => __('Show related post at the end of the each post. You can override this per post.', 'vertikal'),
		'std'         => 'tmq_show',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => __('Show', 'vertikal'),
			'value'        => 'tmq_show'
			),
			array(
			'label'        => __('Hide', 'vertikal'),
			'value'        => 'tmq_hide'
			)
		)
	  ),
	  array(
		'label'       => __('Customize Related Posts', 'vertikal'),
		'id'          => 'tmq_portfolio_custom_relatedposts',
		'type'        => 'select',
        'section'     => 'tmq_portfolio_related_posts_options',
		'desc'        => __('Do you want to customize related posts?', 'vertikal'),
		'std'         => 'tmq_default',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => __('No - Use Default - Keep it Simple', 'vertikal'),
			'value'        => 'tmq_default'
			),
			array(
			'label'        => __('Yes! I want my own settings', 'vertikal'),
			'value'        => 'tmq_custom'
			)
		)
	  ),	  
	  array(
		'label'       => __('Related Posts: Number of Columns for Posts WITH Sidebar', 'vertikal'),
		'id'          => 'tmq_portfolio_relatedposts_sidebar_cols',
		'type'        => 'select',
        'section'     => 'tmq_portfolio_related_posts_options',
		'desc'        => __('Select the number of columns of the related posts in posts that have sidebar', 'vertikal'),
		'std'         => 'tmq_2',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_portfolio_custom_relatedposts:is(tmq_custom)',
		'operator'	  => 'and',		
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => __('2 Columns', 'vertikal'),
			'value'        => 'tmq_2'
			),
			array(
			'label'        => __('1 Column', 'vertikal'),
			'value'        => 'tmq_1'
			)
		)
	  ),	  
	  array(
		'label'       => __('Related Posts: Number of Columns for Posts WITHOUT Sidebar', 'vertikal'),
		'id'          => 'tmq_portfolio_relatedposts_no_sidebar_cols',
		'type'        => 'select',
        'section'     => 'tmq_portfolio_related_posts_options',
		'desc'        => __('Select the number of columns of the related posts in posts that don\'t have any sidebar.', 'vertikal'),
		'std'         => 'tmq_3',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_portfolio_custom_relatedposts:is(tmq_custom)',
		'operator'	  => 'and',		
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
			'label'        => __('3 Columns', 'vertikal'),
			'value'        => 'tmq_3'
			),
			array(
			'label'        => __('2 Columns', 'vertikal'),
			'value'        => 'tmq_2'
			),
		)
	  ),
	  array(
        'id'          => 'tmq_search_sidebar_position',
        'label'       => 'Search Page Layout',
        'desc'        => 'Choose position of sidebar in search results page.',
        'std'         => 'tmq_rightsidebar',
        'type'        => 'radio-image',
        'section'     => 'tmq_search_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_rightsidebar',
            'label'       => 'Right Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_right_105.png'
          ),
          array(
            'value'       => 'tmq_leftsidebar',
            'label'       => 'Left Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_left_105.png'
          ),
          array(
            'value'       => 'tmq_fullwidth',
            'label'       => 'No Sidebar (Full Width)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_full_width_105.png'
          )
        ),
      ),
      array(
        'id'          => 'tmq_search_left_sidebar',
        'label'       => 'Search Page Left Sidebar',
        'desc'        => 'Choose the sidebar to show on search results page with left sidebar.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_search_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_search_right_sidebar',
        'label'       => 'Search Page Right Sidebar',
        'desc'        => 'Choose the sidebar to show on search results page with right sidebar.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_search_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_search_columns',
        'label'       => 'Search Results Page Columns',
        'desc'        => 'Choose the number of columns for search results page. <BR><BR>For the pages with a sidebar, if you choose three (3) columns, it will automatically reduce to two (2) columns to keep your site beautiful!',
        'std'         => 'tmq_12_12',
        'type'        => 'radio-image',
        'section'     => 'tmq_search_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_1',
            'label'       => 'One Column',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_1.png'
          ),
          array(
            'value'       => 'tmq_12_12',
            'label'       => 'Two Columns',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_12_12.png'
          ),
          array(
            'value'       => 'tmq_13_13_13',
            'label'       => 'Three Columns',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_cols_13_13_13.png'
          )
        ),
      ),	  
	  array(
		'label'       => __('Slider Type - Banner Area Setting', 'vertikal'),
		'id'          => 'tmq_search_slidertype',
		'type'        => 'select',
		'desc'        => __('How should search results page deal with Sliders?', 'vertikal'),
		'std'         => 'tmq_none',
        'section'     => 'tmq_search_sec',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
				'label'        => __('None', 'vertikal'),
				'value'        => 'tmq_none'
			),
			array(
				'label'        => __('Text and Background', 'vertikal'),
				'value'        => 'tmq_text'
			),
			array(
				'label'        => __('Revolution Slider', 'vertikal'),
				'value'        => 'tmq_revolution'
			),
			array(
				'label'        => __('Flex Slider', 'vertikal'),
				'value'        => 'tmq_flex'
			)
		)
	  ),
	  array(
		'label'       => __('Search Results Page Heading', 'vertikal'),
		'id'          => 'tmq_search_banner_title',
		'type'        => 'text',
		'desc'        => __('The main title of search results Page.', 'vertikal'),
		'std'         => 'Searching...',
        'section'     => 'tmq_search_sec',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_search_slidertype:is(tmq_text)',
		'operator'    => 'and',	
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'label'       => __('Search Results Page Subtitle', 'vertikal'),
		'id'          => 'tmq_search_banner_subtitle',
		'type'        => 'text',
		'desc'        => __('The second line in the banner area. A quick description about search results page. Use at most 10 words.', 'vertikal'),
		'std'         => 'This is what we have found',
        'section'     => 'tmq_search_sec',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_search_slidertype:is(tmq_text)',
		'operator'    => 'and',						
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'id'          => 'tmq_search_banner_bg_type',
		'label'       => 'Background Type',
		'desc'        => 'Choose the background type of banner area in search results page.',
		'std'         => 'tmq_gradient',
        'section'     => 'tmq_search_sec',
		'type'        => 'select',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_search_slidertype:is(tmq_text)',
		'operator'    => 'and',			
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
				'value'       => 'tmq_color',
				'label'       => 'Background Color',
				'src'         => ''
			),
			array(
				'value'       => 'tmq_gradient',
				'label'       => 'Gradient Background Color',
				'src'         => ''
			),
			array(
				'value'       => 'tmq_image',
				'label'       => 'Background Image',
				'src'         => ''
			)
		),
	  ),
	  array(
		'id'          => 'tmq_search_banner_background_color',
		'label'       => 'Background Color of Banner Area',
		'desc'        => 'Choose the background color of the banner area in search results page.',
		'std'         => '#666666',
        'section'     => 'tmq_search_sec',
		'type'        => 'colorpicker',
		'rows'        => '',
		'post_type'   => '',
		'condition'	  => 'tmq_search_slidertype:is(tmq_text),tmq_search_banner_bg_type:is(tmq_color)',
		'operator'	  => 'and',		
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'id'          => 'tmq_search_banner_background_gradient_1',
		'label'       => 'Gradient Color - Start',
		'desc'        => 'Choose the start color of the background gradient color of banner area',
		'std'         => '#666666',
        'section'     => 'tmq_search_sec',
		'type'        => 'colorpicker',
		'rows'        => '',
		'post_type'   => '',
		'condition'	  => 'tmq_search_slidertype:is(tmq_text),tmq_search_banner_bg_type:is(tmq_gradient)',
		'operator'	  => 'and',		
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'id'          => 'tmq_search_banner_background_gradient_2',
		'label'       => 'Gradient Color - End',
		'desc'        => 'Choose the end color of the background gradient color of banner area',
		'std'         => '#999999',
        'section'     => 'tmq_search_sec',
		'type'        => 'colorpicker',
		'rows'        => '',
		'post_type'   => '',
		'condition'	  => 'tmq_search_slidertype:is(tmq_text),tmq_search_banner_bg_type:is(tmq_gradient)',
		'operator'	  => 'and',		
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'label'       => __('Upload Background Image for Banner Area', 'vertikal'),
		'id'          => 'tmq_search_banner_background_image',
		'type'        => 'upload',
		'desc'        => __('Upload image to set it as the background image of the banner area.<br><br> This will only work if <strong>Text and Background</strong> is set as <strong>Slider Type</strong>.', 'vertikal'),
		'std'         => '',
        'section'     => 'tmq_search_sec',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_search_slidertype:is(tmq_text),tmq_search_banner_bg_type:is(tmq_image)',
		'operator'    => 'and',						
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'label'       => __('Choose Revolution Slider to Show', 'vertikal'),
		'id'          => 'tmq_search_revolution_slider',
		'type'        => 'revslider-select',
		'desc'        => __('Choose a revolution slider which you have built previously.<br><br> This will only work if <strong>Revolution Slider</strong> is set as <strong>Slider Type</strong>.', 'vertikal'),
		'std'         => '',
        'section'     => 'tmq_search_sec',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_search_slidertype:is(tmq_revolution)',
		'operator'    => 'and',						
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'label'       => __('Upload Images for Flex Slider', 'vertikal'),
		'id'          => 'tmq_search_flex_gallery',
		'type'        => 'gallery',
		'desc'        => __('Uplad images to be used in flex slider.', 'vertikal'),
		'std'         => '',
        'section'     => 'tmq_search_sec',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_search_slidertype:is(tmq_flex)',
		'operator'    => 'and',						
		'taxonomy'    => '',
		'class'       => ''
	  ),
      array(
        'id'          => 'tmq_about_typography',
        'label'       => 'Some Typography Options',
        'desc'        => 'Here you can change the typography settings of the theme. By the way, the default settings would be the best for your site. We do recommend to do not change these values very much.',
        'std'         => '',
        'type'        => 'textblock_titled',
        'section'     => 'tmq_typography_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_support_latin',
        'label'       => 'Support Latin Char-Set',
        'desc'        => 'Please turn this on if your site is using latin codepages such as Turkish, Russian, Polish, ...',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'tmq_typography_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_support_greek',
        'label'       => 'Support Greek Char-Set',
        'desc'        => 'Please turn this on if your site is using Greek codepages',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'tmq_typography_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_paragraph_font',
        'label'       => 'Default Paragraphs Font Settings',
        'desc'        => '',
        'std'         => '',
        'type'        => 'googlefonts-select',
        'section'     => 'tmq_typography_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	
      array(
        'id'          => 'tmq_heading_webfont',
        'label'       => 'Headings (H1-H6) WebFont',
        'desc'        => '',
        'std'         => '',
        'type'        => 'googlefonts-select-small',
        'section'     => 'tmq_typography_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),		  
      array(
        'id'          => 'tmq_h1_font',
        'label'       => 'H1 Font Size',
        'desc'        => 'Default: 38px',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'tmq_typography_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_h2_font',
        'label'       => 'H2 Font Size',
        'desc'        => 'Default: 24px',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'tmq_typography_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_h3_font',
        'label'       => 'H3 Font Size',
        'desc'        => 'Default: 22px',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'tmq_typography_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_h4_font',
        'label'       => 'H4 Font Size',
        'desc'        => 'Default: 18px',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'tmq_typography_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_h5_font',
        'label'       => 'H5 Font Size',
        'desc'        => 'Default: 15px',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'tmq_typography_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_h6_font',
        'label'       => 'H6 Font Size',
        'desc'        => 'Default: 12px',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'tmq_typography_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),  
      array(
        'id'          => 'tmq_blog_list_header_font',
        'label'       => 'Blog Header Font Size (Lists)',
        'desc'        => 'Default: 18px',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'tmq_typography_blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_blog_header_font',
        'label'       => 'Blog Header Font Size (Single)',
        'desc'        => 'Default: 25px',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'tmq_typography_blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_banner_title_font',
        'label'       => 'Banner Title Font Size',
        'desc'        => 'Default: 34px',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'tmq_typography_banner',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_banner_subtitle_font',
        'label'       => 'Banner Sub-Title Font Size',
        'desc'        => 'Default: 16px',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'tmq_typography_banner',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_banner_breadcrumb_font',
        'label'       => 'BreadCrumb Font Size',
        'desc'        => 'Default: 13px',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'tmq_typography_banner',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_menu_webfont',
        'label'       => 'Menu font (All Levels)',
        'desc'        => '',
        'std'         => '',
        'type'        => 'googlefonts-select-small',
        'section'     => 'tmq_typography_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_menu_fontsize',
        'label'       => 'Menu Font Size',
        'desc'        => 'Default: 16px - Minimum 11px - Maximum 24px',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'tmq_typography_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_menu_l2_fontsize',
        'label'       => 'SUB Menu Font Size',
        'desc'        => 'Default: 13px - Minimum 11px - Maximum 24px',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'tmq_typography_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_customsidebars',
        'label'       => 'Custom Sidebars',
        'desc'        => 'List of custom sidebars',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'tmq_sidebars_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'settings'    => array(
          array(
            'id'          => 'tmq_sidebarhelper',
            'label'       => 'SideBarHelper',
            'desc'        => 'Enter sidebar name in the above field.',
            'std'         => '',
            'type'        => 'textblock',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
        )
      ),
      array(
        'id'          => 'tmq_googleanalytics',
        'label'       => 'Google Analytics',
        'desc'        => 'Enter your Google Analytics tracking code here. (Sign up here: http://analytics.google.com/). This service will provide you complete statistics about your website.',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'tmq_3rd_party',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	  
      array(
        'id'          => 'tmq_def_woo_sidebar_position',
        'label'       => 'Shop Page Layout',
        'desc'        => 'Choose default position of sidebar in shop page layout.',
        'std'         => 'tmq_rightsidebar',
        'type'        => 'radio-image',
        'section'     => 'tmq_woocommerce_sec',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_rightsidebar',
            'label'       => 'Right Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_right_105.png'
          ),
          array(
            'value'       => 'tmq_leftsidebar',
            'label'       => 'Left Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_left_105.png'
          ),
          array(
            'value'       => 'tmq_fullwidth',
            'label'       => 'No Sidebar (Full Width)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_full_width_105.png'
          )
        ),
      ),
      array(
        'id'          => 'tmq_woo_left_sidebar',
        'label'       => 'Left Sidebar',
        'desc'        => 'Choose the sidebar to show on shop page with left sidebar.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_woocommerce_sec',
        'rows'        => '',
        'post_type'   => '',		
		'condition'   => 'tmq_def_woo_sidebar_position:is(tmq_leftsidebar)',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_woo_right_sidebar',
        'label'       => 'Right Sidebar',
        'desc'        => 'Choose the sidebar to show on shop page with right sidebar.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_woocommerce_sec',
        'rows'        => '',
        'post_type'   => '',		
		'condition'   => 'tmq_def_woo_sidebar_position:is(tmq_rightsidebar)',
        'taxonomy'    => '',
        'class'       => ''
      ),  
	  array(
		'label'       => __('Slider Type - Banner Area Setting', 'vertikal'),
		'id'          => 'tmq_woo_slidertype',
		'type'        => 'select',
		'desc'        => __('How should this page deal with Sliders?', 'vertikal'),
		'std'         => 'tmq_text',
        'section'     => 'tmq_woocommerce_sec',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
		'choices'     => array(
			array(
				'label'        => __('None', 'vertikal'),
				'value'        => 'tmq_none'
			),
			array(
				'label'        => __('Text and Background', 'vertikal'),
				'value'        => 'tmq_text'
			),
			array(
				'label'        => __('Revolution Slider', 'vertikal'),
				'value'        => 'tmq_revolution'
			),
			array(
				'label'        => __('Flex Slider', 'vertikal'),
				'value'        => 'tmq_flex'
			)
		)
	  ),
	  array(
		'label'       => __('Shop Index Page Heading', 'vertikal'),
		'id'          => 'tmq_woo_banner_title',
		'type'        => 'text',
		'desc'        => __('The Main Title of this Page.', 'vertikal'),
		'std'         => 'Our Shop',
        'section'     => 'tmq_woocommerce_sec',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_woo_slidertype:is(tmq_text)',
		'operator'    => 'and',	
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'label'       => __('Shop Index Page Subtitle', 'vertikal'),
		'id'          => 'tmq_woo_banner_subtitle',
		'type'        => 'text',
		'desc'        => __('The second line in the banner area. A quick description about this page. Use at most 10 words.', 'vertikal'),
		'std'         => 'great products in our shop',
        'section'     => 'tmq_woocommerce_sec',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_woo_slidertype:is(tmq_text)',
		'operator'    => 'and',						
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'label'       => __('Choose Revolution Slider to Show', 'vertikal'),
		'id'          => 'tmq_woo_revolution_slider',
		'type'        => 'revslider-select',
		'desc'        => __('Choose a revolution slider which you have built previously.<br><br> This will only work if <strong>Revolution Slider</strong> is set as <strong>Slider Type</strong>.', 'vertikal'),
		'std'         => '',
        'section'     => 'tmq_woocommerce_sec',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_woo_slidertype:is(tmq_revolution)',
		'operator'    => 'and',						
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
		'label'       => __('Upload Images for Flex Slider', 'vertikal'),
		'id'          => 'tmq_woo_flex_gallery',
		'type'        => 'gallery',
		'desc'        => __('Uplad images to be used in flex slider.', 'vertikal'),
		'std'         => '',
        'section'     => 'tmq_woocommerce_sec',
		'rows'        => '',
		'post_type'   => '',
		'condition'   => 'tmq_woo_slidertype:is(tmq_flex)',
		'operator'    => 'and',						
		'taxonomy'    => '',
		'class'       => ''
	  ),
	  array(
        'id'          => 'tmq_product_sidebar_position',
        'label'       => 'Single Product Page Layout',
        'desc'        => 'Choose position of the sidebar in product page layout.',
        'std'         => 'tmq_rightsidebar',
        'type'        => 'radio-image',
        'section'     => 'tmq_woocommerce_product',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_rightsidebar',
            'label'       => 'Right Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_right_105.png'
          ),
          array(
            'value'       => 'tmq_leftsidebar',
            'label'       => 'Left Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_left_105.png'
          ),
          array(
            'value'       => 'tmq_fullwidth',
            'label'       => 'No Sidebar (Full Width)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_full_width_105.png'
          )
        ),
      ),
      array(
        'id'          => 'tmq_product_left_sidebar',
        'label'       => 'Left Sidebar',
        'desc'        => 'Choose the sidebar to show on product page with left sidebar.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_woocommerce_product',
        'rows'        => '',
        'post_type'   => '',		
		'condition'   => 'tmq_product_sidebar_position:is(tmq_leftsidebar)',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_product_right_sidebar',
        'label'       => 'Right Sidebar',
        'desc'        => 'Choose the sidebar to show on product page with right sidebar.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_woocommerce_product',
        'rows'        => '',
        'post_type'   => '',		
		'condition'   => 'tmq_product_sidebar_position:is(tmq_rightsidebar)',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'tmq_woo_category_sidebar_position',
        'label'       => 'Shop Category Page Layout',
        'desc'        => 'Choose default position of sidebar in shop category page.',
        'std'         => 'tmq_rightsidebar',
        'type'        => 'radio-image',
        'section'     => 'tmq_woocommerce_category',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'tmq_rightsidebar',
            'label'       => 'Right Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_right_105.png'
          ),
          array(
            'value'       => 'tmq_leftsidebar',
            'label'       => 'Left Sidebar',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_left_105.png'
          ),
          array(
            'value'       => 'tmq_fullwidth',
            'label'       => 'No Sidebar (Full Width)',
            'src'         => get_template_directory_uri() . '/includes/framework/images/sch_sides_full_width_105.png'
          )
        ),
      ),
      array(
        'id'          => 'tmq_woo_category_left_sidebar',
        'label'       => 'Left Sidebar',
        'desc'        => 'Choose the sidebar to show on shop category pages with left sidebar.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_woocommerce_category',
        'rows'        => '',
        'post_type'   => '',		
		'condition'   => 'tmq_woo_category_sidebar_position:is(tmq_leftsidebar)',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_woo_category_right_sidebar',
        'label'       => 'Right Sidebar',
        'desc'        => 'Choose the sidebar to show on shop category pages with right sidebar.',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'tmq_woocommerce_category',
        'rows'        => '',
        'post_type'   => '',		
		'condition'   => 'tmq_woo_category_sidebar_position:is(tmq_rightsidebar)',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'tmq_usercss',
        'label'       => 'Custom CSS',
        'desc'        => 'Put your custom CSS Codes Here.',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'tmq_rendered_code',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      )
    )
  );

  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );

  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings );
  }

}

/**
 * IMPORT EXPORT THEME OPTIONS
 */
add_action( 'init', 'register_options_pages' );

/**
 * Registers all the required admin pages.
 */
function register_options_pages() {

  // Only execute in admin & if OT is installed
  if ( is_admin() && function_exists( 'ot_register_settings' ) ) {
    // Register the pages
    ot_register_settings( 
      array(
        array( 
          'id'              => 'import_export',
          'pages'           => array(
            array(
              'id'              => 'import_export',
              'parent_slug'     => 'themes.php',
              'page_title'      => 'Theme Options Backup/Restore',
              'menu_title'      => 'Options Backup',
              'capability'      => 'edit_theme_options',
              'menu_slug'       => 'tmq-theme-backup',
              'icon_url'        => null,
              'position'        => null,
              'updated_message' => 'Options updated.',
              'reset_message'   => 'Options reset.',
              'button_text'     => 'Save Changes',
              'show_buttons'    => false,
              'screen_icon'     => 'themes',
              'contextual_help' => null,
              'sections'        => array(
				array(
                  'id'          => 'tmq_import_export',
                  'title'       => __( 'Import/Export', 'vertikal' )
                )
              ),
              'settings'        => array(
                array(
					'id'          => 'import_data_text',
					'label'       => 'Import Theme Options',
					'desc'        => __( 'Theme Options', 'vertikal' ),
					'std'         => '',
					'type'        => 'import-data',
					'section'     => 'tmq_import_export',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'class'       => ''
				  ),
				  array(
					'id'          => 'export_data_text',
					'label'       => 'Export Theme Options',
					'desc'        => __( 'Theme Options', 'vertikal' ),
					'std'         => '',
					'type'        => 'export-data',
					'section'     => 'tmq_import_export',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'class'       => ''
				  )
              )
            )
          )
        )
      )
    );
  }
}

/**
 * Import Data option type.
 *
 * @return    string
 *
 * @access    public
 * @since     2.0
 */
if ( ! function_exists( 'ot_type_import_data' ) ) {
  
  function ot_type_import_data() {
    
    echo '<form method="post" id="import-data-form">';
      
      /* form nonce */
      wp_nonce_field( 'import_data_form', 'import_data_nonce' );
        
      /* format setting outer wrapper */
      echo '<div class="format-setting type-textarea has-desc">';
        
        /* description */
        echo '<div class="description">';
          
          if ( OT_SHOW_SETTINGS_IMPORT ) echo '<p>' . __( 'Only after you\'ve imported the Settings should you try and update your Theme Options.', 'option-tree' ) . '</p>';
          
          echo '<p>' . __( 'To import your Theme Options copy and paste what appears to be a random string of alpha numeric characters into this textarea and press the "Import Theme Options" button.', 'option-tree' ) . '</p>';
          /* button */
          echo '<button class="option-tree-ui-button blue right hug-right">' . __( 'Import Theme Options', 'option-tree' ) . '</button>';
        echo '</div>';
        
        /* textarea */
        echo '<div class="format-setting-inner">';
          echo '<textarea rows="10" cols="40" name="import_data" id="import_data" class="textarea"></textarea>';
        echo '</div>';
      echo '</div>';
    echo '</form>';
    
  }
  
}

/**
 * Export Data option type.
 *
 * @return    string
 *
 * @access    public
 * @since     2.0
 */
if ( ! function_exists( 'ot_type_export_data' ) ) {
  
  function ot_type_export_data() {
    
    /* format setting outer wrapper */
    echo '<div class="format-setting type-textarea simple has-desc">';
      
      /* description */
      echo '<div class="description">';
        echo '<p>' . __( 'Export your Theme Options data by highlighting this text and doing a copy/paste into a blank .txt file. Then save the file for importing into another install of WordPress later. Alternatively, you could just paste it into the <code>OptionTree->Settings->Import</code> <strong>Theme Options</strong> textarea on another web site.', 'option-tree' ) . '</p>';
      echo '</div>';
      
      /* get theme options data */
      $data = get_option( 'option_tree' );
      $data = ! empty( $data ) ? ot_encode( serialize( $data ) ) : '';
        
      echo '<div class="format-setting-inner">';
        echo '<textarea rows="10" cols="40" name="export_data" id="export_data" class="textarea">' . $data . '</textarea>';
      echo '</div>';
    echo '</div>';
  }
}
