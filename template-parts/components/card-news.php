<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-news col-span-1 md:col-span-2 xl:col-span-3 mb-24 bg-light-blue' ); ?>>
    <div class="border-t-[7px] border-blue">
        <?php if (has_post_thumbnail()) : 
            $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'news-thumb');
        ?>
            <div class="featured-image mb-4">
                <img src="<?php echo $full_image_url[0]; ?>" alt="<?php the_title(); ?>" class="object-cover w-full" />
            </div>
        <?php else : ?>
            <div class="featured-image mb-4">
                <img src="https://placehold.co/453x453" class="object-cover w-full size-overall-square">
            </div>
        <?php endif; 
        $formatted_date = get_the_date('d/m/y');
        echo '<p class="st-body-dates text-blue px-3 md:px-8 mb-4">' . $formatted_date . '</p>';
        ?>
        <h2 class="st-subtitle-i text-dark-blue px-3 md:px-8"><?php the_title(); ?></h2>
        
        <div class="px-3 md:px-8 py-3 md:py-10">
            <a href="<?php the_permalink(); ?>" class="btn-arrow-caps text-blue"><?php esc_html_e( 'Mehr erfahren', 'stricker' ) ?></a>
        </div>
    </div>
</article>