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
	$tpp_posts_query = new WP_Query();
	$tpp_posts_query->get_posts();
	?>
	<h3>Posts on this page:</h3>
	<?php if ( $tpp_posts_query->have_posts() ):
		while ( $tpp_posts_query->have_posts() ):
			$tpp_posts_query->the_post();
	?>
	<div>
	<a href="<?php echo the_permalink(); ?>"
		title="<?php echo the_title(); ?>"><?php echo the_title(); ?></a>
	(<?php echo comments_number(); ?>)
	</div>
	<?php endwhile;
		endif;
	?>
	<?php 
}

function tpp_posts_widget_init() {
	if ( function_exists('register_sidebar_widget') )
	{
		register_sidebar_widget('Top Posts', 'tpp_posts_widget');
	}
}
add_action('widgets_init','tpp_posts_widget_init');