<?php
/**
 * The template for displaying Author Bio
 *
 * @package Rowling
 */
?>

<div class="post-author">

	<a class="avatar" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">

		<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>

	</a>

	<h4 class="title"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a></h4>

	<p class="description"><?php esc_html( the_author_meta( 'description' ) ); ?></p>

</div> <!-- /post-author -->