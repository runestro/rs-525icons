=== RS 525icons ===
Contributors: runestro
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2ZJB5NLFV85SA
Tags: 'font icons', 'icon font', 'font awesome', 525icons, symbols, logos, 'social icons', icons.
Requires at least: 3.8
Tested up to: 4.7
Stable tag: trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

With this plugin, you can use shortcodes or HTML to add any icon from the '525icons web font', while editing text in Wordpress.

== Description ==
The 525icons css-file and font files are hosted at jsDelivr CDN, so this plugin is fast and lightweight. 
Find the names of your desired icons at http://525icons.com/glyphs.html. 
There you may click on any icon to copy its name to the clipboard. The 'ico-' prefix is omitted, as you need only the name for the shortcode. 

* Shortcode syntax: [ico iname=""] 
* Notice! Write "twitter" if you want "ico-twitter".
* eg. [ico iname="twitter"]

Generated HTML will be:
<pre><code><i class="ux ico-twitter"></i></code></pre> which is the code needed to show the icon on the page.

You may include following optional parameters, which adds inline styles to the HTML code:

[ico isize="?" iborder="?" ibordercol="?" iradius="?" ipadding="?" imargin="?" icolor="?" ibg="?" ivalign="?"]

1. isize = 		font-size (you must add: px, em, rem, pt, %, x-large, large, small etc.)
1. iborder = 	border-size (specified as px, write number only)
1. ibordercol = border-color (#HEX, RGB, RGBA, standard web color name, etc.)
1. iradius = 	border-radius (specified as px, write number only)
1. ipadding = 	padding (specified as px, write number only)
1. imargin = 	margin (specified as px, write number only)
1. icolor = 	color (#HEX, RGB, RGBA, standard web color name, etc.)
1. ibg = 		background-color (#HEX, RGB, RGBA, standard web color name, etc.)
1. ivalign = 	vertical-align (specified as %, write number only)

Default values for all selectors are 'empty', except: border-radius='0' and: border-color='black'.

(The shortcode [ico] alone will generate a default icon, which is set to the 'ico-Wordpress'.)

**Advanced options:**

In addition to the main css file, '525icons.min.css', the plugin utilizes the file 'css/styles.css'.
where there is a set of classes with standard HTML color names, plus some size classes. 
The class 'ispin', makes the icon spin infinitely, usable for spin and refresh icons.


*About classes and inline styles:*

This shortcode:
[icon iname="twitter" icolor="darkblue" isize="24px"] 

will generate inline styles like:
<pre><code><i class="ux ico-twitter" style="font-size:24px;color:darkblue"></i></code></pre> 

While this shortcode:
[icon iname="twitter darkblue xl"] 

will generate following HTML-code, calling up classnames in the css files:
<pre><code><i class="ux ico-twitter darkblue xl"></i></code></pre>

If you use additional classes, you must add them after 'name' (must be inside the iname apostrophes - after space).
For example, if you want an arrow pointing upwards, use 'rotate90', like this:

[icon iname="circle-arrow rotate90"] 

The rotate classes are useful for arrows and mediaplayer icons. Check out: http://525icons.com/examples.html

Take a look at 'css/styles.css' and http://525icons.com/fonts/525icons.css, for more styling options.
Below there is listed some of the style classes available:

*Size classes:*

* .lg (font-size: 1.33333333em)
* .xl (font-size: 24px)
* .i2x (font-size: 32px)
* .i3x (font-size: 48px)
* .i4x (font-size: 64px)
* .i5x (font-size: 80px)
* .i6x (font-size: 96px)
* .i7x (font-size: 112px)
* .i8x (font-size: 128px)
* .i9x (font-size: 144px)
* .i10x (font-size: 160px)

*Border radius (set as px):*

* .radius6
* .radius8
* .radius12
* .radius36

*Rotate classes:*

* .rotate45
* .rotate90
* .rotate135 
* .rotate180 
* .rotate225 
* .rotate270
* .rotate315 

You may choose to write HTML code instead of shortcodes, like this:
<pre><code><i class="ux ico-twitter i2x blue"></i></code></pre> 

== Installation ==
1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress.

== Screenshots ==

1. Here you can see some examples of generated icons and the shortcodes used.

== Frequently Asked Questions ==

= How do I get support about any issue with this plugin? =

Support Email: runestro@gmail.com

== Changelog ==

1.0
* Initial Release

== Upgrade Notice ==
 
 1.0
* Initial Release
