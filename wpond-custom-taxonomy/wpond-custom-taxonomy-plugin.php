<?php
/*
Plugin Name: Register Custom Taxonomy
Plugin URI: http://wattampond.com
Description: Plugin to register the custom taxonomy of status
Version: 1.0
Author: Samuel Hudson Campbell
Author URI:http://shcdesign.ca
Textdomain: wpond
License: GPLv2
*/

    //hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires

    add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );

    function create_topics_nonhierarchical_taxonomy() {

    // Labels part for the GUI

      $labels = array(
        'name' => _x( 'Status', 'taxonomy general name' ),
        'singular_name' => _x( 'Status', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Status' ),
        'all_items' => __( 'All Status' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Status' ),
        'update_item' => __( 'Update Status' ),
        'add_new_item' => __( 'Add New Status' ),
        'new_item_name' => __( 'New Status Name' ),
        'separate_items_with_commas' => __( 'Separate status with commas' ),
        'add_or_remove_items' => __( 'Add or remove status' ),
        'choose_from_most_used' => __( 'Choose from the most used status' ),
        'menu_name' => __( 'Status' ),
      );

    // Now register the non-hierarchical taxonomy like tag

      register_taxonomy('status','post',array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'status' ),
      ));
  }
?>
