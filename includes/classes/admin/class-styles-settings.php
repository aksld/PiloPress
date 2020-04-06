<?php

if ( !class_exists( 'PIP_Styles_Settings' ) ) {
    class PIP_Styles_Settings {
        public function __construct() {
            // WP hooks
            add_action( 'init', array( $this, 'custom_image_sizes' ) );
            add_filter( 'image_size_names_choose', array( $this, 'custom_image_sizes_names' ) );

            // ACF hooks
            add_action( 'acf/save_post', array( $this, 'save_styles_settings' ), 20, 1 );
            add_filter( 'acf/load_value/name=pip_wp_image_sizes', array( $this, 'pre_populate_wp_image_sizes' ), 10, 3 );
            add_filter( 'acf/prepare_field/name=pip_wp_image_sizes', array( $this, 'configure_wp_image_sizes' ) );
        }

        /**
         * Save styles settings
         *
         * @param $post_id
         */
        public function save_styles_settings( $post_id ) {
            if ( strpos( $post_id, 'pip_styles_' ) !== 0 ) {
                return;
            }

            // Save WP image sizes
            self::save_wp_image_sizes();

            // If tailwind folder doesn't exists, return
            if ( !file_exists( PIP_THEME_STYLE_PATH . 'tailwind' ) ) {
                return;
            }

            // Save CSS
            $tailwind_css = get_field( 'pip_tailwind_style', 'pip_styles_tailwind_css' );
            if ( $tailwind_css ) {
                // Get style
                $tailwind_style = $tailwind_css['tailwind_style'];

                // Get include position and get custom fonts
                $base_include_pos = strpos( $tailwind_style, '@tailwind components;' );
                $custom_fonts     = self::scss_custom_fonts();

                // If include position is positive and there is custom fonts
                if ( $base_include_pos !== false && $custom_fonts ) {

                    // Insert @font-face lines
                    $tailwind_style = substr_replace( $tailwind_style, $custom_fonts, $base_include_pos, 0 );
                }

                file_put_contents( PIP_THEME_STYLE_PATH . 'tailwind/tailwind.css', $tailwind_style );
            }

            // Save config
            $tailwind_config = get_field( 'pip_tailwind_config', 'pip_styles_tailwind_config' );
            if ( $tailwind_config ) {
                file_put_contents( PIP_THEME_STYLE_PATH . 'tailwind/tailwind.config.js', $tailwind_config['tailwind_config'] );
            }
        }

        /**
         * Get SCSS to enqueue custom fonts
         *
         * @return string
         */
        private static function scss_custom_fonts() {
            $scss_custom = $tinymce_fonts = '';

            // Get fonts
            if ( have_rows( 'pip_fonts', 'pip_styles_fonts' ) ) {
                while ( have_rows( 'pip_fonts', 'pip_styles_fonts' ) ) {
                    the_row();

                    // Get sub fields
                    $name   = get_sub_field( 'name' );
                    $files  = get_sub_field( 'files' );
                    $weight = get_sub_field( 'weight' );
                    $style  = get_sub_field( 'style' );

                    // If not custom font, skip
                    if ( get_row_layout() !== 'custom_font' ) {
                        continue;
                    }

                    // Build @font-face
                    $scss_custom .= "@font-face {\n";
                    $scss_custom .= 'font-family: "' . $name . '";' . "\n";

                    // Get URLs
                    $url = array();
                    if ( $files ) {
                        foreach ( $files as $file ) {
                            // Format file name
                            $file_name = $file['file']['url'];
                            $file_name = pathinfo( $file_name, PATHINFO_FILENAME );

                            // Get format
                            $format = strtolower( pathinfo( $file['file']['filename'], PATHINFO_EXTENSION ) );

                            // Get post
                            $posts   = get_posts( array(
                                'post_name'      => $file_name,
                                'post_type'      => 'attachment',
                                'posts_per_page' => 1,
                                'fields'         => 'ids',
                            ) );
                            $post_id = reset( $posts );

                            // Store URL
                            $url[] = 'url(' . wp_get_attachment_url( $post_id ) . ') format("' . $format . '")';
                        }
                    }
                    // Implode URLs for src
                    $scss_custom .= 'src: ' . implode( ",\n", $url ) . ";\n";

                    // Font parameters
                    $scss_custom .= 'font-weight: ' . $weight . ";\n";
                    $scss_custom .= 'font-style: ' . $style . ";\n";

                    // End @font-face
                    $scss_custom .= "}\n";

                }
            }

            return $scss_custom . $tinymce_fonts;
        }

        /**
         * Save WP image sizes
         */
        private static function save_wp_image_sizes() {
            $posted_values = acf_maybe_get_POST( 'acf' );
            if ( !$posted_values ) {
                return;
            }

            // Browse values
            foreach ( $posted_values as $key => $posted_value ) {
                $field = acf_get_field( $key );

                // If not WP image sizes, continue
                if ( $field['name'] !== 'pip_wp_image_sizes' ) {
                    continue;
                }

                // Browse each repeater values
                foreach ( $posted_value as $image_key => $image_size ) {

                    // Format posted value array
                    foreach ( $image_size as $field_key => $value ) {
                        $image_field = acf_get_field( $field_key );
                        unset( $image_size[ $field_key ] );
                        $image_size[ $image_field['name'] ] = $value;
                    }

                    // Update values
                    update_option( $image_size['name'] . '_size_w', $image_size['width'] );
                    update_option( $image_size['name'] . '_size_h', $image_size['height'] );
                    update_option( $image_size['name'] . '_crop', $image_size['crop'] );
                }
            }
        }

        /**
         * Pre-populate repeater with WP native image sizes
         *
         * @param $value
         * @param $post_id
         * @param $field
         *
         * @return mixed
         */
        public function pre_populate_wp_image_sizes( $value, $post_id, $field ) {
            $image_sizes = $fields = $new_values = array();

            // Get only WP image sizes
            $all_image_sizes        = PIP_TinyMCE::get_all_image_sizes();
            $additional_image_sizes = wp_get_additional_image_sizes();
            if ( $additional_image_sizes ) {
                foreach ( $additional_image_sizes as $key => $additional_image_size ) {
                    unset( $all_image_sizes[ $key ] );
                }
            }

            // Format image sizes array
            $i = 0;
            if ( !empty( $all_image_sizes ) ) {
                foreach ( $all_image_sizes as $key => $image_size ) {
                    $image_sizes[ $i ]['name']   = $key;
                    $image_sizes[ $i ]['width']  = $image_size['width'];
                    $image_sizes[ $i ]['height'] = $image_size['height'];
                    $image_sizes[ $i ]['crop']   = $image_size['crop'];
                    $i ++;
                }
            }

            // Get sub fields keys
            $sub_fields = acf_get_fields( $field );
            if ( $sub_fields ) {
                foreach ( $sub_fields as $sub_field ) {
                    $fields[ $sub_field['name'] ] = $sub_field['key'];
                }
            }

            // Set new values
            if ( $image_sizes ) {
                foreach ( $image_sizes as $image_key => $image_size ) {
                    if ( $image_size ) {
                        foreach ( $image_size as $key => $value ) {
                            $new_values[ $image_key ][ $fields[ $key ] ] = $value;
                        }
                    }
                }
            }

            return $new_values;
        }

        /**
         * Set max and min for wp_image_sizes field
         *
         * @param $field
         *
         * @return mixed
         */
        public function configure_wp_image_sizes( $field ) {
            $field['min'] = count( $field['value'] );
            $field['max'] = count( $field['value'] );

            return $field;
        }

        /**
         * Register custom image sizes
         */
        public function custom_image_sizes() {
            // Get custom sizes
            $custom_sizes = get_field( 'pip_image_sizes', 'pip_styles_image_sizes' );
            if ( !is_array( $custom_sizes ) ) {
                return;
            }

            // Register custom sizes
            foreach ( $custom_sizes as $size ) {
                add_image_size( $size['name'], $size['width'], $size['height'], $size['crop'] );
            }
        }

        /**
         * Add custom image sizes names
         *
         * @param $size_names
         *
         * @return mixed
         */
        public function custom_image_sizes_names( $size_names ) {
            // Get custom sizes
            $custom_sizes = get_field( 'pip_image_sizes', 'pip_styles_image_sizes' );
            if ( !$custom_sizes ) {
                return $size_names;
            }

            // Add custom sizes names
            foreach ( $custom_sizes as $size ) {
                $size_names[ $size['name'] ] = __( $size['name'], 'pilopress' );
            }

            return $size_names;
        }
    }

    // Instantiate class
    new PIP_Styles_Settings();
}
