<?php

/**

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

$context['err_url'] = '<span>' . str_replace( array( '//', 'https://', 'http://', 'http:' ), '', home_url( $wp->request ) ) . '</span>';

Timber::render( '404.twig', $context );