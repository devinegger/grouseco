<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grouseco
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php
		if ( have_posts() ) : ?>

			<div class="page-head">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</div><!-- .page-header -->
        <main id="main" class="site-main" role="main">
            <div class="container">
                <div class="row">
                    <div class="nine columns">
                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                        
                            // only show exceprt
                            get_template_part( 'template-parts/content', 'excerpt');

                        endwhile;

                        the_posts_navigation();

                        else :

                        get_template_part( 'template-parts/content', 'none' );

                        endif; ?>
                    </div>
                    <div class="three columns">
                        <?php get_sidebar(); ?>
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
