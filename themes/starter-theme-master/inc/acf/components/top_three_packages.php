<?php

acf_add_local_field(
    array(
        'key'           => 'key_top_three_packages',
        'label'         => '',
        'name'          => 'top_three_packages',
        'type'          => 'repeater',
        'layout'        => 'row',
        'min'           => 1,
        'max'           => 1,
        'parent'        => 'field_sections',
        'parent_layout' => 'field_sections_top_three_packages',
        'sub_fields'    => array(
            array(
                'key'       => 'field_top_three_packages_paddingTop',
                'label'     => 'Padding top',
                'name'      => 'paddingTop',
                'type'      => 'text'
            ),
            array(
                'key'       => 'field_top_three_packages_paddingBottom',
                'label'     => 'Padding bottom',
                'name'      => 'paddingBottom',
                'type'      => 'text'
            ),
            array(
                'key'       => 'field_top_three_packages_sectionAnchor',
                'label'     => 'ID of section (for anchor)',
                'name'      => 'sectionAnchor',
                'type'      => 'text'
            ),
            array(
                'key'        => 'field_top_three_packages_list',
                'label'      => 'Carousel for images',
                'name'       => 'tTpL',
                'type'       => 'repeater',
                'min'        => 1,
                'max'        => 8,
                'layout'     => 'row',
                'button_label' => 'Add package',
                'sub_fields' => array(
                    array(
                        'key'       => 'field_top_three_packages_list_Link',
                        'label'     => 'Link and Name of package',
                        'name'      => 'tTpLLink',
                        'type'      => 'link',
                        'required'  => 1
                    ),
                    array(
                        'key'       => 'field_top_three_packages_list_text',
                        'label'     => 'Price in Rupiah',
                        'name'      => 'tTpLPrice',
                        'type'      => 'text'
                    ),
                    array(
                        'key'       => 'field_top_three_packages_list_background_image',
                        'label'     => 'Background image',
                        'name'      => 'tTpLImage',
                        'type'      => 'image'
                    ),
                    array(
                        'key'       => 'field_top_three_packages_list_discount',
                        'label'     => 'Discount in percentage',
                        'name'      => 'tTpLDiscount',
                        'type'      => 'text'
                    ),
                )
            ),
            array(
                'key' => 'field_top_three_packages_topOverlay',
                'label' => 'Top overlay',
                'name' => 'topOverlay',
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
                    'overlayYes' => 'Yes',
                    'overlayNo' => 'No',
                ),
                'default_value' => array(),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_top_three_packages_xs_display',
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
