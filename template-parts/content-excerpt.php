<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grouseco
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( has_post_thumbnail() ) { ?>
            <figure class="featured-image-small">
                <?php the_post_thumbnail( 'grouseco-small-thumb' ); ?>
            </figure>
        <?php } ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
	
	<?php if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta">
            <?php grouseco_posted_on(); ?>
        </div><!-- .entry-meta -->
    <?php endif; ?>

	<footer class="entry-footer">
		<?php grouseco_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<hr/>