<?php
	// Get sidebar of this page
	$tmq_pagesidebar = get_post_meta( $post->ID, 'tmq_pagesidebar', true);
	if ( $tmq_pagesidebar == '' || empty( $tmq_pagesidebar ) ) {
		// Set to default theme options if nothing is set or it says to read from default
		if ( function_exists( 'ot_get_option' ) ) {
			$tmq_pagesidebar = ot_get_option( 'tmq_def_left_sidebar' );
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
								if (have_posts()) : 
									the_post();
									the_content(); 
									$post_pg_arg = array(
										'before'           => '<p>' . __( 'Pages:', 'vertikal' ),
										'after'            => '</p>',
										'link_before'      => '',
										'link_after'       => '',
										'next_or_number'   => 'number',
										'separator'        => ' | ',
										'nextpagelink'     => __( 'Next page', 'vertikal' ),
										'previouspagelink' => __( 'Previous page', 'vertikal' ),
										'pagelink'         => '%',
										'echo'             => 1
									);
									wp_link_pages( $post_pg_arg );									
								endif; 
								?>
							</div>

						</div>
					</div>	