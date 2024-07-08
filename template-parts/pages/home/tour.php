<style>
 
</style>
<section class="section-tour relative py-12 bg-blue overflow-hidden w-[105%] z-10 transform rotate-1 origin-top-left xl:-mt-32">
<div class="swiper swiper-tour">
    <div class="swiper-wrapper gap-6 xl:gap-8 px-0">
        <?php for ($i = 0; $i < 12; $i++) : ?>
            <div class="swiper-slide flex flex-row justify-between min-w-[140px] sm:min-w-[100px] md:min-w-[265px]">
                <span class="st-title !font-[418] text-light-blue" style="user-select: none;"><?php esc_html_e( 'On Tour', 'stricker' ) ?></span><span class="st-title text-light-blue px-4 md:px-0">•</span>
            </div>
        <?php endfor; ?>
    </div>
</div>
</section>

<section class="section-schedule bg-dark-blue pt-16 xl:pb-12 xl:pt-44">
    <div class="st-grid">
        <div class="col-span-2 md:col-span-4 xl:col-span-9 col-start-1 md:col-start-2 xl:col-start-2 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-9">
            <div class="col-span-6 xl:col-span-1 pt-14 items-center flex-col flex xl:block">
                <img class="xl:float-left w-[67px] pb-7 xl:pb-0" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/cup.svg" alt="tournament cup" title="tournament cup">
                <p class="xl:float-left st-subtitle-big-regular !text-[28px] md:!text-[45px] text-blue xl:transform xl:-rotate-90 xl:ml-8 2xl:ml-12 pb-10 md:pb-24 xl:pb-0"><?php esc_html_e( 'Turniere', 'stricker' ) ?></p>
            </div>
            <div class="col-span-6 xl:col-span-3">
                <p class="font-transducerCondensed text-[14px] md:text-[26px] italic font-[340px] leading-9 tracking-[4.8px] md:tracking-[10.4px] text-blue uppercase border-b-2 border-blue pb-0 md:pb-5 text-right xl:text-left"><?php esc_html_e( 'Letztes', 'stricker' ) ?></p>
                <div class="pt-5 pb-8 md:py-11 xl:border-b-2 border-blue xl:max-h-[196px]">
                <?php
                $current_date = date('Ymd');
                $tournament_query = new WP_Query(array(
                    'post_type'      => 'tournament',
                    'posts_per_page' => -1,
                ));

                $tournament_found = false;

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
                        $end_date_Ymd = date('Ymd', strtotime($end_date));

                        // Check if the end date of the tournament is before today's date
                        if ($end_date_Ymd && $end_date_Ymd < $current_date) :
                            // Store details of the tournament post
                            $selected_tournament_location = get_field('location');
                            $selected_tournament_link = get_field('tournament_link');
                            $selected_tournament_title = get_the_title();
                            $selected_tournament_start_date = $start_date;
                            $selected_tournament_end_date = $end_date;

                            // Set flag to true
                            $tournament_found = true;

                            // Break out of the loop as we found the desired tournament post
                            break;
                        endif;
                    endwhile;
                    wp_reset_postdata();
                endif;

                // If a tournament post with end date before today is found, display its details
                if ($tournament_found) :
                    // Convert ACF date format to d/m/Y for display
                    $start_date_display = date('d/m/Y', strtotime($selected_tournament_start_date));
                    $end_date_display = date('d/m/Y', strtotime($selected_tournament_end_date));
                    ?>
                    <p class="st-body-dates text-blue !leading-[29px] md:!leading-[24px] xl:!leading-[29px]"><?php echo $start_date_display; ?> - <?php echo $end_date_display; ?></p>
                    <a href="<?php echo $selected_tournament_link; ?>" target="_blank" class="st-subtitle-caps text-light-blue text-nowrap truncate-text !text-[18px] md:!text-[32px]"><?php echo $selected_tournament_title; ?></a>
                    <p class="st-subtitle text-blue !text-[18px] md:!text-[32px]"><?php echo $selected_tournament_location; ?></p>
                <?php else : ?>
                    <!-- If no tournament post with end date before today is found, display custom content -->
                    <p class="st-body-dates text-blue !leading-[29px] md:!leading-[24px] xl:!leading-[29px]"><?php esc_html_e('-', 'stricker'); ?></p>
                    <a class="st-subtitle-caps text-light-blue text-nowrap !text-[18px] md:!text-[32px]"><?php esc_html_e('Kein vorheriges Turnier', 'stricker'); ?></a>
                    <p class="st-subtitle text-blue !text-[18px] md:!text-[32px]"><?php esc_html_e('-', 'stricker'); ?></p>
                <?php endif; ?>


                </div>

            </div>
            <div class="col-span-6 xl:col-span-2">
                <p class="font-transducerCondensed text-[14px] md:text-[26px] italic font-[340px] leading-9 tracking-[4.8px] md:tracking-[10.4px] text-blue uppercase border-b-[10px] border-blue pb-0 md:pb-[16px] text-right xl:text-left"><?php esc_html_e( 'Aktuelles', 'stricker' ) ?></p>
                <div class="pt-5 pb-8 md:py-[42px] xl:border-b-2 border-blue xl:max-h-[192px]">
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

                        $selected_tournament_location = get_field('location');
                        $selected_tournament_link = get_field('tournament_link');
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
                            <p class="st-body-dates text-blue !leading-[29px] md:!leading-[24px] xl:!leading-[29px]"><?php echo $start_date_display; ?> - <?php echo $end_date_display; ?></p>
                            <a href="<?php echo $selected_tournament_link; ?>" target="_blank" class="st-subtitle-caps text-light-blue text-nowrap truncate-text !text-[18px] md:!text-[32px]"><?php the_title(); ?></a>
                            <p class="st-subtitle text-blue !text-[18px] md:!text-[32px]"><?php echo $selected_tournament_location; ?></p>
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
                    <p class="st-body-dates text-blue !leading-[29px] md:!leading-[24px] xl:!leading-[29px]"><?php esc_html_e('-', 'stricker'); ?></p>
                    <a class="st-subtitle-caps text-light-blue text-nowrap !text-[18px] md:!text-[32px]"><?php esc_html_e('Kein aktuelles Turnier', 'stricker'); ?></a>
                    <p class="st-subtitle text-blue !text-[18px] md:!text-[32px]"><?php esc_html_e('-', 'stricker'); ?></p>
                <?php endif; ?>
                </div>
            </div>
            <div class="col-span-6 xl:col-span-1 only-desktop hidden xl:block">
                <p class="font-transducerCondensed text-[14px] md:text-[26px] italic font-[340px] leading-9 tracking-[4.8px] md:tracking-[10.4px] text-blue uppercase border-b-2 border-blue pb-0 md:pb-5"><?php esc_html_e( '&nbsp;', 'stricker' ) ?></p>
                <div class="pt-5 pb-8 md:py-11 xl:border-b-2 border-blue">
                    <p class="st-body-dates text-blue !leading-[29px] md:!leading-[24px] xl:!leading-[29px] invisible"><?php esc_html_e( '-', 'stricker' ); ?></p>
                    <a class="st-subtitle-caps text-light-blue !text-[18px] md:!text-[32px] invisible"><?php esc_html_e( '-', 'stricker' ); ?></a>
                    <p class="st-subtitle text-blue !text-[18px] md:!text-[32px] invisible"><?php esc_html_e( '-', 'stricker' ); ?></p>
                </div>
            </div>
            <div class="col-span-6 xl:col-span-2">
                <p class="font-transducerCondensed text-[14px] md:text-[26px] italic font-[340px] leading-9 tracking-[4.8px] md:tracking-[10.4px] text-blue uppercase border-b-2 border-blue pb-0 md:pb-5 text-right xl:text-left"><?php esc_html_e( 'Nächstes', 'stricker' ) ?></p>
                <div class="pt-5 pb-8 md:py-11 xl:border-b-2 border-blue xl:max-h-[196px]">
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
                                $selected_tournament_location = get_field('location');
                                $selected_tournament_link = get_field('tournament_link');
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
                    <p class="st-body-dates text-blue !leading-[29px] md:!leading-[24px] xl:!leading-[29px]"><?php echo $start_date_display; ?> - <?php echo $end_date_display; ?></p>
                    <a href="<?php echo $selected_tournament_link; ?>" target="_blank" class="st-subtitle-caps text-light-blue text-nowrap truncate-text !text-[18px] md:!text-[32px]"><?php echo $selected_tournament_title; ?></a>
                    <p class="st-subtitle text-blue !text-[18px] md:!text-[32px]"><?php echo $selected_tournament_location; ?></p>
                <?php else : ?>
                    <!-- If no tournament post with start date after today is found, display custom content -->
                    <p class="st-body-dates text-blue !leading-[29px] md:!leading-[24px] xl:!leading-[29px]"><?php esc_html_e('-', 'stricker'); ?></p>
                    <a class="st-subtitle-caps text-light-blue text-nowrap !text-[18px] md:!text-[32px]"><?php esc_html_e('Kein bevorstehendes Turnier', 'stricker'); ?></a>
                    <p class="st-subtitle text-blue !text-[18px] md:!text-[32px]"><?php esc_html_e('-', 'stricker'); ?></p>
                <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>