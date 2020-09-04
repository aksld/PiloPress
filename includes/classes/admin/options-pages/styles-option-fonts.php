<?php

// Register "Fonts" field group
acf_add_local_field_group(
    array(
        'key'                   => 'group_styles_fonts',
        'title'                 => __( 'Fonts', 'pilopress' ),
        'fields'                => array(
            array(
                'acfe_flexible_advanced'                => 1,
                'acfe_flexible_stylised_button'         => 1,
                'acfe_flexible_hide_empty_message'      => 0,
                'acfe_flexible_empty_message'           => '',
                'acfe_flexible_disable_ajax_title'      => 0,
                'acfe_flexible_layouts_thumbnails'      => 0,
                'acfe_flexible_layouts_settings'        => 0,
                'acfe_flexible_layouts_ajax'            => 0,
                'acfe_flexible_layouts_templates'       => 0,
                'acfe_flexible_layouts_previews'        => 0,
                'acfe_flexible_layouts_placeholder'     => 0,
                'acfe_flexible_title_edition'           => 0,
                'acfe_flexible_clone'                   => 0,
                'acfe_flexible_copy_paste'              => 0,
                'acfe_flexible_close_button'            => 0,
                'acfe_flexible_remove_add_button'       => 0,
                'acfe_flexible_remove_delete_button'    => 0,
                'acfe_flexible_lock'                    => 0,
                'acfe_flexible_modal_edition'           => 0,
                'acfe_flexible_modal'                   => array(
                    'acfe_flexible_modal_enabled' => '0',
                ),
                'acfe_flexible_layouts_state'           => '',
                'acfe_flexible_layouts_remove_collapse' => 0,
                'key'                                   => 'field_pip_fonts',
                'label'                                 => '',
                'name'                                  => 'pip_fonts',
                'type'                                  => 'flexible_content',
                'instructions'                          => __( 'Fonts.', 'pilopress' ),
                'required'                              => 0,
                'conditional_logic'                     => 0,
                'wrapper'                               => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'acfe_permissions'                      => '',
                'layouts'                               => array(

                    // Google font
                    'layout_google_font' => array(
                        'key'                           => 'layout_google_font',
                        'name'                          => 'google_font',
                        'label'                         => __( 'Google Font', 'pilopress' ),
                        'display'                       => 'row',
                        'sub_fields'                    => array(
                            array(
                                'key'               => 'field_google_font_name',
                                'label'             => __( 'Name', 'pilopress' ),
                                'name'              => 'name',
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
                                'key'               => 'field_google_font_url',
                                'label'             => __( 'URL', 'pilopress' ),
                                'name'              => 'url',
                                'type'              => 'url',
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
                            ),
                            array(
                                'key'               => 'field_google_font_enqueue',
                                'label'             => __( 'Auto-enqueue', 'pilopress' ),
                                'name'              => 'enqueue',
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
                        'min'                           => '',
                        'max'                           => '',
                        'acfe_flexible_thumbnail'       => false,
                        'acfe_flexible_category'        => false,
                        'acfe_flexible_render_template' => false,
                        'acfe_flexible_render_style'    => false,
                        'acfe_flexible_render_script'   => false,
                        'acfe_flexible_settings'        => false,
                        'acfe_flexible_settings_size'   => 'medium',
                    ),

                    // Custom font
                    'layout_custom_font' => array(
                        'key'                           => 'layout_custom_font',
                        'name'                          => 'custom_font',
                        'label'                         => __( 'Custom font', 'pilopress' ),
                        'display'                       => 'row',
                        'sub_fields'                    => array(
                            array(
                                'key'               => 'field_custom_font_name',
                                'label'             => __( 'Name', 'pilopress' ),
                                'name'              => 'name',
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
                                'key'                           => 'field_custom_font_files',
                                'label'                         => __( 'Files', 'pilopress' ),
                                'name'                          => 'files',
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
                                'acfe_repeater_stylised_button' => 0,
                                'collapsed'                     => '',
                                'min'                           => 0,
                                'max'                           => 0,
                                'layout'                        => 'block',
                                'button_label'                  => 'Add file',
                                'sub_fields'                    => array(
                                    array(
                                        'key'               => 'field_custom_font_file',
                                        'label'             => __( 'File', 'pilopress' ),
                                        'name'              => 'file',
                                        'type'              => 'file',
                                        'instructions'      => '',
                                        'required'          => 0,
                                        'conditional_logic' => 0,
                                        'wrapper'           => array(
                                            'width' => '',
                                            'class' => '',
                                            'id'    => '',
                                        ),
                                        'acfe_permissions'  => '',
                                        'acfe_uploader'     => 'wp',
                                        'return_format'     => 'array',
                                        'library'           => 'all',
                                        'min_size'          => '',
                                        'max_size'          => '',
                                        'mime_types'        => '',
                                    ),
                                ),
                            ),
                            array(
                                'key'               => 'field_custom_font_weight',
                                'label'             => __( 'Weight', 'pilopress' ),
                                'name'              => 'weight',
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
                                'default_value'     => 'normal',
                                'placeholder'       => '',
                                'prepend'           => '',
                                'append'            => '',
                                'maxlength'         => '',
                            ),
                            array(
                                'key'               => 'field_custom_font_style',
                                'label'             => __( 'Style', 'pilopress' ),
                                'name'              => 'style',
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
                                'default_value'     => 'normal',
                                'placeholder'       => '',
                                'prepend'           => '',
                                'append'            => '',
                                'maxlength'         => '',
                            ),
                        ),
                        'min'                           => '',
                        'max'                           => '',
                        'acfe_flexible_thumbnail'       => false,
                        'acfe_flexible_category'        => false,
                        'acfe_flexible_render_template' => false,
                        'acfe_flexible_render_style'    => false,
                        'acfe_flexible_render_script'   => false,
                        'acfe_flexible_settings'        => false,
                        'acfe_flexible_settings_size'   => 'medium',
                    ),

                ),
                'button_label'                          => __( 'Add font', 'pilopress' ),
                'min'                                   => '',
                'max'                                   => '',
            ),
        ),
        'location'              => array(
            array(
                array(
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'pip-styles-fonts',
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
    )
);
