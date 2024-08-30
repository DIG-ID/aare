<section class="section-tabs bg-blue-shade-5 pt-16 xl:pt-20 xl:pb-28 relative overflow-hidden">
    <div class="theme-container grid grid-cols-2 xl:grid-cols-12 gap-x-6">
        <?php if( have_rows('offers_list') ):
        while( have_rows('offers_list') ) : the_row(); ?>
            <div class="offers-box col-span-2 xl:col-span-6 rounded-[22px] bg-blue-shade-1 mb-16 xl:mb-0">
                <?php 
                    $offer_img = get_sub_field('image');
                    $size = 'full';
                    if( $offer_img ) {
                        echo wp_get_attachment_image( $offer_img, $size, false, array( 'class' => 'w-full rounded-t-[22px]' ) );
                    } 
                ?>
                <div class="px-9 xl:px-16 pb-12 xl:pb-9">
                    <h3 class="text-bullets--primary text-blue-shade-5 my-7"><?php echo get_sub_field( 'title' ); ?></h3>
                    <p class="text-body text-blue-shade-5 mb-9 xl:mb-9"><?php echo get_sub_field( 'text' ); ?></p>
                    <?php 
                    $offers_btn = get_sub_field('button');
                    if( $offers_btn ): 
                        $offers_btn_url = $offers_btn['url'];
                        $offers_btn_title = $offers_btn['title'];
                        $offers_btn_target = $offers_btn['target'] ? $offers_btn['target'] : '_self';
                        ?>
                        <a class="btn-internal btn-internal--shade-transparent text-center" href="<?php echo esc_url( $offers_btn_url ); ?>" target="<?php echo esc_attr( $offers_btn_target ); ?>"><?php echo esc_html( $offers_btn_title ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile;
        endif; ?>
    </div>
</section>