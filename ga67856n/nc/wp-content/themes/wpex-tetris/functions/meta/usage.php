<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @license	http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'wpex_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function wpex_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'wpex_';

	// Posts
	$meta_boxes[] = array(
		'id'			=> 'wpex-post-meta',
		'title'			=> __( 'Post Settings', 'wpex' ),
		'pages'			=> array( 'post' ),
		'context'		=> 'normal',
		'priority'		=> 'high',
		'show_names'	=> true,
		'fields'		=> array(
			array(
				'name'	=> __('Link Format URL', 'wpex'),
				'id'	=> $prefix . 'post_url',
				'desc'	=> __('Enter the url for your link format URL.', 'wpex'),
				'std'	=> '',
				'type'	=> 'text',
			),
			array(
				'name'	=> __('Audio MP3', 'wpex'),
				'id'	=> $prefix . 'post_audio_mp3',
				'desc'	=> __('Enter the url for your mp3 audio file for your audio post format.', 'wpex'),
				'std'	=> '',
				'type'	=> 'text',
			),
			array(
				'name'	=> __('Video URL', 'wpex'),
				'id'	=> $prefix . 'post_video',
				'desc'	=>  __('Enter in a video URL that is compatible with WordPress\'s built-in oEmbed feature.', 'wpex') .' <a href="http://codex.wordpress.org/Embeds" target="_blank">'. __('Learn More', 'wpex'),
				'std'	=> '',
				'type'	=> 'text',
			),
		),
	);

	return $meta_boxes;
}

add_action( 'init', 'cmb_initializewpexmeta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initializewpexmeta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once( get_template_directory() .'/functions/meta/init.php' );

}