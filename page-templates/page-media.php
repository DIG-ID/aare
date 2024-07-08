<?php
/**
 * Template Name: Media Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/media/header' );
			get_template_part( 'template-parts/pages/media/photos' );
			get_template_part( 'template-parts/pages/media/videos' );
			get_template_part( 'template-parts/pages/media/toolkit' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
