<?php
/**
 * The sidebar template
 *
 * @package Rowling
 */
?>

<div class="sidebar">
	<?php
		// Show the sidebar if active
		if ( is_active_sidebar( 'sidebar' ) ) {
			dynamic_sidebar( 'sidebar' );
		}
	?>
</div>
