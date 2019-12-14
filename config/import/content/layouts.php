<?php
/**
 * Layouts
 */


$site_url = site_url();

$table = '<div class="uk-overflow-auto"><table class="uk-table uk-table-divider">';
$table .= '<thead><tr><th align="left">Icon</th><th align="left">Slug</th><th align="left">Description</th>';
$table .= '<th align="left">Sample</th></tr></thead><tbody>';

$layouts = beans_get_layouts_for_options();

foreach ($layouts as $slug => $layout) {
    $sample = $site_url .'/';
    switch ($slug) {
        case 'c':
            $sample .= 'Stable-updates';
            break;
        case 'c_sp':
            $sample .= 'beans-looks-beautiful-on-all-devices';
            break;
        case 'sp_c':
            $sample .= 'SEO-friendly';
            break;
        case 'c_sp_ss':
            $sample .= 'Built-with-the-ultimate-front-end-library';
            break;
        case 'sp_ss_c':
            $sample .= 'Loads-in-a-blink-of-an-eye';
            break;
        case 'sp_c_ss':
            $sample .= 'Well-coded-and-easy-to-extend';
            break;

    }

    $table .= '<tr>';
    $table .= '<td>' . $slug . '</td>';
    $table .= '<td><img src="' . $layout['src'] . '"/></td>';
    $table .= '<td>' . $layout['alt'] . '</td>';
    $table .= '<td><a href="'.$sample.'">Sample</a></td>';
    $table .= '</tr>';
}

$table .= '</tbody></table></div>';


return <<<CONTENT

<!-- wp:heading {"level":2} -->
<h2>Layout</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>With two sidebars registered there are several different possible layouts.  In the future we may expand this to include adding some custom sidebars per page, and to allow easy column with changes.</p>
<p>This is in the experimental phase.  At this point you can set a default layout in the config/layout.php - This can be set per page type and overwritten on a per page bases in the gutenberg beans side bar.</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre title="Configuration file: layout.php" class="wp-block-code"><code lang="php" class="language-php">

\$has_primary = beans_has_widget_area( 'sidebar_primary' );

return array(
	'default' => array(
		'page' => 'c',
		'post' => (\$has_primary ) ? 'c_sp' : 'c',
		'archive' => (\$has_primary ) ? 'c_sp' : 'c',
	),

);
</code></pre>
<!-- /wp:code -->


<!-- wp:HTML -->
$table
<!-- /wp:HTML -->


<!-- wp:heading {"level":2} -->
<h2>beans_fixed_wrap</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Beans Uikit 3 by default adds a fixed wrap around then content and sidebar(s).  </p>
<p>This is in the experimental phase.  At this point you can updated the config/customizer.php file with </p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre title="Configuration file: customizer.php" class="wp-block-code"><code lang="php" class="language-php">return array(
    'beans_header_max_width' => 'uk-container-small',
    'beans_fixed_wrap_main' => '',
    'beans_primary_menu_breakpoint' => 'm',
    'beans_display_toolbar' => true,
);

// Options for beans_fixed_wrap_main_max_width:
//    'beans_fixed_wrap_main' => 'uk-container-xsmall',
//    'beans_fixed_wrap_main' => 'uk-container-small',
//    'beans_fixed_wrap_main' => '',
//    'beans_fixed_wrap_main' => 'uk-container-large',
//    'beans_fixed_wrap_main' => 'uk-container-expand',

</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>Post Meta, can be set in the "Gutenberg Beans Sidebar" on a per page/post which overwrites the default.</p>
<!-- /wp:paragraph -->


<!-- wp:HTML -->


<div class="uk-overflow-auto"><table class="uk-table uk-table-divider" style="max-width:800px;"><thead><tr>
<th align="left">Class</th>
<th align="left" style="word-wrap: break-word;
width: 250px;">Description</th>
<th align="left">Sample</th>
</tr>
</thead><tbody><tr>
<td align="left"><code>.uk-container-xsmall</code></td>
<td align="left">Add this class for a xsmall container.</td>
<td align="left"><a href="$site_url/container-xsmall">Sample</td>
</tr>
<tr>
<td align="left"><code>.uk-container-small</code></td>
<td align="left">Add this class for a small container.</td>
<td align="left"><a href="$site_url/container-small">Sample</td>

</tr>
<tr>
<td align="left"> Default</td>
<td align="left">The default fixed with size.</td>
<td align="left"><a href="$site_url/container-default">Sample</td>

</tr>
<tr>
<td align="left"><code>.uk-container-large</code></td>
<td align="left">Add this class for a large container.</td>
<td align="left"><a href="$site_url/container-large">Sample</td>

</tr>
<tr>
<td align="left"><code>.uk-container-expand</code></td>
<td align="left">Add this class, if you do not want to limit the container width but still want the dynamic horizontal padding.</td>
<td align="left"><a href="$site_url/container-expand">Sample</td>

</tr>
</tbody>
<tfoot>
                        <tr>
                            <td colspan="4"><a href="https://getuikit.com/docs/container" target="_blank">Reference </td>
                            
                        </tr>
                    </tfoot>
</table></div>
<!-- /wp:HTML -->

CONTENT;
