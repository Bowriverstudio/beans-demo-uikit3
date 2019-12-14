<?php
/**
 * Genesis sample.
 *
 * Landing page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Photo by Felipe Dolce on Unsplash.
$sample_landing_image_url = get_stylesheet_directory() . '/config/import/images/landing.jpg';

return <<<CONTENT
<!-- wp:image {"id":1377} -->
<figure class="wp-block-image"><img src="$sample_landing_image_url" alt="Dog with Flower" class="wp-image-1377"/><figcaption> Photo by <a href="https://unsplash.com/photos/Pi3YUQivm6o" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">Celine Sayuri Tagami</a> on <a href="https://unsplash.com/">Unsplash</a> </figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>This some text you can put in this landing page.</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><p>““The dog is a gentleman; I hope to go to his heaven, not man’s.”<br></p><cite>— Mark Twain</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:heading {"level":3} -->
<h3>This is a Sample Heading</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Here’s a sample paragraph with a custom background color:</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"customBackgroundColor":"#f5f5f5"} -->
<p style="background-color:#f5f5f5" class="has-background">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<!-- /wp:paragraph -->

CONTENT;
