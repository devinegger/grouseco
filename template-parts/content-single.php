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
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php if ( has_post_thumbnail() ) { ?>
            <figure class="featured-image">
                <?php the_post_thumbnail(); ?>
            </figure>
        <?php } ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'grouseco' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
    <div class="entry-meta">
        <?php grouseco_posted_on(); ?>
    </div><!-- .entry-meta -->
    <!-- insert Jetpack sharing icons -->
    <?php
        if ( function_exists( 'sharing_display' ) ) {
            sharing_display( '', true );
        }
 
        if ( class_exists( 'Jetpack_Likes' ) ) {
            $custom_likes = new Jetpack_Likes;
            echo $custom_likes->post_likes( '' );
        }
    ?>
	<footer class="entry-footer">
		<?php grouseco_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->