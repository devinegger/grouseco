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
	        <h1>Seeds</h1>
	    </div>
		<main id="main" class="site-main" role="main" style="text-align: center;">
                <div class="row">
                    <h3 style="letter-spacing: .2em; font-size: 3em;">BEER IS AGRICULTURE</h3>
                    <p>The plants we work with are commonly known as ancient grains, or heritage grains.
                    <br/>They are naturally gluten-free</p>
                    <div style="margin-left: 17%;">
                        <div class="two columns">
                            <div class="partner-info">
                                <img class="mobileMiddle" src="<?php echo get_bloginfo('template_directory');?>/images/millet-small.jpg" />
                                <h6>Millet</h6>
                            </div>
                        </div>
                        <div class="two columns">
                            <div class="partner-info">
                                <img class="mobileMiddle" src="<?php echo get_bloginfo('template_directory');?>/images/buckwheat-field.jpg" />
                                <h6>Buckwheat</h6>
                            </div>
                        </div>  
                        <div class="two columns">
                            <div class="partner-info">
                                <img class="mobileMiddle" src="<?php echo get_bloginfo('template_directory');?>/images/quinoa-field.jpg" />
                                <h6>Quinoa</h6>
                            </div>
                        </div>
                        <div class="two columns">
                            <div class="partner-info">
                                <img class="mobileMiddle" src="<?php echo get_bloginfo('template_directory');?>/images/oat-field.jpg" />
                                <h6>Oats</h6>
                            </div>
                        </div>
                        <div class="two columns">
                            <div class="partner-info">
                                <img class="mobileMiddle" src="<?php echo get_bloginfo('template_directory');?>/images/corn-field.jpg" />
                                <h6>Maize</h6>
                            </div>
                        </div>
                    </div>
                </div><!-- .row -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>
