<?php
/**
 * The template that shows the content on archives and index
 *
 * @package Rowling
 */
?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'single', 'clear-fix' ) ); ?>>

				<header class="post-header">

					<?php if ( has_category() ) { ?>
						<p class="post-categories"><?php the_category( ', ' ); ?></p>
					<?php } ?>

					<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>

				</header> <!-- /post-header -->

				<?php
					$post_format = get_post_format();
					if ( $post_format == 'gallery' ) { ?>

					<?php rowling_flexslider( 'rowling-post-image' ); ?>

				<?php } else if ( rowling_has_post_thumbnail() ) { ?>

					<figure class="post-image clear-fix">

						<?php the_post_thumbnail( 'rowling-post-image' ); ?>

						<?php if ( ! empty( get_post( get_post_thumbnail_id() )->post_excerpt ) ) { ?>

							<p class="post-image-caption"><span class="fa fw fa-camera"></span><?php echo esc_html( get_post( get_post_thumbnail_id() )->post_excerpt ); ?></p>

						<?php } ?>

					</figure> <!-- /post-image -->

				<?php } ?>

				<div class="post-meta">

					<?php
						// Show post date
						printf( '<span class="post-meta-date">' . esc_html__( 'Date: %1$s', 'rowling' ),
							'<a href="'. get_the_permalink() . '">' . get_the_time( get_option( 'date_format' ) ) . '</a>'
							. '</span>'
						);

						// Show post author
						printf( '<span class="post-meta-author">' . esc_html__( 'Author: %1$s', 'rowling' ),
							'<a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '">' . get_the_author_meta( 'display_name' ) . '</a>'
							. '</span> '
						); ?>

					<?php if ( comments_open() ) { ?>
						<span class="post-comments">
							<?php
								comments_popup_link(
									'<span class="fa fw fa-comment"></span>0<span class="resp"> ' . esc_html__( 'Comments', 'rowling' ) . '</span>',
									'<span class="fa fw fa-comment"></span>1<span class="resp"> ' . esc_html__( 'Comment', 'rowling' ) . '</span>',
									'<span class="fa fw fa-comment"></span>%<span class="resp"> ' . esc_html__( 'Comments', 'rowling' ) . '</span>'
								);
							?>
						</span>
					<?php } ?>

					<?php echo edit_post_link( esc_html__( 'Edit', 'rowling' ), '<span class="edit-post">&mdash; ', '</span>' ); ?>

				</div> <!-- /post-meta -->

				<div class="post-inner">

					<?php if ( get_the_content() ) : ?>

						<div class="post-content">

							<?php

								// Display content
								$content = get_the_content();

								// If post is a gallery, remove [gallery] shortcode
								// - and inject image IDs into flexslider. see rowling_flexslider()
								if ( $post_format == 'gallery' ) {
									// Remove [gallery] shortcodes and images from the_content
									$content = rowling_strip_shortcode_gallery( $content );
									$content = str_replace( ']]>', ']]&gt;', $content );
								}

								// Apply the_content filter
								$content = apply_filters( 'the_content', $content );

								// Display content
								echo $content;

							?>

							<?php
								$args = array(
									'before'      => '<p class="page-links clear-fix"><span class="title">' . esc_html__( 'Pages:', 'rowling' ) . '</span>',
									'after'       => '</p>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
									'separator'   => '',
									'pagelink'    => '%',
									'echo'        => 1
								);

								wp_link_pages( $args ); ?>

						</div>

					<?php endif; ?>

					<footer class="post-footer">

						<?php if ( has_tag() ) : ?>

							<div class="post-tags">

								<?php the_tags( '','' ); ?>

							</div>

						<?php endif; ?>

						<?php rowling_author_bio(); ?>

					</footer>

				</div> <!-- /post-inner -->

			</article> <!-- /post -->
