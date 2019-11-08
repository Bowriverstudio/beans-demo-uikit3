

<?php

// Include Beans. Do not remove the line below.
use function Gutenberg_Courses\Example_Blocks\_get_plugin_directory;
use function Gutenberg_Courses\Example_Blocks\_get_plugin_url;

require_once( get_template_directory() . '/lib/init.php' );

//require_once( get_stylesheet_directory() . '/lib/renderer/fragments/toolbar.php' );


add_action( 'wp_enqueue_scripts', 'beans_demo_enqueue' );


function beans_demo_enqueue(){

    $script_path = '/dist/js/app.js';
    wp_enqueue_script(
        'uikit3-demo-js',
        get_stylesheet_directory_uri() .$script_path,
        array(),
        filemtime( get_stylesheet_directory() .$script_path )
    );

    // Enqueue optional editor only styles
    $style_path = '/dist/css/style.css';

    wp_enqueue_style(
        'uikit3-demo-css',
         get_stylesheet_directory_uri() . $style_path,
        [ ],
        filemtime( get_stylesheet_directory() . $style_path )
    );


//    wp_enqueue_script(
//        'uikit3',
//        'https://cdn.jsdelivr.net/npm/uikit@3.2.2/dist/js/uikit.min.js',
//        '',
//        '1'
//    );
//
//    wp_enqueue_script(
//        'uikit3_icons',
//        'https://cdn.jsdelivr.net/npm/uikit@3.2.2/dist/js/uikit-icons.min.js',
//        '',
//        '1'
//    );
//
//
//    wp_enqueue_style(
//        'uikit3_css',
//        'https://cdn.jsdelivr.net/npm/uikit@3.2.2/dist/css/uikit.min.css',
//        '',
//        '1'
//
//    );

}



