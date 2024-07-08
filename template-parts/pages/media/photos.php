<section class="section-photos bg-page-bg-light pb-24 xl:pb-52">
	<div class="st-grid">
		<div class="st-container st-container-grid">
			<div class="col-span-1 md:col-span-2 xl:col-span-2">
				<h2 class="st-subtitle-i text-dark-blue w-full"><?php the_field( 'photos_title' ); ?></h2>
				<hr class="w-full border-2 border-blue mt-5 mb-12 md:mb-24">
			</div>
		</div>


		<div class="st-container st-container-grid">
			<div class="col-span-10">
				<div class="filters-wrapper flex gap-x-5 mb-11 xl:mb-24 flex-wrap">
					<?php
					$media_taxonomies = array( 'media-year', 'tournament', 'surface', 'type-of-shot' );
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
				$gallery = get_field( 'photos_gallery' );
				if ( $gallery ) :
					echo '<div class="photo-grid">';
					foreach ( $gallery as $g_image ) :
						$image_id           = $g_image['ID'];
						$image_taxonomies   = array( 'media-year', 'tournament', 'surface', 'type-of-shot' );
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
							<div class=" w-1/2 lg:w-1/5 element-item <?php echo esc_attr( $image_class_string ); ?>" data-category="<?php echo esc_attr( $image_class_string ); ?>">
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
				<div id="no-items-message" class="max-w-md border border-blue rounded-xl px-11 py-8 hidden">
					<p class="font-transducer font-normal text-[17px] text-blue leading-[29px] tracking-[0.34px] mb-7"><?php esc_html_e( 'Keine Elemente zum Anzeigen', 'stricker' ); ?></p>
					<p class="font-transducer font-semibold text-base text-dark-blue leading-[23px] tracking-[0.24px] flex w-full gap-x-6">
						<span class="mt-1">
							<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.55 14.25H10.45V8.55H8.55V14.25ZM9.5 6.65C9.76917 6.65 9.99495 6.5588 10.1773 6.3764C10.3597 6.194 10.4506 5.96853 10.45 5.7C10.45 5.43083 10.3588 5.20537 10.1764 5.0236C9.994 4.84183 9.76853 4.75063 9.5 4.75C9.23083 4.75 9.00537 4.8412 8.8236 5.0236C8.64183 5.206 8.55063 5.43147 8.55 5.7C8.55 5.96917 8.6412 6.19495 8.8236 6.37735C9.006 6.55975 9.23147 6.65063 9.5 6.65ZM9.5 19C8.18583 19 6.95083 18.7505 5.795 18.2514C4.63917 17.7523 3.63375 17.0756 2.77875 16.2212C1.92375 15.3663 1.24703 14.3608 0.7486 13.205C0.250167 12.0492 0.000633333 10.8142 0 9.5C0 8.18583 0.249533 6.95083 0.7486 5.795C1.24767 4.63917 1.92438 3.63375 2.77875 2.77875C3.63375 1.92375 4.63917 1.24703 5.795 0.7486C6.95083 0.250167 8.18583 0.000633333 9.5 0C10.8142 0 12.0492 0.249533 13.205 0.7486C14.3608 1.24767 15.3663 1.92438 16.2212 2.77875C17.0763 3.63375 17.7533 4.63917 18.2523 5.795C18.7514 6.95083 19.0006 8.18583 19 9.5C19 10.8142 18.7505 12.0492 18.2514 13.205C17.7523 14.3608 17.0756 15.3663 16.2212 16.2212C15.3663 17.0763 14.3608 17.7533 13.205 18.2523C12.0492 18.7514 10.8142 19.0006 9.5 19Z" fill="#14A5BB"/>
							</svg>
						</span>
						<?php esc_html_e( 'Keine Bilder gefunden für die aktuellen Filterkombinationen. Setzen Sie den Filter zurück oder probieren Sie eine andere Kombination aus.', 'stricker' ); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
