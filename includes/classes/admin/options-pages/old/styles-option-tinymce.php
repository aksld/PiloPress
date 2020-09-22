<?php

acf_add_local_field_group( array(
    'key'                   => 'group_styles_tinymce',
    'title'                 => __( 'TinyMCE', 'pilopress' ),
    'fields'                => array(
        array(
            'key'               => 'field_font_style',
            'label'             => __( 'Font Style', 'pilopress' ),
            'name'              => '',
            'type'              => 'tab',
            'instructions'      => '',
            'required'          => 0,
            'conditional_logic' => 0,
            'wrapper'           => array(
                'width' => '',
                'class' => '',
                'id'    => '',
            ),
            'acfe_permissions'  => '',
            'placement'         => 'top',
            'endpoint'          => 0,
        ),
        array(
            'key'                           => 'field_pip_font_style',
            'label'                         => '',
            'name'                          => 'pip_font_style',
            'type'                          => 'repeater',
            'instructions'                  => '',
            'required'                      => 0,
            'conditional_logic'             => 0,
            'wrapper'                       => array(
                'width' => '',
                'class' => '',
                'id'    => '',
            ),
            'acfe_permissions'              => '',
            'acfe_repeater_stylised_button' => 1,
            'collapsed'                     => '',
            'min'                           => 0,
            'max'                           => 0,
            'layout'                        => 'table',
            'button_label'                  => __( 'Add font style', 'pilopress' ),
            'sub_fields'                    => array(
                array(
                    'key'               => 'field_font_style_label',
                    'label'             => __( 'Label', 'pilopress' ),
                    'name'              => 'label',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '30',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'  => '',
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
                array(
                    'key'               => 'field_font_style_classes',
                    'label'             => __( 'Class(es) to apply', 'pilopress' ),
                    'name'              => 'classes_to_apply',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '70',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'  => '',
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
            ),
        ),
        array(
            'key'               => 'field_font_family',
            'label'             => __( 'Font Family', 'pilopress' ),
            'name'              => '',
            'type'              => 'tab',
            'instructions'      => '',
            'required'          => 0,
            'conditional_logic' => 0,
            'wrapper'           => array(
                'width' => '',
                'class' => '',
                'id'    => '',
            ),
            'acfe_permissions'  => '',
            'placement'         => 'top',
            'endpoint'          => 0,
        ),
        array(
            'key'                           => 'field_pip_font_family',
            'label'                         => '',
            'name'                          => 'pip_font_family',
            'type'                          => 'repeater',
            'instructions'                  => '',
            'required'                      => 0,
            'conditional_logic'             => 0,
            'wrapper'                       => array(
                'width' => '',
                'class' => '',
                'id'    => '',
            ),
            'acfe_permissions'              => '',
            'acfe_repeater_stylised_button' => 1,
            'collapsed'                     => '',
            'min'                           => 0,
            'max'                           => 0,
            'layout'                        => 'table',
            'button_label'                  => __( 'Add font family', 'pilopress' ),
            'sub_fields'                    => array(
                array(
                    'key'               => 'field_font_family_label',
                    'label'             => __( 'Label', 'pilopress' ),
                    'name'              => 'label',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '30',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'  => '',
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
                array(
                    'key'               => 'field_font_family_classes',
                    'label'             => __( 'Class(es) to apply', 'pilopress' ),
                    'name'              => 'classes_to_apply',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '70',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'  => '',
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
            ),
        ),
        array(
            'key'               => 'field_font_color',
            'label'             => __( 'Font Color', 'pilopress' ),
            'name'              => '',
            'type'              => 'tab',
            'instructions'      => '',
            'required'          => 0,
            'conditional_logic' => 0,
            'wrapper'           => array(
                'width' => '',
                'class' => '',
                'id'    => '',
            ),
            'acfe_permissions'  => '',
            'placement'         => 'top',
            'endpoint'          => 0,
        ),
        array(
            'key'                           => 'field_pip_font_color',
            'label'                         => '',
            'name'                          => 'pip_font_color',
            'type'                          => 'repeater',
            'instructions'                  => '',
            'required'                      => 0,
            'conditional_logic'             => 0,
            'wrapper'                       => array(
                'width' => '',
                'class' => '',
                'id'    => '',
            ),
            'acfe_permissions'              => '',
            'acfe_repeater_stylised_button' => 1,
            'collapsed'                     => '',
            'min'                           => 0,
            'max'                           => 0,
            'layout'                        => 'table',
            'button_label'                  => __( 'Add font color', 'pilopress' ),
            'sub_fields'                    => array(
                array(
                    'key'               => 'field_font_color_label',
                    'label'             => __( 'Label', 'pilopress' ),
                    'name'              => 'label',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '30',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'  => '',
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
                array(
                    'key'               => 'field_font_color_classes',
                    'label'             => __( 'Class(es) to apply', 'pilopress' ),
                    'name'              => 'classes_to_apply',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '70',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'  => '',
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
            ),
        ),
        array(
            'key'               => 'field_button',
            'label'             => __( 'Button', 'pilopress' ),
            'name'              => '',
            'type'              => 'tab',
            'instructions'      => '',
            'required'          => 0,
            'conditional_logic' => 0,
            'wrapper'           => array(
                'width' => '',
                'class' => '',
                'id'    => '',
            ),
            'acfe_permissions'  => '',
            'placement'         => 'top',
            'endpoint'          => 0,
        ),
        array(
            'key'                           => 'field_pip_button',
            'label'                         => '',
            'name'                          => 'pip_button',
            'type'                          => 'repeater',
            'instructions'                  => '',
            'required'                      => 0,
            'conditional_logic'             => 0,
            'wrapper'                       => array(
                'width' => '',
                'class' => '',
                'id'    => '',
            ),
            'acfe_permissions'              => '',
            'acfe_repeater_stylised_button' => 1,
            'collapsed'                     => '',
            'min'                           => 0,
            'max'                           => 0,
            'layout'                        => 'table',
            'button_label'                  => __( 'Add button style', 'pilopress' ),
            'sub_fields'                    => array(
                array(
                    'key'               => 'field_custom_button_label',
                    'label'             => __( 'Label', 'pilopress' ),
                    'name'              => 'label',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '30',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'  => '',
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
                array(
                    'key'               => 'field_custom_button_classes',
                    'label'             => __( 'Class(es) to apply', 'pilopress' ),
                    'name'              => 'classes_to_apply',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '70',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'  => '',
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
            ),
        ),
    ),
    'location'              => array(
        array(
            array(
                'param'    => 'options_page',
                'operator' => '==',
                'value'    => 'pip-styles-tinymce',
            ),
        ),
    ),
    'menu_order'            => 0,
    'position'              => 'normal',
    'style'                 => 'seamless',
    'label_placement'       => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen'        => '',
    'active'                => true,
    'description'           => '',
    'acfe_display_title'    => '',
    'acfe_autosync'         => '',
    'acfe_permissions'      => '',
    'acfe_form'             => 0,
    'acfe_meta'             => '',
    'acfe_note'             => '',
) );
