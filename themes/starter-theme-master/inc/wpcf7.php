<?php

function wpcf7_add_tags() {
    wpcf7_add_form_tag(
        'training_name',
        'wpcf7_training_name_form_tag_handler'
    );

    wpcf7_add_form_tag(
        'training_time',
        'wpcf7_training_time_form_tag_handler'
    );

    wpcf7_add_form_tag(
        'training_address',
        'wpcf7_training_address_form_tag_handler'
    );
}

add_action( 'wpcf7_init', 'wpcf7_add_tags' );

function wpcf7_training_name_form_tag_handler() {
    return get_the_title();
}

function wpcf7_training_time_form_tag_handler() {
    return get_post_meta( get_the_ID(), 'time', true );
}

function wpcf7_training_address_form_tag_handler() {
    return get_post_meta( get_the_ID(), 'address', true );
}

function wpcf7_create_training_order( $wpcf7 ) {
    $submission = WPCF7_Submission::get_instance();
    if ( $submission ) {
        $posted_data = $submission->get_posted_data();
    }
    if ( $wpcf7->id() == 1908 ) {
        $post_id = wp_insert_post(
            array(
                'post_title'  => $submission['customer_name'] . ' // ' . $submission['training_name'] . ' / ' . $submission['training_time'],
                'post_status' => 'publish',
                'post_type'   => 'training-order'
            )
        );

        update_post_meta( $post_id, 'training_name', get_the_title( $submission['_wpcf7_container_post'] ) );
        update_post_meta( $post_id, 'training_time', get_post_meta( $submission['_wpcf7_container_post'], 'time' ) );
        update_post_meta( $post_id, 'training_address', get_the_title( $submission['_wpcf7_container_post'], 'address' ) );

        update_post_meta( $post_id, 'company', $submission['company'] );
        update_post_meta( $post_id, 'quantity', $submission['quantity'] );
        update_post_meta( $post_id, 'participants', $submission['participants'] );

        update_post_meta( $post_id, 'customer_name', $submission['customer_name'] );
        update_post_meta( $post_id, 'customer_email', $submission['customer_email'] );
        update_post_meta( $post_id, 'customer_phone_number', $submission['customer_phone_number'] );
        update_post_meta( $post_id, 'notice', $submission['notice'] );

        $quantity_stock = get_post_meta( $submission['_wpcf7_container_post'], 'quantity', true );

        update_post_meta( $submission['_wpcf7_container_post'], 'quantity', $quantity_stock - 1);
    }
}

add_action( 'wpcf7_mail_sent', 'wpcf7_create_training_order' );