<?php
/**
 * The template that shows the content on archives and index
 *
 * @package Rowling
 */
?>

			<article id="page-<?php the_ID(); ?>" <?php post_class( 'post single single-post' ); ?>>

				<header class="post-header">

					<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>

				</header> <!-- /post-header -->

				<?php if ( has_post_thumbnail() ) : ?>

					<figure class="post-image">

						<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">

							<?php the_post_thumbnail( 'rowling-post-image' ); ?>

						</a>

						<?php if ( ! empty( get_post( get_post_thumbnail_id() )->post_excerpt ) ) : ?>

							<p class="post-image-caption"><span class="fa fw fa-camera"></span><?php echo esc_html( get_post( get_post_thumbnail_id() )->post_excerpt ); ?></p>

						<?php endif; ?>

					</figure> <!-- /post-image -->

				<?php endif; ?>

				<div class="post-inner clear-fix">

					<div class="post-content">

						<?php the_content(); ?>

						<?php edit_post_link( esc_html__( 'Edit', 'rowling' ), '<p class="page-edit-link"><span class="fa fw fa-wrench"></span>', '</p>'); ?>

					</div> <!-- /post-content -->

				</div> <!-- /post-inner -->

				<?php comments_template( '', true ); ?>

			</article> <!-- /page -->