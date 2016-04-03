<?php
/*
Plugin Name: CC Comment Plugin
Plugin URI: http://www.falkonproductions.com/ccComment/
Description: This plugin will CC us when a post is commented
Author: Drew Falkman
Version: 1.0
Author URI: http://www.falkonproductions.com/
 */

function cccomm_init()
{
	register_setting('cccomm_options','cccomm_cc_email');
}
add_action('admin_init','cccomm_init');

function cccomm_plugin_menu()
{ 	
	add_settings_field('cccomm_cc_email', 'CC Comments Email','cccomm_setting_field','general');
}
add_action('admin_menu', 'cccomm_plugin_menu');

function cc_comment()
{
	global $_REQUEST;
	
	$to = get_option('cccomm_cc_email');
	$subject = "New comment posted @ yourblog " . $_REQUEST['subject'];
	$message = "Message from: " . $_REQUEST['name'] . " at email: " . $_REQUEST['email'] . ": \n" . $_REQUEST['comments'];
	wp_mail($to,$subject,$message);
}

add_action('comment_post','cc_comment');