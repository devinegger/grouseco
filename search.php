<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package grouseco
 */

get_header(); ?>

	<section id="primary" class="content-area">
    <?php
    if ( have_posts() ) : ?>

        <header class="page-head">
            <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'grouseco' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header><!-- .page-head -->
        <main id="main" class="site-main" role="main">
            <div class="container">
                <div class="row">
                    <div class="nine columns">

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();

                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', 'search' );

                        endwhile;

                        the_posts_navigation();

                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif; ?>
                    </div>
                    <div class="three columns">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
