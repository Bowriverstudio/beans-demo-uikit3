<?php
/**
 * Beans theme support.
 *
 * Theme runtime configuration
 *
 */


$default_theme_support = require get_template_directory() . '/config/theme-supports.php';

$child_theme = array(
	// Beans specific.
    'offcanvas-menu' => '',
    'beans-default-styling' => '',
    'beans-template-landing-page' => '',
);

return array_merge($default_theme_support, $child_theme);



