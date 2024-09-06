<section class="section-zimmer-description bg-blue-shade-1 pt-10">
	<div class="theme-container">
		<div class="theme-grid">
			<div class="col-span-6">
				<div class="max-w-[552px]">
					<h1 class="text-title mb-7 text-blue-shade-5"><?php the_title(); ?></h1>
					<p class="text-body mb-10 text-blue-shade-5"><?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?></p>
					<?php
					$blink = get_field( 'booking_link' );
					if ( $blink ) :
					?>
					<a class="btn-internal btn-internal--shade-3" href="<?php echo esc_url( $blink ); ?>" target="_blank"><?php esc_html_e( 'Jetzt Buchen', 'aare' ); ?></a>
					<?php
					endif;
					?>
				</div>

			</div>
			<div class="col-span-6">
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
