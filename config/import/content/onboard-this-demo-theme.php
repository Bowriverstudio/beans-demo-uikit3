<?php
/**
 * Beans typography page installed after plugin activation.
 *
 * @package beans-typography
 * @author  Maurice Tadros
 * @license GPL-2.0-or-later
 * @link    https://www.bowriverstudio.com/
 */

$image_url = ONBOARDING_IMAGE_URL. 'onboarding-screenshot.png';

return <<<CONTENT
<!-- wp:paragraph -->
<p>Onboarding a child theme is trivial with Beans.  Simply install the required plugins, themes then press one button which will import the default navigation, widgets, posts, pages, categories, and settings.  </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>From a fresh copy of wordpress do the following steps.  Either from command line or manually. </p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Step 1: Install Required Plugins</h3>
<!-- /wp:heading -->

<!-- wp:code -->
<pre class="wp-block-code"><code lang="bash" class="language-bash">#In the Plugin Directory
cd wp-content/plugins

#Download and activate the plugin beans-frontend-framework-uikit3
#Download from here https://github.com/Bowriverstudio/beans-frontend-framework-uikit3
wp plugin activate beans-frontend-framework-uikit3</code></pre>
<!-- /wp:code -->

<!-- wp:heading {"level":3} -->
<h3>Install Recommended Plugins</h3>
<!-- /wp:heading -->

<!-- wp:code -->
<pre class="wp-block-code"><code lang="bash" class="language-bash">#From the plugin directory

#Download and activate the plugin beans-frontend-framework-uikit3
#Download from here - https://github.com/Bowriverstudio/Beans-Visual-Hook-Guide
wp plugin activate Beans-Visual-Hook-Guide

wp plugin install code-syntax-block --activate
wp plugin install debug-toolkit --activate
wp plugin install gutenberg --activate
wp plugin install query-monitor --activate</code></pre>
<!-- /wp:code -->

<!-- wp:heading {"level":3} -->
<h3>Optionally Remove Default Wordpress Content</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wordpress by default adds a few widgets and a sample post.  To get an exact copy of this site, simply remove the widgets and default post manually through the dashboard or use the command line.</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code lang="bash" class="language-bash">wp post delete 1
wp widget delete search-2 recent-posts-2  recent-comments-2</code></pre>
<!-- /wp:code -->

<!-- wp:heading {"level":3} -->
<h3>Install Theme</h3>
<!-- /wp:heading -->

<!-- wp:code -->
<pre class="wp-block-code"><code lang="bash" class="language-bash"># Change directory to theme
cd wp-content/themes

# Download Trial version of Beans (not production ready)
# Download from here: https://github.com/Bowriverstudio/Beans/tree/cssframework
# Note the branch

# Download this theme
# From here https://github.com/Bowriverstudio/beans-demo-uikit3
# Activate 
wp theme activate beans-demo-uikit3

</code></pre>
<!-- /wp:code -->

<!-- wp:heading -->
<h2>Onboard</h2>
<!-- /wp:heading -->

<!-- wp:code -->
<pre class="wp-block-code"><code lang="bash" class="language-bash">wp beans onboard</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>or</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":38,"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="$image_url" alt="" class="wp-image-38"/></figure>
<!-- /wp:image -->

CONTENT;
