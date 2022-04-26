<?php

acf_add_local_field_group(array(
    'key'      => 'custom_sections_group',
    'title'    => 'Vlastní sekce',
    'fields'   => array(
        array(
            'key'          => 'field_sections',
            'label'        => '',
            'name'         => 'sections',
            'type'         => 'flexible_content',
            'button_label' => 'Add section',
            'layouts'      => array(
                array(
                    'key'     => 'field_sections_page-header',
                    'name'    => 'page_header',
                    'label'   => 'Header of page',
                    'display' => 'block'
                ),
                array(
                    'key'     => 'field_sections_page-header-carousel',
                    'name'    => 'page_header_carousel',
                    'label'   => 'Header of page with carousel',
                    'display' => 'block'
                ),
                array(
                    'key'     => 'field_sections_top_three_packages',
                    'name'    => 'top_three_packages',
                    'label'   => 'Top three packages',
                    'display' => 'block'
                ),
            )
        )
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page',
                'hide_on_screen' => array( 'the_content' )
            ),
        ),
    ),
    'menu_order'      => 0,
    'position'        => 'normal'
));
