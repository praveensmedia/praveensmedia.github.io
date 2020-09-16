<?php
/**
 * The Index template
 *
 * Displays the main blog feed
 *
 * @package Rowling
 */

get_header(); ?>

<div class="wrapper section-inner">

	<main id="main" class="content">

	<?php if ( have_posts() ) : ?>

		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

		if ( "1" < $paged ) : ?>

			<header class="page-title clear-fix">

				<h4><?php esc_html_e( 'Archive', 'rowling' ); ?></h4>

				<?php rowling_archive_post_count(); ?>

			</header> <!-- /page-title -->

		<?php endif; ?>

			<div class="posts" id="posts">

				<div id="infinite-wrap">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

				<?php endwhile; ?>

				</div><!-- #infinite-wrap -->

			</div> <!-- /posts -->

			<?php the_posts_navigation(); ?>

		<?php endif; ?>

	</main> <!-- /content -->

	<?php get_sidebar(); ?>

	<div class="clear"></div>

</div> <!-- /wrapper.section-inner -->

<?php get_footer(); ?>