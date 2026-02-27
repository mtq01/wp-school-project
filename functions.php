<?php

// +++++ ENQUEUING ++++++
function school_enqueues()
{
    // load normalize
    wp_enqueue_style(
        'school-normalize',
        'https://unpkg.com/@csstools/normalize.css',
        array(),
        '12.1.0'
    );

    // +++++ loads style.css on the front-end +++++
    wp_enqueue_style(
        'school-style',                 // unique handle (we define this)
        get_stylesheet_uri(),           // find style.css in the active theme root
        array(),                        // [dependencies] list of other styles that must load BEFORE this one (none in this case)
        wp_get_theme()->get('Version'), // look at the version # of my theme and use that
        'all'                           // apply styles to 'all'
    );

    // +++++ lightbox logic (frontpage only) +++++
    if (is_front_page()) {

        // enque lightGallery css
        wp_enqueue_style(
            'lightgallery-bundle',
            get_stylesheet_directory_uri() . '/assets/css/lightgallery-bundle.min.css'
        );

        // enqueue lightGallery main JS
        wp_enqueue_script(
            'lightgallery-main',
            get_stylesheet_directory_uri() . '/assets/js/lightgallery.min.js',
            array(),
            null,
            true
        );

        // enqueue thumbnails addon (for fun)
        wp_enqueue_script(

            'lightgallery-thumbnail',
            get_stylesheet_directory_uri() . '/assets/js/lg-thumbnail.min.js',
            array('lightgallery-main'), // needs the main engine to work
            null,
            true
        );

        // enqueue custom settings (lightGallery-main must load 1st)
        wp_enqueue_script(

            'lightgallery-init',
            get_stylesheet_directory_uri() . '/assets/js/lightbox-settings.js',
            array('lightgallery-main', 'lightgallery-thumbnail'),
            null,
            true
        );
    }
}

// +++++  CUSTOM IMG SIZES +++++
function mindset_setup()
{
    // load csss in block editor
    add_editor_style(get_stylesheet_uri());

    // crop images various sizes
    add_image_size('custom-400x500', 400, 500, true);
    add_image_size('custom-200x250', 200, 250, true);
}

add_action('after_setup_theme', 'mindset_setup');

// make custom sizes selectable from WP admin.
function mindset_add_custom_image_sizes($size_names)
{
    $new_sizes = array(
        'custom-400x500' => __('400x500', 'mindset-theme'),
        'custom-200x250' => __('200x250', 'mindset-theme'),
    );
    return array_merge($size_names, $new_sizes);
}

// attach function to the UI
add_filter('image_size_names_choose', 'mindset_add_custom_image_sizes');

// attach the function to the hook
add_action('wp_enqueue_scripts', 'school_enqueues');

// load custom blocks.
require get_theme_file_path() . '/school-blocks/school-blocks.php';

// custom Post Types & Custom Taxonomies
require get_template_directory() . '/inc/post-types-taxonomies.php';