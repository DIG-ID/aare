<div class="post-news pt-28 xl:pt-48 pb-16 md:pb-32 xl:pb-60 overflow-hidden">
	<div class="st-grid">
        <div class="st-container st-container-grid">
            <div class="col-span-2 md:col-span-6 xl:col-span-10"><?php do_action( 'breadcrumbs' ); ?></div>
            
            <div class="col-span-2 md:col-span-6 xl:col-span-7 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-7">
                <div class="col-span-2 md:col-span-6 xl:col-span-7 mb-7 xl:mb-0">
                    <?php if (has_post_thumbnail()) : 
                        $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'featured-image-overview');
                    ?>
                    <div class="featured-image">
                        <img src="<?php echo $full_image_url[0]; ?>" alt="<?php the_title(); ?>" class="size-featured-image-overview" />
                    </div>
                    <?php else : ?>
                    <div class="featured-image">
                        <img src="https://placehold.co/1105x605">
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-span-2 md:col-span-6 xl:col-span-7 mb-7 xl:mb-0">
                    <?php $formatted_date = get_the_date('d/m/y');
                        echo '<p class="st-body-dates text-blue my-4">' . $formatted_date . '</p>';
                    ?>
                    <div class="st-subtitle-bi text-dark-blue my-5"><?php the_title(); ?></div>
                </div>
                <div class="col-span-2 md:col-span-6 xl:col-span-7 mb-7 xl:mb-0">
                    <div class="st-body-dates text-dark-blue mb-20"><?php the_content(); ?></div>
                </div>
            </div>
            <div class="col-span-2 md:col-span-6 xl:col-span-3">
                <div class="w-full bg-blue py-3 px-4 mb-7">
                    <p class="st-subtitle-big text-light-blue"><?php esc_html_e( 'Related News', 'stricker' ) ?></p>
                </div>
                <?php
                    $news_args = array(
                        'post_type'      => 'news',
                        'order'          => 'DESC',
                        'orderby'        => 'date',
                        'post_status'    => 'publish',
                        'posts_per_page' => 9,
                        'paged'          => ( get_query_var('paged') ) ? get_query_var('paged') : 1 
                    );
                    $newse_query = new WP_Query( $news_args );
                    if ( $newse_query->have_posts() ) : 
                        $first_post = true; // Initialize a flag for the first post
                        while ( $newse_query->have_posts() ) :
                            $newse_query->the_post();
                            if ( $first_post ) {
                                get_template_part( 'template-parts/components/card-news' );
                                $first_post = false; // Set the flag to false after the first post
                            } else {
                                get_template_part( 'template-parts/components/card-news-preview' );
                            }
                        endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
            </div>
        </div>
	</div>
	<div class="st-grid">
        <div class="st-container st-container-grid">
            <div class="col-span-2 md:col-span-6 xl:col-span-7">
                <a href="<?php echo get_post_type_archive_link( 'news' ); ?>" class="st-body-dates uppercase text-blue mt-12"><?php esc_html_e('< Zurück zu den Nachrichten', 'stricker'); ?></a>
            </div>
        </div>
	</div>
</div>