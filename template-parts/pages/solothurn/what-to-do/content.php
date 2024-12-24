<section class="section-what-to-do-events relative">


	<div class="overflow-hidden ml-6 lg:ml-40">
		<div class="events-navigation relative py-6">
			<div class="swiper-button-next event-swiper-button-next"></div>
			<div class="swiper-button-prev event-swiper-button-prev"></div>
		</div>
		<?php
		if ( have_rows( 'events' ) ) :
			?>
			<div class="swiper eventSwiper invisible fade-in--noscroll">

				<div class="swiper-wrapper">
					<?php
					while ( have_rows( 'events' ) ) :
						the_row();
						?>
						<article class="card-event swiper-slide bg-white rounded-[20px] overflow-hidden">
							<a href="<?php echo esc_url( get_sub_field( 'link' ) ); ?>" target="_blank">
							<?php
							$img = get_sub_field( 'image' );
							if ( $img ) :
								echo wp_get_attachment_image( $img, 'full', false, array( 'class' => 'w-full object-cover h-[238px] lg:h-[354px]' ) );
							else :
								?>
								<span class="flex flex-col justify-center items-center w-full h-[238px] lg:h-[354px] bg-blue-shade-1 text-blue-shade-2">no image</span>
								<?php
							endif;
							?>
							</a>
							<div class="card-event-content h-[175px] lg:h-[200px] flex flex-col justify-between px-7 lg:px-12 pt-6 lg:pt-9 pb-6 lg:pb-14">
								<a href="<?php echo esc_url( get_sub_field( 'link' ) ); ?>" class="flex gap-x-3 items-center  mb-4 lg:mb-0" target="_blank">
									<h2 class="text-title-h3 text-blue-shade-5 text-nowrap"><?php the_sub_field( 'title' ); ?></h2>
								</a>
								<p class="text-body text-blue-shade-5"><?php the_sub_field( 'description' ); ?></p>
							</div>
						</article>
						<?php
					endwhile;
					?>
				</div>
			</div>
			<?php
		endif;
		?>
	</div>
</section>

<section class="section-what-to-do-activites bg-blue-shade-4 pt-28 lg:pt-40 pb-28 lg:pb-40 ">
	<div class="theme-container mb-28 lg:mb-40">
		<div class="theme-grid">
			<div class="col-span-2 lg:col-span-12 flex flex-col justify-center items-center">
				<h2 class="text-title-h2 text-blue-shade-2 text-center mb-6 fade-in"><?php the_field( 'activites_title' ); ?></h2>
				<p class="text-description text-blue-shade-2 text-center max-w-[635px] fade-in"><?php the_field( 'activites_description' ); ?></p>
			</div>
		</div>
	</div>
	<div class="overflow-hidden ml-6 lg:ml-40">
		<div class="activites-navigation relative py-6">
			<div class="swiper-button-next activites-swiper-button-next"></div>
			<div class="swiper-button-prev activites-swiper-button-prev"></div>
		</div>
		<?php
		if ( have_rows( 'activites_list' ) ) :
			?>
			<div class="swiper activitesSwiper fade-in">
				<div class="swiper-wrapper">
					<?php
					while ( have_rows( 'activites_list' ) ) :
						the_row();
						?>
						<article class="card-activities swiper-slide bg-white rounded-[20px] overflow-hidden">
							<a href="<?php echo esc_url( get_sub_field( 'link' ) ); ?>" target="_blank">
							<?php
							$img = get_sub_field( 'image' );
							if ( $img ) :
								echo wp_get_attachment_image( $img, 'full', false, array( 'class' => 'w-full object-cover h-[238px] lg:h-[354px]' ) );
							else :
								?>
								<span class="flex flex-col justify-center items-center w-full h-[238px] lg:h-[354px] bg-blue-shade-1 text-blue-shade-2">no image</span>
								<?php
							endif;
							?>
							</a>
							<div class="card-activities-content h-[300px] lg:h-[200px] lg:flex lg:flex-col lg:justify-between px-7 lg:px-12 pt-6 lg:pt-9 pb-6 lg:pb-14">
								<a href="<?php echo esc_url( get_sub_field( 'link' ) ); ?>" class="flex gap-x-3 items-center mb-4 lg:mb-0" target="_blank">
									<h2 class="text-title-h3 text-blue-shade-5"><?php the_sub_field( 'title' ); ?></h2>
								</a>
								<p class="text-body text-blue-shade-5"><?php the_sub_field( 'description' ); ?></p>
							</div>
						</article>
						<?php
					endwhile;
					?>
				</div>
			</div>
			<?php
			endif;
			?>
		</div>
</section>
