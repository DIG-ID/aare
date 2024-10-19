<section class="section-perfect-for-content pb-0 -mt-[2px]">
	<div class="theme-container !px-0 lg:!px-6">
		<div class="block lg:hidden min-h-20 bg-blue-shade-5 w-full -mt-1"></div>
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
					<div class="card-perfect-for grid grid-cols-2 lg:grid-cols-12 col-span-2 lg:col-span-12 gap-x-6 pb-14 lg:pb-0 lg:mb-40 lg:rounded-[20px] <?php echo esc_attr( $fade_class ); ?>">
						<div class="card-perfect-for-content col-span-2 lg:col-span-5 py-7 lg:pb-14 px-9 lg:px-28 self-end order-2 lg:order-1">
							<h2 class="text-title-h2 text-blue-shade-1 mb-4 lg:mb-7"><?php the_sub_field( 'title' ); ?></h2>
							<h3 class="text-title-h3 text-blue-shade-1 mb-4 lg:mb-7"><?php the_sub_field( 'subtitle' ); ?></h3>
							<div class="text-body text-blue-shade-1 mb-12"><?php the_sub_field( 'description' ); ?></div>
							<?php
							$ilink = get_sub_field( 'link' );
							if ( $ilink ) :
								$link_url    = $ilink['url'];
								$link_title  = $ilink['title'];
								$link_target = $ilink['target'] ? $ilink['target'] : '_self';
								?>
								<a class="btn-internal btn-internal--shade-transperant !text-blue-shade-1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php
							endif;
							?>
						</div>
						<div class="card-perfect-for-image col-start-1 lg:col-start-6 col-span-2 lg:col-span-6 relative order-1 lg:order-2">
							<?php
							$iimage = get_sub_field( 'image' );
							if ( $iimage ) :
								echo wp_get_attachment_image( $iimage, 'full', false, array( 'class' => 'relative -mt-12 lg:mt-0 lg:-top-14 w-full object-fit px-6 lg:px-0  rounded-[20px] min-h-[217px] lg:min-h-[432px]' ) );
							endif;
							?>
						</div>
					</div>
					<?php
					$i++;
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>
<section class="section-page-teasers py-8 lg:py-32 xl:pt-36">
	<div class="theme-container">
		<div class="theme-grid">
			<?php get_template_part( 'template-parts/components/teaser-default' ); ?>
		</div>
	</div>
</section>

