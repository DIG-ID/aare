<?php
/**
 * Template Name: Home Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/home/hero' );
			get_template_part( 'template-parts/pages/home/intro' );
			get_template_part( 'template-parts/pages/home/rooms-tabs' );
			get_template_part( 'template-parts/pages/home/contact' );
			get_template_part( 'template-parts/pages/home/services' );
			$showOffers = get_field('show_offers');
			if( $showOffers ):
				get_template_part( 'template-parts/pages/home/offers' );
			endif;
			get_template_part( 'template-parts/pages/home/about' );
			get_template_part( 'template-parts/pages/home/location' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
