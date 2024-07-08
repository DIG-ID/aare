<section class="section-intro bg-light-blue pt-40 md:pt-60 pb-20 xl:pt-[275px] xl:pb-48">
	<div class="st-grid">
        <div class="st-container st-container-grid !gap-y-0">
            <div class="col-span-2 md:col-span-6 xl:col-span-10 mb-3"><?php do_action( 'breadcrumbs' ); ?></div>
            <div class="col-span-2 md:col-span-4 xl:col-span-10 mb-9 md:mb-20 xl:mb-24">
                <p class="st-title text-dark-blue"><?php esc_html_e( 'Trefft mein Team', 'stricker' );  ?></p>
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-10">
                <p class="st-subtitle-big"><?php the_field( 'intro_text' );  ?></p>
            </div>
        </div>
    </div>
</section>