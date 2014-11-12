<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Tetris WPExplorer Theme
 * @since Tetris 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( get_theme_mod('wpex_custom_favicon') ) { ?>
		<link rel="shortcut icon" href="<?php echo get_theme_mod('wpex_custom_favicon'); ?>" />
	<?php } ?>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<script type="text/javascript">
	NProgress.start();
	NProgress.done();
	</script>

	<?php wp_head(); ?>
</head>

<!-- Begin Body -->
<body <?php body_class(); ?>>
	
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=1517536591795390&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div id="header-wrap">
		<div id="more">
			<div id="wrap">
				<div id="footer-widgets" class="clearfix">
					<div class="footer-box wide">
						<?php dynamic_sidebar('more-one'); ?>
					</div><!-- /box -->
					<div class="footer-box remove-margin">
						<?php dynamic_sidebar('more-two'); ?>
					</div><!-- /box -->
				</div><!-- /widgets -->
			</div>
		</div><!-- /more -->

		<form role="search" method="get" id="searchform" class="searchform" action="<?php esc_url( home_url( '/' )); ?>">
			<div class="searchbox" id="wrap">
				<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
				<input type="text" value="<?php get_search_query(); ?>" name="s" id="s" placeholder="Search..." />
			</div>
		</form>

		<header id="header" class="clearfix">
			
		<div id="wrap">
			<nav id="navigation" class="hide clearfix navigation_right">
				<?php wp_nav_menu( array(
					'theme_location'	=> 'right_menu',
					'sort_column'		=> 'menu_order',
					'menu_class'		=> 'sf-menu',
					'fallback_cb'		=> false
				)); ?>
			</nav><!-- /navigation -->

			<nav class="navigation_right show">
			<div class="search1 mobile"></div>
			<div id="toggle"></div>
			</nav><!-- /navigation -->

			<nav id="navigation" class="hide">
				<?php wp_nav_menu( array(
					'theme_location'	=> 'main_menu',
					'sort_column'		=> 'menu_order',
					'menu_class'		=> 'sf-menu',
					'fallback_cb'		=> false
				)); ?>
			</nav><!-- /navigation -->

			<div id="logo">
				<?php
				// Show custom image logo if defined in the admin
				if( get_theme_mod('wpex_logo') ) { ?>
					<a href="<?php echo home_url(); ?>/" title="" rel="home" ><img src="<?php echo get_theme_mod('wpex_logo'); ?>" id="logoimg" alt="<?php echo get_bloginfo( 'name' ) ?>" /></a>
				<?php }
				// No custom img logo - show text logo
					else { ?>
					<h2><a href="<?php echo home_url(); ?>/" title="<?php echo get_bloginfo( 'name' ); ?>" rel="home"><?php echo get_bloginfo( 'name' ); ?></a></h2>
				<?php } ?>
			</div><!-- /logo -->
			</div><!-- /wrap -->

		</header><!-- /header -->

		<nav id="navigation" class="clearfix off">
				<?php wp_nav_menu( array(
					'theme_location'	=> 'responsive_menu',
					'sort_column'		=> 'menu_order',
					'menu_class'		=> 'sf-menu',
					'fallback_cb'		=> false
				)); ?>
		</nav><!-- /navigation -->

	</div><!-- /header-wrap -->

<div id="main-content" class="clearfix">