<?php
/* ==========================================================================
   Some Useful Functions
   ========================================================================== */

	// Add custom CSS code for banner header area background
	function tmq_update_banner_bg_image( $tmq_banner_css_code ) {
		$tmq_banner_custom_css = '#page-banner{ ' . $tmq_banner_css_code . ' }';
		if ( !empty ( $tmq_banner_css_code ) ) {
			wp_add_inline_style( 'ot-dynamic-tmq_css', $tmq_banner_custom_css );
		}
	}  
   
   	// Clean up slugs
	function tmq_generateSlug($phrase, $maxLength)  {  
		$result = strtolower($phrase);  
		$result = preg_replace("/[^a-z0-9\s-]/", "", $result);  
		$result = trim(preg_replace("/[\s-]+/", " ", $result));  
		$result = trim(substr($result, 0, $maxLength));  
		$result = preg_replace("/\s/", "-", $result);  
		return $result;
	}
   
	// Get Current Page URL
	function tmq_current_page_url() {
		$pageURL = 'http';
		if( isset($_SERVER["HTTPS"]) ) {
			if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}
	
	
	// Convert Hex Color Code to RGB Format
	function tmq_hex2rgb($hex) {
		$hex = str_replace("#", "", $hex);

		if(strlen($hex) == 3) {
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
		} else {
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
		}
		$rgb = array($r, $g, $b);
		
		//return implode(",", $rgb); // returns the rgb values separated by commas
		return $rgb; // returns an array with the rgb values
	}
	
	// Convert RGB Color Code to Hex Format
	function tmq_rgb2hex($rgb) {
	   $hex = "#";
	   $hex .= str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
	   $hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
	   $hex .= str_pad(dechex($rgb[2]), 2, "0", STR_PAD_LEFT);

	   return $hex; // returns the hex value including the number sign (#)
	}
	
	// Change date to 2 days ago / 5 months ago or ...
	function tmq_human_time_diff( $from, $to = '', $part ) {
		if ( empty( $to ) )
			$to = time();

		$diff = (int) abs( $to - $from );

		if ( $diff < HOUR_IN_SECONDS ) {
			$mins = round( $diff / MINUTE_IN_SECONDS );
			if ( $mins <= 1 )
				$mins = 1;
			/* translators: min=minute */
			$since = sprintf( _n( '%s min', '%s mins', $mins ), $mins );
		} elseif ( $diff < DAY_IN_SECONDS && $diff >= HOUR_IN_SECONDS ) {
			$hours = round( $diff / HOUR_IN_SECONDS );
			if ( $hours <= 1 )
				$hours = 1;
			$since = sprintf( _n( '%s hour', '%s hours', $hours ), $hours );
		} elseif ( $diff < WEEK_IN_SECONDS && $diff >= DAY_IN_SECONDS ) {
			$days = round( $diff / DAY_IN_SECONDS );
			if ( $days <= 1 )
				$days = 1;
			$since = sprintf( _n( '%s day', '%s days', $days ), $days );
		} elseif ( $diff < 30 * DAY_IN_SECONDS && $diff >= WEEK_IN_SECONDS ) {
			$weeks = round( $diff / WEEK_IN_SECONDS );
			if ( $weeks <= 1 )
				$weeks = 1;
			$since = sprintf( _n( '%s week', '%s weeks', $weeks ), $weeks );
		} elseif ( $diff < YEAR_IN_SECONDS && $diff >= 30 * DAY_IN_SECONDS ) {
			$months = round( $diff / ( 30 * DAY_IN_SECONDS ) );
			if ( $months <= 1 )
				$months = 1;
			$since = sprintf( _n( '%s month', '%s months', $months ), $months );
		} elseif ( $diff >= YEAR_IN_SECONDS ) {
			$years = round( $diff / YEAR_IN_SECONDS );
			if ( $years <= 1 )
				$years = 1;
			$since = sprintf( _n( '%s year', '%s years', $years ), $years );
		}

		return $since;
	}
	
	// Pagination _ Got it from Oscar!
	function tmq_blog_pagination() {
		global $wp_query;

		// Don't print empty markup if there's only one page.
		if ( $wp_query->max_num_pages < 2 )
			return;
		
		// Current Page setup
		if ( get_query_var('paged') )
			$paged = get_query_var('paged');
		elseif ( get_query_var('page') ) 
			$paged = get_query_var('page');
		else 
			$paged = 1;
		$current_page = $paged;
		
		// Print Paginations
		echo paginate_links(
			array(  
				'base'         => @add_query_arg( 'paged', '%#%' ),
				'format'       => '',  
				'current'      => $current_page,  
				'total'        => $wp_query->max_num_pages, 
				'show_all'     => false,
				'end_size'     => 1,
				'mid_size'     => 5,
				'prev_next'    => true,
				'prev_text'    => '&laquo;',  
				'next_text'    => '&raquo;',
				'type'         => 'list'
			)
		);
	}
	
	// Add our own classes to reply to comment button ( Used in Next Function )
	function replace_reply_link_class( $class ){
		$class = str_replace("class='comment-reply-link", "class='reply-comment", $class);
		return $class;
	}	
		
	// Show Comments Callback Function
	function tmq_show_comment($comment, $args, $depth) {

		// Add filter to customize reply comment button
		add_filter('comment_reply_link', 'replace_reply_link_class');
									
		$GLOBALS['comment'] = $comment;
		extract( $args, EXTR_SKIP );
		
		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'comment';
		}
		
		// Check if its Author and add custom class to it (if it's chosen in Admin panel)
		global $post;
		$comment_by_author = '';
		// if ( function_exists( 'ot_get_option' ) ) {
			// $tmq_def_authorcommentsstyle = ot_get_option( 'tmq_authorcommentsstyle' );
		// }
		// $tmq_authorcommentsstyle = get_post_meta($post->ID, 'tmq_authorcommentsstyle', true);
		// $tmq_authorcommentsstyle = ( $tmq_authorcommentsstyle == 'tmq_default' ) ? $tmq_def_authorcommentsstyle : $tmq_authorcommentsstyle;
		// if ( $tmq_authorcommentsstyle != 'tmq_normal' ) {
			// $comment_id = get_comment_ID();
			// $user_id = get_comment( $comment_id )->user_id;
			// if ( $post->post_author == $user_id )
				// $comment_by_author = 'commented_by_author';
		// }
		
		echo '<'. $tag ?> <?php comment_class( empty( $args['has_children'] ) ? ' post-comment ' . $comment_by_author : ' parent post-comment ' . $comment_by_author) ?> id="comment-<?php comment_ID() ?>">
					<div class="comment-box">
						<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
						<div class="comment-content">
							<h6><?php echo get_comment_author_link();?> <span><?php echo strtoupper( human_time_diff( get_comment_date('U'), current_time('timestamp') ) . ' ago' ); ?></span></h6>
							<p><?php echo $comment->comment_content; ?></p>
							<p><?php edit_comment_link(__('(Edit)', 'vertikal'),'  ','' );?></p>
							<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
						</div>
					</div>

<?php 
	if ($comment->comment_approved == '0') : 
?>
		<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'vertikal') ?></em>
		<br />
