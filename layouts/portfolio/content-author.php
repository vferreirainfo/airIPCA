		<div class="author-box">
			<h3><?php _e('About the Author', 'vertikal')?></h3>
			<ul class="author-buttons">
				<li class="biography"><a><i class="fa fa-user"></i><span><?php _e( 'Biography', 'vertikal' )?></span></a></li>
				<?php 
					$facebook_profile = get_the_author_meta( 'facebook_profile' );
					if ( $facebook_profile && $facebook_profile != '' ) {
						echo '<li><a href="'. esc_url( $facebook_profile ) .'" target="_blank"><i class="fa fa-facebook"></i><span>facebook</span></a></li>';
					}
				?>
				<?php 
					$twitter_profile = get_the_author_meta( 'twitter_profile' );
					if ( $twitter_profile && $twitter_profile != '' ) {
						echo '<li><a href="'. esc_url( $twitter_profile ) .'" target="_blank"><i class="fa fa-twitter"></i><span>twitter</span></a></li>';
					}
				?>
				<?php 
					$google_profile = get_the_author_meta( 'google_profile' );
					if ( $google_profile && $google_profile != '' ) {
						echo '<li><a href="'. esc_url( $google_profile ) .'" target="_blank"><i class="fa fa-google-plus"></i><span>google+</span></a></li>';
					}
				?>
				<?php 
					$linkedin_profile = get_the_author_meta( 'linkedin_profile' );
					if ( $linkedin_profile && $linkedin_profile != '' ) {
						echo '<li><a href="'. esc_url( $linkedin_profile ) .'" target="_blank"><i class="fa fa-linkedin"></i><span>linkedin</span></a></li>';
					}
				?>
			</ul>
			<div class="clearfix"></div>
			<div class="author-info">
				<?php echo get_avatar( get_the_author_meta('email') , 100 ); ?>
				<div class="author-content">
					<h6><?php the_author_meta( 'nickname', get_the_author_meta( 'ID' ) ); ?></h6>
					<p><?php echo get_the_author_meta('description');?></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>