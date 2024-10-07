<section class="section-celebrations-conference-content pb-16 xl:pb-28">
	<div class="theme-container">
		<div class="theme-grid">
			<?php
			$intro = get_field( 'intro' );
			if ( $intro ) :
				?>
				<div class="col-span-12 card-cs w-full bg-white overflow-hidden rounded-[24px] fade-in--noscroll">
				<?php
					$iimage1 = get_field('intro_image');
					$iimage2 = get_field('intro_image_2');

					if ($iimage1 && $iimage2) : ?>
						<div class="image-rotator relative w-full">
							<?php echo wp_get_attachment_image($iimage1, 'full', false, array('class' => 'iimage1 w-full object-fit rounded-b-[24px] min-h-[116px] lg:min-h-[225px]')); ?>
							<?php echo wp_get_attachment_image($iimage2, 'full', false, array('class' => 'iimage2 w-full object-fit rounded-b-[24px] min-h-[116px] lg:min-h-[225px]')); ?>
						</div>
				<?php endif; ?>

				
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
<section class="section-page-teasers py-8 lg:py-32 xl:pt-36">
	<div class="theme-container">
		<div class="theme-grid">
			<?php get_template_part( 'template-parts/components/teaser-default' ); ?>
		</div>
	</div>
</section>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		const image = document.querySelector('.iimage1');
		const imageHover = document.querySelector('.iimage2');
		
		if (image && imageHover) {
			setInterval(() => {
			if (image.style.opacity == '0') {
				image.style.opacity = '1';
				imageHover.style.opacity = '0';
			} else {
				image.style.opacity = '0';
				imageHover.style.opacity = '1';
			}
			}, 4000); // Change image every 5 seconds
		}
	});
</script>