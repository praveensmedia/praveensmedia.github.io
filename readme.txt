=== Rowling ===

Contributors: automattic
Tags: gray, black, blue, white, light, dark, two-columns, right-sidebar, responsive-layout, custom-colors, custom-menu, custom-fonts, featured-images, flexible-header, post-formats, sticky-post, theme-options, threaded-comments, translation-ready
Requires at least: 4.1
Tested up to: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Rowling is a clean, simple and elegant magazine theme for WordPress. It features a responsive design, great typography, three menu locations including a social menu support, custom color support, custom logo support, and a gallery post format support.

* Responsive layout.
* Jetpack.me compatibility for Infinite Scroll, Site Logo, and Social Menu.
* The GPL v2.0 or later license. :) Use it to make something cool.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Use the gallery post format =

1. Go to Admin > Posts > Add New.
2. Select the "Gallery" post format in the Post Attributes box.
3. Click "Add Media" and upload the images you wish to display in the gallery.
4. Close the Media window and publish/update the post.
5. The images you uploaded should now be displayed in the post gallery.

= Use the social menu in the header =

1. Go to Admin > Appearance > Menus.
2. Create a new menu.
3. Click the "Links" dropdown in the left sidebar, and add the URL and title of the social link you wish to include.
4. Click "Add to Menu" to add it to the menu. Repeat for each link you wish to include.
5. Scroll down to "Menu Settings", and next to "Theme locations", select "Social Menu". Click save.
6. The menu should now be displayed on the site.

== Quick Specs (all measurements in pixels) ==

1. The main column width is 924.
2. The sidebar width is 276.
3. Featured Images are 924 wide with unlimited height.

== Credits ==

* Lato font license : SIL Open Font License, 1.1 http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL
* Merriweather font license : SIL Open Font License, 1.1 http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL
* FontAwesome font license : SIL Open Font License, 1.1 http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL
* FontAwesome code license : MIT License http://opensource.org/licenses/MIT
* DoubleTapToGo.js license : MIT License http://opensource.org/licenses/MIT
* Flexslider.js license : GNU GPL v2 http://www.gnu.org/licenses/gpl-2.0.html
* Licenses for images used in screenshot.png : Creative Commons Zero http://creativecommons.org/publicdomain/zero/1.0/

== Changelog ==

= 22 August 2017 =
* Show the top header menu area on mobile devices; we were hiding it with display:none before, which wasn't a good idea. Also adds doubleTapToGo functionality for mobile devices for submenus, which was broken due to backwards implementation.

= 8 June 2017 =
* Fixing visual issues with nested lists in text widget.

= 6 June 2017 =
* Tweak Social Icons widget colour to match links in sidebar.

= 20 April 2017 =
* Add support for Smarter Featured Images

= 22 March 2017 =
* add Custom Colors annotations directly to the theme
* move fonts annotations directly into the theme

= 3 March 2017 =
* Adjusting RTL styles so posts display correctly after loading more than one page while scrolling infinitely.

= 24 January 2017 =
* Removing webkit-appearance: none from checkboxes in the comment area - it was making them look like they weren't being checked.

= 18 January 2017 =
* Add translation of Headstart annotation

= 17 January 2017 =
* Add new grid-layout tag to stylesheet.

= 29 December 2016 =
* clean up retired a8c widget Time Machine styles.

= 24 November 2016 =
* Add support for Content Options - Featured Images

= 16 November 2016 =
* Unbinding the doubleTapToGo function if window width is below 850px - this fixes the issue when switching from landscape to portrait mode, without refreshing the page.
* Adding a conditional check for window width around double-tab functionality, to remove it on devices where mobile menu is displayed (mostly mobile phones and phablets), while keeping it on tablets, where drop-down menu is used.

= 1 November 2016 =
* Wrap Post Date on archive view to make sure we can hide it with Content Options.

= 19 October 2016 =
* Use CSS selector for Content Options

= 29 July 2016 =
* Add multiple-menus tag to style.css;

= 26 July 2016 =
* Add support for Content Options

= 27 June 2016 =
* Update viewport setting to allow ping-zoom on iOS devices.
* Update Headstart featured image URLs.

= 23 June 2016 =
* Update Headstart featured image URLs.

= 13 June 2016 =
* Fall back to a Featured Image when using the Gallery Post Format on index/archives.

= 7 June 2016 =
* Adds a fix for custom background color positioning on mobile

= 12 May 2016 =
* Add new classic-menu tag.

= 5 May 2016 =
* Update code responsible for outputting site description, so that Customizer live preview works correctly. Fixes #3848;
* Move annotations into the `inc` directory.

= 4 May 2016 =
* Move existing annotations into their respective theme directories.

= 29 April 2016 =
* Removing flexible-header from the tag list; Fixes #3835;

= 25 April 2016 =
* Update version number and readme.txt.
* Remove closing tag and make spacing consistent

= 21 April 2016 =
* Adding widget ID.

= 13 April 2016 =
* Updating screenshot to use the new demo images

= 12 April 2016 =
* Cleaning up improvements from previous ticket
* Addresses post content margin whitespace issue
* Bringing back social menu icon borders

