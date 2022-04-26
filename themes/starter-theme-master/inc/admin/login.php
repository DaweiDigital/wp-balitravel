<?php

/**
 * Change login page's logo URL
 */
function dawei_custom_loginlogo_url($url) {
	return 'https://www.dawei.cz/';
}

add_filter( 'login_headerurl', 'dawei_custom_loginlogo_url' );

/**
 * Change login page's logo title
 */
function dawei_login_headertitle($title) {
	return 'Digitalní agentura dawei';
}

add_filter( 'login_headertitle', 'dawei_login_headertitle' );

/**
 * Random BG
 */
function getCurrentLoginBgId() {
	$cookie_name = 'login_page_bg_id';

	// Get current BG ID
	if( isset($_COOKIE[$cookie_name]) ) {
		$currentID = intval($_COOKIE[$cookie_name]);
	} else {
		$currentID = 0;
	}

	$newID = $currentID + 1;

	if ( $newID > 4 ) { // Max 4 types of background image
		$newID = 1;
	}

	setcookie($cookie_name, $newID, time() + (86400 * 30));

	return $newID;
}

define( 'LOGIN_BG_ID', getCurrentLoginBgId() );

function dawei_random_bg_class( $classes ) {
	$classes[] = 'login-bg-' . LOGIN_BG_ID;
	return $classes;
}

add_filter( 'login_body_class', 'dawei_random_bg_class' );