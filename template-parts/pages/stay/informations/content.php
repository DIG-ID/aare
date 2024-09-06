<section class="section-information-content bg-blue-shade-3 pt-8 lg:pt-0 pb-28 lg:pb-0">
	<div class="theme-container">
		<div class="flex flex-col flex-wrap gap-6 h-auto lg:h-[1160px]">
			<?php
			$reception = get_field( 'reception' );
			if ( $reception ) :
				?>
				<div class="card-service w-full lg:w-[calc(50%-12px)] bg-white py-12 lg:py-20 pl-9 pr-14 lg:px-28 rounded-[20px] order-1">
					<h2 class="text-title-h3 mb-4 lg:mb-7"><?php the_field( 'reception_title' ); ?></h2>
					<div class="text-body"><?php the_field( 'reception_description' ); ?></div>
				</div>
				<?php
			endif;
			$breakfast = get_field( 'breakfast' );
			if ( $breakfast ) :
				?>
				<div class="card-service w-full lg:w-[calc(50%-12px)] bg-white py-12 lg:py-20 pl-9 pr-14 lg:px-28 rounded-[20px] order-3 lg:order-2">
					<h2 class="text-title-h3 mb-4 lg:mb-7"><?php the_field( 'breakfast_title' ); ?></h2>
					<div class="text-body"><?php the_field( 'breakfast_description' ); ?></div>
				</div>
				<?php
			endif;
			$check = get_field( 'check' );
			if ( $check ) :
				?>
				<div class="card-service w-full lg:w-[calc(50%-12px)] bg-white py-12 lg:py-20 pl-9 pr-14 lg:px-28 rounded-[20px] order-2 lg:order-3">
					<div class="mb-12 lg:mb-16">
						<h2 class="text-title-h3 mb-4 lg:mb-7"><?php the_field( 'check_in_title' ); ?></h2>
						<div class="text-body"><?php the_field( 'check_in_description' ); ?></div>
					</div>
					<div>
						<h2 class="text-title-h3 mb-4 lg:mb-7"><?php the_field( 'check_in_title' ); ?></h2>
						<div class="text-body"><?php the_field( 'check_in_description' ); ?></div>
					</div>
				</div>
				<?php
			endif;
			$animals = get_field( 'animals' );
			if ( $animals ) :
				?>
				<div class="card-service w-full lg:w-[calc(50%-12px)] bg-white py-12 lg:py-20 pl-9 pr-14 lg:px-28 rounded-[20px] order-4">
					<h2 class="text-title-h3 mb-4 lg:mb-7"><?php the_field( 'animals_title' ); ?></h2>
					<div class="text-body"><?php the_field( 'animals_description' ); ?></div>
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</section>
