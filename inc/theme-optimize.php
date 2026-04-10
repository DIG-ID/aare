<?php
/**
 * Performance & Security Optimizations
 *
 * Provides a collection of performance and security improvements
 * designed to work safely alongside WP Rocket and SG Security.
 * Each section documents its relationship with those plugins.
 *
 * @package    Aare
 * @subpackage Aare/inc
 * @since      1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// =============================================================================
// 1. REMOVE UNNECESSARY HEAD BLOAT
// =============================================================================

// Remove WordPress version from all output locations.
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );

// Remove RSD link (used by older XML-RPC clients such as Windows Live Writer).
remove_action( 'wp_head', 'rsd_link' );

// Remove Windows Live Writer manifest link.
remove_action( 'wp_head', 'wlwmanifest_link' );

// Remove canonical shortlink from <head>.
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

// Remove prev/next post links (rel="prev" / rel="next") from <head>.
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );

// Remove REST API discovery link from <head>.
remove_action( 'wp_head', 'rest_output_link_wp_head' );

// Remove oEmbed discovery links from <head>.
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

/**
 * Remove version query strings from enqueued CSS and JS URLs.
 *
 * Stripping ?ver= parameters improves cache hit rates on proxies and CDNs
 * that treat versioned and non-versioned URLs as separate resources.
 * WP Rocket performs the same optimisation — this acts as a safe fallback.
 *
 * @since 1.0.0
 *
 * @param string $src The source URL of the enqueued asset.
 * @return string The filtered URL without a ver= query argument.
 */
function aare_remove_version_query_strings( string $src ): string {
	if ( strpos( $src, 'ver=' ) !== false ) {
		$src = remove_query_arg( 'ver', $src );
	}

	return $src;
}
add_filter( 'style_loader_src', 'aare_remove_version_query_strings', 9999 );
add_filter( 'script_loader_src', 'aare_remove_version_query_strings', 9999 );


// =============================================================================
// 2. DISABLE EMOJIS
//
// WP Rocket provides a "Disable Emoji" toggle under Media settings.
// This function is skipped automatically when WP Rocket is active.
// =============================================================================

/**
 * Remove all WordPress emoji scripts, styles, and filters.
 *
 * Fires on the `init` hook. Bails early when WP Rocket is active
 * because Rocket's own emoji disable feature handles the same tasks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function aare_disable_wp_emojis(): void {
	if ( function_exists( 'rocket_get_constant' ) ) {
		return;
	}

	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'aare_disable_wp_emojis' );


// =============================================================================
// 3. DISABLE XML-RPC
//
// SG Security disables XML-RPC via its own mechanism.
// The filter below is registered only when SG Security is not active,
// providing a fallback if the plugin is ever removed.
// =============================================================================

if ( ! defined( 'SG_SECURITY_VERSION' ) ) {
	add_filter( 'xmlrpc_enabled', '__return_false' );
}


// =============================================================================
// 4. LIMIT POST REVISIONS & AUTOSAVE INTERVAL
//
// These constants are best defined in wp-config.php so they apply before
// WordPress fully boots. Uncomment here only if wp-config.php is not
// accessible or managed by a third party.
//
// define( 'WP_POST_REVISIONS', 5 );
// define( 'AUTOSAVE_INTERVAL', 300 ); // seconds
// =============================================================================


// =============================================================================
// 5. REMOVE UNUSED FRONTEND ASSETS
// =============================================================================

/**
 * Dequeue scripts and styles that are not required on the frontend.
 *
 * Runs late on `wp_enqueue_scripts` (priority 100) to ensure all plugins
 * and themes have already registered their assets before we remove them.
 *
 * Assets removed:
 * - wp-embed           : oEmbed consumer JS — remove if not embedding external WP posts.
 * - wp-block-library   : Gutenberg block styles — remove if blocks are not used in content.
 * - classic-theme-styles : Legacy stylesheet added by block themes.
 * - dashicons          : Icon font — only required in wp-admin or for logged-in users.
 *
 * @since 1.0.0
 *
 * @return void
 */
