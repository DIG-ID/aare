<section class="section-contact bg-blue-shade-2 pt-0 pb-0 relative overflow-hidden">
    <hr class="wave-separator__inverted--light border-0" />

    <div class="theme-container grid grid-cols-2 xl:grid-cols-12 gap-x-6 xl:pt-40 xl:pb-32">
        <div class="after-vertical-line relative col-span-2 xl:col-span-5 col-start-1 xl:col-start-2 flex flex-col items-center justify-start pb-12 xl:pb-0 pt-6 xl:pt-0 w-[75%] xl:w-full mx-auto xl:mx-0">
            <p class="text-title text-blue-shade-5 xl:leading-[68px] text-center xl:max-w-[412px]"><?php echo get_field( 'contact_title_1' ); ?></p>
        </div>
        <div class="col-span-2 xl:col-span-5 col-start-1 xl:col-start-7 flex flex-col items-center justify-start mt-12 xl:mt-0">
            <p class="text-title text-blue-shade-5 xl:leading-[68px]"><?php echo get_field( 'contact_title_2' ); ?></p>
            <?php 
            $contact = get_field('contact_button');
            if( $contact ): 
                $contact_url = $contact['url'];
                $contact_title = $contact['title'];
                $contact_target = $contact['target'] ? $contact['target'] : '_self';
                ?>
                <a class="btn-custom btn-custom--only-arrow text-center mb-9 mt-7" href="<?php echo esc_url( $contact_url ); ?>" target="<?php echo esc_attr( $contact_target ); ?>"><?php echo esc_html( $contact_title ); ?></a>
            <?php endif; ?>
            <p class="font-miller font-light text-sm xl:text-2xl text-blue-shade-5 text-center xl:max-w-[350px] w-[50%] xl:w-full"><?php echo get_field( 'contact_disclaimer' ); ?></p>
        </div>
    </div>

    <hr class="wave-separator__inverted border-0" />
</section>