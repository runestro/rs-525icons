#[RS 525icons v1.0](http://525icons.com/plugin.html)
###A free WordPress Plugin

=== RS 525icons ===
Contributors: runestro
Tags: 'font icons', 'icon font',525icons, symbols, logos, 'social icons', 'font awesome', icons.
Requires at least: 3.8
Tested up to: 4.7
Stable tag: trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

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

(The shortcode [ico] alone will generate a default icon, which is set to the 'ico-Wordpress'.)

== Arbitrary section ==

You may choose to write HTML code instead of shortcodes, like this:
<i class="ux ico-twitter 2x c-twitter"></i>

The plugin utilizes the css files 'css/styles.css' in addition to 'https://cdn.jsdelivr.net/525icons/3.2.0/525icons.min.css',
where you will find a set of classes with standard css color names, plus size classes, eliminating the use of inline styles.

This shortcode:
[icon iname="twitter" icolor="darkblue" isize="24px"] 

will generate inline styles like:
<i class="ux ico-twitter" style="font-size:24px;color:darkblue"></i> 

While this shortcode:
[icon iname="twitter darkblue xl"] 

will generate following HTML-code:
<i class="ux ico-twitter darkblue xl"></i> (calling up classnames in '525icons.css' plus 'styles.css').

If you use additional classes, you must add them after "iname" (must be inside the iname apostrophes - after space).
For example, if you want an arrow pointing upwards (size 24px), use 'rotate90', like this:

[icon iname="circle-arrow xl rotate90"] 

Se more inside 'css/styles.css' and 'http://525icons.com/fonts/525icons.css', for available classes.
Here is listed some of the style codes you will find:

/*! Size classes*/
.lg {
	font-size: 1.33333333em;
	line-height: 0.75em;
	vertical-align: -15%;
}
.xl {
	font-size: 24px;
	vertical-align: -10%;
}
.i2x {
	font-size: 32px;
}
.i3x {
	font-size: 48px;
}
.i4x {
	font-size: 64px;
}
.i5x {
	font-size: 80px;
}
.i6x {
	font-size: 96px;
}
.i7x {
	font-size: 112px;
}
.i8x {
	font-size: 128px;
}
.i9x {
	font-size: 144px;
}
.i10x {
	font-size: 160px;
}
/*! Border-radius classes*/

.radius6  {
	border-radius: 6px;
}
.radius8  {
	border-radius: 8px;
}
.radius12  {
	border-radius: 12px;
}
.radius36  {
	border-radius: 36px;
}
/*! Rotate classes - useful for arrows and mediaplayer icons. Check out http://525icons/examples.html */

.rotate45, 
.rotate90, 
.rotate135, 
.rotate180, 
.rotate225, 
.rotate270, 
.rotate315 

== Installation ==
1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.

== Screenshots ==

1. Here you can see some examples of generated icons and the shortcodes used.

== Frequently Asked Questions ==

= How do I get support about any issue with this plugin? =

Support Email: runestro@gmail.com

== Changelog ==

1.0
* Initial Release
