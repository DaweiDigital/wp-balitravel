<?php

acf_add_local_field(
    array(
        'key'           => 'key_page_header',
        'label'         => '',
        'name'          => 'page_header',
        'type'          => 'repeater',
        'layout'        => 'row',
        'min'           => 1,
        'max'           => 1,
        'parent'        => 'field_sections',
        'parent_layout' => 'field_sections_page-header',
        'sub_fields'    => array(
            array(
                'key'       => 'field_page_header_title',
                'label'     => 'Heading',
                'name'      => 'pageHeaderTitle',
                'type'      => 'text',
                'required'  => 1
            ),
            array(
                'key'       => 'field_page_header_text',
                'label'     => 'Text',
                'name'      => 'pageHeaderText',
                'type'      => 'text'
            ),
            array(
                'key'       => 'field_page_header_background_image',
                'label'     => 'Background image',
                'name'      => 'pHbGimg',
                'type'      => 'image'
            ),
            array(
                'key'       => 'field_page_header_paddingTop',
                'label'     => 'Padding top',
                'name'      => 'paddingTop',
                'type'      => 'text'
            ),
            array(
                'key'       => 'field_page_header_paddinBottom',
                'label'     => 'Padding bottom',
                'name'      => 'paddingBottom',
                'type'      => 'text'
            ),
            array(
                'key'       => 'field_page_header_sectionAnchor',
                'label'     => 'ID of section (for anchor)',
                'name'      => 'sectionAnchor',
                'type'      => 'text'
            ),
            array(
                'key' => 'field_page_header_xs_display',
                'label' => 'Display for mobile?',
                'name' => 'xsDisplay',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'xsYes' => 'Yes display module for mobile.',
                    'xsNo' => 'Do not display module for mobile.',
                ),
                'default_value' => array(),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
        )
    )
);
