<?php
/**
 * Rowling functions and definitions
 *
 * @package Rowling
 */

/**
 * Theme setup
 */
add_action( 'after_setup_theme', 'rowling_setup' );

function rowling_setup() {

	// Automatic feed
	add_theme_support( 'automatic-feed-links' );

	// Title tag
	add_theme_support( 'title-tag' );

	// Add post format support
	add_theme_support( 'post-formats', array( 'gallery' ) );

	// Post thumbnails
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size ( 88, 88, true );

	// Custom image sizes
	add_image_size( 'rowling-post-image', 816, 9999 );
	add_image_size( 'rowling-post-image-thumb', 400, 200, true );

	// Add nav menus
	register_nav_menu( 'header-top', esc_html__( 'Top Header Menu (above branding)', 'rowling' ) );
	register_nav_menu( 'header-bottom', esc_html__( 'Bottom Header Menu (below branding)', 'rowling' ) );
	register_nav_menu( 'social', esc_html__( 'Social Menu', 'rowling' ) );

	// Make the theme translation ready
	load_theme_textdomain( 'rowling', get_template_directory() . '/languages' );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'gallery', 'caption' ) );

}


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rowling_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'rowling_content_width', 616 );

}
add_action( 'after_setup_theme', 'rowling_content_width', 0 );


/**
 * Add Google webfonts to Rowling
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function rowling_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Lora, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$lato = esc_html_x( 'on', 'Lato font: on or off', 'rowling' );

	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$merriweather = esc_html_x( 'on', 'Merriweather font: on or off', 'rowling' );

	if ( 'off' !== $lato || 'off' !== $merriweather ) {
		$font_families = array();

		if ( 'off' !== $lato ) {
			$font_families[] = 'Lato:400,700,900,400italic,700italic';
		}

		if ( 'off' !== $merriweather ) {
			$font_families[] = 'Merriweather:700,900,400italic';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}


/**
 * Register and enqueue Javascript files
 */
add_action( 'wp_enqueue_scripts', 'rowling_enqueue_scripts' );

function rowling_enqueue_scripts() {

	wp_enqueue_style( 'fonts', rowling_fonts_url(), array(), null );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/font-awesome/font-awesome.css', array(), date( "Ymd", filemtime( get_template_directory() . '/font-awesome/font-awesome.css' ) ) );
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_enqueue_script( 'skip_link_fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', '', date( "Ymd", filemtime( get_template_directory() . '/js/skip-link-focus-fix.js' ) ), true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/flexslider.js', array( 'jquery' ), date( "Ymd", filemtime( get_template_directory() . '/js/flexslider.js' ) ), true );
	wp_enqueue_script( 'doubletap', get_template_directory_uri() . '/js/doubletaptogo.js', array( 'jquery' ), date( "Ymd", filemtime( get_template_directory() . '/js/doubletaptogo.js' ) ), true );
	wp_enqueue_script( 'global', get_template_directory_uri() . '/js/global.js', array( 'jquery' ), date( "Ymd", filemtime( get_template_directory() . '/js/global.js' ) ), true );
	if ( is_singular() ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


/**
 * Check whether the browser supports JavaScript
 */
add_action( 'wp_head', 'rowling_html_js_class', 1 );

function rowling_html_js_class () {
	echo '<script>document.documentElement.className = document.documentElement.className.replace("no-js","js");</script>'. "\n";
}


/**
 * Add footer widget areas
 */
add_action( 'widgets_init', 'rowling_sidebar_reg' );

function rowling_sidebar_reg() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rowling' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Widgets in this area will be shown in the sidebar.', 'rowling' ),
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div><div class="clear"></div></aside>'
	) );
}


/**
 * Functions that interact with the Customizer
 */
require_once ( get_template_directory() . '/inc/customizer.php' );


/**
 * Custom template tags for this theme.
 */
require_once ( get_template_directory() . '/inc/template-tags.php' );


/**
 * Custom tweaks that change default WP functionality.
 */
require_once ( get_template_directory() . '/inc/extras.php' );


/**
 * Functions that interact with the JetPack plugin.
 */
require_once ( get_template_directory() . '/inc/jetpack.php' );




// updater for WordPress.com themes
if ( is_admin() )
	include dirname( __FILE__ ) . '/inc/updater.php';
