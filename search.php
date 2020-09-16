<?php
/**
 * This template displays the search page
 *
 * Used for displaying search results.
 *
 * @package Rowling
 */

get_header(); ?>

<div class="wrapper section-inner">

	<main id="main" class="content">

		<?php if ( have_posts() ) : ?>

			<header class="page-title clear-fix">

				<h4><?php
					// Archive page count
					printf( esc_html__( 'Search Results for: %s', 'rowling' ), '<span>' . get_search_query() . '</span>' ); ?></h4>

				<?php rowling_archive_post_count(); ?>

			</header> <!-- /page-title -->

			<div class="posts" id="posts">

    			<div id="infinite-wrap">

				<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

				<?php endwhile; ?>

    			</div>

			</div> <!-- /posts -->

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<header class="page-title clear-fix">

				<h4><?php
					// Archive page count
					printf( esc_html__( 'Search Results for: %s', 'rowling' ), '<span>' . get_search_query() . '</span>' ); ?></h4>

			</header> <!-- /page-title -->

			<div class="post single single-post clear-fix">

				<div class="post-inner">

					<div class="post-content">

						<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'rowling' ); ?></p>

						<?php get_search_form(); ?>

					</div> <!-- /post-content -->

				</div> <!-- /post-inner -->

			</div> <!-- /post -->

		<?php endif; ?>

	</main> <!-- /content -->

	<?php get_sidebar(); ?>

	<div class="clear"></div>

</div> <!-- /wrapper.section-inner -->

<?php get_footer(); ?>