<?php

function underline_shortcode( $atts, $content ) {
    return '<span class="h-large-underline">' . $content . '</span>';
}

function description_shortcode( $atts, $content ) {
    return '<p class="h-large-description">' . $content . '</p>';
}


// Init shortcodes

function register_shortcodes() {
    add_shortcode( 'underline', 'underline_shortcode' );
    add_shortcode( 'description', 'description_shortcode' );
}

add_action( 'init', 'register_shortcodes' );