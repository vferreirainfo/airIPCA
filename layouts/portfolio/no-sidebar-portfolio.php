<?php

	// Get sidebar of this post
	$tmq_pagesidebar = get_post_meta( $post->ID, 'tmq_pagesidebar', true);
	
	// Related posts settings 
	$tmq_relatedposts = get_post_meta( $post->ID, 'tmq_relatedposts', true);
	if ( empty( $tmq_relatedposts ) || $tmq_relatedposts == 'tmq_default' ) {
		// Set to default theme options if nothing is set or it says to read from default
		if ( function_exists( 'ot_get_option' ) ) {
			$tmq_relatedposts = ot_get_option( 'tmq_portfolio_relatedposts' );
		} else {
			// fallback
			$tmq_relatedposts = 'tmq_show';
		}
	}
	// Is it still empty? Set a default value - fallback
	if ( $tmq_relatedposts == '' || empty( $tmq_relatedposts ) ) {
		$tmq_relatedposts = 'tmq_show';
	}
	
	// Comments Settings
	if ( function_exists( 'ot_get_option' ) ) {
		$tmq_portfolio_comments = ot_get_option( 'tmq_portfolio_comments' );
	} else {
		// fallback
		$tmq_portfolio_comments = 'off';
	}
	// Is it still empty? Set a default value - fallback
	if ( $tmq_portfolio_comments == '' || empty( $tmq_portfolio_comments ) ) {
		$tmq_portfolio_comments = 'off';
	}	
?>
					<div class="blog-box with-sidebar">
						<div class="row">
							<div class="col-md-12">
							<?php
							if ( have_posts() ) {
								// Show Post Content
								the_post();
								// Read single post template
								get_template_part( 'layouts/portfolio/content', 'post' );
								
								// Check if we should show related posts
								if ( 'tmq_show' == $tmq_relatedposts ) {
									// RELATED POSTS START
									get_template_part( 'layouts/portfolio/content-related-posts', 'loop' );
									//RELATED POSTS END
								}
								// Check if we should show Comments?
								if ( 'on' == $tmq_portfolio_comments ) {
									comments_template( '', true );
								}	
							}
							?>
							</div>
						</div>
					</div>