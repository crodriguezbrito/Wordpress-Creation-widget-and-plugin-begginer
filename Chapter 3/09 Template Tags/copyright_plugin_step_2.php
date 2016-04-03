<?php
/*
Plugin Name: My copyright plugin
Plugin URI: http://www.falkonproductions.com/copyrightPlugin/
Description: This plugin does things you never thought were possible.
Author: Drew Falkman
Version: 1.0
Author URI: http://www.falkonproductions.com/
 */
global $wp_version;

if ( !version_compare($wp_version,"3.0",">=") ) {
	die("You need at least version 3.0 of WordPress to use the copyright plugin.");
}

function add_copyright() {
	$copyright_message = "Copyright ".date(Y)." Falkon Productions, All Rights Reserved";
	echo $copyright_message;
}
add_action("wp_footer",add_copyright);