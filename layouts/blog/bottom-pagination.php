<?php
	/* Pagination Template for Blog Posts - Bottom Side */
	if ( function_exists( 'ot_get_option' ) ) {
		$tmq_blog_pagination_bottom = ot_get_option( 'tmq_blog_pagination_bottom' );
		$tmq_blog_pagination_bottom_align = ot_get_option( 'tmq_blog_pagination_bottom_align' );
	} else {
		// fallback
		$tmq_blog_pagination_bottom = 'on';
		$tmq_blog_pagination_bottom_align = 'tmq_left';
	}
	if ( empty( $tmq_blog_pagination_bottom ) || $tmq_blog_pagination_bottom == 'on' ) {
		// if it's on or nothing is set show bottom pagination as default
		
		$top_pg_class = '';
		switch ( $tmq_blog_pagination_bottom_align ) {
			case 'tmq_left':
			default:
				$top_pg_class = ' text-left';
				break;
			case 'tmq_center':
				$top_pg_class = ' text-center';
				break;
			case 'tmq_right':
				$top_pg_class = ' text-right';
				break;
		}
		?>
		<div class="row">
			<div class="col-md-12<?php echo $top_pg_class; ?>">											
			<?php
				tmq_blog_pagination();
			?>
			</div>
		</div>
		<?php
	}	
?>
