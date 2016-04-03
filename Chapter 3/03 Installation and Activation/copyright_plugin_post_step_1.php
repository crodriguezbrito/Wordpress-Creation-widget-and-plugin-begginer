<?php
/*
Plugin Name: My copyright plugin
Plugin URI: http://www.falkonproductions.com/copyrightPlugin/
Description: This plugin does things you never thought were possible.
Author: Drew Falkman
Version: 1.0
Author URI: http://www.falkonproductions.com/
 */

function add_copyright() {
	$copyright_message = "Copyright ".date(Y)." Falkon Productions, All Rights Reserved";
	echo $copyright_message;
}
add_action("wp_footer",add_copyright);