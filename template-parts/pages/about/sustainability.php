<section class="section-sustainability bg-blue-shade-4 text-blue-shade-1 pb-20 lg:pb-24 pt-24">
	<div class="theme-container">
		<div class="theme-grid">
			<div class="col-span-2 lg:col-span-12 flex flex-col justify-center items-center">
				<h2 class="text-title-h2 text-blue-shade-2 text-center mb-6"><?php the_field( 'sustainability_title' ); ?></h2>
				<div class="w-full text-center pt-5 pb-6 xl:pt-10 xl:pb-12">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/leave.svg" class="mx-auto w-[32px] xl:w-[32px]" alt="Tree leave" title="Tree leave" />
				</div>
				<p class="text-description text-blue-shade-2 text-center max-w-[470px] mb-14"><?php the_field( 'sustainability_description' ); ?></p>
				<?php
				$sust_btn = get_field( 'sustainability_button' );
				if ( $sust_btn ) :
					$sust_btn_url    = $sust_btn['url'];
					$sust_btn_title  = $sust_btn['title'];
					$sust_btn_target = $sust_btn['target'] ? $sust_btn['target'] : '_self';
					?>
					<a class="btn-internal btn-internal--shade-4 self-start mx-auto" href="<?php echo esc_url( $sust_btn_url ); ?>" target="<?php echo esc_attr( $sust_btn_target ); ?>"><?php echo esc_html( $sust_btn_title ); ?></a>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
