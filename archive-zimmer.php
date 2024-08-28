<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/archives/archives-header' );
			get_template_part( 'template-parts/archives/zimmer/content' );
			get_template_part( 'template-parts/archives/zimmer/informations' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
