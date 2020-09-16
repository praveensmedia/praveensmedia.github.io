<?php
/**
 * The template for displaying the footer
 *
 * @package Rowling
 */
?>

<footer class="site-footer">

	<div class="section-inner">
		<a href="#" class="to-the-top" title="<?php esc_html_e( 'To the top', 'rowling' ) ?>"><div class="fa fw fa-arrow-up"></div></a>
		<p class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url('/') ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'title' ) ); ?></a></p>
		<p class="attribution"><a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'rowling' ); ?>" rel="generator"><?php printf( esc_html__( 'Proudly powered by %s', 'rowling' ), 'WordPress' ); ?></a> | <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'rowling' ), 'Rowling', '<a href="http://www.andersnoren.se" rel="designer">Anders Nor&eacute;n</a>' ); ?></p>
	</div>

</footer> <!-- /site-footer -->

<?php wp_footer(); ?>

</body>
</html>