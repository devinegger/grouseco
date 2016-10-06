<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package grouseco
 */

get_header(); ?>

	<div id="primary" class="content-area">
	    <div class="page-head">
	        <span class="single-head">News</span>
	    </div>
		<main id="main" class="site-main" role="main">
		    <div class="container">
                <div class="row">
                    <div class="nine columns">
                        <?php
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', 'single');

                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                                
                                the_post_navigation( array(
                                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next  ->', 'grouseco' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . __( 'Next post:', 'grouseco' ) . '</span> ' .
                                        '<span class="post-title">%title</span>',
                                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '<- Previous', 'grouseco' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . __( 'Previous post:', 'grouseco' ) . '</span> ' .
                                        '<span class="post-title">%title</span>',
                                ) );

                            endwhile; // End of the loop.
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
