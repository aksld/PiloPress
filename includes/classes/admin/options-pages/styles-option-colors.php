<?php

// Register "Colors" field group
acf_add_local_field_group( array(
    'key'                   => 'group_styles_colors',
    'title'                 => 'Colors',
    'fields'                => array(
        array(
            'key'               => 'field_colors_tab',
            'label'             => __( 'Colors', 'pilopress' ),
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
            'key'                 => 'field_pip_colors',
            'label'               => '',
            'name'                => 'pip_colors',
            'type'                => 'group',
            'instructions'        => 'Common colors.',
            'required'            => 0,
            'conditional_logic'   => 0,
            'wrapper'             => array(
                'width' => '',
                'class' => '',
                'id'    => '',
            ),
            'acfe_permissions'    => '',
            'layout'              => 'row',
            'acfe_seamless_style' => 1,
            'acfe_group_modal'    => 0,
            'sub_fields'          => array(
                array(
                    'key'                   => 'field_blue',
                    'label'                 => '$blue',
                    'name'                  => 'blue',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#007bff',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_indigo',
                    'label'                 => '$indigo',
                    'name'                  => 'indigo',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#6610f2',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_purple',
                    'label'                 => '$purple',
                    'name'                  => 'purple',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#6f42c1',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_pink',
                    'label'                 => '$pink',
                    'name'                  => 'pink',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#e83e8c',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_red',
                    'label'                 => '$red',
                    'name'                  => 'red',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#dc3545',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_orange',
                    'label'                 => '$orange',
                    'name'                  => 'orange',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#fd7e14',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_yellow',
                    'label'                 => '$yellow',
                    'name'                  => 'yellow',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#ffc107',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_green',
                    'label'                 => '$green',
                    'name'                  => 'green',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#28a745',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_teal',
                    'label'                 => '$teal',
                    'name'                  => 'teal',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#20c997',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_cyan',
                    'label'                 => '$cyan',
                    'name'                  => 'cyan',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#17a2b8',
                    'bootstrap_colors_only' => 0,
                ),
            ),
        ),
        array(
            'key'               => 'field_gray__tab',
            'label'             => __( 'Grays', 'pilopress' ),
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
            'key'                 => 'field_pip_grays',
            'label'               => '',
            'name'                => 'pip_grays',
            'type'                => 'group',
            'instructions'        => __( '11 shades of gray.', 'pilopress' ),
            'required'            => 0,
            'conditional_logic'   => 0,
            'wrapper'             => array(
                'width' => '',
                'class' => '',
                'id'    => '',
            ),
            'acfe_permissions'    => '',
            'layout'              => 'row',
            'acfe_seamless_style' => 1,
            'acfe_group_modal'    => 0,
            'sub_fields'          => array(
                array(
                    'key'                   => 'field_white',
                    'label'                 => '$white',
                    'name'                  => 'white',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#ffffff',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_gray_100',
                    'label'                 => '$gray-100',
                    'name'                  => 'gray-100',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#f8f9fa',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_gray_200',
                    'label'                 => '$gray-200',
                    'name'                  => 'gray-200',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#e9ecef',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_gray_300',
                    'label'                 => '$gray-300',
                    'name'                  => 'gray-300',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#dee2e6',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_gray_400',
                    'label'                 => '$gray-400',
                    'name'                  => 'gray-400',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#ced4da',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_gray_500',
                    'label'                 => '$gray-500',
                    'name'                  => 'gray-500',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#adb5bd',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_gray_600',
                    'label'                 => '$gray-600',
                    'name'                  => 'gray-600',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#6c757d',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_gray_700',
                    'label'                 => '$gray-700',
                    'name'                  => 'gray-700',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#495057',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_gray_800',
                    'label'                 => '$gray-800',
                    'name'                  => 'gray-800',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#343a40',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_gray_900',
                    'label'                 => '$gray-900',
                    'name'                  => 'gray-900',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#212529',
                    'bootstrap_colors_only' => 0,
                ),
                array(
                    'key'                   => 'field_black',
                    'label'                 => '$black',
                    'name'                  => 'black',
                    'type'                  => 'color_picker',
                    'instructions'          => '',
                    'required'              => 1,
                    'conditional_logic'     => 0,
                    'wrapper'               => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'acfe_permissions'      => '',
                    'default_value'         => '#000000',
                    'bootstrap_colors_only' => 0,
                ),
            ),
        ),
        array(
            'key'               => 'field_theme_colors_tab',
            'label'             => __( 'Theme colors', 'pilopress' ),
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
            'key'                 => 'field_pip_theme_colors',
            'label'               => '',
            'name'                => 'pip_theme_colors',
            'type'                => 'group',
            'instructions'        => __( 'Bootstrap theme colors.', 'pilopress' ),
            'required'            => 0,
            'conditional_logic'   => 0,
            'wrapper'             => array(
                'width' => '',
                'class' => '',
                'id'    => '',
            ),
            'acfe_permissions'    => '',
            'layout'              => 'row',
            'acfe_seamless_style' => 1,
            'acfe_group_modal'    => 0,
            'sub_fields'          => array(
                array(
                    'key'               => 'field_primary',
                    'label'             => '$primary',
                    'name'              => 'primary',
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
                    'default_value'     => '$blue',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
                array(
                    'key'               => 'field_secondary',
                    'label'             => '$secondary',
                    'name'              => 'secondary',
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
                    'default_value'     => '$gray-600',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
                array(
                    'key'               => 'field_success',
                    'label'             => '$success',
                    'name'              => 'success',
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
                    'default_value'     => '$green',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
                array(
                    'key'               => 'field_danger',
                    'label'             => '$danger',
                    'name'              => 'danger',
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
                    'default_value'     => '$red',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
                array(
                    'key'               => 'field_warning',
                    'label'             => '$warning',
                    'name'              => 'warning',
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
                    'default_value'     => '$yellow',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
                array(
                    'key'               => 'field_info',
                    'label'             => '$info',
                    'name'              => 'info',
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
                    'default_value'     => '$cyan',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
                array(
                    'key'               => 'field_light',
                    'label'             => '$light',
                    'name'              => 'light',
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
                    'default_value'     => '$gray-100',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
                array(
                    'key'               => 'field_dark',
                    'label'             => '$dark',
                    'name'              => 'dark',
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
                    'default_value'     => '$gray-800',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
                array(
                    'key'               => 'field_body_color',
                    'label'             => '$body-color',
                    'name'              => 'body-color',
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
                    'default_value'     => '$gray-900',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ),
                array(
                    'key'               => 'field_text_muted',
                    'label'             => '$text-muted',
                    'name'              => 'text-muted',
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
                    'default_value'     => '$gray-600',
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
                'value'    => 'pip-styles-colors',
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
