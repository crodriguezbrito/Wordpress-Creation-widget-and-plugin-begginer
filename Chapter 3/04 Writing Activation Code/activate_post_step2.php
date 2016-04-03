<?php
/*
Plugin Name: Drew's Activated Plugin
Plugin URI: http://www.falkonproductions.com/activatedPlugin/
Description: This plugin will get activated
Author: Drew Falkman
Version: 1.0
Author URI: http://www.falkonproductions.com/
 */

register_activation_hook(__FILE__,"my_plugin_activate");
register_deactivation_hook(__FILE__,"my_plugin_deactivate");

function my_plugin_activate() 
{
	// add options, build db tables, etc
	error_log("my plugin activated");
}

function my_plugin_deactivate() 
{
	// add options, build db tables, etc
	error_log("my plugin DE-activated");
}