<?php
/**
 * @package Rowling
 */

// Custom read more link text
add_filter( 'the_content_more_link', 'rowling_modify_read_more_link' );

function rowling_modify_read_more_link() {
	return '<p><a class="more-link" href="' . esc_url( get_permalink() ) . '">' . esc_html__( 'Read More', 'rowling' ) . '</a></p>';
}


// Add body class if is_single and has_featured_image
add_filter( 'body_class', 'rowling_is_single_featured_image' );

function rowling_is_single_featured_image( $classes ){

		if ( is_single() && has_post_thumbnail() ){
				$classes[] = 'has-featured-image';
		}

		return $classes;
}
