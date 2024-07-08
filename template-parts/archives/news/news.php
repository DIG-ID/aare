<section class="section-partners bg-dark-blue -mt-[1px]">
	<div class="grid grid-cols-2 md:grid-cols-8 xl:grid-cols-12 xl:gap-8 px-6 md:px-0">
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
            ?>
            <div class="col-span-2 md:col-span-6 xl:col-span-10 col-start-1 md:col-start-2 xl:col-start-2 grid grid-cols-2 md:grid-cols-4 xl:grid-cols-10 gap-6 xl:gap-8 px-6 md:px-0">
                <?php
                while ( $newse_query->have_posts() ) :
                    $newse_query->the_post();
                    if ( $first_post ) {
                        get_template_part( 'template-parts/components/card-news-2col' );
                        $first_post = false; // Set the flag to false after the first post
                    } else {
                        get_template_part( 'template-parts/components/card-news' );
                    }
                endwhile;
                ?>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-2 justify-end flex">
                <?php
                // Pagination
                if ($newse_query->max_num_pages > 1) {
                    echo '<div class="pagination flex min-w-[375px]">';
                
                    $current_page = max(1, get_query_var('paged'));
                    $total_pages = $newse_query->max_num_pages;
                
                    if ($current_page > 1) {
                        echo '<a href="' . get_previous_posts_page_link() . '" class="pagination-arrow prev-arrow flipped mr-7"></a>';
                    } elseif ($current_page == 1) {
                        echo '<span class="w-[145px] mr-7"></span>';
                    }
                
                    echo '<div class="numeric-pagination">' . $current_page . ' / ' . $total_pages . '</div>';

                    if ($current_page < $total_pages) {
                        echo '<a href="' . get_next_posts_page_link() . '" class="pagination-arrow next-arrow ml-7"></a>';
                    }
                    
                    echo '</div>';
                }
                ?>
            </div>
            <?php 
        wp_reset_postdata();
        endif;
        ?>
    </div>
</section>