<?php
/**
 * Adds a customizer for the toolbar.
 *
 * @author Maurice
 * @link   https://www.getbeans.io
 * @license MIT
 * @package Beans_Demo_UiKit3
 */
namespace Beans\Demo\UiKit3;

beans_add_smart_action('customize_register', __NAMESPACE__ . '\do_register_wp_customize_options');
/**
 * Add Uikit 3 related options to the WordPress Customizer.
 *
 * @since 1.0.0
 *
 * @return void
 */
function do_register_wp_customize_options()
{

    $fields = array(
        array(
            'id' => 'beans_display_toolbar',
            'label' => __('Display Toolbar', 'tm-beans'),
            'type' => 'checkbox',
            'default' => beans_get_customizer_default_value('beans_display_toolbar'),
            'description' => 'Wordpress does not refresh this portion automatically - requires a manual refresh.'
        ),
    );

    beans_register_wp_customize_options(
        $fields,
        'beans_header_layout',
        array(
            'title'    => __( 'Header Layout', 'tm-beans' ),
            'priority' => 1000,
        )
    );
}