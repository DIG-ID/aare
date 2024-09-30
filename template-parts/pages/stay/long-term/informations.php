<section class="section-studios-info relative my-0 lg:my-11 xl:mt-0 xl:-mb-64 bg-blue-shade-3 lg:bg-white">
	<div class="theme-container">
		<div class="theme-grid">
			<div class="studio-info col-span-2 lg:col-span-12 bg-blue-shade-3 flex flex-col lg:flex-row lg:justify-between lg:relative xl:-top-1/2 lg:rounded-[20px] pt-14 pb-20 px-0 lg:px-16 xl:py-24 xl:px-28">
				<div class="w-full">
					<h2 class="text-title-h2 text-blue-shade-1 mb-9 lg:mb-16 text-center lg:text-left"><?php the_field( 'info_included_services_title' );?></h2>
					<?php
					if ( have_rows( 'info_included_services_list' ) ) :
						?><ul class="list__include-services flex flex-col"><?php
						while ( have_rows( 'info_included_services_list' ) ) :
							the_row();
							?>
							<li class="text-body--serif text-blue-shade-1"><?php the_sub_field( 'text' ); ?></li>
							<?php
						endwhile;
						?></ul><?php
					endif;
					?>
				</div>
				<div class="hidden invisible lg:block lg:visible">
					<span class="w-[1px] h-full bg-blue-shade-2 block mx-28"></span>
				</div>
				<div class="w-full mt-16 lg:mt-0">
					<h2 class="text-title-h2 text-blue-shade-1 mb-9 lg:mb-16 text-center lg:text-left"><?php the_field( 'info_equipment_title' );?></h2>
					<?php
					if ( have_rows( 'info_equipment_list' ) ) :
						?><ul class="list__include-services flex flex-col"><?php
						while ( have_rows( 'info_equipment_list' ) ) :
							the_row();
							?>
							<li class="text-body--serif text-blue-shade-1"><?php the_sub_field( 'text' ); ?></li>
							<?php
						endwhile;
						?></ul><?php
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