function aare_dequeue_unused_assets(): void {
	if ( is_admin() ) {
		return;
	}

	// oEmbed consumer script — safe to remove when not embedding external WP content.
	wp_dequeue_script( 'wp-embed' );

	// Block library styles — comment out these three lines if blocks are used in post content.
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'classic-theme-styles' );

	// Dashicons are only needed in wp-admin or for toolbar-dependent UI.
	if ( ! is_user_logged_in() ) {
		wp_dequeue_style( 'dashicons' );
	}
}
add_action( 'wp_enqueue_scripts', 'aare_dequeue_unused_assets', 100 );


// =============================================================================
// 6. HEARTBEAT API
//
// WP Rocket exposes a Heartbeat control panel under its settings.
// The functions below are skipped automatically when WP Rocket is active.
// =============================================================================

/**
 * Increase the Heartbeat API polling interval inside the post editor.
 *
 * Reduces unnecessary AJAX traffic during post editing sessions.
 * The default interval is 15–60 seconds; this raises it to 120 seconds.
 *
 * @since 1.0.0
 *
 * @param array<string, mixed> $settings Heartbeat settings array.
 * @return array<string, mixed> Modified settings with a longer interval.
 */
function aare_limit_heartbeat_interval( array $settings ): array {
	$settings['interval'] = 120;

	return $settings;
}

/**
 * Disable the Heartbeat API everywhere except the post editor.
 *
 * Fires on `init` at priority 1, before scripts are registered, so that
 * wp_deregister_script() reliably removes the heartbeat handle.
 * Bails early when WP Rocket is active.
 *
 * @since 1.0.0
 *
 * @global string $pagenow The filename of the current admin page.
 *
 * @return void
 */
function aare_control_heartbeat(): void {
	if ( function_exists( 'rocket_get_constant' ) ) {
		return;
	}

	global $pagenow;

	if ( 'post.php' !== $pagenow && 'post-new.php' !== $pagenow ) {
		wp_deregister_script( 'heartbeat' );
	} else {
		add_filter( 'heartbeat_settings', 'aare_limit_heartbeat_interval' );
	}
}
add_action( 'init', 'aare_control_heartbeat', 1 );


// =============================================================================
// 7. SECURITY HEADERS
//
// When SG Security is active it sends X-Frame-Options, X-Content-Type-Options,
// and Referrer-Policy automatically. In that case this function only adds
// the headers that SG Security does not cover:
//   - Permissions-Policy
//   - Removal of server-identifying headers (X-Powered-By, X-Generator)
//
// When SG Security is absent the full set of headers is applied.
// =============================================================================

/**
 * Send HTTP security headers on every front-end and admin request.
 *
 * Behaviour adapts based on whether SG Security is active:
 * - SG Security active  : adds Permissions-Policy and strips server headers only.
 * - SG Security absent  : sends the complete set of recommended security headers.
 *
 * HSTS is intentionally commented out. Enable only after verifying that the
 * site runs exclusively over HTTPS, including all sub-domains.
 *
 * @since 1.0.0
 *
 * @return void
 */
function aare_add_security_headers(): void {
	// Always strip headers that reveal server technology regardless of SG Security.
	header_remove( 'X-Powered-By' );
	header_remove( 'X-Generator' );

	if ( defined( 'SG_SECURITY_VERSION' ) ) {
		// SG Security handles X-Frame-Options, X-Content-Type-Options, Referrer-Policy.
		// Add only what it does not cover.
		header( 'Permissions-Policy: camera=(), microphone=(), geolocation=()' );
		return;
	}

	// Full header set when SG Security is not present.
	header( 'X-Frame-Options: SAMEORIGIN' );
	header( 'X-Content-Type-Options: nosniff' );
	header( 'Referrer-Policy: strict-origin-when-cross-origin' );
	header( 'Permissions-Policy: camera=(), microphone=(), geolocation=()' );

	// Uncomment only when the site is permanently on HTTPS across all sub-domains.
	// header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains' );
}
add_action( 'send_headers', 'aare_add_security_headers' );


