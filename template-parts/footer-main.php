<footer class="footer-main bg-blue-shade-2 ">
	<section class="grid grid-cols-2 lg:grid-cols-3 gap-x-6 lg:gap-x-8 lg:max-w-2xl mx-auto py-36 px-6">
		<div class="col-span-2 lg:col-span-3 flex justify-center items-center mb-14">
			<div class="site-branding">
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link"><?php do_action( 'theme_logo_dark' ); ?></a>
			</div>
		</div>
		<div class="col-span-1 lg:col-span-1 address">
			<p class="text-body">
				Hotel an der Aare <br>
				Oberer Winkel 2 <br>
				CH-4500 Solothurn
			</p>
		</div>
		<div class="col-span-1 lg:col-span-1 contact">
			<p class="text-body"><a href="tel:+41 32 626 24 00">Phone +41 32 626 24 00</a></p>
			<p class="text-body"><a href="fax:+41 32 626 24 10">Fax +41 32 626 24 10</a></p>
			<p class="text-body"><a href="mailto:info@hotelaare.ch">info@hotelaare.ch</a></p>
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
	<section class="footer-bunchen bg-blue-shade-5 text-blue-shade-1 py-32 ">
		<div class="lg:max-w-xl flex flex-col justify-center items-center mx-auto px-6">
			<h4 class="text-title mb-8">Superior Komfort mit Flussblick</h4>
			<div class="flex flex-col lg:flex-row justify-center lg:justify-between items-center">
				<p class="text-body lg:mr-16 mb-8 lg:mb-0 text-center lg:text-left w-3/5 lg:w-full">Erleben Sie eine einzigartige Auszeit im Hotel an der Aare in Solothurn.</p>
				<a href="" class="btn-internal btn-internal--shade-3">Jetzt Buchen</a>
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
