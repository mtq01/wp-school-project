<?php
function school_register_custom_post_types()
{
    // ++++++ STUDENT CPT +++++
    // register student custom post type
    $labels = array(
        'name' => _x('Students', 'post type general name', 'school-theme'),
        'singular_name' => _x('student', 'post type singular name', 'school-theme'),
        'add_new' => _x('Add New', 'student', 'school-theme'),
        'add_new_item' => __('Add Student Name', 'school-theme'),
        'edit_item' => __('Edit student', 'school-theme'),
        'new_item' => __('New student', 'school-theme'),
        'view_item' => __('View student', 'school-theme'),
        'view_items' => __('View Students', 'school-theme'),
        'search_items' => __('Search Students', 'school-theme'),
        'not_found' => __('No Students found.', 'school-theme'),
        'not_found_in_trash' => __('No Students found in Trash.', 'school-theme'),
        'parent_item_colon' => __('Parent Students:', 'school-theme'),
        'all_items' => __('All Students', 'school-theme'),
        'archives' => __('student Archives', 'school-theme'),
        'attributes' => __('student Attributes', 'school-theme'),
        'insert_into_item' => __('Insert into student', 'school-theme'),
        'uploaded_to_this_item' => __('Uploaded to this student', 'school-theme'),
        'featured_image' => __('student featured image', 'school-theme'),
        'set_featured_image' => __('Set student featured image', 'school-theme'),
        'remove_featured_image' => __('Remove student featured image', 'school-theme'),
        'use_featured_image' => __('Use as featured image', 'school-theme'),
        'menu_name' => _x('Students', 'admin menu', 'school-theme'),
        'filter_items_list' => __('Filter Students list', 'school-theme'),
        'items_list_navigation' => __('Students list navigation', 'school-theme'),
        'items_list' => __('Students list', 'school-theme'),
        'item_published' => __('student published.', 'school-theme'),
        'item_published_privately' => __('student published privately.', 'school-theme'),
        'item_revereted_to_draft' => __('student reverted to draft.', 'school-theme'),
        'item_trashed' => __('student trashed.', 'school-theme'),
        'item_scheduled' => __('student scheduled.', 'school-theme'),
        'item_updated' => __('student updated.', 'school-theme'),
        'item_link' => __('student link.', 'school-theme'),
        'item_link_description' => __('A link to a student.', 'school-theme'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Students'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail'),
        // defines a block editor template for this CPT that consists of these 2 blocks (allow these 2, lock all others)
        'template' => array(array('core/paragraph'), array('core/button')),
        'template_lock' => 'all'
    );

    // [important] the first parameter 'fwd-students' is a unique key (use a prefix relating to your company to prevent conflicts if a client installs a plugin that also uses a 'students' parameter. fwd represents the course we're in right now)
    register_post_type('fwd-students', $args);

    // ++++++ STAFF CPT +++++
    // register staff custom post type
    $labels = array(
        'name' => _x('Staff', 'post type general name', 'school-theme'),
        'singular_name' => _x('staff', 'post type singular name', 'school-theme'),
        'add_new' => _x('Add New', 'staff', 'school-theme'),
        'add_new_item' => __('Add Staff Name', 'school-theme'),
        'edit_item' => __('Edit staff', 'school-theme'),
        'new_item' => __('New staff', 'school-theme'),
        'view_item' => __('View staff', 'school-theme'),
        'view_items' => __('View Staff', 'school-theme'),
        'search_items' => __('Search Staff', 'school-theme'),
        'not_found' => __('No Staff found.', 'school-theme'),
        'not_found_in_trash' => __('No Staff found in Trash.', 'school-theme'),
        'parent_item_colon' => __('Parent Staff:', 'school-theme'),
        'all_items' => __('All Staff', 'school-theme'),
        'archives' => __('staff Archives', 'school-theme'),
        'attributes' => __('staff Attributes', 'school-theme'),
        'insert_into_item' => __('Insert into staff', 'school-theme'),
        'uploaded_to_this_item' => __('Uploaded to this staff', 'school-theme'),
        'featured_image' => __('staff featured image', 'school-theme'),
        'set_featured_image' => __('Set staff featured image', 'school-theme'),
        'remove_featured_image' => __('Remove staff featured image', 'school-theme'),
        'use_featured_image' => __('Use as featured image', 'school-theme'),
        'menu_name' => _x('Staff', 'admin menu', 'school-theme'),
        'filter_items_list' => __('Filter Staff list', 'school-theme'),
        'items_list_navigation' => __('Staff list navigation', 'school-theme'),
        'items_list' => __('Staff list', 'school-theme'),
        'item_published' => __('staff published.', 'school-theme'),
        'item_published_privately' => __('staff published privately.', 'school-theme'),
        'item_revereted_to_draft' => __('staff reverted to draft.', 'school-theme'),
        'item_trashed' => __('staff trashed.', 'school-theme'),
        'item_scheduled' => __('staff scheduled.', 'school-theme'),
        'item_updated' => __('staff updated.', 'school-theme'),
        'item_link' => __('staff link.', 'school-theme'),
        'item_link_description' => __('A link to a staff member.', 'school-theme'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Staff'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title', 'editor', 'thumbnail'),
        // defines a block editor template for this CPT that consists of these 2 blocks (allow these 2, lock all others)
        'template' => array(array('core/heading'), array('core/paragraph')),
        'template_lock' => 'all'
    );

    // [important] the first parameter 'fwd-students' is a unique key (use a prefix relating to your company to prevent conflicts if a client installs a plugin that also uses a 'students' parameter. fwd represents the course we're in right now)
    register_post_type('fwd-staff', $args);

}
// custom post types run on the init hook
add_action('init', 'school_register_custom_post_types');

