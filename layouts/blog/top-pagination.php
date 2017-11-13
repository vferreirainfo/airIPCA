<?php
	/* Pagination Template for Blog Posts - Top Side */
	if ( function_exists( 'ot_get_option' ) ) {
		$tmq_blog_pagination_top = ot_get_option( 'tmq_blog_pagination_top' );
		$tmq_blog_pagination_top_align = ot_get_option( 'tmq_blog_pagination_top_align' );
	} else {
		// fallback
		$tmq_blog_pagination_top = 'off';
		$tmq_blog_pagination_top_align = 'tmq_left';
	}
	if ( $tmq_blog_pagination_top == 'on' ) {
		$top_pg_class = '';
		switch ( $tmq_blog_pagination_top_align ) {
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
