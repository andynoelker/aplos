=== Aplos ===
Contributors: mrandyjoe
Tags: two-columns, three-columns, left-sidebar, right-sidebar, flexible-header, custom-background, custom-colors, custom-header, editor-style, featured-images, post-formats, rtl-language-support, theme-options, threaded-comments, translation-ready
Requires at least: 4.0
Tested up to: 4.8
Stable tag: 1.2.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 
Aplos is a simple, clean and responsive theme meant for personal blogs, featuring elegant typography.
 
== Description ==
 
Aplos is a simple, clean and responsive theme meant for personal blogs, featuring elegant typography. The color scheme is easy to customize and it contains multiple layouts to choose from.

A good portion of the basic functionality is based on code found in the underscores theme (http://underscores.me/).

If you would like to contribute or raise an issue, the development repository for this theme is found at https://github.com/andynoelker/aplos.
 
== Frequently Asked Questions ==
 
= How do I change the colors, layout, etc.? =
 
In the Wordpress Admin dashboard go to the "Customize" page found under the "Appearance" section in the sidebar. On the "Customize" page you will be able to adjust site colors, layout, text used, etc.
 
= Why is the font not correctly displaying all the letters of my language? =
 
The default theme font supports most special characters in the Latin alphabet. However, that might not cover the language you use. In the "Customize" menu you can change the font used. "Roboto Condensed" is suggested as an acceptable replacement and supports a wider set of characters including Greek, Cyrillic, and Vietnamese. "Verdana" is also provided as an option which should have universal language support.
 
== Changelog ==

= 1.2.0 =

### Added

* Added post thumbnail support

* Added Roboto Condensed as a font option, which contains Latin, Greek, Cyrillic, and Vietnamese characters

* Added a collapsible hamburger menu for smaller screen sizes

* Added custom Header Image support

* Added Site Text customization options for:
  
  * 'Read More' link
  
  * Post date text
  
  * Categories text
  
  * Tags text

* Added color customization options for:
  
  * Content background color
  
  * Site description color
  
  * Text color
  
  * Button text color
  
  * Button border color

* Added Right-to-Left language support
* Added custom background image support
* Added editor styles

### Changed

* Changed main font to 'BebasNeue' which has wider character support

* Changed button styles to match navigation elements

* Changed mobile responsive breakpoint to 768px to mirror Bootstrap 3

* Changed way the theme internally manages default customizations

* Changed way the theme internally manages column layout styles

* Changed code to use PSR-2 formatting
* Updated screen-reader classes
* Screenshot is bigger and better
* Update wordpress tags to more accurately reflect theme

### Fixed

* Stopped showing comments on pages where the comments were disabled

* Fixed some minor styling issues with comments

* Stopped rendering second widget column when there were no active widgets in it

* Fixed spacing issue with nested menu items

= 1.1.2 =

### Added

* Added license for default theme font (Bebas)

* Added separate changelog file

= 1.1.1 =

### Added

* Added correct POT file for translations. Located in languages folder

= 1.1.0 =

### Added

* Added fonts choices for posts titles (addresses the issue of Bebas font not containing many characters found in foreign languages)

* Added Theme URI

* Made the theme translation ready



### Changed

* Reworked responsive styling to look and work much better on tablets and mobile devices

* Changed layout choices to "Two Columns" and "Three Columns" to better reperesent design



### Fixed

* Properly filtered the wp_title function in compliance with Wordpress standards

* Properly escaped home_url in header

* Fixed issue where customizable layout values initialize with no values and break layout design

* Added more padding around comments

* Fixed minor typo on 404 page
 
= 1.0.0 =

* Initial release