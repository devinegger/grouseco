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
	        <h1>The Crew</h1>
	    </div>
	    <img src="<?php echo get_bloginfo('template_directory');?>/images/ourcrew.jpg" style="position: absolute; width: 100%;" />
		<main id="main" class="site-main" role="main">
            <div id="crew" class="container">
                <div class="row">
                    <h2>The Minds Behind the Malt</h2>
                    <div class="four columns" style="padding-right: 2%;">
                        <h4>Twila</h4>
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/twila.jpg" />
                        <p>Founder and owner of Grouse Artisan Malt, Twila is Queen of the Malt. Her devotion and excitement is infectious; and with her masters degree in food science and food safety she not only appreciates the chemistry within the art but she welcomes it. A mother, a musician, and our favorite maltstress-- nothing beats the passion and innovation this gal radiates.</p>
                    </div>
                    <div class="four columns" style="padding-right: 2%;">
                        <h4>Jess</h4>
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/jess.jpg" />
                        <p>Our very own southern belle, Jess has a background in ecosystem sciences and a thirst for knowledge. She's a true supporter of the farm-to-fork and grain-to-glass lifestyle and when she's not malting and roasting at Grouse you'll find her with a beer and her two dogs in the veggie garden out back.</p>
                    </div>
                    <div class="four columns" style="padding-right: 2%;">
                        <h4>Alex</h4>
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/alex.jpg" />
                        <p>With a focus on community outreach Alex handles our internal projects and strategic growth. She has a degree in marketing but it’s her history of working with artisans and craft-centric businesses that has built her reputation. Her aim is to benefit the community while fostering sustainable and environmentally friendly relationships.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="four columns" style="padding-right: 2%;">
                        <h4>Steve</h4>
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/steve.jpg" />
                        <p>Chemist, equipment specialist, and machine guru. Steve ensures that the Grouse Malt House equipment runs smoothly and that we’re secure in every facet. He’s a master in all things machinery and optimization and we’re lucky to have this resident joker on the team.</p>
                    </div>
                    <div class="four columns" style="padding-right: 2%;">
                        <h4>Brandon</h4>
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/brandon.jpg" />
                        <p>Fermentation Science student at CSU and hiker extraordinaire, Brandon embodies the Colorado spirit. He’s intuitive, organized, diligent, creative, and adventurous &mdash; plus he recently completed the Colorado Trail solo!</p>
                    </div>
                    <div class="four columns" style="padding-right: 2%;">
                        <h4>Kaden</h4>
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/kaden.jpg" />
                        <p>Always smiling, Kaden will patiently explain any project with gusto. He is as charming as he is energetic, and with a background in hospitality and the arts Kaden has brought an optimistic and steadfast style to the Grouse Malt House.</p>
                    </div>
                </div>
            </div>
            <div class="container"> 
                <img class="mobileMiddle" src="<?php echo get_bloginfo('template_directory');?>/images/CraftMaltstersGuildLogo.png" style="float: right; padding: 5%; margin: 0 auto;" />
                <h2 class="no-clear">WHO GROWS YOUR PINT?</h2>
                <h4 class="no-clear">We are proud members of the Craft Maltster's Guild</h4>
                <p>Our mission is to foster the growth of the craft malt industry through education, advocacy, and honest relationships intended to product local malt of the highest quality.</p>
                <h2>Malting Angels</h2>
                <div class="row">
                    <div class="three columns">
                        <h5>HEDIGER FAMILY</h5>
                    </div>
                    <div class="three columns">
                        <h5>HENLEY FAMILY</h5>
                    </div>
                    <div class="three columns">
                        <h5>SOLES FAMILY</h5>
                    </div>
                    <div class="three columns">
                        <h5>Slingshot Team</h5>
                    </div>
                </div>
                <hr/>
                <div style="text-align: center; padding: 2% 0;"><h5>AFTER ALL, DOESN'T HANDCRAFTED BEER DESERVE HANDCRAFTED MALT?</h5></div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>
