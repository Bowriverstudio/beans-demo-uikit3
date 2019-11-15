<?php
/**
 * Beans Demo Uikit3
 *
 * Adds the toolbar above the header.
 *
 * @author Maurice
 * @link   https://www.getbeans.io
 * @license MIT
 * @package Beans_Demo_UiKit3
 */

if ( get_theme_mod('beans_display_toolbar') ) {
    beans_add_smart_action("beans_header_before_markup", "display_topbar");
}
/**
 * Displays the toolbar.
 */
function display_topbar() {
    ?>
    <div class="tm-toolbar">
        <div class="uk-container <?php echo beans_get_header_max_width() ?>">
            <div class="tm-logo uk-float-left uk-text-small">
                <?php echo beans_get_widget_area_output( 'toolbar_left_area' ); ?>
            </div>
            <div class="uk-float-right">
                <?php echo beans_get_widget_area_output( 'toolbar_right_area' ); ?>
            </div>
        </div>
    </div>
    <?php
}
