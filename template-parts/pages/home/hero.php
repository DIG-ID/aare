<section class="section-hero bg-blue-shade-1 pt-0 pb-0 relative">
	<div class="hero-block relative">
		<div class="absolute top-0 left-0 w-full h-[80vh]" style="background: linear-gradient(180deg, rgba(14, 50, 74, 0.85) 0%, rgba(232, 246, 255, 0.85) 48.5%);mix-blend-mode: multiply;"></div>
		<?php 
			$hero_image = get_field('hero_section_hero_image');
			$size = 'full';
			if( $hero_image ) {
				echo wp_get_attachment_image( $hero_image, $size, false, array( 'class' => 'w-full' ) );
			} 
		?>
		<div class="absolute bottom-0 left-0 w-full h-[35vh]" style="background: linear-gradient(180deg, rgba(14, 50, 74, 0.00) 0%, #0E324A 100%);"></div>
	</div>
	<div class="hero-title text-blue-shade-2 bg-blue-shade-5 -mt-[3px] pb-12">
		<div class="grid grid-cols-12">
			<div class="col-span-3 flex items-center justify-end">
				<p class="font-miller font-normal text-sm xl:text-2xl"><?php echo get_field( 'hero_section_before_title' ); ?></p>
			</div>
			<div class="col-span-6 text-center">
				<p class="text-hero-title pb-6"><?php echo get_field( 'hero_section_title' ); ?></p>
			</div>
			<div class="col-span-3 flex items-center justify-start">
				<p class="font-miller font-normal text-sm xl:text-2xl"><?php echo get_field( 'hero_section_after_title' ); ?></p>
			</div>
		</div>
		<div class="w-full text-center pt-7">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/paper-boat.svg" class="mx-auto" alt="Paper boat" title="Paper boat" />
		</div>
	</div>
</section>
<hr class="wave-separator border-0" />