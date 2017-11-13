<?php

/* ==========================================================================
   Load a custom style for tinymce - Fix Recommended Message in Theme Check
   ========================================================================== */
   
	function my_theme_add_editor_styles() {
		add_editor_style( 'css/editor_style.css' );
	}
	add_action( 'init', 'my_theme_add_editor_styles' );
	
	if ( ! isset( $content_width ) ) $content_width = 1170;
	
	/* ==========================================================================
	   Add Theme Support Functions
	   ========================================================================== */	
	
	if ( function_exists( 'add_theme_support' ) ) {
	
	   // Make Custom Header - We don't use this as we have a great admin panel instead
		$defaults = array(
			'default-image'          => '',
			'random-default'         => false,
			'width'                  => 0,
			'height'                 => 0,
			'flex-height'            => false,
			'flex-width'             => false,
			'default-text-color'     => '',
			'header-text'            => true,
			'uploads'                => true,
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		);
		add_theme_support( 'custom-header', $defaults );

		// Add automatic feed links support to Theme
		add_theme_support( 'automatic-feed-links' );

		// Enable custom background. We don't like it as we have our own Admin Panel.
		add_theme_support( 'custom-background', array() );
	
		// Add Menu Support
		add_theme_support( 'menus' );

		// // Activate Post Formats
		// function tmq_supported_formats() {
			// $format_arg = array( 'gallery', 'video' );
			// if ( is_array( $format_arg ) ) {
				// add_theme_support( 'post-formats', $format_arg );
			// }
		// }
		// add_action('after_setup_theme', 'tmq_supported_formats');

		// Add Thumbnail Theme Support
		if ( function_exists( 'add_theme_support' ) ) {
			add_theme_support('post-thumbnails');
		}
	}	
?>