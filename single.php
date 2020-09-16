<?php
/**
 * Single post template
 *
 * @package Rowling
 */

get_header(); ?>

<div class="wrapper section-inner">

	<main id="main" class="content">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

		<?php
			// Display single post content
			get_template_part( 'template-parts/content', 'single' ); ?>

		<?php
			// Previous/next post navigation
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' .esc_html__( 'Next', 'rowling' ) . '</span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Next post:', 'rowling' ) . '</span> ' .
					'<span class="navigation-post-title next-post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous', 'rowling' ) . '</span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'rowling' ) . '</span> ' .
					'<span class="navigation-post-title previous-post-title">%title</span>',
			) ); ?>

		<?php comments_template( '', true ); ?>

		<?php endwhile; ?>

	<?php else: ?>

		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'rowling' ); ?></p>

		<?php get_search_form(); ?>

	<?php endif; ?>

	</main> <!-- /content -->

	<?php get_sidebar(); ?>

	<div class="clear"></div>

</div> <!-- /wrapper -->

<?php get_footer(); ?>