					<div class="blog-box no-sidebar">
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