<?php
if ( have_rows( 'teasers_boxes' ) ) :
	while ( have_rows( 'teasers_boxes' ) ) : the_row(); ?>
	<div class="col-span-2 xl:col-span-6 grid grid-cols-2 xl:grid-cols-6 gap-x-6 mt-32 xl:mt-0">
		<div class="col-span-2 xl:col-span-4 col-start-1 xl:col-start-2">
			<?php
			$teasers_image = get_sub_field('image');
			$size = 'full';
			if ( $teasers_image ) {
				echo wp_get_attachment_image( $teasers_image, $size, false, array( 'class' => 'w-full rounded-[20px]' ) );
			}
			?>
			<h3 class="text-title-h3 text-blue-shade-5 mt-10 mb-6"><?php echo get_sub_field( 'title' ); ?></h3>
			<p class="text-body !leading-[26px] text-blue-shade-5 mb-8"><?php echo get_sub_field( 'text' ); ?></p>
			<?php 
			$teasers_btn = get_sub_field( 'button' );
			if ( $teasers_btn ) :
				$teasers_btn_url    = $teasers_btn['url'];
				$teasers_btn_title  = $teasers_btn['title'];
				$teasers_btn_target = $teasers_btn['target'] ? $teasers_btn['target'] : '_self';
				?>
				<a class="btn-internal btn-internal--shade-transparent text-center" href="<?php echo esc_url( $teasers_btn_url ); ?>" target="<?php echo esc_attr( $teasers_btn_target ); ?>"><?php echo esc_html( $teasers_btn_title ); ?></a>
			<?php endif; ?>
		</div>
	</div>
	<?php endwhile;
endif;
?>