<?php
/**
 * Beans typography page installed after plugin activation.
 *
 * @package beans-typography
 * @author  Maurice Tadros
 * @license GPL-2.0-or-later
 * @link    https://www.bowriverstudio.com/
 */

return <<<CONTENT

<!-- wp:paragraph -->
<p>UiKit 3, uses jsx and scss which is not supported by the Beans 1.x compiler.  We decided it was easier to use webpack instead of refactoring the compiler.   The setup we used is based on this <a href="https://github.com/manchenkoff/webpack-uikit">repo</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1>Webpack UIKit 3 app template</h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3>Description</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This project contains preconfigured Webpack 4 to work with the following tasks:</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>Compile&nbsp;<code>SCSS</code>&nbsp;to&nbsp;<code>CSS</code></li><li>Optimize images (<code>*.png</code>,&nbsp;<code>*.jpeg</code>,&nbsp;<code>*.gif</code>)</li><li>Convert&nbsp;<code>SVG</code>&nbsp;into inline&nbsp;<code>'data:image'</code>&nbsp;format</li><li>Fonts loader</li><li>Automatic copy&nbsp;<code>static</code>&nbsp;directory to the&nbsp;<code>dist</code>&nbsp;directory</li><li>Production optimization (styles, JavaScript, images)</li><li>Build source maps</li></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3><a href="https://github.com/manchenkoff/webpack-uikit#includes"></a>Includes</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>UIKit 3 (SCSS, JS)</li></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3><a href="https://github.com/manchenkoff/webpack-uikit#installation"></a>Installation</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>Execute a command from the root directory</li></ul>
<!-- /wp:list -->

<!-- wp:code -->
<pre class="wp-block-code"><code lang="bash" class="language-bash">npm install</code></pre>
<!-- /wp:code -->

<!-- wp:list -->
<ul><li>Use '<code>index.html</code>' as home page</li><li>Write Your own JavaScript in the file:&nbsp;<code>src/js/app.js</code></li><li>Also Your styles may be placed in the SCSS file:&nbsp;<code>src/scss/app.scss</code></li><li>Then run the following command to build&nbsp;<code>dev</code>&nbsp;bundle:</li></ul>
<!-- /wp:list -->

<!-- wp:code -->
<pre class="wp-block-code"><code lang="bash" class="language-bash">npm run build</code></pre>
<!-- /wp:code -->

<!-- wp:list -->
<ul><li><strong>Good luck!</strong></li></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3><a href="https://github.com/manchenkoff/webpack-uikit#project-structure"></a>Project structure</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li><strong>src</strong>: Project sources root<ul><li><strong>img</strong>: Images and icons used in your styles</li><li><strong>js</strong>: JavaScript code-base for your application</li><li><strong>scss</strong>: Styles sources (may contain structure what you like)</li><li><strong>static</strong>: Images and media-files which uses statically (will be copied to the&nbsp;<code>dist</code>&nbsp;directory), ex: uses in the HTML</li></ul></li></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3><a href="https://github.com/manchenkoff/webpack-uikit#tasks"></a>Tasks</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>Build sources -&nbsp;<code>npm run build</code></li><li>Start file watcher for recompiling -&nbsp;<code>npm run watch</code></li><li>Start webpack dev server -&nbsp;<code>npm run start</code></li><li>Build sources for production (<strong>with optimization</strong>) -&nbsp;<code>npm run production</code></li><li>Clean '<code>dist</code>' folder -&nbsp;<code>npm run clear</code></li></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3><a href="https://github.com/manchenkoff/webpack-uikit#description"></a></h3>
<!-- /wp:heading -->

<!-- wp:heading -->
<h2>Future </h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We plan to add a tree shaker to webpack.  This work is currently not scheduled. </p>
<!-- /wp:paragraph -->

CONTENT;
