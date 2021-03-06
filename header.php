<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grouseco
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/images/faviconWhite.png">

<?php wp_head(); ?>
</head>

<body ontouchstart="" <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'grouseco' ); ?></a>
	<header id="masthead" class="site-header <?php if(is_front_page()){echo 'front';} ?>" role="banner">
	    <div id="inner-header" class="content-inner">
            <?php // Display site icon or first letter as logo ?>	
            <div class="site-logo">
                <?php $site_title = get_bloginfo( 'name' ); ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <div class="screen-reader-text">
                        <?php printf( esc_html__('Go to the home page of %1$s', 'popperscores'), $site_title ); ?>	
                    </div>
                    <?php if (has_custom_logo()) {
                        the_custom_logo();
                    } else { ?>
                    <div class="site-firstletter" aria-hidden="true">
                        <?php echo substr($site_title, 0, 1); ?>
                    </div>
                    <?php } ?>
                </a>
            </div>
            <div class="site-branding">
                <?php
                if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
                endif;

                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php
                endif; ?>
            </div><!-- .site-branding -->
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '≡', 'grouseco' ); ?></button>
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu') ); ?>
            </nav><!-- #site-navigation -->
        </div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">