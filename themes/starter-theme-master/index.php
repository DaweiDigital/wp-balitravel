<?php

$context = Timber::get_context();

$query = $GLOBALS['wp_query']->query_vars;

$query['post_type']      = 'post';

$query['posts_per_page'] = 12;
 
$context['post'] = new Timber\Post( $query );

$context['posts'] = new Timber\PostQuery();

$context['categories'] = Timber\Timber::get_terms(

    array(

        'taxonomy'   => 'category',

        'hide_empty' => 1

    )

);



if ( 'category' === get_queried_object()->taxonomy ) {

    $context['category'] = new Timber\Term( get_queried_object_id() );

}



Timber::render( 'index.twig', $context );