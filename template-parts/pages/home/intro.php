<section class="section-intro bg-blue-shade-1 pt-0 pb-0 relative overflow-hidden">
    <div class="theme-container grid grid-cols-2 md:grid-cols-12 gap-x-6">
        <div class="col-span-2 md:col-span-12 text-center pt-12">
            <h2 class="section-intro--title text-title text-blue-shade-5 md:mx-auto md:max-w-[1050px] fade-in"><?php echo get_field( 'intro_text' ); ?></h2>
            <img class="pt-14 pb-12 mx-auto fade-in" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/waves.gif" alt="waves" title="waves" />
        </div>
        <div class="col-span-2 md:col-span-12">
        <?php 
            $hero_image = get_field('intro_image');
            $size = 'full';
            if( $hero_image ) {
                echo wp_get_attachment_image( $hero_image, $size, false, array( 'class' => 'w-full rounded-[20px]' ) );
            } 
        ?>
        </div>
    </div>

    <div class="theme-container grid grid-cols-2 md:grid-cols-12 gap-x-6 pt-12 md:pt-32">
        <div class="col-span-2 md:col-span-5 col-start-1 md:col-start-2">
            <p class="section-intro--description font-miller font-normal text-[14px] md:text-[24px] lg:text-[36px] leading-7 md:leading-10 lg:leading-[68px] text-blue-shade-5 md:max-w-[490px] text-center md:text-left w-[75%] md:w-full mx-auto md:mx-0 fade-in"><?php echo get_field( 'intro_description_1' ); ?></p>
        </div>
        <div class="col-span-2 md:col-span-5 col-start-1 md:col-start-7 mt-12 md:mt-28">
        <?php 
            $hero_image = get_field('intro_image_1');
            $size = 'full';
            if( $hero_image ) {
                echo wp_get_attachment_image( $hero_image, $size, false, array( 'class' => 'section-intro--img w-full rounded-[20px] fade-in' ) );
            } 
        ?>
        </div>
    </div>

    <div class="theme-container grid grid-cols-2 md:grid-cols-12 gap-x-6 md:pt-28 md:pb-32">
        <div class="col-span-2 md:col-span-4 col-start-1 md:col-start-2 order-2 md:order-1">
        <?php 
            $hero_image = get_field('intro_image_2');
            $size = 'full';
            if( $hero_image ) {
                echo wp_get_attachment_image( $hero_image, $size, false, array( 'class' => 'section-intro--img w-[75%] md:w-full rounded-[20px] mx-auto md:mx-0 fade-in' ) );
            } 
        ?>
        </div>
        <div class="col-span-2 md:col-span-5 col-start-1 md:col-start-7 my-12 md:mt-0 flex items-center order-1 md:order-2">
            <p class="section-intro--description-2 font-miller font-normal text-[14px] md:text-[24px] lg:text-[36px] leading-7 md:leading-10 lg:leading-[68px] text-blue-shade-5 md:max-w-[550px] w-[75%] md:w-full mx-auto md:mx-0 text-center md:text-left fade-in"><?php echo get_field( 'intro_description_2' ); ?></p>
        </div>
    </div>
</section>