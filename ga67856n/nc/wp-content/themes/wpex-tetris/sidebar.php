<?php
/**
 * Your site Sidebar
 *
 * @package WordPress
 * @subpackage Tetris WPExplorer Theme
 * @since Tetris 1.0
 */ 
?>

<aside id="sidebar">
	<div <?php post_class('sideb'); ?>>
	<ul class="meta clearfix">
				<li class="grey">by <?php the_author_posts_link(); ?> </li>
				<li class="date"> on <?php the_date(); ?></li>
				<li><div class="share">Share</div></li>
				<div class="cat"><?php the_category('');?></div>
	</ul>
		<div class="meta border share1">
			<?php dynamic_sidebar('sidebar'); ?>
		</div>
		<?php dynamic_sidebar('footer-one'); ?>
	</div>

</aside><!-- /sidebar -->