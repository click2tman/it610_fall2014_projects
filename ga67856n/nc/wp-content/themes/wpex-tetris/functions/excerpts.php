<?php
/**
 * This file is used for all excerpt related functions
 *
 * @package WordPress
 * @subpackage Tetris WPExplorer Theme
 * @since Tetris 2.2
*/


/**
 * Custom excerpts based on wp_trim_words
 * Created for child-theming purposes
 * 
 * Learn more at http://codex.wordpress.org/Function_Reference/wp_trim_words
*/
if ( !function_exists( 'wpex_excerpt' ) ) {
	function wpex_excerpt( $length = '20', $readmore = false ) {
		global $post;
		$id = $post->ID;
		$length = apply_filters( 'wpex_excerpt_length', $length );
		if ( has_excerpt( $id ) ) {
			$output = $post->post_excerpt;
		} else {
			$output = wp_trim_words( strip_shortcodes( get_the_content( $id ) ), $length);
			if ( $readmore == true ) {
				$readmore_link = '<span class="wpex-readmore"><a href="'. get_permalink( $id ) .'" title="'. __('continue reading', 'wpex' ) .'" rel="bookmark">'. __('Read more', 'wpex' ) .' &rarr;</a></span>';
				$output .= apply_filters( 'wpex_readmore_link', $readmore_link );
			}
		}
		echo $output;
	}
}