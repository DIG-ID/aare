<section class="section-culture-intro bg-purple-shade-1 pb-28 lg:pb-56">
	<div class="theme-container">
		<div class="theme-grid lg:grid-rows-2 lg:grid-flow-col gap-y-0">
			<div class="col-span-2 lg:col-span-5 self-start">
				<?php
				$image = get_field( 'intro_image' );
				if ( $image ) :
					echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover rounded-[20px] mb-4 lg:mb-0' ) );
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-span-5 py-12 lg:py-20 pl-9 pr-14 lg:px-28 bg-white rounded-[20px] self-start order-3 lg:order-2">
				<p class="text-body--serif text-blue-shade-5 mb-16"><?php the_field( 'intro_small_box_description' ); ?></p>
				<?php
				$mlink = get_field( 'intro_small_box_link' );
				if ( $mlink ) :
					$link_url    = $mlink['url'];
					$link_title  = $mlink['title'];
					$link_target = $mlink['target'] ? $mlink['target'] : '_self';
					?>
					<a class="btn-internal btn-internal--shade-transparent" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				?>
			</div>
			<div class="col-span-2  lg:col-span-7 lg:row-span-2 pt-12 lg:py-20 pl-9 pr-14 lg:px-28 bg-white rounded-[20px] order-2 lg:order-3 mb-28 lg:mb-0 self-start">
				<h2 class="text-title-h2 text-blue-shade-5 mb-12"><?php the_field( 'intro_big_box_title' ); ?></h2>
				<p class="text-body text-blue-shade-5 lg:max-w-[410px]"><?php the_field( 'intro_big_box_description' ); ?></p>
				<?php
				$image2 = get_field( 'intro_big_box_image' );
				if ( $image2 ) :
					echo wp_get_attachment_image( $image2, 'full', false, array( 'class' => 'w-full object-cover rounded-[20px] relative -bottom-20 lg:-bottom-40' ) );
				endif;
				?>
			</div>
		</div>
	</div>

</section>
