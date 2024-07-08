<section id="section-profile" class="section-profile relative pt-28">
    <div class="xl:absolute inset-0 overflow-hidden -mt-[2px]">
        <div class="absolute inset-0 bg-dark-blue clip-path-bg" style=""></div>
    </div>
	<div class="st-grid !px-0 xl:grid-rows-2 grid-flow-col relative z-10">
        <div class="col-span-1 md:col-span-3 xl:col-span-4 xl:col-start-1">
        <?php 
            $image_1 = get_field( 'profile_profile_pic' );
            if ( $image_1 ) : ?>
            <div class="overflow-hidden relative" style="width: 100%; height: 100%;">
                <div class="zoom-on-scroll" style="transition: transform 0.5s ease;">
                    <?php echo wp_get_attachment_image( $image_1, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <div class="mask absolute inset-0" style="background: radial-gradient(ellipse at center, rgba(0,0,0,0) 50%, transparent 150%);"></div>
                </div>
            </div>
            <?php endif;
        ?>
        </div>
        <div class="col-span-1 md:col-span-3 xl:col-span-4 xl:col-start-2 xl:col-end-5 relative only-desktop hidden xl:block">
            <div class="xl:absolute w-full xl:w-[650px]">
                <p class="st-title st-title--arrow-down text-blue xl:pt-56 xl:pb-12 relative "><?php the_field( 'profile_title' ); ?></p>
                <p class="st-subtitle-i font-[545] text-dark-blue"><?php the_field( 'profile_text' ); ?></p>

            </div>
        </div>
        <div class="col-span-1 md:col-span-3 xl:col-span-12 xl:col-start-5 xl:col-end-13 xl:grid xl:grid-cols-8 gap-6 xl:gap-8 row-span-2 md:pt-9">
            <div class="xl:w-80 flex mb-[40px] md:mb-[75px] xl:mb-0">
                <div class="st-title-big !not-italic text-blue w-[100px] md:w-[260px]"><span class="number-anim inline-block w-full border-r-2 border-light-blue md:pb-7 md:leading-[130px]"><?php the_field( 'profile_singles_ranking' ); ?></span></div>
                <div class="st-subtitle-bi-caps text-light-blue w-[60px] md:w-[130px] flex justify-end pt-2">Singles<br>Ranking</div>
            </div>
            <div class="xl:w-[260px] xl:col-start-5 flex">
                <div class="st-title !not-italic text-blue w-[65px] md:w-[170px] xl:w-[140px]"><span class="number-anim inline-block w-full border-r-2 border-light-blue md:pb-7 md:leading-[60px]"><?php the_field( 'profile_doubles_ranking' ); ?></span></div>
                <div class="st-subtitle-bi-caps text-light-blue w-[60px] md:w-[120px] flex justify-end pt-1">Doubles<br>Ranking</div>
            </div>
            <div class="only-desktop hidden col-span-1 md:col-span-3 xl:col-span-6 col-start-1 md:col-start-1 xl:col-start-3 xl:pt-40 xl:grid xl:grid-cols-6 gap-x-6 xl:gap-x-8">
                <div class="border-t-2 border-blue xl:col-span-2 pt-5 flex text-dark-blue">
                    <div class="w-1/2">
                        <span class="st-subtitle-caps md:!leading-6"><?php esc_html_e( 'Dominic', 'stricker' ) ?></span><br>
                        <span class="st-subtitle-b-caps md:!leading-6"><?php esc_html_e( 'Stricker', 'stricker' ) ?></span>
                    </div>
                    <div class="w-1/2">
                        <span class="st-subtitle-caps md:!leading-6"><?php esc_html_e( 'Geboren:', 'stricker' ) ?></span><br>
                        <span class="st-subtitle-b-caps md:!leading-6"><?php esc_html_e( '2002', 'stricker' ) ?></span>
                    </div>
                </div>
                
                <div class="border-t-2 border-blue xl:col-span-2 pt-5 flex items-start text-dark-blue">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/swiss-flag.svg" title="Flag" alt="flag" class="w-[77px]">
                    <div class="pl-2">
                        <span class="st-subtitle-caps md:!leading-6"><?php esc_html_e( 'Wohnort,', 'stricker' ) ?></span><br>
                        <span class="st-subtitle-b-caps md:!leading-6"><?php esc_html_e( 'Grosshöchstetten', 'stricker' ) ?></span>
                    </div>
                </div>
                <div class="xl:col-span-6">
                    <?php 
                        $image_2 = get_field( 'profile_player_pic' );
                        if ( $image_2 ) : ?>
                            <div class="overflow-hidden relative" style="width: 100%; height: 100%;">
                                <div class="zoom-on-scroll" style="transition: transform 0.5s ease;">
                                    <?php echo wp_get_attachment_image( $image_2, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                                    <div class="mask absolute inset-0" style="background: radial-gradient(ellipse at center, rgba(0,0,0,0) 50%, transparent 150%);"></div>
                                </div>
                            </div>
                        <?php endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="st-grid only-mobile block xl:hidden pt-20">
        <div class="border-t-2 border-blue col-span-1 md:col-span-2 col-start-1 md:col-start-2 pt-2 md:pt-5 flex text-dark-blue pb-16">
            <div class="w-1/2">
                <span class="st-subtitle-caps md:!leading-6"><?php esc_html_e( 'Dominic', 'stricker' ) ?></span><br>
                <span class="st-subtitle-b-caps md:!leading-6"><?php esc_html_e( 'Stricker', 'stricker' ) ?></span>
            </div>
            <div class="w-1/2">
                <span class="st-subtitle-caps md:!leading-6"><?php esc_html_e( 'Geboren:', 'stricker' ) ?></span><br>
                <span class="st-subtitle-b-caps md:!leading-6"><?php esc_html_e( '2002', 'stricker' ) ?></span>
            </div>
        </div>
    
        <div class="border-t-2 border-blue col-span-1 md:col-span-2 pt-2 md:pt-5 flex items-start text-dark-blue">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/swiss-flag.svg" title="Flag" alt="flag" class="w-[56px] md:w-[77px]">
            <div class="pl-2">
                <span class="st-subtitle-caps md:!leading-6"><?php esc_html_e( 'Heimatort,', 'stricker' ) ?></span><br>
                <span class="st-subtitle-b-caps md:!leading-6"><?php esc_html_e( 'Grosshöchstetten', 'stricker' ) ?></span>
            </div>
        </div>
        <div class="col-span-2 md:col-span-5 col-start-1 md:col-start-2 gap-x-6">
            <div class="xl:col-span-6">
                <?php 
                    $image = get_field( 'profile_player_pic' );
                    if ( $image ) : ?>
                        <div class="overflow-hidden relative" style="width: 100%; height: 100%;">
                            <div class="zoom-on-scroll" style="transition: transform 0.5s ease;">
                                <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                                <div class="mask absolute inset-0" style="background: radial-gradient(ellipse at center, rgba(0,0,0,0) 50%, transparent 150%);"></div>
                            </div>
                        </div>
                    <?php endif;
                ?>
            </div>
        </div>
        <div class="col-span-2 md:col-span-4 col-start-1 md:col-start-2 relative only-desktop block xl:hidden">
            <div class="w-full pt-20 pb-32 pl-6">
                <p class="st-title st-title--arrow-down text-blue pb-5 relative"><?php the_field( 'profile_title' ); ?></p>
                <p class="st-subtitle-i font-[545] text-dark-blue md:max-w-[80%]"><?php the_field( 'profile_text' ); ?></p>
            </div>
        </div>
    </div>
</section>