<?php
/**
 * Beans Demo Uikit3
 *
 *
 * @author Maurice
 * @link   https://www.getbeans.io
 * @license MIT
 * @package Beans_Demo_UiKit3
 */
namespace Beans_Demo_UiKit3;

// Include Beans. Do not remove the line below.
require_once( get_template_directory() . '/lib/init.php' );


add_action( 'enqueue_block_editor_assets', __NAMESPACE__.'\enqueue_frontend_and_editor_styles' );
add_action( 'wp_enqueue_scripts', __NAMESPACE__.'\enqueue_frontend_and_editor_styles' );
/**
 * Enqueue style on the frontend and editor
 */
function enqueue_frontend_and_editor_styles(){

    $style_path = '/dist/css/style.css';

    wp_enqueue_style(
        'uikit3-demo-css',
        get_stylesheet_directory_uri() . $style_path,
        array('wp-editor'),
        filemtime( get_stylesheet_directory() . $style_path )
    );
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__.'\enqueue_frontend_only' );
/**
 * Enqueue only on the frontend.
 *
 */
function enqueue_frontend_only(){

    $script_path = '/dist/js/app.js';
    wp_enqueue_script(
        'uikit3-demo-js',
        get_stylesheet_directory_uri() .$script_path,
        '',
        filemtime( get_stylesheet_directory() .$script_path )
    );
}

add_action( 'init', __NAMESPACE__.'\beans_includes' );
/**
 *
 * @return void
 */
function beans_includes()
{

    // Include renderers.
    require_once (CHILD_PATH .'/lib/renderer/fragments/toolbar.php');

    // Include customizer.
    if ( is_customize_preview() ) {
        require_once get_stylesheet_directory().'/lib/admin/wp-customizer.php';
    }
}

// USED FOR TESTING.
//beans_add_attribute('beans_post', 'class', 'remove_top_padding remove_border');

//add_filter('the_content', __NAMESPACE__.'\test');
function test ($content){
    return require ONBOARDING_CONTENT_PATH . 'layouts.php';
}

//beans_remove_action('beans_post_image');

add_filter( 'pre_get_posts', __NAMESPACE__ . '\exclude_category_home' );
/**
 * Excludes posts with specific categories from the homepage.
 * @param $query
 * @return mixed
 */
function exclude_category_home( $query ) {
    if ( $query->is_home ) {
        $ipsum_category = get_category_by_slug('ipsum');
        if( $ipsum_category ){
            $ipsum_id = $ipsum_category->term_id;
         $query->set( 'cat', '-'. $ipsum_id );
         // should we want multiple categories to be removed - $query->set( 'cat', '-5, -9, -23' );
        }
    }
    return $query;
}


