<section class="section-services bg-blue-shade-3 pt-24 pb-28 relative overflow-hidden">
    <div class="theme-container grid grid-cols-2 xl:grid-cols-12 gap-x-6 fade-in">
        <div class="col-span-2 xl:col-span-12">
            <h2 class="section-services--title font-miller font-light text-2xl xl:text-5xl leading-7 w-[40%] xl:w-full mx-auto xl:mx-0 text-blue-shade-2 text-center"><?php echo get_field( 'services_title' ); ?></h2>
        </div>
        <div class="col-span-2 xl:col-span-12 block xl:flex items-center mt-4 mb-5 xl:mt-24 xl:mb-12">
        <?php if( have_rows('services_services_list') ):
        while( have_rows('services_services_list') ) : the_row(); ?>
            <div class="section-services--item w-1/2 xl:w-1/4 flex flex-col xl:flex-row items-center float-left xl:float-none mb-11 min-h-16 xl:min-h-0">
                <?php 
                    $services_icon = get_sub_field('icon');
                    $size = 'full';
                    if( $services_icon ) {
                        echo wp_get_attachment_image( $services_icon, $size, false, array( 'class' => 'w-full max-w-[36px] xl:max-w-[50px] h-[25px] xl:h-[50px] mb-4 xl:mb-0 xl:mr-4' ) );
                    } 
                ?>
                <p class="text-bullets--primary text-blue-shade-2 text-center xl:text-left"><?php echo get_sub_field( 'text' ); ?></p>
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
                <a class="section-services--button btn-internal btn-internal--shade-2 text-center" href="<?php echo esc_url( $services_btn_url ); ?>" target="<?php echo esc_attr( $services_btn_target ); ?>"><?php echo esc_html( $services_btn_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>