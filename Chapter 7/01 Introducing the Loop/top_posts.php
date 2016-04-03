<?php
/*
Plugin Name: Top Posts Plugins
Plugin URI: http://www.falkonproductions.com/topPosts/
Description: This plugin will link to the top x posts
Author: Drew Falkman
Version: 1.0
Author URI: http://www.falkonproductions.com/
 */

function tpp_posts_widget()
{
	?>
	<h3>Posts on this page:</h3>
	<?php 
}

function tpp_posts_widget_init() {
	register_sidebar_widget('Top Posts', 'tpp_posts_widget');
}
add_action('widgets_init','tpp_posts_widget_init');