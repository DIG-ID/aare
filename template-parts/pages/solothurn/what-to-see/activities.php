<section class="section-what-to-see-activities bg-blue-shade-4 pt-16 lg:pt-0">
	<div class="theme-container">
		<div class="theme-grid">
			<?php
			$activities = get_field( 'activities' );
			if ( $activities ) :
				?>
				<div class="col-span-2 lg:col-span-12 relative mb-6 lg:mb-20 invisible fade-in">
					<div class="invisible hidden lg:visible lg:block">
						<?php
						$activities_image = get_field( 'activities_hero_image' );
						if ( $activities_image ) :
							echo wp_get_attachment_image( $activities_image, 'full', false, array( 'class' => 'w-full object-cover rounded-[20px]' ) );
						endif;
						?>
					</div>
					<div class="lg:absolute lg:top-0 lg:left-0 lg:bottom-0 lg:right-0 flex justify-center items-center ">
						<div class=" bg-white rounded-[20px] lg:w-[840px] flex flex-col justify-center items-center py-9 px-9 lg:py-20 lg:px-9">
							<h2 class="text-title-h2 text-blue-shade-5 text-center mb-9 lg:max-w-[645px]"><?php the_field( 'activities_hero_title' ); ?></h2>
							<p class="text-body text-blu-shade-5 text-center lg:max-w-[410px]"><?php the_field( 'activities_hero_description' ); ?></p>
						</div>
					</div>
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</section>
<div class="section-what-do-see--activites-list bg-blue-shade-4">
	<div class="theme-container">
		<div class="theme-grid">
		<?php
			if ( have_rows( 'activities_list' ) ) :
				while ( have_rows( 'activities_list' ) ) :
					the_row();
					?>
					<div class="col-span-2 lg:col-span-12 flex flex-col lg:flex-row  mb-6 lg:mb-20 bg-white rounded-[20px] fade-in">
						<div class="">
							<?php
							$img = get_sub_field( 'image' );
							if ( $img ) :
								echo wp_get_attachment_image( $img, 'full', false, array( 'class' => 'w-full object-cover rounded-t-[20px] lg:rounded-[20px] min-h-[274px] lg:h-auto' ) );
							else :
								?>
								<span class="block bg-blue-shade-3 w-full lg:w-[542px] h-[300px] rounded-t-[20px] lg:rounded-[20px]"></span>
								<?php
							endif;
							?>
						</div>
						<div class="flex flex-col justify-center lg:ml-28 px-8 pt-6 pb-14 lg:px-0 lg:py-0">
							<h2 class="text-title-h3 text-blue-shade-5 mb-6"><?php the_sub_field( 'title' ); ?></h2>
							<p class="text-body text-blue-shade-5 lg:max-w-[433px]"><?php the_sub_field( 'description' ); ?></p>
							<?php 
							$link = get_sub_field( 'link' );
							if ( $link ) :
								$link_url    = $link['url'];
								$link_title  = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="btn-external btn-external--shade-1 mt-6 w-full flex items-center justify-between lg:justify-start" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span class="whitespace-normal"><?php echo esc_html( $link_title ); ?></span></a>
								<?php
							endif;
							?>
						</div>
					</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</div>