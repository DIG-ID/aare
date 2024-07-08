<section class="section-intro bg-dark-blue">
	<div class="st-grid">
        <div class="col-span-2 md:col-span-6 xl:col-span-7 order-2 xl:order-1 -ml-6 -mr-6 md:ml-0 md:mr-0">
        <?php 
            $image_intro = get_field( 'intro_image' );
            if ( $image_intro ) : ?>
                <?php echo wp_get_attachment_image( $image_intro, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
            <?php endif;
        ?>
        </div>
        <div class="col-span-2 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-2 xl:col-start-9 flex flex-col justify-center xl:items-center order-1 xl:order-2 pt-40 md:pt-60 xl:pt-0 pb-20 xl:pb-0">
            <div class="w-full mb-3 md:mb-11 xl:mb-24"><?php do_action( 'breadcrumbs' ); ?></div>
            <p class="st-subtitle-big text-light-blue max-w-[554px] xl:max-w-none"><?php the_field( 'intro_text_1' ); ?></p>
            <p class="st-subtitle-big text-blue max-w-[554px] xl:max-w-none"><?php the_field( 'intro_text_2' ); ?></p>
        </div>
    </div>
</section>