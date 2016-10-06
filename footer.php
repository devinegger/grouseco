<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grouseco
 */

?>
    <a href="#0" class="cd-top">^</a>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	    <div class="site-links">
	        <div class="row">
	            <div class="six columns" style="text-align: left; padding-top: 2%;">
	                <h2 class="highlight">Stay In Touch!</h2>
	                <p>Enter your email to receive updates</p>
	                <form style="padding: 3px 3px 8px 3px;" action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=GrouseCo', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
	                    <input type="text" placeholder="Email Address" name="email" />
	                    <input type="hidden" value="GrouseCo" name="uri"/>
	                    <input type="hidden" name="loc" value="en_US"/>
	                    <button type="submit">Submit</button>
	                </form>
	                <p>
	                    <a target="_blank" href="https://www.facebook.com/GrouseMaltingAndRoastingCompany/">
	                        <span class="socicon socicon-facebook" style="font-size: 2.3em;"></span>
	                    </a>
	                    <a target="_blank" href="https://twitter.com/grousemalting">
	                        <span class="socicon socicon-twitter" style="font-size: 2.3em;"></span>
	                    </a>
	                    <a target="_blank" href="https://www.pinterest.com/GFHomeBrewing/grouse-malting-roasting-co/">
	                        <span class="socicon socicon-pinterest" style="font-size: 2.3em;"></span>
	                    </a>
	                    <a target="_blank" href="http://feeds.feedburner.com/GrouseCo">
	                        <span class="socicon socicon-rss" style="font-size: 2.3em;"></span>
	                    </a>
	                </p>
	            </div>
	            <div class="six columns" style="text-align: right; padding-top: 1%;">
	                <img src="<?php echo get_bloginfo('template_directory');?>/images/Grouse-logo-new-white.png" width="100" />
	                <p>Grouse LLC
	                <br/>8121 1st Street
                    <br/>Wellington, CO 80549</p>
                    <p><a href="tel:9705689001">(970) 568-9001</a> | <a href="mailto:sales@grouseco.com">sales@grouseco.com</a></p>
	            </div>
	        </div>
	    </div><!-- .site-links -->
		<div class="site-info">
			<p>&copy;2016 The Grouse Malt House, All Rights Reserved. | Built by: Dreamscape Development</p> 
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>