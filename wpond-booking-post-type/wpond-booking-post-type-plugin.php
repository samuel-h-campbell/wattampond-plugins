<?php
/*
Plugin Name: Register Booking Post Type
Plugin URI: http://wattampond.com
Description: Plugin to register the custom post type of Booking
Version: 1.0
Author: Samuel Hudson Campbell
Author URI:http://shcdesign.ca
Textdomain: wpond
License: GPLv2
*/
    // Add Booking Post Type
    function wpond_register_post_type_booking() {
        $labels = array(
            'name' => __('Bookings', 'wpond'),
            'singular_name' => __('Book', 'wpond'),
            'add_new_item' => __('Add New Booking', 'wpond'),
            'edit_item' => __('Edit Booking', 'wpond'),
            'new_item' => __('New Booking', 'wpond'),
            'view_item' => __('View Bookings', 'wpond'),
            'search_items' => __('Search Bookings', 'wpond'),
            'not_found' => __('No Bookings Found', 'wpond'),
            'not_found_in_trash' => __('No Bookings found in Trash', 'wpond'),
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
            'rewrite' => array('slug' => 'booking'),
            'show_in_rest' => true
        );

        register_post_type('wpond_booking', $args);
    }
    add_action('init', 'wpond_register_post_type_booking');
?>