function school_register_taxonomies()
{
    // ++++++ STUDENT CATEGORY TAXONOMY +++++
    $labels = array(
        'name' => _x('Student Categories', 'taxonomy general name', 'school-theme'),
        'singular_name' => _x('Student Category', 'taxonomy singular name', 'school-theme'),
        'search_items' => __('Search Student Categories', 'school-theme'),
        'all_items' => __('All Student Category', 'school-theme'),
        'parent_item' => __('Parent Student Category', 'school-theme'),
        'parent_item_colon' => __('Parent Student Category:', 'school-theme'),
        'edit_item' => __('Edit Student Category', 'school-theme'),
        'view_item' => __('View Student Category', 'school-theme'),
        'update_item' => __('Update Student Category', 'school-theme'),
        'add_new_item' => __('Add New Student Category', 'school-theme'),
        'new_item_name' => __('New Student Category Name', 'school-theme'),
        'template_name' => __('Student Category Archives', 'school-theme'),
        'menu_name' => __('Student Category', 'school-theme'),
        'not_found' => __('No Student categories found.', 'school-theme'),
        'no_terms' => __('No Student categories', 'school-theme'),
        'items_list_navigation' => __('Student Categories list navigation', 'school-theme'),
        'items_list' => __('Student Categories list', 'school-theme'),
        'item_link' => __('Student Category Link', 'school-theme'),
        'item_link_description' => __('A link to a Student category.', 'school-theme'),
    );

    $args = array(
        // set 'hierarchical' to true if you want to be able to use hierarchy checkboxes, false to the textbox to type in for tags.
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menu' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'student-categories'),
    );
    // 2nd parameter specifies which post types this taxonomy applies to (taxonomies cant exist without posts)
    register_taxonomy('fwd-student-category', array('fwd-students'), $args);


    // ++++++ STAFF CATEGORY TAXONOMY +++++
    $labels = array(
        'name' => _x('Staff Categories', 'taxonomy general name', 'school-theme'),
        'singular_name' => _x('Staff Category', 'taxonomy singular name', 'school-theme'),
        'search_items' => __('Search Staff Categories', 'school-theme'),
        'all_items' => __('All Staff Category', 'school-theme'),
        'parent_item' => __('Parent Staff Category', 'school-theme'),
        'parent_item_colon' => __('Parent Staff Category:', 'school-theme'),
        'edit_item' => __('Edit Staff Category', 'school-theme'),
        'view_item' => __('View Staff Category', 'school-theme'),
        'update_item' => __('Update Staff Category', 'school-theme'),
        'add_new_item' => __('Add New Staff Category', 'school-theme'),
        'new_item_name' => __('New Staff Category Name', 'school-theme'),
        'template_name' => __('Staff Category Archives', 'school-theme'),
        'menu_name' => __('Staff Category', 'school-theme'),
        'not_found' => __('No Staff categories found.', 'school-theme'),
        'no_terms' => __('No Staff categories', 'school-theme'),
        'items_list_navigation' => __('Staff Categories list navigation', 'school-theme'),
        'items_list' => __('Staff Categories list', 'school-theme'),
        'item_link' => __('Staff Category Link', 'school-theme'),
        'item_link_description' => __('A link to a Staff category.', 'school-theme'),
    );

    $args = array(
        // set 'hierarchical' to true if you want to be able to use hierarchy checkboxes, false to the textbox to type in for tags.
        'hierarchical' => true,
        'labels' => $labels,
        // hide the UI for non-admin users (staff catefories).
        'show_ui' => current_user_can('update_core'),
        'show_in_menu' => true,
        'show_in_nav_menu' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'staff-categories'),

        // mod $args params and added capabilties
        'capabilities' => array(
            // rmv managing/adding for non-admins
            'manage_terms' => 'update_core',
            // rmv editing term names
            'edit_terms' => 'update_core',
            // rmv deleting terms
            'delete_terms' => 'update_core',
            // rmv the ability to select/apply dem
            'assign_terms' => 'edit_posts',
        ),

    );
    // 2nd parameter specifies which post types this taxonomy applies to (taxonomies cant exist without posts)
    register_taxonomy('fwd-staff-category', array('fwd-staff'), $args);
}
add_action('init', 'school_register_taxonomies');






// this function flushes rewrite rules on theme activation to ensure custom post types work correctly
function school_rewrite_flush()
{
    school_register_custom_post_types();
    school_register_taxonomies();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'school_rewrite_flush');

