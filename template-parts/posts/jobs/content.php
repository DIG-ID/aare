<section class="section-jobs-content bg-blue-shade-5 text-blue-shade-2 pb-28">
	<div class="theme-container">
		<div class="theme-grid">
			<div class="col-span-2 lg:col-span-6 px-7 lg:px-24 py-16 lg:py-28 bg-white rounded-[20px] self-start order-2 lg:order-1">
				<p class="text-body text-blue-shade-5 !font-semibold mb-11 lg:mb-8 !leading-[1.6]"><?php the_field( 'single_jobs_note_1', 'options' ); ?></p>
				<p class="text-body text-blue-shade-5 !font-light !leading-normal !leading-[1.6"><?php the_field( 'single_jobs_note_2', 'options' ); ?></p>
			</div>
			<div class="col-span-2 lg:col-span-6 px-7 lg:px-24 py-16 lg:py-28 bg-white rounded-[20px] order-1 lg:order-2 mb-8 lg:mb-0">
				<h1 class="text-title text-blue-shade-5 mb-10"><?php the_title(); ?></h1>
				<div class="section-jobs-content-wrapper">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
