<?php
/**
 * Setup theme
 */
function aare_theme_setup() {

	register_nav_menus(
		array(
			'main-menu'        => __( 'Main Menu', 'aare' ),
			'secondary-menu'   => __( 'Secondary Menu', 'aare' ),
			'copyright-menu'   => __( 'Copyright Menu', 'aare' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

}

add_action( 'after_setup_theme', 'aare_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function aare_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

	register_sidebar(
		array(
			'name'          => 'Header Language Switcher',
			'id'            => 'header_ls',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

}

add_action( 'widgets_init', 'aare_theme_footer_widgets_init' );

if ( ! function_exists( 'aare_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions dig_theme_enqueue_styles() and twentytwentytwo_editor_styles() above.
	 */
	function aare_get_font_face_styles() {

		return "
			@import url('https://p.typekit.net/p.css?s=1&k=wel7pmx&ht=tk&f=29432.29434.29435.29436&a=100534906&app=typekit&e=css');

			@font-face {
				font-family: 'miller-headline';
				src:
					url('https://use.typekit.net/af/d2cbde/00000000000000007736b593/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3') format('woff2'),url('https://use.typekit.net/af/d2cbde/00000000000000007736b593/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3') format('woff'),
					url('https://use.typekit.net/af/d2cbde/00000000000000007736b593/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3') format('opentype');
				font-display: auto;
				font-style: italic;
				font-weight: 400;
				font-stretch: normal;
			}

			@font-face {
				font-family: 'miller-headline';
				src:
					url('https://use.typekit.net/af/d41f24/00000000000000007736b58d/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('woff2'),url('https://use.typekit.net/af/d41f24/00000000000000007736b58d/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('woff'),
					url('https://use.typekit.net/af/d41f24/00000000000000007736b58d/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('opentype');
				font-display: auto;
				font-style: normal;
				font-weight: 700;
				font-stretch: normal;
			}

			@font-face {
				font-family: 'miller-headline';
				src:
					url('https://use.typekit.net/af/fffcc2/00000000000000007736b58e/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('woff2'),
					url('https://use.typekit.net/af/fffcc2/00000000000000007736b58e/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('woff'),url('https://use.typekit.net/af/fffcc2/00000000000000007736b58e/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('opentype');
				font-display: auto;
				font-style: normal;
				font-weight: 400;
				font-stretch: normal;
			}

			@font-face {
				font-family:'miller-headline';
				src:
					url('https://use.typekit.net/af/ea9a3c/00000000000000007736b594/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3') format('woff2'),url('https://use.typekit.net/af/ea9a3c/00000000000000007736b594/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3') format('woff'),
					url('https://use.typekit.net/af/ea9a3c/00000000000000007736b594/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3') format('opentype');
				font-display: auto;
				font-style: normal;
				font-weight: 300;
				font-stretch: normal;
			}
		
			@font-face {
				font-family: 'Poppins';
				src:
						url('" . get_theme_file_uri( 'assets/fonts/poppins/Poppins-Regular.ttf' ) . "') format('truetype'),
						url('" . get_theme_file_uri( 'assets/fonts/poppins/Poppins-Regular.woff2' ) . "') format('woff2'),
						url('" . get_theme_file_uri( 'assets/fonts/poppins/Poppins-Regular.woff' ) . "') format('woff');
				font-weight: normal;
				font-style: normal;
				font-display: swap;
			}

			@font-face {
				font-family: 'Poppins';
				src:
						url('" . get_theme_file_uri( 'assets/fonts/poppins/Poppins-ExtraLight.ttf' ) . "') format('truetype'),
						url('" . get_theme_file_uri( 'assets/fonts/poppins/Poppins-ExtraLight.woff2' ) . "') format('woff2'),
						url('" . get_theme_file_uri( 'assets/fonts/poppins/Poppins-ExtraLight.woff' ) . "') format('woff');
				font-weight: 200;
				font-style: normal;
				font-display: swap;
			}

			@font-face {
				font-family: 'Poppins';
				src:
						url('" . get_theme_file_uri( 'assets/fonts/poppins/Poppins-SemiBold.ttf' ) . "') format('truetype'),
						url('" . get_theme_file_uri( 'assets/fonts/poppins/Poppins-SemiBold.woff2' ) . "') format('woff2'),
						url('" . get_theme_file_uri( 'assets/fonts/poppins/Poppins-SemiBold.woff' ) . "') format('woff');
				font-weight: 600;
				font-style: normal;
				font-display: swap;
			}

			@font-face {
				font-family: 'Poppins';
				src:
						url('" . get_theme_file_uri( 'assets/fonts/poppins/Poppins-Bold.ttf' ) . "') format('truetype'),
						url('" . get_theme_file_uri( 'assets/fonts/poppins/Poppins-Bold.woff2' ) . "') format('woff2'),
						url('" . get_theme_file_uri( 'assets/fonts/poppins/Poppins-Bold.woff' ) . "') format('woff');
				font-weight: bold;
				font-style: normal;
				font-display: swap;
			}

		";

	}

endif;

if ( ! function_exists( 'aare_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 */
	function aare_preload_webfonts() {
		?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="preconnect" href="use.typekit.net" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'aare_preload_webfonts' );

/**
 * Enqueue styles and scripts
 */
function aare_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	// Register Theme main style.
	wp_register_style( 'theme-styles', get_template_directory_uri() . '/dist/css/main.css', array(), $theme_version );
	// Add styles inline.
	wp_add_inline_style( 'theme-styles', aare_get_font_face_styles() );
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'theme-styles' );
	//https://use.typekit.net/evg0ous.css first loaded fonts library backup
	//wp_enqueue_style( 'theme-fonts', 'https://use.typekit.net/buy6qwo.css', array(), $theme_version );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/js/main.js', array( 'jquery' ), $theme_version, false );
	
}

add_action( 'wp_enqueue_scripts', 'aare_theme_enqueue_styles' );

/**
 * Remove <p> Tag From Contact Form 7.
 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * Lowers the metabox priority to 'core' for Yoast SEO's metabox.
 *
 * @param string $priority The current priority.
 *
 * @return string $priority The potentially altered priority.
 */
function aare_theme_lower_yoast_metabox_priority( $priority ) {
	return 'core';
}

add_filter( 'wpseo_metabox_prio', 'aare_theme_lower_yoast_metabox_priority' );


// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// The theme admin settings.
require get_template_directory() . '/inc/theme-admin-settings.php';

// The theme custom menu walker settings.
require get_template_directory() . '/inc/theme-custom-menu-walker.php';