<?php 
	endif;
}
	
	// Remove Unwanted Avatar Classes for Comments
	add_filter('get_avatar','change_avatar_css');
	
	function change_avatar_css($class) {
		$class = str_replace("class='avatar", "class='", $class) ;
		return $class;
	}
	
	// Add specific CSS class by filter
	add_filter('body_class','tmq_my_class_names');
	add_filter('body_class','tmq_layout_class_names');
	
	function tmq_add_left_sidebar_body_class( $classes ) {
		$classes[] = 'left-sidebar-page';
		return $classes;				
	}
	function tmq_add_right_sidebar_body_class( $classes ) {
		$classes[] = 'right-sidebar-page';
		return $classes;				
	}
	function tmq_add_full_width_body_class( $classes ) {
		$classes[] = 'no-sidebar-page';
		return $classes;				
	}
	function tmq_add_top_header_contact_bar( $classes ) {
		$classes[] = 'top-contact-bar-page';
		return $classes;				
	}	
	function tmq_add_top_header_full_menu( $classes ) {
		$classes[] = 'top-full-width-menu-page';
		return $classes;				
	}	
	function tmq_my_class_names( $classes ) {
		$tmq_widthpx = '978';
		if ( function_exists( 'ot_get_option' ) ) {
			$tmq_widthpx = ot_get_option( 'tmq_widewidth' );
			if ( $tmq_widthpx == '1170' ) {
				$classes[] = 'w1170px';
			} else {
				$classes[] = 'w978px';
			}
		}
		return $classes;
	}	
	function tmq_layout_class_names( $classes ) {
		$tmq_layoutmode = 'wide';
		if ( function_exists( 'ot_get_option' ) ) {
			$tmq_layoutmode = ot_get_option( 'tmq_layoutmode' );
			if ( $tmq_layoutmode == 'boxed' ) {
				$classes[] = 'boxed';
			} else {
				$classes[] = '';
			}
		}
		return $classes;
	}	
	
	// Show author in header for google headshot
	if ( !function_exists( 'tmq_add_author_headshot' ) ) {
		function tmq_add_author_headshot() {
			return '<link rel="author" href="/imangm">';
		}
	}
	
	// Limit Words - Used for excerpts
	if ( !function_exists( 'tmq_string_limit_words' ) ) {
		function tmq_string_limit_words($string, $word_limit) {
		  $words = explode(' ', $string, ($word_limit + 1));
		  if(count($words) > $word_limit)
		  array_pop($words);
		  return implode(' ', $words);
		}
	}

	// Get Scrollbar type from theme options
	if ( !function_exists( 'tmq_scrollbartype' ) ) {
		function tmq_scrollbartype() {
			$tmq_scrollbartype = 'off';
			if ( function_exists( 'ot_get_option' ) ) {
				$tmq_scrollbartype = ot_get_option( 'tmq_scrollbar' );
			} else {
				// fallback
				$tmq_scrollbartype = 'on';
			}
			return $tmq_scrollbartype;
		}
	}

?>