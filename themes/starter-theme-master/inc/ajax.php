<?php

function ixtent_faq_search_ajax() {
    $context = Timber::get_context();
    $posts   = new Timber\PostQuery( array( 'post_type' => 'reference', 's' => $_POST['s'], 'posts_per_page' => -1 ) );

    ob_start();

    if ( !empty( $posts ) ) {
        foreach ( $posts as $item ) {
            $context['item'] = $item;

            Timber::render( 'partials/reference.twig', $context );
        }
    } else {
        _e( 'Nebyly nalezeny žádné časté dotazy.', 'ixtent' );
    }

    $content = ob_get_clean();

    wp_send_json( array( 'posts' => $content ) );

	wp_die();
}

add_action( 'wp_ajax_nopriv_faq_search_form', 'ixtent_faq_search_ajax' );
add_action( 'wp_ajax_faq_search_form', 'ixtent_faq_search_ajax' );