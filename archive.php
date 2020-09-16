<?php
/**
 * This template displays the archives
 *
 * Used for day, month, year, category, tag, and author archives.
 *
 * @package Rowling
 */

get_header(); ?>

<div class="wrapper section-inner">

	<main id="main" class="content">

		<header class="page-title clear-fix">

			<?php // Add the archive title
				the_archive_title( '<h4>', '</h4>' ); ?>

			<?php rowling_archive_post_count(); ?>

		</header> <!-- /page-title -->

		<?php if ( have_posts() ) : ?>

			<div class="posts" id="posts">

				<div id="infinite-wrap">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

				<?php endwhile; ?>

				</div>

			</div> <!-- /posts -->

			<?php the_posts_navigation(); ?>

		<?php endif; ?>

	</main> <!-- /content -->

	<?php get_sidebar(); ?>

	<div class="clear"></div>

</div> <!-- /wrapper.section-inner -->

<?php get_footer(); ?>