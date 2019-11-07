<?php
/**
 * Default supported default Beans widget areas. Can be over writable in the child theme.
 *
 * @package Beans\Config
 */

return array(
	array(
		'name' => 'Toolbar Left Area',
		'id' => 'toolbar_left_area',
		'description' => 'Widgets in this area will be displayed in the toolbar left area.',
		'beans_type' => 'grid'
	),
	array(
        'name' => 'Toolbar Right Area',
        'id' => 'toolbar_right_area',
        'description' => 'Widgets in this area will be displayed in the toolbar Right area.',
		'beans_type' => 'grid'
	)
);
