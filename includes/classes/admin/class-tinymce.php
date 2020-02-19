<?php

if ( !class_exists( 'PIP_TinyMCE' ) ) {
    class PIP_TinyMCE {
        public function __construct() {
            // WP hooks
            add_action( 'wp_head', array( $this, 'custom_fonts_stylesheets' ) );
            add_action( 'admin_head', array( $this, 'custom_fonts_stylesheets' ) );
            add_action( 'admin_init', array( $this, 'add_custom_fonts' ) );
            add_filter( 'tiny_mce_before_init', array( $this, 'before_tiny_mce_init' ) );
            add_filter( 'mce_external_plugins', array( $this, 'editor_button_script' ) );
            add_filter( 'acf/fields/wysiwyg/toolbars', array( $this, 'customize_toolbar' ) );
        }

        /**
         * Enqueue custom fonts
         */
        public function custom_fonts_stylesheets() {
            if ( have_rows( 'pip_fonts', 'option' ) ) {
                while ( have_rows( 'pip_fonts', 'option' ) ) {
                    the_row();

                    // If not google font, skip
                    if ( get_row_layout() !== 'google_font' ) {
                        continue;
                    }

                    // Get sub fields
                    $enqueue = get_sub_field( 'enqueue' );
                    $url     = get_sub_field( 'url' );

                    // Auto enqueue to false
                    if ( !$enqueue ) {
                        continue;
                    }

                    // Add google font
                    echo '<link href="' . $url . '" rel="stylesheet">';
                }
            }
        }

        /**
         * Add custom fonts to editor
         */
        public function add_custom_fonts() {
            if ( have_rows( 'pip_fonts', 'option' ) ) {
                while ( have_rows( 'pip_fonts', 'option' ) ) {
                    the_row();

                    // If not google font, skip
                    if ( get_row_layout() !== 'google_font' ) {
                        continue;
                    }

                    // Get sub fields
                    $enqueue = get_sub_field( 'enqueue' );
                    $url     = get_sub_field( 'url' );

                    // Auto enqueue to false
                    if ( !$enqueue ) {
                        continue;
                    }

                    // Enqueue google font
                    add_editor_style( str_replace( ',', '%2C', $url ) );
                }
            }
        }

        /**
         * Customize tinyMCE
         *
         * @param $options
         *
         * @return mixed
         */
        public function before_tiny_mce_init( $options ) {
            // Formats
            $options['block_formats'] = apply_filters( 'pip/editor/block_formats', 'Paragraph=p;H1 tag=h1;H2 tag=h2;H3 tag=h3;H4 tag=h4;H5 tag=h5;H6 tag=h6;Address=address;Preformatted=pre' );

            // Add HTML tags as valid
            $options['valid_elements']          = '*[*]';
            $options['extended_valid_elements'] = '*[*]';

            // Font sizes
            $options['fontsize_formats'] = apply_filters( 'pip/editor/fontsize_formats', '1rem 1.5rem 2rem' );

            // Fonts
            // PILO_TODO: send to tinymce-custom-styles.js
//            $fonts = '';
//            if ( have_rows( 'pip_fonts', 'option' ) ) {
//                while ( have_rows( 'pip_fonts', 'option' ) ) {
//                    the_row();
//
//                    // Get font name
//                    $name = get_sub_field( 'name' );
//
//                    // Add custom font
//                    $fonts .= $name . '=' . $name . ';';
//                }
//            }
//            $options['font_formats'] = $fonts;

            // Add menu bar
            $options['menubar'] = true;

            return $options;
        }

        /**
         * Customize toolbars
         *
         * @param $toolbars
         *
         * @return mixed
         */
        public function customize_toolbar( $toolbars ) {
            // Remove basic toolbar
            unset( $toolbars['Basic'] );

            // Move all items on same line
            $second_line         = $toolbars['Full'][2];
            $toolbars['Full'][1] = array_merge( $toolbars['Full'][1], $second_line );
            unset( $toolbars['Full'][2] );

            // Remove expand button
            if ( ( $key = array_search( 'wp_adv', $toolbars['Full'][1] ) ) !== false ) {
                unset( $toolbars['Full'][1][ $key ] );
            }

            // Ordered buttons to add
            $buttons_to_add = array(
                'fontsizeselect',
                'styleselect',
                '_pip_shortcodes_button',
                'pip_colors',
                'pip_fonts',
                'pip_styles',
            );
            // Add buttons
            foreach ( $buttons_to_add as $key => $button ) {
                array_splice( $toolbars['Full'][1], $key + 1, 0, $button );
            }

            // Add media button
            $toolbars['Full'][1][] = 'wp_add_media';

            // Code modal - CodeMirror
            $toolbars['Full'][1][] = 'code';

            return $toolbars;
        }

        /**
         * Add editor options
         *
         * @param $scripts
         *
         * @return mixed
         */
        public function editor_button_script( $scripts ) {
            $scripts['_pip_shortcodes'] = _PIP_URL . 'assets/js/editor.js';
            $scripts['pip_colors']      = _PIP_URL . 'assets/js/tinymce-custom-styles.js';
            $scripts['pip_fonts']       = _PIP_URL . 'assets/js/tinymce-custom-styles.js';
            $scripts['pip_styles']      = _PIP_URL . 'assets/js/tinymce-custom-styles.js';

            return $scripts;
        }
    }

    // Instantiate class
    new PIP_TinyMCE();
}