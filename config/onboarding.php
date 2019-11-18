<?php
/**
 * Genesis Sample.
 *
 * Onboarding config to load plugins and homepage content on theme activation.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */
// @TODO Disnel - Issue Onboarding - format Required plugins
// @TODO Disnel - Onboarding: Add Pages.

return array(
    'title' => __('Beans Demo', 'tm-beans'),
    'description' => __('Beans Demo with UiKit 2 as the frontend framework.', 'tm-beans'),
    'thumbnail' => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/home-black-white.jpg',
    'demo_url' => 'https://demo.studiopress.com/genesis-sample/',
    'dependencies' => array(
        'plugins' => array(

           array(
               'name' => __('Beans Frontend Framework uikit3', 'tm-beans'),
               'slug' => 'beans-frontend-framework-uikit3/beans-frontend-framework-uikit3.php',
               'public_url' => 'https://github.com/Bowriverstudio/beans-frontend-framework-uikit3',
               'description' => 'Handles rendering the for incredibly powerful Beans Framework with uikit3.',
               'install' => 'Download from https://github.com/Bowriverstudio/beans-frontend-framework-uikit3',
               'required' => true
           ),

            array(
                'name' => __('Beans Visual Hook Guide', 'tm-beans'),
                'slug' => 'beans-visual-hook-guide/beans-visual-hook-guide.php',
                'public_url' => 'https://wordpress.org/plugins/beans-visual-hook-guide/',
                'icon' => 'https://ps.w.org/beans-visual-hook-guide/assets/icon-256x256.png?rev=1841179',
                'description' => 'A Plugin tool to aid theme development with the innovative, flexible, and incredibly powerful Beans Framework.',
                'install' => 'Download from https://github.com/Bowriverstudio/Beans-Visual-Hook-Guide - there is a small patch',
                'required' => false
            ),
            array(
                'name' => __('Debug Toolkit', 'tm-beans'),
                'slug' => 'debug-toolkit/debug-toolkit.php',
                'public_url' => 'https://wordpress.org/plugins/debug-toolkit/',
                'icon' => 'https://ps.w.org/debug-toolkit/assets/icon-256x256.png?rev=2047222',
                'description' => 'Debug Toolkit makes debugging your code easier and more enjoyable.',
                'install' => 'wp plugin install debug-toolkit --activate;',
                'required' => false
            ),
            array(
                'name' => __('Query Monitor', 'tm-beans'),
                'slug' => 'query-monitor/query-monitor.php',
                'public_url' => 'https://querymonitor.com/',
                'description' => 'Query Monitor is the developer tools panel for WordPress',
                'install' => 'wp plugin install query-monitor --activate;',
                'required' => false
            ),
            array(
                'name' => __('Rollbar', 'tm-beans'),
                'slug' => 'rollbar/rollbar-php-wordpress.php',
                'public_url' => 'https://en-ca.wordpress.org/plugins/rollbar/',
                'icon' => 'https://ps.w.org/rollbar/assets/icon-256x256.png?rev=1281525',
                'description' => 'Rollbar collects errors that happen in your application, notifies you, and analyzes them so you can debug and fix them.',
                'required' => false
            ),
        ),
    ),

    'content' => array(
        'beans-looks-beautiful-on-all-devices' => array(
            'post_title' => 'Beans looks beautiful on all devices',
            'post_content' => require dirname(__FILE__) . '/import/content/beans-looks-beautiful-on-all-devices.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'featured_image' => CHILD_URL . '/config/import/images/Responsive.jpg',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'c_sp'
            )
        ),
        'SEO-friendly' => array(
            'post_title' => 'SEO friendly',
            'post_content' => require dirname(__FILE__) . '/import/content/SEO-friendly.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'featured_image' => CHILD_URL . '/config/import/images/Seo.jpg',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'sp_c'
            )
        ),
        'Stable-updates' => array(
            'post_title' => 'Stable updates',
            'post_content' => require dirname(__FILE__) . '/import/content/Stable-updates.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'featured_image' => CHILD_URL . '/config/import/images/Updates.jpg',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'c'
            )
        ),

        'Built-with-the-ultimate-front-end-library' => array(
            'post_title' => 'Stable updates',
            'post_content' => require dirname(__FILE__) . '/import/content/Built-with-the-ultimate-front-end-library.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'featured_image' => CHILD_URL . '/config/import/images/Updates.jpg',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'c_sp_ss'
            )
        ),

        'Loads-in-a-blink-of-an-eye' => array(
            'post_title' => 'Stable updates',
            'post_content' => require dirname(__FILE__) . '/import/content/Loads-in-a-blink-of-an-eye.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'featured_image' => CHILD_URL . '/config/import/images/Speed.jpg',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'c_sp_ss'
            )
        ),

        'typography' => array(
            'post_title' => 'Beans typography',
            'post_content' => require dirname(__FILE__) . '/import/content/typography.php',
            'post_type' => 'page',
            'post_status' => 'publish',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'c'
            )
        ),
        'gutenberg-blocks' => array(
            'post_title' => 'Gutenberg Blocks',
            'post_content' => require dirname(__FILE__) . '/import/content/gutenberg-blocks.php',
            'post_type' => 'page',
            'post_status' => 'publish',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'c'
            )
        ),


    ),

    'navigation_menus' => array(
        'primary' => array(
            'homepage' => array(
                'title' => 'Home',
                'url'   => get_site_url()
            ),
            'gutenberg-blocks' => array(
                'title' => 'Gutenberg',
            ),

            'layout' => array(
                'title' => 'Layout'
            ),
            'Loads-in-a-blink-of-an-eye' => array(
                'title' => 'Loads in a blink of an eye',
                'parent' => 'layout'
            ),
            'typography' => array(
                'title' => 'Typography',
            ),

        ),
    ),
    'widgets' => [
        'toolbar_left_area' => [
            [
                // wp option get widget_custom_html
                'type' => 'custom_html',
                'args' => [
                    'title' => '',
                    'content' => '<a href="http://www.getbeans.io" title="Beans site"><img src="https://demo.getbeans.io/uploads/Beans-logo-white.png" alt="Beans"></a><span><i uk-icon="icon:triangle-right"></i><a href="/" title="Beans Demos">Demo</a></span>',
                    'filter' => 1,
                    'visual' => 1,
                ],
            ],
        ],
        'toolbar_right_area' => [
            [
                'type' => 'custom_html',
                'args' => [
                    'title' => '',
                    'content' => '<a class="tm-purchase uk-float-left" href="http://www.getbeans.io/download-beans/?no_cache=1"><i uk-icon="icon:download"></i> <span>Download</span></a>',
                    'filter' => 1,
                    'visual' => 1,
                ],
            ],
        ],
        'sidebar_primary' => [
            [
                // wp option get widget_search
                'type' => 'search',
                'args' => [
                    'title' => '',
                ],
            ],
            [
                // wp option get widget_recent-posts
                'type' => 'recent-posts',
                'args' => [
                    'title' => '',
                    'number' => 3,
                    'show_date' => false
                ],
            ],
            [
                // wp option get widget_archives
                'type' => 'archives',
                'args' => [
                    'title' => '',
                ],
            ],
            [
                // wp option get widget_categories
                'type' => 'categories',
                'args' => [
                    'title' => '',
                    'count' => ''
                ],
            ],
        ],
        'sidebar_secondary' => [
            [
                // wp option get widget_calendar
                'type' => 'calendar',
                'args' => [
                    'title' => ''
                ],
            ],
            [
                // wp option get widget_meta
                'type' => 'meta',
                'args' => [
                    'title' => '',
                ],
            ],
        ],

    ],
);
