<section class="section-zimmer-teaser bg-blue-shade-5 text-blue-shade-1 pb-20 lg:pb-40">
	<div class="theme-container">
		<h2 class="text-title text-center mb-6 lg:mb-20"><?php the_field( 'zimmer_title' ); ?></h2>
		<div class="theme-grid">
			<div class="col-span-2 lg:col-span-4 lg:col-start-2 order-2 lg:order-1">
				<h3 class="text-title-h3 mb-5"><?php the_field( 'zimmer_subtitle_01' ); ?></h3>
				<p class="text-body mb-16"><?php the_field( 'zimmer_description_01' ); ?></p>
				<h3 class="text-title-h3 mb-5"><?php the_field( 'zimmer_subtitle_02' ); ?></h3>
				<p class="text-body mb-16"><?php the_field( 'zimmer_description_01' ); ?></p>
				<?php
				$zlink = get_field( 'zimmer_link' );
				if ( $zlink ) :
					$link_url    = $zlink['url'];
					$link_title  = $zlink['title'];
					$link_target = $zlink['target'] ? $zlink['target'] : '_self';
					?>
					<a class="btn-internal btn-internal--shade-5" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				?>
			</div>
			<div class="col-span-2 lg:col-start-7 lg:col-span-5 order-1 lg:order-2">
				<?php
				$zimage = get_field( 'zimmer_image' );
				if ( $zimage ) :
					echo wp_get_attachment_image( $zimage, 'full', false, array( 'class' => 'w-full object-cover rounded-[20px] mb-10 lg:mb-0' ) );
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<hr class="wave-separator border-0" />