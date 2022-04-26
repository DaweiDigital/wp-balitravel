<?php

require_once __DIR__ . '/general-settings.php';
require_once __DIR__ . '/custom-sections.php';

foreach ( scandir( __DIR__ . '/components' ) as $filename ) {
    $path = __DIR__ . '/components/' . $filename;

    if ( is_file( $path ) ) {
        require_once $path;
    }
}