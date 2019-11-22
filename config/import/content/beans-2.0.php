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
<p>Beans by far the best theme I've ever worked with.  As stated if you don't see the magic you have not looked deep enough.  </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Currently Disnel, Yaidel and I are working on making this framework even stronger. </p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="uk-card uk-card-secondary uk-card-hover uk-card-body">
    <h3 class="uk-card-title">Not an Official Release</h3>
    <p>This is not an official Beans release. Currently it is simply work in progress to be presented to the Beans community for consideration.</p>
</div>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p>Accomplishments</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>Decoupled Beans from uikit2</li><li>Created a front-end framework plugin for UiKit 2 (Legacy)</li><li>Created a front-end framework plugin for UiKit 3.2</li><li>Added Command line support  (Not Documented: but type <code>wp beans</code>)</li><li>Added Onboarding (Not Documented: See Admin -&gt; Dashboard -&gt; Beans -&gt; Onboarding) </li><li>Moved Layout to sidebar (Not Documented either but notice the beans icon on posts)</li><li>Create a demo site that is easy to onboard.</li></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2>Internal Plan / Roadmap</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>Refactor several internal sites from UiKit 2 to UiKit 3</li><li>Add configuration for theme support.</li><li>Add better support for Gutenberg Color and styles.</li><li>Re-add unit tests.</li><li>Convert Bean's main site into UiKit 3.</li><li>Update the relevant documentation.</li><li>Add Gutenberg Blocks specific for UiKit 3</li><li>Move Beans from 2.0 alpha to release.</li><li>Add a Bootstrap specific Front end framework</li></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>Quick Start</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Follow the steps in the onboarding which gives instructions on downloading the theme and plugins.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Then run webpack in your child theme.</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code lang="bash" class="language-bash">npm init
npm run watch</code></pre>
<!-- /wp:code -->

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
