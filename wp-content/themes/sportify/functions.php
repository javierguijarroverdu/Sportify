<?php

/**
 * Agloma Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package agloma
 * @since 1.0.0
*/

function enqueue_styles_and_scripts()
{
    wp_register_style('child-style-wpk', get_stylesheet_directory_uri() . '/assets/css/build/main.min.css', false, '1.0.0');
    wp_enqueue_style('child-style-wpk');

    wp_register_script(
        'site-main-js-wpk',
        get_stylesheet_directory_uri() . '/assets/js/build/app.min.js',
        array('jquery'),
        null,
        true
    );
    $translation_array = array();
    wp_localize_script('site-main-js-wpk', 'frontend_fields', $translation_array);
    wp_enqueue_script('site-main-js-wpk');
}
add_action('wp_enqueue_scripts', 'enqueue_styles_and_scripts', 100);

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
  
function fix_svg() {
    echo '<style type="text/css">
    .attachment-266x266, .thumbnail img {
        width: 100% !important;
        height: auto !important;
    }
    </style>';
}
add_action('admin_head', 'fix_svg');