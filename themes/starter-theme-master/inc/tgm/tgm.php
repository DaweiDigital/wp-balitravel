<?php
/**
 * TGM Plugin Activation
 *
 * @package dawei-core
 */

require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

function dawei_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 */
	$plugins = array(
		array(
			'name'             => 'Advanced Custom Fields',
			'slug'             => 'advanced-custom-fields',
			'required'         => TRUE,
			'force_activation' => TRUE
		),
		array(
			'name'             => 'Advanced Custom Fields PRO',
			'slug'             => 'advanced-custom-fields-pro',
			'source'           => get_template_directory() . '/inc/tgm/plugins/advanced-custom-fields-pro.zip',
			'required'         => TRUE,
			'force_activation' => TRUE
		),
		array(
			'name'             => 'Clean Image Filenames',
			'slug'             => 'clean-image-filenames',
			'required'         => TRUE,
			'force_activation' => TRUE
		),
		array(
			'name'             => 'Duplicate Post',
			'slug'             => 'duplicate-post',
			'required'         => TRUE,
			'force_activation' => TRUE
		),
		array(
			'name'             => 'Yoast SEO',
			'slug'             => 'wordpress-seo',
			'required'         => TRUE,
			'force_activation' => TRUE
		),
		array(
			'name'             => 'Safe SVG',
			'slug'             => 'safe-svg',
			'required'         => TRUE,
			'force_activation' => TRUE
		),
        array(
            'name'             => 'Timber',
            'slug'             => 'timber-library',
            'required'         => TRUE,
            'force_activation' => TRUE
        )
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 */
	$config = array(
		'id'           => 'dawei',                // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                    // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'dawei_register_required_plugins' );