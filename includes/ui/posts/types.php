<?php
/**
 * Plugin metabox Structures
 *
 * @package   uixv2
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 David Cramer
 */
$posttypes = array(
    'employee' => array(
        'base_color' => '#3498db',
        'post_type' => array(
            'label'                 => __( 'Employee', 'text-domain' ),
            'description'           => __( 'Employees Post Type', 'text-domain' ),
            'labels'                => array(
                'name'                  => _x( 'Employees', 'Post Type General Name', 'text-domain' ),
                'singular_name'         => _x( 'Employee', 'Post Type Singular Name', 'text-domain' ),
                'menu_name'             => __( 'Employees', 'text-domain' ),
                'name_admin_bar'        => __( 'Employee', 'text-domain' ),
                'archives'              => __( 'Employee Archives', 'text-domain' ),
                'parent_item_colon'     => __( 'Parent Employee:', 'text-domain' ),
                'all_items'             => __( 'All Employees', 'text-domain' ),
                'add_new_item'          => __( 'Add New Employee', 'text-domain' ),
                'add_new'               => __( 'Add New', 'text-domain' ),
                'new_item'              => __( 'New Employee', 'text-domain' ),
                'edit_item'             => __( 'Edit Employee', 'text-domain' ),
                'update_item'           => __( 'Update Employee', 'text-domain' ),
                'view_item'             => __( 'View Employee', 'text-domain' ),
                'search_items'          => __( 'Search Employee', 'text-domain' ),
                'not_found'             => __( 'Not found', 'text-domain' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'text-domain' ),
                'featured_image'        => __( 'Employee Picture', 'text-domain' ),
                'set_featured_image'    => __( 'Set employee picture', 'text-domain' ),
                'remove_featured_image' => __( 'Remove employee picture', 'text-domain' ),
                'use_featured_image'    => __( 'Use as employee picture', 'text-domain' ),
                'insert_into_item'      => __( 'Insert into employee', 'text-domain' ),
                'uploaded_to_this_item' => __( 'Uploaded to this employee', 'text-domain' ),
                'items_list'            => __( 'Employees list', 'text-domain' ),
                'items_list_navigation' => __( 'Employees list navigation', 'text-domain' ),
                'filter_items_list'     => __( 'Filter employees list', 'text-domain' ),
            ),
            'supports'              => array( 'title', 'thumbnail', ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-businessman',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,        
            'exclude_from_search'   => true,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        ),
    ),
);



return $posttypes;