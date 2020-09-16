<?php
/**
 * Custom template tags for Rowling
 *
 * @package Rowling
 */


if ( ! function_exists( 'rowling_archive_page_count' ) ) :
/**
 * The archive page count
 *
 * - Used on index, archive, and search to display the page count
 */
function rowling_archive_post_count() {

	global $wp_query;

	$postcount = $wp_query->found_posts;

	if ( "1" < $postcount ) : ?>

		<p><?php
			// Archive page count
			printf( esc_html__( '%1$s Posts', 'rowling' ),
				$postcount
			);
			?></p>

	<?php else : ?>

		<p><?php
			// Archive page count
			printf( esc_html__( '%1$s Post', 'rowling' ),
				$postcount
			);
			?></p>

	<?php endif;

}
endif;


if ( ! function_exists( 'rowling_flexslider' ) ) :
/**
 * Flexslider function for gallery-formatted-posts
 *
 * - Displays the flexslider gallery function
 * - Favor the [gallery] shortcode if the used in the_content
 * - If no gallery is found, falls back to a Featured Image
 *
 */

function rowling_flexslider( $size ) {

	global $post;

	if ( 'gallery' !== get_post_format() ) {
		return;
	}

	$images = '';
	$gallery = get_post_gallery( $post->ID, false );

	if ( ! empty( $gallery ) ) {

		if ( ! is_single() ) : // Make it a link if it's an archive ?>
			<a class="flexslider clear-fix" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php else : // ...and just a div if it's a single post ?>
			<div class="flexslider clear-fix">
		<?php endif;

		echo '<ul class="slides">';

		$images = explode( ',', $gallery['ids'] ); // Get the gallery image IDs

		foreach ( $images as $image ) { ?>

			<li>
			<?php echo wp_get_attachment_image( $image, $size ); ?>
			<?php if ( ! empty( $image->post_excerpt ) && is_single()) : ?>
				<p class="post-image-caption"><span class="fa fw fa-camera"></span><?php echo $image->post_excerpt; ?></p>
			<?php endif; ?>
			</li>

			<?php
		}

		echo '</ul>';

		if ( ! is_single() ) { ?>
			</a>
		<?php } else { ?>
			</div>
		<?php }

	}
	else if ( ! is_single() && has_post_thumbnail() ) { ?>

		<figure class="post-image">
			<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'rowling-post-image-thumb' ); ?>
			</a>
		</figure> <!-- /post-image -->

	<?php }
}
endif;


/**
 * Get Gallery shortcode
 *
 * - src: http://goo.gl/T32h6b
 * - used in content-single.php
 *
 */
function rowling_strip_shortcode_gallery( $content ) {

	preg_match_all( '/'. get_shortcode_regex() .'/s', $content, $matches, PREG_SET_ORDER );

	if ( ! empty( $matches ) ) {
		foreach ( $matches as $shortcode ) {
			if ( 'gallery' === $shortcode[2] ) {
				$pos = strpos( $content, $shortcode[0] );
				if ( $pos !== false ) {
					return substr_replace( $content, '', $pos, strlen($shortcode[0]) );
				}
			}
		}
	}
	return $content;
}


/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function rowling_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'rowling_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );
		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );
		set_transient( 'rowling_categories', $all_the_cool_cats );
	}
	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so rowling_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so rowling_categorized_blog should return false.
		return false;
	}
}


/**
 * Flush out the transients used in rowling_categorized_blog.
 */
function rowling_category_transient_flusher() {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Like, beat it. Dig?
	delete_transient( 'rowling_categories' );

}
add_action( 'edit_category', 'rowling_category_transient_flusher' );
add_action( 'save_post',     'rowling_category_transient_flusher' );