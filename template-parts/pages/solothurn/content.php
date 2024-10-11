<section class="section-solothurn-content pb-20 xl:pb-0">
	<div class="theme-container">
		<div class="theme-grid">
			<?php
			if ( have_rows( 'child_pages' ) ) :
				$i = 0;
				while ( have_rows( 'child_pages' ) ) :
					the_row();
					$fade_class = '';
					if ( 0 === $i ) :
						$fade_class = 'invisible fade-in--noscroll';
					else :
						$fade_class = 'invisible fade-in';
					endif;
					?>
					<div class="card-solothurn grid grid-cols-2 lg:grid-cols-12 col-span-2 lg:col-span-12 gap-x-6 mb-8 xl:mb-32 <?php echo esc_attr( $fade_class ); ?>">
						<div class="card-solothurn-content py-7 xl:py-20 px-9 xl:px-28 bg-white rounded-b-[20px] lg:rounded-[20px] self-start">
							<h2 class="text-title-h2 text-blue-shade-5 mb-4 xl:mb-7"><?php the_sub_field( 'title' ); ?></h2>
							<h2 class="text-title-h3 text-blue-shade-5 mb-4 xl:mb-7"><?php the_sub_field( 'subtitle' ); ?></h2>
							<div class="text-body text-blue-shade-5 mb-12"><?php the_sub_field( 'description' ); ?></div>
							<?php
							$ilink = get_sub_field( 'link' );
							if ( $ilink ) :
								$link_url    = $ilink['url'];
								$link_title  = $ilink['title'];
								$link_target = $ilink['target'] ? $ilink['target'] : '_self';
								?>
								<a class="btn-internal btn-internal--shade-transparent" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php
							endif;
							?>
						</div>
						<div class="card-solothurn-image">
							<?php
							$iimage = get_sub_field( 'image' );
							if ( $iimage ) :
								echo wp_get_attachment_image( $iimage, 'full', false, array( 'class' => ' w-full object-fit rounded-t-[20px] lg:rounded-[20px] min-h-[275px] xl:min-h-[672px]' ) );
							endif;
							?>
						</div>

					</div>

					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>
