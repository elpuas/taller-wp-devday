<?php 
var_dump('holis'); 

/**
 * Enqueue theme scripts and styles
 */
function devday_enqueue_assets() {
    // Enqueue CSS
    wp_enqueue_style(
        'devday-styles',
        get_template_directory_uri() . '/build/index.css',
        array(),
        filemtime(get_template_directory() . '/build/index.css')
    );

    // Enqueue JavaScript
    wp_enqueue_script(
        'devday-scripts',
        get_template_directory_uri() . '/build/index.js',
        array(),
        filemtime(get_template_directory() . '/build/index.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'devday_enqueue_assets');
?>