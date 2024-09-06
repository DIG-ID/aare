<section class="section-long-term bg-blue-shade-5 pb-96">
	<div class="theme-container">
		<div class="theme-grid">
			<?php
			$featured_posts = get_field( 'studios' );
			if ( $featured_posts ) :
				$i = 0;
				foreach ( $featured_posts as $post ) :
					setup_postdata( $post );
					if ( 0 === $i ) :
						?>
						<article class="card-studio col-span-2 lg:col-start-2 lg:col-span-10 grid grid-cols-2 lg:grid-cols-10 mb-24 lg:mb-64">
							<div class="card-studio__swiper col-span-2 lg:col-span-5 mb-8 lg:mb-0">
								<h2 class="text-title-h2 text-blue-shade-1 text-center mb-6 lg:invisible lg:hidden"><?php the_title(); ?></h2>
								<div class="swiper studioSwiper<?php echo esc_attr( $i ); ?>">
									<?php
									$gallery = get_field( 'gallery' );
									if ( $gallery ) :
										?><div class="swiper-wrapper"><?php
										foreach ( $gallery as $gallery_item ) :
											?>
											<div class="swiper-slide">
												<?php echo wp_get_attachment_image( $gallery_item, 'full', false, array( 'class' => 'w-full obecjt-cover rounded-[20px]' ) ); ?>
											</div>
											<?php
										endforeach;
										?></div><?php
									endif;
									?>
									<div class="swiper-button-next studioSwiper<?php echo esc_attr( $i ); ?>-button-next"></div>
									<div class="swiper-button-prev studioSwiper<?php echo esc_attr( $i ); ?>-button-prev"></div>
								</div>
							</div>
							<div class="card-studio__content col-span-2 lg:col-span-4 lg:col-start-7 flex flex-col lg:justify-between">
								<h2 class="text-title-h2 text-blue-shade-1 invisible hidden lg:visible lg:block"><?php the_title(); ?></h2>
								<p class="text-body text-blue-shade-1 pr-16"><?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?></p>
								<?php
								$blink = get_field( 'booking_link' );
								if ( $blink ) :
								?>
								<a class="btn-internal btn-internal--shade-3 self-start mt-8 lg:mt-0" href="<?php echo esc_url( $blink ); ?>" target="_blank"><?php esc_html_e( 'Jetzt anfragen', 'aare' ); ?></a>
								<?php
								endif;
								?>
							</div>
						</article>
						<?php
					else :
						?>
						<article class="card-studio col-span-2 lg:col-start-2 lg:col-span-10 grid grid-cols-2 lg:grid-cols-10 mb-32 lg:mb-64">
							<div class="card-studio__content col-span-2 lg:col-span-4 flex flex-col lg:justify-between order-2 lg:order-1">
								<h2 class="text-title-h2 text-blue-shade-1 invisible hidden lg:visible lg:block"><?php the_title(); ?></h2>
								<p class="text-body text-blue-shade-1 pr-16"><?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?></p>
								<a class="btn-internal btn-internal--shade-3 self-start mt-8 lg:mt-0" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Jetzt anfragen', 'aare' ); ?></a>
							</div>
							<div class="card-studio__swiper col-span-2 lg:col-start-6 lg:col-span-5 order-1 lg:order-2 mb-8 lg:mb-0">
								<h2 class="text-title-h2 text-blue-shade-1 text-center mb-6 lg:invisible lg:hidden"><?php the_title(); ?></h2>
								<div class="swiper studioSwiper<?php echo esc_attr( $i ); ?>">
									<?php
									$gallery = get_field( 'gallery' );
									if ( $gallery ) :
										?><div class="swiper-wrapper"><?php
										foreach ( $gallery as $gallery_item ) :
											?>
											<div class="swiper-slide">
												<?php echo wp_get_attachment_image( $gallery_item, 'full', false, array( 'class' => 'w-full obecjt-cover rounded-[20px]' ) ); ?>
											</div>
											<?php
										endforeach;
										?></div><?php
									endif;
									?>
									<div class="swiper-button-next studioSwiper<?php echo esc_attr( $i ); ?>-button-next"></div>
									<div class="swiper-button-prev studioSwiper<?php echo esc_attr( $i ); ?>-button-prev"></div>
								</div>
							</div>

						</article>
						<?php
					endif;

					$i++;
				endforeach;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</div>
</section>