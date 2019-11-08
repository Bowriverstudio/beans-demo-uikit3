<?php


beans_add_smart_action( "beans_header_before_markup", "display_topbar" );

function display_topbar() {
    ?>
    <div class="tm-toolbar">
        <div class="uk-container">
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
