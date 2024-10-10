<section class="section-hero bg-blue-shade-1 pt-0 pb-0 relative">
	<div class="hero-block relative">
		<div class="absolute top-0 left-0 w-full h-[80vh]" style="background: linear-gradient(180deg, rgba(14, 50, 74, 0.85) 0%, rgba(232, 246, 255, 0.85) 48.5%);mix-blend-mode: multiply;"></div>
		<?php 
			$hero_image = get_field('hero_section_hero_image');
			$size = 'full';
			if( $hero_image ) {
				echo wp_get_attachment_image( $hero_image, $size, false, array( 'class' => 'w-full hidden lg:block' ) );
			} 
		?>
		<?php 
			$hero_image = get_field('hero_section_hero_image_mobile');
			$size = 'full';
			if( $hero_image ) {
				echo wp_get_attachment_image( $hero_image, $size, false, array( 'class' => 'w-full block lg:hidden max-h-none md:max-h-[75vh] lg:max-h-none' ) );
			} 
		?>
		<div class="absolute bottom-0 left-0 w-full h-[35vh]" style="background: linear-gradient(180deg, rgba(14, 50, 74, 0.00) 0%, #0E324A 100%);"></div>
	</div>
	<div class="hero-title text-blue-shade-2 bg-blue-shade-5 -mt-28 lg:-mt-[3px] pb-12 pt-12 lg:pt-0">
		<div class="grid grid-cols-2 xl:grid-cols-12">
			<div class="col-span-2 xl:col-span-10 col-start-1 xl:col-start-2 flex flex-col xl:flex-row justify-center items-center text-center">
				<p class="section-hero--title font-miller font-light text-base xl:text-2xl invisible"><?php echo get_field( 'hero_section_before_title' ); ?></p>
				<h1 class="section-hero--title text-hero-title pb-6 xl:mx-12 invisible"><?php echo get_field( 'hero_section_title' ); ?></h1>
				<p class="section-hero--title font-miller font-light text-base xl:text-2xl invisible"><?php echo get_field( 'hero_section_after_title' ); ?></p>
			</div>
			<div class="col-span-3 flex items-center justify-start">
				
			</div>
		</div>
		<div class="w-full text-center pt-7">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/paper-boat.svg" class="section-hero--boat mx-auto w-[55px] xl:w-[83px] invisible" alt="Paper boat" title="Paper boat" />
			<?php
			$booking_url = get_field( 'booking_url', 'options' );
			if ( $booking_url ) :
				?><a href="<?php echo esc_url( $booking_url ); ?>" target="_blank" class="btn-header btn-header--booking uppercase mt-7 inline-block lg:hidden"><?php esc_html_e( 'Jetzt Buchen', 'baeren' ); ?></a><?php
			endif;
			?>
		</div>
	</div>
</section>
<hr class="wave-separator border-0" />