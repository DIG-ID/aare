<section class="section-team bg-blue-shade-5 text-blue-shade-1 pb-20 xl:pb-40">
	<div class="theme-container">
		<h2 class="text-title text-center mb-6 lg:mb-20 fade-in"><?php the_field( 'team_title' ); ?></h2>
		<div class="theme-grid">
			<div class="col-span-2 lg:col-span-10 lg:col-start-2 bg-blue-shade-1 rounded-[20px] px-8 py-7 xl:px-28 xl:py-16 fade-in">
				<?php
				if( have_rows('team_list') ):
					// Counter to track the index of each item
					$counter = 0;
					?>
					<div class="grid grid-cols-2 lg:grid-cols-3 gap-8">
						<div>
						<?php
						// Loop through the repeater field items
						while( have_rows('team_list') ) : the_row();
							$counter++;
							?>
							<h3 class="text-title-h3 text-blue-shade-5 mb-0"><?php the_sub_field( 'name' ); ?></h3>
							<p class="text-body text-blue-shade-5 mb-8 lg:mb-20 last:mb-0"><?php the_sub_field( 'position' ); ?></p>
							<?php
							// Check if 4 items have been added to the first column or 3 items for the other columns
							if (($counter == 4) || ($counter == 7)) {
								// Close the current column and start a new one
								echo '</div><div>';
							}
						endwhile;
						?>
						</div>
					</div>
				<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
