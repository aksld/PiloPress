<?php
/**
 * Variables available in this template
 *
 * @var $success_icon
 * @var $error_icon
 * @var $configurations
 * @var $layouts
 * @var $components
 * @var $add_new_layout
 * @var $add_new_component
 * @var $see_more_layouts
 * @var $all_layouts
 * @var $total_layouts_count
 * @var $menu_items
 */
$acf_admin_field_groups = acf_new_instance( 'ACF_Admin_Field_Groups' );
?>

<?php PIP_Admin::display_pip_navbar(); ?>

<div class="wrap">
    <div class="wp-heading-inline">
        <h1><?php _e( "Dashboard", 'pilopress' ) ?></h1>
    </div>

    <?php // Widgets area ?>
    <div id="dashboard-widgets-wrap">
        <div id="dashboard-widgets" class="metabox-holder">

            <?php // Column 1 ?>
            <div id="postbox-container-1" class="postbox-container">
                <div id="normal-sortables" class="meta-box-sortables ui-sortable">

                    <?php // Configuration ?>
                    <div id="pilopress_configuration" class="postbox">
                        <div class="inside">
                            <h4><strong><?php _e( 'Configuration status', 'pilopress' ); ?></strong></h4>
                            <div class="main config-status">
                                <ul>
                                    <?php foreach ( $configurations as $configuration ) : ?>
                                        <li>
                                            <?php echo $configuration['status'] ? $success_icon : $error_icon; ?>
                                            <?php echo $configuration['label']; ?>
                                            <?php if ( isset( $configuration['status_label'] ) ) : ?>
                                                <?php echo $configuration['status_label']; ?>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php // Documentation links ?>
                    <div id="pilopress_quick_links" class="postbox">
                        <div class="inside">
                            <h3><strong><?php _e( 'Documentations', 'pilopress' ); ?></strong></h3>
                            <div class="main">
                                <ul>
                                    <li>
                                        <i aria-hidden="true" class="dashicons dashicons-external"></i>
                                        <a href="https://pilot-in.github.io/PiloPress/" target="_blank">
                                            GitHub Page Pilo'Press
                                        </a>
                                    </li>
                                    <li>
                                        <i aria-hidden="true" class="dashicons dashicons-external"></i>
                                        <a href="https://www.advancedcustomfields.com/resources/" target="_blank">
                                            Advanced Custom Fields
                                        </a>
                                    </li>
                                    <li>
                                        <i aria-hidden="true" class="dashicons dashicons-external"></i>
                                        <a href="https://wordpress.org/plugins/acf-extended/" target="_blank">
                                            Advanced Custom Fields: Extended
                                        </a>
                                    </li>
                                    <li>
                                        <i aria-hidden="true" class="dashicons dashicons-external"></i>
                                        <a href="https://tailwindcss.com/docs/installation" target="_blank">
                                            Tailwind CSS
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php // Pilot'in ?>
                    <div id="pilopress_pilotin" class="postbox">
                        <div class="inside">
                            <?php echo __( 'Made with &#x2764; by', 'pilopress' ); ?>
                            <a href="https://www.pilot-in.com" target="_blank">Pilot’in</a>
                        </div>
                    </div>

                </div>
            </div>

            <?php // Column 2 ?>
            <div id="postbox-container-2" class="postbox-container">
                <div id="side-sortables" class="meta-box-sortables ui-sortable">

                    <?php // Layouts actions ?>
                    <div id="pilopress_layouts_actions" class="postbox">
                        <div class="inside">
                            <h4>
                                <strong><?php _e( 'Layouts', 'pilopress' ); ?></strong>
                                <span id="pilopress_layouts_count"><?php echo $total_layouts_count; ?></span>
                            </h4>
                            <a href="<?php echo $add_new_layout ?>" class="button button-secondary">
                                <?php _e( 'Add new layout', 'pilopress' ); ?>
                            </a>
                        </div>
                    </div>

                    <?php // Layouts table ?>
                    <div id="pilopress_layouts" class="postbox pilopress-layouts-table">
                        <table class="widefat">
                            <thead>
                            <tr>
                                <th class="pilopress_counter">#</th>
                                <th><strong><?php _e( 'Layout name', 'pilopress' ); ?></strong></th>
                                <th><strong><?php _e( 'Locations', 'pilopress' ); ?></strong></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ( $layouts ) : ?>
                                <?php foreach ( $layouts as $key => $layout ) : ?>
                                    <tr class="<?php echo $key % 2 ? 'alternate' : ''; ?>">
                                        <td class="pilopress_counter"><?php echo $key + 1; ?></td>
                                        <td>
                                            <a href="<?php echo $layout['edit_link']; ?>">
                                                <?php echo $layout['title']; ?>
                                            </a>
                                        </td>
                                        <td><?php $acf_admin_field_groups->render_admin_table_column_locations( $layout['field_group'] ) ?></td>
                                    </tr>
                                    <?php $last_key = $key; ?>
                                <?php endforeach ?>
                            <?php endif; ?>
                            <?php if ( $see_more_layouts ) : ?>
                                <tr class="<?php echo ( $last_key + 1 ) % 2 ? 'alternate' : ''; ?>">
                                    <td></td>
                                    <td>...</td>
                                    <td></td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                            <?php if ( $see_more_layouts ) : ?>
                                <tfoot>
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="<?php echo $all_layouts; ?>" class="button button-secondary">
                                            <?php _e( 'See all layouts', 'pilopress' ); ?>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                </tfoot>
                            <?php endif; ?>
                        </table>
                    </div>

                </div>
            </div>

            <?php // Column 3 ?>
            <div id="postbox-container-3" class="postbox-container">
                <div id="column3-sortables" class="meta-box-sortables ui-sortable">

                    <?php // Components actions ?>
                    <div id="pilopress_components_actions" class="postbox">
                        <div class="inside">
                            <h4>
                                <strong><?php _e( 'Components', 'pilopress' ); ?></strong>
                                <span id="pilopress_components_count"><?php echo count( $components ); ?></span>
                            </h4>
                            <a href="<?php echo $add_new_component; ?>" class="button button-secondary">
                                <?php _e( 'Add new component', 'pilopress' ); ?>
                            </a>
                        </div>
                    </div>

                    <?php // Components table ?>
                    <div id="pilopress_components" class="postbox pilopress-components-table">
                        <table class="widefat">
                            <thead>
                            <tr>
                                <th class="pilopress_counter">#</th>
                                <th><strong><?php _e( 'Component name', 'pilopress' ); ?></strong></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ( $components ) : ?>
                                <?php foreach ( $components as $key => $component ) : ?>
                                    <tr class="<?php echo $key % 2 ? 'alternate' : ''; ?>">
                                        <td class="pilopress_counter"><?php echo $key + 1; ?></td>
                                        <td>
                                            <a href="<?php echo get_edit_post_link( $component->ID ); ?>">
                                                <?php echo $component->post_title; ?>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
