<section class="section-partners bg-light-blue -mt-[1px]">
	<div class="st-grid">
        <div class="st-container grid grid-cols-2 md:grid-cols-4 xl:grid-cols-9">
            <?php
            if( have_rows('team_members') ):
            while( have_rows('team_members') ) : the_row();
                get_template_part( 'template-parts/components/card-team' );
            endwhile;
            endif; ?>
            <?php
            /*
            <div <?php post_class( 'card-team col-span-2 md:col-span-4 xl:col-span-3 mb-24' ); ?>>
                <div class="w-full relative">
                    <div class="bg-image">
                        <img width="530" height="650" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bg-blue.jpg" class="object-cover w-full size-team-picture">
                    </div>
                    <div class="absolute top-12 left-8 xl:top-16 xl:left-12 2xl:top-32 2xl:left-20">
                        <img class="mb-14 xl:mb-14 2xl:mb-28" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo-dark.svg" alt="logo" title="logo" />
                        <h2 class="st-subtitle-big text-dark-blue max-w-[325px]"><?php the_field( 'message' ); ?></h2>
                    </div>
                </div>
            </div>
            */
            ?>
        </div>
        <div class="st-container grid grid-cols-2 md:grid-cols-4 xl:grid-cols-9">
            <div <?php post_class( 'card-team col-span-2 md:col-span-8 xl:col-span-12 mb-24' ); ?>>
                <div class="w-full relative bg-blue">
                    <div class="flex justify-center items-center py-[70px]">
                        <img class="md:mr-[85px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo-dark.svg" alt="logo" title="logo" />
                        <h2 class="st-subtitle-big text-dark-blue"><?php the_field( 'message' ); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>