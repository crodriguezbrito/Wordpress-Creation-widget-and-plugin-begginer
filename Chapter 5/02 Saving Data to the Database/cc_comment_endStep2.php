<?php
/*
Plugin Name: CC Comment Plugin
Plugin URI: http://www.falkonproductions.com/ccComment/
Description: This plugin will CC us when a post is commented
Author: Drew Falkman
Version: 1.0
Author URI: http://www.falkonproductions.com/
 */

function cccomm_option_page()
{
	// first...process form data?
	if ( $_POST['cccomm_hidden'] == 'Y' )
	{
		update_option( 'cccomm_cc_email', $_POST['cc_email']);
		?>
		<div id="message" class="updated">Email was saved for CC Comments</div>
		<?php
	}
	?>
	<div class="wrap"><?php screen_icon(); ?>
	<h2>CC Comments Option Page</h2>
	<p>Welcome to the CC Comments Plugin. Here you can edit the email(s) you
	wish to have your comments CC'd to.</p>
	<form action="" method="post" id="cc-comments-email-options-form">
	<h3><label for="cc_email">Email to send CC to: </label> <input
		type="text" id="cc_email" name="cc_email"
		value="<?php echo esc_attr( get_option('cccomm_cc_email') ); ?>" /></h3>
	<p><input type="submit" name="submit" value="Update Email" /></p>
	<input type="hidden" name="cccomm_hidden" value="Y" />
	</form>
	</div>
	<?php
}

function cccomm_plugin_menu()
{
	add_options_page('CC Comments Settings','CC Comments', 'manage_options', 'cc-comments-plugin', 'cccomm_option_page');
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