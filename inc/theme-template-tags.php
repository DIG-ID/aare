<?php

/**
 * This function open the main content.
 */
function theme_before_main_content() {
	?>
	<main id="main-content" class="main-content overflow-hidden mt-auto">
	<?php
}

add_action( 'before_main_content', 'theme_before_main_content' );

/**
 * This function closes the main content.
 */
function theme_after_main_content() {
	?>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'theme_after_main_content' );

/**
 * This function open the post content.
 */
function theme_before_post_content() {
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
}

add_action( 'before_post_content', 'theme_before_post_content' );

/**
 * This function closes the post content.
 */
function theme_after_post_content() {
	?>
	</article><!-- #article -->
	<?php
}

add_action( 'after_post_content', 'theme_after_post_content' );


/**
 * This theme logo.
 */
function theme_logo() {
	?>

	<?php
}

add_action( 'theme_logo', 'theme_logo' );

/**
 * This theme logo for mobile.
 */
function theme_logo_mobile() {
	?>
	
	<?php
}

add_action( 'theme_logo_mobile', 'theme_logo_mobile' );

/**
 * Implement and customize Yoast Breadcrumbs.
 */
function st_theme_breadcrumbs() {
	if ( function_exists( 'yoast_breadcrumb' ) ) :
		yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
	endif;
}

add_action( 'breadcrumbs', 'st_theme_breadcrumbs' );
