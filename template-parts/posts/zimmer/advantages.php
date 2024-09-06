<section class="section-zimmer-advantages bg-blue-shade-3 py-24">
	<div class="theme-container">
		<div class="theme-grid">
			<div class="col-span-12">
				<h2 class="text-title text-blue-shade-1 text-center mb-24"><?php the_field( 'single_zimmer_value_title', 'options' ); ?></h2>
			</div>
			<div class="col-span-12 flex justify-between items-center mb-24">
				<?php
				if ( have_rows( 'single_zimmer_value_items', 'options' ) ) :
					while ( have_rows( 'single_zimmer_value_items', 'options' ) ) :
						the_row();
						?>
						<div class="value-item flex items-center gap-x-4">
							<div class="value-item-img">
								<?php
								$image = get_sub_field( 'image' );
								if ( $image ) :
									echo wp_get_attachment_image( $image, 'full' );
								endif;
								?>
							</div>
							<p class="text-body--serif text-blue-shade-1 !leading-8"><?php the_sub_field( 'description' ); ?></p>
						</div>
						<?php
					endwhile;
				endif;
				?>
			</div>
			<div class="col-span-12 flex justify-center gap-x-10">
				<?php
				$link1 = get_field( 'single_zimmer_value_link_1', 'options' );
				if ( $link1 ) :
					$link_url    = $link1['url'];
					$link_title  = $link1['title'];
					$link_target = $link1['target'] ? $link1['target'] : '_self';
					?>
					<a class="btn-internal btn-internal--shade-2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				$link2 = get_field( 'single_zimmer_value_link_2', 'options' );
				if ( $link2 ) :
					$link_url    = $link2['url'];
					$link_title  = $link2['title'];
					$link_target = $link2['target'] ? $link2['target'] : '_self';
					?>
					<a class="btn-internal btn-internal--shade-2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
