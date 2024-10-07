<hr class="wave-separator__inverted border-0 -mb-[2px]" />
<section class="section-tabs bg-blue-shade-5 pt-0 pb-28 relative overflow-hidden">
    <div class="theme-container grid grid-cols-2 md:grid-cols-12 gap-x-6 fade-in">
            <!-- Tabs Navigation -->
            <div class="tabs-navigation col-span-2 md:col-span-12 pt-20 flex justify-center mb-16 md:mb-24">
                <button class="tab-button text-title text-blue-shade-2 active mr-9" data-tab="hotelzimmer"><?php echo get_field( 'zimmer_title' ); ?></button>
                <button class="tab-button text-title text-blue-shade-2 ml-9" data-tab="apartments"><?php echo get_field( 'apartments_title' ); ?></button>
            </div>

            <!-- Tabs Content -->
            <div class="tabs-content col-span-2 md:col-span-10 col-start-1 md:col-start-2">
                <div id="tab-hotelzimmer" class="tab-content active opacity-100 transition-opacity duration-500 ease-in-out">
                    <div class="grid grid-cols-2 md:grid-cols-10 gap-x-6">
                        <div class="col-span-2 md:col-span-5">
                            <?php 
                                $zimmer_image_1 = get_field('zimmer_image_1');
                                $size = 'full';
                                if( $zimmer_image_1 ) {
                                    echo wp_get_attachment_image( $zimmer_image_1, $size, false, array( 'class' => 'w-full rounded-[22px]' ) );
                                } 
                            ?>
                            <div class="hidden md:grid grid-cols-5 pt-14">
                                <div class="col-span-2 md:col-span-5 xl:col-span-3">
                                    <p class="font-miller font-light text-sm md:text-2xl text-blue-shade-2 md:pr-8"><?php echo get_field( 'zimmer_description_2' ); ?></p>
                                </div>
                                <div class="col-span-2 md:col-span-5 xl:col-span-2 col-start-1 xl:col-start-4 mt-8 xl:mt-0">
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
                        <div class="col-span-2 md:col-span-5 lg:col-span-2 mt-12 md:mt-0 mb-12 md:mb-0">
                            <p class="font-poppins font-normal text-[12px] md:text-[14px] text-blue-shade-2 leading-[26px] lg:max-w-[170px] text-center md:text-left"><?php echo get_field( 'zimmer_description_1' ); ?></p>
                            <?php 
                                $zimmer_image_2 = get_field('zimmer_image_2');
                                $size = 'full';
                                if( $zimmer_image_2 ) {
                                    echo wp_get_attachment_image( $zimmer_image_2, $size, false, array( 'class' => 'w-[75%] md:w-full rounded-[22px] mx-auto md:mx-0 mt-12 block lg:hidden' ) );
                                } 
                            ?>
                        </div>
                        <div class="col-span-2 md:col-span-5 lg:col-span-3 col-start-1 md:col-start-6 lg:pt-12">
                            <?php 
                                $zimmer_image_2 = get_field('zimmer_image_2');
                                $size = 'full';
                                if( $zimmer_image_2 ) {
                                    echo wp_get_attachment_image( $zimmer_image_2, $size, false, array( 'class' => 'w-[75%] md:w-full rounded-[22px] mx-auto md:mx-0 hidden lg:block' ) );
                                } 
                            ?>
                            <div class="grid md:hidden grid-cols-2 pt-14">
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
                    <div class="grid grid-cols-2 md:grid-cols-10 gap-x-6">
                        <div class="col-span-2 md:col-span-4 xl:col-span-3 order-2 md:order-1">
                            <?php 
                                $apart_image_1 = get_field('apartments_image_1');
                                $size = 'full';
                                if( $apart_image_1 ) {
                                    echo wp_get_attachment_image( $apart_image_1, $size, false, array( 'class' => 'w-[75%] md:w-full rounded-[22px] mx-auto md:mx-0' ) );
                                } 
                            ?>
                            <p class="font-miller font-light text-sm md:text-2xl text-blue-shade-2 md:pr-8 md:pt-7 w-[50%] md:w-full mx-auto md:mx-0 text-center md:text-left my-12 md:my-0"><?php echo get_field( 'apartments_description_2' ); ?></p>
                            <div class="flex md:hidden flex-col items-center justify-end">
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
                        <div class="col-span-2 md:col-span-6 xl:col-span-7 grid md:grid-cols-7 gap-x-6 order-1 md:order-2">
                            <div class="col-span-2 xl:row-span-1 md:col-span-7 col-start-1 order-3 md:order-1">
                                <div class="font-poppins font-normal text-[12px] md:text-[14px] text-blue-shade-2 leading-normal md:max-w-[290px] text-center md:text-left my-12 md:my-0"><?php echo get_field( 'apartments_description_1' ); ?></div>
                            </div>
                            <div class="col-span-2 xl:row-span-1 md:col-span-7 xl:col-span-2 col-start-1 hidden md:flex flex-col md:items-end xl:items-center justify-end order-2">
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
                            <div class="col-span-2 row-span-1 md:col-span-6 xl:col-span-5 col-start-1 md:col-start-2 xl:col-start-3 flex flex-col items-center justify-end order-1 md:order-3">
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
