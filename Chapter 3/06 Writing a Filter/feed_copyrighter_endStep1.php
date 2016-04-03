<?php
/*
Plugin Name: Content Watermark Plugin
Plugin URI: http://www.falkonproductions.com/ccComment/
Description: This plugin will add a "watermark" to content
Author: Drew Falkman
Version: 1.0
Author URI: http://www.falkonproductions.com/
 */

function add_content_watermark( $content )
{
	// in case we want to add to earlier versions
	if (  is_feed() )
	{
		return $content . 
		"Created by Falkon Productions, copyright  " . 
		date("Y") . 
		" all rights reserved.";
	}
	
	return $content;
}


