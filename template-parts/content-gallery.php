<?php
/**
 * The template that shows the Gallery post format
 *
 * @package Rowling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>

	<?php
		// Show the sticky tag
		if ( is_sticky() ) : ?>

		<a class="sticky-tag" title="<?php esc_attr_e( 'Sticky post:', 'rowling' ); echo ' '; the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
			<span class="fa fw fa-star"><span class="screen-reader-text"><?php esc_html_e( 'Featured', 'rowling' ); ?></span></span>
		</a>

	<?php endif; ?>

	<figure class="post-image">

		<?php
			// Show the slider
			rowling_flexslider( 'rowling-post-image-thumb' ); ?>

	</figure> <!-- /post-image -->

	<header class="post-header">

		<?php
			// Show the category
			if (has_category()) : ?>
			<p class="post-categories"><?php the_category(', '); ?></p>
		<?php endif; ?>

		<?php
			// Show the title
			if ( get_the_title() ) : ?>

			<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

		<?php endif; ?>

		<p class="post-meta">
			<a href="<?php the_permalink(); ?>" class="post-meta-date-link"><?php the_time( get_option( 'date_format' ) ); ?></a>
			<?php if ( comments_open() ) : ?>
			
				<span class="post-meta-separator"> &mdash; </span>
				<?php
					comments_popup_link(
						esc_html__( '0 Comments', 'rowling' ),
						esc_html__( '1 Comment', 'rowling' ),
						esc_html__( '% Comments', 'rowling' )
					);
				endif;
			?>
		</p>

	</header> <!-- /post-header -->

</article> <!-- /post -->