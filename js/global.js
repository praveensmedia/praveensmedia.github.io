/**
 * global.js
 *
 * Handles various UI actions
 * - Mobile menu
 * - Search form show/hide
 * - Touch device dropdowns (requires: doubletaptogo.js)
 * - Flexslider (requires: flexslider.js)
 * - Scroll to top
 * - Smooth page load
 *
 * @package Rowling
 */
( function( $ ) {

/**
 * On ready
 */
	$( document ).ready( function() {


		// Toggle mobile menu
		$( ".nav-toggle" ).on( "click", function() {
			$( this ).toggleClass( "active" );
			$( ".header-bottom-menu" ).slideToggle();
			if ( $( ".search-toggle" ).hasClass( "active" ) ) {
				$( ".search-toggle" ).removeClass( "active" );
				$( ".search-container" ).slideToggle();
			}
			return false;
		});


		// Toggle search container
		$( ".search-toggle" ).on( "click", function() {
			$( this).toggleClass( "active" );
			$( ".search-container" ).slideToggle();
			if ( $( ".nav-toggle" ).hasClass( "active" ) ) {
				$( ".nav-toggle" ).removeClass( "active" );
				$( ".header-bottom-menu" ).slideToggle();
			}
			return false;
		});


		// Hide mobile menu/search container at resize
		$( window ).resize( function() {

			if ( $(window).width() >= 851 ) {
				$( ".nav-toggle" ).removeClass( "active" );
				$( ".header-bottom-menu" ).show();
			}

			if ( $(window).width() <= 850 ) {
				$( ".search-toggle" ).removeClass( "active" );
				$( ".search-container" ).hide();
			}

		}).resize();

		// Dropdown menus on touch devices, excluding mobile menu
		$( window ).resize( function() {
			if ( $(window).width() <= 851 ) {
				$( ".header-bottom-menu li:has(ul)" ).doubleTapToGo();
				$( ".header-top-menu li:has(ul)" ).doubleTapToGo();
			}

			if ( $(window).width() >= 850 ) {
				$( ".header-bottom-menu li:has(ul)" ).unbind();
				$( ".header-top-menu li:has(ul)" ).unbind();
			}

		}).resize();

		// Load Flexslider
		$( ".flexslider" ).flexslider( {
			animation: "slide",
			controlNav: false,
			prevText: "",
			nextText: "",
			smoothHeight: true
		});

		// smooth scroll to the top
		$( ".to-the-top" ).click( function() {
			$( "html, body" ).animate( { scrollTop: 0 }, 500 );
				return false;
		});

	});


	/**
	 * On load
	 */
	$( document.body ).on( 'post-load', function () {

		// Load Flexslider after new posts have been added to the page.
		$( ".flexslider" ).flexslider( {
			animation: "slide",
			controlNav: false,
			prevText: "",
			nextText: "",
			smoothHeight: true
		});

	});

	/**
	 * On load
	 */
	$( window ).load( function() {

		/*
		 * Fade in page
		 * - only if js is enabled
		 */
		var $wrapper = $( ".js body" );

		// Fade in wrapper containers
		$wrapper.animate( {
			opacity: 1,
		}, 10 );

	});

} ) ( jQuery );
