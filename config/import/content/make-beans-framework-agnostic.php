<?php
/**
 * Beans typography page installed after plugin activation.
 *
 * @package beans-typography
 * @author  Maurice Tadros
 * @license GPL-2.0-or-later
 * @link    https://www.bowriverstudio.com/
 */

$table_url = ONBOARDING_IMAGE_URL. 'table-cssframework.png';

return <<<CONTENT

<!-- wp:paragraph -->
<p>The landscape of frontend frameworks has changed since 2015 when we felt that <a href="https://getuikit.com/v2/">UiKit 2 </a>was the <a href="http://beandemouikit3.test/built-with-the-ultimate-front-end-library/">ultimate front end framework</a>. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>To accomplish this <a href="https://github.com/Getbeans/Beans/issues/51">feature request</a>, we decoupled Beans from UiKit 2.  Currently, there are two plugins:</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>Beans Frontend Framework uikit2</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This <a href="https://github.com/Bowriverstudio/beans-frontend-framework-uikit2">plugin</a> allows sites to use continue to use uikit 2 and get the other benefits of Beans 2.0.  It is not planned for active development, just as a way to handle legacy projects.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>Beans Frontend Framework uikit3</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This <a href="https://github.com/Bowriverstudio/beans-frontend-framework-uikit3">plugin</a> allows you to use uikit 3 in your child theme.   This plugin does not include the framework uikit3 it just renderers the HTML structure to the updated syntax and makes a few HTML structural changes to accommodate it.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The child theme includes webpack, and handles the building of uikit 3 along  with any custom scss or jsx.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>Future</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>There are many css frameworks.  We currently use bootstrap for several other projects and plan to port them here.  Of course, the plugin will be opensource as well. </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":36} -->
<figure class="wp-block-image"><img src="$table_url" alt="" class="wp-image-36"/></figure>
<!-- /wp:image -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2>Contribute to the demo content</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We are always looking for contributors who would like to help making Beans better. If you would like to contribute to the demo content, please submit your content&nbsp;via our&nbsp;<a rel="noreferrer noopener" href="https://www.getbeans.io/contact" target="_blank">contact form</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><p>“or contribute with what you do best”</p></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Whether you are a web developer, a screencast expert, a marketing guru or just shine at giving valuable advice, there is room for all types of contributions. So get your hands dirty and help Beans become one of the best framework&nbsp;available.<br></p>
<!-- /wp:paragraph -->

CONTENT;
