<?php
/*
Plugin Name: Register Rule Post Type
Plugin URI: http://wattampond.com
Description: Plugin to register the custom post type of Rules
Version: 1.0
Author: Samuel Hudson Campbell
Author URI:http://shcdesign.ca
Textdomain: wpond
License: GPLv2
*/
    // Add Rule Post Type
    function wpond_register_post_type_rule() {
        $labels = array(
            'name' => __('Rules', 'wpond'),
            'singular_name' => __('Rule', 'wpond'),
            'add_new_item' => __('Add New Rule', 'wpond'),
            'edit_item' => __('Edit Rule', 'wpond'),
            'new_item' => __('New Rule', 'wpond'),
            'view_item' => __('View Rules', 'wpond'),
            'search_items' => __('Search Rules', 'wpond'),
            'not_found' => __('No Rules Found', 'wpond'),
            'not_found_in_trash' => __('No Rules found in Trash', 'wpond'),
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
            'rewrite' => array('slug' => 'rule'),
            'show_in_rest' => true
        );

        register_post_type('wpond_rule', $args);
    }
    add_action('init', 'wpond_register_post_type_rule');
?>
