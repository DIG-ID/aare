<section class="section-long-term bg-blue-shade-5 pt-6 lg:pt-0 xl:pb-96 -mt-[2px]">
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
						<article class="card-studio col-span-2 lg:col-start-2 lg:col-span-10 grid grid-cols-2 lg:grid-cols-10 mb-24 lg:mb-32 xl:mb-64 invisible fade-in--noscroll">
							<div class="card-studio__swiper col-span-2 lg:col-span-5 mb-8 lg:mb-0 relative">
								<h2 class="text-title-h2 text-blue-shade-1 text-center mb-6 lg:invisible lg:hidden"><?php the_title(); ?></h2>
								<div class="swiper studioSwiper<?php echo esc_attr( $i ); ?>">
									<?php
									$gallery = get_field( 'gallery' );
									if ( $gallery ) :
										?><div class="swiper-wrapper"><?php
										foreach ( $gallery as $gallery_item ) :
											?>
											<div class="swiper-slide">
												<?php echo wp_get_attachment_image( $gallery_item, 'long-term-image', false, array( 'class' => 'w-full object-cover lg:max-w-[578px] lg:max-h-[385px] rounded-[20px]' ) ); ?>
											</div>
											<?php
										endforeach;
										?></div><?php
									endif;
									?>
								</div>
								<div class="swiper-button-next studioSwiper<?php echo esc_attr( $i ); ?>-button-next lg:-right-8"></div>
								<div class="swiper-button-prev studioSwiper<?php echo esc_attr( $i ); ?>-button-prev lg:-left-8"></div>
							</div>
							<div class="card-studio__content col-span-2 lg:col-span-4 lg:col-start-7 flex flex-col xl:justify-between">
								<h2 class="text-title-h2 text-blue-shade-1 invisible hidden lg:visible lg:block"><?php the_title(); ?></h2>
								<p class="text-body text-blue-shade-1 pr-16 py-0 lg:py-6 xl:py-0"><?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?></p>
								<div id="dialog-content" style="display:none;max-width:700px;" class="rounded-[20px]">
									<div class="dialog-content--form bg-white py-6 px-8">
										<h3 class="text-title-h3 text-blue-shade-5 mb-8"><?php the_field( 'single_studio_form_title', 'options' ); ?></h3>
										<?php
										$form_sc = get_field( 'single_studio_form_form', 'options' );
										if ( $form_sc ) :
											echo do_shortcode( $form_sc );
										endif;
										?>
									</div>

								</div>
								<button class="btn-internal btn-internal--shade-3 self-start mt-8 lg:mt-0" data-fancybox data-src="#dialog-content"><?php esc_html_e( 'Jetzt anfragen', 'aare' ); ?></button>
							</div>
						</article>
						<?php
					else :
						?>
						<article class="card-studio col-span-2 lg:col-start-2 lg:col-span-10 grid grid-cols-2 lg:grid-cols-10 mb-20 lg:mb-32 xl:mb-64 fade-in">
							<div class="card-studio__content col-span-2 lg:col-span-4 flex flex-col xl:justify-between order-2 lg:order-1">
								<h2 class="text-title-h2 text-blue-shade-1 invisible hidden lg:visible lg:block"><?php the_title(); ?></h2>
								<p class="text-body text-blue-shade-1 pr-16 py-0 lg:py-6 xl:py-0"><?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?></p>
								<div id="dialog-content-2" style="display:none;max-width:700px;">
									<h3 class="text-title-h3 text-blue-shade-5 mb-8"><?php the_field( 'single_studio_form_title', 'options' ); ?></h3>
									<?php
									$form_sc = get_field( 'single_studio_form_form', 'options' );
									if ( $form_sc ) :
										echo do_shortcode( $form_sc );
									endif;
									?>
								</div>
								<button class="btn-internal btn-internal--shade-3 self-start mt-8 lg:mt-0" data-fancybox data-src="#dialog-content-2"><?php esc_html_e( 'Jetzt anfragen', 'aare' ); ?></button>
							</div>
							<div class="card-studio__swiper col-span-2 lg:col-start-6 lg:col-span-5 order-1 lg:order-2 mb-8 lg:mb-0 relative">
								<h2 class="text-title-h2 text-blue-shade-1 text-center mb-6 lg:invisible lg:hidden"><?php the_title(); ?></h2>
								<div class="swiper studioSwiper<?php echo esc_attr( $i ); ?>">
									<?php
									$gallery = get_field( 'gallery' );
									if ( $gallery ) :
										?><div class="swiper-wrapper"><?php
										foreach ( $gallery as $gallery_item ) :
											?>
											<div class="swiper-slide">
												<?php echo wp_get_attachment_image( $gallery_item, 'long-term-image', false, array( 'class' => 'w-full object-cover lg:max-w-[578px] lg:max-h-[385px] rounded-[20px]' ) ); ?>
											</div>
											<?php
										endforeach;
										?></div><?php
									endif;
									?>
								</div>
								<div class="swiper-button-next studioSwiper<?php echo esc_attr( $i ); ?>-button-next lg:-right-8"></div>
								<div class="swiper-button-prev studioSwiper<?php echo esc_attr( $i ); ?>-button-prev lg:-left-8"></div>
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
