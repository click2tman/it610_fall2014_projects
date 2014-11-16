<?php

get_header(); // Loads the header.php template

if (have_posts()) : ?>

<div id="wrap">

	<?php $post = $posts[0]; $c=0;?>
	<?php while (have_posts()) : the_post();
	?>
	<?php $c++;
if( !$paged && $c == 1) :?>

<div <?php post_class('blog-entry hero'); ?>>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<?php
// Show featured image
if( has_post_thumbnail( get_the_ID() ) ) {
	$wpex_header_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full-size');
	echo '<div id="page-featured-img" style="background-image:url('. $wpex_header_img[0] .')">'; } ?>
</div></a>

<?php
		if( 'quote' != get_post_format() ) { ?>
			
			<header id="post-header">
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<?php the_title(); ?></a></h1>
				<h4>
				<ul class="entry-meta">
					<li>by <?php the_author_posts_link(); ?><div class="cat"><?php the_category('');?> </div></li>
				</ul><!-- /entry-meta -->
				</h4>
			</header><!-- /post-header -->
			
		<?php } ?>

</div>
</div>

<div id="wrap">
<div id="blog-wrap" class="blog-isotope clearfix">

<?php else :?>
<?php get_template_part( 'content', get_post_format() ); ?>
<?php endif;?>

<?php endwhile; ?>

</div><!-- /post -->
</div>

<?php
wpex_pagination(); // Paginate your posts
endif;
get_footer(); //get template footer ?>