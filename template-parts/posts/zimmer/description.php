<section class="section-zimmer-description bg-blue-shade-1 lg:pt-10">
	<div class="theme-container">
		<div class="theme-grid">
			<div class="col-span-2 lg:col-span-7 order-2 lg:order-1">
				<div class=" fade-in">
					<h1 class="text-title mb-7 text-blue-shade-5"><?php the_title(); ?></h1>
					<div class="grid grid-cols-1 lg:grid-cols-5 gap-x-6  mb-10">
						<p class="text-body text-blue-shade-5 col-span-1 lg:col-span-3 mb-0 lg:mb-0"><?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?></p>
						<div class="col-span-1 lg:col-span-2">
							<?php do_action( 'room_features' ); ?>
						</div>
						
					</div>

					<?php
					$blink = get_field( 'booking_link' );
					if ( $blink ) :
						?>
						<a class="btn-internal btn-internal--shade-3 !text-[16px] !font-poppins uppercase font-medium tracking-[0.16px] " href="<?php echo esc_url( $blink ); ?>" target="_blank"><?php esc_html_e( 'Jetzt Buchen', 'aare' ); ?></a>
						<?php
					else :
						$booking_url = get_field( 'booking_url', 'options' );
						if ( $booking_url ) :
							?><a href="<?php echo esc_url( $booking_url ); ?>" target="_blank" class="btn-internal btn-internal--shade-3 !text-[16px] !font-poppins uppercase font-medium tracking-[0.16px]"><?php esc_html_e( 'Jetzt Buchen', 'aare' ); ?></a><?php
						endif;
					endif;
					?>
				</div>

			</div>
			<div class="col-span-2 lg:col-span-4 lg:col-start-9 order-1 lg:order-2 pb-11 lg:pb-0 pt-5 xl:pt-0">
				<?php
				$gallery = get_field( 'gallery' );
				if ( $gallery ) :
					?>
					<div class="swiper zimmerSwiperThumbs fade-in">
						<div class="swiper-wrapper">
							<?php
							foreach ( $gallery as $gallery_id ) :
								?>
								<div class="swiper-slide">
									<?php echo wp_get_attachment_image( $gallery_id, 'thumbnail', false, array( 'class' => 'w-full object-cover' ) ); ?>
									<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
								</div>
								<?php 
							endforeach;
							?>
						</div>
					</div>
					<?php
				endif;
				?>
			</div>
		</div>
		<span class="w-full h-[1px] bg-blue-shade-3 block mt-10 fade-in"></span>
	</div>
</section>
