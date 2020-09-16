<?php
/**
 * Search form template
 *
 * @package Rowling
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'rowling' ) ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'rowling' ) ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'rowling' ) ?>" />
	</label>
	<button type="submit" class="search-button"><span class="fa fw fa-search"></span><span class="screen-reader-text"><?php echo esc_html__( 'Search', 'rowling' ) ?></span></button>
</form>