// =============================================================================
// 8. DISABLE FILE EDITING IN WP-ADMIN
//
// Prevents the built-in theme and plugin file editors from being used,
// reducing the attack surface if an admin account is compromised.
// Prefer setting this constant in wp-config.php so it applies earlier
// in the WordPress boot process.
// =============================================================================

if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
	define( 'DISALLOW_FILE_EDIT', true );
}


// =============================================================================
// 9. TYPEKIT / ADOBE FONTS PRECONNECT
//
// WP Rocket automatically detects enqueued external stylesheets and adds
// the appropriate preconnect hints. This function is therefore skipped when
// WP Rocket is active and acts only as a fallback for environments without it.
// =============================================================================

/**
 * Output preconnect resource hints for Adobe Fonts (Typekit).
 *
 * Establishing early connections to use.typekit.net and p.typekit.net
 * reduces the DNS + TCP + TLS handshake cost when the font CSS and
 * the actual .woff2 files are requested shortly after.
 *
 * Skipped when WP Rocket is active — Rocket adds these hints automatically
 * by detecting the enqueued Typekit stylesheet.
 *
 * @since 1.0.0
 *
 * @return void
 */
function aare_preconnect_fonts(): void {
	if ( function_exists( 'rocket_get_constant' ) ) {
		return;
	}

	// phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped -- Static strings, no user input involved.
	echo '<link rel="preconnect" href="https://use.typekit.net" crossorigin>' . "\n";
	echo '<link rel="preconnect" href="https://p.typekit.net" crossorigin>' . "\n";
	// phpcs:enable WordPress.Security.EscapeOutput.OutputNotEscaped
}
add_action( 'wp_head', 'aare_preconnect_fonts', 1 );


// =============================================================================
// 10. OPTIMIZE ARCHIVE & SEARCH QUERIES
// =============================================================================

/**
 * Optionally optimise the main query on archive and search pages.
 *
 * Two common optimisations are provided but commented out by default:
 *
 * - posts_per_page : Caps the number of posts loaded per request.
 *   Adjust the value to match the design's grid or list size.
 *
 * - no_found_rows  : Skips the SQL COUNT(*) that powers WP_Query::$found_posts.
 *   Improves DB performance significantly on large tables, but breaks
 *   standard WP pagination — only enable when pagination is not needed.
 *
 * @since 1.0.0
 *
 * @param WP_Query $query The current WP_Query instance, passed by reference.
 * @return void
 */
function aare_optimize_archive_query( WP_Query $query ): void {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if ( $query->is_archive() || $query->is_search() ) {
		// Uncomment to limit posts per page on archive/search pages.
		// $query->set( 'posts_per_page', 12 );

		// Uncomment to skip total row count — breaks pagination if enabled.
		// $query->set( 'no_found_rows', true );
	}
}
add_action( 'pre_get_posts', 'aare_optimize_archive_query' );


// =============================================================================
// 11. HIDE LOGIN ERROR DETAILS
//
// WordPress default login errors reveal whether the username or password
// was wrong, which aids brute-force enumeration. This filter replaces the
// message with a generic string.
//
// SG Security may apply a similar filter. Having both active is harmless —
// WordPress uses the last registered filter return value, and both return
// the same generic message.
// =============================================================================

/**
 * Replace specific login error messages with a generic response.
 *
 * Prevents attackers from determining whether a submitted username exists
 * in the database by observing the difference between "unknown user" and
 * "incorrect password" error messages.
 *
 * @since 1.0.0
 *
 * @return string A generic, non-revealing error message.
 */
function aare_hide_login_errors(): string {
	return '<strong>' . esc_html__( 'Error:', 'aare' ) . '</strong> ' . esc_html__( 'Invalid credentials.', 'aare' );
}
add_filter( 'login_errors', 'aare_hide_login_errors' );


