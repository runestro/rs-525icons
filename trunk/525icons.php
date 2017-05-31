<?php
/**
 * Plugin Name: RS 525icons
 * Plugin URI: https://wordpress.org/plugins/rs-525icons/
 * Description: With this plugin, you can use shortcodes or HTML to add any icon from the '525icons web font', while editing text in Wordpress.
 * Version: 1.5
 * Author: Rune Stromsted - @runestro
 * Author URI: http://css-design.no
 * Text Domain: rs-525icons
 * Domain Path: /languages
 * License:     GPL2
 */
 
/*
'RS 525icons' is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
'RS 525icons' is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with 'RS 525icons'. If not, see:
https://www.gnu.org/licenses/gpl-2.0.html.
*/


//include 525icons cdn
//find latest version of the font files and css at: https://www.jsdelivr.com/projects/525icons.
//change version number in the URI, at the line below, if you want to use the latest version.

wp_register_style('rs_525_cdn_icons', 'https://cdn.jsdelivr.net/gh/runestro/525icons@v4.0/fonts/525icons.min.css', array() );
wp_enqueue_style('rs_525_cdn_icons');

/* Plugin Root dir */
define('RS_525ICONS_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );

//include styles.css
wp_register_style('rs_525_styles', RS_525ICONS_PATH.'css/styles.css', array() );
wp_enqueue_style('rs_525_styles');


//enabled shortcode for widget
add_filter('widget_text', 'do_shortcode');

//main function for 525icons
function rs_icons_function($atts){
   extract(shortcode_atts(array(
      'iname' => 'wordpress',
	  'isize' => '',
	  'imargin' => '',
	  'ipadding' => '',
	  'ibg' => '',
	  'icolor' => '',
	  'ivalign' => '',
	  'iradius' => '',
	  'ibordercol' => 'black',
	  'iborder' => '0',
	  
   ), $atts));

   $return_string = '<i style="border:'.$iborder.'px solid '.$ibordercol.';border-radius:'.$iradius.'px;vertical-align:'.$ivalign.'%;color:'.$icolor.';background:'.$ibg.';padding:'.$ipadding.'px;margin:'.$imargin.'px;font-size:'.$isize.'" class="ux ico-'.$iname.'" aria-hidden="true">';
   $return_string .= '</i>';
   return $return_string;
}

function register_shortcodes(){
   add_shortcode('ico', 'rs_icons_function');
}
add_action( 'init', 'register_shortcodes');
?>