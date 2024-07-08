<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-news mb-10 bg-light-blue border-t-[7px] border-blue' ); ?>>
<a href="<?php the_permalink(); ?>" class="grid grid-cols-4 md:grid-cols-6 xl:grid-cols-3">
    <div class="col-span-1 md:col-span-2 xl:col-span-1 col-start-1 md:col-start-1 xl:col-start-1">
        <?php if (has_post_thumbnail()) : 
            $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'overall-square');
        ?>
            <div class="featured-image">
                <img src="<?php echo $full_image_url[0]; ?>" alt="<?php the_title(); ?>" class="object-cover w-full" />
            </div>
        <?php else : ?>
            <div class="featured-image">
                <img src="https://placehold.co/453x453" class="object-cover w-full size-overall-square">
            </div>
        <?php endif; ?>
    </div>
    <div class="col-span-3 md:col-span-4 xl:col-span-2 col-start-2 md:col-start-3 xl:col-start-2 py-4">
        <?php $formatted_date = get_the_date('d/m/y');
        echo '<p class="st-body-dates text-blue px-5">' . $formatted_date . '</p>';
        ?>
        <h2 class="st-subtitle-i !text-[17px] !font-[545] text-dark-blue px-5"><?php the_title(); ?></h2>
    </div>
</a>
</article>