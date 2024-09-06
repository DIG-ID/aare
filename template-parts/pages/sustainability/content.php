<section class="section-sustainability-content bg-blue-shade-3 pt-8 lg:pt-0 pb-28 lg:pb-0">
	<div class="theme-container">
		<div class="flex flex-col flex-wrap gap-6 h-auto lg:h-[2200px]">
			<?php
			$swisstainable = get_field( 'swisstainable' );
			if ( $swisstainable ) :
				?>
				<div class="card-sustainability w-full lg:w-[calc(50%-12px)] bg-white rounded-[20px] overflow-hidden order-1">
					<?php
					$swissimage = get_field( 'swisstainable_image' );
					if ( $swissimage ) :
						echo wp_get_attachment_image( $swissimage, 'full', false, array( 'class' => 'w-full object-fit rounded-b-[20px]' ) );
					endif;
					?>
					<div class="card-sustainability-content pb-12 lg:pb-20 px-9 lg:px-28">
						<?php
						$swisslogo  = get_field( 'swisstainable_logo' );
						if ( $swisslogo ) :
							echo wp_get_attachment_image( $swisslogo, 'full', false, array( 'class' => 'max-w-full object-fit rounded-[20px] mt-14 mb-7' ) );
						endif;
						?>
						<h2 class="text-title-h3 mb-4 lg:mb-7"><?php the_field( 'swisstainable_title' ); ?></h2>
						<div class="text-body lg:max-w-[333px]"><?php the_field( 'swisstainable_description' ); ?></div>
					</div>
				</div>
				<?php
			endif;
			$cs = get_field( 'charging_station' );
			if ( $cs ) :
				?>
				<div class="card-sustainability w-full lg:w-[calc(50%-12px)] bg-white rounded-[20px] overflow-hidden order-3 lg:order-2">
					<?php
					$csimage = get_field( 'charging_station_image' );
					if ( $csimage ) :
						echo wp_get_attachment_image( $csimage, 'full', false, array( 'class' => 'w-full object-fit rounded-b-[20px]' ) );
					endif;
					?>
					<div class="card-sustainability-content py-12 lg:py-20 px-9 lg:px-28">
						<h2 class="text-title-h3 mb-4 lg:mb-7"><?php the_field( 'charging_station_title' ); ?></h2>
						<div class="text-body"><?php the_field( 'charging_station_description' ); ?></div>
					</div>
				</div>
				<?php
			endif;
			$regional = get_field( 'regional' );
			if ( $regional ) :
				?>
				<div class="card-sustainability w-full lg:w-[calc(50%-12px)] bg-white overflow-hidden rounded-[20px] order-5 lg:order-3">
					<?php
					$rimage = get_field( 'regional_image' );
					if ( $rimage ) :
						echo wp_get_attachment_image( $rimage, 'full', false, array( 'class' => 'w-full object-fit rounded-b-[20px]' ) );
					endif;
					?>
					<div class="card-sustainability-content py-12 lg:py-20 px-9 lg:px-28">
						<h2 class="text-title-h3 mb-4 lg:mb-7"><?php the_field( 'regional_title' ); ?></h2>
						<div class="text-body"><?php the_field( 'regional_description' ); ?></div>
					</div>
				</div>
				<?php
			endif;
			$ibex = get_field( 'Ibex' );
			if ( $ibex ) :
				?>
				<div class="card-sustainability w-full lg:w-[calc(50%-12px)] bg-white rounded-[20px] overflow-hidden order-2 lg:order-4">
					<?php
					$iimage = get_field( 'Ibex_image' );
					if ( $iimage ) :
						echo wp_get_attachment_image( $iimage, 'full', false, array( 'class' => 'w-full object-fit rounded-b-[20px]' ) );
					endif;
					?>
					<div class="card-sustainability-content pb-12 lg:pb-20 px-9 lg:px-28">
						<?php
						$ilogo  = get_field( 'Ibex_logo' );
						if ( $ilogo ) :
							echo wp_get_attachment_image( $ilogo, 'full', false, array( 'class' => 'max-w-full object-fit rounded-[20px] mt-14 mb-7' ) );
						endif;
						?>
						<h2 class="text-title-h3 mb-4 lg:mb-7"><?php the_field( 'Ibex_title' ); ?></h2>
						<div class="text-body !font-bold mb-5"><?php the_field( 'Ibex_subtitle' ); ?></div>
						<?php
						if ( have_rows( 'Ibex_list' ) ) :
							echo '<ul class="list">';
							while ( have_rows( 'Ibex_list' ) ) :
								the_row();
								echo '<li>' . get_sub_field( 'text' ) . '</li>';
							endwhile;
							echo '</ul>';
						endif;
						?>
					</div>
				</div>
				<?php
			endif;
			$change = get_field( 'change' );
			if ( $change ) :
				?>
				<div class="card-sustainability w-full lg:w-[calc(50%-12px)] bg-white overflow-hidden rounded-[20px] order-4 lg:order-5">
					<?php
					$cimage = get_field( 'change_image' );
					if ( $cimage ) :
						echo wp_get_attachment_image( $cimage, 'full', false, array( 'class' => 'w-full object-fit rounded-b-[20px]' ) );
					endif;
					?>
					<div class="card-sustainability-content py-12 lg:py-20 px-9 lg:px-28">
						<h2 class="text-title-h3 mb-4 lg:mb-7"><?php the_field( 'change_title' ); ?></h2>
						<div class="text-body"><?php the_field( 'change_description' ); ?></div>
					</div>
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</section>
