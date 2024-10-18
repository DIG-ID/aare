<section class="section-testimonials bg-blue-shade-3 pt-12 xl:pt-24 pb-28 relative overflow-hidden">
	<div class="theme-container">
		<div class="theme-grid">
			<div class="col-span-2 lg:col-span-12 pb-12 lg:pb-20">
				<h2 class="font-miller font-light text-2xl xl:text-5xl leading-7 w-[40%] xl:w-full mx-auto xl:mx-0 text-blue-shade-2 text-center"><?php the_field( 'testimonials_title' ); ?></h2>
			</div>
			<div class="col-span-2 lg:col-span-10 lg:col-start-2 grid grid-cols-2 lg:grid-cols-10 gap-x-6">
				<?php
				if ( have_rows( 'testimonials_list' ) ) :
					while ( have_rows( 'testimonials_list' ) ) :
						the_row();
						?>
						<div class="testimonials-box col-span-2 lg:col-span-5 rounded-[22px] bg-blue-shade-1 mb-12 lg:mb-0">
							<div class="px-8 py-7 lg:py-16 lg:px-24">
								<p class="text-body text-blue-shade-5 mb-2 italic"><?php echo esc_html ( get_sub_field( 'date' ) ); ?></p>
								<h3 class="text-bullets--primary text-blue-shade-5 mb-7"><?php echo get_sub_field( 'name' ); ?></h3>
								<p class="text-body text-blue-shade-5 italic"><?php echo get_sub_field( 'testimonial' ); ?></p>
							</div>
						</div>
						<?php
					endwhile;
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-span-12 pt-9">
				<div class="w-full text-center">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Trustpilot.svg" class="mx-auto w-[186px] lg:w-[186px]" alt="Tustpilot" title="Trustpilot" />
				</div>
			</div>
		</div>
	</div>
</section>
