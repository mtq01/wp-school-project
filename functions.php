<?php

  

function school_enqueues()

{

// load normalize

wp_enqueue_style(

'school-normalize',

'https://unpkg.com/@csstools/normalize.css',

array(),

'12.1.0'

);

  

// +++++ Load style.css on the front-end +++++

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

array('lightgallery-main'), // It needs the main engine to work

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

  

// attach the function to the hook

add_action('wp_enqueue_scripts', 'school_enqueues');

  

// load custom blocks.

require get_theme_file_path() . '/school-blocks/school-blocks.php';

  

// custom Post Types & Custom Taxonomies

require get_template_directory() . '/inc/post-types-taxonomies.php';