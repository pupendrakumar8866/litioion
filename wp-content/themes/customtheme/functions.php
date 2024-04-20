<?php
// Add support for featured images
add_theme_support('post-thumbnails');

// Register custom navigation menus
register_nav_menus(array(
    'primary' => __('Primary Menu', 'your-theme-textdomain'),
));

// Other custom functions go here
?>
