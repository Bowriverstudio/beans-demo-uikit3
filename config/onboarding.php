<?php
/**
 * Beans Demo.
 *
 */
// @TODO Disnel - Issue Onboarding - format Required plugins

return array(
    'title' => __('Beans Demo', 'tm-beans'),
    'description' => __('Beans Demo with UiKit 2 as the frontend framework.', 'tm-beans'),
//    'thumbnail' => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/home-black-white.jpg',
    'demo_url' => 'https://demo.devbrs.com/',
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
                'name' => __('Beans WP Forms Uikit3 addon', 'tm-beans'),
                'slug' => 'beans-wpforms-uikit3-addon/plugin.php',
                'public_url' => 'https://github.com/Bowriverstudio/beans-frontend-framework-uikit3',
                'description' => 'Converts the wpforms styles into uikit3.  In Development.',
                'install' => 'Download from https://github.com/Bowriverstudio/beans-wpforms-uikit3-addon',
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
                'name' => __('Gutenberg', 'tm-beans'),
                'slug' => 'gutenberg/gutenberg.php',
                'public_url' => 'https://wordpress.org/gutenberg/',
                'description' => 'Gutenberg is the new editor for wordpress.  The Gutenberg plugin is a few versions ahead of the wordpress core.',
                'install' => 'wp plugin install gutenberg --activate;',
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
                'name' => __('WP Forms', 'tm-beans'),
                'slug' => 'wpforms-lite/wpforms.php',
                'public_url' => 'https://wpforms.com',
                'description' => 'WordPress Contact Form Builder Plugin',
                'install' => 'wp plugin install wpforms-lite --activate;',
                'required' => false
            ),
            array(
                'name' => __('Rollbar', 'tm-beans'),
                'slug' => 'rollbar/rollbar-php-wordpress.php',
                'public_url' => 'https://en-ca.wordpress.org/plugins/rollbar/',
                'icon' => 'https://ps.w.org/rollbar/assets/icon-256x256.png?rev=1281525',
                'description' => 'Rollbar collects errors that happen in your application, notifies you, and analyzes them so you can debug and fix them.',
                'install' => 'wp plugin install rollbar --activate;',
                'required' => false
            ),
            array(
                'name' => __('Uikit3 Gutenberg blocks for Wordpress', 'tm-beans'),
                'slug' => 'uikit3-blocks-wordpress-plugin/plugin.php',
                'public_url' => 'https://github.com/Bowriverstudio/uikit3-blocks-wordpress-plugin',
                'description' => 'Adds uikit 3 blocks to Gutenberg',
                'install' => 'Download from https://github.com/Bowriverstudio/uikit3-blocks-wordpress-plugin',
                'required' => false
            ),
        ),
    ),

    'content' => array(
        'layouts' => array(
            'post_title' => 'Layouts',
            'post_content' => require dirname(__FILE__) . '/import/content/layouts.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'post_excerpt' => 'Present your content any way you’d like.',
            'featured_image' => CHILD_URL . '/config/import/images/website-layouts.png',
            'comment_status' => 'closed',
            'post_date' => '2019-12-09',
            'post_category' => ['beans-2-0'],
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'c',
                '_beans_remove_actions' => '{"beans_post_image":true}'
            ),
        ),

        'beans-looks-beautiful-on-all-devices' => array(
            'post_title' => 'Beans looks beautiful on all devices',
            'post_content' => require dirname(__FILE__) . '/import/content/beans-looks-beautiful-on-all-devices.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'post_excerpt' => 'Beans looks beautiful on all devices. Not only does the content resize appropriately, Beans also creates, caches and serves images best suited to the device your website is viewed on. Your websites shouldn’t just work on mobile devices, it should be a piece of art you are proud of.',
            'featured_image' => CHILD_URL . '/config/import/images/Responsive.jpg',
            'comment_status' => 'closed',
            'post_date' => '2015-09-10',
            'post_category' => ['beans-1-x'],
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
            'post_excerpt' => 'Search engines love sites that are lightweight, coded semantically and fast loading. Sites built with Beans won’t be lonely on page 50’s of Googles search results. Write good content and let Beans take your website to the first page on google.',
            'comment_status' => 'closed',
            'post_date' => '2015-08-10',
            'post_category' => ['beans-1-x'],
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
            'post_excerpt' => 'Everybody loves one click updates! We love it too, but more importantly, we love when things don’t go wrong. Making sure that your websites don’t break is one of our top priorities.',
            'comment_status' => 'closed',
            'post_category' => ['beans-1-x'],
            'post_date' => '2015-07-10',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'c'
            )
        ),

        'Built-with-the-ultimate-front-end-library' => array(
            'post_title' => 'Built with the ultimate front end library',
            'post_content' => require dirname(__FILE__) . '/import/content/Built-with-the-ultimate-front-end-library.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'featured_image' => CHILD_URL . '/config/import/images/Updates.jpg',
            'post_excerpt' => 'UIkit is the best front-end framework on the market, at least in our opinion. We’ve streamlined it even more by letting you only load the components you need on a per page basis. By doing so, your pages are kept light-weight and load within the blink of an eye.',
            'comment_status' => 'closed',
            'post_category' => ['beans-1-x'],
            'post_date' => '2015-06-10',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'c_sp_ss'
            )
        ),

        'Well-coded-and-easy-to-extend' => array(
            'post_title' => 'Well coded and easy to extend',
            'post_content' => require dirname(__FILE__) . '/import/content/Well-coded-and-easy-to-extend.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'post_category' => ['beans-1-x'],
            'featured_image' => CHILD_URL . '/config/import/images/Extendible.jpg',
            'post_excerpt' => 'Beans theme is built with flexibility and extendability in mind. Every element on the page can be moved, modified or removed. If you are a pro, the powerful API will blow you away.',
            'comment_status' => 'closed',
            'post_date' => '2015-01-10',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'sp_c_ss'
            )
        ),
        'Loads-in-a-blink-of-an-eye' => array(
            'post_title' => 'Loads in a blink of an eye',
            'post_content' => require dirname(__FILE__) . '/import/content/Loads-in-a-blink-of-an-eye.php',
            'post_type' => 'post',
            'post_category' => ['beans-1-x'],
            'post_status' => 'publish',
            'featured_image' => CHILD_URL . '/config/import/images/Speed.jpg',
            'post_excerpt' => 'Search engines like fast, users like fast, you like fast and guess what, we like fast too. Beans is built with speed in mind. Every line of code is optimized to its maximum and all parts of the theme are only loaded when needed. ',
            'post_date' => '2015-05-10',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'sp_ss_c'
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
        'make-beans-framework-agnostic' => array(
            'post_title' => 'Make Beans Framework Agnostic',
            'post_content' => require ONBOARDING_CONTENT_PATH . 'make-beans-framework-agnostic.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'featured_image' => ONBOARDING_IMAGE_URL . 'CSS-framework.jpg',
            'post_excerpt' => 'The landscape of frontend frameworks has changed since 2015 when we felt that UiKit 2 was the ultimate front end framework. Now ... ',
            'post_date' => '2019-11-01',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'c_sp'
            )
        ),
        'beans-2-0' => array(
            'post_title' => 'Not official Beans 2.0 alpha',
            'slug' => 'beans-2-0',
            'post_content' => require ONBOARDING_CONTENT_PATH . 'beans-2.0.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'featured_image' => ONBOARDING_IMAGE_URL . 'beans.png',
            'post_excerpt' => 'Beans 2.0 is coming soon. ',
            'post_date' => '2019-11-21',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'c_sp'
            )
        ),
        'onboarding' => array(
            'post_title' => 'Onboard this demo theme',
            'post_content' => require ONBOARDING_CONTENT_PATH . 'onboard-this-demo-theme.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'featured_image' => ONBOARDING_IMAGE_URL . 'Onboarding.png',
            'post_excerpt' => 'Onboard posts, widgets, categories, pages and settings. ',
            'post_date' => '2019-11-20',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
        ),
        'uikit-3-child-theme' => array(
            'post_title' => 'UiKit 3 child theme',
            'post_content' => require ONBOARDING_CONTENT_PATH . 'uikit-3-child-theme.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'featured_image' => ONBOARDING_IMAGE_URL . 'uikit-meta.png',
            'post_excerpt' => 'Uikit 3 with webpack. ',
            'post_date' => '2019-11-11',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
        ),

        'contact' => array(
            'post_title' => 'Got something on your mind? Tell us!',
            'post_name'  => 'contact',
            'post_content' => require ONBOARDING_CONTENT_PATH . 'contact.php',
            'post_type' => 'page',
            'post_status' => 'publish',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'c'
            )
        ),
        'container-xsmall' => array(
            'post_title' => 'Container xsmall',
            'post_name'  => 'container-xsmall',
            'post_content' => require ONBOARDING_CONTENT_PATH . 'layouts.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_category' => ['ipsum'],
            'post_meta' => array(
                '_beans_body_container' => 'uk-container-xsmall',
                'beans_layout' => 'c'
            )
        ),
        'container-small' => array(
            'post_title' => 'Container Small',
            'post_name'  => 'container-small',
            'post_content' => require ONBOARDING_CONTENT_PATH . 'layouts.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_category' => ['ipsum'],
            'post_meta' => array(
                '_beans_body_container' => 'uk-container-small',
                'beans_layout' => 'c',
                '_beans_remove_actions' => '{"beans_post_image":true}'
            )
        ),
        'container-large' => array(
            'post_title' => 'Container Large',
            'post_name'  => 'container-large',
            'post_content' => require ONBOARDING_CONTENT_PATH . 'layouts.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_category' => ['ipsum'],
            'post_meta' => array(
                '_beans_body_container' => 'uk-container-large',
                'beans_layout' => 'c'
            )
        ),
        'container-default' => array(
            'post_title' => 'Container Default Size',
            'post_name'  => 'container-large',
            'post_content' => require ONBOARDING_CONTENT_PATH . 'layouts.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_category' => ['ipsum'],
            'post_meta' => array(
                'beans_layout' => 'c'
            )
        ),
        'container-expand' => array(
            'post_title' => 'Container Expand',
            'post_name'  => 'container-expand',
            'post_content' => require ONBOARDING_CONTENT_PATH . 'layouts.php',
            'post_type' => 'post',
            'post_status' => 'publish',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_category' => ['ipsum'],
            'post_meta' => array(
                '_beans_body_container' => 'uk-container-expand',
                'beans_layout' => 'c'
            )
        ),
        'landing' => array(
            'post_title'     => 'Landing Page',
            'post_content'   => require ONBOARDING_CONTENT_PATH. 'landing-page.php',
            'post_type'      => 'page',
            'post_status'    => 'publish',
            'page_template'  => 'page-templates/landing.php',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'meta_input'     => [
                'beans_layout' => 'c'
            ],
        ),
    ),

    'navigation_menus' => array(
        'primary' => array(
            'homepage' => array(
                'title' => 'Home',
                'url' => get_site_url()
            ),
            'gutenberg-blocks' => array(
                'title' => 'Gutenberg',
            ),
            'features' => array(
                'title' => 'Features'
            ),
            'contact' => array(
                'title' => 'Contact',
                'parent' => 'features'
            ),
            'landing' => array(
                'title' => 'Landing Page',
                'parent' => 'features'
            ),

            'layout' => array(
                'title' => 'Layout'
            ),
            'layouts' => array(
                'title' => 'Layouts',
                'parent' => 'layout'
            ),


            'beans-looks-beautiful-on-all-devices' => array(
                'title' => 'Single Sidebar Right',
                'parent' => 'layout'
            ),
            'SEO-friendly' => array(
                'title' => 'Single Sidebar Left',
                'parent' => 'layout'
            ),
            'Built-with-the-ultimate-front-end-library' => array(
                'title' => 'Double Sidebar Right',
                'parent' => 'layout'
            ),
            'Loads-in-a-blink-of-an-eye' => array(
                'title' => 'Double Sidebar Left',
                'parent' => 'layout'
            ),
            'Well-coded-and-easy-to-extend' => array(
                'title' => 'Opposite Sidebar',
                'parent' => 'layout'
            ),
            'Stable-updates' => array(
                'title' => 'No Sidebar',
                'parent' => 'layout'
            ),
            'container-xsmall' => array(
                'title' => 'Container xsmall',
                'parent' => 'layout'
            ),
            'container-small' => array(
                'title' => 'Container small',
                'parent' => 'layout'
            ),
            'container-default' => array(
                'title' => 'Container Default',
                'parent' => 'layout'
            ),
            'container-large' => array(
                'title' => 'Container Large',
                'parent' => 'layout'
            ),
            'container-expand' => array(
                'title' => 'Container expand',
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
//            [ @TODO - Format the widget first
//                // wp option get widget_calendar
//                'type' => 'calendar',
//                'args' => [
//                    'title' => ''
//                ],
//            ],
            [
                // wp option get widget_meta
                'type' => 'meta',
                'args' => [
                    'title' => '',
                ],
            ],
        ],

    ],
    'theme_mod' => [
        'beans_display_toolbar' => true,
        'blog_content' => 'summary',
    ],
    'options' => [
        'posts_per_page' => 3,
        'permalink_structure' => '/%postname%/',
    ],
    'category_data' => [
        'categories' => [
            'beans-2-0' => [
                'category_nicename' => 'Beans 2.0',
                'cat_name' => 'Beans 2.0',
            ],
            'beans-1-x' => [
                'category_nicename' => 'Beans 1.x',
                'cat_name' => 'Beans 1.x',
            ],
            'ipsum' => [
                'category_nicename' => 'ipsum',
                'cat_name' => 'ipsum',
            ],
        ],
        'default_category' => 'beans-2-0',
        'remove_uncategorized' => true,
    ]
);
