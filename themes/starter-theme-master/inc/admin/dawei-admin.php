<?php

require_once __DIR__ . '/login.php';
require_once __DIR__ . '/admin-bar.php';
require_once __DIR__ . '/admin-footer.php';
require_once __DIR__ . '/dashboard.php';

/**
 * Load dawei admin stylesheet
 */
function dawei_load_admin_styles() {
	wp_enqueue_style('dawei_admin_css', get_template_directory_uri() . '/inc/admin/assets/css/style.min.css');
}

add_action('admin_enqueue_scripts', 'dawei_load_admin_styles');
add_action('login_enqueue_scripts', 'dawei_load_admin_styles');

function load_custom_wp_admin_style() {
	wp_register_style( 'custom_css', get_template_directory_uri() . '/inc/admin/assets/css/customAdmin.css', false, '1.0.0' );
	wp_enqueue_style( 'custom_css' );

	wp_enqueue_script( 'my_script', plugin_dir_url( __FILE__ ) . 'chandanscript.js' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

/**
 * Load dawei admin scripts
 */
function dawei_load_admin_scripts() {
	wp_enqueue_script( 'dawei_admin_js', get_template_directory_uri() . '/inc/admin/assets/js/script.js' );
}

add_action( 'admin_enqueue_scripts', 'dawei_load_admin_scripts' );

/**
 * Disable default admin color scheme picker
 */
remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');

/**
 * Change default avatar
 */
function dawei_default_avatar($avatar_defaults) {
	$avatar = get_option('avatar_default');

	$new_avatar_url = get_template_directory_uri() . '/admin/assets/img/avatar.jpg';

	if ($avatar != $new_avatar_url) {
		update_option('avatar_default', $new_avatar_url);
	}

	$avatar_defaults[$new_avatar_url] = 'Výchozí avatar';

	return $avatar_defaults;
}

add_filter('avatar_defaults', 'dawei_default_avatar');