<section class="section-philosophie bg-blue-shade-5 text-blue-shade-1 pb-20 lg:pb-40">
	<div class="theme-container">
		<div class="theme-grid">
			<div class="col-span-2 lg:col-span-4 lg:col-start-2 order-2 lg:order-1  invisible fade-in--noscroll">
				<h3 class="text-title-h3 mb-12"><?php the_field( 'philosophie_title' ); ?></h3>
				<p class="text-body mb-16"><?php the_field( 'philosophie_description' ); ?></p>
			</div>
			<div class="col-span-2 lg:col-start-7 lg:col-span-5 order-1 lg:order-2  invisible fade-in--noscroll">
				<?php
				$pimage = get_field( 'philosophie_image' );
				if ( $pimage ) :
					echo wp_get_attachment_image( $pimage, 'full', false, array( 'class' => 'w-full object-cover rounded-[20px] mb-10 lg:mb-0' ) );
					else:
						echo '<img src="https://placehold.co/520x350/3E6C8A/FFF" class="w-full object-cover rounded-[20px] mb-10 lg:mb-0">';
					endif;
				?>
			</div>
		</div>
	</div>
</section>
