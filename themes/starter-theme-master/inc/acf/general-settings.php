<?php

acf_add_local_field_group(array(
    'key'      => 'general_settings_group',
    'title'    => 'General settings',
    'fields'   => array(
        array(
            'key'          => 'field_general_tab',
            'label'        => 'General',
            'name'         => 'general_tab',
            'type'         => 'tab',
            'placement'    => 'left'
        ),
        array(
            'key'      => 'field_general_tab_socials_facebook',
            'label'    => 'Facebook link',
            'name'     => 'facebook',
            'type'     => 'link'
        ),
        array(
            'key'      => 'field_general_tab_socials_instagram',
            'label'    => 'Instagram link',
            'name'     => 'instagram',
            'type'     => 'link'
        ),
        array(
            'key'      => 'field_general_tab_socials_youtube',
            'label'    => 'Youtube link',
            'name'     => 'youtube',
            'type'     => 'link'
        ),
        array(
            'key'          => 'field_general_tab_contact_address',
            'label'        => 'Address',
            'name'         => 'address',
            'type'         => 'link',
        ),
        array(
            'key'          => 'field_general_tab_contact_phone',
            'label'        => 'WhatsApp',
            'name'         => 'telNumber',
            'type'         => 'text',
        ),
        array(
            'key'          => 'field_general_tab_contact_email',
            'label'        => 'Email',
            'name'         => 'email',
            'type'         => 'text',
        ),
        array(
            'key'          => 'field_general_navbar_tab',
            'label'        => 'Header',
            'name'         => 'header_tab',
            'type'         => 'tab',
            'placement'    => 'left'
        ),
        array(
            'key'          => 'field_general_navbar_tab_link',
            'label'        => 'Button link',
            'name'         => 'header_tab_link_one',
            'type'         => 'link',
        ),
        array(
            'key'          => 'field_general_footer_packages',
            'label'        => 'Footer Packages',
            'name'         => 'footer_packages_tab',
            'type'         => 'tab',
            'placement'    => 'left'
        ),
        array(
            'key'        => 'field_footerTabPackages',
            'label'      => 'Footer packages',
            'name'       => 'footerTabPackages',
            'type'       => 'repeater',
            'min'        => 1,
            'max'        => 8,
            'layout'     => 'row',
            'button_label' => 'Add item',
            'sub_fields' => array(
                array(
                    'key'      => 'field_footerTabPackagesImage',
                    'label'    => 'Image',
                    'name'     => 'footerTabPackagesImage',
                    'type'     => 'image'
                ),
                array(
                    'key'      => 'field_footerTabPackagesDiscount',
                    'label'    => 'Discount',
                    'name'     => 'footerTabPackagesDiscount',
                    'type'     => 'text'
                ),
                array(
                    'key'      => 'field_footerTabPackagesName',
                    'label'    => 'Name',
                    'name'     => 'footerTabPackagesName',
                    'type'     => 'text'
                ),
                array(
                    'key'      => 'field_footerTabPackagesValid',
                    'label'    => 'Valid date',
                    'name'     => 'footerTabPackagesValid',
                    'type'     => 'text'
                ),
                array(
                    'key'      => 'field_footerTabPackagesLink',
                    'label'    => 'Link',
                    'name'     => 'footerTabPackagesLink',
                    'type'     => 'link'
                ),
            )
        ),
        array(
            'key'          => 'field_general_footer_tab',
            'label'        => 'Footer',
            'name'         => 'footer_tab',
            'type'         => 'tab',
            'placement'    => 'left'
        ),
        array(
            'key'          => 'field_general_footer_cta',
            'label'        => 'Nadpis CTA footer',
            'name'         => 'footerCtaTitle',
            'type'         => 'text',
        ),
        array(
            'key'          => 'field_general_footer_cta_link',
            'label'        => 'Text CTA footer',
            'name'         => 'footerCtaLink',
            'type'         => 'text',
        ),
        array(
            'key'          => 'field_general_footer_tab_email_text',
            'label'        => 'Text k emailu',
            'name'         => 'footer_email_text',
            'type'         => 'text',
        ),
        array(
            'key'          => 'field_general_footerFirstBoxTitle',
            'label'        => 'BOX 1: Title',
            'name'         => 'footerFirstBoxTitle',
            'type'         => 'text',
        ),
        array(
            'key'          => 'field_general_footerFirstBoxText',
            'label'        => 'BOX 2: Text',
            'name'         => 'footerFirstBoxText',
            'type'         => 'text',
        ),
        array(
            'key'          => 'field_general_footerSecondBoxTitle',
            'label'        => 'BOX 2: Title',
            'name'         => 'footerSecondBoxTitle',
            'type'         => 'text',
        ),
        array(
            'key'          => 'field_general_footerSecondBoxText',
            'label'        => 'BOX 2: Text',
            'name'         => 'footerSecondBoxText',
            'type'         => 'text',
        ),
        array(
            'key'          => 'field_general_footerThirdBoxTitle',
            'label'        => 'BOX 3: Title',
            'name'         => 'footerThirdBoxTitle',
            'type'         => 'text',
        ),
        array(
            'key'        => 'field_footerTabMenu',
            'label'      => 'Footer menu',
            'name'       => 'footerTabMenu',
            'type'       => 'repeater',
            'min'        => 1,
            'max'        => 8,
            'layout'     => 'row',
            'button_label' => 'Add item',
            'sub_fields' => array(
                array(
                    'key'      => 'field_footerTabMenuLink',
                    'label'    => 'Link',
                    'name'     => 'footerTabMenuLink',
                    'type'     => 'link'
                ),
            )
        ),
        array(
            'key'          => 'field_general_footerFourthBoxTitle',
            'label'        => 'BOX 4: Title',
            'name'         => 'footerFourthBoxTitle',
            'type'         => 'text',
        ),
        array(
            'key'          => 'field_general_footerFourthBoxText',
            'label'        => 'BOX 4: Text',
            'name'         => 'footerFourthBoxText',
            'type'         => 'text',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'obecne-nastaveni',
            ),
        ),
    ),
    'menu_order'      => 0,
    'position'        => 'normal'
));
