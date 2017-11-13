<?php

	$tmq_pagesidebar = '';
	
	// If sidebar is not selected or if it's shop page
	if ( $tmq_pagesidebar == '' || empty( $tmq_pagesidebar ) ) {
		// Set to default theme options if nothing is set or it says to read from default
		if ( function_exists( 'ot_get_option' ) ) {
		
		   if ( is_product() ) {
				$tmq_pagesidebar = ot_get_option( 'tmq_product_left_sidebar' );					   
		   } elseif ( is_product_category() ) {
				$tmq_pagesidebar = ot_get_option( 'tmq_woo_category_left_sidebar' );					   
		   } else {
				$tmq_pagesidebar = ot_get_option( 'tmq_woo_left_sidebar' );
		   }
		} else {
			// fallback
			$tmq_pagesidebar = 'left-sidebar';
		}
	}	
	
	// Is it still empty? Set a default value - fallback
	if ( $tmq_pagesidebar == '' || empty( $tmq_pagesidebar ) ) {
		$tmq_pagesidebar = 'left-sidebar';
	}

?>
					<div class="blog-box with-sidebar">
						<div class="row">
							<div class="col-md-4 sidebar">
								<div class="sidebar-widgets">
									<?php dynamic_sidebar( $tmq_pagesidebar ); ?>
								</div>
							</div>

							<div class="col-md-8 blog-side">
								<?php
								if ( have_posts() ) {
									// It's in posts loop
									woocommerce_content();
								}
								?>
							</div>
						</div>
					</div>	