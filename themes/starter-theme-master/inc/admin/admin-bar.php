<?php

/**
 * Remove admin bar nodes
 */
function dawei_remove_admin_bar_nodes( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
	$wp_admin_bar->remove_node( 'site-name' );
}

add_action( 'admin_bar_menu', 'dawei_remove_admin_bar_nodes', 999 );

/**
 * Disable help tab
 */
function dawei_remove_help_tabs( $old_help, $screen_id, $screen ){
	$screen->remove_help_tabs();
	return $old_help;
}

add_filter( 'contextual_help', 'dawei_remove_help_tabs', 999, 3 );