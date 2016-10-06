<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grouseco
 */

get_header(); ?>

	<div id="primary" class="content-area">
	    <div class="page-head">
	        <h1>News</h1>
	    </div>
		<main id="main" class="site-main" role="main">
		    <div class="container">
                <div class="row">
                    <div class="nine columns">
                        <?php
                            while ( have_posts() ) : the_post();
                                
                                // only show exceprt
                                get_template_part( 'template-parts/content', 'excerpt');

                            endwhile; // End of the loop.
                            
                            the_posts_navigation();
                            ?>
                    </div>
                    <div class="three columns">
                        <?php get_sidebar(); ?>
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>
