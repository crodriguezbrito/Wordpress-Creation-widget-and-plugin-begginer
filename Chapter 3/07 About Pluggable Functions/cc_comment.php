<?php
/*
Plugin Name: CC Comment Plugin
Plugin URI: http://www.falkonproductions.com/ccComment/
Description: This plugin will get activated
Author: Drew Falkman
Version: 1.0
Author URI: http://www.falkonproductions.com/
 */

function cc_comment()
{
	global $_REQUEST;
	
	$to = "drew@falkonproductions.com";
	$subject = "New comment posted @ yourblog " . $_REQUEST['subject'];
	$message = "Message from: " . $_REQUEST['name'] . " at email: " . $_REQUEST['email'] . ": \n" . $_REQUEST['comments'];
	mail($to,$subject,$message);
}

add_action('comment_post','cc_comment');