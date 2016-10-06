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
        <h1>Recommendations</h1>
    </div>
    <img src="<?php echo get_bloginfo('template_directory');?>/images/greenmillet.jpg" style="position: absolute; width: 100%;" />
    <main id="main" class="site-main" role="main">
        <div class="container">
            <h3 >RESOURCES</h3>
            <ul>
                <li><a target="_blank" href="http://www.bestglutenfreebeers.com"><h5>bestglutenfreebeers(.com)</h5></a></li>
                <li><a target="_blank" href="http://www.glutenfreehomebrewing.org"><h5>glutenfreehomebrewing.org</h5></a></li>
            </ul>
            <h3 >MILLING</h3>
            <ul>
                <li>Recommended mill setting: .65mm-.7mm. The millet seed is smaller than the barley seed.</li>
                <li>We can mill for you, it is $0.10 per pound.</li>
                <li>Millet and buckwheat malt retain their hulls, a helpful feature during the lautering process.</li>
                <li>Rice hulls are a beneficial addition. Their use depends on your system’s mash screen/wedge wire opening size. Average use is around 15 pounds/BBL.</li>
            </ul>
            <h3 >MASHING</h3>
            <p>Brewing with millet and buckwheat require a larger mash tun-to- boil kettle ratio. 75 pounds/BBL is the max.</p>
            <h3 >Decoction Method</h3>
            <ul>
                <li><strong>Pros -</strong> improved efficiency, ability to reach lower finishing gravity</li>
                <li><strong>Cons -</strong> time consuming, requires tailored or additional equipment</li>
            </ul>
            <h3 >High Temperature Single Infusion Mash</h3>
            <ul>
                <li><strong>Pros -</strong> simple process, gives reasonable starting gravity</li>
                <li><strong>Cons -</strong> very little b-amylase activity, higher final gravity &amp; residual sweetness</li>
            </ul>
            <h3 >Step Mash</h3>
            <ul>
                <li><strong>Pros -</strong> relatively simple, improved efficiency, higher b-amylase activity, lower possible final gravity</li>
                <li><strong>Cons -</strong> more hands on, time consuming, may require additional equipment</li>
            </ul>
            <h3 >Standard Single Infusion Mash</h3>
            <ul>
                <li><strong>Pros -</strong> simple, higher b-amylase activity, lower possible final gravity</li>
                <li><strong>Cons -</strong> lower efficiency, tests positive for residual starch and reduced extract</li>
            </ul>
            <h3 >ENZYMES</h3>
            <p>Adding an endogenous enzyme will help with the chemical breakdown of the starches. This will increase efficiency and PPG.</p>
            <ul>
                <li>Commercial customers | Enzyme Innovation | <a target="_blank" href="http://www.enzymeinnovation.com">enzymeinnovation.com</a></li>
                <li>Home brewers | Artisan Resources | <a target="_blank" href="http://www.artisanresources.com">artisanresources.com</a></li>
                <li>We recommend SEBamyl L and SEB BAL</li>
                <li>SEBamyl L: a liquid beta-amaylase. Usage rate: 350ml/ton or .16ml/lb. A 1-once bottle will suffice for about 185lbs.</li>
                <li>SEBamyl BAL: a medium temp alpha-amaylase. Usage rate: 500ml/ton or .23ml/lb. A 1-once bottle will suffice for about 128lbs.</li>
            </ul>
            <h3 >RECIRCULATION</h3>
            <p>It is important to vorlauf a little longer to achieve desired wort clarity.</p>
            <h3 >SPARGE</h3>
            <p>To increase extract efficiency we recommend at least 2 batch spargings with mixing/agitation at each water addition. Additional vorlauf after each sparge will improve wort clarity.  Fly sparging does not work well with millet because the grain bed will develop channels/shunts and you will get an insufficient rinse.</p>
           <h3 >PPG</h3>
            <p>Based on ASBC standard congress mash methods</p>
            <ul>
                <li>Pale millet malt 1.029 PPG</li>
                <li>Pale buckwheat malt 1.028 PPG</li>
            </ul>
            <h3 >ORGANIC GLUTEN-FREE MALT</h3>
            <p>Grouse Malt House is certified organic! We offer organic buckwheat malt, organic corn malt and organic rolled oats.</p>
            <h3 >GLUTEN-FREE ADJUNCTS</h3>
            <p>Quinoa, amaranth, teff, flaked corn or rolled oats are great adjuncts. Grouse malt can convert up to 10% added adjuncts.</p>
            <h3 >BUCKWHEAT</h3>
            <p>Using 10% buckwheat will bolster the mouthfeel and head retention. Certain malts, especially our Cara and Crystal malt will also increase the overall characteristics associated with body and head. Brewing with malts, rather than strictly syrups, will significantly increase head retention. A beer made with 50% malt will react very similarly to forced carbonation in traditionally brewed beers. When bottle conditioning, normal pitching rates of priming sugar is recommended.</p>
            <h3 >TYPICAL MASH TEMPERATURES</h3>
            <ol>
                <li>140&deg;F for 30 minutes</li>
                    <ul>
                        <li>Rise to 156-158&deg;F for 60 minutes</li>
                        <li>Rise to 162-163&deg;F for 30 minutes</li>
                    </ul>
                <li>156-158&deg;F for 90+ minutes</li>
                <li>162-163&deg;F for 90+ minutes</li>
            </ol>
            <h3 >TYPICAL MASH TIMES</h3>
            <ol>
                <li>Single Infusion: 156-158&deg;F for 100+ minutes
                <li>Steep Mash: 140&deg;F for 30 minutes, 156-158&deg;F for 90 minutes</li>
            </ol>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
