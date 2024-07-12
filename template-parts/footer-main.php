<footer class="footer-main bg-blue-shade-2 text-body">
	<section class="grid grid-cols-3 gap-x-8 max-w-2xl mx-auto py-36">
		<div class="col-span-3 flex justify-center items-center mb-14">
			logo
		</div>
		<div class="col-span-1 address">
			<p>
				Hotel an der Aare <br>
				Oberer Winkel 2 <br>
				CH-4500 Solothurn
			</p>
		</div>
		<div class="col-span-1 contact">
			<p><a href="tel:+41 32 626 24 00">Phone +41 32 626 24 00</a></p>
			<p><a href="fax:+41 32 626 24 10">Fax +41 32 626 24 10</a></p>
			<p><a href="mailto:info@hotelaare.ch">info@hotelaare.ch</a></p>
		</div>
		<div class="col-span-1 partner">
			logo partner
		</div>
	</section>
	<section class="footer-bunchen bg-blue-shade-5 text-blue-shade-1 py-32 text-body">
		<div class="max-w-xl flex flex-col justify-center items-center mx-auto">
			<h4 class="text-title mb-8">Superior Komfort mit Flussblick</h4>
			<div class="flex justify-between items-center">
				<p class="mr-16">Erleben Sie eine einzigartige Auszeit im Hotel an der Aare in Solothurn.</p>
				<a href="" class="btn-internal btn-internal--shade-3">Jetzt Buchen</a>
			</div>
		</div>
	</section>
	<section class="footer-copyright bg-blue-shade-4 text-body text-blue-shade-1 z-10">
		<div class="flex justify-between py-4 max-w-7xl mx-auto">
			<p>
			<?php
				$y = date( 'Y' );
				printf(
					esc_html__( 'Urheberrecht &copy; %d Hotel an der den Aare', 'aare' ),
					esc_html( $y )
				);
				?>
			</p>
			<a href="#header-main" class="flex">
				<?php esc_html_e( 'Zurück nach oben', 'aare' ); ?>
				<svg width="11" height="14" viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2">
					<path d="M5.5 1L1 6M5.5 1L10 6M5.5 1V13.5" stroke="#F2FAFF"/>
				</svg>
			</a>
		</div>
	</section>
</footer>
