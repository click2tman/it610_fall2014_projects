<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 * This file contains the styling for blog post entries.
 */

//start loop
while (have_posts()) : the_post(); ?>

<article <?php post_class('search-entry clearfix'); ?>>
	<?php if( has_post_thumbnail() ) { ?>
		<div class="search-entry-image">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo aq_resize( wp_get_attachment_url(get_post_thumbnail_id() ), 100, 80, true ); ?>" alt="<?php echo the_title(); ?>" /></a>
		</div><!-- /search-entry-image -->
		<div class="search-entry-text">
	<?php } //featured image not set ?>
		<header>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		</header>
			<?php wpex_excerpt(); ?>
		<?php if( has_post_thumbnail()  ) { ?>
		</div><!-- /search-entry-text -->
		<?php } //featured image not set ?>
</article><!-- /entry -->
<?php
//end loop
endwhile; ?>