<?php
/**
 * This file loads custom css and js for our theme
 *
 * @package WordPress
 * @subpackage Tetris WPExplorer Theme
 * @since Tetris 1.0
*/


add_action('wp_enqueue_scripts','wpex_load_scripts');

if ( ! function_exists( 'wpex_load_scripts' ) ) {
	
	function wpex_load_scripts() {
		
		
		/*******
		*** CSS
		*******************/
		
		// Main
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		
		// Responsive
		wp_enqueue_style( 'wpex-responsive', WPEX_CSS_DIR . '/responsive.css' );
		
		// Google Fonts
		wp_enqueue_style( 'roboto', 'http://fonts.googleapis.com/css?family=Roboto:400,100,300,700', 'style' );

		/*******
		*** jQuery
		*******************/
		
		// Core
		wp_enqueue_script( 'wpex-plugins', WPEX_JS_DIR .'/plugins.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'wpex-global', WPEX_JS_DIR .'/global.js', array( 'jquery', 'wpex-plugins' ), '1.0', true );
		$nav_params = array(
			'menuText' => __('Menu','wpex'),
		);
		wp_localize_script( 'wpex-global', 'globalLocalize', $nav_params );

		// Comment replies
		if(is_single() || is_page()) {
			wp_enqueue_script('comment-reply');
		}

		
	} //end wpex_load_scripts()

}