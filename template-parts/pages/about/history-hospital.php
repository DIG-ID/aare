<section class="section-history-hospital bg-blue-shade-4 relative overflow-hidden">
    
    <div class="history-hospital py-12 relative">
        
        <div class="h-[90vh] w-[4925px] grid grid-cols-9 my-auto bg-blue-shade-4">
            <div class="col-span-1 bg-blue-shade-4 text-right">
            <?php 
                $banner_image = get_field('hospital_banner');
                $size = 'full';
                if( $banner_image ) {
                    echo wp_get_attachment_image( $banner_image, $size, false, array( 'class' => 'w-[300px] rounded-[24px] inline-block mr-6' ) );
                } 
            ?>
            </div>
            <div class="col-span-1 pl-28 pt-20 bg-blue-shade-1 rounded-l-[24px]">
                <h2 class="font-miller font-light text-2xl xl:text-5xl leading-7 w-[60%] text-blue-shade-5"><?php echo get_field( 'hospital_title' ); ?></h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/waves.svg" class="w-[143px] py-11" alt="waves" title="waves" />
                <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_1_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-32 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_1_description' ); ?></p>
                <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_2_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-0 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_2_description' ); ?></p>
            </div>
            <div class="col-span-1 pl-8 pt-20 bg-blue-shade-1 lg:-ml-[2px]">
                Image
                <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_3_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-32 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_3_description' ); ?></p>
                <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_4_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-0 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_4_description' ); ?></p>
            </div>
            <div class="col-span-1 pl-8 pt-20 bg-blue-shade-1 lg:-ml-[2px]">
                <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_5_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-20 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_5_description' ); ?></p>
                <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_6_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-32 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_6_description' ); ?></p>
                <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_7_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-0 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_7_description' ); ?></p>
            </div>
            <div class="col-span-1 pl-8 pt-20 bg-blue-shade-1 lg:-ml-[2px]">
                <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_8_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-8 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_8_description' ); ?></p>
                Image
            </div>
            <div class="col-span-1 pl-8 pt-20 bg-blue-shade-1 lg:-ml-[2px]">
                <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_9_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-20 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_9_description' ); ?></p>
                <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_10_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-28 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_10_description' ); ?></p>
                <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_11_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-0 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_11_description' ); ?></p>
            </div>
            <div class="col-span-1 pl-8 pt-20 bg-blue-shade-1 lg:-ml-[2px]">Image 1<br>Image 2</div>
            <div class="col-span-1 pl-8 pt-20 bg-blue-shade-1 lg:-ml-[2px]">
            <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_12_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-20 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_12_description' ); ?></p>
                <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_13_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-28 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_13_description' ); ?></p>
                <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_14_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-0 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_14_description' ); ?></p>
            </div>
            <div class="col-span-1 pl-8 pt-20 bg-blue-shade-1 lg:-ml-[2px]">
                <h3 class="text-title-h3 text-blue-shade-5 mb-4"><?php the_field( 'hospital_timeline_15_year' ); ?></h3>
                <p class="text-body text-blue-shade-5 mb-8 lg:max-w-[410px]"><?php the_field( 'hospital_timeline_15_description' ); ?></p>
                Image
            </div>
        </div>
    </div>
</section>
