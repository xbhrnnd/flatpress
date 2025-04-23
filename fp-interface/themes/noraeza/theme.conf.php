<?php
/**
 * Theme Name: Noraeza
 * Theme URI: https://xbhrnnd.dev/noraeza/
 * Description: Brand new FlatPress theme.
 * Version: 1.0
 * Author: xbhrnnd
 * Author URI: https://xbhrnnd.dev/
 */
$theme ['name'] = 'noraeza';
$theme ['author'] = 'xbhrnnd';
$theme ['www'] = 'https://xbhrnnd.dev/noraeza/';
$theme ['description'] = 'Brand new FlatPress theme.';

$theme ['version'] = 1.0;

$theme ['style_def'] = 'style.css';
$theme ['style_admin'] = 'admin.css';

$theme ['default_style'] = 'noraeza';

// Other theme settings

// overrides default tabmenu
// and panel layout
remove_filter('admin_head', 'admin_head_action');

// register widgetsets
register_widgetset('right');
register_widgetset('left');
?>
