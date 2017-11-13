<?php

	// Registering Theme Locations
	function register_my_menu() {
		register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_my_menu' );

	// Add Menu Support
	function theme_nav() {
		if ( has_nav_menu( 'header-menu' ) ) {
		 //Do Create menu
			wp_nav_menu(
				array(
				'theme_location'  => 'header-menu',
				'menu'            => 'Header Menu', 
				'container'       => false, 
				'container_class' => '', 
				'container_id'    => '',
				'menu_class'      => 'main-menu', 
				'menu_id'         => 'header-menu',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '<span>',
				'link_after'      => '</span>',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'		  => new TMQ_Walker_Nav_Menu()
				)
			);
		} else {
			_e( 'Please setup your menu', 'vertikal' );
		}
	}
   
	// Change Sub-Menu class name
	class TMQ_Walker_Nav_Menu extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $arg = Array() ) {
			$indent = str_repeat( "\t", $depth );
			$output .= "\n$indent<ul class=\"drop-down\">\n";
		}		
	}
	
	// Change Menu with Children Class Name
	add_filter( 'wp_nav_menu_objects', 'add_menu_parent_class' );
	function add_menu_parent_class( $items ) {
		$parents = array();
		foreach ( $items as $item ) {
			if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
				$parents[] = $item->menu_item_parent;
			}
		}
		foreach ( $items as $item ) {
			if ( in_array( $item->ID, $parents ) ) {
				$item->classes[] = 'drop'; 
			}
		}
		return $items;    
	}	
?>