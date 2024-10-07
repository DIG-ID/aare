<section class="section-about bg-blue-shade-1 pt-14 md:pt-14 pb-12 md:pb-0 relative overflow-hidden">
    <div class="theme-container grid grid-cols-2 md:grid-cols-12 gap-x-6">
        <div class="col-span-2 md:col-span-10 col-start-1 md:col-start-2 text-center mb-7 md:mb-12">
            <img class="pb-12 mx-auto fade-in" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/waves.gif" alt="waves" title="waves" />
            <h2 class="text-title text-blue-shade-5 mb-16 fade-in"><?php echo get_field( 'about_title' ); ?></h2>
            <?php 
                $about_image = get_field('about_image');
                $size = 'full';
                if( $about_image ) {
                    echo wp_get_attachment_image( $about_image, $size, false, array( 'class' => 'fade-in w-full rounded-[20px]' ) );
                } 
            ?>
        </div>
        <div class="col-span-2 md:col-span-5 xl:col-span-4 col-start-1 md:col-start-2 xl:col-start-2">
            <p class="text-body !leading-[26px] text-blue-shade-5 fade-in"><?php echo get_field( 'about_text' ); ?></p>
        </div>
        <div class="col-span-2 md:col-span-5 xl:col-span-3 col-start-1 md:col-start-7 xl:col-start-9 mt-7 md:mt-0 md:mb-32 md:text-right">
        <?php 
            $about_btn = get_field('about_button');
            if( $about_btn ): 
                $about_btn_url = $about_btn['url'];
                $about_btn_title = $about_btn['title'];
                $about_btn_target = $about_btn['target'] ? $about_btn['target'] : '_self';
                ?>
                <div class="fade-in"><a class="btn-internal btn-internal--shade-transparent text-center fgade-in" href="<?php echo esc_url( $about_btn_url ); ?>" target="<?php echo esc_attr( $about_btn_target ); ?>"><?php echo esc_html( $about_btn_title ); ?></a></div>
            <?php endif; ?>
        </div>
    </div>

    <div class="theme-container grid grid-cols-2 md:grid-cols-12 gap-x-6 pt-14 md:pb-32">
        <?php
            get_template_part( 'template-parts/components/teaser-default' );
        ?>
    </div>
</section>