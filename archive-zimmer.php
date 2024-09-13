<?php
get_header();
do_action( 'before_main_content' );
get_template_part( 'template-parts/archives/zimmer/header' );
get_template_part( 'template-parts/archives/zimmer/content' );
get_template_part( 'template-parts/archives/zimmer/informations' );
do_action( 'after_main_content' );
get_footer();
