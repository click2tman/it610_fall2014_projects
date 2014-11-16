<?php
/**
 * The default template for displaying standard post format content.
 *
 * @package WordPress
 * @subpackage Tetris WPExplorer Theme
 * @since Tetris 1.0
 */

if ( is_singular() ) { ?>

<?php } else { ?>
	<article <?php post_class('blog-entry clearfix'); ?>>
		<?php if( has_post_thumbnail() ) { ?>
			<div class="blog-entry-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id(), 'full' ),  wpex_img( 'blog_entry_width' ), wpex_img( 'blog_entry_height' ), wpex_img( 'blog_entry_crop' ) ); ?>" alt="<?php echo the_title(); ?>" /></a>
			</div><!-- /blog-entry-thumbnail -->
		<?php } ?>
		<div class="entry-text clearfix">
			<header class="title">
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			</header>
			
			<!--<?php wpex_excerpt(); ?>-->
			<ul class="entry-meta">
				<li>by <?php the_author_posts_link(); ?><div class="cat"><?php the_category('');?></div></li>
			</ul><!-- /entry-meta -->

		</div><!-- /entry-text -->
	</article><!-- /blog-entry -->
<?php } ?>