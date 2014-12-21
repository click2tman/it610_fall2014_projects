<?php
/**
 * The default template for displaying video post format content.
 *
 * @package WordPress
 * @subpackage Tetris WPExplorer Theme
 * @since Tetris 1.0
 */


if ( is_singular() ) {
	
	// Show Audio Player if the meta options aren't blank
	if( get_post_meta( get_the_ID(), 'wpex_post_audio_mp3', true ) ) { ?>
		<div id="single-post-audio-wrap">
			<?php echo do_shortcode( '[audio mp3="'. get_post_meta( get_the_ID(), 'wpex_post_audio_mp3', true ) .'"]' ); ?>
		</div><!-- /single-post-audio-wrap -->
	<?php } ?>

<?php } else { ?>

	<article <?php post_class('blog-entry clearfix'); ?>>  
		<?php
		// Show Featured Image
		if( has_post_thumbnail() ) {  ?>
			<div class="blog-entry-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id() ),  wpex_img( 'blog_entry_width' ), wpex_img( 'blog_entry_height' ), wpex_img( 'blog_entry_crop' ) ); ?>" alt="<?php echo the_title(); ?>" /></a>
			</div><!-- /blog-entry-thumbnail -->
		<?php } if( get_post_meta( get_the_ID(), 'wpex_post_audio_mp3', true ) ) { ?>
			<?php echo do_shortcode( '[audio mp3="'. get_post_meta( get_the_ID(), 'wpex_post_audio_mp3', true ) .'"]' ); ?>
		<?php } ?>

		<div class="entry-text clearfix">
			<header>
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			</header>
			<?php wpex_excerpt(); ?>
			<ul class="entry-meta">
				<li><strong>Posted on:</strong> <?php echo get_the_date(); ?></li>
				<li><strong>By:</strong> <?php the_author_posts_link(); ?></li>   
				<?php if(comments_open()) { ?><li class="comment-scroll"><strong>With:</strong> <?php comments_popup_link(__('0 Comments', 'wpex'), __('1 Comment', 'wpex'), __('% Comments', 'wpex'), 'comments-link' ); ?></li><?php } ?>
			</ul><!-- /entry-meta -->
		</div><!-- /entry-text -->
	</article><!-- /blog-entry -->

<?php } ?>