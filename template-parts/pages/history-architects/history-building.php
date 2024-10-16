<section class="section-history-building bg-blue-shade-4 relative overflow-hidden hidden xl:block">
	<div class="history-building pb-8 pt-32 relative pr-20">    
		<div class="h-[84vh] w-[6000px] grid grid-cols-9 my-auto">
			<div class="col-span-1 text-right">
				<?php
				$banner_image = get_field( 'building_banner' );
				$banner_image_hover = get_field( 'building_banner_hover' );
				$size = 'full';
				if ( $banner_image && $banner_image_hover ) { 
					?>
					<div class="image-container relative">
						<?php echo wp_get_attachment_image( $banner_image, $size, false, array( 'class' => 'building-image w-[300px] rounded-[24px] inline-block mr-6 absolute top-0 right-0 transition-opacity duration-700 ease-in-out opacity-100' ) ); ?>
						<?php echo wp_get_attachment_image( $banner_image_hover, $size, false, array( 'class' => 'building-image-hover w-[300px] rounded-[24px] inline-block mr-6 absolute top-0 right-0 transition-opacity duration-700 ease-in-out opacity-0' ) ); ?>
					</div>
					<?php
				}
				?>
			</div>
			<div class="col-span-1 pl-28 pt-12 bg-blue-shade-1 rounded-l-[24px] relative">
				<h2 class="font-miller font-light text-2xl xl:text-5xl leading-7 w-[60%] text-blue-shade-5"><?php echo get_field( 'building_title' ); ?></h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/waves-vertical.svg" class="w-[60px] py-8" alt="waves" title="waves" />
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mt-0 lg:max-w-[410px]"><?php the_field( 'building_timeline_1_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-[4%] lg:max-w-[410px]"><?php the_field( 'building_timeline_1_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 lg:max-w-[410px]"><?php the_field( 'building_timeline_2_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-0 lg:max-w-[410px]"><?php the_field( 'building_timeline_2_description' ); ?></p>
				<div class="w-full absolute bottom-[8%] right-0 pl-28 z-10"><div class="line-with-dots"></div></div>
			</div>
			<div class="col-span-1 pt-12 bg-blue-shade-1 lg:-ml-[2px] relative">
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_3_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-[18%] lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_3_description' ); ?></p>
				<?php
				$bimage1 = get_field( 'building_image_1' );
				if ( $bimage1 ) :
						echo wp_get_attachment_image( $bimage1, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px] mx-auto lg:max-w-[520px] lg:mb-0' ) );
				endif;
				?>
				<div class="w-full absolute bottom-[8%] right-0 z-10"><div class="line-single-dot"></div></div>
			</div>
			<div class="col-span-1 pt-12 bg-blue-shade-1 lg:-ml-[2px] relative">
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_4_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-[15%] lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_4_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_5_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-[13%] lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_5_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_6_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-0 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_6_description' ); ?></p>
				<div class="w-full absolute bottom-[8%] right-0 z-10"><div class="line-single-dot"></div></div>
			</div>
			<div class="col-span-1 pt-12 bg-blue-shade-1 lg:-ml-[2px] relative">
				<?php
				$bimage2 = get_field( 'building_image_2' );
				if ( $bimage2 ) :
						echo wp_get_attachment_image( $bimage2, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px] mx-auto lg:max-w-[520px] mb-10 lg:mb-[9%]' ) );
				endif;
				?>
				<?php
				$bimage3 = get_field( 'building_image_3' );
				if ( $bimage3 ) :
						echo wp_get_attachment_image( $bimage3, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px] mx-auto lg:max-w-[520px] lg:mb-0' ) );
				endif;
				?>
				<div class="w-full absolute bottom-[8%] right-0 z-10"><div class="line-single-dot"></div></div>
			</div>
			<div class="col-span-1 pt-12 bg-blue-shade-1 lg:-ml-[2px] relative">
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_7_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-[24%] lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_7_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_8_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-[13%] lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_8_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_9_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-0 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_9_description' ); ?></p>
				<div class="w-full absolute bottom-[8%] right-0 z-10"><div class="line-single-dot"></div></div>
			</div>
			<div class="col-span-1 pt-12 bg-blue-shade-1 lg:-ml-[2px] relative">
				<?php
				$bimage4 = get_field( 'building_image_4' );
				if ( $bimage4 ) :
						echo wp_get_attachment_image( $bimage4, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px] mx-auto lg:max-w-[520px] mb-10 lg:mb-[4%]' ) );
				endif;
				?>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_10_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-[15%] lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_10_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_11_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-0 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_11_description' ); ?></p>
				<div class="w-full absolute bottom-[8%] right-0 z-10"><div class="line-single-dot"></div></div>
			</div>
			<div class="col-span-1 pt-12 bg-blue-shade-1 lg:-ml-[2px] relative">
			<h3 class="text-title-h3 text-blue-shade-5 mb-4 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_12_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-[19%] lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_12_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_13_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-[18%] lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_13_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_14_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-0 lg:max-w-[410px] mx-auto"><?php the_field( 'building_timeline_14_description' ); ?></p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/paper-boat.svg" class="w-[66px] absolute bottom-[10%] -right-16" alt="paper boat" title="paper boat" />
			</div>
			<div class="col-span-1 pt-12 lg:-ml-[2px] bg-blue-shade-1 rounded-r-[24px] w-1/3">

			</div>
		</div>
	</div>
</section>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		const image = document.querySelector('.building-image');
		const imageHover = document.querySelector('.building-image-hover');

		if ( image && imageHover ) {
			setInterval(() => {
			if (image.style.opacity == '0') {
				image.style.opacity = '1';
				imageHover.style.opacity = '0';
			} else {
				image.style.opacity = '0';
				imageHover.style.opacity = '1';
			}
			}, 4000); // Change image every 5 seconds
		}
	});
</script>
