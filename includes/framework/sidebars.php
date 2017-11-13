<?php
/* ==========================================================================
   Register Default Sidebars and Dynamic Sidebars
   ========================================================================== */

	// If Dynamic Sidebar Exists
	if (function_exists('register_sidebar')) {

		// Define Sidebar Widget Area 1 (RIGHT)
		register_sidebar(array(
			'name' 			=> __('Right Sidebar', 'vertikal'),
			'description' 	=> __('The widgets that will place at right sidebar', 'vertikal'),
			'id' 			=> 'right-sidebar',
		    'before_widget' => '<div id="%1$s" class="widget-side widget %2$s">',
		    'after_widget' 	=> '</div>',			
			'before_title' 	=> '<h4>',
			'after_title' 	=> '</h4>'
		));
		
		// Define Sidebar Widget Area 2 (LEFT)
		register_sidebar(array(
			'name' 			=> __('Left Sidebar', 'vertikal'),
			'description' 	=> __('The widgets that will place at left sidebar', 'vertikal'),
			'id' 			=> 'left-sidebar',
		    'before_widget' => '<div id="%1$s" class="widget-side widget %2$s">',
		    'after_widget' 	=> '</div>',	
			'before_title' 	=> '<h4>',
			'after_title' 	=> '</h4>'
		));
			
		// Define Sidebar Widget Area 5 (FOOTER 1)
		register_sidebar(array(
			'name' 			=> __('Footer Sidebar 1', 'vertikal'),
			'description' 	=> __('The widgets that will place at website footer', 'vertikal'),
			'id' 			=> 'footer-sidebar-1',
			'before_widget' => '<div class="widget footer-widgets %2$s">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h4>',
			'after_title' 	=> '</h4>'
		));	
		
		// Define Sidebar Widget Area 6 (FOOTER 2)
		register_sidebar(array(
			'name' 			=> __('Footer Sidebar 2', 'vertikal'),
			'description' 	=> __('The widgets that will place at website footer', 'vertikal'),
			'id' => 'footer-sidebar-2',
			'before_widget' => '<div class="widget footer-widgets %2$s">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h4>',
			'after_title' 	=> '</h4>'
		));
			
		// Define Sidebar Widget Area 7 (FOOTER 3)
		register_sidebar(array(
			'name' 			=> __('Footer Sidebar 3', 'vertikal'),
			'description' 	=> __('The widgets that will place at website footer', 'vertikal'),
			'id' 			=> 'footer-sidebar-3',
			'before_widget' => '<div class="widget footer-widgets %2$s">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h4>',
			'after_title' 	=> '</h4>'
		));
			
		// Define Sidebar Widget Area 8 (TOGGLE 1)
		register_sidebar(array(
			'name' 			=> __('Toggle Bar 1', 'vertikal'),
			'description' 	=> __('The widgets that will place at website header toggle bar', 'vertikal'),
			'id' 			=> 'toggle-bar-1',
			'before_widget' => '<div class="widget toggle-widgets %2$s">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h4>',
			'after_title' 	=> '</h4>'
		));	
			
		// Define Sidebar Widget Area 9 (TOGGLE 2)
		register_sidebar(array(
			'name' 			=> __('Toggle Bar 2', 'vertikal'),
			'description' 	=> __('The widgets that will place at website header toggle bar', 'vertikal'),
			'id' 			=> 'toggle-bar-2',
			'before_widget' => '<div class="widget toggle-widgets %2$s">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h4>',
			'after_title' 	=> '</h4>'
		));	
			
		// Define Sidebar Widget Area 10 (TOGGLE 3)
		register_sidebar(array(
			'name' 			=> __('Toggle Bar 3', 'vertikal'),
			'description' 	=> __('The widgets that will place at website header toggle bar', 'vertikal'),
			'id' 			=> 'toggle-bar-3',
			'before_widget' => '<div class="widget toggle-widgets %2$s">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h4>',
			'after_title' 	=> '</h4>'
		));	
			
		// Define Sidebar Widget Area 11 (TOGGLE 4)
		register_sidebar(array(
			'name' 			=> __('Toggle Bar 4', 'vertikal'),
			'description' 	=> __('The widgets that will place at website header toggle bar', 'vertikal'),
			'id' 			=> 'toggle-bar-4',
			'before_widget' => '<div class="widget toggle-widgets %2$s">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h4>',
			'after_title' 	=> '</h4>'
		));		
		
		// Define Sidebar Widget Area 12 (Under Menu)
		register_sidebar(array(
			'name' 			=> __('Under Menu', 'vertikal'),
			'description' 	=> __('The widgets that will place under main menu of the site', 'vertikal'),
			'id' 			=> 'undermenu-sidebar',
			'before_widget' => '<div class="widget widget-side %2$s">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h4>',
			'after_title' 	=> '</h4>'
		));	
	}

	// Register Custom Sidebars
	function custom_register_sidebar_widgets() {
	  if ( function_exists( 'ot_get_option' ) ) {
		// get the related list-item variable name
		$tmq_customsidebars = ot_get_option( 'tmq_customsidebars' );
		if(!empty( $tmq_customsidebars ) && sizeof( $tmq_customsidebars ) > 0) {  
		  foreach( $tmq_customsidebars as $customsidebar) {  
			foreach( $customsidebar as $mysidebar ) {
			  register_sidebar( array(  
				  'name' => $mysidebar ,
				  'id' => tmq_generateSlug($mysidebar , 45),  
				  'before_widget' 	=> '<div id="%1$s" class="widget user-widgets %2$s">',
				  'after_widget' 	=> '</div>',
				  'before_title'	=> '<h4>',
				  'after_title' 	=> '</h4>'
			  ) );  
			}
		  }  
		} 
	  } 
	}
	add_action( 'init', 'custom_register_sidebar_widgets' ); 


?>