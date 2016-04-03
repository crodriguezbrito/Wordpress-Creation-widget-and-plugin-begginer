<?php
/*
Plugin Name: Map plugin using shortcode
Plugin URI: http://www.falkonproductions.com/shortcodeMaps/
Description: This plugin will get a map of whatever parameter is passed.
Author: Drew Falkman
Version: 1.0
Author URI: http://www.falkonproductions.com/
 */

function smp_map_it()
{
	$addr = '1600 Pennsylvania Ave. Washington, D.C.';
	$base_map_url = 'http://maps.google.com/maps/api/staticmap?sensor=false&size=256x256&format=png&center=';
	?>
	<h2>Your map:</h2>
	<img width="256" height="256"
		src="<?php echo $base_map_url . urlencode($addr); ?>" />
	<?php 
}
	
add_shortcode('map-it','smp_map_it');
