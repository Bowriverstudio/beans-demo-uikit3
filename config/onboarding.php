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
                'name' => __('Atomic Blocks (Third Party)', 'tm-beans'),
                'slug' => 'atomic-blocks/atomicblocks.php',
                'public_url' => 'https://atomicblocks.com/',
                'icon' => 'https://pbs.twimg.com/profile_images/1022173406106550273/mHoVSnLp_400x400.jpg',
                'description' => 'A Collection of blocks for the new WordPress block editor, also known as Gutenberg. Blocks are chunks of content such as paragraphs, images, galleries, columns, and more. Building with blocks gives you more control to quickly create and launch any kind of site you want!',
            ),
            array(
                'name' => __('Simple Social Icons (Third Party)', 'tm-beans'),
                'slug' => 'simple-social-icons/simple-social-icons.php',
                'public_url' => 'https://wordpress.org/plugins/simple-social-icons/',
                'icon' => 'https://ps.w.org/simple-social-icons/assets/icon-128x128.png',
                'description' => 'Simple Social Icons is an easy to use, customizable way to display icons that link visitors to your various social profiles.',
            ),
            array(
                'name' => __('Query Monitor', 'tm-beans'),
                'slug' => 'query-monitor/query-monitor.php',
                'public_url' => 'https://querymonitor.com/',
                'description' => 'Query Monitor is the developer tools panel for WordPress',
                'install' => 'wp plugin install query-monitor --activate;',
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

        'about' => array(
            'post_title' => 'About Us',
            'post_content' => require dirname(__FILE__) . '/import/content/about.php',
            'post_type' => 'page',
            'post_status' => 'publish',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_meta' => array(
                'beans_layout' => 'c'
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
            ),
            'about' => array(
                'title' => 'About Us',
            ),
            'contact' => array(
                'title' => 'Contact Us',
            ),
            'blocks' => array(
                'title' => 'Block Examples',
            ),
//			'landing'  => array(
//				'title' => 'Landing Page',
//			),
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
