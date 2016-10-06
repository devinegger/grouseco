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
	        <h1>Contact</h1>
	    </div>
	    <img src="<?php echo get_bloginfo('template_directory');?>/images/flying-grouse-fade.jpg" style="position: absolute; width: 100%;" />
		<main id="main" class="site-main" role="main">
            <div id="contact" class="container">
                <h3>HOMEBREWERS!</h3>
				<p>Visit the <a href="http://www.glutenfreehomebrewing.org/STORECategory/117/Malted-Grains.html" target="_blank">Gluten-Free Home Brewer</a> online store for all your Grouse Malt needs!</p>
				<div class="divider" style="margin: 3em 0;"></div>
				<h3>Commercial Brewers</h3>
                <p>Interested in working with these naturally gluten-free artisan malts?
                <br/><br/>Just fill out the fields below and we'll be in touch.</p>
                <div class="form" id="contactForm">
                    <?php  if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 'contact' ); } ?>
                </div>
                <p>Mailing address:
                <br/>PO Box 203, Wellington, CO 80549</p>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>
