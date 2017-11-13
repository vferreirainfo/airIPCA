<?php
/* ==========================================================================
   Loading Option Tree Configs
   ========================================================================== */	
   
	// Optional: set 'ot_show_pages' filter to false.
	// This will hide the settings & documentation pages.
	add_filter( 'ot_show_pages', '__return_false' );
	add_filter( 'ot_show_settings_import', '__return_true' );
	add_filter( 'ot_show_settings_export', '__return_true' );
	add_filter( 'ot_show_docs', '__return_false' );
	add_filter( 'ot_show_options_ui', '__return_false' );

	// Optional: set 'ot_show_new_layout' filter to false.
	// This will hide the "New Layout" section on the Theme Options page.
	add_filter( 'ot_show_new_layout', '__return_true' );

	// Required: set 'ot_theme_mode' filter to true.
	add_filter( 'ot_theme_mode', '__return_true' );

	// Required: include OptionTree.
	load_template( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

/* ==========================================================================
   Set some dynamic css from values which are currently in option panel
   ========================================================================== */
	function filter_css_value( $value, $option_id ) {
		
		if ( $option_id == 'tmq_google_font_name' ) {
			
			return googlefontfamily('name');
			
		} elseif ( $option_id == 'tmq_google_font_size' ) {
		
			$googlefontarray = ot_get_option( 'tmq_google_webfont' );
			$googlefontsize = ( isset( $googlefontarray['font-size'] ) && 'font-size' != $googlefontarray['font-size'] ) ? $googlefontarray['font-size'] : '14px';
			return $googlefontsize;
			
		} elseif ( $option_id == 'tmq_google_font_height' ) {
			
			$googlefontarray = ot_get_option( 'tmq_google_webfont' );
			$googlefontheight = ( isset( $googlefontarray['line-height'] ) && 'line-height' != $googlefontarray['line-height'] ) ? $googlefontarray['line-height'] : '1.4';
			return $googlefontheight;
			
		} elseif ( $option_id == 'tmq_color_settings' ) {
			/* ==========================================================================
			   Unlimited Colors Setting
			   ========================================================================== */
			// Main Accent Color
			$tmq_accent_color = ot_get_option( 'tmq_accent_color' );
			if ( empty( $tmq_accent_color ) ) {
				// Fall back
				$tmq_accent_color = '#0076f9';
			}
			$tmq_rgb_array = tmq_hex2rgb( $tmq_accent_color );
			$tmq_rgb_color = 'rgb(' . $tmq_rgb_array[0] . ',' . $tmq_rgb_array[1] . ',' . $tmq_rgb_array[2] . ')';
			$tmq_rgba_09_color = 'rgba(' . $tmq_rgb_array[0] . ',' . $tmq_rgb_array[1] . ',' . $tmq_rgb_array[2] . ', 0.9)';
			$tmq_rgba_08_color = 'rgba(' . $tmq_rgb_array[0] . ',' . $tmq_rgb_array[1] . ',' . $tmq_rgb_array[2] . ', 0.8)';
			$tmq_rgba_05_color = 'rgba(' . $tmq_rgb_array[0] . ',' . $tmq_rgb_array[1] . ',' . $tmq_rgb_array[2] . ', 0.5)';
			$tmq_rgba_03_color = 'rgba(' . $tmq_rgb_array[0] . ',' . $tmq_rgb_array[1] . ',' . $tmq_rgb_array[2] . ', 0.3)';
			$tmq_rgba_01_color = 'rgba(' . $tmq_rgb_array[0] . ',' . $tmq_rgb_array[1] . ',' . $tmq_rgb_array[2] . ', 0.1)';

			$tmq_rgb_accent_color_darker = 'rgb(' . ( ( intval($tmq_rgb_array[0])-30 < 0 ) ? '0' : strval(intval($tmq_rgb_array[0])-30) ) . ',' . ( ( intval($tmq_rgb_array[1])-47 < 0 ) ? '0' : strval(intval($tmq_rgb_array[1])-47) ) . ',' . ( ( intval($tmq_rgb_array[2])-66 < 0 ) ? '0' : strval(intval($tmq_rgb_array[2])-66) ) . ')';
			$tmq_rgb_accent_color_lighter = 'rgb(' . ( ( intval($tmq_rgb_array[0])+16 < 0 ) ? '0' : strval(intval($tmq_rgb_array[0])+16) ) . ',' . ( ( intval($tmq_rgb_array[1])+22 < 0 ) ? '0' : strval(intval($tmq_rgb_array[1])+22) ) . ',' . ( ( intval($tmq_rgb_array[2])+23 < 0 ) ? '0' : strval(intval($tmq_rgb_array[2])+23) ) . ')';			
			
			// Background Color
			$tmq_backgroundcolor = ot_get_option( 'tmq_backgroundcolor' );
			if ( empty( $tmq_backgroundcolor ) ) {
				// Fall back
				$tmq_backgroundcolor = '#666666';
			}
			
			// Logo Background Color
			$tmq_logo_background = ot_get_option( 'tmq_logo_background' );
			if ( empty( $tmq_logo_background ) ) {
				// Fall back
				$tmq_logo_background = '#222222';
			}
			$tmq_rgb_logo_bg_array = tmq_hex2rgb( $tmq_logo_background );
			$tmq_rgba_logo_bg_09_color = 'rgba(' . $tmq_rgb_logo_bg_array[0] . ',' . $tmq_rgb_logo_bg_array[1] . ',' . $tmq_rgb_logo_bg_array[2] . ', 0.9)';
			
			// Menu (L1) Background Color	
			$tmq_menu_background_color = ot_get_option( 'tmq_menu_background_color' );
			if ( empty( $tmq_menu_background_color ) ) {
				// Fall back
				$tmq_menu_background_color = '#007aff';
			}
			$tmq_menu_background_color_array = tmq_hex2rgb( $tmq_menu_background_color );
			$tmq_menu_background_color_09 = 'rgba(' . $tmq_menu_background_color_array[0] . ',' . $tmq_menu_background_color_array[1] . ',' . $tmq_menu_background_color_array[2] . ', 0.9)';
			
			// Menu (L1) Text Color	
			$tmq_menu_color = ot_get_option( 'tmq_menu_color' );
			if ( empty( $tmq_menu_color ) ) {
				// Fall back
				$tmq_menu_color = '#ffffff';
			}
			
			// Menu (L2) Background Color	
			$tmq_menu_l2_background_color = ot_get_option( 'tmq_menu_l2_background_color' );
			if ( empty( $tmq_menu_l2_background_color ) ) {
				// Fall back
				$tmq_menu_l2_background_color = '#ffffff';
			}
			$tmq_menu_l2_background_color_array = tmq_hex2rgb( $tmq_menu_l2_background_color );
			$tmq_menu_l2_background_color_09 = 'rgba(' . $tmq_menu_l2_background_color_array[0] . ',' . $tmq_menu_l2_background_color_array[1] . ',' . $tmq_menu_l2_background_color_array[2] . ', 0.9)';
			
			// Menu (L2) Text Color	
			$tmq_menu_l2_color = ot_get_option( 'tmq_menu_l2_color' );
			if ( empty( $tmq_menu_l2_color ) ) {
				// Fall back
				$tmq_menu_l2_color = '#646464';
			}		
			
			// Menu (L2) Text Hover Color	
			$tmq_menu_l2_hover_color = ot_get_option( 'tmq_menu_l2_hover_color' );
			if ( empty( $tmq_menu_l2_hover_color ) ) {
				// Fall back
				$tmq_menu_l2_hover_color = '#000000';
			}

			// Top Bar Background Color
			$tmq_topbar_background_color = ot_get_option( 'tmq_topbar_background_color' );
			if ( empty( $tmq_topbar_background_color ) ) {
				// Fall back
				$tmq_topbar_background_color = '#ffffff';
			}
			$tmq_topbar_background_color_array = tmq_hex2rgb( $tmq_topbar_background_color );
			$tmq_topbar_background_color_08 = 'rgba(' . $tmq_topbar_background_color_array[0] . ',' . $tmq_topbar_background_color_array[1] . ',' . $tmq_topbar_background_color_array[2] . ', 0.8)';
		
			// Top Bar Text Color
			$tmq_topbar_color = ot_get_option( 'tmq_topbar_color' );
			if ( empty( $tmq_topbar_color ) ) {
				// Fall back
				$tmq_topbar_color = '#253135';
			}
			
			// Footer Background Color
			$tmq_footer_background_color = ot_get_option( 'tmq_footer_background_color' );
			if ( empty( $tmq_footer_background_color ) ) {
				// Fall back
				$tmq_footer_background_color = '#ffffff';
			}	
			
			// Copyright Background Color
			$tmq_copyright_background_color = ot_get_option( 'tmq_copyright_background_color' );
			if ( empty( $tmq_copyright_background_color ) ) {
				// Fall back
				$tmq_copyright_background_color = 'inherit';
			}				
			
			// ToggleBar Background Color
			$tmq_toggle_background = ot_get_option( 'tmq_toggle_background' );
			if ( empty( $tmq_toggle_background ) ) {
				// Fall back
				$tmq_toggle_background = '#303030';
			}		
			
			// ToggleBar Text Color
			$tmq_toggle_color = ot_get_option( 'tmq_toggle_color' );
			if ( empty( $tmq_toggle_color ) ) {
				// Fall back
				$tmq_toggle_color = '#dbdbdb';
			}		
			
			// ToggleBar Heading Color
			$tmq_toggle_header_color = ot_get_option( 'tmq_toggle_header_color' );
			if ( empty( $tmq_toggle_header_color ) ) {
				// Fall back
				$tmq_toggle_header_color = '#ffffff';
			}
			
			// Content Area Background Color
			$tmq_page_background_color = ot_get_option( 'tmq_page_background_color' );
			if ( empty( $tmq_page_background_color ) ) {
				// Fall back
				$tmq_page_background_color = '#ffffff';
			}	
			
			// Under Menu Sidebar Opacity Level
			$tmq_undermenu_opacity = ot_get_option( 'tmq_undermenu_opacity' );
			if ( empty( $tmq_undermenu_opacity ) ) {
				// Fall back
				$tmq_undermenu_opacity = '0.96';
			} else {
				if ( is_numeric( $tmq_undermenu_opacity ) ) {
					$tmq_undermenu_opacity = $tmq_undermenu_opacity / 100;
				} else {
					$tmq_undermenu_opacity = '0.96';
				}
			}
			
			$tmq_color_settings = 
			'/* =========================================== ' . "\n" .
			'    Unlimited Colors Setting                   ' . "\n" .
			' =========================================== */' . "\n" .
			'' . "\n" .
			'.header-logo {' . "\n" .
			'	background-color: '. $tmq_rgba_logo_bg_09_color .';' . "\n" .
			'}' . "\n" .
			'#background-container {' . "\n" .
			'	background-color: '. $tmq_backgroundcolor .';' . "\n" .
			'}' . "\n" .
			'.woocommerce span.onsale, .woocommerce-page span.onsale, .services-post > a, .hover-item ul li a, .accord-content span.image-content, ul.tab-links li a:hover, ul.tab-links li a.active, .footer-line, .carousel-control.right:hover, .carousel-control.left:hover, .tp-rightarrow.default, .tp-leftarrow.default, .tp-bullets.simplebullets.round .bullet.selected:after, .tp-bullets.simplebullets.round .bullet:hover:after, .modern_medium_light, .meter > span, .staf-social li a:hover, .pricing-table.standard li, #wp-calendar caption, table thead, .flex-direction-nav .flex-next, .flex-direction-nav .flex-prev, .flex-control-paging li a:hover:before, .flex-control-paging li a.flex-active:before, .comment-content a.reply-comment, .wpcf7 input[type="submit"], .comment-form input[type="submit"], .author-buttons .biography, .author-buttons li:hover, .awesome-icons, .review-box .review-overall-rating, .list-rating .review-overall-rating, ul.page-numbers li a.active, ul.page-numbers li a:hover, ul.page-numbers li span, ul.filter li a.active, ul.filter li a:hover, .tmq_button, .tmq_loading .wBall .wInnerBall {' . "\n" .
			'	background-color: '. $tmq_accent_color .';' . "\n" .
			'	background-color: '. $tmq_rgb_color .';' . "\n" .
			'}' . "\n" .
			'.top-line p span i, ul.social-icons li a i, a.read-more, a.read-more i, .accord-title h5 i, ul.tab-links li a i, .footer-widgets h4, ul.contact-list li a:hover i, div#footer-contact button, div#footer-contact button i, li.drop > a span:after, .footer-line a.go-top:before, .skills-progress p span, .staf-social li a i, .pricing-table.standard li:first-child p, .pricing-table.standard li:first-child span, .pricing-table.standard li a, .drop-caps p span, .drop-caps > span.icon, blockquote p, .sidebar .tagcloud a:hover, .footer-widgets .tagcloud a:hover, .tabs-widget ul.tab-links li a:hover, .tabs-widget ul.tab-links li a.active, .widget_search button i, .tabs-widget .tab-content ul li h6 a:hover, .widget a:hover, .widget_recent_comments ul .url, #wp-calendar tbody td a, a, a:hover, a:focus, .author-buttons .fa, .tag-list li a, .tag-list li a i, .review-box .review-rate, .list-rating .review-rate, .portfolio-navigation a:hover i, h1.head-404, .work-post-content span, .tmq_button.light, .tmq-list ul.posts-list li h6 a:hover, .widget .current_page_item a, .undernav-sidebar .widget h4 {' . "\n" .
			'	color: '. $tmq_accent_color .';' . "\n" .
			'}' . "\n" .
			'.woocommerce .products a.button  {' . "\n" .
			'	color: '. $tmq_accent_color .' !important;' . "\n" .
			'}' . "\n" .
			'.work-post-content span {' . "\n" .
			'	color: '. $tmq_rgb_accent_color_darker .';' . "\n" .
			'}' . "\n" .
			'.hover-box {' . "\n" .
			'	background-color: '. $tmq_accent_color .';' . "\n" .
			'	background-color: '. $tmq_rgba_08_color .';' . "\n" .
			'}' . "\n" .
			'.carousel-control.right, .carousel-control.left {' . "\n" .
			'	background-color: '. $tmq_accent_color .';' . "\n" .
			'	background-color: '. $tmq_rgba_03_color .';' . "\n" .
			'}' . "\n" .			
			'.woocommerce .products a.button, .services-post > a:hover:after, .services-post > a:after, a.read-more, ul.contact-list li a:hover, div#footer-contact input[type="text"]:focus, div#footer-contact input[type="email"]:focus, div#footer-contact textarea:focus, ul.contact-list li a:hover:after, .tp-bullets.simplebullets.round .bullet, .tp-bullets.simplebullets.round .bullet:after, .staf-social li a, .drop-caps > span.icon, blockquote, .sidebar .tagcloud a:hover, .footer-widgets .tagcloud a:hover, .widget_search input[type="search"]:focus, .flex-control-paging li a, .flex-control-paging li a:before, .wpcf7 input[type="text"]:focus, .wpcf7 input[type="email"]:focus, .wpcf7 textarea:focus, .tag-list li a, .review-box .review-overall, .tmq_button, .tmq_button.light { ' . "\n" .
			'	border-color: '. $tmq_accent_color .';' . "\n" .
			'}' . "\n" .			
			'.main-menu > li > a, a.elemadded { ' . "\n" .
			'	background-color: '. $tmq_menu_background_color .';' . "\n" .
			'	background-color: '. $tmq_menu_background_color_09 .';' . "\n" .
			'	color: '. $tmq_menu_color .';' . "\n" .
			'}' . "\n" .			
			'.main-menu > li > a:after { ' . "\n" .
			'	background-color: '. $tmq_menu_background_color .';' . "\n" .
			'}' . "\n" .					
			'.content-sections, .flexslider { ' . "\n" .
			'	background-color: '. $tmq_page_background_color .';' . "\n" .
			'}' . "\n" .						
			'footer { ' . "\n" .
			'	background-color: '. $tmq_footer_background_color .';' . "\n" .
			'}' . "\n" .							
			'.footer-line { ' . "\n" .
			'	background-color: '. $tmq_copyright_background_color .';' . "\n" .
			'}' . "\n" .						
			'.tmq_toggle_bar .tmq_toggle_content { ' . "\n" .
			'	background-color: '. $tmq_toggle_background .';' . "\n" .
			'}' . "\n" .					
			'.tmq_toggle_bar .tmq_toggle_switch { ' . "\n" .
			'	border-top-color: '. $tmq_toggle_background .';' . "\n" .
			'}' . "\n" .					
			'.toggle-widgets, .toggle-widgets p { ' . "\n" .
			'	color: '. $tmq_toggle_color .';' . "\n" .
			'}' . "\n" .					
			'.toggle-widgets h1, .toggle-widgets h2, .toggle-widgets h3, .toggle-widgets h4, .toggle-widgets h5, .toggle-widgets h6 { ' . "\n" .
			'	color: '. $tmq_toggle_header_color .';' . "\n" .
			'}' . "\n" .
			'.top-line { ' . "\n" .
			'	background-color: '. $tmq_topbar_background_color .';' . "\n" .
			'	background-color: '. $tmq_topbar_background_color_08 .';' . "\n" .
			'}' . "\n" .						
			'.top-line p span, .top-line p span a.header-contact-link { ' . "\n" .
			'	color: '. $tmq_topbar_color .';' . "\n" .
			'}' . "\n" .			
			'ul.drop-down li a { ' . "\n" .
			'	background-color: '. $tmq_menu_l2_background_color .';' . "\n" .
			'	background-color: '. $tmq_menu_l2_background_color_09 .';' . "\n" .
			'	color: '. $tmq_menu_l2_color .';' . "\n" .
			'}' . "\n" .			
			'ul.drop-down li a:hover { ' . "\n" .
			'	background-color: '. $tmq_menu_l2_background_color .';' . "\n" .
			'	color: '. $tmq_menu_l2_hover_color .';' . "\n" .
			'}' . "\n" .	
			'.pricing-table.standard li { ' . "\n" .
			'	border-color: '. $tmq_rgb_accent_color_darker .';' . "\n" .
			'}' . "\n" .	
			'.undernav-sidebar { ' . "\n" .
			'	background-color: rgba(255,255,255, '. $tmq_undermenu_opacity .');' . "\n" .
			'}' . "\n" .			
			'';
			
			// Toggle Accent Color
			$tmq_toggle_bar_custom_color_status = ot_get_option( 'tmq_toggle_bar_custom_color_status' );
			if ( $tmq_toggle_bar_custom_color_status == 'on' ) {
				$tmq_toggle_bar_custom_color = ot_get_option( 'tmq_toggle_bar_custom_color' );
			/* ==========================================================================
			   Custom Accent color for Toggle Bar Area
			   ========================================================================== */
			   $tmq_color_settings .= 
				'.tmq_toggle_bar .services-post > a, .tmq_toggle_bar .hover-item ul li a, .tmq_toggle_bar .accord-content span.image-content, .tmq_toggle_bar ul.tab-links li a:hover, .tmq_toggle_bar ul.tab-links li a.active, .tmq_toggle_bar .footer-line, .tmq_toggle_bar .carousel-control.right:hover, .tmq_toggle_bar .carousel-control.left:hover, .tmq_toggle_bar .tp-rightarrow.default, .tmq_toggle_bar .tp-leftarrow.default, .tmq_toggle_bar .tp-bullets.simplebullets.round .bullet.selected:after, .tmq_toggle_bar .tp-bullets.simplebullets.round .bullet:hover:after, .tmq_toggle_bar .modern_medium_light, .tmq_toggle_bar .meter > span, .tmq_toggle_bar .staf-social li a:hover, .tmq_toggle_bar .pricing-table.standard li, .tmq_toggle_bar #wp-calendar caption, .tmq_toggle_bar table thead, .tmq_toggle_bar .flex-direction-nav .flex-next, .tmq_toggle_bar .flex-direction-nav .flex-prev, .tmq_toggle_bar .flex-control-paging li a:hover:before, .tmq_toggle_bar .flex-control-paging li a.flex-active:before, .tmq_toggle_bar .comment-content a.reply-comment, .tmq_toggle_bar .wpcf7 input[type="submit"], .tmq_toggle_bar .comment-form input[type="submit"], .tmq_toggle_bar .author-buttons .biography, .tmq_toggle_bar .author-buttons li:hover, .tmq_toggle_bar .awesome-icons, .tmq_toggle_bar .review-box .review-overall-rating, .tmq_toggle_bar .list-rating .review-overall-rating, .tmq_toggle_bar ul.page-numbers li a.active, .tmq_toggle_bar ul.page-numbers li a:hover, .tmq_toggle_bar ul.page-numbers li span, .tmq_toggle_bar ul.filter li a.active, .tmq_toggle_bar ul.filter li a:hover, .tmq_toggle_bar .tmq_button, .tmq_toggle_bar .tmq_loading .wBall .wInnerBall {' . "\n" .
				'	background-color: '. $tmq_toggle_bar_custom_color .';' . "\n" .
				'}' . "\n" .
				'.tmq_toggle_bar .top-line p span i, .tmq_toggle_bar ul.social-icons li a i, .tmq_toggle_bar a.read-more, .tmq_toggle_bar a.read-more i, .tmq_toggle_bar .accord-title h5 i, .tmq_toggle_bar ul.tab-links li a i, .tmq_toggle_bar .footer-widgets h4, .tmq_toggle_bar ul.contact-list li a:hover i, .tmq_toggle_bar div#footer-contact button, .tmq_toggle_bar div#footer-contact button i, .tmq_toggle_bar li.drop > a span:after, .tmq_toggle_bar .footer-line a.go-top:before, .tmq_toggle_bar .skills-progress p span, .tmq_toggle_bar .staf-social li a i, .tmq_toggle_bar .pricing-table.standard li:first-child p, .tmq_toggle_bar .pricing-table.standard li:first-child span, .tmq_toggle_bar .pricing-table.standard li a, .tmq_toggle_bar .drop-caps p span, .tmq_toggle_bar .drop-caps > span.icon, .tmq_toggle_bar blockquote p, .tmq_toggle_bar .sidebar .tagcloud a:hover, .tmq_toggle_bar .footer-widgets .tagcloud a:hover, .tmq_toggle_bar .tabs-widget ul.tab-links li a:hover, .tmq_toggle_bar .tabs-widget ul.tab-links li a.active, .tmq_toggle_bar .widget_search button i, .tmq_toggle_bar .tabs-widget .tab-content ul li h6 a:hover, .tmq_toggle_bar .widget a:hover, .tmq_toggle_bar .widget_recent_comments ul .url, .tmq_toggle_bar #wp-calendar tbody td a, .tmq_toggle_bar a, .tmq_toggle_bar a:hover, .tmq_toggle_bar a:focus, .tmq_toggle_bar .author-buttons .fa, .tmq_toggle_bar .tag-list li a, .tmq_toggle_bar .tag-list li a i, .tmq_toggle_bar .review-box .review-rate, .tmq_toggle_bar .list-rating .review-rate, .tmq_toggle_bar .portfolio-navigation a:hover i, .tmq_toggle_bar h1.head-404, .tmq_toggle_bar .work-post-content span, .tmq_toggle_bar .tmq_button.light, .tmq_toggle_bar .tmq-list ul.posts-list li h6 a:hover, .tmq_toggle_bar .widget .current_page_item a {' . "\n" .
				'	color: '. $tmq_toggle_bar_custom_color .';' . "\n" .
				'}' . "\n" .
				'.tmq_toggle_bar .services-post > a:hover:after, .tmq_toggle_bar .services-post > a:after, .tmq_toggle_bar a.read-more, .tmq_toggle_bar ul.contact-list li a:hover, .tmq_toggle_bar div#footer-contact input[type="text"]:focus, .tmq_toggle_bar div#footer-contact input[type="email"]:focus, .tmq_toggle_bar div#footer-contact textarea:focus, .tmq_toggle_bar ul.contact-list li a:hover:after, .tmq_toggle_bar .tp-bullets.simplebullets.round .bullet, .tmq_toggle_bar .tp-bullets.simplebullets.round .bullet:after, .tmq_toggle_bar .staf-social li a, .tmq_toggle_bar .drop-caps > span.icon, .tmq_toggle_bar blockquote, .tmq_toggle_bar .sidebar .tagcloud a:hover, .tmq_toggle_bar .footer-widgets .tagcloud a:hover, .tmq_toggle_bar .widget_search input[type="search"]:focus, .tmq_toggle_bar .flex-control-paging li a, .tmq_toggle_bar .flex-control-paging li a:before, .tmq_toggle_bar .wpcf7 input[type="text"]:focus, .tmq_toggle_bar .wpcf7 input[type="email"]:focus, .tmq_toggle_bar .wpcf7 textarea:focus, .tmq_toggle_bar .tag-list li a, .tmq_toggle_bar .review-box .review-overall, .tmq_toggle_bar .tmq_button, .tmq_toggle_bar .tmq_button.light { ' . "\n" .
				'	border-color: '. $tmq_toggle_bar_custom_color .';' . "\n" .
				'}' . "\n" .
				'';
			}
			
			/* ==========================================================================
			   Logo Settings - Top and Bottom Padding
			   ========================================================================== */
			$tmq_logo_padding = ot_get_option( 'tmq_logo_padding' );
			if ( empty( $tmq_logo_padding ) ) { 
				$tmq_logo_padding = '48';
			}
			$tmq_color_settings .=
			'/* Logo Positioning */' . "\n" .
			'	.header-logo {' . "\n" .
			'		padding-top: ' . $tmq_logo_padding . 'px;' . "\n" .
			'		padding-bottom: ' . $tmq_logo_padding . 'px;' . "\n" .
			'	}' . "\n" .
			'';		
			
			/* ==========================================================================
			   Banner Area - Top and Bottom Padding
			   ========================================================================== */
			$tmq_banner_padding = ot_get_option( 'tmq_banner_padding' );
			if ( empty( $tmq_banner_padding ) ) { 
				$tmq_banner_padding = '41';
			}
			$tmq_color_settings .=
			'/* Banner Area Dynamic Height Control With Padding */' . "\n" .
			'	#page-banner {' . "\n" .
			'		padding-top: ' . $tmq_banner_padding . 'px;' . "\n" .
			'		padding-bottom: ' . $tmq_banner_padding . 'px;' . "\n" .
			'	}' . "\n" .
			'';	
			
			/* ==========================================================================
			   Default Paragraph Font Color
			   ========================================================================== */
			$tmq_page_p_color = ot_get_option( 'tmq_page_p_color' );
			if ( empty( $tmq_page_p_color ) ) { 
				$tmq_page_p_color = '#9a9a9a';
			}
			$tmq_color_settings .=
			'/* Set default font color for all paragraphs */' . "\n" .
			'	p, ul:not([class]) li, ol:not([class]) li {' . "\n" .
			'		color: ' . $tmq_page_p_color . ';' . "\n" .
			'	}' . "\n" .
			'';
			
			/* ==========================================================================
			   Menu Settings - Sticky Menu
			   ========================================================================== */
			$tmq_sticky_menu = ot_get_option( 'tmq_sticky_menu' );
			if ( empty( $tmq_sticky_menu ) ) { 
				$tmq_sticky_menu = 'on';
			}
			if ( $tmq_sticky_menu == 'off' ) {
				// We need this only if it's disabled
				$tmq_color_settings .=
				'/* Disable Sticky Menu */' . "\n" .
				'	header {' . "\n" .
				'		position: absolute;' . "\n" .
				'	}' . "\n" .
				'	.admin-bar header {' . "\n" .
				'		top: 45px;' . "\n" .
				'	}' . "\n" .
				'';
			}
			
			/* ==========================================================================
			   Banner Area Settings
			   ========================================================================== */
			$tmq_banner_bg_type = ot_get_option( 'tmq_banner_bg_type' );
			if ( empty( $tmq_banner_bg_type ) ) { 
				// Set default
				$tmq_banner_bg_type = 'tmq_gradient';
			}
			
			if ( $tmq_banner_bg_type == 'tmq_color' ) {
				// Solid BG Color
				$tmq_banner_background_color = ot_get_option( 'tmq_banner_background_color' );
				if ( empty( $tmq_banner_background_color ) ) {
					$tmq_banner_background_color = '#666666';
				}
				$tmq_banner_background_css_code = '
					background: '. $tmq_banner_background_color .';
				';
			} elseif ( $tmq_banner_bg_type == 'tmq_gradient' ) {
				// Gradient BG Color
				$tmq_banner_background_gradient_1 = ot_get_option( 'tmq_banner_background_gradient_1' );
				if ( empty( $tmq_banner_background_gradient_1 ) ) {
					$tmq_banner_background_gradient_1 = '#666666';
				}				
				$tmq_banner_background_gradient_2 = ot_get_option( 'tmq_banner_background_gradient_2' );
				if ( empty( $tmq_banner_background_gradient_2 ) ) {
					$tmq_banner_background_gradient_2 = '#999999';
				}
				$tmq_banner_background_css_code = '
					background: -moz-linear-gradient(left, '. $tmq_banner_background_gradient_1 .' 0%, '. $tmq_banner_background_gradient_2 .' 100%);
					background: -webkit-gradient(left top, right top, color-stop(0%, '. $tmq_banner_background_gradient_1 .'), color-stop(100%, '. $tmq_banner_background_gradient_2 .'));
					background: -webkit-linear-gradient(left, '. $tmq_banner_background_gradient_1 .' 0%, '. $tmq_banner_background_gradient_2 .' 100%);
					background: -o-linear-gradient(left, '. $tmq_banner_background_gradient_1 .' 0%, '. $tmq_banner_background_gradient_2 .' 100%);
					background: -ms-linear-gradient(left, '. $tmq_banner_background_gradient_1 .' 0%, '. $tmq_banner_background_gradient_2 .' 100%);
					background: linear-gradient(to right, '. $tmq_banner_background_gradient_1 .' 0%, '. $tmq_banner_background_gradient_2 .' 100%);
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\''. $tmq_banner_background_gradient_1 .'\', endColorstr=\''. $tmq_banner_background_gradient_2 .'\', GradientType=1 );
				';
			} elseif ( $tmq_banner_bg_type == 'tmq_image' ) {
				// Background Image
				$tmq_banner_background_image = ot_get_option( 'tmq_banner_background_image' );
				$tmq_banner_background_css_code = '
					background: url(\'' . $tmq_banner_background_image . '\');
					background-size: cover;
				';				
			}
			$tmq_color_settings .=
			'/* Banner Area BG Setting */' . "\n" .
			'	#page-banner {' . "\n" . $tmq_banner_background_css_code . "\n" .
			'	}' . "\n" .
			'';
					
			/* ==========================================================================
			   Typography Settings - Paragraphs
			   ========================================================================== */				
			$tmq_paragraph_font = googlefontfamily('name', 'tmq_paragraph_font');
			if ( empty( $tmq_paragraph_font ) ) { 
				$tmq_paragraph_font = 'open sans';
			}
			$tmq_paragraph_font_array = ot_get_option( 'tmq_paragraph_font' );
			$tmq_paragraph_fontsize = ( isset( $tmq_paragraph_font_array['font-size'] ) && 'font-size' != $tmq_paragraph_font_array['font-size'] && !empty( $tmq_paragraph_font_array['font-size'] ) ) ? $tmq_paragraph_font_array['font-size'] : '13px';
			$tmq_paragraph_lineheight = ( isset( $tmq_paragraph_font_array['line-height'] ) && 'line-height' != $tmq_paragraph_font_array['line-height'] && !empty( $tmq_paragraph_font_array['line-height'] ) ) ? $tmq_paragraph_font_array['line-height'] : '18px';
			$tmq_color_settings .=
			'/* Default Paragraph Font Setting */' . "\n" .
			'	* {' . "\n" .
			'		font-family: "' . $tmq_paragraph_font . '", "sans serif";' . "\n" .
			'	}' . "\n" .
			'	p, ul:not([class]) li, ol:not([class]) li {' . "\n" .
			'		font-family: "' . $tmq_paragraph_font . '", "sans serif";' . "\n" .
			'		font-size: ' . $tmq_paragraph_fontsize . ';' ."\n" .
			'		line-height: ' . $tmq_paragraph_lineheight . ';' ."\n" .
			'	}' . "\n" .
			'';				
			
			/* ==========================================================================
			   Menu Settings - Fonts and ...
			   ========================================================================== */			
			// Get Menu Font Settings
			$tmq_menu_fontfamily = googlefontfamily('name', 'tmq_menu_webfont');
			if ( empty( $tmq_menu_fontfamily ) ) { 
				$tmq_menu_fontfamily = 'open sans';
			}
			
			// Menu 1st Level Font Size
			$tmq_menu_fontsize = ot_get_option( 'tmq_menu_fontsize' );
			if ( is_array( $tmq_menu_fontsize ) ) {
				// Validate it
				if ( is_numeric( $tmq_menu_fontsize[0] ) ) {
					$tmq_menu_fontsize_number = $tmq_menu_fontsize[0];
			
					// Set a minumum and maximum number
					if ( $tmq_menu_fontsize[0] > 24 ) {
						$tmq_menu_fontsize_number = 24;
					} elseif ( $tmq_menu_fontsize[0] < 11 ) {
						$tmq_menu_fontsize_number = 11;
					}						

				} else {
					$tmq_menu_fontsize_number = 16;
				}

				// Check unit is set properly
				if ( empty( $tmq_menu_fontsize[1] ) ) {
					$tmq_menu_fontsize_unit = 'px';
				} else {
					$tmq_menu_fontsize_unit = $tmq_menu_fontsize[1];
				}
			}
			   
			// Menu 2nd+ Level Font Size
			$tmq_menu_l2_fontsize = ot_get_option( 'tmq_menu_l2_fontsize' );
			if ( is_array( $tmq_menu_l2_fontsize ) ) {
				// Validate it
				if ( is_numeric( $tmq_menu_l2_fontsize[0] ) ) {
					$tmq_menu_l2_fontsize_number = $tmq_menu_l2_fontsize[0];
					
					// Set a minumum and maximum number
					if ( $tmq_menu_l2_fontsize[0] > 24 ) {
						$tmq_menu_l2_fontsize_number = 24;
					} elseif ( $tmq_menu_l2_fontsize[0] < 11 ) {
						$tmq_menu_l2_fontsize_number = 11;
					}	
					
				} else {
					$tmq_menu_l2_fontsize_number = 14;
				}
				
				// Check unit is set properly
				if ( empty( $tmq_menu_l2_fontsize[1] ) ) {
					$tmq_menu_l2_fontsize_unit = 'px';
				} else {
					$tmq_menu_l2_fontsize_unit = $tmq_menu_l2_fontsize[1];
				}
			}
			
			// Get menu width
			$tmq_menu_width = ot_get_option( 'tmq_menu_width' );
			if ( !is_numeric( $tmq_menu_width ) ) {
				// Validate it
				$tmq_menu_width = 270;
			}
			// Get submenu width
			$tmq_menu_l2_width = ot_get_option( 'tmq_menu_l2_width' );
			if ( !is_numeric( $tmq_menu_l2_width ) ) {
				// Validate it
				$tmq_menu_l2_width = 220;
			}
			
			// Get menu padding
			$tmq_menu_padding = ot_get_option( 'tmq_menu_padding' );
			if ( !is_numeric( $tmq_menu_padding ) ) {
				// Validate it
				$tmq_menu_padding = 15;
			}
			// Get submenu padding
			$tmq_menu_l2_padding = ot_get_option( 'tmq_menu_l2_padding' );
			if ( !is_numeric( $tmq_menu_l2_padding ) ) {
				// Validate it
				$tmq_menu_l2_padding = 18;
			}	
			
			// Get Top Menu Text Transformation
			$tmq_menu_transform = ot_get_option( 'tmq_menu_transform' );
			if ( empty($tmq_menu_transform) ) {
				// Validate it
				$tmq_menu_transform = 'tmq_uppercase';
			}
			
			// Get Sub Menu Text Transformation
			$tmq_submenu_transform = ot_get_option( 'tmq_submenu_transform' );
			if ( empty($tmq_submenu_transform) ) {
				// Validate it
				$tmq_submenu_transform = 'tmq_capitalize';
			}
			
			// Validate Top Level Menu Transform
			switch ( $tmq_menu_transform ) {
				case "tmq_lowercase":
					$tmq_menu_transform = 'lowercase';
					break;
				case "tmq_capitalize":
					$tmq_menu_transform = 'capitalize';
					break;
				case "tmq_none":
					$tmq_menu_transform = 'none';
					break;
				default:
					$tmq_menu_transform = 'uppercase';
					break;
			}
			
			// Validate Sub Level Menu Transform
			switch ( $tmq_submenu_transform ) {
				case "tmq_lowercase":
					$tmq_submenu_transform = 'lowercase';
					break;
				case "tmq_uppercase":
					$tmq_submenu_transform = 'uppercase';
					break;
				case "tmq_none":
					$tmq_submenu_transform = 'none';
					break;
				default:
					$tmq_submenu_transform = 'capitalize';
					break;
			}
			
			$tmq_color_settings .=
			'/* Menu Font Setting */' . "\n" .
			'	.main-menu > li > a, .main-menu > li > a span, ul.drop-down li a,  ul.drop-down li a span {' . "\n" .
			'		font-family: "' . $tmq_menu_fontfamily . '", "sans serif";' . "\n" .
			'	}' . "\n" .
			'	.main-menu > li > a {' . "\n" .
			'		font-size: ' . $tmq_menu_fontsize_number . $tmq_menu_fontsize_unit . ';' ."\n" .
			'	}' . "\n" .
			'	ul.drop-down li a {' . "\n" .
			'		font-size: ' . $tmq_menu_l2_fontsize_number . $tmq_menu_l2_fontsize_unit . ';' ."\n" .
			'	}' . "\n" .
			'	ul.drop-down {' . "\n" .
			'		width: ' . $tmq_menu_l2_width . 'px;' ."\n" .
			'	}' . "\n" .
			'	header {' . "\n" .
			'		width: ' . $tmq_menu_width . 'px;' ."\n" .
			'	}' . "\n" .
			'	.inner-content {' . "\n" .
			'		padding-left: ' . $tmq_menu_width . 'px;' ."\n" .
			'	}' . "\n" .
			'	.main-menu > li > a {' . "\n" .
			'		padding-top: ' . $tmq_menu_padding . 'px;' ."\n" .
			'		padding-bottom: ' . $tmq_menu_padding . 'px;' ."\n" .
			'	}' . "\n" .
			'	ul.drop-down li a {' . "\n" .
			'		padding-top: ' . $tmq_menu_l2_padding . 'px;' ."\n" .
			'		padding-bottom: ' . $tmq_menu_l2_padding . 'px;' ."\n" .
			'	}' . "\n" .
			'	.main-menu > li > a {' . "\n" .
			'		text-transform: ' . $tmq_menu_transform . ';' ."\n" .
			'	}' . "\n" .
			'	ul.drop-down li a {' . "\n" .
			'		text-transform: ' . $tmq_submenu_transform . ';' ."\n" .
			'	}' . "\n" .
			'';	
			
			/* ==========================================================================
			   Typography - Blog ...
			   ========================================================================== */	
			   
			// Blog List Header Font Size
			$tmq_blog_list_header_font = ot_get_option( 'tmq_blog_list_header_font' );
			if ( is_array( $tmq_blog_list_header_font ) ) {
				// Validate it
				if ( is_numeric( $tmq_blog_list_header_font[0] ) ) {
					$tmq_blog_list_header_fontsize_number = $tmq_blog_list_header_font[0];

					// Set a minumum and maximum number
					if ( $tmq_blog_list_header_font[0] > 34 ) {
						$tmq_blog_list_header_fontsize_number = 34;
					} elseif ( $tmq_blog_list_header_font[0] < 11 ) {
						$tmq_blog_list_header_fontsize_number = 11;
					}	
					
				} else {
					$tmq_blog_list_header_fontsize_number = 18;
				}
			
				// Check unit is set properly
				if ( empty( $tmq_blog_list_header_font[1] ) ) {
					$tmq_blog_list_header_fontsize_unit = 'px';
				} else {
					$tmq_blog_list_header_fontsize_unit = $tmq_blog_list_header_font[1];
				}
			}

			// Blog Single Header Font Size
			$tmq_blog_header_font = ot_get_option( 'tmq_blog_header_font' );
			if ( is_array( $tmq_blog_header_font ) ) {
				// Validate it
				if ( is_numeric( $tmq_blog_header_font[0] ) ) {
					$tmq_blog_header_fontsize_number = $tmq_blog_header_font[0];
					
					// Set a minumum and maximum number
					if ( $tmq_blog_header_font[0] > 48 ) {
						$tmq_blog_header_fontsize_number = 48;
					} elseif ( $tmq_blog_header_font[0] < 11 ) {
						$tmq_blog_header_fontsize_number = 11;
					}	
					
				} else {
					$tmq_blog_header_fontsize_number = 25;
				}

				// Check unit is set properly
				if ( empty( $tmq_blog_header_font[1] ) ) {
					$tmq_blog_header_fontsize_unit = 'px';
				} else {
					$tmq_blog_header_fontsize_unit = $tmq_blog_header_font[1];
				}
			}
			
			$tmq_color_settings .=
			'/* Blog Typography Setting */' . "\n" .
			'	.news-item h2 {' . "\n" .
			'		font-size: ' . $tmq_blog_list_header_fontsize_number . $tmq_blog_list_header_fontsize_unit . ';' ."\n" .
			'	}' . "\n" .
			'	.single-post-content h1 {' . "\n" .
			'		font-size: ' . $tmq_blog_header_fontsize_number . $tmq_blog_header_fontsize_unit . ';' ."\n" .
			'	}' . "\n" .
			'';	

			/* ==========================================================================
			   Typography - Banner ...
			   ========================================================================== */	
			   
			// Banner Title Font Size
			$tmq_banner_title_font = ot_get_option( 'tmq_banner_title_font' );
			if ( is_array( $tmq_banner_title_font ) ) {
				// Validate it
				if ( is_numeric( $tmq_banner_title_font[0] ) ) {
					$tmq_banner_title_fontsize_number = $tmq_banner_title_font[0];
			
					// Set a minumum and maximum number
					if ( $tmq_banner_title_font[0] > 48 ) {
						$tmq_banner_title_fontsize_number = 48;
					} elseif ( $tmq_banner_title_font[0] < 11 ) {
						$tmq_banner_title_fontsize_number = 11;
					}	
				
				} else {
					$tmq_banner_title_fontsize_number = 34;
				}

				// Check unit is set properly
				if ( empty( $tmq_banner_title_font[1] ) ) {
					$tmq_banner_title_fontsize_unit = 'px';
				} else {
					$tmq_banner_title_fontsize_unit = $tmq_banner_title_font[1];
				}
			}

			// Banner Sub-Title Font Size
			$tmq_banner_subtitle_font = ot_get_option( 'tmq_banner_subtitle_font' );
			if ( is_array( $tmq_banner_subtitle_font ) ) {
				// Validate it
				if ( is_numeric( $tmq_banner_subtitle_font[0] ) ) {
					$tmq_banner_subtitle_fontsize_number = $tmq_banner_subtitle_font[0];
					
					// Set a minumum and maximum number
					if ( $tmq_banner_subtitle_font[0] > 38 ) {
						$tmq_banner_subtitle_fontsize_number = 38;
					} elseif ( $tmq_banner_subtitle_font[0] < 9 ) {
						$tmq_banner_subtitle_fontsize_number = 9;
					}

				} else {
					$tmq_banner_subtitle_fontsize_number = 16;
				}

				// Check unit is set properly
				if ( empty( $tmq_banner_subtitle_font[1] ) ) {
					$tmq_banner_subtitle_fontsize_unit = 'px';
				} else {
					$tmq_banner_subtitle_fontsize_unit = $tmq_banner_subtitle_font[1];
				}
			}
			
			// BreadCrumb Font Size
			$tmq_banner_breadcrumb_font = ot_get_option( 'tmq_banner_breadcrumb_font' );
			if ( is_array( $tmq_banner_breadcrumb_font ) ) {
				// Validate it
				if ( is_numeric( $tmq_banner_breadcrumb_font[0] ) ) {
					$tmq_banner_breadcrumb_fontsize_number = $tmq_banner_breadcrumb_font[0];
			
					// Set a minumum and maximum number
					if ( $tmq_banner_breadcrumb_font[0] > 32 ) {
						$tmq_banner_breadcrumb_fontsize_number = 32;
					} elseif ( $tmq_banner_breadcrumb_font[0] < 8 ) {
						$tmq_banner_breadcrumb_fontsize_number = 8;
					}						

				} else {
					$tmq_banner_breadcrumb_fontsize_number = 13;
				}

				// Check unit is set properly
				if ( empty( $tmq_banner_breadcrumb_font[1] ) ) {
					$tmq_banner_breadcrumb_fontsize_unit = 'px';
				} else {
					$tmq_banner_breadcrumb_fontsize_unit = $tmq_banner_breadcrumb_font[1];
				}
			}			
			
			$tmq_color_settings .=
			'/* Banner Area Typography Setting */' . "\n" .
			'	#page-banner h1, #page-banner span {' . "\n" .
			'		font-size: ' . $tmq_banner_title_fontsize_number . $tmq_banner_title_fontsize_unit . ';' ."\n" .
			'	}' . "\n" .
			'	#page-banner p {' . "\n" .
			'		font-size: ' . $tmq_banner_subtitle_fontsize_number . $tmq_banner_subtitle_fontsize_unit . ';' ."\n" .
			'	}' . "\n" .
			'	ul.breadcrumb {' . "\n" .
			'		font-size: ' . $tmq_banner_breadcrumb_fontsize_number . $tmq_banner_breadcrumb_fontsize_unit . ';' ."\n" .
			'	}' . "\n" .
			'';	
			
			/* ==========================================================================
			   Breadcrumb Settings
			   ========================================================================== */
			$tmq_brcr_format = ot_get_option( 'tmq_brcr_format' );
			if ( $tmq_brcr_format == 'tmq_none' ) { 
				$tmq_brcr_format = 'none';
			} elseif ( $tmq_brcr_format == 'tmq_uppercase' ) { 
				$tmq_brcr_format = 'uppercase';
			} elseif ( $tmq_brcr_format == 'tmq_capitalize' ) { 
				$tmq_brcr_format = 'capitalize';
			} else {
				// This is our preferred setting so set it as default!
				$tmq_brcr_format = 'lowercase';
			}
			
			$tmq_color_settings .=
			'/* Breadcrumb text format */' . "\n" .
			'	ul.breadcrumb {' . "\n" .
			'		text-transform: ' . $tmq_brcr_format . "\n" .
			'	}' . "\n" .
			'';			

			/* ==========================================================================
			   Typography Settings - H1 to H6
			   ========================================================================== */				
			// H1 to H6 Font Family
			$tmq_heading_webfont = googlefontfamily('name', 'tmq_heading_webfont');
			if ( empty( $tmq_heading_webfont ) ) { 
				$tmq_heading_webfont = 'open sans';
			}

			// H1 Tag
			$tmq_h1_googlefontsize = ot_get_option( 'tmq_h1_font' );
			if ( is_array( $tmq_h1_googlefontsize ) ) {
				// Validate it
				if ( is_numeric( $tmq_h1_googlefontsize[0] ) ) {
					$tmq_h1_fontsize_number = $tmq_h1_googlefontsize[0];
				} else {
					$tmq_h1_fontsize_number = 38;
				}

				// Check unit is set properly
				if ( empty( $tmq_h1_googlefontsize[1] ) ) {
					$tmq_h1_fontsize_unit = 'px';
				} else {
					$tmq_h1_fontsize_unit = $tmq_h1_googlefontsize[1];
				}
			}
			// Set H1 font size variable
			$tmq_h1_fontsize = $tmq_h1_fontsize_number . $tmq_h1_fontsize_unit;
			
			// H2 Tag
			$tmq_h2_googlefontsize = ot_get_option( 'tmq_h2_font' );
			if ( is_array( $tmq_h2_googlefontsize ) ) {
				// Validate it
				if ( is_numeric( $tmq_h2_googlefontsize[0] ) ) {
					$tmq_h2_fontsize_number = $tmq_h2_googlefontsize[0];
				} else {
					$tmq_h2_fontsize_number = 24;
				}

				// Check unit is set properly
				if ( empty( $tmq_h2_googlefontsize[1] ) ) {
					$tmq_h2_fontsize_unit = 'px';
				} else {
					$tmq_h2_fontsize_unit = $tmq_h2_googlefontsize[1];
				}
			}
			// Set H2 font size variable
			$tmq_h2_fontsize = $tmq_h2_fontsize_number . $tmq_h2_fontsize_unit;			
			
			// H3 Tag
			$tmq_h3_googlefontsize = ot_get_option( 'tmq_h3_font' );
			if ( is_array( $tmq_h3_googlefontsize ) ) {
				// Validate it
				if ( is_numeric( $tmq_h3_googlefontsize[0] ) ) {
					$tmq_h3_fontsize_number = $tmq_h3_googlefontsize[0];
				} else {
					$tmq_h3_fontsize_number = 22;
				}

				// Check unit is set properly
				if ( empty( $tmq_h3_googlefontsize[1] ) ) {
					$tmq_h3_fontsize_unit = 'px';
				} else {
					$tmq_h3_fontsize_unit = $tmq_h3_googlefontsize[1];
				}
			}
			// Set H3 font size variable
			$tmq_h3_fontsize = $tmq_h3_fontsize_number . $tmq_h3_fontsize_unit;
			
			// H4 Tag
			$tmq_h4_googlefontsize = ot_get_option( 'tmq_h4_font' );
			if ( is_array( $tmq_h4_googlefontsize ) ) {
				// Validate it
				if ( is_numeric( $tmq_h4_googlefontsize[0] ) ) {
					$tmq_h4_fontsize_number = $tmq_h4_googlefontsize[0];
				} else {
					$tmq_h4_fontsize_number = 18;
				}

				// Check unit is set properly
				if ( empty( $tmq_h4_googlefontsize[1] ) ) {
					$tmq_h4_fontsize_unit = 'px';
				} else {
					$tmq_h4_fontsize_unit = $tmq_h4_googlefontsize[1];
				}
			}
			// Set H4 font size variable
			$tmq_h4_fontsize = $tmq_h4_fontsize_number . $tmq_h4_fontsize_unit;
			
			// H5 Tag
			$tmq_h5_googlefontsize = ot_get_option( 'tmq_h5_font' );
			if ( is_array( $tmq_h5_googlefontsize ) ) {
				// Validate it
				if ( is_numeric( $tmq_h5_googlefontsize[0] ) ) {
					$tmq_h5_fontsize_number = $tmq_h5_googlefontsize[0];
				} else {
					$tmq_h5_fontsize_number = 15;
				}

				// Check unit is set properly
				if ( empty( $tmq_h5_googlefontsize[1] ) ) {
					$tmq_h5_fontsize_unit = 'px';
				} else {
					$tmq_h5_fontsize_unit = $tmq_h5_googlefontsize[1];
				}
			}
			// Set H5 font size variable
			$tmq_h5_fontsize = $tmq_h5_fontsize_number . $tmq_h5_fontsize_unit;
			
			// H6 Tag
			$tmq_h6_googlefontsize = ot_get_option( 'tmq_h6_font' );
			if ( is_array( $tmq_h6_googlefontsize ) ) {
				// Validate it
				if ( is_numeric( $tmq_h6_googlefontsize[0] ) ) {
					$tmq_h6_fontsize_number = $tmq_h6_googlefontsize[0];
				} else {
					$tmq_h6_fontsize_number = 12;
				}

				// Check unit is set properly
				if ( empty( $tmq_h6_googlefontsize[1] ) ) {
					$tmq_h6_fontsize_unit = 'px';
				} else {
					$tmq_h6_fontsize_unit = $tmq_h6_googlefontsize[1];
				}
			}
			// Set H6 font size variable
			$tmq_h6_fontsize = $tmq_h6_fontsize_number . $tmq_h6_fontsize_unit;
					
			$tmq_color_settings .=
			'/* Headings Font Setting */' . "\n" .
			'	h1, h2, h3, h4, h5, h6 {' . "\n" .
			'		font-family: "' . $tmq_heading_webfont . '", "sans serif";' . "\n" .
			'	}' . "\n" .
			'	h1 {' . "\n" .
			'		font-size: ' . $tmq_h1_fontsize . ';' ."\n" .
			'	}' . "\n" .
			'	h2 {' . "\n" .
			'		font-size: ' . $tmq_h2_fontsize . ';' ."\n" .
			'	}' . "\n" .
			'	h3 {' . "\n" .
			'		font-size: ' . $tmq_h3_fontsize . ';' ."\n" .
			'	}' . "\n" .
			'	h4 {' . "\n" .
			'		font-size: ' . $tmq_h4_fontsize . ';' ."\n" .
			'	}' . "\n" .
			'	h5 {' . "\n" .
			'		font-size: ' . $tmq_h5_fontsize . ';' ."\n" .
			'	}' . "\n" .
			'	h6 {' . "\n" .
			'		font-size: ' . $tmq_h6_fontsize . ';' ."\n" .
			'	}' . "\n" .
			'';							
			
			$tmq_slider_background = ot_get_option( 'tmq_slider_background' );
			$tmq_homepage_slider_background = ot_get_option( 'tmq_homepage_slider_background' );
			
			// Get Slider Background Image
			if ( !empty( $tmq_slider_background ) ) {
				$tmq_color_settings .=
				'/* Other Pages Slider Area Background */' . "\n" .
				'	.slider {' . "\n" .
				'		background-image: url(\''. $tmq_slider_background .'\');' . "\n" .
				'		background-size: cover;' . "\n" .
				'		background-repeat: no-repeat;' . "\n" .
				'	}' . "\n" .
				'';
			}
			
			// Default website width
			$tmq_default_sitewidth = '1170px';
			
			/* ==========================================================================
			   Wide Screens Support
			   ========================================================================== */	
			   
			
			$tmq_wide_1600 = ot_get_option( 'tmq_wide_1600' );
			if ( empty( $tmq_wide_1600 ) ) {
				// Fall back
				$tmq_wide_1600 = 'off';
			}

			// Set Responsive 1600px+ codes
			if ( $tmq_wide_1600 != 'off' ) {
				$tmq_color_settings .=
				'/* Support 1600px+ Wide Screens */' . "\n" .
				'	@media (min-width: 1600px) {' . "\n" .
				'		header {' . "\n" .
				'			margin-left: -685px;' . "\n" .
				'		}' . "\n" .
				'		.container {' . "\n" .
				'			max-width: 1400px;' . "\n" .
				'			width: 1400px;' . "\n" .
				'		}' . "\n" .
				'	}' . "\n" .
				'';
				$tmq_default_sitewidth = '1400px';
			}
			
			$tmq_wide_1900 = ot_get_option( 'tmq_wide_1900' );
			if ( empty( $tmq_wide_1900 ) ) {
				// Fall back
				$tmq_wide_1900 = 'off';
			}

			// Set Responsive 1900px+ codes
			if ( $tmq_wide_1900 != 'off' ) {
				$tmq_color_settings .=
				'/* Support 1900px+ Wide Screens */' . "\n" .
				'	@media (min-width: 1900px) {' . "\n" .
				'		header {' . "\n" .
				'			margin-left: -935px;' . "\n" .
				'		}' . "\n" .
				'		.container {' . "\n" .
				'			max-width: 1900px;' . "\n" .
				'			width: 1900px;' . "\n" .
				'		}' . "\n" .
				'	}' . "\n" .
				'';
				$tmq_default_sitewidth = '1900px';
			}
			
			// Disable Responsive Layout
			$tmq_responsive_layout = ot_get_option ( 'tmq_responsive_layout' );
			if ( empty( $tmq_responsive_layout ) ) {
				$tmq_responsive_layout == 'on';
			}
			if ( $tmq_responsive_layout == 'off' ) {
				$tmq_color_settings .=
				'/* Disable Responsive */' . "\n" .
				'	.container {' . "\n" .
				'		width: '. $tmq_default_sitewidth .';' . "\n" .
				'		width: '. $tmq_default_sitewidth .' !important;' . "\n" .
				'	}' . "\n" .
				'	html {' . "\n" .
				'		overflow: auto;' . "\n" .
				'	}' . "\n" .
				'	header {' . "\n" .
				'		left: 0;' . "\n" .
				'		margin-left: 15px;' . "\n" .
				'	}' . "\n" .
				'';			
			}
			
			// Turn off dots on background image?
			$tmq_backgroundimage_dots = ot_get_option ( 'tmq_backgroundimage_dots' );
			if ( empty( $tmq_backgroundimage_dots ) ) {
				$tmq_backgroundimage_dots == 'on';
			}
			if ( $tmq_backgroundimage_dots == 'off' ) {
				$tmq_color_settings .=
				'/* Turn off dots on bg image */' . "\n" .
				'	#background-container:after {' . "\n" .
				'		background: none;' . "\n" .
				'	}' . "\n" .
				'';			
			}
			
			return $tmq_color_settings;
			/* ====================================== */
			/*	Dynamic CSS For ALL Updates :: END!   */
			/* ====================================== */
		}
		return $value;
	}
	add_filter( 'ot_insert_css_with_markers_value', 'filter_css_value', 10, 2 );

		
/* ==========================================================================
   Add Revolution Slider select option
   ========================================================================== */
	function add_revslider_select_type( $array ) {

	  $array['revslider-select'] = 'Revolution Slider Select';
	  return $array;

	}
	add_filter( 'ot_option_types_array', 'add_revslider_select_type' );	

/* ==========================================================================
   Show RevolutionSlider select option
   ========================================================================== */
	function ot_type_revslider_select( $args = array() ) {
	  extract( $args );
	  $has_desc = $field_desc ? true : false;
	  echo '<div class="format-setting type-revslider-select ' . ( $has_desc ? 'has-desc' : 'no-desc' ) . '">';
	  echo $has_desc ? '<div class="description">' . htmlspecialchars_decode( $field_desc ) . '</div>' : '';
		echo '<div class="format-setting-inner">';
		// Add This only if RevSlider is Activated
		if ( class_exists( 'RevSliderAdmin' ) ) {
		  echo '<select name="' . esc_attr( $field_name ) . '" id="' . esc_attr( $field_id ) . '" class="option-tree-ui-select ' . $field_class . '">';

		  /* get revolution array */
		  $slider = new RevSlider();
		  $arrSliders = $slider->getArrSlidersShort();

		  /* has slides */
		  if ( ! empty( $arrSliders ) ) {
			echo '<option value="">-- ' . __( 'Choose One', 'option-tree' ) . ' --</option>';
			foreach ( $arrSliders as $rev_id => $rev_slider ) {
			  echo '<option value="' . esc_attr( $rev_id ) . '"' . selected( $field_value, $rev_id, false ) . '>' . esc_attr( $rev_slider ) . '</option>';
			}
		  } else {
			echo '<option value="">' . __( 'No Sliders Found', 'option-tree' ) . '</option>';
		  }
		  echo '</select>';
		} else {
			echo '<span style="color: red;">' . __( 'Sorry! Revolution Slider is not Installed or Activated', 'vertikal' ). '</span>';
		}
		echo '</div>';
	  echo '</div>';
	}
	
/* ==========================================================================
   ADD CUSTOM TYPOGRAPHY OPTION
   ========================================================================== */	
	if ( ! function_exists( 'ot_google_webfont_families' ) ) {
	  function ot_google_webfont_families( $field_id = '' ) {
		return apply_filters( 'ot_google_webfont_families', array(
		  'pt_sans_narrow' 		=> '"PT Sans Narrow"',
		  'open_sans_condensed'	=> '"Open Sans Condensed"',
		  'abel'				=> '"Abel"',
		  'source_sans_pro'     => '"Source Sans Pro"',
		  'open_sans'   		=> '"Open Sans"',
		  'pt_sans'  			=> '"PT Sans"',
		  'merriweather_sans'	=> '"Merriweather Sans"',
		  'alef'   				=> '"Alef"',
		  'dosis'   			=> '"Dosis"',
		  'archivo_narrow'		=> '"Archivo Narrow"',
		  'roboto'				=> '"Roboto"',
		  'roboto_condensed'	=> '"Roboto Condensed"',
		  'roboto_slab'			=> '"Roboto Slab"',
		  'raleway'				=> '"Raleway"',
		  'montserrat'			=> '"Montserrat"',
		  'droid_sans'   		=> '"Droid Sans"',
		  'oswald'   			=> '"Oswald"',
		  'ubuntu'   			=> '"Ubuntu"',
		  'lato'   				=> '"Lato"',
		  'lora'   				=> '"Lora"',
		  'ubuntu_condensed'	=> '"Ubuntu Condensed"',
		  'rationale'			=> '"Rationale"',
		  'benchnine'			=> '"Benchnine"',
		  'yanone_kaffeesatz'	=> '"Yanone Kaffeesatz"',
		  'economica'			=> '"Economica"',
		  'cuprum'   			=> '"Cuprum"',
		  'nobile'   			=> '"Nobile"',
		  'nunito'   			=> '"Nunito"',
		  'questrial'   		=> '"Questrial"',
		  'muli'   				=> '"Muli"'
		), $field_id );
	  }
	}

/* ==========================================================================
   Add custom sidebar select option
   ========================================================================== */
	function add_googlefonts_select_type( $array ) {
	  $array['googlefonts-select'] = 'Google Fonts';
	  return $array;
	}
	add_filter( 'ot_option_types_array', 'add_googlefonts_select_type' );

/* ==========================================================================
   Show Google Web Fonts
   ========================================================================== */
	function ot_type_googlefonts_select( $args = array() ) {

		/* turns arguments array into variables */
		extract( $args );

		/* verify a description */
		$has_desc = $field_desc ? true : false;

		/* format setting outer wrapper */
		echo '<div class="format-setting type-typography ' . ( $has_desc ? 'has-desc' : 'no-desc' ) . '">';

		/* description */
		echo $has_desc ? '<div class="description">' . htmlspecialchars_decode( $field_desc ) . '</div>' : '';

		/* format setting inner wrapper */
		echo '<div class="format-setting-inner">'; 
		
		/* allow fields to be filtered */
		$ot_recognized_typography_fields = apply_filters( 'ot_recognized_typography_fields', array( 
		  'font-family', 
		  'font-size', 
		  'font-style', 
		  'line-height'
		), $field_id );
		
		/* build font family */
		if ( in_array( 'font-family', $ot_recognized_typography_fields ) ) {
		  $font_family = isset( $field_value['font-family'] ) ? $field_value['font-family'] : '';
		  echo '<select name="' . esc_attr( $field_name ) . '[font-family]" id="' . esc_attr( $field_id ) . '-font-family" class="option-tree-ui-select ' . esc_attr( $field_class ) . '">';
			echo '<option value="">font-family</option>';
			foreach ( ot_google_webfont_families( $field_id ) as $key => $value ) {
			  echo '<option value="' . esc_attr( $key ) . '" ' . selected( $font_family, $key, false ) . '>' . esc_attr( $value ) . '</option>';
			}
		  echo '</select>';
		}
		
		/* build font size */
		if ( in_array( 'font-size', $ot_recognized_typography_fields ) ) {
		  $font_size = isset( $field_value['font-size'] ) ? esc_attr( $field_value['font-size'] ) : '';
		  echo '<select name="' . esc_attr( $field_name ) . '[font-size]" id="' . esc_attr( $field_id ) . '-font-size" class="option-tree-ui-select ' . esc_attr( $field_class ) . '">';
			echo '<option value="">font-size</option>';
			foreach( ot_recognized_font_sizes( $field_id ) as $option ) { 
			  echo '<option value="' . esc_attr( $option ) . '" ' . selected( $font_size, $option, false ) . '>' . esc_attr( $option ) . '</option>';
			}
		  echo '</select>';
		}
		
		/* build font style */
		if ( in_array( 'font-style', $ot_recognized_typography_fields ) ) {
		  $font_style = isset( $field_value['font-style'] ) ? esc_attr( $field_value['font-style'] ) : '';
		  echo '<select name="' . esc_attr( $field_name ) . '[font-style]" id="' . esc_attr( $field_id ) . '-font-style" class="option-tree-ui-select ' . esc_attr( $field_class ) . '">';
			echo '<option value="">font-style</option>';
			foreach ( ot_recognized_font_styles( $field_id ) as $key => $value ) {
			  echo '<option value="' . esc_attr( $key ) . '" ' . selected( $font_style, $key, false ) . '>' . esc_attr( $value ) . '</option>';
			}
		  echo '</select>';
		}
		
		/* build line height */
		if ( in_array( 'line-height', $ot_recognized_typography_fields ) ) {
		  $line_height = isset( $field_value['line-height'] ) ? esc_attr( $field_value['line-height'] ) : '';
		  echo '<select name="' . esc_attr( $field_name ) . '[line-height]" id="' . esc_attr( $field_id ) . '-line-height" class="option-tree-ui-select ' . esc_attr( $field_class ) . '">';
			echo '<option value="">line-height</option>';
			foreach( ot_recognized_line_heights( $field_id ) as $option ) { 
			  echo '<option value="' . esc_attr( $option ) . '" ' . selected( $line_height, $option, false ) . '>' . esc_attr( $option ) . '</option>';
			}
		  echo '</select>';
		}	
	  echo '</div>';
	echo '</div>';

	}

/* ==========================================================================
   ADD CUSTOM TYPOGRAPHY OPTION SMALL
   ========================================================================== */
	function add_googlefonts_select_type_small( $array ) {
		$array['googlefonts-select-small'] = 'Google Fonts Small';
		return $array;
	}
	add_filter( 'ot_option_types_array', 'add_googlefonts_select_type_small' );

/* ==========================================================================
   SHOW GOOGLE WEB FONTS
   ========================================================================== */
	function ot_type_googlefonts_select_small( $args = array() ) {
		/* turns arguments array into variables */
		extract( $args );
		/* verify a description */
		$has_desc = $field_desc ? true : false;
		/* format setting outer wrapper */
		echo '<div class="format-setting type-typography ' . ( $has_desc ? 'has-desc' : 'no-desc' ) . '">';
		/* description */
		echo $has_desc ? '<div class="description">' . htmlspecialchars_decode( $field_desc ) . '</div>' : '';
		/* format setting inner wrapper */
		echo '<div class="format-setting-inner">'; 
		/* allow fields to be filtered */
		$ot_recognized_typography_fields = apply_filters( 'ot_recognized_typography_fields', array( 
		'font-family'
		), $field_id );
		
		/* build font family */
		if ( in_array( 'font-family', $ot_recognized_typography_fields ) ) {
		  $font_family = isset( $field_value['font-family'] ) ? $field_value['font-family'] : '';
		  echo '<select name="' . esc_attr( $field_name ) . '[font-family]" id="' . esc_attr( $field_id ) . '-font-family" class="option-tree-ui-select ' . esc_attr( $field_class ) . '">';
			echo '<option value="">font-family</option>';
			foreach ( ot_google_webfont_families( $field_id ) as $key => $value ) {
			  echo '<option value="' . esc_attr( $key ) . '" ' . selected( $font_family, $key, false ) . '>' . esc_attr( $value ) . '</option>';
			}
		  echo '</select>';
		}
		echo '</div>';
		echo '</div>';
	}	
?>