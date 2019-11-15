<?php
/**
 * Beans Demo Uikit3
 *
 * Gutenberg Blocks example page content optionally installed after theme activation.
 *
 * Visit `wp-admin/admin.php?page=beans_onboarding` to trigger import.
 *
 * @author Maurice
 * @link   https://www.getbeans.io
 * @license MIT
 * @package Beans_Demo_UiKit3
 */


/*
 * TODO - Get scss to work with this.
<!-- wp:paragraph -->
<p>Lets check out the positioning and styling of the video core block. We will check the wide and full alignments too.</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3>Wide aligned</h3>
<!-- /wp:heading -->
<!-- wp:core-embed/vimeo {"url":"https://vimeo.com/259230327","type":"video","providerNameSlug":"vimeo","align":"wide","className":"alignwide"} -->
<figure class="wp-block-embed-vimeo alignwide wp-block-embed is-type-video is-provider-vimeo">
<div class="wp-block-embed__wrapper">
<iframe src="https://player.vimeo.com/video/259230327?app_id=122963" width="500" height="340" frameborder="0" title="How to Build a WordPress Gutenberg Inspired Toggle Customizer Control" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div><figcaption>Videos can have captions too!</figcaption></figure>
<!-- /wp:core-embed/vimeo -->
<!-- wp:heading {"level":3} -->
<h3>Full Width</h3>
<!-- /wp:heading -->
<!-- wp:core-embed/vimeo {"url":"https://vimeo.com/243191812","type":"video","providerNameSlug":"vimeo","align":"full","className":"alignfull wp-has-aspect-ratio wp-embed-aspect-16-9"} -->
<figure class="wp-block-embed-vimeo alignfull wp-block-embed is-type-video is-provider-vimeo wp-has-aspect-ratio wp-embed-aspect-16-9">
<div class="wp-block-embed__wrapper">
<iframe src="https://player.vimeo.com/video/243191812?app_id=122963" width="500" height="281" frameborder="0" title="Login Designer Preview" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>
</figure>
<!-- /wp:core-embed/vimeo -->

 *
 *
 */


$beans_typography_site_url = get_site_url();
$picsum = 'https://picsum.photos/200/300';

return <<<CONTENT
<!-- wp:paragraph -->
<p>Donec id elit non mi porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":1} -->
<h1>Heading One</h1>
<!-- /wp:heading -->

<!-- wp:heading -->
<h2>Heading Two</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3>Heading Three</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4>Heading Four</h4>
<!-- /wp:heading -->

<!-- wp:heading {"level":5} -->
<h5>Heading Five</h5>
<!-- /wp:heading -->