// =============================================================================
// 12. LAZY LOAD IFRAMES
//
// WP Rocket handles iframe lazy loading under Media > LazyLoad > iframes.
// This filter is skipped automatically when WP Rocket is active.
// =============================================================================

/**
 * Add the native loading="lazy" attribute to all iframes in post content.
 *
 * Uses the browser's native lazy loading API, supported by all modern
 * browsers. Skipped when WP Rocket is active because Rocket applies its
 * own lazy loading solution to iframes.
 *
 * @since 1.0.0
 *
 * @param string $content The post content HTML string.
 * @return string The content with loading="lazy" injected into iframe tags.
 */
function aare_lazy_load_iframes( string $content ): string {
	if ( function_exists( 'rocket_get_constant' ) ) {
		return $content;
	}

	return str_replace( '<iframe ', '<iframe loading="lazy" ', $content );
}
add_filter( 'the_content', 'aare_lazy_load_iframes' );


// =============================================================================
// 13. CACHE HEAVY CUSTOM QUERIES WITH TRANSIENTS
//
// Use the Transients API to store the result of expensive WP_Query calls.
// The cached value is reused until it expires or is manually invalidated.
// Uncomment and adapt the example below to your actual use case.
// =============================================================================

/*
 * Example: cache a featured posts query for 12 hours.
 *
 * function aare_get_featured_posts(): WP_Query {
 *     $cache_key = 'aare_featured_posts';
 *     $posts     = get_transient( $cache_key );
 *
 *     if ( false === $posts ) {
 *         $posts = new WP_Query(
 *             array(
 *                 'posts_per_page' => 6,
 *                 'meta_key'       => '_is_featured',
 *                 'meta_value'     => '1',
 *                 'no_found_rows'  => true,
 *             )
 *         );
 *         set_transient( $cache_key, $posts, 12 * HOUR_IN_SECONDS );
 *     }
 *
 *     return $posts;
 * }
 */


// =============================================================================
// 14. DEFER NON-CRITICAL SCRIPTS (WordPress 6.3+)
//
// Since WordPress 6.3 the fifth parameter of wp_enqueue_script() accepts
// an array, enabling declarative loading strategies without custom filters.
//
// Usage:
//
//   wp_enqueue_script(
//       'handle',
//       $src,
//       $deps,
//       $ver,
//       array(
//           'in_footer' => true,
//           'strategy'  => 'defer', // or 'async'
//       )
//   );
//
// Important: do NOT apply 'defer' or 'async' to scripts that execute
// immediately on parse (e.g. Lenis smooth scroll initialisation, GSAP
// ticker setup). Those scripts must run as soon as the parser reaches
// them — deferring causes a flash of unstyled or uninitialised content.
// =============================================================================


// =============================================================================
// 15. CLEAR WP ROCKET CACHE AFTER THEME UPDATE
// =============================================================================

/**
 * Purge the WP Rocket full-site cache when the active theme is updated.
 *
 * After a theme update the cached HTML pages may reference old asset
 * filenames or contain stale markup. Clearing the cache ensures visitors
 * receive fresh pages that reference the updated theme files.
 *
 * @since 1.0.0
 *
 * @param WP_Upgrader          $upgrader_object The upgrader instance (unused, required by hook).
 * @param array<string, mixed> $options         Bulk item update data including action and type.
 * @return void
 */
function aare_clear_rocket_cache_on_theme_update( WP_Upgrader $upgrader_object, array $options ): void { // phpcs:ignore Generic.CodeAnalysis.UnusedFunctionParameter.FoundBeforeLastUsed -- $upgrader_object required by hook signature.
	if (
		isset( $options['action'], $options['type'] ) &&
		'update' === $options['action'] &&
		'theme' === $options['type'] &&
		function_exists( 'rocket_clean_domain' )
	) {
		rocket_clean_domain();
	}
}
add_action( 'upgrader_process_complete', 'aare_clear_rocket_cache_on_theme_update', 10, 2 );
