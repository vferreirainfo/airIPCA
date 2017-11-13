<?php
		// Do we need to show image for related posts?
		$tmq_relatedposts_show_image = ot_get_option( 'tmq_relatedposts_show_image' );
		if ( empty( $tmq_relatedposts_show_image ) ) {
			$tmq_relatedposts_show_image = 'tmq_hide';
		}
		
		// Limit related posts excerpts
		$tmq_relatedposts_exceptlimit = ot_get_option( 'tmq_relatedposts_exceptlimit' );
		if ( empty( $tmq_relatedposts_exceptlimit ) ) {
			$tmq_relatedposts_exceptlimit = '40';
		}
		
		// Set the columns setting ( Default: 2 for pages with sidebar 3 for full width )
		global $tmq_sidebar_position;
		if ( 'tmq_fullwidth' == $tmq_sidebar_position ) {
			$tmq_relatedposts_cols = ot_get_option( 'tmq_relatedposts_nosidebar_cols' );
			if ( empty( $tmq_relatedposts_cols ) ) {
				$tmq_relatedposts_cols = 'tmq_3';
			}
		} elseif ( 'tmq_leftsidebar' == $tmq_sidebar_position || 'tmq_rightsidebar' == $tmq_sidebar_position ) {
			$tmq_relatedposts_cols = ot_get_option( 'tmq_relatedposts_sidebar_cols' );
			if ( empty( $tmq_relatedposts_cols ) ) {
				$tmq_relatedposts_cols = 'tmq_2';
			}			
		} else {
			$tmq_relatedposts_cols = 'tmq_2';
		}
		
		switch ( $tmq_relatedposts_cols ) {
			case 'tmq_1':
				$tmq_relatedposts_carousel_count = 1;
				$tmq_relatedposts_column_class = 'col-md-12';
				break;
			case 'tmq_2':
				$tmq_relatedposts_carousel_count = 2;
				$tmq_relatedposts_column_class = 'col-md-6';
				break;
			case 'tmq_3':
				$tmq_relatedposts_carousel_count = 3;
				$tmq_relatedposts_column_class = 'col-md-4';
				break;
			default:
				$tmq_relatedposts_carousel_count = 2;
				$tmq_relatedposts_column_class = 'col-md-6';
				break;
		}
		
		// Posts Limit Excerpt After!
		$tmq_blogexcept_after_text = ot_get_option( 'tmq_blogexcept_after_text' );			

$orig_post = $post;
global $post;
$tags = wp_get_post_tags( $post->ID );

if ( $tags ) {
	$tag_ids = array();
	foreach( $tags as $individual_tag ) {
		$tag_ids[] = $individual_tag->term_id;
	}
	$args = array(
		'post_type'				=> 'post',
		'tag__in'				=> $tag_ids,
		'post__not_in'			=> array($post->ID),
		'posts_per_page'		=> 10, 
		'ignore_sticky_posts'	=> 1
		);
	$my_query = new wp_query( $args );

	if ( $my_query->have_posts() ) {
	?>
		<div class="staff-box">
			<h3><?php _e( 'Related Posts', 'vertikal' ); ?></h3>
			<div id="carousel-related-posts" class="carousel slide" data-ride="carousel">

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
	
	<?php
		// Define a counter to use for showing carousel rows
		$related_post_count = 0;
		
		while( $my_query->have_posts() ) {
			$related_post_count++;
			$my_query->the_post();
			if ( $related_post_count == 1 ) {
			// If it's the beginning row, it should be active!
			?>
					<div class="item active">
						<div class="row">
			<?php
			} elseif ( is_int( ( $related_post_count - 1 ) / $tmq_relatedposts_carousel_count ) ) {
			// If it's the start of if it's on 3, 5, 7 ... or 4, 7, 10 ...
			?>
					<div class="item">
						<div class="row">
			<?php
			}															
			?>
							<div class="<?php echo $tmq_relatedposts_column_class;?>">
								<div class="news-item">
									<div class="inner-item">
										<?php
										// Conditionally Show Related Posts Images
										if ( $tmq_relatedposts_show_image == 'tmq_show' ) {
											the_post_thumbnail( array( 150,100 ) ); 
										}
										?>
										<div class="hover-item">
											<ul>
												<li><a class="autor" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><i class="fa fa-user"></i><?php echo get_the_author();?></a></li>
												<li><a class="date"><i class="fa fa-clock-o"></i> <?php echo get_the_time( 'd F, Y' );?></a></li>
												<?php	if ( comments_open() ) { ?>
													<li><a class="comment-numb" href="<?php comments_link();?>"><i class="fa fa-comments"></i> <?php comments_number(); ?></a></li>
												<?php } ?>
											</ul>
										</div>
									</div>
									<h2><?php the_title(); ?></h2>
									<p><?php 
										$tmq_excerpt = get_the_excerpt();
										if ( function_exists( 'tmq_string_limit_words' ) ) {
											echo tmq_string_limit_words( $tmq_excerpt, $tmq_relatedposts_exceptlimit ) . $tmq_blogexcept_after_text;
										} else {
											echo $tmq_excerpt;
										}
									?></p>
									<a class="read-more" href="<?php echo get_permalink() ?>"><?php _e( 'read more', 'vertikal' ); ?> <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>																	
			<?php
			if ( is_int( $related_post_count / $tmq_relatedposts_carousel_count ) ) {
			// If it's the end. if it's on 2, 4, 6 ... or 3, 6, 9 ...
			?>
						</div>
					</div>
			<?php
			}															
		}
		if ( !is_int( $related_post_count / $tmq_relatedposts_carousel_count ) ) {
		// If it's done without closing the row in the last condition (it didn't finished on a round number)
		?>
						</div>
					</div>
		<?php
		}															
		?>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-related-posts" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-related-posts" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
		
		
	<?php

	}
}
$post = $orig_post;
?>