<?php
/**
 * Beans Onboarding.
 *
 * Contact page content optionally created.
 * Will create a form with WPForms and embed on the page as a WPForms block.
 *

 */

use function Beans_WPForms_Uikit3_Addon\get_wpforms_contact_form_html;
use function Beans_WPForms_Uikit3_Addon\update_wpforms_styling_option;

$default_message = <<<CONTENT
<!-- wp:paragraph -->
<p>Add a contact form to this page with the WPForms Lite plugin (Third Party).</p>
<!-- /wp:paragraph -->
CONTENT;

//Beans_WPForms_Uikit3_Addon\update_wpforms_styling_option(3);
if( function_exists('Beans_WPForms_Uikit3_Addon\update_wpforms_styling_option')){
    // Set wp forms to no styling (using custom)
    Beans_WPForms_Uikit3_Addon\update_wpforms_styling_option(3);
}

$wp_form = <<<CONTENT
<!-- wp:paragraph -->
<p>Install Plugin to create a custom form.</p>
<!-- /wp:paragraph -->
CONTENT;

if( function_exists('Beans_WPForms_Uikit3_Addon\get_wpforms_contact_form_html')) {
    $wp_form = Beans_WPForms_Uikit3_Addon\get_wpforms_contact_form_html();
}

return <<<CONTENT


<!-- wp:paragraph -->
<p class="uk-article-lead uk-margin-bottom tm-text-medium-center">Fill out the form below and we’ll get back to you within 48 hours.</p>
<!-- /wp:paragraph -->

$wp_form

<!-- wp:paragraph -->
<p>This form is created with <a href="https://shareasale.com/r.cfm?b=837827&u=2241463&m=64312&urllink=&afftrack=" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">WPForms Lite plugin (Third Party - and affiliate link).</a> along with an open source add on https://github.com/Bowriverstudio/beans-wpforms-uikit3-addon </p>
<!-- /wp:paragraph -->


CONTENT;
