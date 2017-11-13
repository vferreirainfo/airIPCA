					<div class="blog-box with-sidebar">
						<div class="row">
							<div class="col-md-12">
								<?php
								if ( have_posts() ) {
									// It's in posts loop
									woocommerce_content();
								}
								?>
							</div>
							
						</div>
					</div>	