<?php

/**

 * Template Name: Blog

 *

 * The main template file

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists

 *

 * Methods for TimberHelper can be found in the /lib sub-directory

 *

 * @package  WordPress

 * @subpackage  Timber

 * @since   Timber 0.1

 */


$context = Timber::get_context();

$context['post'] = new Timber\Post();

$context['posts'] = new Timber\PostQuery( array(
    'post_type'      => 'post',
    'paged'          => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
    'posts_per_page' => 12,
    'orderby' => 'date',
    'order'   => 'DESC',
) );

$context['categories'] = Timber\Timber::get_terms(
    array(
        'taxonomy'   => 'category',
        'exclude'    => 15,
        'hide_empty' => 1
    )
);

if ( 'category' === get_queried_object()->taxonomy ) {
    $context['category'] = new Timber\Term( get_queried_object_id() );
}

Timber::render( 'category.twig', $context );