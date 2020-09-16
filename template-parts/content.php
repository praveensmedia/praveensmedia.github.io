<?php
/**
 * The template that shows the content on archives and index
 *
 * @package Rowling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

	<?php
		// Show the sticky tag
		if ( is_sticky() ) { ?>

		<a class="sticky-tag" title="<?php esc_attr_e( 'Sticky post:', 'rowling' ); echo ' '; the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
			<span class="fa fw fa-star"><span class="screen-reader-text"><?php esc_html_e( 'Featured', 'rowling' ); ?></span></span>
		</a>

	<?php } ?>

	<?php
		// Show the featured image
		if ( rowling_has_post_thumbnail() ) { ?>

		<figure class="post-image">
			<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'rowling-post-image-thumb' ); ?>
			</a>
		</figure> <!-- /post-image -->

	<?php } ?>

	<header class="post-header">

		<?php
			// Show the category
			if ( has_category() ) { ?>
			<p class="post-categories"><?php the_category( ', ' ); ?></p>
		<?php } ?>

		<?php the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

		<p class="post-meta">
			<a href="<?php the_permalink(); ?>" class="post-meta-date-link"><?php the_time( get_option( 'date_format' ) ); ?></a>
			<?php if ( comments_open() ) { ?>

				<span class="post-meta-separator"> &mdash; </span>
				<?php
					comments_popup_link(
						esc_html__( '0 Comments', 'rowling' ),
						esc_html__( '1 Comment', 'rowling' ),
						esc_html__( '% Comments', 'rowling' )
					);
				}
			?>
		</p>

	</header> <!-- /post-header -->

</article> <!-- /post -->
