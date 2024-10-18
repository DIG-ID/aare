<?php
/**
 * Template Name: History & Architects Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/page-header' );
			get_template_part( 'template-parts/pages/history-architects/history-hospital' );
			get_template_part( 'template-parts/pages/history-architects/history-hospital-mobile' );
			get_template_part( 'template-parts/pages/history-architects/history-building' );
			get_template_part( 'template-parts/pages/history-architects/history-building-mobile' );
			get_template_part( 'template-parts/pages/history-architects/architecture' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
