<section class="section-photos bg-page-bg-light pb-52">
	<div class="st-grid">
		<div class="st-container st-container-grid">
			<div class="col-span-1 md:col-span-2 xl:col-span-2">
				<h2 class="st-subtitle-i text-dark-blue w-full"><?php the_field( 'videos_title' ); ?></h2>
				<hr class="w-full border-2 border-blue mt-5 mb-24">
			</div>
		</div>
		<div class="st-container st-container-grid">
			<div class="col-span-10">
				<div class="filters-wrapper flex gap-x-5 mb-11 xl:mb-24 flex-wrap">
					<?php
					$media_taxonomies = array( 'media-year', 'tournament', 'surface' );
					foreach ( $media_taxonomies as $media_tax ) :
						$media_tax = get_taxonomy( $media_tax );
						if ( ! empty( $media_tax ) ) :
							$media_tax_name = $media_tax->labels->name;
							$media_tax_slug = $media_tax->rewrite['slug'];
							$media_terms = get_terms(
								array(
									'taxonomy'   => $media_tax_slug,
									'hide_empty' => true,
								)
							);
							?>
							<div class="filters-select-wrapper">
								<select name="<?php echo esc_attr( $media_tax_slug ); ?>" id="<?php echo esc_attr( $media_tax_slug ); ?>" class="filters-select" data-filter-group="<?php echo esc_attr( $media_tax_slug ); ?>">
									<option value="*"><?php echo esc_html_e( $media_tax_name ); ?></option>
									<?php
									foreach ( $media_terms as $media_term ) :
										echo '<option value=".' . esc_attr( $media_term->slug ) . '">' . esc_html( $media_term->name ) . '</option>';
									endforeach;
									?>
								</select>
							</div>
							<?php
						endif;
					endforeach;
					?>
					<button id="reset-filters"><?php esc_html_e( 'Filter zurücksetzen', 'stricker' ); ?></button>
				</div>
			</div>
		</div>
		<div class="st-container st-container-grid">
			<div class="col-span-10">
			<?php
			$gallery = get_field( 'video_gallery' );
			if ( $gallery ) :
				echo '<div class="video-grid">';
				foreach ( $gallery as $g_image ) :
					$image_id           = $g_image['ID'];
					$image_taxonomies   = array( 'media-year', 'tournament', 'surface' );
					$image_term_classes = array();
					// Loop through each custom taxonomy.
					foreach ( $image_taxonomies as $image_tax ) :
						// Retrieve terms for the current taxonomy and attachment ID.
						$image_terms = get_the_terms( $image_id, $image_tax );
						// Check if terms are retrieved successfully.
						if ( $image_terms && ! is_wp_error( $image_terms ) ) :
							// Extract term slugs to use as class names.
							$term_slugs           = wp_list_pluck( $image_terms, 'slug' );
							$image_term_classes[] = implode( ' ', $term_slugs );
						endif;
					endforeach;
					// Check if image has any associated terms.
					if ( ! empty( $image_term_classes ) ) :
						// Generate class attribute string for the image container.
						$image_class_string = implode( ' ', $image_term_classes );
						// Output the image HTML.
						?>
						<div class="w-1/2 lg:w-1/5 element-item <?php echo esc_attr( $image_class_string ); ?>" data-category="<?php echo esc_attr( $image_class_string ); ?>">
							<a href="<?php echo esc_url( $g_image['url'] ); ?>" data-fancybox="gallery" data-src="<?php echo esc_url( $g_image['sizes']['media-full'] ); ?>" class="block">
								<img src="<?php echo esc_url( $g_image['sizes']['media-thumbnail'] ); ?>" alt="<?php echo esc_attr( $g_image['alt'] ); ?>" class="max-w-full w-full object-cover "/>
							</a>
						</div>
						<?php
					endif;
				endforeach;
				echo '</div>';
			endif;
			?>
			<div id="no-items-message hidden invisible">
				<p class="font-transducer font-normal text-[17px] text-dark-blue leading-[29px] tracking-[0.34px]"><?php esc_html_e( 'Keine Bilder gefunden für die aktuellen Filterkombinationen. Setzen Sie den Filter zurück oder probieren Sie eine andere Kombination aus.', 'stricker' ); ?></p>
			</div>
		</div>
	</div>
</section>

