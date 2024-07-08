<?php
/**
 * Template Name: Profile Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/profile/intro' );
			get_template_part( 'template-parts/pages/profile/info', 'bar' );
			get_template_part( 'template-parts/pages/profile/milestones' );
			get_template_part( 'template-parts/pages/profile/links' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
