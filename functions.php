<?php

function mindset_enqueues()
{
    // load normalize
    wp_enqueue_style(
        'school-normalize',
        'https://unpkg.com/@csstools/normalize.css',
        array(),
        '12.1.0'
    );

    // Load style.css on the front-end
    // Parameters: Unique handle, Source, Dependencies, Version number, Media
    wp_enqueue_style(
        // unique handle (we define this)
        'school-style',
        // find style.css in the active theme
        get_stylesheet_uri(),
        // [dependencies] only load this file if the following other files already loaded 
        array(),
        // look at the version # of my theme and use that 
        wp_get_theme()->get('Version'),
        // media query parameters
        'all'
    );

    // javascript
    // inject the button 
    wp_enqueue_script(
        'school-color-change',
        get_theme_file_uri('assets/js/color-change-scroll-to-top.js'),
        array(),
        wp_get_theme()->get('Version'),
        array('strategy' => 'defer')
    );

    // jump logic, mindset-color-change to dependency array
    wp_enqueue_script(
        'school-scroll-logic',
        get_theme_file_uri('assets/js/scroll-to-top.js'),
        array('mindset-color-change'),
        wp_get_theme()->get('Version'),
        array('strategy' => 'defer')
    );
}

// Load custom blocks.
require get_theme_file_path() . '/school-blocks/school-blocks.php';

/* Custom Post Types & Custom Taxonomies
 */
require get_template_directory() . '/inc/post-types-taxonomies.php';