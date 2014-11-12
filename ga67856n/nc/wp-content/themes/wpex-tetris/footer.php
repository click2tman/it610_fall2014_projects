<?php
/**
 * Footer.php outputs the code for your footer widgets, contains your footer hook and closing body/html tags
 * @package Tetris WordPress Theme
 * @since 1.0
 * @author AJ Clarke : http://wpexplorer.com
 * @copyright Copyright (c) 2012, AJ Clarke
 * @link http://wpexplorer.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
?>
<div class="clear"></div><!-- /clear any floats -->
</div><!-- /main-content -->
</div><!-- /wrap -->

<footer id="footer">
	<div id="wrap">
	</div><!-- /wrap -->
</footer><!-- /footer -->

<?php if ( get_theme_mod( 'wpex_copyright', '1' ) ) { ?>
	<div id="copyright">

	<div class="social">
	<div class="fb-like" data-href="https://www.facebook.com/thenaivecreative" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
	<a href="bah" class="facebook1"></a>
	<a href="bah" class="twitter1"></a>
	<a href="bah" class="instagram1"></a>
	</div>

<?php echo get_theme_mod('wpex_copyright', 'Powered by <a href=\"http://www.wordpress.org\" title="WordPress" target="_blank">WordPress</a> and <a href=\"http://themeforest.net/user/WPExplorer?ref=WPExplorer" target="_blank" title="WPExplorer" rel="nofollow">WPExplorer Themes</a>') ?>
		<div class="smile"></div>

<div class="preloader">
<img src="wp-content/themes/wpex-tetris/images/facebook2.png">
<img src="wp-content/themes/wpex-tetris/images/twitter2.png">
<img src="wp-content/themes/wpex-tetris/images/instagram2.png">
<img src="wp-content/themes/wpex-tetris/images/naive2.png">
<img src="wp-content/themes/wpex-tetris/images/search2.png">
<img src="wp-content/themes/wpex-tetris/images/more2.png">
</div>

	</div>
	<?php } ?>
<?php wp_footer(); // Footer hook, do not delete, ever ?>
</body>
</html>