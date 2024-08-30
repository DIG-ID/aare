<section class="section-tabs bg-blue-shade-5 pt-0 pb-28 relative overflow-hidden">
    <div class="theme-container grid grid-cols-2 xl:grid-cols-12 gap-x-6">
            <!-- Tabs Navigation -->
            <div class="tabs-navigation col-span-2 xl:col-span-12 pt-20 flex justify-center mb-16 xl:mb-24">
                <button class="tab-button text-title text-blue-shade-2 active mr-9" data-tab="hotelzimmer"><?php echo get_field( 'zimmer_title' ); ?></button>
                <button class="tab-button text-title text-blue-shade-2 ml-9" data-tab="apartments"><?php echo get_field( 'apartments_title' ); ?></button>
            </div>

            <!-- Tabs Content -->
            <div class="tabs-content col-span-2 xl:col-span-10 col-start-1 xl:col-start-2">
                <div id="tab-hotelzimmer" class="tab-content active opacity-100 transition-opacity duration-500 ease-in-out">
                    <div class="grid grid-cols-2 xl:grid-cols-10 gap-x-6">
                        <div class="col-span-2 xl:col-span-5">
                            <?php 
                                $zimmer_image_1 = get_field('zimmer_image_1');
                                $size = 'full';
                                if( $zimmer_image_1 ) {
                                    echo wp_get_attachment_image( $zimmer_image_1, $size, false, array( 'class' => 'w-full rounded-[22px]' ) );
                                } 
                            ?>
                            <div class="hidden xl:grid grid-cols-5 pt-14">
                                <div class="col-span-2 xl:col-span-3">
                                    <p class="font-miller font-light text-sm xl:text-2xl text-blue-shade-2 xl:pr-8"><?php echo get_field( 'zimmer_description_2' ); ?></p>
                                </div>
                                <div class="col-span-2 col-start-4">
                                    <?php 
                                    $zimmer_btn = get_field('zimmer_button');
                                    if( $zimmer_btn ): 
                                        $zimmer_btn_url = $zimmer_btn['url'];
                                        $zimmer_btn_title = $zimmer_btn['title'];
                                        $zimmer_btn_target = $zimmer_btn['target'] ? $zimmer_btn['target'] : '_self';
                                        ?>
                                        <a class="btn-internal btn-internal--shade-3 text-center" href="<?php echo esc_url( $zimmer_btn_url ); ?>" target="<?php echo esc_attr( $zimmer_btn_target ); ?>"><?php echo esc_html( $zimmer_btn_title ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 xl:col-span-2 mt-12 xl:mt-0 mb-12 xl:mb-0">
                            <p class="font-poppins font-normal text-[12px] xl:text-[14px] text-blue-shade-2 leading-[26px] xl:max-w-[170px] text-center xl:text-left"><?php echo get_field( 'zimmer_description_1' ); ?></p>
                        </div>
                        <div class="col-span-2 xl:col-span-3 xl:pt-12">
                            <?php 
                                $zimmer_image_2 = get_field('zimmer_image_2');
                                $size = 'full';
                                if( $zimmer_image_2 ) {
                                    echo wp_get_attachment_image( $zimmer_image_2, $size, false, array( 'class' => 'w-[75%] xl:w-full rounded-[22px] mx-auto xl:mx-0' ) );
                                } 
                            ?>
                            <div class="grid xl:hidden grid-cols-2 pt-14">
                                <div class="col-span-2">
                                    <p class="font-miller font-light text-sm text-blue-shade-2 w-[75%] text-center mx-auto"><?php echo get_field( 'zimmer_description_2' ); ?></p>
                                </div>
                                <div class="col-span-2 text-center mt-12">
                                    <?php 
                                    $zimmer_btn = get_field('zimmer_button');
                                    if( $zimmer_btn ): 
                                        $zimmer_btn_url = $zimmer_btn['url'];
                                        $zimmer_btn_title = $zimmer_btn['title'];
                                        $zimmer_btn_target = $zimmer_btn['target'] ? $zimmer_btn['target'] : '_self';
                                        ?>
                                        <a class="btn-internal btn-internal--shade-3 text-center" href="<?php echo esc_url( $zimmer_btn_url ); ?>" target="<?php echo esc_attr( $zimmer_btn_target ); ?>"><?php echo esc_html( $zimmer_btn_title ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-apartments" class="tab-content hidden opacity-0 transition-opacity duration-500 ease-in-out">
                    <div class="grid grid-cols-2 xl:grid-cols-10 gap-x-6">
                        <div class="col-span-2 xl:col-span-3 order-2 xl:order-1">
                            <?php 
                                $apart_image_1 = get_field('apartments_image_1');
                                $size = 'full';
                                if( $apart_image_1 ) {
                                    echo wp_get_attachment_image( $apart_image_1, $size, false, array( 'class' => 'w-[75%] xl:w-full rounded-[22px] mx-auto xl:mx-0' ) );
                                } 
                            ?>
                            <p class="font-miller font-light text-sm xl:text-2xl text-blue-shade-2 xl:pr-8 xl:pt-7 w-[50%] xl:w-full mx-auto xl:mx-0 text-center xl:text-left my-12 xl:my-0"><?php echo get_field( 'apartments_description_2' ); ?></p>
                            <div class="flex xl:hidden flex-col items-center justify-end">
                                <?php 
                                $apartments_btn = get_field('apartments_button');
                                if( $apartments_btn ): 
                                    $apartments_btn_url = $apartments_btn['url'];
                                    $apartments_btn_title = $apartments_btn['title'];
                                    $apartments_btn_target = $apartments_btn['target'] ? $apartments_btn['target'] : '_self';
                                    ?>
                                    <a class="btn-internal btn-internal--shade-3 text-center" href="<?php echo esc_url( $apartments_btn_url ); ?>" target="<?php echo esc_attr( $apartments_btn_target ); ?>"><?php echo esc_html( $apartments_btn_title ); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-span-2 xl:col-span-7 grid xl:grid-cols-7 gap-x-6 order-1 xl:order-2">
                            <div class="col-span-2 row-span-1 xl:col-span-7 col-start-1 order-3 xl:order-1">
                                <div class="font-poppins font-normal text-[12px] xl:text-[14px] text-blue-shade-2 leading-normal xl:max-w-[290px] text-center xl:text-left my-12 xl:my-0"><?php echo get_field( 'apartments_description_1' ); ?></div>
                            </div>
                            <div class="col-span-2 row-span-1 xl:col-span-2 col-start-1 hidden xl:flex flex-col items-center justify-end order-2">
                                <?php 
                                $apartments_btn = get_field('apartments_button');
                                if( $apartments_btn ): 
                                    $apartments_btn_url = $apartments_btn['url'];
                                    $apartments_btn_title = $apartments_btn['title'];
                                    $apartments_btn_target = $apartments_btn['target'] ? $apartments_btn['target'] : '_self';
                                    ?>
                                    <a class="btn-internal btn-internal--shade-3 text-center" href="<?php echo esc_url( $apartments_btn_url ); ?>" target="<?php echo esc_attr( $apartments_btn_target ); ?>"><?php echo esc_html( $apartments_btn_title ); ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="col-span-2 row-span-1 xl:col-span-5 col-start-1 xl:col-start-3 flex flex-col items-center justify-end order-1 xl:order-3">
                                <?php 
                                    $apart_image_2 = get_field('apartments_image_2');
                                    $size = 'full';
                                    if( $apart_image_2 ) {
                                        echo wp_get_attachment_image( $apart_image_2, $size, false, array( 'class' => 'w-full rounded-[22px]' ) );
                                    } 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
