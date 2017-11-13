<?php
 /*===================================================================================
 * Image Sizes
 * =================================================================================*/
function tmq_initial_image_sizes() {
	if ( function_exists( 'add_image_size' ) ) {
		add_image_size('hd-background', 1920, '', true); // HD Background
		add_image_size('large', 700, '', true); // Large Thumbnail
		add_image_size('medium', 450, '', true); // Medium Thumbnail
		add_image_size('small', 250, '', true); // Small Thumbnail
		add_image_size('mini', 120, 120, true); // Mini Thumbnail
		add_image_size('slideshow', 700, 420, true); // SlideShows and Normal Blog
		add_image_size('gridgallery', 512, 384, true); // Grid, Gallery Size
		add_image_size('masonry', 512, '', true); //  Masonry Size
		set_post_thumbnail_size( 450, 450 );

		// Gallery Post Format SlideShow
		// fallback
		$tmq_gallery_image_width = '600';
		$tmq_gallery_image_height = '450';
		
		$tmq_portfolio_gallery_image_width = '600';
		$tmq_portfolio_gallery_image_height = '450';
			
		if ( function_exists( 'ot_get_option' ) ) {
			$tmq_custom_gallery_format = ot_get_option( 'tmq_custom_gallery_format' );
			$tmq_portfolio_custom_gallery_format = ot_get_option( 'tmq_portfolio_custom_gallery_format' );
			if ( $tmq_custom_gallery_format == 'tmq_custom' ) {
				// Read settings only if theme is set to customize post format
				$tmq_gallery_image_width = ot_get_option( 'tmq_gallery_image_width' );
				$tmq_gallery_image_height = ot_get_option( 'tmq_gallery_image_height' );
			}
			if ( $tmq_portfolio_custom_gallery_format == 'tmq_custom' ) {
				// Read settings only if theme is set to customize post format
				$tmq_portfolio_gallery_image_width = ot_get_option( 'tmq_portfolio_gallery_image_width' );
				$tmq_portfolio_gallery_image_height = ot_get_option( 'tmq_portfolio_gallery_image_height' );
			}
		}
		
		// Fallback for empty theme options
		if ( empty( $tmq_gallery_image_width ) ) {
			$tmq_gallery_image_width = '600';
		}
		
		if ( empty( $tmq_gallery_image_height ) ) {
			$tmq_gallery_image_width = '450';
		}	
		
		// Fallback for empty theme options
		if ( empty( $tmq_portfolio_gallery_image_width ) ) {
			$tmq_portfolio_gallery_image_width = '600';
		}
		
		if ( empty( $tmq_portfolio_gallery_image_height ) ) {
			$tmq_portfolio_gallery_image_height = '450';
		}
		add_image_size('gallery-post-format', $tmq_gallery_image_width, $tmq_gallery_image_height, true); // Gallery Post Format
		add_image_size('portfolio-gallery-post-format', $tmq_portfolio_gallery_image_width, $tmq_portfolio_gallery_image_height, true); // Portfolio Gallery Post Format
	}
}
add_action('after_setup_theme', 'tmq_initial_image_sizes');
?>