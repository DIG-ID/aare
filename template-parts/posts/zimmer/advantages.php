<section class="section-zimmer-advantages bg-white py-24">
	<div class="theme-container">
		<div class="theme-grid  fade-in">
			<div class="col-span-2 lg:col-span-12">
				<h2 class="text-title text-blue-shade-5 text-center mb-24"><?php the_field( 'single_zimmer_value_title', 'options' ); ?></h2>
			</div>
			<div class="col-span-2 lg:col-span-12 block lg:flex justify-between items-center mb-24">
				<?php
				if ( have_rows( 'single_zimmer_value_items', 'options' ) ) :
					while ( have_rows( 'single_zimmer_value_items', 'options' ) ) :
						the_row();
						?>
						<div class="value-item w-1/2 lg:w-1/4 flex flex-col lg:flex-row items-center float-left lg:float-none mb-11 min-h-16 lg:min-h-0">
							<div class="value-item-img">
								<?php
								$image = get_sub_field( 'image' );
								if ( $image ) :
									echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full max-w-[36px] lg:max-w-[50px] h-[25px] lg:h-[50px] mb-4 lg:mb-0 lg:mr-4' ) );
								endif;
								?>
							</div>
							<p class="text-body--serif text-blue-shade-5 !leading-8"><?php the_sub_field( 'description' ); ?></p>
						</div>
						<?php
					endwhile;
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-span-12 lg:flex justify-center gap-x-10">
				<?php
				$link1 = get_field( 'single_zimmer_value_link_1', 'options' );
				if ( $link1 ) :
					$link_url    = $link1['url'];
					$link_title  = $link1['title'];
					$link_target = $link1['target'] ? $link1['target'] : '_self';
					?>
					<a class="btn-internal btn-internal--shade-2 w-full lg:w-auto text-center mb-8 lg:mb-0" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				$link2 = get_field( 'single_zimmer_value_link_2', 'options' );
				if ( $link2 ) :
					$link_url    = $link2['url'];
					$link_title  = $link2['title'];
					$link_target = $link2['target'] ? $link2['target'] : '_self';
					?>
					<a class="btn-internal btn-internal--shade-2 w-full lg:w-auto text-center" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
