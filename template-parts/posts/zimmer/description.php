<section class="section-zimmer-description bg-blue-shade-1 xl:pt-10">
	<div class="theme-container">
		<div class="theme-grid">
			<div class="col-span-2 xl:col-span-6 order-2 xl:order-1">
				<div class="max-w-[552px]">
					<h1 class="text-title mb-7 text-blue-shade-5"><?php the_title(); ?></h1>
					<p class="text-body mb-10 text-blue-shade-5"><?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?></p>
					<?php
					$blink = get_field( 'booking_link' );
					if ( $blink ) :
						?>
						<a class="btn-internal btn-internal--shade-3 !text-[16px] !font-poppins uppercase font-medium tracking-[0.16px]" href="<?php echo esc_url( $blink ); ?>" target="_blank"><?php esc_html_e( 'Jetzt Buchen', 'aare' ); ?></a>
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
			<div class="col-span-2 xl:col-span-6 order-1 xl:order-2 pb-11 xl:pb-0">
				<?php
				$gallery = get_field( 'gallery' );
				if ( $gallery ) :
					?>
					<div class="swiper zimmerSwiperThumbs">
						<div class="swiper-wrapper">
							<?php
							foreach ( $gallery as $gallery_id ) :
								?>
								<div class="swiper-slide">
									<?php echo wp_get_attachment_image( $gallery_id, 'thumbnail', false, array( 'class' => 'w-full max-w-[85px] object-cover max-h-[85px]' ) ); ?>
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
		<span class="w-full h-[1px] bg-blue-shade-3 block mt-10"></span>
	</div>
</section>
