<?php
/*
Plugin Name: Counter Plugin
Plugin URI: http://www.falkonproductions.com/counter/
Description: This plugin will count items in the database
Author: Drew Falkman
Version: 1.0
Author URI: http://www.falkonproductions.com/
 */

function databaseinfo_dashboard_widget()
{
	
}

function databaseinfo_register_widget()
{
	wp_add_dashboard_widget('databaseinfo-dashboard-widget','Counter Dashboard Widget', 'databaseinfo_dashboard_widget');
}

add_action('wp_dashboard_setup', 'databaseinfo_register_widget');