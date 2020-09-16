<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form as well as pings and trackbacks.
 *
 * @package Rowling
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area clear-fix">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>

	<div class="comments-container">

		<div class="comments-inner">

			<a name="comments"></a>

			<div class="comments-title-container clear-fix">

				<h3 class="comments-title">
					<?php
						printf( // WPCS: XSS OK.
							esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'rowling' ) ),
							number_format_i18n( get_comments_number() ),
							'<span>' . get_the_title() . '</span>'
						);
					?>
				</h3>

				<p class="comments-title-link">

					<a href="#respond"><?php esc_html_e( 'Add Comment', 'rowling' ); ?></a>

				</p>

			</div><!-- /comments-title-link -->

			<div class="comments">

				<ol class="comment-list">
					<?php
						wp_list_comments( array(
							'style'      => 'ol',
							'short_ping' => true,
						) );
					?>
				</ol><!-- .comment-list -->

				<?php the_comments_navigation(); ?>

			</div> <!-- /comments -->

		</div> <!-- /comments-inner -->

	</div> <!-- /comments-container -->

	<?php endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'rowling' ); ?></p>

	<?php
	endif;

	comment_form();
	?>

</div><!-- #comments -->