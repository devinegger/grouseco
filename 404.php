<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package grouseco
 */

get_header(); ?>

	<div id="primary" class="content-area">
        <section class="error-404 not-found">
            <header class="page-head">
                <h1 class="page-title"><?php esc_html_e( 'Page Not Found', 'grouseco' ); ?></h1>
            </header><!-- .page-head -->
            <main id="main" class="site-main" role="main">
                <div class="container">
                    <div class="row">
                        <div class="nine columns">
                            <div class="page-content">
                                <p><?php esc_html_e( 'It looks like nothing was found at this location.', 'grouseco' ); ?></p>
                            </div><!-- .page-content -->
                        </div>
                        <div class="three columns">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </main><!-- #main -->
        </section><!-- .error-404 -->
	</div><!-- #primary -->

<?php
get_footer();
