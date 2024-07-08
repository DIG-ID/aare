<section class="section-toolkit bg-page-bg-light pb-40">
	<div class="st-grid">
		<div class="st-container st-container-grid">
			<div class="col-span-1 md:col-span-2 xl:col-span-2">
				<h2 class="st-subtitle-i text-dark-blue w-full"><?php the_field( 'brand_toolkit_title' ); ?></h2>
				<hr class="w-full border-2 border-blue mt-5 mb-10">
			</div>
		</div>
		<div class="st-container st-container-grid">
			<div class="col-span-2 md:col-span-4 xl:col-span-5">
				<?php
				$logo_package_file = get_field( 'brand_toolkit_logotype_package_file' );
				if ( $logo_package_file ) :
					?>
					<a href="<?php echo esc_url( $logo_package_file['url'] ); ?>" class="brand-toolkit-card grid grid-cols-2 md:grid-cols-5 border-t-[7px] border-t-transparent transition-all duration-300 ease-in-out hover:border-t-blue mb-8 h-full">
						<div class="col-span-2">
							<?php
							$logo_package_image = get_field( 'brand_toolkit_logotype_package_image' );
							if ( $logo_package_image ) :
								echo wp_get_attachment_image( $logo_package_image, 'full', false, array( 'class' => 'w-full max-w-full object-cover h-full' ) );
							endif;
							?>
						</div>
						<div class="brand-toolkit-card--content col-span-2 md:col-span-3 flex flex-col justify-between pt-12 pb-7 px-8 bg-light-blue">
							<div>
								<h3 class="font-transducerCondensed font-[545] text-dark-blue italic text-xl md:text-3xl mb-3"><?php the_field( 'brand_toolkit_logotype_package_title' ); ?></h3>
								<p class="font-transducer text-sm md:text-base text-dark-blue tracking-[0.2px] md:tracking-[0.34px]"><?php the_field( 'brand_toolkit_logotype_package_description' ); ?></p>
							</div>
							<span class="self-end">
								<svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="transparent" >
									<rect x="1" y="1" width="63" height="63" rx="31.5" stroke="#14A5BB" stroke-width="2"/>
									<path d="M32.2929 43.7071C32.6834 44.0976 33.3166 44.0976 33.7071 43.7071L40.0711 37.3431C40.4616 36.9526 40.4616 36.3195 40.0711 35.9289C39.6805 35.5384 39.0474 35.5384 38.6569 35.9289L33 41.5858L27.3431 35.9289C26.9526 35.5384 26.3195 35.5384 25.9289 35.9289C25.5384 36.3195 25.5384 36.9526 25.9289 37.3431L32.2929 43.7071ZM32 21L32 43L34 43L34 21L32 21Z" fill="#001A26"/>
								</svg>
							</span>
						</div>
					</a>
					<?php
				endif;
				?>
			</div>
			<div class="col-span-2 md:col-span-4 xl:col-span-5">
				<?php
				$guidelines_file = get_field( 'brand_toolkit_brand_guidelines_file' );
				if ( $guidelines_file ) :
					?>
					<a href="<?php echo esc_url( $guidelines_file['url'] ); ?>" class="brand-toolkit-card grid grid-cols-2 md:grid-cols-5 border-t-[7px] border-t-transparent transition-all duration-300 ease-in-out hover:border-t-blue mb-8 h-full">
						<div class="col-span-2">
							<?php
							$guidelines_image = get_field( 'brand_toolkit_brand_guidelines_image' );
							if ( $guidelines_image ) :
								echo wp_get_attachment_image( $guidelines_image, 'full', false, array( 'class' => 'w-full max-w-full object-cover h-full' ) );
							endif;
							?>
						</div>
						<div class="brand-toolkit-card--content col-span-2 md:col-span-3 flex flex-col justify-between pt-6 pb-6 md:pt-12 md:pb-7 px-8 bg-light-blue">
							<div>
								<h3 class="font-transducerCondensed font-[545] text-dark-blue italic text-xl md:text-3xl mb-2"><?php the_field( 'brand_toolkit_brand_guidelines_title' ); ?></h3>
								<p class="font-transducer text-sm md:text-base text-dark-blue tracking-[0.2px] md:tracking-[0.34px]"><?php the_field( 'brand_toolkit_brand_guidelines_description' ); ?></p>
							</div>
							<span class="self-end">
								<svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="transparent">
									<rect x="1" y="1" width="63" height="63" rx="31.5" stroke="#14A5BB" stroke-width="2"/>
									<path d="M32.2929 43.7071C32.6834 44.0976 33.3166 44.0976 33.7071 43.7071L40.0711 37.3431C40.4616 36.9526 40.4616 36.3195 40.0711 35.9289C39.6805 35.5384 39.0474 35.5384 38.6569 35.9289L33 41.5858L27.3431 35.9289C26.9526 35.5384 26.3195 35.5384 25.9289 35.9289C25.5384 36.3195 25.5384 36.9526 25.9289 37.3431L32.2929 43.7071ZM32 21L32 43L34 43L34 21L32 21Z" fill="#001A26"/>
								</svg>
							</span>
						</div>
					</a>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
