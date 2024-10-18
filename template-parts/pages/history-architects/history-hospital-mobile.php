<section class="section-history-hospital relative overflow-hidden block xl:hidden xl:invisible pb-28">
	<div class="theme-container">
		<div class="grid grid-cols-2 lg:grid-cols-12 gap-x-6">
			<div class="col-span-2 lg:col-span-10 col-start-1 lg:col-start-2 px-8 py-7 bg-blue-shade-1 rounded-t-[24px] relative">
				<h2 class="font-miller font-light text-[32px] xl:text-5xl leading-7 w-[60%] text-blue-shade-5"><?php echo get_field( 'hospital_title' ); ?></h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/waves.svg" class="w-[143px] py-11" alt="waves" title="waves" />
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mt-0"><?php the_field( 'hospital_timeline_1_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_1_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_2_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-10"><?php the_field( 'hospital_timeline_2_description' ); ?></p>
				<?php
				$himage1 = get_field( 'hospital_image_1' );
				if ( $himage1 ) :
					echo wp_get_attachment_image( $himage1, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px]' ) );
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-span-10 col-start-1 lg:col-start-2 px-8 py-7 bg-blue-shade-1 relative">
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_3_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_3_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_4_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-0 mx-auto"><?php the_field( 'hospital_timeline_4_description' ); ?></p>
			</div>
			<div class="col-span-2 lg:col-span-10 col-start-1 lg:col-start-2 px-8 py-7 bg-blue-shade-1 relative">
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_5_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_5_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_6_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_6_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_7_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-10 mx-auto"><?php the_field( 'hospital_timeline_7_description' ); ?></p>
				<?php
				$himage2 = get_field( 'hospital_image_2' );
				if ( $himage2 ) :
					echo wp_get_attachment_image( $himage2, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px] mx-auto' ) );
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-span-10 col-start-1 lg:col-start-2 px-8 py-7 bg-blue-shade-1 relative">
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_8_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-10 mx-auto"><?php the_field( 'hospital_timeline_8_description' ); ?></p>    
				<?php
				$himage3 = get_field( 'hospital_image_3' );
				if ( $himage3 ) :
					echo wp_get_attachment_image( $himage3, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px] mx-auto' ) );
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-span-10 col-start-1 lg:col-start-2 px-8 py-7 bg-blue-shade-1 relative">
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_9_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_9_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_10_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_10_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_11_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-10 mx-auto"><?php the_field( 'hospital_timeline_11_description' ); ?></p>
				<?php
				$himage4 = get_field( 'hospital_image_4' );
				if ( $himage4 ) :
					echo wp_get_attachment_image( $himage4, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px] mx-auto' ) );
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-span-10 col-start-1 lg:col-start-2 px-8 py-7 bg-blue-shade-1 relative">
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_12_year' ); ?></h3>
				<p class="text-body text-blue-shade-5  mb-4 mx-auto"><?php the_field( 'hospital_timeline_12_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_13_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_13_description' ); ?></p>
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_14_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-0 mx-auto"><?php the_field( 'hospital_timeline_14_description' ); ?></p>
			</div>
			<div class="col-span-2 lg:col-span-10 col-start-1 lg:col-start-2 px-8 py-7 bg-blue-shade-1 rounded-b-[24px] relative">
				<h3 class="text-title-h3 text-blue-shade-5 mb-4 mx-auto"><?php the_field( 'hospital_timeline_15_year' ); ?></h3>
				<p class="text-body text-blue-shade-5 mb-10 mx-auto"><?php the_field( 'hospital_timeline_15_description' ); ?></p>
				<?php
				$himage5 = get_field( 'hospital_image_5' );
				if ( $himage5 ) :
					echo wp_get_attachment_image( $himage5, 'full', false, array( 'class' => 'w-full object-cover rounded-[24px] mx-auto' ) );
				endif;
				?>
			</div>
		</div>
	</div>
</section>
