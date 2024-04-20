<?php
/*
Plugin Name: My Custom Plugin
Description: A custom plugin for demonstration purposes.
Version: 1.0
Author: Samar Chauhan
Author URI: http://localhost/lition/
License: GPL2
*/



/*function my_custom_plugin_add_message($content) {
    if (is_single()) {
        $content .= '<p>Thank you for reading!</p>';
    }
    return $content;
}
add_filter('the_content', 'my_custom_plugin_add_message');


function my_custom_plugin_activate() {
    // Code to run on plugin activation
}
register_activation_hook(__FILE__, 'my_custom_plugin_activate');

function my_custom_plugin_deactivate() {
    // Code to run on plugin deactivation
}
register_deactivation_hook(__FILE__, 'my_custom_plugin_deactivate');*/

// Function to create a simple shortcode
function my_custom_shortcode() {
    return 'Hello, this is a custom shortcode!';
}

// Register the shortcode
add_shortcode('my_shortcode', 'my_custom_shortcode');


?>