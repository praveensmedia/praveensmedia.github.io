<?php
/**
 * The 404 error template
 *
 * Used when visiting a URL that doesnt't exist
 *
 * @package Rowling
 */

get_header(); ?>

<div class="wrapper section-inner">

	<main id="main" class="content">

		<article class="post single single-post">

			<p class="post-categories"><?php esc_html_e( 'Error 404', 'rowling' ); ?></p>

			<header class="post-header">

				<h1 class="post-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'rowling' ); ?></h1>

			</header> <!-- /post-header -->

			<div class="post-inner">

				<div class="post-content">

					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'rowling' ); ?></p>

					<p><?php get_search_form(); ?></p>

					<?php
						// Only show the widget if site has multiple categories.
						if ( rowling_categorized_blog() ) : ?>

					<div class="widget widget_categories">
						<h2 class="widgettitle"><?php esc_html_e( 'Most Used Categories', 'rowling' ); ?></h2>
						<ul>
							<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
							?>
						</ul>
					</div><!-- .widget -->

					<?php
						endif;

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'rowling' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div> <!-- /post-content -->

			</div> <!-- /post-inner -->

		</article> <!-- /post -->

	</main> <!-- /content -->

	<?php get_sidebar(); ?>

	<div class="clear"></div>

</div> <!-- /wrapper.section-inner -->

<?php get_footer(); ?>