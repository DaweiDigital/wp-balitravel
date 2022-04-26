<?php

acf_add_local_field(
    array(
        'key'           => 'key_page_header_carousel',
        'label'         => '',
        'name'          => 'page_header_carousel',
        'type'          => 'repeater',
        'layout'        => 'row',
        'min'           => 1,
        'max'           => 1,
        'parent'        => 'field_sections',
        'parent_layout' => 'field_sections_page-header-carousel',
        'sub_fields'    => array(
            array(
                'key'       => 'field_page_header_title',
                'label'     => 'Heading',
                'name'      => 'pageHeaderTitle',
                'type'      => 'text',
                'required'  => 1
            ),
            array(
                'key'       => 'field_page_header_title_quote',
                'label'     => 'Heading quote',
                'name'      => 'pageHeaderTitleQuote',
                'type'      => 'text'
            ),
            array(
                'key'       => 'field_page_header_text',
                'label'     => 'Text',
                'name'      => 'pageHeaderText',
                'type'      => 'text'
            ),
            array(
                'key'       => 'field_page_header_linkOne',
                'label'     => 'Banner link one',
                'name'      => 'pageHeaderLinkOne',
                'type'      => 'link'
            ),
            array(
                'key'       => 'field_page_header_linkTwo',
                'label'     => 'Banner link two',
                'name'      => 'pageHeaderLinkTwo',
                'type'      => 'link'
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
                'key'        => 'field_page_header_image_carousel',
                'label'      => 'Carousel for images',
                'name'       => 'pageHeaderCarouselImages',
                'type'       => 'repeater',
                'min'        => 1,
                'max'        => 8,
                'layout'     => 'row',
                'button_label' => 'Add image',
                'sub_fields' => array(
                    array(
                        'key'      => 'field_page_header_image_carousel_item',
                        'label'    => 'Image',
                        'name'     => 'phiCi',
                        'type'     => 'image'
                    ),
                )
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
