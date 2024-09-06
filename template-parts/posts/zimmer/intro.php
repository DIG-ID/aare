<section class="single-zimmer-header  text-blue-shade-1 pt-28 lg:pt-64">
	<div class="theme-container">
		<div class="flex flex-col w-full text-center">
			<div class="page-header--breadcrumbs mb-14">
				<?php do_action( 'breadcrumbs' ); ?>
			</div>
		</div>

		<?php
		$gallery = get_field( 'gallery' );
		if ( $gallery ) :
			?>
			<div class="swiper zimmerSwiper">
				<div class="swiper-wrapper">
					<?php
					foreach ( $gallery as $gallery_id ) :
						?>
						<div class="swiper-slide">
							<?php echo wp_get_attachment_image( $gallery_id, 'full', false, array( 'class' => 'w-full object-cover rounded-[20px] max-h-[700px]' ) ); ?>
						</div>
						<?php 
					endforeach;
					?>
					</div>
					<div class="swiper-button-next zimmerSwiper-button-next"></div>
					<div class="swiper-button-prev zimmerSwiper-button-prev"></div>
				</div>
			</div>
			<?php
		endif;
		?>
	
	</div>
</section>
