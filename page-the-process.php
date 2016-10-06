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
	        <h1>The Process</h1>
	        <h5>MALTING BREAKS DOWN COMPLEX CARBOHYDRATES TO YIELD FERMENTABLE SUGARS</h5>
	    </div>
		<main id="main" class="site-main" role="main">
            <div class="container">
                <div style="text-align: center; margin-bottom: 20px;">
                    <h5>UNMALTED GRAINS DO NOT HAVE THE NECESSARY ENZYMES TO CONVERT STARCH TO SUGAR, ONLY MALTED GRAINS CAN BE MASHED IN THE TRADITIONAL WAY</h5>
                    <p>At Grouse we honor traditions while combining an artisan flair with modern techniques to provide unique and exceptional malt.</p>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="four columns">
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/steeping.jpg" style="margin-top: 7%;" />
                    </div>
                    <div class="eight columns">
                        <h3>STEEPING</h3>
                        <p>The first step in the malting process is steeping. Steeping starts with raw seed that has been sorted and cleaned, then transferred into a malt vessel. Next, we add water. Water is absorbed by the seed kernel and germination begins! Water is crucial to the malting process as it provides the medium for the biochemical reactions which take place inside the seed kernel.</p>
                        <p>For the steeping process raw seed is submerged and periodically drained, allowing the grain to rest and respiration to take place. The absorbed water activates the enzymatic process. This process in turn initiates growth of the sprout.</p>
                        <p>Steeping is complete when the seed has reached a sufficient moisture level to allow uniform breakdown of the starches and proteins. One visual indicator that the maltster uses to determine the completion of steeping is to count the percentage of kernels that show “chit”. Raw grain that has been properly steeped is referred to as “chitted”, the “chit” being the start of the rootlets that are now visibly emerging from the embryo of the kernel.</p>
                    </div>
                </div><!-- .row -->
                <div class="divider"></div>
                 <div class="row">
                    <div class="four columns">
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/buckwheat.png" style="margin-top: 7%;" />
                    </div>   
                    <div class="eight columns">
                        <h3>GERMINATING</h3>
                        <p>The chitted grain then moves onto the germination stage. Germination allows the seed kernel to continue undergoing modification. Modification refers to the break down of the protein and carbohydrates, and the resulting opening up of the seeds’ starch reserves, which result in fermentable sugars. Turning the grain periodically keeps the grain bed from becoming too warm and the rootlets from growing together.</p>
                    </div>
                </div><!-- .row -->
                <div class="divider"></div>
                <div class="row">
                    <div class="four columns">
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/kilning.jpg" style="margin-top: 7%;" />
                    </div>
                    <div class="eight columns">
                        <h3>KILNING</h3>
                        <p>Germination is halted by drying. If germination continued, the kernel would continue to grow and all of the starch reserves needed by the brewer would be used by the growing plant. In malting, this drying process is called kilning. Specialty malts are dried in a kiln at higher temperatures for longer periods of time, roasted, or both. Varying the moisture level and time and temperature of drying develops the flavor and color characteristics of each specialty malt.</p>
                        <p>The last, but certainly not least, step is to deculm the malt. Decluming refers to cleaning the seed and removing the rootlet. This is a necessary and important step because the rootlet would otherwise add a bitter flavor to the finished beer.</p>
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>
