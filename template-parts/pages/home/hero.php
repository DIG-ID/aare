<section class="section-hero bg-dark-blue pt-80 pb-20 xl:pt-[154px] xl:pb-28 relative">
	<div class="section__arrow-down st-grid xl:relative items-center">
		<div class="col-span-2 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-2 xl:col-start-2 z-10 xl:absolute" style="user-select: none;">
			<h1>
				<span class="st-subtitle-bi-caps text-light-blue block"><?php esc_html_e( 'Willkommen auf der offiziellen Webseite von', 'stricker' ); ?></span>
				<span class="st-title-big st-text-outline-big text-transparent block"><?php esc_html_e( 'DOMINIC', 'stricker' ); ?></span>
				<span class="st-title-big st-text-outline-big text-blue block"><?php esc_html_e( 'STRICKER', 'stricker' ); ?></span>
			</h1>
			<p class="st-body-dates text-light-blue mt-20 max-w-64 md:max-w-80 xl:max-w-none"><?php the_field( 'hero_intro_text' ) ?></p>
		</div>
		<div class="xl:block xl:col-span-9 xl:col-start-4 bg-black h-[1000px] xl:h-[810px] top-0 left-0 right-0 bottom-0 w-full z-0 absolute xl:relative">
		<?php
		$hero_video = get_field('hero_video');
		if( $hero_video ): ?>
			<video autoplay muted loop playsinline style="width: 100%; height: 100%; object-fit: none;">
				<source src="<?php echo esc_url($hero_video['url']); ?>" type="<?php echo esc_attr($hero_video['mime_type']); ?>">
				Your browser does not support the video tag.
			</video>
		<?php endif; 
		?>
		</div>
	</div>
	<div class="info-box fixed w-full bottom-10 st-grid z-30 -mt-9">
		<div class="hidden xl:flex justify-center col-span-6 col-start-4">
			<div class="bg-blue rounded-[40.5px] w-[750px] h-[75px] grid grid-cols-9">
				<div class="col-span-1 flex flex-col justify-center items-center">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/info.svg" alt="info" title="info" />
				</div>
				<div class="col-span-3 flex flex-col justify-center">
					<?php
					$current_date = date('Ymd');
					$tournament_query = new WP_Query(array(
						'post_type'      => 'tournament',
						'posts_per_page' => -1, // Retrieve all posts
					));

					// Flag to track if a tournament post is found
					$tournament_found = false;

					// Check if any posts are found
					if ($tournament_query->have_posts()) :
						while ($tournament_query->have_posts()) :
							$tournament_query->the_post();

							// Get start_date and end_date using ACF
							$start_date = get_field('start_date');
							$end_date = get_field('end_date');

							// Convert ACF date format to Ymd for comparison
							$start_date_Ymd = date('Ymd', strtotime($start_date));
							$end_date_Ymd = date('Ymd', strtotime($end_date));

							// Check if the current date falls within the tournament dates
							if ($start_date_Ymd && $end_date_Ymd && $start_date_Ymd <= $current_date && $end_date_Ymd >= $current_date) :
								// Convert ACF date format to d/m/Y for display
								$start_date_display = date('d/m/Y', strtotime($start_date));
								$end_date_display = date('d/m/Y', strtotime($end_date));
								?>
								<p class="font-transducer font-bold text-[10px] leading-[14px] text-dark-blue"><?php esc_html_e('Aktuelles', 'stricker'); ?></p>
								<p class="font-transducer font-[500] text-[16px] uppercase text-light-blue underline text-nowrap single-line"><?php the_title(); ?></p>
								<p class="font-transducer font-bold text-[10px] leading-[14px] text-dark-blue"><?php echo $start_date_display; ?></p>
								<?php
								// If a matching tournament is found, set flag to true and break out of the loop
								$tournament_found = true;
								break;
							endif;
						endwhile;
						wp_reset_postdata();
					endif;

					// If no tournament post is found where the current date falls within the tournament dates, display custom content
					if (!$tournament_found) :
						?>
						<p class="font-transducer font-bold text-[10px] leading-[14px] text-dark-blue"><?php esc_html_e('Aktuelles', 'stricker'); ?></p>
						<p class="font-transducer font-[500] text-[16px] uppercase text-light-blue underline text-nowrap single-line"><?php esc_html_e('Kein aktuelles Turnier', 'stricker'); ?></p>
						<p class="font-transducer font-bold text-[10px] leading-[14px] text-dark-blue"><?php esc_html_e('-', 'stricker'); ?></p>
					<?php endif; ?>
					
				</div>
				<div class="col-span-1"></div>
				<div class="col-span-3 flex flex-col justify-center">
				<?php
                $current_date = date('Ymd');
                $tournament_query = new WP_Query(array(
                    'post_type'      => 'tournament',
                    'posts_per_page' => -1, // Retrieve all posts
                ));

                // Flag to track if a tournament post is found
                $tournament_found = false;

                // Initialize variables to store details of the tournament post with the next start_date after today
                $selected_tournament_title = '';
                $selected_tournament_start_date = '';
                $selected_tournament_end_date = '';

                // Check if any posts are found
                if ($tournament_query->have_posts()) :
                    while ($tournament_query->have_posts()) :
                        $tournament_query->the_post();

                        // Get start_date and end_date using ACF
                        $start_date = get_field('start_date');
                        $end_date = get_field('end_date');

                        // Convert ACF date format to Ymd for comparison
                        $start_date_Ymd = date('Ymd', strtotime($start_date));

                        // Check if the start date of the tournament is after today's date
                        if ($start_date_Ymd && $start_date_Ymd > $current_date) {
                            // Store details of the tournament post if it's the first post found after today's date
                            if (!$tournament_found || $start_date_Ymd < $selected_tournament_start_date) {
                                $selected_tournament_title = get_the_title();
                                $selected_tournament_start_date = $start_date_Ymd;
                                $selected_tournament_end_date = $end_date;
                                $tournament_found = true;
                            }
                        }
                    endwhile;
                    wp_reset_postdata();
                endif;

                // If a tournament post with start date after today is found, display its details
                if ($tournament_found) :
                    // Convert ACF date format to d/m/Y for display
                    $start_date_display = date('d/m/Y', strtotime($selected_tournament_start_date));
                    $end_date_display = date('d/m/Y', strtotime($selected_tournament_end_date));
                    ?>
                    <p class="font-transducer font-normal text-[10px] leading-[14px] text-dark-blue"><?php /*echo $start_date_display;*/esc_html_e( 'Nächstes', 'stricker' );?></p>
                    <p class="font-transducer font-[500] text-[16px] uppercase text-light-blue text-nowrap single-line"><?php echo $selected_tournament_title; ?></p>
                    <p class="font-transducer font-normal text-[10px] leading-[14px] text-dark-blue"><?php echo $start_date_display; ?></p>
                <?php else : ?>
                    <!-- If no tournament post with start date after today is found, display custom content -->
                    <p class="font-transducer font-normal text-[10px] leading-[14px] text-dark-blue"><?php esc_html_e('-', 'stricker'); ?></p>
                    <p class="font-transducer font-[500] text-[16px] uppercase text-light-blue text-nowrap single-line"><?php esc_html_e('Kein bevorstehendes Turnier', 'stricker'); ?></p>
                    <p class="font-transducer font-normal text-[10px] leading-[14px] text-dark-blue"><?php esc_html_e('-', 'stricker'); ?></p>
                <?php endif; ?>
					
				</div>
				<div class="col-span-1"></div>
			</div>
		</div>
	</div>
</section>