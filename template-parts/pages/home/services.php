<section class="section-tabs bg-blue-shade-3 pt-24 pb-28 relative overflow-hidden">
    <div class="theme-container grid grid-cols-2 xl:grid-cols-12 gap-x-6">
        <div class="col-span-2 xl:col-span-12">
            <h2 class="text-title text-blue-shade-2 text-center"><?php echo get_field( 'services_title' ); ?></h2>
        </div>
        <div class="col-span-2 xl:col-span-12 flex items-center xl:my-24">
        <?php if( have_rows('services_services_list') ):
        while( have_rows('services_services_list') ) : the_row(); ?>
            <div class="w-1/4 flex flex-row items-center">
                <?php 
                    $services_icon = get_sub_field('icon');
                    $size = 'full';
                    if( $services_icon ) {
                        echo wp_get_attachment_image( $services_icon, $size, false, array( 'class' => 'w-full max-w-[50px] h-[50px] mr-4' ) );
                    } 
                ?>
                <p class="text-bullets--primary text-blue-shade-2"><?php echo get_sub_field( 'text' ); ?></p>
            </div>
        <?php endwhile;
        endif; ?>
        </div>
        <div class="col-span-2 xl:col-span-12 text-center">
            <?php 
            $services_btn = get_field('services_button');
            if( $services_btn ): 
                $services_btn_url = $services_btn['url'];
                $services_btn_title = $services_btn['title'];
                $services_btn_target = $services_btn['target'] ? $services_btn['target'] : '_self';
                ?>
                <a class="btn-internal btn-internal--shade-2 text-center" href="<?php echo esc_url( $services_btn_url ); ?>" target="<?php echo esc_attr( $services_btn_target ); ?>"><?php echo esc_html( $services_btn_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>