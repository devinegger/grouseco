<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grouseco
 */

get_header(); ?>

	<div id="grouseco" class="front-page-section">
		<div class="container">
            <p class="large yanone">GLUTEN-FREE MALT</p>
            <p class="yanone">CRAFTED WITH ANCIENT GRAINS</p>
            <p><strong>specifically designed for</strong></p>
            <p class="large yanone">GLUTEN-FREE BEER</p>
        </div>
	</div>
    <div class="divider"></div>
    <div id="philosophy" class="front-page-section">
        <div class="white-overlay">
            <h3>OUR PHILOSOPHY</h3>
            <p>All people deserve access to high quality food and beverage regardless of any allergy or intolerance. We promise uncompromising integrity through a network of tenacious individuals who share a vision of collaboration, transparency, and dedication to deliver artisan products that everyone is free to fully enjoy.</p>
        </div>
    </div>
    <div class="divider"></div>
    <div id="products" class="front-page-section">
        <div class="container">
            <h3>MILLET &bull; BUCKWHEAT &bull; OATS &bull; MAIZE &bull; QUINOA</h3>
            <p><strong>The Grouse Malt House is certified gluten-free.</strong></p>
            <p style="line-height: 30px;">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/certified.png" width="80" style="vertical-align: bottom; margin-right: 60px;"/>
                <a class="blocklink" href="<?php echo site_url();?>/products">Products</a>
            </p>
        </div>
    </div>
<?php
get_footer();
?>
