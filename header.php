<?php
/**
 * The Header for Rowling
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Rowling
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

	<body <?php body_class(); ?>>

		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'rowling' ); ?></a>

		<?php if ( has_nav_menu( 'header-top' ) || has_nav_menu( 'social' ) ) : ?>

			<nav class="top-nav">

				<div class="section-inner clear-fix">

					<ul class="header-top-menu">

						<?php
							// Show the Header Top Menu
							if ( has_nav_menu( 'header-top' ) ) {
								wp_nav_menu( array(
									'container'      => '',
									'items_wrap'     => '%3$s',
									'theme_location' => 'header-top'
								) );
							}
						?>

					</ul> <!-- /header-top-menu -->

					<ul class="social-menu">

						<?php
							// Show the Social Nav Menu
							if ( has_nav_menu( 'social' ) ) {
								wp_nav_menu(
									array(
										'theme_location'  => 'social',
										'container'       => '',
										'container_class' => 'menu-social',
										'items_wrap'      => '%3$s',
										'menu_id'         => 'menu-social-items',
										'menu_class'      => 'menu-items',
										'depth'           => 1,
										'link_before'     => '<span class="screen-reader-text">',
										'link_after'      => '</span>',
										'fallback_cb'     => '',
									)
								);
							}
							echo '<li id="menu-item-151" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-151"><a class="search-toggle" href="#"><span class="screen-reader-text">Search</span></a></li>';
						?>

					</ul> <!-- /social-menu -->

				</div> <!-- /section-inner -->

			</nav> <!-- /top-nav -->

		<?php endif; ?>

		<div class="search-container">

			<div class="section-inner">

				<?php get_search_form(); ?>

			</div> <!-- /section-inner -->

		</div> <!-- /search-container -->

		<header class="header-wrapper">

			<div class="header">

				<div class="section-inner">

					<?php
						// show the logo
						if ( function_exists( 'jetpack_the_site_logo' ) ) { ?>

						<?php jetpack_the_site_logo(); ?>

						<h2 class="site-title">
							<a href="<?php echo esc_url( home_url('/') ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
						</h2>

						<?php
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<h4 class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></h4>
						<?php
						endif; ?>

					<?php
						// ...or show the blog title and description if they exist
						} else { ?>

						<h2 class="site-title">
							<a href="<?php echo esc_url( home_url('/') ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
						</h2>

						<?php
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<h4 class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></h4>
						<?php
						endif; ?>

					<?php } ?>

					<?php if ( has_nav_menu( 'header-bottom' ) ) { ?>
					<div class="nav-toggle">

						<div class="bars">
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>
						</div>

					</div> <!-- /nav-toggle -->
					<?php } ?>

				</div> <!-- /section-inner -->

			</div> <!-- /header -->

			<?php if ( has_nav_menu( 'header-bottom' ) ) { ?>
			<nav class="navigation">

				<div class="section-inner clear-fix">

					<ul class="header-bottom-menu">

					<?php
						// show the Header Bottom Menu
						wp_nav_menu( array(
							'container'      => '',
							'items_wrap'     => '%3$s',
							'theme_location' => 'header-bottom'
						) ); ?>

					</ul>

				</div><!-- /header-bottom-menu -->

			</nav> <!-- /navigation -->
			<?php } ?>

		</header> <!-- /header-wrapper -->
