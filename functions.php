<?php
/**
 * grouseco functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package grouseco
 */

if ( ! function_exists( 'grouseco_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function grouseco_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on grouseco, use a find and replace
	 * to change 'grouseco' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'grouseco', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 828, 360, true);
	add_image_size( 'grouseco-small-thumb', 600, 150, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'grouseco' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'grouseco_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'grouseco_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function grouseco_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'grouseco_content_width', 640 );
}
add_action( 'after_setup_theme', 'grouseco_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function grouseco_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'grouseco' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'grouseco' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'grouseco_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function grouseco_scripts() {
	wp_enqueue_style( 'grouseco-style', get_stylesheet_uri() );
	
	/*-- google fonts --*/
	wp_enqueue_style( 'grouseco-google-fonts', 'https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700');
	
	/*--social icons--*/
	wp_enqueue_style( 'grouseco-fontastic', 'https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css');

	wp_enqueue_script( 'grouseco-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20151215', true );
    wp_localize_script( 'grouseco-navigation', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'grouseco' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'grouseco' ) . '</span>',
	) );
	
	wp_enqueue_script( 'grouseco-back-to-top', get_template_directory_uri() . '/js/back-to-top.js', array( 'jquery' ), '20151215', true );
	
	wp_enqueue_script( 'grouseco-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'grouseco_scripts' );

function add_googleanalytics() { ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-43787575-1', 'auto');
      ga('send', 'pageview');

    </script>
<?php } 

add_action('wp_footer', 'add_googleanalytics');


/**
* Disconnect Jetpack Sharing Icons to place them elsewhere
*/
function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
}
 
add_action( 'loop_start', 'jptweak_remove_share' );


/**
* Set Default facebook og:image property
*/
function custom_jetpack_default_image() {
    return 'http://grouseco.com/wordpress/wp-content/uploads/2016/10/Grouse-logo.jpg';
}
add_filter( 'jetpack_open_graph_image_default', 'custom_jetpack_default_image' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
