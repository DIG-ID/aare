<section class="section-milestones relative bg-[#DFF4F7]">
    <div class="scroll-section relative h-[101vh]">
        <div class="panel w-[150vw] md:w-[150vw] xl:w-[100vw] st-grid !px-0">
            <div class="col-span-1 md:col-span-3 xl:col-span-7 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-7 gap-6 xl:gap-8 px-6 md:px-0 bg-dark-blue">
                <div class="col-span-2 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-2 xl:col-start-2 flex flex-col justify-center py-28">
                    <p class="st-title text-blue mb-5"><?php the_field( 'milestones_intro_title' ); ?></p>
                    <p class="st-subtitle-i text-light-blue text-wrap mb-28"><?php the_field( 'milestones_intro_subtitle' ); ?></p>
                    <p class="st-body-dates text-light-blue text-wrap"><?php the_field( 'milestones_intro_text' ); ?></p>
                </div>
                <div class="absolute bottom-12 left-[8%] w-[30%] z-10 block md:hidden">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/section-arrow-right.svg" alt="arrow-right" title="arrow right" />
                </div>
            </div>

            <div class="col-span-1 md:col-span-3 xl:col-span-5 col-start-2 md:col-start-4 xl:col-start-8 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-5 gap-6 xl:gap-8 px-6 md:px-0 bg-[#DFF4F7] py-28 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10 md:-ml-8">
                <?php 
                $image_intro = get_field( 'milestones_content_image_1' );
                if ( $image_intro ) : ?>
                    <?php echo wp_get_attachment_image( $image_intro, 'full', false, array( 'class' => 'w-full object-cover md:-ml-24' ) ); ?>
                <?php endif;
                ?>
                </div>
                <div class="col-span-2 md:col-span-4 xl:col-span-5 col-start-1 md:col-start-2 xl:col-start-2 xl:col-end-5 flex flex-col md:justify-end items-end">
                    <p class="st-subtitle-i w-fit"><?php the_field( 'milestones_content_text_1' ); ?></p>
                </div>
                <div class="absolute bottom-12 right-10 2xl:right-0 z-10 hidden md:block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/section-arrow-right.svg" alt="arrow-right" title="arrow right" />
                </div>
            </div>
        </div>

        <div class="panel st-grid w-[150vw] md:w-[150vw] xl:w-[100vw] py-28 bg-[#DFF4F7]">
            <div class="col-span-1 md:col-span-3 xl:col-span-4 flex flex-col justify-center xl:block">
                <p class="st-subtitle-i mb-4 md:mb-24"><?php the_field( 'milestones_content_text_2' ); ?></p>
                <?php 
                $image = get_field( 'milestones_content_image_2' );
                if ( $image ) : ?>
                    <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                <?php endif;
                ?>
            </div>
            <div class="col-span-1 md:col-span-3 xl:col-span-5 col-start-2 md:col-start-4 xl:col-start-7 relative md:px-12 xl:px-0">
                <?php 
                $image = get_field( 'milestones_content_image_3' );
                if ( $image ) : ?>
                    <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                <?php endif;
                ?>
                <p class="st-subtitle-i mb-24 mt-10 xl:mt-20 xl:ml-20 max-w-[374px]"><?php the_field( 'milestones_content_text_3' ); ?></p>
                <?php 
                $image = get_field( 'milestones_content_image_3-2' );
                if ( $image ) : ?>
                    <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover absolute max-w-[334px] top-[30%] -right-[20%] hidden xl:block' ) ); ?>
                <?php endif;
                ?>
            </div>
        </div>

        <div class="panel st-grid w-[150vw] md:w-[150vw] xl:w-[100vw] py-28 bg-[#DFF4F7]">
            <div class="col-span-1 md:col-span-3 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-2 flex flex-col justify-end xl:block">
                <p class="st-subtitle-i mb-4 md:mb-24 max-w-[374px]"><?php the_field( 'milestones_content_text_4' ); ?></p>
                <?php 
                $image = get_field( 'milestones_content_image_4' );
                if ( $image ) : ?>
                    <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover xl:ml-20' ) ); ?>
                <?php endif;
                ?>
            </div>
            <div class="col-span-1 md:col-span-3 xl:col-span-4 col-start-2 md:col-start-4 xl:col-start-8">
                <?php 
                $image = get_field( 'milestones_content_image_5' );
                if ( $image ) : ?>
                    <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                <?php endif;
                ?>
                <p class="st-subtitle-i mb-4 md:mb-24 xl:ml-40 mt-4 md:mt-20 max-w-[420px]"><?php the_field( 'milestones_content_text_5' ); ?></p>
            </div>
        </div>

        <div class="panel st-grid w-[150vw] md:w-[150vw] xl:w-[100vw] py-28 bg-[#DFF4F7]">
            <div class="col-span-1 md:col-span-3 xl:col-span-4 grid grid-cols-1 md:grid-cols-4 xl:grid-cols-3 col-start-1 md:col-start-1 xl:col-start-2 md:px-12 xl:px-0">
                <div class="col-span-1 md:col-span-3 xl:col-span-2 col-start-1 md:col-start-1 xl:col-start-2 flex flex-col justify-end items-start xl:block">
                    <p class="st-subtitle-i mb-4 md:mb-24"><?php the_field( 'milestones_content_text_6' ); ?></p>
                </div>
                <div class="col-span-1 md:col-span-4 xl:col-span-2 col-start-1 md:col-start-2 xl:col-start-1 flex flex-col items-center justify-end xl:block">
                    <?php 
                    $image = get_field( 'milestones_content_image_6-2' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover max-w-[450px] xl:max-w-[334px]' ) ); ?>
                    <?php endif;
                    ?>
                </div>
            </div>
            <div class="col-span-1 md:col-span-3 xl:col-span-5 col-start-2 md:col-start-4 xl:col-start-7 flex flex-col justify-start xl:block">
                <?php 
                $image = get_field( 'milestones_content_image_6' );
                if ( $image ) : ?>
                    <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                <?php endif;
                ?>
            </div>
        </div>

        <div class="panel st-grid w-[150vw] md:w-[147vw] xl:w-[100vw] py-28 bg-[#DFF4F7]">
            <div class="col-span-1 md:col-span-3 xl:col-span-5 grid grid-cols-1 md:grid-cols-4 xl:grid-cols-5 col-start-1 md:col-start-1 xl:col-start-2 md:px-12 xl:px-0">
                <div class="col-span-1 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-1 xl:col-start-2 flex flex-col justify-end xl:block">
                    <p class="st-subtitle-i mb-4 md:mb-24"><?php the_field( 'milestones_content_text_7' ); ?></p>
                </div>
                <div class="col-span-1 md:col-span-4 xl:col-span-5 col-start-1">
                    <?php 
                    $image = get_field( 'milestones_content_image_7' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
            </div>
            <div class="col-span-1 md:col-span-3 xl:col-span-4 col-start-2 md:col-start-4 xl:col-start-7 xl:-ml-32 hidden xl:block">
                <?php 
                $image = get_field( 'milestones_content_image_7-2' );
                if ( $image ) : ?>
                    <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                <?php endif;
                ?>
            </div>
        </div>

        <div class="panel st-grid w-[165vw] md:w-[163vw] xl:w-[100vw] py-28 bg-[#DFF4F7]">
            <div class="col-span-1 md:col-span-2 xl:col-span-3 flex items-center">
                <p class="st-subtitle-i mb-4 md:mb-24"><?php the_field( 'milestones_content_text_8' ); ?></p>
            </div>
            <div class="col-span-1 md:col-span-2 xl:col-span-4 xl:max-w-[454px] col-start-2 md:col-start-3 xl:col-start-4 flex flex-col justify-center xl:block">
                <?php 
                $image = get_field( 'milestones_content_image_8' );
                if ( $image ) : ?>
                    <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                <?php endif;
                ?>
            </div>
            <div class="col-span-1 md:col-span-2 xl:col-span-3 col-start-2 md:col-start-5 xl:col-start-8 hidden md:flex justify-center">
                <img class="max-w-[170px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/site-logo.svg" alt="logo" title="logo" />
            </div>
        </div>
    </div>
</section>
