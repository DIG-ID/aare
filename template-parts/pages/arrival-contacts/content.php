<section class="section-arrival-contact-content pb-28 lg:pb-16">
	<div class="theme-container">
		<div class="flex flex-col flex-wrap lg:h-[1900px] gap-6">
			<div class="address w-full lg:w-1/2 bg-white px-8 lg:px-28 pt-9 lg:pt-14 pb-14 lg:pb-28 rounded-[20px] overflow-hidden order-1 lg:order-1">
				<img class="mb-8 lg:mb-16" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/boat.png' ) ); ?>" alt="boat">
				<p class="text-body--serif text-blue-shade-5 mb-4 lg:mb-8"><?php the_field( 'address_address' ); ?></p>
				<?php
				$phone = get_field( 'address_phone' );
				if ( $phone ) :
					?>
					<p class="text-body--serif text-blue-shade-5 mb-4 lg:mb-8">
						<?php esc_html_e( 'Telefon:', 'aare' ); ?> <a class="inline-block" href="tel:<?php echo esc_url( $phone ); ?>"><?php echo esc_html( $phone ); ?></a>
					</p>
					<?php
				endif;
				$email = get_field( 'address_email' );
				if ( $email ) :
					?>
					<p class="text-body--serif text-blue-shade-5">
						<?php esc_html_e( 'Email:', 'aare' ); ?> <a class="inline-block" href="mailto:<?php echo esc_url( $email ); ?>"><?php echo esc_html( $email ); ?></a>
					</p>
					<?php
				endif;
				?>
			</div>
			<div class="arrival-by-auto w-full lg:w-1/2 bg-white rounded-[20px] overflow-hidden order-4 lg:order-2">
				<?php
				$bycar = get_field( 'arrival_by_auto_image' );
				if ( $bycar ) :
					echo wp_get_attachment_image( $bycar, 'full', false, array( 'class' => 'w-full object-cover rounded-b-[20px] min-h-[225px]' ) );
				endif;
				?>
				<div class="px-8 lg:px-28 pt-9 lg:pt-14 pb-14 lg:pb-28">
					<h2 class="text-title-h3 text-blue-shade-5 mb-6"><?php the_field( 'arrival_by_auto_title' ); ?></h2>
					<?php
					if ( have_rows( 'arrival_by_auto_list' ) ) :
						echo '<ul class="list text-blue-shade-5">';
						while ( have_rows( 'arrival_by_auto_list' ) ) :
							the_row();
							echo '<li>' . get_sub_field( 'text' ) . '</li>';
						endwhile;
						echo '</ul>';
					endif;
					?>
				</div>
			</div>
			<div class="arrival-by-zug w-full lg:w-1/2 bg-white rounded-[20px] overflow-hidden order-5 lg:order-3">
				<?php
				$byzug = get_field( 'arrival_by_zug_image' );
				if ( $byzug ) :
					echo wp_get_attachment_image( $byzug, 'full', false, array( 'class' => 'w-full object-cover rounded-b-[20px] min-h-[225px]' ) );
				endif;
				?>
				<div class="px-8 lg:px-28 pt-9 lg:pt-14 pb-14 lg:pb-28 ">
					<h2 class="text-title-h3 text-blue-shade-5 mb-6"><?php the_field( 'arrival_by_zug_title' ); ?></h2>
					<p class="text-body text-blue-shade-5"><?php the_field( 'arrival_by_zug_description' ); ?></p>
				</div>
			</div>
			<div class="contact-form w-full lg:w-1/2 bg-white px-8 lg:px-20 pt-12 lg:pt-14 pb-14 lg:pb-28 rounded-[20px] overflow-hidden order-2 lg:order-4">
				<h2 class="text-title-h3 text-blue-shade-5 mb-8"><?php the_field( 'contact_form_title' ); ?></h2>
				<?php
				$form_sc = get_field( 'contact_form_form' );
				if ( $form_sc ) :
					echo do_shortcode( $form_sc );
				endif;
				?>
			</div>
			<div class="map w-full lg:w-1/2 bg-white rounded-[20px] overflow-hidden order-3 lg:order-5 min-h-[614px]">
				<?php
				$location = get_field( 'map' );
				if ( $location ) :
					?>
					<div class="acf-map" data-zoom="16">
						<div class="marker" data-lat="<?php echo esc_attr( $location['lat'] ); ?>" data-lng="<?php echo esc_attr( $location['lng'] ); ?>"></div>
					</div>
					<?php
				endif;
				?>
			</div>
			<div class="arrival-by-bus w-full lg:w-1/2 bg-white rounded-[20px] overflow-hidden order-6 lg:order-6">
				<?php
				$bybus = get_field( 'arrival_by_bus_image' );
				if ( $bybus ) :
					echo wp_get_attachment_image( $bybus, 'full', false, array( 'class' => 'w-full object-cover rounded-b-[20px] min-h-[225px]' ) );
				endif;
				?>
				<div class="px-8 lg:px-28 pt-9 lg:pt-14 pb-14 lg:pb-28 ">
					<h2 class="text-title-h3 text-blue-shade-5 mb-6"><?php the_field( 'arrival_by_bus_title' ); ?></h2>
					<p class="text-body text-blue-shade-5"><?php the_field( 'arrival_by_bus_description' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
