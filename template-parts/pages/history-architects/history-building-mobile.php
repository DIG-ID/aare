<section class="section-history-building bg-blue-shade-5 relative overflow-hidden block xl:hidden pb-28">
	<div class="theme-container">
		<div class="grid grid-cols-2 lg:grid-cols-12 gap-x-6">
			<div class="col-span-2 lg:col-span-10 col-start-1 lg:col-start-2 px-8 py-7 bg-blue-shade-1 rounded-t-[24px] relative">
				<h2 class="font-miller font-light text-[32px] leading-7 w-[60%] text-blue-shade-5"><?php echo get_field( 'building_title' ); ?></h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/waves-vertical.svg" class="w-[60px] py-8" alt="waves" title="waves" />
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mt-0"><?php the_field( 'building_timeline_1_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4"><?php the_field( 'building_timeline_1_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'building_timeline_2_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-0"><?php the_field( 'building_timeline_2_description' ); ?></p>
			</div>
			<div class="col-span-2 lg:col-span-10 col-start-1 lg:col-start-2 px-8 py-7 bg-blue-shade-1 relative">
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_3_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-10 mx-auto"><?php the_field( 'building_timeline_3_description' ); ?></p>
				<?php
				$bimage1 = get_field( 'building_image_1' );
				if ( $bimage1 ) :
						echo wp_get_attachment_image( $bimage1, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px] mx-auto' ) );
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-span-10 col-start-1 lg:col-start-2 px-8 py-7 bg-blue-shade-1 relative">
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_4_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_4_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_5_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_5_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_6_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-10 mx-auto"><?php the_field( 'building_timeline_6_description' ); ?></p>
				<?php
				$bimage2 = get_field( 'building_image_2' );
				if ( $bimage2 ) :
						echo wp_get_attachment_image( $bimage2, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px] mx-auto' ) );
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-span-10 col-start-1 lg:col-start-2 px-8 py-7 bg-blue-shade-1 relative">
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_7_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_7_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_8_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_8_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_9_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-10 mx-auto"><?php the_field( 'building_timeline_9_description' ); ?></p>
				<?php
				$bimage3 = get_field( 'building_image_3' );
				if ( $bimage3 ) :
						echo wp_get_attachment_image( $bimage3, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px] mx-auto' ) );
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-span-10 col-start-1 lg:col-start-2 px-8 py-7 bg-blue-shade-1 relative">
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_10_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_10_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_11_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-10 mx-auto"><?php the_field( 'building_timeline_11_description' ); ?></p>
				<?php
				$bimage4 = get_field( 'building_image_4' );
				if ( $bimage4 ) :
						echo wp_get_attachment_image( $bimage4, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px] mx-auto' ) );
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-span-10 col-start-1 lg:col-start-2 px-8 py-7 bg-blue-shade-1 rounded-b-[24px] relative">
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_12_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_12_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_13_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_13_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'building_timeline_14_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-0 mx-auto"><?php the_field( 'building_timeline_14_description' ); ?></p>
			</div>
		</div>
	</div>
</section>
