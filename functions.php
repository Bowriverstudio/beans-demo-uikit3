

<?php

// Include Beans. Do not remove the line below.
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

}


beans_add_smart_action( "beans_post_title_before_markup", "display_beans_post_title" );
function display_beans_post_title(){

//ddd(beans_get_header_max_width());

    ?>


sssss
    <span uk-icon="icon: check"></span>

    <a href="" uk-icon="icon: heart"></a>


    sss
<?php
}




