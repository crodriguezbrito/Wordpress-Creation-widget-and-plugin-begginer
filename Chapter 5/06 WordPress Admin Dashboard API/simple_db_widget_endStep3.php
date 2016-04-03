<?php
/*
Plugin Name: Simple Dashboard Widget
Plugin URI: http://www.falkonproductions.com/simpleDBWidget/
Description: This plugin adds a widget to the admin dashboard
Author: Drew Falkman
Version: 1.0
Author URI: http://www.falkonproductions.com/
 */

function simple_dashboard_widget()
{
	?>
	<h2>Simple Dashboard Widget</h2>
	<p>Welcome to WordPress development. Now you can build your own dashboard widgets. For fun and profit!</p>
	<p><a href="http://www.falkonproductions.com">Visit Falkon Productions</a></p>
	<?php 
}

function sdbw_register_widget()
{
	wp_add_dashboard_widget('simple-dashboard-widget','Simple Dashboard Widget', 'simple_dashboard_widget');
}

add_action('wp_dashboard_setup', 'sdbw_register_widget');
