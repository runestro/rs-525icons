﻿#[RS 525icons v1.0](http://525icons.com/plugin.html)
###A free WordPress Plugin

With the 'RS 525icons plugin', you can use shortcodes or HTML to add any icon from the '525icons web font', while editing text inside Wordpress.

== Description ==
The 525icons css-file and font files are hosted at jsDelivr CDN, so this plugin is fast and lightweight. 
Find the names of your desired icons at http://525icons.com/glyphs.html. 

Shortcode syntax: [ico iname=""] Notice! Write "twitter" if you want "ico-twitter".
eg. [ico iname="twitter"]

Generated HTML will be:
<i class="ux ico-twitter"></i> - which is the code needed to show the icon on the page.

You may include following optional parameters, which adds inline styles to the HTML code:

[ico isize="?" iborder="?" ibordercol="?" iradius="?" ipadding="?" imargin="?" icolor="?" ibg="?" ivalign="?"]

1. isize = 		font-size (you must add: px, em, rem, pt, %, x-large, large, small etc.)
2. iborder = 	border-size (specified as px, write number only)
3. ibordercol = border-color (#HEX, RGB, RGBA, standard web color name, etc.)
4. iradius = 	border-radius (specified as px, write number only)
5. ipadding = 	padding (specified as px, write number only)
6. imargin = 	margin (specified as px, write number only)
7. icolor = 	color (#HEX, RGB, RGBA, standard web color name, etc.)
8. ibg = 		background-color (#HEX, RGB, RGBA, standard web color name, etc.)
9. ivalign = 	vertical-align (specified as %, write number only)

Default values for all selectors are 'empty', except: border-radius='0' and: border-color='black'.


License: GPLv2 
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Changelog ==

1.0
* Initial Release