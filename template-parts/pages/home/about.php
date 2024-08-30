<section class="section-about bg-blue-shade-1 pt-0 xl:pt-14 pb-0 relative overflow-hidden">
    <div class="theme-container grid grid-cols-2 xl:grid-cols-12 gap-x-6">
        <div class="col-span-2 xl:col-span-10 col-start-1 xl:col-start-2 text-center mb-12">
            <img class="pb-12 mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/waves.svg" alt="waves" title="waves" />
            <h2 class="text-title text-blue-shade-5 mb-16"><?php echo get_field( 'about_title' ); ?></h2>
            <?php 
                $about_image = get_field('about_image');
                $size = 'full';
                if( $about_image ) {
                    echo wp_get_attachment_image( $about_image, $size, false, array( 'class' => 'w-full rounded-[20px]' ) );
                } 
            ?>
        </div>
        <div class="col-span-2 xl:col-span-4 col-start-1 xl:col-start-2">
            <p class="text-body !leading-[26px] text-blue-shade-5"><?php echo get_field( 'about_text' ); ?></p>
        </div>
        <div class="col-span-2 xl:col-span-3 col-start-1 xl:col-start-9 mb-32">
        <?php 
            $about_btn = get_field('about_button');
            if( $about_btn ): 
                $about_btn_url = $about_btn['url'];
                $about_btn_title = $about_btn['title'];
                $about_btn_target = $about_btn['target'] ? $about_btn['target'] : '_self';
                ?>
                <a class="btn-internal btn-internal--shade-transparent text-center" href="<?php echo esc_url( $about_btn_url ); ?>" target="<?php echo esc_attr( $about_btn_target ); ?>"><?php echo esc_html( $about_btn_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>

    <div class="theme-container grid grid-cols-2 xl:grid-cols-12 gap-x-6 xl:pb-32">
        <?php
            get_template_part( 'template-parts/components/teaser-default' );
        ?>
    </div>
</section>