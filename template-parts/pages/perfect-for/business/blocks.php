<section class="section-business-blocks bg-white pb-14 lg:pb-0 pt-8 lg:pt-28 xl:pt-40">
	<div class="theme-container">
		<div class="theme-grid">
			<?php
			if ( have_rows( 'blocks' ) ) :
				while ( have_rows( 'blocks' ) ) :
					the_row();
					?>
					<div class="card-perfect-for--business grid grid-cols-2 lg:grid-cols-12 lg:grid-rows-1 col-span-2 lg:col-span-12 gap-x-6 mb-8 lg:mb-28 fade-in">
						<div class="card-perfect-for---business-content col-span-2 lg:col-span-7 lg:col-start-1 py-7 xl:py-14 px-9 xl:px-28 -mt-4 xl:mt-0 bg-blue-shade-4 rounded-[20px] lg:row-span-full relative z-20 flex flex-col justify-center order-2 lg:order-1">
							<h2 class="text-title-h2 text-blue-shade-1 mb-4 lg:mb-7 lg:max-w-[450px]"><?php the_sub_field( 'title' ); ?></h2>
							<div class="text-body text-blue-shade-1 mb-12 lg:max-w-[410px]"><?php the_sub_field( 'description' ); ?></div>
							<?php
							$blink = get_sub_field( 'link' );
							if ( $blink ) :
								$link_url    = $blink['url'];
								$link_title  = $blink['title'];
								$link_target = $blink['target'] ? $blink['target'] : '_self';
								?>
								<a class="btn-internal btn-internal--shade-transperant !text-blue-shade-1 self-start" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php
							endif;
							?>
						</div>
						<div class="card-perfect-for---business-image col-span-2 lg:col-span-6 lg:col-start-7 lg:col-end-13  relative lg:z-10 lg:row-span-full order-1 lg:order-2">
							<?php
							$iimage = get_sub_field( 'image' );
							if ( $iimage ) :
								echo wp_get_attachment_image( $iimage, 'full', false, array( 'class' => 'w-full object-fit rounded-t-[20px] lg:rounded-[20px] min-h-[327px] max-h-[327px] lg:min-h-[490px] lg:max-h-[490px]' ) );
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
