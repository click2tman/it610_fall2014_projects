<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Tetris WPExplorer Theme
 * @since Tetris 1.0
 */

get_header(); // Loads the header.php template

if ( have_posts()) : while ( have_posts()) : the_post(); ?>

<div id="wrap" class="clearfix">
			<header id="post-header">
				
<?php
// Display media
if( 'quote' != get_post_format() ) {
	get_template_part( 'content', get_post_format() ); 
} ?>

				<h1><?php the_title(); ?></h1>
				<?php get_sidebar(); ?>
				</div>
			</header><!-- /post-header -->
</div>

<div id="wrap" <?php post_class('clearfix'); ?>>
<div id="single-post-content" class="container clearfix">

	<div id="post" class="clearfix">
		<!-- Entry Content Start -->
		<article <?php post_class('entry clearfix fitvids'); ?>>
			<div class="inner-post">
				<?php the_content(); // This is your main post content output ?>
				<?php if( get_post_format() == 'quote' ){ ?><div class="quote-author">&#8211; <?php the_title(); ?></div><?php } ?>
			</div><!-- /inner-post -->
		</article><!-- /entry -->
		<!-- Entry Content End -->
		<?php wp_link_pages(); // Paginate pages when <!- next --> is used ?>
		<?php comments_template(); ?>
	</div><!-- /post -->
	
	<?php
	//end post loop
	endwhile; endif;
	 ?>
	
</div><!--/container -->

</div>

<div id="wrap">
<div class="footerfull">
<?php wp_related_posts('')?>
</div>
</div>

<?php dynamic_sidebar('footer-full'); ?>

<?php get_footer(); ?>