<?php
	// Check if it's blog single post
	if ( is_single() ) {
		// Get sidebar of this post
		$tmq_pagesidebar = get_post_meta( $post->ID, 'tmq_pagesidebar', true);
		
		// Zoom Effect for SlideShow
		if ( function_exists( 'ot_get_option' ) ) {
			$tmq_gallery_image_zoom = ot_get_option( 'tmq_gallery_image_zoom' );
		} else {
			// fallback
			$tmq_gallery_image_zoom = 'tmq_zoom';
		}
		
		// Fallback for empty theme options
		if ( empty( $tmq_gallery_image_zoom ) ) {
			$tmq_gallery_image_zoom = 'tmq_zoom';
		}
		
	} elseif ( is_search() ) {
		$tmq_pagesidebar = ot_get_option( 'tmq_search_left_sidebar' );
	} elseif ( is_category() ) {
		$tmq_pagesidebar = ot_get_option( 'tmq_blog_category_left_sidebar' );
	} else {
		$tmq_pagesidebar = '';
	}
		
	// If sidebar is not selected or if it's main index page
	if ( $tmq_pagesidebar == '' || empty( $tmq_pagesidebar ) ) {
		// Set to default theme options if nothing is set or it says to read from default
		if ( function_exists( 'ot_get_option' ) ) {
			$tmq_pagesidebar = ot_get_option( 'tmq_blog_left_sidebar' );
		} else {
			// fallback
			$tmq_pagesidebar = 'left-sidebar';
		}
	}	
	
	// Is it still empty? Set a default value - fallback
	if ( $tmq_pagesidebar == '' || empty( $tmq_pagesidebar ) ) {
		$tmq_pagesidebar = 'left-sidebar';
	}
	
	// Author information box settings 
	if ( is_single() ) {
		$tmq_author_box = get_post_meta( $post->ID, 'tmq_author_box', true);
		if ( empty( $tmq_author_box ) || $tmq_author_box == 'tmq_default' ) {
			// Set to default theme options if nothing is set or it says to read from default
			if ( function_exists( 'ot_get_option' ) ) {
				$tmq_author_box = ot_get_option( 'tmq_author_box' );
			} else {
				// fallback
				$tmq_author_box = 'tmq_show';
			}
		}
		// Is it still empty? Set a default value - fallback
		if ( $tmq_author_box == '' || empty( $tmq_author_box ) ) {
			$tmq_author_box = 'tmq_show';
		}		
	}
	
	// Posts Limit Excerpt
	$tmq_blogexceptlimit = ot_get_option( 'tmq_blogexceptlimit' );
	if ( empty( $tmq_blogexceptlimit ) ) {
		$tmq_blogexceptlimit = '40';
	}
	
	// Posts Limit Excerpt After!
	$tmq_blogexcept_after_text = ot_get_option( 'tmq_blogexcept_after_text' );	
	
	// Related posts settings 
	if ( is_single() ) {
		$tmq_relatedposts = get_post_meta( $post->ID, 'tmq_relatedposts', true);
		if ( empty( $tmq_relatedposts ) || $tmq_relatedposts == 'tmq_default' ) {
			// Set to default theme options if nothing is set or it says to read from default
			if ( function_exists( 'ot_get_option' ) ) {
				$tmq_relatedposts = ot_get_option( 'tmq_relatedposts' );
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
			$tmq_blog_comments = ot_get_option( 'tmq_blog_comments' );
		} else {
			// fallback
			$tmq_blog_comments = 'on';
		}
		// Is it still empty? Set a default value - fallback
		if ( $tmq_blog_comments == '' || empty( $tmq_blog_comments ) ) {
			$tmq_blog_comments = 'on';
		}			
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
									if ( is_single() ) {
										// Show Post Content
										the_post();
										// Read single post template
										get_template_part( 'layouts/blog/content', 'post' );
										
										// Check if we should show author information box
										if ( $tmq_author_box == 'tmq_show' ) { 
											get_template_part( 'layouts/blog/content', 'author' );
										}
										
										// Check if we should show related posts
										if ( 'tmq_show' == $tmq_relatedposts ) {
											// RELATED POSTS START
											get_template_part( 'layouts/blog/content-related-posts', 'loop' );
											//RELATED POSTS END
										}
										// Check if we should show Comments?
										if ( 'on' == $tmq_blog_comments ) {
											comments_template( '', true );
										}
									} else {
										// It's in posts loop
										
										// Pagination
										get_template_part( 'layouts/blog/top', 'pagination' );
									
										if ( is_home() ) {
											$tmq_blog_columns = ot_get_option( 'tmq_blog_columns' );
										} elseif ( is_search() ) {
											$tmq_blog_columns = ot_get_option( 'tmq_search_columns' );
										} elseif ( is_category() ) {
											$tmq_blog_columns = ot_get_option( 'tmq_blog_category_columns' );
										} else {
											$tmq_blog_columns = 'tmq_12_12';
										}
										
										if ( empty( $tmq_blog_columns ) || $tmq_blog_columns == 'tmq_13_13_13' ) {
											// If nothing is set or it's set to show in 3 columns in a page with sidebar, switch to 2 columns as a default and layout fix
											$tmq_blog_columns = 'tmq_12_12';
										}
										
										switch ( $tmq_blog_columns ) {
											case 'tmq_1':
												$tmq_blog_cols_class = 'col-md-12';
												$tmq_blog_cols_step = 1;
												break;
											case 'tmq_12_12':
											default:
												$tmq_blog_cols_class = 'col-md-6';
												$tmq_blog_cols_step = 2;
												break;
										}
										
										$tmq_blog_post_count = 0;
										
										// Index Page - Show List
										while ( have_posts() ) :
											the_post();
											
											if ( $tmq_blog_post_count == 0 || ( is_int( $tmq_blog_post_count / $tmq_blog_cols_step ) ) ) {
												?>
												<div class="row">
												<?php
											}
											?>
											<div class="<?php echo $tmq_blog_cols_class;?>">
												<?php
													// Show each post by reading from it's template
													get_template_part( 'layouts/blog/content', 'loop' );
												?>
											</div>
											<?php
											// Add to counter
											$tmq_blog_post_count++;
											
											if ( is_int( $tmq_blog_post_count / $tmq_blog_cols_step )  ) {
												?>
												</div>
												<?php
											}											
										endwhile;
										if ( !is_int( $tmq_blog_post_count / $tmq_blog_cols_step ) ) {
										// If it's done without closing the row in the last condition (it didn't finished on a round number)
											?>
											</div>
											<?php
										}
										// Pagination
										get_template_part( 'layouts/blog/bottom', 'pagination' );										
									}
								} else {
									if ( is_search() ) {
										echo '<p>' . __('Sorry! No Results Found!', 'vertikal') . '</p>';
									}
								}
								?>
							</div>
						</div>
					</div>	