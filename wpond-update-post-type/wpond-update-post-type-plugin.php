<?php
/*
Plugin Name: Register Update Post Type
Plugin URI: http://wattampond.com
Description: Plugin to register the custom post type of Update
Version: 1.0
Author: Samuel Hudson Campbell
Author URI:http://shcdesign.ca
Textdomain: wpond
License: GPLv2
*/
    // Add Update Post Type
    function wpond_register_post_type_update() {
        $labels = array(
            'name' => __('Updates', 'wpond'),
            'singular_name' => __('Update', 'wpond'),
            'add_new_item' => __('Add New Update', 'wpond'),
            'edit_item' => __('Edit Update', 'wpond'),
            'new_item' => __('New Update', 'wpond'),
            'view_item' => __('View Updates', 'wpond'),
            'search_items' => __('Search Updates', 'wpond'),
            'not_found' => __('No Updates Found', 'wpond'),
            'not_found_in_trash' => __('No Updates found in Trash', 'wpond'),
        );

        $args = array(
            'labels' => $labels,
            'has_archive' => true,
            'public' => true,
            'hierarchical' => false,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'custom-fields',
                'thumbnail',
                'page-attributes'
            ),
            'taxonomies' => array('status'),
            'rewrite' => array('slug' => 'update'),
            'show_in_rest' => true
        );

        register_post_type('wpond_update', $args);
    }
    add_action('init', 'wpond_register_post_type_update');
?>
