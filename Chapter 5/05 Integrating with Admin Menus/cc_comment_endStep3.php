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

function cccomm_option_page()
{
	?>
	<div class="wrap"><?php screen_icon(); ?>
	<h2>CC Comments Option Page</h2>
	<p>Welcome to the CC Comments Plugin. Here you can edit the email(s) you
	wish to have your comments CC'd to.</p>
	<form action="options.php" method="post" id="cc-comments-email-options-form">
	<?php settings_fields('cccomm_options'); ?>
	<h3><label for="cccomm_cc_email">Email to send CC to: </label> <input
		type="text" id="cccomm_cc_email" name="cccomm_cc_email"
		value="<?php echo esc_attr( get_option('cccomm_cc_email') ); ?>" /></h3>
	<p><input type="submit" name="submit" value="Update Email" /></p>
	</form>
	</div>
	<?php
}

function cccomm_plugin_menu()
{
	add_menu_page('CC Comments', 'CC Comments', 'manage_options', 'cc_comments-plugin', 'cccomm_option_page', 
					'/wordpressTesting/wp-content/plugins/cc_comment/cc_icon.png',30);
	add_submenu_page('cc_comments-plugin','CC Comments Options 2', 'CC Comments Options 2', 'manage_options', 
					'cc_comments-plugin2', 'cccomm_option_page');
}
add_action('admin_menu', 'cccomm_plugin_menu');

function cc_comment()
{
	global $_REQUEST;
	
	$to = "drew@falkonproductions.com";
	$subject = "New comment posted @ yourblog " . $_REQUEST['subject'];
	$message = "Message from: " . $_REQUEST['name'] . " at email: " . $_REQUEST['email'] . ": \n" . $_REQUEST['comments'];
	wp_mail($to,$subject,$message);
}

add_action('comment_post','cc_comment');