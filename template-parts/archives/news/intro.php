<section class="section-intro bg-dark-blue pt-40 md:pt-60 pb-20 xl:pt-[275px] xl:pb-48">
	<div class="st-grid">
        <div class="st-container st-container-grid !gap-y-0">
            <div class="col-span-2 md:col-span-6 xl:col-span-10 mb-3"><?php do_action( 'breadcrumbs' ); ?></div>
            <div class="col-span-2 md:col-span-4 xl:col-span-2">
                <h1 class="st-title text-blue"><?php echo get_field( 'news_title', 'option' );  ?></h1>
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-3 hidden xl:block">
                <p class="st-body-dates text-light-blue"><?php echo get_field( 'news_intro', 'option' );  ?></p>
            </div>
        </div>
    </div>
</section>