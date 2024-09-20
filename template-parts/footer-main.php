<footer class="footer-main bg-blue-shade-2 ">
	<section class="grid grid-cols-2 lg:grid-cols-3 gap-x-6 lg:gap-x-8 lg:max-w-2xl mx-auto py-36 px-6">
		<div class="col-span-2 lg:col-span-3 flex justify-center items-center mb-14">
			<div class="site-branding">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/paper-boat.svg" class="w-[66px] mb-5 mx-auto" alt="paper boat" title="paper boat" />
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link"><?php do_action( 'theme_logo_dark' ); ?></a>
			</div>
		</div>
		<div class="col-span-1 lg:col-span-1 address">
			<p class="text-body text-blue-shade-5"><?php the_field( 'footer_address', 'options' ); ?></p>
		</div>
		<div class="col-span-1 lg:col-span-1 contact">
			<?php
			$phone = get_field( 'footer_phone', 'options' );
			if ( $phone ) :
				?> <p class="text-body text-blue-shade-5"><a href="tel:<?php echo esc_url( $phone ); ?>"><?php esc_html_e( 'Phone', 'aare' );?> <?php echo $phone; ?></a></p><?php
			endif;
			$email = get_field( 'footer_phone', 'options' );
			if ( $email ) :
				?> <p class="text-body text-blue-shade-5"><a href="mailto:<?php echo esc_url( $email ); ?>"><?php echo $email ; ?></a></p><?php
			endif;
			?>
		</div>
		<div class="col-span-2 lg:col-span-1 text-center mt-10 lg:mt-0 flex justify-center lg:block" style="mix-blend-mode: multiply;">
			<?php
			$partner_logo = get_field( 'footer_partner_logo', 'options' );
			if ( $partner_logo ) :
				echo wp_get_attachment_image( $partner_logo, 'full', false, array( 'class' => 'max-w-full object-cover' ) );
			endif;
			?>
		</div>
	</section>
	<section class="footer-bunchen bg-blue-shade-5 text-blue-shade-1 pt-16 pb-32 lg:py-32 ">
		<div class="theme-container">
			<div class="theme-grid">
				<div class="col-span-2 lg:col-span-6 lg:col-start-4 flex flex-col justify-center items-center gap-x-6">
					<h4 class="text-title text-blue-shade-2 mb-8 text-center"><?php the_field( 'footer_call_to_action_title', 'options' ); ?></h4>
					<div class="flex flex-col lg:flex-row justify-center lg:justify-between items-center lg:max-w-[589px] gap-x-6">
						<p class="text-body text-blue-shade-2 mb-8 lg:mb-0 text-center lg:text-left w-3/5 lg:w-full"><?php the_field( 'footer_call_to_action_description', 'options' ); ?></p>
						<?php
						$booking_url = get_field( 'booking_url', 'options' );
						if ( $booking_url ) :
							?><a href="<?php echo esc_url( $booking_url ); ?>" target="_blank" class="btn-internal btn-internal--shade-3 !text-[16px] !font-poppins uppercase font-medium tracking-[0.16px]"><?php esc_html_e( 'Jetzt Buchen', 'aare' ); ?></a><?php
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="footer-copyright bg-blue-shade-4 z-10">
		<div class="flex flex-col lg:flex-row justify-center lg:justify-between items-center py-4 max-w-7xl mx-auto px-6">
			<p class="text-body text-blue-shade-1 mb-6 lg:mb-0">
			<?php
				$y = date( 'Y' );
				printf(
					esc_html__( 'Urheberrecht &copy; %d Hotel an der den Aare', 'aare' ),
					esc_html( $y )
				);
				?>
			</p>
			<a href="#header-main" class="text-body text-blue-shade-1 flex mb-6 lg:mb-0">
				<?php esc_html_e( 'Zurück nach oben', 'aare' ); ?>
				<svg width="11" height="14" viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2">
					<path d="M5.5 1L1 6M5.5 1L10 6M5.5 1V13.5" stroke="#F2FAFF"/>
				</svg>
			</a>
		</div>
	</section>
</footer>