<!-- wp:heading {"level":6} -->
<h6>Heading Six</h6>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:subhead -->
<p class="wp-block-subhead">This is a subhead block, where you can add a little extra blurb about your post or page. Cool yeah?</p>
<!-- /wp:subhead -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Preformatted Block</h2>
<!-- /wp:heading -->
<!-- wp:preformatted -->
<pre class="wp-block-preformatted"><strong>The Road Not Taken</strong>, <em>by Robert Frost</em><br/><br/>Two roads diverged in a yellow wood,<br/>And sorry I could not travel both<br/>And be one traveler, long I stood <br/>And looked down one as far as I could<br/>To where it bent in the undergrowth;<br/>Then took the other, as just as fair,<br/>And having perhaps the better claim,<br/>Because it was grassy and wanted wear;<br/>Though as for that the passing there<br/>Had worn them really about the same,<br/>And both that morning equally lay<br/>In leaves no step had trodden black.<br/>Oh, I kept the first for another day!<br/>Yet knowing how way leads on to way,<br/>I doubted if I should ever come back.<br/>I shall be telling this with a sigh<br/>Somewhere ages and ages hence:<br/>Two roads diverged in a wood, and I—<br/>I took the one less traveled by,<br/>And that has made all the difference.<br/><br/>...and heres a line of some really, really, really, really long text, just to see how it is handled and to find out how it overflows;</pre>
<!-- /wp:preformatted -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Ordered List</h2>
<!-- /wp:heading -->
<!-- wp:list {"ordered":true} -->
<ol>
<li>Nullam id dolor id nibh ultricies vehicula ut id elit.</li>
<li>Donec ullamcorper nulla non metus auctor fringilla.
<ol>
<li>Condimentum euismod aenean.</li>
<li>Purus commodo ridiculus.</li>
<li>Nibh commodo vestibulum.</li>
</ol>
</li>
<li>Cras justo odio, dapibus ac facilisis in.</li>
</ol>
<!-- /wp:list -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Unordered List</h2>
<!-- /wp:heading -->
<!-- wp:list -->
<ul>
<li>Nullam id dolor id nibh ultricies vehicula ut id elit.</li>
<li>Donec ullamcorper nulla non metus auctor fringilla.
<ul>
<li>Nibh commodo vestibulum.</li>
<li>Aenean eu leo quam.</li>
<li>Pellentesque ornare sem lacinia.</li>
</ul>
</li>
<li>Cras justo odio, dapibus ac facilisis in.</li>
</ul>
<!-- /wp:list -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Verse</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>This is an example of the core Gutenberg verse block.</p>
<!-- /wp:paragraph -->
<!-- wp:verse -->
<pre class="wp-block-verse">A block for haiku? <br/>Why not? <br/>Blocks for all the things!</pre>
<!-- /wp:verse -->
<!-- wp:heading -->
<h2>Separator</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Here are examples of the three separator styles of the core Gutenberg separator block.</p>
<!-- /wp:paragraph -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->
<!-- wp:separator {"className":"is-style-dots"} -->
<hr class="wp-block-separator is-style-dots"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Table</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Here is an example of the core Gutenberg table block. </p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>Regular Style Table</p>
<!-- /wp:paragraph -->
<!-- wp:table -->
<table class="wp-block-table"><tbody><tr><td>Employee</td><td>Salary</td><td>Position</td></tr><tr><td>Jane Doe</td><td>$100k</td><td>CEO</td></tr><tr><td>John Doe</td><td>$100k</td><td>CTO</td></tr><tr><td>Jane Bloggs</td><td>$100k</td><td>Engineering</td></tr><tr><td>Fred Bloggs</td><td>$100k</td><td>Marketing</td></tr></tbody></table>
<!-- /wp:table -->
<!-- wp:paragraph -->
<p>Stripped Style Table</p>
<!-- /wp:paragraph -->
<!-- wp:table {"className":"is-style-stripes"} -->
<table class="wp-block-table is-style-stripes"><tbody><tr><td>Employee</td><td>Salary</td><td>Position</td></tr><tr><td>Jane Doe</td><td>$100k</td><td>CEO</td></tr><tr><td>John Doe</td><td>$100k</td><td>CTO</td></tr><tr><td>Jane Bloggs</td><td>$100k</td><td>Engineering</td></tr><tr><td>Fred Bloggs</td><td>$100k</td><td>Marketing</td></tr></tbody></table>
<!-- /wp:table -->
<!-- wp:heading -->
<h2>Sample Code</h2>
<!-- /wp:heading -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Latest Posts, List View</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>
<!-- /wp:paragraph -->
<!-- wp:latest-posts /-->
<!-- wp:heading -->
<h2>Latest Posts, Grid View</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>And now for the Grid View. The Latest Posts block also displays at wide and full width alignments, so be sure to check those styles as well.</p>
<!-- /wp:paragraph -->
<!-- wp:latest-posts {"postLayout":"grid","columns":2} /-->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Blockquote</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius blandit sit amet non magna sed diam ed diam eget risus varius eget.</p>
<!-- /wp:paragraph -->
<!-- wp:quote {"align":"left"} -->
<blockquote style="text-align:left" class="wp-block-quote">
<p>Donec sed odio dui. Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio.</p>
<p><cite>Albert Einstein</cite></p></blockquote>
<!-- /wp:quote -->
<!-- wp:paragraph -->
<p>Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius blandit sit amet non magna sed diam ed diam eget risus varius eget.</p>
<!-- /wp:paragraph -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Alternate Blockquote</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>The alternate block quote style can be tarageted using the <strong>.wp-block-quote.is-large</strong>. CSS selector. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
<!-- /wp:paragraph -->
<!-- wp:quote {"align":"left","className":"is-large"} -->
<blockquote style="text-align:left" class="wp-block-quote is-large">
<p>Donec sed odio dui. Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
<p><cite>Albert Einstein</cite></p></blockquote>
<!-- /wp:quote -->
<!-- wp:paragraph -->
<p>Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius blandit sit amet non magna sed diam ed diam eget risus varius eget.</p>
<!-- /wp:paragraph -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Audio</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. <strong>Center aligned</strong>:</p>
<!-- /wp:paragraph -->
<!-- wp:audio {"align":"center"} -->
<figure class="wp-block-audio aligncenter"><audio controls src="https://example.com"></audio><figcaption>An example of an Audio Block caption</figcaption></figure>
<!-- /wp:audio -->
<!-- wp:paragraph -->
<p>Curabitur blandit tempus porttitor. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor.</p>
<!-- /wp:paragraph -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Buttons</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. <strong>Center aligned</strong>: </p>
<!-- /wp:paragraph -->
<!-- wp:button {"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link" href="https://themebeans.com">Center Aligned Button</a></div>
<!-- /wp:button -->
<!-- wp:paragraph -->
<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. </p>
<!-- /wp:paragraph -->
<!-- wp:button {"align":"left"} -->
<div class="wp-block-button alignleft"><a class="wp-block-button__link" href="https://themebeans.com">Left Aligned Button</a></div>
<!-- /wp:button -->
<!-- wp:paragraph -->
<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Maecenas sed diam eget risus varius.</p>
<!-- /wp:paragraph -->
<!-- wp:button {"align":"right"} -->
<div class="wp-block-button alignright"><a class="wp-block-button__link">Right Aligned Button</a></div>
<!-- /wp:button -->
<!-- wp:paragraph -->
<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Maecenas sed diam eget risus varius.</p>
<!-- /wp:paragraph -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Categories</h2>
<!-- /wp:heading -->
<!-- wp:categories {"showPostCounts":true,"showHierarchy":true,"align":"center"} /-->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Archives</h2>
<!-- /wp:heading -->
<!-- wp:archives {"showPostCounts":true} /-->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Columns</h2>
<!-- /wp:heading -->
<!-- wp:columns -->
<div class="wp-block-columns has-2-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tempus porttitor.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tempus porttitor.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:columns {"columns":3} -->
<div class="wp-block-columns has-3-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:columns {"columns":4} -->
<div class="wp-block-columns has-4-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condim entum nibh.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condim entum nibh.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condim entum nibh.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condim entum nibh.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2>Pull Quotes</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Here is an example of the core pull quote block, set to display centered. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
<!-- /wp:paragraph -->

<!-- wp:pullquote {"className":"aligncenter"} -->
<figure class="wp-block-pullquote aligncenter">
<blockquote>
<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere est at lobortis.</p>
<p><cite>Albert Einstein</cite></p></blockquote>
</figure>
<!-- /wp:pullquote -->

<!-- wp:heading {"level":3} -->
<h3>Wide aligned</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Here is an example of the core pull quote block, set to display with the wide-aligned attribute, if the theme allows it. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
<!-- /wp:paragraph -->

<!-- wp:pullquote {"className":"alignwide"} -->
<figure class="wp-block-pullquote alignwide">
<blockquote>
<p>Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed ibendum nulla sed consectetur. </p>
<p><cite>Albert Einstein</cite></p></blockquote>
</figure>
<!-- /wp:pullquote -->
<!-- wp:heading {"level":3} -->
<h3>Full width</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>And finally, here is an example of the core pull quote block, set to display with the full-aligned attribute, if the theme allows it. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
<!-- /wp:paragraph -->
<!-- wp:pullquote {"className":"alignfull"} -->
<figure class="wp-block-pullquote alignfull">
<blockquote>
<p>Etiam porta sem malesuada magna mollis euismod. Sed posuere consectetur est at lobortis. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. </p>
<p><cite>Albert Einstein</cite></p></blockquote>
</figure>
<!-- /wp:pullquote -->
<!-- wp:paragraph -->
<p>Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
<!-- /wp:paragraph -->
<!-- wp:pullquote {"className":"alignleft"} -->
<figure class="wp-block-pullquote alignleft">
<blockquote>
<p>Here we have a left-aligned pullquote.</p>
<p><cite>R</cite></p></blockquote>
</figure>
<!-- /wp:pullquote -->
<!-- wp:paragraph -->
<p>Donec id elit non mi porta gravida at eget metus. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper.</p>
<!-- /wp:paragraph -->
<!-- wp:pullquote {"className":"alignright"} -->
<figure class="wp-block-pullquote alignright">
<blockquote>
<p>Here we have a right-aligned pullquote.</p>
<p><cite>Albert Einstein</cite></p></blockquote>
</figure>
<!-- /wp:pullquote -->
<!-- wp:paragraph -->
<p>Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
<!-- /wp:paragraph -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Image Block</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas faucibus mollis interdum.</p>
<!-- /wp:paragraph -->
<!-- wp:image {"id":2117,"align":"center"} -->
<div class="wp-block-image">
<figure class="aligncenter"><img src="{$picsum}" alt="" class="wp-image-2117"/></figure>
</div>
<!-- /wp:image -->
<!-- wp:image {"id":2117,"align":"center"} -->
<div class="wp-block-image">
<figure class="aligncenter"><img src="{$picsum}" alt="" class="wp-image-2117"/><figcaption>And an image with a caption</figcaption></figure>
</div>
<!-- /wp:image -->
<!-- wp:heading {"level":3} -->
<h3>Wide aligned</h3>
<!-- /wp:heading -->
<!-- wp:image {"id":2117,"align":"wide"} -->
<figure class="wp-block-image alignwide"><img src="{$picsum}" alt="" class="wp-image-2117"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3} -->
<h3>Full Width</h3>
<!-- /wp:heading -->
<!-- wp:image {"id":2117,"align":"full"} -->
<figure class="wp-block-image alignfull"><img src="{$picsum}" alt="" class="wp-image-2117"/><figcaption>Here is an example of an image block caption</figcaption></figure>
<!-- /wp:image -->
<!-- wp:paragraph -->
<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
<!-- /wp:paragraph -->
<!-- wp:image {"id":2117,"align":"left","width":275,"height":196} -->
<div class="wp-block-image">
<figure class="alignleft is-resized"><img src="{$picsum}" alt="" class="wp-image-2117" width="275" height="196"/></figure>
</div>
<!-- /wp:image -->
<!-- wp:paragraph -->
<p><strong>Left aligned:</strong> dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. </p>
<!-- /wp:paragraph -->
<!-- wp:image {"id":2117,"align":"right","width":281,"height":200} -->
<div class="wp-block-image">
<figure class="alignright is-resized"><img src="{$picsum}" alt="" class="wp-image-2117" width="281" height="200"/><figcaption>This one is captioned</figcaption></figure>
</div>
<!-- /wp:image -->
<!-- wp:paragraph -->
<p>Nullam quis risus eget urna mollis ornare vel eu leo. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper. Nullam quis risus.</p>
<!-- /wp:paragraph -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Video Block</h2>
<!-- /wp:heading -->
<!-- wp:heading -->
<h2>Cover Image Block</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Check out the positioning and styling of the cover image core block. We will check the wide and full alignments, as well as left/right.</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3>Wide aligned</h3>
<!-- /wp:heading -->
<!-- wp:cover-image {"url":"{$picsum}","align":"wide","id":2117} -->
<div class="wp-block-cover-image has-background-dim alignwide" style="background-image:url({$picsum})">
<p class="wp-block-cover-image-text">Wide Cover Image Block</p>
</div>
<!-- /wp:cover-image -->
<!-- wp:heading {"level":3} -->
<h3>Full Width</h3>
<!-- /wp:heading -->
<!-- wp:cover-image {"url":"{$picsum}","align":"full","id":2117} -->
<div class="wp-block-cover-image has-background-dim alignfull" style="background-image:url({$picsum})">
<p class="wp-block-cover-image-text">Full Width Cover Image</p>
</div>
<!-- /wp:cover-image -->
<!-- wp:paragraph -->
<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
<!-- /wp:paragraph -->
<!-- wp:cover-image {"url":"{$picsum}","align":"left","id":2117} -->
<div class="wp-block-cover-image has-background-dim alignleft" style="background-image:url({$picsum})">
<p class="wp-block-cover-image-text">Left Aligned Cover Image</p>
</div>
<!-- /wp:cover-image -->
<!-- wp:paragraph -->
<p><strong>Left aligned:</strong> dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
<!-- /wp:paragraph -->
<!-- wp:cover-image {"url":"{$picsum}","align":"right","id":2117} -->
<div class="wp-block-cover-image has-background-dim alignright" style="background-image:url({$picsum})">
<p class="wp-block-cover-image-text">Right Aligned Cover Image</p>
</div>
<!-- /wp:cover-image -->
<!-- wp:paragraph -->
<p><strong>Right aligned:</strong> scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit. Vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. ﻿<strong>Center aligned:</strong></p>
<!-- /wp:paragraph -->
<!-- wp:cover-image {"url":"{$picsum}","align":"center","id":2117} -->
<div class="wp-block-cover-image has-background-dim aligncenter" style="background-image:url({$picsum})">
<p class="wp-block-cover-image-text">Center Aligned Cover Image</p>
</div>
<!-- /wp:cover-image -->
<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->
<!-- wp:heading -->
<h2>Gallery Blocks</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Let us check out the positioning and styling of the gallery blocks.</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3>Two Column Gallery</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Below we have a Gallery Block inserted with two columns and two images.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"className":"alignnone"} -->
<ul class="wp-block-gallery columns-2 is-cropped alignnone">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading {"level":3} -->
<h3>Three Column</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Below we have a Gallery Block inserted with three columns and three images.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"className":"alignnone"} -->
<ul class="wp-block-gallery columns-3 is-cropped alignnone">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading {"level":3} -->
<h3>Four Column</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Below we have a Gallery Block inserted with four columns and four images.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"columns":4,"className":"alignnone"} -->
<ul class="wp-block-gallery columns-4 is-cropped alignnone">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading {"level":3} -->
<h3>Five Column</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Below we have a Gallery Block inserted with five columns and five images.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"columns":5,"className":"alignnone"} -->
<ul class="wp-block-gallery columns-5 is-cropped alignnone">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading {"level":3} -->
<h3>Four Column, Five Images</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Let us switch things up a bit. Now we have a Gallery Block inserted with four columns and five images.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"columns":4,"className":"alignnone"} -->
<ul class="wp-block-gallery columns-4 is-cropped alignnone">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading {"level":3} -->
<h3>Three Column, Five Images</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Now we have a Gallery Block inserted with three columns and five images.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"columns":3,"className":"alignnone"} -->
<ul class="wp-block-gallery columns-3 is-cropped alignnone">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:paragraph -->
<p>Below you will find a Gallery Block inserted with two columns and five images.</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3>Two Column, Five Images</h3>
<!-- /wp:heading -->
<!-- wp:gallery {"columns":2,"className":"alignnone"} -->
<ul class="wp-block-gallery columns-2 is-cropped alignnone">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt=""/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading {"level":3} -->
<h3>Three Column, Four Images</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Below you will find a Gallery Block inserted with three columns and four images.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"columns":3,"className":"alignnone"} -->
<ul class="wp-block-gallery columns-3 is-cropped alignnone">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2124" class="wp-image-2124"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2125" class="wp-image-2125"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2117" class="wp-image-2117"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2119" class="wp-image-2119"/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading -->
<h2>Wide aligned Gallery Blocks</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Let us check out the positioning and styling of the gallery blocks..</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3>Two Column Gallery</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Below we have a Gallery Block inserted with two columns and two images. It is set to display with the new Wide alignment (if the theme supports it).</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"align":"wide"} -->
<ul class="wp-block-gallery alignwide columns-2 is-cropped">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2117" class="wp-image-2117"/><figcaption>Captions for Gallery Images</figcaption></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2119" class="wp-image-2119"/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading {"level":3} -->
<h3>Three Column</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Below we have a Gallery Block inserted with three columns and three images. It is also set to display with the new Wide alignment.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"align":"wide"} -->
<ul class="wp-block-gallery alignwide columns-3 is-cropped">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2119" class="wp-image-2119"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2117" class="wp-image-2117"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2121" class="wp-image-2121"/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading {"level":3} -->
<h3>Four Column</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Below we have a Gallery Block inserted with four columns and four images. It is also set to display with the new Wide alignment.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"columns":4,"align":"wide"} -->
<ul class="wp-block-gallery alignwide columns-4 is-cropped">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2124" class="wp-image-2124"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2125" class="wp-image-2125"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2117" class="wp-image-2117"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2119" class="wp-image-2119"/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading {"level":3} -->
<h3>Five Column</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Below we have a Gallery Block inserted with five columns and five images. It is also set to display with the new Wide alignment.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"columns":5,"align":"wide"} -->
<ul class="wp-block-gallery alignwide columns-5 is-cropped">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2124" class="wp-image-2124"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2125" class="wp-image-2125"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2117" class="wp-image-2117"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2119" class="wp-image-2119"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2121" class="wp-image-2121"/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading {"level":3} -->
<h3>Four Column, Five Images</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Let us switch things up a bit. Now we have a Gallery Block inserted with four columns and five images, also displayed with the new Wide alignment option.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"columns":4,"align":"wide"} -->
<ul class="wp-block-gallery alignwide columns-4 is-cropped">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2124" class="wp-image-2124"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2125" class="wp-image-2125"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2117" class="wp-image-2117"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2119" class="wp-image-2119"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2121" class="wp-image-2121"/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading {"level":3} -->
<h3>Three Column, Five Images</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Now we have a Gallery Block inserted with three columns and five images displayed with the new Wide alignment option.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"columns":3,"align":"wide"} -->
<ul class="wp-block-gallery alignwide columns-3 is-cropped">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2124" class="wp-image-2124"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2125" class="wp-image-2125"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2117" class="wp-image-2117"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2119" class="wp-image-2119"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2121" class="wp-image-2121"/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading {"level":3} -->
<h3>Two Column, Five Images</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Below you will find a Gallery Block inserted with two columns and five images also displayed with the new Wide alignment option.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"columns":2,"align":"wide"} -->
<ul class="wp-block-gallery alignwide columns-2 is-cropped">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2124" class="wp-image-2124"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2125" class="wp-image-2125"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2117" class="wp-image-2117"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2119" class="wp-image-2119"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2121" class="wp-image-2121"/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading {"level":3} -->
<h3>Three Column, Four Images</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Below you will find a Gallery Block inserted with three columns and four images, also displayed with the new Wide alignment option.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"columns":3,"align":"wide"} -->
<ul class="wp-block-gallery alignwide columns-3 is-cropped">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2124" class="wp-image-2124"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2125" class="wp-image-2125"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2117" class="wp-image-2117"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2119" class="wp-image-2119"/></figure>
</li>
</ul>
<!-- /wp:gallery -->
<!-- wp:heading {"level":3} -->
<h3>Full Width Gallery Block</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Below you will find a Gallery Block inserted with three columns and four images, also displayed with the new Wide alignment option.</p>
<!-- /wp:paragraph -->
<!-- wp:gallery {"columns":3,"align":"full"} -->
<ul class="wp-block-gallery alignfull columns-3 is-cropped">
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2124" class="wp-image-2124"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2125" class="wp-image-2125"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2117" class="wp-image-2117"/></figure>
</li>
<li class="blocks-gallery-item">
<figure><img src="{$picsum}" alt="" data-id="2119" class="wp-image-2119"/><figcaption>Captions for Gallery Images</figcaption></figure>
</li>
</ul>
<!-- /wp:gallery -->
CONTENT;
