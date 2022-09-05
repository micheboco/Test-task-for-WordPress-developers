
	
</style>

	<section class="List-Gallery-Section">
		<div class="List-Gallery-container">
			<div class="List-Gallery-Inner">
				<div class="List-Gallery-Title">
					<h2><?php echo the_field ('block_title'); ?></h2>
				</div>
				<div class="List-Gallery-row">
					<?php
							// Check rows exists.
							if ( have_rows( 'list_items' ) ):
							while( have_rows( 'list_items' ) ) : the_row();
							?>
					<div class="Gallery-Col-4">
						
						<div class="Gallery-Item">
							<div class="Gallery-icon">
								<img src="<?php echo get_sub_field('image'); ?>">
							</div>
							<h3><?php echo get_sub_field('title'); ?></h3>
							<p><?php echo get_sub_field('text'); ?></p>
							<div class="Gallery-btn-area">
								<a href="<?php echo get_sub_field('button_with_link'); ?>"><?php echo get_sub_field('button_text'); ?></a>
							</div>
						</div>
						
					</div>
					<?php  endwhile ;

				endif;	

				?>
					
					
				</div>
			</div>
		</div>
	</section>


