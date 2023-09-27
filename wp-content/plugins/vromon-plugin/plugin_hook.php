<?php

/*

Plugin Name: Vromon Plugin

Plugin URI: http://getmasum.net

Description: After install the Vromon WordPress Theme, you must need to install this "Vromon Plugin" first to get all functions of Vromon WP Theme.

Author: Masum Billah

Author URI: http://www.getmasum.net

Version: 1.0

Text Domain: vromon

*/


//define

define( 'VROMONPLUGINDIR', dirname( __FILE__ ) ); 

// Add main files

include_once(VROMONPLUGINDIR. '/inc/custom_posts.php');
include_once(VROMONPLUGINDIR. '/inc/shortcodes.php');
include_once(VROMONPLUGINDIR. '/inc/theme-options.php');
include_once(VROMONPLUGINDIR. '/inc/vromon_metabox.php');