<?php
/**
 * Theme functions and definitions.
 *
 * Sets up the theme and provides some helper functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Tetris WPExplorer Theme
 * @since Tetris 1.0
 */

// Define Constants
define( 'WPEX_JS_DIR', get_template_directory_uri().'/js' );
define( 'WPEX_CSS_DIR', get_template_directory_uri().'/css' );

//default width of primary content area
$content_width = 970;

// Theme options - customizer
require_once( get_template_directory() .'/functions/social-links.php' );
require_once( get_template_directory() .'/functions/theme-customizer.php' );

// Includes
require_once( get_template_directory() .'/functions/scripts.php' );
require_once( get_template_directory() .'/functions/widget-areas.php' );
require_once( get_template_directory() .'/functions/widget-social.php' );
if( is_admin() ) {
	require_once ( get_template_directory() .'/functions/recommend-plugins.php' );
	require_once( get_template_directory() .'/functions/meta/usage.php' );
	require_once( get_template_directory() .'/functions/welcome.php' );
	require_once( get_template_directory() .'/functions/dashboard-feed.php' );
	require_once( get_template_directory() .'/functions/meta/gallery-metabox/gmb-admin.php' );
} else {
	require_once( get_template_directory() .'/functions/excerpts.php' );
	require_once( get_template_directory() .'/functions/pagination.php' );
	require_once( get_template_directory() .'/functions/aqua-resizer.php' );
	require_once( get_template_directory() .'/functions/img-defaults.php' );
	require_once( get_template_directory() .'/functions/wpex-comments-output.php' );
	require_once( get_template_directory() .'/functions/meta/gallery-metabox/gmb-display.php' );
}

// Theme Setup
function wpex_setup() {
	
	//theme support
	add_theme_support('automatic-feed-links');
	add_theme_support('custom-background');
	add_theme_support('post-thumbnails');
	
	// Menu
	register_nav_menus (
		array (
			'main_menu'	=> __( 'Main', 'wpex' ),
			'right_menu'	=> __( 'Right Menu', 'wpex' ),
			'responsive_menu'	=> __( 'Responsive Menu', 'wpex' ),
		)
	);

	// Add Post Formats Support
	add_theme_support( 'post-formats', array( 'video', 'quote', 'link', 'audio', 'image', 'gallery' ) );

	//Localization support
	load_theme_textdomain( 'wpex', get_template_directory() .'/languages' );

}
add_action( 'after_setup_theme', 'wpex_setup' );


// Replace Soliloquy affilate
add_filter( 'tgmsp_affiliate_url', 'wpex_affiliate_url' );
function wpex_affiliate_url() {
	return 'http://www.wpexplorer.com/soliloquy-wordpress-plugin';
}

// Change default read more style
if ( !function_exists( 'wpex_new_excerpt_more' ) ) :
	function wpex_new_excerpt_more($more) {
		global $post;
		return '...';
	}
	add_filter('excerpt_more', 'wpex_new_excerpt_more');
endif;


// Add home page option to WordPress Menu
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );
function home_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}

function add_login_logout_link( $items, $args  ) {
	if( $args->theme_location == 'right_menu' ) {
	        $loginoutlink = wp_loginout('index.php', false);
	        $items .= '<li">'. $loginoutlink .'</li>';
			return $items;
	    }
	    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_login_logout_link', 10, 2 );
