<?php

function dawei_footer_shh() {
	add_filter( 'admin_footer_text', '__return_empty_string', 11 );
	add_filter( 'update_footer', '__return_empty_string', 11 );
}

add_action( 'admin_menu', 'dawei_footer_shh' );