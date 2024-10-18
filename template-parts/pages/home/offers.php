<section class="section-offers bg-blue-shade-5 pt-16 lg:pt-20 lg:pb-28 relative overflow-hidden">
    <div class="theme-container grid grid-cols-2 lg:grid-cols-12 gap-x-6">
        <?php 
        if( have_rows('offers_list') ):
            $offers_count = count( get_field('offers_list') );
            
            if ($offers_count == 1) {
                $col_span_class = 'lg:col-span-6 lg:col-start-4';
            } elseif ($offers_count == 2) {
                $col_span_class = 'lg:col-span-6';
            } elseif ($offers_count == 3) {
                $col_span_class = 'lg:col-span-4';
            } else {
                $col_span_class = 'lg:col-span-3';
            }

            while( have_rows('offers_list') ) : the_row(); ?>
                <div class="offers-box col-span-2 <?php echo $col_span_class; ?> rounded-[22px] bg-blue-shade-1 mb-16 lg:mb-0 fade-in">
                    <?php 
                        $offer_img = get_sub_field('image');
                        $size = 'offer-image';
                        if( $offer_img ) {
                            echo wp_get_attachment_image( $offer_img, $size, false, array( 'class' => 'w-full rounded-t-[22px]' ) );
                        } 
                    ?>
                    <div class="px-9 lg:px-16 pb-12 lg:pb-9">
                        <h3 class="text-bullets--primary text-blue-shade-5 my-7"><?php echo get_sub_field( 'title' ); ?></h3>
                        <p class="text-body text-blue-shade-5 mb-9 lg:mb-9"><?php echo get_sub_field( 'text' ); ?></p>
                        <?php 
                        $offers_btn = get_sub_field('button');
                        if( $offers_btn ): 
                            $offers_btn_url = $offers_btn['url'];
                            $offers_btn_title = $offers_btn['title'];
                            $offers_btn_target = $offers_btn['target'] ? $offers_btn['target'] : '_self';
                            ?>
                            <div class="f"><a class="btn-internal btn-internal--shade-transparent text-center" href="<?php echo esc_url( $offers_btn_url ); ?>" target="<?php echo esc_attr( $offers_btn_target ); ?>"><?php echo esc_html( $offers_btn_title ); ?></a></div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile;
        endif; ?>
    </div>
</section>