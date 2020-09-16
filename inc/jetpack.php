<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.com/
 *
 * @package Rowling
 */

function rowling_jetpack_setup() {

	// Add theme support for Site Logo.
	add_image_size( 'rowling_site_logo', 0, 80 );
	$args = array(
		'header-text' => array(
			'site-title',
			'site-description',
		),
		'size' => 'rowling_site_logo',
	);
	add_theme_support( 'site-logo', $args );

	// Add theme support for Infinite Scroll.
	// See: https://jetpack.com/support/infinite-scroll/
	add_theme_support( 'infinite-scroll', array(
		'container' => 'infinite-wrap',
		'footer'    => 'page',
		'render'    => 'rowling_infinite_scroll_render',
		'wrapper'   => false
	) );

	// Add theme support for Responsive Videos.
	// See: https://jetpack.com/support/responsive-videos/
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	// See: https://jetpack.com/support/content-options/
	add_theme_support( 'jetpack-content-options', array(
		'author-bio'      => true,
		'post-details'    => array(
			'stylesheet' => 'style',
			'date'       => '.post-meta-date, .post-meta-date-link, .post-meta-separator',
			'categories' => '.post-categories',
			'tags'       => '.post-tags',
			'author'     => '.post-meta-author',
		),
		'featured-images' => array(
			'archive'    => true,
			'post'       => true,
			'page'       => true,
			'fallback'   => true,
		),
	) );

}
add_action( 'after_setup_theme', 'rowling_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function rowling_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
}

/**
 * Return early if Author Bio is not available.
 */
function rowling_author_bio() {
	if ( ! function_exists( 'jetpack_author_bio' ) ) {
		get_template_part( 'template-parts/content', 'author' );
	} else {
		jetpack_author_bio();
	}
}

/**
 * Author Bio Avatar Size.
 */
function rowling_author_bio_avatar_size() {
	return 100;
}
add_filter( 'jetpack_author_bio_avatar_size', 'rowling_author_bio_avatar_size' );

/**
 * Custom function to check for a post thumbnail;
 * If Jetpack is not available, fall back to has_post_thumbnail()
 */
function rowling_has_post_thumbnail( $post = null ) {
	if ( function_exists( 'jetpack_has_featured_image' ) ) {
		return jetpack_has_featured_image( $post );
	} else {
		return has_post_thumbnail( $post );
	}
}
