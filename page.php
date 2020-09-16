<?php
/**
 * Page template
 *
 * @package Rowling
 */

get_header(); ?>

<div class="wrapper section-inner">

	<main id="main" class="content">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

			<?php
				// Display single page content
				get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</main> <!-- /content -->

	<?php get_sidebar(); ?>

	<div class="clear"></div>

</div> <!-- /wrapper.section-inner -->

<?php get_footer(); ?>