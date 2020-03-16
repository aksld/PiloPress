<?php

// Register "Image sizes" field group
acf_add_local_field_group( array(
    'key'                   => 'group_styles_image_sizes',
    'title'                 => __( 'Image sizes', 'pilopress' ),
    'fields'                => array(
        array(
            'key'                           => 'field_pip_wp_image_sizes',
            'label'                         => '',
            'name'                          => 'pip_wp_image_sizes',
            'type'                          => 'repeater',
            'instructions'                  => __( 'WordPress image sizes.', 'pilopress' ),
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
            'button_label'                  => '',
            'sub_fields'                    => array(
                array(
                    'key'               => 'field_image_size_name',
                    'label'             => __( 'Name', 'pilopress' ),
                    'name'              => 'name',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'  => '',
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                    'acfe_settings'     => '',
                    'acfe_validate'     => '',
                ),
                array(
                    'key'               => 'field_image_size_width',
                    'label'             => __( 'Width', 'pilopress' ),
                    'name'              => 'width',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
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
                    'key'               => 'field_image_size_height',
                    'label'             => __( 'Height', 'pilopress' ),
                    'name'              => 'height',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
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
                    'key'               => 'field_image_size_crop',
                    'label'             => __( 'Crop', 'pilopress' ),
                    'name'              => 'crop',
                    'type'              => 'true_false',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'  => '',
                    'message'           => '',
                    'default_value'     => 0,
                    'ui'                => 1,
                    'ui_on_text'        => '',
                    'ui_off_text'       => '',
                ),
            ),
        ),
        array(
            'key'                           => 'field_pip_image_sizes',
            'label'                         => '',
            'name'                          => 'pip_image_sizes',
            'type'                          => 'repeater',
            'instructions'                  => __( 'Custom image sizes', 'pilopress' ),
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
            'button_label'                  => __( 'Add custom size', 'pilopress' ),
            'sub_fields'                    => array(
                array(
                    'key'               => 'field_custom_image_size_name',
                    'label'             => __( 'Name', 'pilopress' ),
                    'name'              => 'name',
                    'type'              => 'acfe_slug',
                    'instructions'      => '',
                    'required'          => 1,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
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
                    'key'               => 'field_custom_image_size_width',
                    'label'             => __( 'Width', 'pilopress' ),
                    'name'              => 'width',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 1,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
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
                    'key'               => 'field_custom_image_size_height',
                    'label'             => __( 'Height', 'pilopress' ),
                    'name'              => 'height',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 1,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
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
                    'key'               => 'field_custom_image_size_crop',
                    'label'             => __( 'Crop', 'pilopress' ),
                    'name'              => 'crop',
                    'type'              => 'true_false',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'  => '',
                    'message'           => '',
                    'default_value'     => 0,
                    'ui'                => 1,
                    'ui_on_text'        => '',
                    'ui_off_text'       => '',
                ),
            ),
        ),
    ),
    'location'              => array(
        array(
            array(
                'param'    => 'options_page',
                'operator' => '==',
                'value'    => 'pip-styles-image-sizes',
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
    'acfe_categories'       => array(
        'options' => 'Options',
    ),
) );
