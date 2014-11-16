<?php
/**
 * Array of social links
 *
 * @package WordPress
 * @subpackage Tetris WPExplorer Theme
 * @since Tetris 1.0
 */


if ( ! function_exists( 'wpex_social_links' ) ) {
	function wpex_social_links() {
		$social_icons = array(
			'addThis' => 'addThis',
			'behance' => 'behance',
			'blogger' => 'blogger',
			'delicious' => 'delicious',
			'deviantart' => 'deviantart',
			'digg' => 'digg',
			'dopplr' => 'dopplr',
			'dribbble' => 'dribbble',
			'evernote' => 'evernote',
			'facebook' => 'facebook',
			'flickr' => 'flickr',
			'forrst' => 'forrst',
			'gitHub' => 'gitHub',
			'google' => 'google',
			'grooveshark' => 'grooveshark',
			'instagram' => 'instagram',
			'lastfm' => 'lastfm',
			'linkedin' => 'linkedin',
			'myspace' => 'myspace',
			'pinterest' => 'pinterest',
			'paypal' => 'paypal',
			'picasa' => 'picasa',
			'pinterest' => 'pinterest',
			'posterous' => 'posterous',
			'reddit' => 'reddit',
			'sharethis' => 'sharethis',
			'skype' => 'skype',
			'soundcloud' => 'soundcloud',
			'spotify' => 'spotify',
			'stumbleupon' => 'stumbleupon',
			'tumblr' => 'tumblr',
			'twitter' => 'twitter',
			'viddler' => 'viddler',
			'vimeo' => 'vimeo',
			'virb' => 'virb',
			'windows' => 'windows',
			'wordPress' => 'wordPress',
			'youtube' => 'youtube',
			'zerply' => 'zerply',
			'rss' => 'rss',
			'mail' => 'mail'
		);
		return apply_filters('wpex_social_links', $social_icons);
	}
}


if ( ! function_exists( 'wpex_display_social' ) ) {
	function wpex_display_social() {
		if ( '1' != get_theme_mod( 'wpex_header_aside', '1' ) ) return;
		$wpex_social_links = wpex_social_links();
		foreach( $wpex_social_links as $wpex_social_link ) {
			if( get_theme_mod( 'wpex_social_'. $wpex_social_link ) ) {
				echo '<li><a href="'. get_theme_mod( 'wpex_social_'. $wpex_social_link ) .'" title="'. $wpex_social_link .'" target="_blank"><img src="'. get_template_directory_uri() .'/images/social/'.$wpex_social_link.'.png" alt="'. $wpex_social_link .'" /></a></li>';
		} }
	}
}