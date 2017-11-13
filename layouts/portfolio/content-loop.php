<?php
	/* Loop through blog posts */
	// Posts Limit Excerpt
	$tmq_blogexceptlimit = ot_get_option( 'tmq_blogexceptlimit' );
	if ( empty( $tmq_blogexceptlimit ) ) {
		$tmq_blogexceptlimit = '40';
	}
	
	// Posts Limit Excerpt After!
	$tmq_blogexcept_after_text = ot_get_option( 'tmq_blogexcept_after_text' );	
?>
												<div class="item news-item">
													<div class="inner-item">
														<?php
														// Get and Show Featured Image
														if ( has_post_thumbnail() && ! post_password_required() ) {
															the_post_thumbnail( $post->ID, 'slideshow' );
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
														<?php
														// Check if we should show it as a review post
														$tmq_reviewtype = get_post_meta( $post->ID, 'tmq_reviewtype', true );
														if ( $tmq_reviewtype == 'on' ) {
															$tmq_review_rating = get_post_meta( $post->ID, 'tmq_review_rating', true );
														?>
														<div class="list-rating">
															<div class="review-overall-rating">
																<?php _e('Rating', 'vertikal')?>
															</div>
															<div class="review-rate">
																<?php
																if ( is_numeric( $tmq_review_rating ) ) {
																	echo number_format($tmq_review_rating, 1);
																} else {
																	echo $tmq_review_rating;
																}
																?>
															</div>
														</div>
														<?php
														}
														?>
													</div>
													<h2><?php the_title(); ?></h2>
													<p><?php 
														$tmq_excerpt = get_the_excerpt();
														if ( function_exists( 'tmq_string_limit_words' ) ) {
															echo tmq_string_limit_words( $tmq_excerpt, $tmq_blogexceptlimit ) . $tmq_blogexcept_after_text;
														} else {
															echo $tmq_excerpt;
														}
													?></p>
													<a class="read-more" href="<?php echo get_permalink() ?>"><?php _e( 'read more', 'vertikal' ); ?> <i class="fa fa-arrow-right"></i></a>
												</div>