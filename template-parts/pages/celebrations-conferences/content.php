<section class="section-celebrations-conference-content pb-28">
	<div class="theme-container">
		<div class="theme-grid">
			<?php
			$intro = get_field( 'intro' );
			if ( $intro ) :
				?>
				<div class="col-span-12 card-cs w-full bg-white overflow-hidden rounded-[20px]">
					<?php
					$iimage = get_field( 'intro_image' );
					if ( $iimage ) :
						echo wp_get_attachment_image( $iimage, 'full', false, array( 'class' => 'w-full object-fit rounded-b-[20px] min-h-[116px] lg:min-h-[225px]' ) );
					endif;
					?>
					<div class="card-cs-content py-7 lg:py-20 px-9 lg:px-28 grid grid-cols-2 lg:grid-cols-12">
						<div class="col-span-2 lg:col-span-4 lg:col-start-2 mb-14 lg:mb-0">
							<h2 class="text-title-h3 text-blue-shade-5 mb-4 lg:mb-7"><?php the_field( 'intro_title_1' ); ?></h2>
							<div class="text-body text-blue-shade-5"><?php the_field( 'intro_description_1' ); ?></div>
						</div>
						<div class="col-span-2 lg:col-span-4 lg:col-start-8 mb-14 lg:mb-0">
							<h2 class="text-title-h3 text-blue-shade-5 mb-4 lg:mb-7"><?php the_field( 'intro_title_2' ); ?></h2>
							<div class="text-body text-blue-shade-5 mb-9"><?php the_field( 'intro_description_2' ); ?></div>
							<?php
							$ilink = get_field( 'intro_link' );
							if ( $ilink ) :
								$link_url    = $ilink['url'];
								$link_title  = $ilink['title'];
								$link_target = $ilink['target'] ? $ilink['target'] : '_self';
								?>
								<a class="btn-external btn-external--shade-1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php
							endif;
							?>
						</div>
					</div>
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</section>
<section class="section-page-teasers pb-32 lg:py-36">
	<div class="theme-container">
		<div class="theme-grid">
			<?php get_template_part( 'template-parts/components/teaser-default' ); ?>
		</div>
	</div>
</section>
