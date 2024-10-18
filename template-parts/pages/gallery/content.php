<section class="section-gallery-content bg-blue-shade-3 py-28">
	<div class="theme-container">
		<div class="theme-grid">
			<?php
			if ( have_rows( 'galleries' ) ) :
				while ( have_rows( 'galleries' ) ) :
					the_row();
					$gallery_title = get_sub_field( 'title' );
					?>
					<div class="col-span-2 lg:col-span-12 grid grid-cols-3 lg:grid-cols-12 gap-3 lg:gap-6 mb-12 lg:mb-24 invisible fade-in--noscroll">
						<div class="col-span-3 lg:col-span-12">
							<h2 class="text-title-h2 text-blue-shade-2"> <?php the_sub_field( 'title' ); ?></h2>
						</div>
						<?php
						$gallery = get_sub_field( 'gallery' );
						if ( $gallery ) :
							foreach ( $gallery as $gallery_id ) :
								?>
								<div class="col-span-1 lg:col-span-2">
									<a href="<?php echo esc_url( wp_get_attachment_image_url( $gallery_id, 'full' ) ); ?>" data-fancybox="gallery-<?php echo esc_attr( strtolower( get_sub_field( 'title' ) ) ); ?>" data-caption="<?php echo esc_html( wp_get_attachment_caption( $gallery_id ) ); ?>" >
										<?php echo wp_get_attachment_image( $gallery_id, 'thumbnail', false, array( 'class' => 'w-full object-cover' ) ); ?>
									</a>
								</div>
								<?php
							endforeach;
						endif;
						?></div><?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>
