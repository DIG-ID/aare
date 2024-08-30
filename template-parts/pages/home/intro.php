<section class="section-intro bg-blue-shade-1 pt-0 pb-0 relative overflow-hidden">
    <div class="theme-container grid grid-cols-2 xl:grid-cols-12 gap-x-6">
        <div class="col-span-2 xl:col-span-12 text-center pt-12">
            <h2 class="text-title text-blue-shade-5"><?php echo get_field( 'intro_text' ); ?></h2>
            <img class="pt-14 pb-12 mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/waves.svg" alt="waves" title="waves" />
        </div>
        <div class="col-span-2 xl:col-span-12">
        <?php 
            $hero_image = get_field('intro_image');
            $size = 'full';
            if( $hero_image ) {
                echo wp_get_attachment_image( $hero_image, $size, false, array( 'class' => 'w-full rounded-[20px]' ) );
            } 
        ?>
        </div>
    </div>

    <div class="theme-container grid grid-cols-2 xl:grid-cols-12 gap-x-6 pt-32">
        <div class="col-span-2 xl:col-span-5 col-start-1 xl:col-start-2">
            <p class="font-miller font-normal text-[14px] xl:text-[36px] leading-7 xl:leading-[68px] text-blue-shade-5 xl:max-w-[440px]"><?php echo get_field( 'intro_description_1' ); ?></p>
        </div>
        <div class="col-span-2 xl:col-span-5 col-start-1 xl:col-start-7 mt-28">
        <?php 
            $hero_image = get_field('intro_image_1');
            $size = 'full';
            if( $hero_image ) {
                echo wp_get_attachment_image( $hero_image, $size, false, array( 'class' => 'w-full rounded-[20px]' ) );
            } 
        ?>
        </div>
    </div>

    <div class="theme-container grid grid-cols-2 xl:grid-cols-12 gap-x-6 xl:pt-40 xl:pb-32">
        <div class="col-span-2 xl:col-span-4 col-start-1 xl:col-start-2">
        <?php 
            $hero_image = get_field('intro_image_2');
            $size = 'full';
            if( $hero_image ) {
                echo wp_get_attachment_image( $hero_image, $size, false, array( 'class' => 'w-full rounded-[20px]' ) );
            } 
        ?>
        </div>
        <div class="col-span-2 xl:col-span-5 col-start-1 xl:col-start-7 mt-28 flex items-end">
            <p class="font-miller font-normal text-[14px] xl:text-[36px] leading-7 xl:leading-[68px] text-blue-shade-5 xl:max-w-[550px]"><?php echo get_field( 'intro_description_2' ); ?></p>
        </div>
    </div>
</section>