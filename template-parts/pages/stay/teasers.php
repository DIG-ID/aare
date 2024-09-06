<section class="section-teasers bg-blue-shade-5 text-blue-shade-1 py-20 lg:py-32">
	<div class="theme-container">
		<div class="teasers-wrapper flex flex-col lg:flex-row lg:justify-between lg:items-center">
			<div class="teaser w-full text-center flex flex-col justify-between items-center mb-28 lg:mb-0">
				<div class="teaser-header flex flex-col justify-center items-center">
					<h2 class="text-title-h2 lg:mb-5"><?php the_field( 'teasers_sustainable_title' ); ?></h2>
					<svg class="my-8 lg:my-12" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M4.10023 8.10283C1.48182 10.7226 0.00752528 14.2734 2.87286e-05 17.978C-0.00746783 21.6826 1.45244 25.2393 4.06023 27.8697C7.00021 21.0673 12.2402 15.3854 18.7801 12.0042C13.1353 16.7822 9.32483 23.3733 8.0002 30.6507C13.2002 33.1115 19.6001 32.2112 23.9001 27.9097C30.86 20.9473 32 0 32 0C32 0 11.0602 1.1404 4.10023 8.10283Z" fill="#D2E8F7"/>
					</svg>
					<p class="text-body--serif mb-10 lg:mb-16"><?php the_field( 'teasers_sustainable_description' ); ?></p>
				</div>
				<?php
				$slink = get_field( 'teasers_sustainable_link' );
				if ( $slink ) :
					$link_url    = $slink['url'];
					$link_title  = $slink['title'];
					$link_target = $slink['target'] ? $slink['target'] : '_self';
					?>
					<a class="btn-internal btn-internal--shade-5" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				?>
			</div>
			<div class="hidden invisible lg:block lg:visible">
				<svg width="1" height="459" viewBox="0 0 1 459" fill="none" xmlns="http://www.w3.org/2000/svg">
					<line x1="0.5" y1="2.18557e-08" x2="0.49998" y2="459" stroke="#3E6C8A"/>
				</svg>
			</div>

			<div class="teaser w-full text-center flex flex-col justify-between items-center">
				<div class="teaser-header flex flex-col justify-center items-center"">
					<h2 class="text-title-h2 lg:mb-5"><?php the_field( 'teasers_information_title' ); ?></h2>
					<svg class="my-8 lg:my-12" width="15" height="32" viewBox="0 0 15 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M11.4654 0.00873995C11.8973 -0.0237479 12.3313 0.0345692 12.7384 0.179795C13.1455 0.32502 13.5163 0.553808 13.826 0.850873C14.1358 1.14794 14.3773 1.50644 14.5345 1.90241C14.6918 2.29839 14.761 2.72273 14.7377 3.14707V3.13907C14.6867 4.21976 14.2134 5.23964 13.416 5.98691C12.6186 6.73418 11.5584 7.15142 10.4557 7.15198L10.3674 7.15065H10.3714C9.93376 7.19717 9.49103 7.14611 9.07628 7.00127C8.66153 6.85643 8.28549 6.62155 7.97622 6.31417C7.66696 6.00679 7.43246 5.63485 7.29023 5.22611C7.148 4.81737 7.10171 4.3824 7.15483 3.95365L7.15347 3.96699C7.19459 2.88142 7.67152 1.85583 8.48028 1.11384C9.28904 0.37185 10.364 -0.0263466 11.4708 0.00607357H11.464L11.4654 0.00873995ZM4.74271 31.9973C3.01957 31.9973 1.75439 30.9534 2.96113 26.3633L4.93975 18.2201C5.28492 16.9163 5.34064 16.395 4.93975 16.395C3.46772 16.7582 2.07185 17.3714 0.815365 18.2068L0.86021 18.1788L0 16.7696C4.19369 13.274 9.02066 11.2249 11.0862 11.2249C12.8094 11.2249 13.0975 13.2593 12.2346 16.3897L9.97056 24.9501C9.56831 26.4633 9.74225 26.9845 10.1418 26.9845C11.5827 26.6642 12.9198 25.9971 14.0324 25.0434L14.0216 25.0527L15 26.3579C10.9177 30.4268 6.46449 32 4.74135 32L4.74271 31.9973Z" fill="#D2E8F7"/>
					</svg>
					<p class="text-body--serif mb-10 lg:mb-16">
						<?php the_field( 'teasers_information_description' ); ?>
					</p>
				</div>
				<?php
				$ilink = get_field( 'teasers_information_link' );
				if ( $ilink ) :
					$link_url    = $ilink['url'];
					$link_title  = $ilink['title'];
					$link_target = $ilink['target'] ? $ilink['target'] : '_self';
					?>
					<a class="btn-internal btn-internal--shade-5" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
