<?php
	// Breadcrumb
	function tmq_show_bc( $bctype=null ) {
		global $post;
		echo '
				<ul class="breadcrumb brcr-top">
					';
					// if NavTX plugin is active return it
					if ( function_exists('bcn_display') )
					{
						//echo bcn_display();
					}
					// else create custom made breadcrumbs without plugin
					else
					{
						echo dimox_breadcrumbs();
					}
					echo '
				</ul>
		';
}

	// display breadcrumbs without using plugin
	// see http://dimox.net/wordpress-breadcrumbs-without-a-plugin/
	function dimox_breadcrumbs() {
		
		/* === OPTIONS === */
		$text['home']     = __('Home', 'vertikal'); // text for the 'Home' link
		$text['category'] = __('Archive by Category', 'vertikal') . ' "%s"'; // text for a category page
		$text['search']   = __('Search Results for', 'vertikal') . ' "%s"'; // text for a search results page
		$text['tag']      = __('Posts Tagged', 'vertikal') . ' "%s"'; // text for a tag page
		$text['author']   = __('Articles Posted by', 'vertikal') . ' %s'; // text for an author page
		$text['404']      = __('Error 404', 'vertikal'); // text for the 404 page
		
		$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
		$showOnHome  = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
		$delimiter   = '<i class="fa fa-arrow-circle-right"></i>'; // delimiter between crumbs
		$before      = '<li class="active">'; // tag before the current crumb
		$after       = '</li>'; // tag after the current crumb
		/* === END OF OPTIONS === */
		
		global $post;
		$homeLink = home_url() . '/';
		$linkBefore = '<li>';
		$linkAfter = '</li>';
		$linkAttr = '';
		$link = $linkBefore . '<a' . $linkAttr . ' href="%1$s">%2$s</a>' . $linkAfter;
		
		if (is_home() || is_front_page()) {
			
			if ($showOnHome == 1) echo '<a href="' . $homeLink . '">' . ucfirst( $text['home'] ) . '</a></div>';
			
			} else {
			
			echo sprintf($link, $homeLink, ucfirst( $text['home'] )) . $delimiter;
			
			if ( is_category() ) {
				$thisCat = get_category(get_query_var('cat'), false);
				if ($thisCat->parent != 0) {
					$cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
					$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
					$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
					echo $cats;
				}
				echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;
				
				} elseif ( is_search() ) {
				echo $before . sprintf($text['search'], get_search_query()) . $after;
				
				} elseif ( is_day() ) {
				echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
				echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
				echo $before . get_the_time('d') . $after;
				
				} elseif ( is_month() ) {
				echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
				echo $before . get_the_time('F') . $after;
				
				} elseif ( is_year() ) {
				echo $before . get_the_time('Y') . $after;
				
				} elseif ( is_single() && !is_attachment() ) {
				if ( get_post_type() != 'post' ) {
					$post_type = get_post_type_object(get_post_type());
					$slug = $post_type->rewrite;
					$this_link = $homeLink . '/' . $slug['slug'];
					
					if ( get_post_type() == 'tmq-portfolio' ) {
					   // Read default portfolio setting from Theme Options
						if ( function_exists( 'ot_get_option' ) ) {
							$tmq_brcr_portfolio = ot_get_option( 'tmq_defportfoliopage' );
							if ( empty( $tmq_brcr_portfolio ) ) {
								$tmq_brcr_portfolio = '#';
							} else {
								$tmq_brcr_portfolio = get_permalink( $tmq_brcr_portfolio );
							}
						} 
						$this_link = $tmq_brcr_portfolio;
						// Remove last character
						if ( substr($this_link, -1) == '/' ) {
							$this_link = substr( $this_link, 0, -1 );
						}
					}
					printf($link, $this_link . '/', $post_type->labels->singular_name);
					if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;
					} else {
					$cat = get_the_category();
					$cat = $cat[0];
					$cats = get_category_parents($cat, TRUE, $delimiter);
					if ($showCurrent == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
					$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
					$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
					echo $cats;
					if ($showCurrent == 1) echo $before . get_the_title() . $after;
				}
				
				} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
					$post_type = get_post_type_object(get_post_type());
					if ( $post_type ) {
						echo $before . $post_type->labels->singular_name . $after;
					}
				
				} elseif ( is_attachment() ) {
					$parent = get_post($post->post_parent);
					$cat = get_the_category($parent->ID);
					$cat = ( isset( $cat[0]) ? $cat[0] : '' );
					$cats = get_category_parents($cat, TRUE, $delimiter);
					//$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
					//$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
				//echo $cats;
				printf($link, get_permalink($parent), $parent->post_title);
				if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;
				
				} elseif ( is_page() && !$post->post_parent ) {
				if ($showCurrent == 1) echo $before . ucfirst( mb_strtolower( get_the_title() )) . $after;
				
				} elseif ( is_page() && $post->post_parent ) {
				$parent_id  = $post->post_parent;
				$breadcrumbs = array();
				while ($parent_id) {
					$page = get_page($parent_id);
					$breadcrumbs[] = sprintf($link, get_permalink($page->ID), ucfirst( mb_strtolower( get_the_title($page->ID)) ) );
					$parent_id  = $page->post_parent;
				}
				$breadcrumbs = array_reverse($breadcrumbs);
				for ($i = 0; $i < count($breadcrumbs); $i++) {
					echo $breadcrumbs[$i];
					if ($i != count($breadcrumbs)-1) echo $delimiter;
				}
				if ($showCurrent == 1) echo $delimiter . $before . ucfirst( mb_strtolower( get_the_title() ) ) . $after;
				
				} elseif ( is_tag() ) {
				echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
				
				} elseif ( is_author() ) {
				global $author;
				$userdata = get_userdata($author);
				echo $before . sprintf($text['author'], $userdata->display_name) . $after;
				
				} elseif ( is_404() ) {
				echo $before . $text['404'] . $after;
			}
			
			if ( get_query_var('paged') ) {
				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() || is_page() ) echo ' (';
				echo __('Page', 'vertikal') . ' ' . get_query_var('paged');
				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() || is_page() ) echo ')';
			}
			
		}
	} 
	// end dimox_breadcrumbs()

?>