= 6 April 2016 =
* Fixes undefined function issue with '_s_categorized_blog()'
* Removes weird gray pixels from the screenshot
* Make the screenshot match the theme demo

= 23 March 2016 =
* Changing class and menu location id names to be more contextual
* Changing menu location names to give them ore context and comply with the the themedev checkist, Code cleanup

= 21 March 2016 =
* Cleaning up primary menu link color logic
* Adds fix for flexslidre instances that appear after infinite scroll completes

= 18 March 2016 =
* Removes another empty clearing div that isnt needed for layout
* Removes empty 'clear' <div> in favor of CSS only clear fix
* Adds
* Make site description show on small screens
* Adds improvements to nested blockquote styles
* Rowling Updating theme tags and removing duplicate border declarations for post tags

= 17 March 2016 =
* Adds better styling to tag/category clouds for both wpcom or wporg
* Adding styling
* Adding better styling support for Flickr widget
* Cleaning up RSS widget styles
* Fix too-long strings in text widgets
* Adds a more legible line-height to post titles
* Cleaning up multi-column gallery displays
* Embeded styles code cleanup
* Adds spacing for iframes and shortcode embeds
* Adds styling improvements to the Authors Widget
* Adding stylistic improvements to wpcom recent comments widget

= 16 March 2016 =
* Cleaning up media element styles
* Adding style improvements for highlander comments and media element embeds
* Adds a more specific .highlander-enabled class to CSS selectors
* Adds
* Cleaning up wpcom $themecolors spec

= 15 March 2016 =
* Adds hover states to images in archives, searches and blog feeds
* Cleans up spacing between sharedaddy and related posts jetpack addons
* Adds better indented bordering for menu items to help edge cases where the menu wraps to more than one line of links
* Fixes floating issue where next links is mis-positioned when viewing the oldest(last) post on the site
* Add support for default recent comments widgets
* Replaces '_s' translation name spaces
* Adds fallback for social menu links that dont have icons
* Makes post-navigation links more clickable
* Adds :hover state to flexslider gallery navigation
* Adds navigation arrows to gallerys that appear inline with blog, archive, and search results
* Adds navigation arrows to Previous and Next links when infinite scroll is not active
* Improvements to single post template
* Escaping post post-image-caption text
* Escapes comments_popup_link strings
* Uses the_title() instead of get_the-title conditional logic
* Adds support for a 'categorized' blog so categories only show when more than 1 is used (prevents uncategorized category from showing)
* Fixes (a very obvious) featured screen-reader-text markup typo
* Code clean up to increase JS legibility
* Adding $themecolors support for wpcom plugins
* Corrects theme URI to point to the wpcom theme demo

= 11 March 2016 =
* Remove comment meta letter-spacing
* Cleaning up comments display and add new commentverbage ( <- is that a word? )
* Improve comments logic on post/pages so that nothing shows if comments are closed and no comments exist

= 4 March 2016 =
* Adds 'Featured' text string to the sticky flag
* Code clean up to make spacing and sytnax match php
* Rename tweaks.php to extras.php for consistency
* Cleaning up comments and adding comment navigation styling
* Replace theme comments template with _s comments template, styling roughly stays the same
* Improve template tags
* Removes duplicate related posts functionality
* Remove additional jetpack-responsive-videos call
* Removes unused customizer functions and scripts
* Remove default widgets from sidebars
* Using custom search form over default HTML5 search form so that search UI stays in tact
* Remove unused widget files and image.php
* Removing the unnecessary primary menu fallback, this way user can have no menu, or use only the secondary/social menu

= 3 March 2016 =
* Improvements to Header UI
* Improving header.php for wpcom
* Improvements to functions.php and footer.php
* Remove customizations to the default comments template
* Cleaning up comments template
* Reconfiguring archive page count
* Cleanuing up translations strings to match _s (where applicable)
* Remove old changelog
* Cleaning up README file to match standards and include the changelog
* Adding skip link focus support to template files
* Adding skip link support for screen readers

= 2 March 2016 =
* More code cleanup to correct spaces and tabs
* Cleaning up stylesheet and removing repetative widgets
* Code cleanup, corrects tabs vs. spaces issues
* Adding improvements to RTL support to better handle color options

= 1 March 2016 =
* Code clean up
* Improves footer class name
* Adding Required JetPack Features
* Corrects line-heights to better support font annotations and font sizes
* Adds hover states to primary menu

= 29 February 2016 =
* Add spacing to contact info widget for better legibility

= 25 February 2016 =
* Adding improvements to make color annotations more efficient
* Adds improvements to make color annotations more consistent

= 24 February 2016 =
* Small tweak to menu dropdown indicator positions
* Cleaning up sub-menu UI
* Optimizing the menu dropdown UI. Removes unnecessary selectors and simplifies color annotations
* Add support for google.com social menu icon.

= 23 February 2016 =
* Fixes issue where mobile menu disappears when not selecting a custom nav menu (wp_nav_menu)
* Adds styling for JetPack related posts
* Remove unnecessary time machine selectors
* Adds style to time machine widget
* Adds some tweaks to make Highlander Comments match the theme
* Cleaning up widget anchor and select form display for wpcom compatibility
* Adds support for archive counts in widget lists
* Moving rowling to /pub for color and font annotation testing
