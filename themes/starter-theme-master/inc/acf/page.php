<?php

acf_add_local_field_group( array (
    'key'    => 'page_group',
    'title'  => 'Nastavení stránky',
    'fields' => array (
        array(
            'key'       => 'field_breadcrumbPostType',
            'label'     => 'Vyberte navigaci',
            'name'      => 'breadcrumbPostType',
            'type'      => 'post_object',
            'post_type' => array(
                0 => 'breadcrumb',
            ),
            'taxonomy' => '',
            'allow_null' => 0,
            'multiple' => 0,
            'return_format' => 'object',
            'ui' => 1,
        ),
    ),
    'location' => array (
        array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'reference',
			),
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'solutions',
			),
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'interviews',
			),
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'platforms',
			),
		),
    ),
    'label_placement' => 'left',
) );