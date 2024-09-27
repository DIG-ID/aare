<section class="section-location bg-blue-shade-4 pt-20 pb-28 relative overflow-hidden">
    <div class="theme-container grid grid-cols-2 md:grid-cols-12 gap-x-6">
        <div class="col-span-1 md:col-span-4 xl:col-span-2 col-start-1 md:col-start-3 xl:col-start-4">
            <?php
            $location = get_field( 'location_map' );
            if ( $location ) :
                ?>
                <div class="acf-map mb-14 md:mb-20 xl:mb-0 max-h-96 md:max-h-none h-[165px] rounded-[20px]" data-zoom="16">
                    <div class="marker" data-lat="<?php echo esc_attr( $location['lat'] ); ?>" data-lng="<?php echo esc_attr( $location['lng'] ); ?>"></div>
                </div>
                <?php
            endif;
            ?>
        </div>
        <div class="col-span-1 md:col-span-5 xl:col-span-3 col-start-2 md:col-start-7 xl:col-start-6 flex flex-col xl:justify-between md:pl-7 pt-[30%] md:pt-0">
            <p class="font-miller font-normal text-sm md:text-lg xl:text-2xl tracking-[0.14px] md:tracking-[0.24px] text-blue-shade-2 mb-6 xl:mb-0"><?php echo get_field( 'location_text' ); ?></p>
            <?php 
            $location_btn = get_field('location_button');
            if( $location_btn ): 
                $location_btn_url = $location_btn['url'];
                $location_btn_title = $location_btn['title'];
                $location_btn_target = $location_btn['target'] ? $location_btn['target'] : '_self';
                ?>
                <a class="btn-internal btn-internal--shade-4 !py-3 xl:!px-0 !font-light text-center !hidden md:!inline-block" href="<?php echo esc_url( $location_btn_url ); ?>" target="<?php echo esc_attr( $location_btn_target ); ?>"><?php echo esc_html( $location_btn_title ); ?></a>
            <?php endif; ?>
        </div>
        <div class="col-span-2 md:hidden text-center">
        <?php 
            $location_btn = get_field('location_button');
            if( $location_btn ): 
                $location_btn_url = $location_btn['url'];
                $location_btn_title = $location_btn['title'];
                $location_btn_target = $location_btn['target'] ? $location_btn['target'] : '_self';
                ?>
                <a class="btn-internal btn-internal--shade-4 !py-3 xl:!px-0 !font-light text-center" href="<?php echo esc_url( $location_btn_url ); ?>" target="<?php echo esc_attr( $location_btn_target ); ?>"><?php echo esc_html( $location_btn_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>