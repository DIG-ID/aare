<section class="section-partners bg-dark-blue pb-8">
    <div class="st-grid relative">
        <div class="col-span-2 md:col-span-6 xl:col-span-10 col-start-1 md:col-start-1 xl:col-start-2 py-5 md:py-24 border-y-2 border-blue">
            <div class="swiper swiper-partner">
                <div class="swiper-wrapper">
                    <?php
                    $partner_query = new WP_Query(array(
                        'post_type' => 'partner', 
                        'posts_per_page' => -1, 
                    ));
                    
                    if ($partner_query->have_posts()) :
                        while ($partner_query->have_posts()) :
                            $partner_query->the_post();
                            $partner_logo = get_the_post_thumbnail_url(get_the_ID(), ''); 
                            $partner_url = get_field('website_url'); 

                            echo '<div class="swiper-slide text-center partner-card flex justify-center">';
                            if ($partner_logo && $partner_url) :
                                echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img class="max-h-[108px]" src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                            else :
                                echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                            endif;
                            echo '</div>';
                        endwhile;
                        wp_reset_postdata(); // Reset post data
                    else :
                        echo '<p class="text-center">' . esc_html__('No partners found.', 'stricker') . '</p>';
                    endif;
                    ?>
                </div>
            </div>

        </div>        
    </div>
</section>